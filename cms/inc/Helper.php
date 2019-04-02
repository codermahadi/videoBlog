<?php
class Helper
{
    public function getTitle(){
        $titleHeader = explode('/', $_SERVER['SCRIPT_NAME']);
        explode('.',end( $titleHeader));
        $res =  explode('.',end( $titleHeader));
        echo strtoupper( str_replace('_', ' ', $res[0]));
    }
}