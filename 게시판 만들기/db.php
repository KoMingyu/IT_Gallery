<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8'); //utf-8인코딩
    
    //'DB호스트주소','DB아이디','DB암호','DB이름'
    $db = new mysqli("localhost","root","1234","board");
    $db->set_charset("utf8");

    function mq($sql)
    {
        //global: 외부에서 선언된 $sql을 함수내에서 쓸 수 있도록 해줌
        global $db;
        return $db->query($sql);
    }
?>