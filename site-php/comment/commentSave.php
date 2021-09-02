<?php
    include "../connect/connect.php";

    $youName = $_POST['youName'];
    $youText = $_POST['youText'];
    $regTime = time();

    $sql = "INSERT INTO myComment(youName, youText, regTime) VALUES('$youName','$youText','$regTime')";
    
    //$result = mysqli_query($connect, $sql);
    $result = $connect -> query($sql);

    if( $result ){
        echo "good";
    } else {
        echo "bad";
    }
?>

<script>
    location.href='../pages/comment.php#comment';
</script>