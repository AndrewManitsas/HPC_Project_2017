<?php
    session_start();
    include("database_config.php");

    $cid = $_SESSION['uid'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $sql = "INSERT INTO `projects` (`proj_id`, `cid`, `title`, `description`, `uid`) VALUES (NULL, '$cid', '$title', '$desc', NULL)";
    $result = mysqli_query($connect, $sql);

    header("Location: index.php");
?>