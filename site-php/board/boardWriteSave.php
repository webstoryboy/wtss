<?php
    include '../connect/connect.php';
    include '../connect/session.php';

    $boardTitle = $_POST['boardTitle'];
    $boardContent = $_POST['boardContent'];
    
    // echo $boardTitle, $boardContent;
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContent = $connect -> real_escape_string($boardContent);
    $boardView = 0;
    $regTime = time();
    $memberID = $_SESSION['memberID'];

    $sql = "INSERT INTO myBoard(memberID, boardTitle, boardContent, boardView, regTime) 
            VALUES('$memberID','$boardTitle','$boardContent','$boardView', '$regTime')";
                
    $result = $connect -> query($sql);

    // if($result){
    //     echo "good";
    // } else {
    //     echo "bad";
    // }
?>

<script>
    location.href='board.php';
</script>