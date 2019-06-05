<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

//	$db = new mysqli("localhost","아이디","비밀번호","들어갈 DB");
	$db = new mysqli("localhost","root","","login");
	$db->set_charset("utf8");
    
	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>


<!--먼저 세션을 시작해주고, 아래 헤더함수는 인코딩 타입을 utf-8로 맞춰주는 함수입니다. 영문에서는 문제없겠지만 한글이 깨질 수 있기 때문에 사용해줍니다. $db에 mysql을 연결해줍니다. 저와 같이 new mysqli를 이용해서 간단하게 사용해도 되고,  mysqli를 사용해도 됩니다. new mysqli()에 들어가는 것은 'DB호스트주소','DB아이디','DB암호','DB이름'순으로입니다. 그리고 set_charset은 

DB문자열 utf-8 인코딩을 말합니다.아래는 mq라는 함수를 만들었는데, global은 외부에서 선언된 $sql를 함수내에서 쓸 수 있도록 해줍니다.-->