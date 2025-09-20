<?php
    function insertAlbum($albumID){
        global $db;

        $sql = "INSERT INTO albums (spotify_ID) VALUES (:id)";
        $comm = $db->prepare($sql);
        $comm->bindParam(":id", $albumID, PDO::PARAM_STR);
        if ($comm->execute()) {
            return ["success" => true, "last_id" => $db->lastInsertId(), "output" => "Success at uploading album to db"];
        }
        else {
            return ["success" => false, "output" => "Error at uploading to database"];
        }
    }

    function getAllAlbums($limit){
        global $db;

        $sql = "SELECT * FROM albums LIMIT 0,$limit";
        $comm = $db->prepare($sql);
        $comm->execute();
        $data = $comm->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
?>