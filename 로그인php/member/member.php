<?php
    include "../db.php";    //db.php 연동
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>회원가입 폼</title>
    </head>
    <body>
        <!--method: 전송방식(get/post) action:전송할 위치-->
        <form method="post" action="member_ok.php">
            <h1>회원가입 폼</h1>
            <fieldset>
                <legend>입력사항</legend>
                <table>
                    <tr>
                        <td>아이디</td>
                        <td><input type="text" size="35" name="userid" placeholder="아이디 입력"></td>
                    </tr>
                    <tr>
                        <td>비밀번호</td>
                        <td><input type="password" size="35" name="userpw" placeholder="비밀번호 입력"></td>
                    </tr>
                    <tr>
                        <td>이름</td>
                        <td><input type="text" size="35" name="name" placeholder="이름 입력"></td>
                    </tr>
                    <tr>
                        <td>주소</td>
                        <td><input type="text" size="35" name="adress" placeholder="주소 입력"></td>
                    </tr>
                    <tr>
                        <td>성별</td>
                        <td>
                            남<input type="radio" name="sex" value="남">
                            여<input type="radio" name="sex" value="여">
                        </td>
                    </tr>
                    <tr>
                        <td>이메일</td>
                        <td>
                            <input type="text" name="email">@
                                <select name="emadress">
                                    <option value="hanmail.com">hanmail.com</option>
                                    <option value="naver.com">naver.com</option>
                                    <option value="gmail.com">gmail.com</option>
                                    <option value="nate.com">nate.com</option>
                                    <option value=""></option>
                                </select>
                        </td>
                    </tr>
                </table>
                
                <input type="submit" value="가입하기"/>
                <input type="reset" value="다시쓰기"/>
            </fieldset>
        </form>
        
    </body>
</html>