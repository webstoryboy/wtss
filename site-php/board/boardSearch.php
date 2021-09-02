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
                    <?php
                        $searchKeyword = $_GET['searchKeyword'];
                        $searchOption = $_GET['searchOption'];

                        //echo $searchKeyword, $searchOption;

                        if( $searchKeyword == '' || $searchKeyword == null ){
                            echo "<p>검색어가 없습니다.</p>";
                        }
                    ?>
                    <section class="board">
                        <table>
                            <colgroup> 
                                <col style="width: 5%;" />
                                <col />
                                <col style="width: 10%;" />
                                <col style="width: 12%;" />
                                <col style="width: 7%;" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록자</th>
                                    <th>등록일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $searchKeyword = $connect -> real_escape_string($searchKeyword);
                                    $searchOption = $connect -> real_escape_string($searchOption);

                                    // $sql = "SELECT b.boardID, b.boardTitle, b.boardContent, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.memberID = b.memberID) WHERE b.boardTitle LIKE '%{$searchKeyword}%' ";
                                    // $sql = "SELECT b.boardID, b.boardTitle, b.boardContent, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.memberID = b.memberID) WHERE b.boardContent LIKE '%{$searchKeyword}%' ";
                                    
                                    $sql = "SELECT b.boardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.memberID = b.memberID) ";

                                    if( $searchKeyword == '' || $searchKeyword == null ){
                                        echo "<div class='search'><a href='board.php' class='form-btn write'>목록보기</a></div>";
                                        exit;
                                    }

                                    switch ($searchOption){
                                        case 'title':
                                            $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT 10";
                                            break;
                                        case 'content':
                                            $sql .= "WHERE b.boardContent LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT 10";
                                            break;
                                        case 'name':
                                            $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT 10";
                                            break;
                                    }
                                    //echo $sql;
                                    $result = $connect -> query($sql);
                                    
                                    if( $result ) { 
                                        $dataNum = $result -> num_rows;

                                        echo "<p>총 ".$dataNum." 건이 검색되었습니다.</p>";
                                        
                                        if( $dataNum > 0 ){
                                            for ( $i=1; $i<=$dataNum; $i++ ){
                                                $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                                echo "<tr>";
                                                echo "<td>".$memberInfo['boardID']."</td>";
                                                echo "<td class='left'><a href='boardView.php?boardID={$memberInfo['boardID']}'>".$memberInfo['boardTitle']."</a></td>";
                                                echo "<td>".$memberInfo['youName']."</td>";
                                                echo "<td>".date('Y-m-d', $memberInfo['regTime'])."</td>";
                                                echo "<td>".$memberInfo['boardView']."</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
                                        }
                                    } else {
                                        echo "에러 발생";
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="search mt10">
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