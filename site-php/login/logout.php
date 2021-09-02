<?php
    include '../connect/session.php';

    unset($_SESSION['memberID']);
    unset($_SESSION['youName']);
    unset($_SESSION['youEmail']);

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<script>
    location.href='../pages/main.php';
</script>