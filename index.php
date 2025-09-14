<?php
    session_start();
    include "db.php";
    include "admin/include/ignoredFunc.php";
    include "admin/include/spotifyFunc.php";
    $clientInfo = getClientInfo();
    $clientID = $clientInfo["clientID"];
    $clientSecret = $clientInfo["clientSecret"];

    $token = accessToken($clientID, $clientSecret);
    $albumID = getAlbumID("https://open.spotify.com/album/28DJ00Yr5oOhH0uOUgTQwc");
    $album = fetchAlbumInfo($albumID, $token);
    
    $cover = $album["images"][0]["url"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Tune</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">

    </div>
    <div class="wrapper">
        <div class="header mb-4">
            <div class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a href="../album-tune" class="navbar-brand"><img src="assets/img/navbar/logo.svg" alt="" class="invert"></a>
                    <!-- <a href="../album-tune" class="navbar-brand title">Album Tune</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle='collapse' data-bs-target='#navbarMain'>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id='navbarMain'>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort by
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Date ↑</a></li>
                                    <li><a class="dropdown-item" href="#">Date ↓</a></li>
                                    <li><a class="dropdown-item" href="#">Popularity ↑</a></li>
                                    <li><a class="dropdown-item" href="#">Popularity ↓</a></li>
                                </ul>
                            </li>
                            <form action="#" method="get" role="search" class="d-flex">
                                <input type="text" placeholder="Search" class="form-control bg-transparent text-white border border-white rounded-pill me-2 px-3" name="search">
                                <button class="btn" type="submit"><img src="assets/img/navbar/search.svg" alt="search" class="navbar-search-button"></button>
                            </form>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Submit Album</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Announcements</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Sign in</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-5 albumRow">
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="albumBox d-flex">
                        <img class="img-fluid mb-2" src='<?=$album["images"][0]['url']?>'>
                        <span>Add Violence</span>
                        <span>By: Nine Inch Nails</span>
                        <span>Released: 2017-5-21</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-3">
            <div class="row g-3 justify-content-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 d-flex">
                    <button type="button" class="btn btn-outline-light loadBtn flex-fill">
                        <span>Load more</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="d-flex justify-content-center footerRow">
                <a class="btn btn-outline-light rounded-0" href="https://www.instagram.com/patriks_borza/"><img src="assets/img/footer/instagram.svg" alt="Instagram"></a>
                <a class="btn btn-outline-light rounded-0" href="https://www.linkedin.com/in/patrik-borza-310124377/"><img src="assets/img/footer/linkedin.svg" alt="Linkedin"></a>
                <a class="btn btn-outline-light rounded-0" href="https://github.com/patrishr19"><img src="assets/img/footer/github.svg" alt="Github"></a>
            </div>
            <div class="info-box">
                <div class="foot">
                    <span class="name">Patrik Borza</span>
                    <span class="copyright">©2025</span>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const maxScroll = 1500; // how far scroll affects fade
    let opacityValue = Math.max(1 - scrollTop / maxScroll, 0);
    document.querySelector('.background').style.opacity = opacityValue;
});

</script>
</html>
<?php
    session_unset();
?>