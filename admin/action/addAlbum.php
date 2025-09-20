<?php
    session_start();
    include "../../db.php";
    include "../include/ignoredFunc.php";
    include "../include/spotifyFunc.php";
    include "../include/dbFunc.php";

    $link = $_POST["link"] ?? false;
    if ($link === false) {
        exit(header("location: ../index.php"));
    }
    else {
        $albumID = getAlbumID($link);
        $insertAlbum = insertAlbum($albumID);
        $_SESSION["successInsertAlbum"] = $insertAlbum["success"];
        $_SESSION["outputInsertAlbum"] = $insertAlbum["output"];
        exit(header("location: ../index.php"));
    }
?>