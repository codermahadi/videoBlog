<?php
/**
 * Created by PhpStorm.
 * User: Geniality Raj
 * Date: 20-Mar-19
 * Time: 11:40 AM
 */

class User
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    public function userLogin($data)
    {

        $email = $data['email'];
        $password = md5($data['password']);

        if ($email == '' OR $password == '') {
            $msg = "<div class='alert alert-danger'><strong>Error !</strong> Field must not be Empty </div>";
            return $msg;
        }
       $result = $this->getLoginUser($email, $password);
        if ($result) {
            Session::init();
            Session::set("login", true);
            Session::set("id", $result->id);
            Session::set("username", $result->username);
            Session::set("photo", $result->photo);
            Session::set("loginmsg", "<div class='alert alert-success'><strong>Success ! </strong>You are logged in.   <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span></button> </div>" );
            echo "<script>location.href='cms/index.php'</script>";
        } else {
            $msg = "<div class='alert alert-danger'><strong>Error !</strong> Email Or Password Wrong ! Try Again!</div>";
            return $msg;
        }
    }

    private function getLoginUser($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
}