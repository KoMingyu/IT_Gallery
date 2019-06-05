<?php
    include "../db.php";
//    include "../password.php"; //password.php파일은 bcrypt암호화스크립트 파일(bcrypt는 PHP 5.3.7버전 이상에서 사용 가능, PHP5.5버전 이상에서는 내장함수로 포)

$userid = $_POST['userid'];
$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username = $_POST['name'];
$adress = $_POST['adress'];
$sex = $_POST['sex'];
$email = $_POST['email'].'@'.$_POST['emadress'];

$sql = mq("insert into member(id,pw,name,adress,sex,email) values('".$userid."','".$userpw."','".$username."','".$adress."','".$sex."','".$email."')");

$sql = mq("insert into trade_reply(con_num,name,content,date,secret) values('".$bno."','".$_SESSION['userid']."','".$_POST['content']."','".$date."','".$_POST['secret']."')"); 


?>


<meta charset="utf-8"/>
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">