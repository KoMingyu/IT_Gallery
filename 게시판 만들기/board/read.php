<?php
    include $_SERVER['DOCUMENT_ROOT']."/게시판 만들기/db.php"; /*db load*/
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />  
</head>
<body>
    <?php
        $bno = $_GET['idx']; /*bno함수에 idx값을 받아와 넣음*/
        $hit = mysqli_fetch_array(mq("select * from board where idx = '".$bno."'"));
        $hit = $hit['hit'] + 1;
        $fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
        $sql = mq("select * from board where idx='".$bno."'"); /*받아온 idx값을 선택*/
        $board = $sql->fetch_array();
    ?>
    
    <!--글 불러오기-->
    <div id = "board_read">
        <h2><?php echo $board['title']; ?></h2>
            <div id="user_info">
                <?php echo $board['name']; ?>
                <?php echo $board['date']; ?>
                조회: <?php echo $board['hit']; ?>
                    <div id="bo_line"></div>
            </div>
            <div id="bo_content">
                <?php echo nl2br("$board[content]"); ?> <!--nl2br은 줄바꿈 형식--> 
            </div>
            
            <!--목록, 수정, 삭제-->
        <div id="bo_ser">
            <ul>
                <li><a href="/게시판 만들기">[목록으로]</a></li>
                <li><a gref="modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
                <li><a gref="modify.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
            </ul>
        </div>
    </div>
    
    <!--먼저 $bno에 idx값을 받아옵니다. 이 idx값은 해당 글번호를 불러옵니다. 이 GE값은 주소창에 있는 글 번호(숫자)를 가져옵니다. 

 다음엔 조회수카운트하는 부분이 있는데요. $hit변수에 board데이터베이스에서 idx값을 가지고 옵니다. 가지고오면 $hit변수에 hit라는 항목을 가지고 오고 이를 +1해줍니다. 그럼 $fet변수를 통해 hit가 업데이트되는 형식입니다. 즉 내가 3번글을 클릭했을 때 

$hit에서 3번글을 불러오고 3번글의 hit를 +1하여 $fet를 통해 hit가 업데이트됩니다. hit가 5일시 새로고침하거나 클릭시 계속 +1+1+1+1되는거죠.

$sql변수로 $bno변수에 저장된 글 번호와 board테이블의 idx값과 같은것을 가져옵니다. 

    게시판 각 항목들을 eho문으로 불러오고, content불러오는 부분에 nl2br이 있는데요 nl2br이란 php함수이며 새로운 줄을 표시하는 기호를 HTML에서 인식 할 수 있도록 br태그로 변환해주는 역할을 해줍니다. nl2br을 적용하지 않으면 아무리 엔터를 하더라도  글이 한줄로 이어지게됩니다.-->
</body>
</html>
