<?php
    include '../connect/connect.php';
    include '../connect/session.php';

    for( $i=1; $i<=100; $i++ ){
        $regTime = time();

        $sql = "INSERT INTO myBoard(memberID, boardTitle, boardContent, boardView, regTime) 
            VALUES('2', '게시판 제목입니다.${i}', '게시글 내용입니다.${i}', '1', '$regTime')";
        $result = $connect -> query($sql);

        if($result){
            echo "{$i} data input complete <br>";
        } else {
            echo "{$i} data input false <br>";
        }
    }
?>