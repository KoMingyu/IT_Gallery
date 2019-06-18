<?php

    include $_SERVER['DOCUMENT_ROOT']."/게시판 만들기/db.php";
    
    //(date함수: 현재시간을 나타내는 함수-> 시간으로 기록 Y-m-d H:i:s)
    $date = date('Y-m-d');

    $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    //$sql변수에 SQL문을 작성
    $sql = mq("insert into board(name,pw,title,content,date) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."')");
?>
<script type="text/javascript">
    alert("글쓰기 완료되었습니다.");
    location.href="../index.php";
</script>
<!--index.php(목록페이지)로 넘어가기( 자바스크립트의 location.href="경로";를 사용해도 된다)-->
<!--<meta http-equiv="refresh" content="0 url=/" />-->


<!--
$userpw변수에는 입력한 비밀번호를 암화하 하는 부분
:password_hash는 부호화이고 password_hash와 password_default는 php 내장 함수 입니다.(PHP5버전 이상부터 내장함수로 사용할 수 있음)
-->