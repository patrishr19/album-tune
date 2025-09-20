<?php
    include "../db.php";
    include "include/ignoredFunc.php";
    include "include/spotifyFunc.php";
    $clientInfo = getClientInfo();
    $clientID = $clientInfo["clientID"];
    $clientSecret = $clientInfo["clientSecret"];
    /*
    var_dump($clientID);
    var_dump($clientSecret);
    */
    $token = accessToken($clientID, $clientSecret);
    //ar_dump($token);
    $albumID = getAlbumID("https://open.spotify.com/album/28DJ00Yr5oOhH0uOUgTQwc");
    //var_dump($albumID);
    $album = fetchAlbumInfo($albumID, $token);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!empty($album)) {
        
        $duration = 0;
    ?>
        <h2><?=htmlspecialchars($album['name'])?></h2>
        <?php
            $artistsAll = [];
            foreach ($album["artists"] as $art) {
                $artistID = $art["id"];
                $artist = fetchArtistInfo($artistID, $token);
                $artistsAll[$artistID] = "<a href='" . $artist["external_urls"]["spotify"] . "' target='_blank'>". $artist["name"] ."</a>";
            }
            //var_dump($artistsAll);
            //var_dump($artist);
            if (count($artistsAll) > 1) {
                
        ?>
        <p>By: <?=implode(", ", $artistsAll)?></p>
        <?php } 
            else {
        ?>
        <p>By: <?=$artistsAll[$artistID]?></p>
        <?php } ?>
        <p>Total tracks: <?=$album["total_tracks"]?></p>
        <p>Release Date: <?=$album["release_date"]?></p>
        <p>Popularity: <?=$album["popularity"]?></p>
        <img src='<?=$album["images"][0]['url']?>'>
        <?php
            foreach ($album["tracks"]["items"] as $track) {
                $duration += $track["duration_ms"];
        ?>
        <p><?=$track["track_number"] . ". " . $track["name"]?></p>
        <?php
            }
            $totalSeconds = floor($duration / 1000);
            $minutes = floor($totalSeconds / 60);
            $seconds = $totalSeconds % 60;
        ?>
        <p>Duration: <?=$minutes?> min <?=$seconds?> sec</p>
    <?php
        }
    ?>
    <form action="action/addAlbum.php" method="post">
        <input type="text" name="link" placeholder="type spotify link">
        <input type="submit" value="submit">
    </form>
</body>
</html>