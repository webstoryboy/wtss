<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    include '../connect/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="wrap">
        <!-- header -->
        <header id="header">
            <?php
                include '../include/header.php';
            ?>
        </header>
        <!-- //header -->
        <main>
            <section id="mainContent">
                <h2 class="screen_out">메인 컨텐츠</h2>
                <article class="content-article">
                    <h3>게시판</h3>
                    <p>가장 빠른 새소식 업데이트</p>
                    <section class="boardView">
                        <table>
                            <colgroup>
                                <col style="width: 30%" />
                                <col style="width: 70%" />
                            </colgroup>
                            <tbody>
                                <?php
                                    if( isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
                                        $boardID = $_GET['boardID'];

                                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (b.memberID = m.memberID) WHERE b.boardID = {$boardID}";
                                        $result = $connect -> query($sql);
                                        
                                        $view = "UPDATE myBoard SET boardView = boardView+1 WHERE boardID = {$boardID}";
                                        $connect -> query($view);
                                        
                                        if( $result ){
                                            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

                                            echo "<tr><th>제목</th><td class='left'>".$memberInfo['boardTitle']."</td></tr>";
                                            echo "<tr><th>글쓴이</th><td class='left'>".$memberInfo['youName']."</td></tr>";
                                            echo "<tr><th>등록일</th><td class='left'>".date('Y-m-d H:i', $memberInfo['regTime'])."</td></tr>";
                                            echo "<tr><th>조회수</th><td class='left'>".$memberInfo['boardView']."</td></tr>";
                                            echo "<tr><th class='height'>내용</th><td class='left height'>".nl2br($memberInfo['boardContent'])."</td></tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="btn">
                            <a href="boardModify.php?boardID=<?=$_GET['boardID']?>" class="form-btn write">수정하기</a>
                            <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" class="form-btn write" onclick="return confirm('정말 삭제하시겠습니까?')">삭제하기</a>
                            <a href="board.php" class="form-btn write">목록보기</a>
                        </div>
                    </section>
                </article>
            </section>
        </main>
        <!-- footer -->
        <footer id="footer">
            <?php
                include '../include/footer.php';
            ?>
        </footer>
        <!-- //footer -->
    </div>
    
</body>
</html>