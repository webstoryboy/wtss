<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    include '../connect/sessionCheck.php';

    if( isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];

        $boardID = $connect -> real_escape_string($boardID);

        $sql = "DELETE FROM myBoard WHERE boardID = {$boardID}";
        $connect -> query($sql);
    }
?>

<script>
    location.href = "board.php";
</script>