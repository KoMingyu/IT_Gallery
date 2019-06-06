<?php
include "db.php"; ?> <!---db.php 연결-->

<!--php 안에 html을 삽입 할 수 있다.-->
<!DOCTYPE html>
<html>
   <head>
        <meta charset="utf-8"/>
        <title>회원가입 및 로그인 사이트</title>
        <link rel="stylesheet" type="text/css" href="/css/common.css" />
    </head>
    <body>
        <div id="login_box">
            <h2>로그인</h2>
            <!--method: 전송방식(get/post) action:전송할 위치-->
            <form method="post" action="/login/login_ok.php">
                <table align="center" border="0" cellspacing="0" width="300">
                    <tr>
                        <td width="130" colspan="1">
                            <input type="text" name="userid" class="inph">
                        </td>
                        <td rowspan="2" align="center" width="100">
                            <button type="submit" id="btn">로그인</button>
                        </td>
                    </tr>
                    <tr>
                        <td width="130" colspan="1">
                            <input type="password" name="userpw" class="inph">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center" class="mem">>
                            <a href="member/member.php">회원가입 하시겠습니까?</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
