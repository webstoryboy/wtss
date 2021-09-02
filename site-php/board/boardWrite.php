<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
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
                    <h3>글쓰기</h3>
                    <p>게시글을 작성해주세요!</p>
                    
                    <section class="boardWrite">
                        <form action="boardWriteSave.php" name="boardWrite" method="post">
                            <fieldset>
                                <legend class="screen_out">게시판 작성 영역입니다.</legend>
                                <div>
                                    <label for="boardTitle">제목</label>
                                    <input type="text" name="boardTitle" id="boardTitle" class="title-text" placeholder="제목을 작성해주세요!" required autofocus />
                                </div>
                                <div>
                                    <label for="boardContent">내용</label>
                                    <textarea name="boardContent" id="boardContent" class="title-text" rows="13" placeholder="내용을 작성해주세요!" required></textarea>
                                </div>
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