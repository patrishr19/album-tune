<?php
    function accessToken($clientID, $clientSecret){
        $connection = curl_init();
        curl_setopt($connection, CURLOPT_URL, "https://accounts.spotify.com/api/token");
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($connection, CURLOPT_POST, 1);
        curl_setopt($connection, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($connection, CURLOPT_HTTPHEADER, [
            "Authorization: Basic " . base64_encode($clientID . ":" . $clientSecret),
            "Content-Type: application/x-www-form-urlencoded"
        ]);
        $response = curl_exec($connection);
        curl_close($connection);
        $spData = json_decode($response, true);
        $token = $spData["access_token"];
        return $token;
    }

    function getAlbumID($url){
        $id = basename(parse_url($url, PHP_URL_PATH));
        return  $id;
    }

    function fetchAlbumInfo($id, $token){
        $connection = curl_init();
        curl_setopt($connection, CURLOPT_URL, "https://api.spotify.com/v1/albums/" . $id);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($connection, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer " . $token
        ]);
        $response = curl_exec($connection);
        curl_close($connection);
        $album = json_decode($response, true);
        return $album;
    }

    function fetchArtistInfo($artistID, $token){

        $connection = curl_init();
        curl_setopt($connection, CURLOPT_URL, "https://api.spotify.com/v1/artists/" . $artistID);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($connection, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer " . $token
        ]);
        $response = curl_exec($connection);
        curl_close($connection);
        $artist = json_decode($response, true);
        return $artist;
    }
?>