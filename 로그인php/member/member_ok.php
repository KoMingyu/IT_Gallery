<?php
    include "../db.php";
    include "../password.php"; //password.php파일은 bcrypt암호화스크립트 파일(bcrypt는 PHP 5.3.7버전 이상에서 사용 가능, PHP5.5버전 이상에서는 내장함수로 포)

/*$변수 = 보내는 방식[name]*/
$userid = $_POST['userid'];
//hash는 암호를 암호화 시키는 것
$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username = $_POST['name'];
$adress = $_POST['adress'];
$sex = $_POST['sex'];
$email = $_POST['email'].'@'.$_POST['emadress'];

//db들어갈 sql명령어
$sql = mq("insert into member(id,pw,name,adress,sex,email) values('".$userid."','".$userpw."','".$username."','".$adress."','".$sex."','".$email."')");

//?머지?
$sql = mq("insert into trade_reply(con_num,name,content,date,secret) values('".$bno."','".$_SESSION['userid']."','".$_POST['content']."','".$date."','".$_POST['secret']."')"); 


?>


<meta charset="utf-8"/>
<script type="text/javascript">
    alert('회원가입이 완료되었습니다.');
</script>
<!--Refresh 옵션 
CONTENT속성에 지정된 숫자만큼의 시간이 지나면 세미콜론 다음의 다른 
웹 페이지로의 이동 또는 멀티미디어파일을 실행하는지를 지정합니다.-->
<meta http-equiv="refresh" content="0 url=/">