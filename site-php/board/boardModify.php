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
                    <h3>수정하기</h3>
                    <p>제목과 내용을 수정할 수 있습니다.</p>
                    
                    <section class="boardWrite">
                        <form action="boardModifySave.php" name="boardWrite" method="post">
                            <fieldset>
                                <legend class="screen_out">게시판 작성 영역입니다.</legend>
                                <?php
                                    if( isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
                                        $boardID = $_GET['boardID'];

                                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (b.memberID = m.memberID) WHERE b.boardID = {$boardID}";
                                        $result = $connect -> query($sql);
                                        
                                        if( $result ){
                                            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<div style='display:none'>";
                                            echo "<label for='boardID'>번호</label>";
                                            echo "<input type='text' name='boardID' id='boardID' class='title-text' value='".$_GET['boardID']."' />";
                                            echo "</div>";
                                            echo "<div>";
                                            echo "<label for='boardTitle'>제목</label>";
                                            echo "<input type='text' name='boardTitle' id='boardTitle' class='title-text' value='".$memberInfo['boardTitle']."' />";
                                            echo "</div>";
                                            echo "<div>";
                                            echo "<label for='boardContent'>내용</label>";
                                            echo "<textarea name='boardContent' id='boardContent' rows='13'>".$memberInfo['boardContent']."</textarea>";
                                            echo "</div>";
                                            echo "<div class='mt20'>";
                                            echo "<label for='boardPass'>비밀번호</label>";
                                            echo "<input type='password' name='boardPass' id='boardPass' class='title-text' placeholder='로그인 비밀번호를 입력해주세요!' autocomplete='off' require />";
                                            echo "</div>";
                                        }
                                    }
                                ?>
                            </fieldset>
                            <button class="writeBoardBtn" type="submit" value="저장하기">저장하기</button>
                        </form>
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