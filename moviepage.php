<?php require_once __DIR__ . "/header.php"; ?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/moviepage.css">
    <link rel="stylesheet" href="css/offer.css">
    <link rel="stylesheet" href="css/media.css">

</head>

<body>

    <header>
        <img class="logo" src="images/Logga(1).png">
    </header> -->

<!-- BACKGROUND IMAGE, MOVIE POSTER, H1 & BUTTON -->
<section class="moviepage-movie-presentation">
    <div class="moviepage-image-container">
        <h1 class="moviepage-movie-presentation-h1">Filezilla - King of Monsters</h1>
        <img class="moviepage-poster" src="images/FILEZILLA.png">
        <button class="button-info">Get your tickets! <img src="images/button-arrow.png"></button>
    </div>

</section>


<section class="moviepage-movie-information">
    <h2>Information</h2>
    <div class="moviepage-info-boxes">
        <div class="moviepage-info-box">Premiere 2/12</div>
        <div class="moviepage-info-box">Horror</div>
        <div class="moviepage-info-box">1h 57min</div>
        <div class="moviepage-info-box">PG13</div>
    </div>
    <p><strong>About:</strong> The world is beset by the appearance of monstrous creatures,
        but one of them may be the only one who can save humanity.</p>
    <div class="moviepage-movie-information-details">
        <p><strong>Director:</strong> Rickard Almgren</p>
        <p><strong>Actors:</strong> Tyrannousaurus Flex, Clawdette Wilson, Gittan Hubert, </p>
        <p><strong>Language:</strong> English</p>
    </div>

</section>

<!--GALLERY CAROUSEL-->
<div class="secondary-background moviepage-gallery-carousel moviepage-carousel">
    <h2>GALLERY</h2>
    <section class="carousel">
        <div class="card">
            <img src="/images/filezilacrazy.png">
        </div>

        <div class="card">
            <img src="/images/filezilawine.png">
        </div>

        <div class="card">
            <img src="/images/filezillacute.png">
        </div>

        <div class="card">
            <img src="/images/filezillathink.png">
        </div>
    </section>
</div>

<!-- DESKTOP ONLY: GALLERY GRID -->
<div class="secondary-background" id="moviepage-gallery-grid">
    <h2>GALLERY</h2>
    <div class="moviepage-gallery-grid-container">
        <div><img src="/images/filezillathink.png" alt=""></div>
        <div><img src="/images/filezilawine.png" alt=""></div>
        <div><img src="/images/filezillacute.png" alt=""></div>
        <div><img src="/images/filezilacrazy.png" alt=""></div>
    </div>
</div>

<div class="divider-gold"></div>

<!-- BOOKING MODULE -->
<section class="moviepage-booking-module">
    <div class="moviepage-booking-module-text">
        <h2>Tickets</h2>
        <p><strong>Date</strong></p>
    </div>
    <div class="moviepage-date-block-container">
        <div class="moviepage-date-block">2/12</div>
        <div class="moviepage-date-block" id="moviepage-date-block-selected">3/12</div>
        <div class="moviepage-date-block">4/12</div>
        <div class="moviepage-date-block">5/12</div>
        <div class="moviepage-date-block">6/12</div>
        <div class="moviepage-date-block">7/12</div>
        <div class="moviepage-date-block">7/12</div>
        <div class="moviepage-date-block" id="moviepage-booking-module-more">></div>
    </div>
    <div class="moviepage-booking-module-text">
        <p><strong>Time</strong></p>
    </div>
    <div class="moviepage-time-block-container">
        <div class="moviepage-time-block">10.00</div>
        <div class="moviepage-time-block">12.30</div>
        <div class="moviepage-time-block">15.00</div>
        <div class="moviepage-time-block" id="moviepage-date-block-selected">17.30</div>
        <div class="moviepage-time-block">20.00</div>
        <div class="moviepage-time-block">22.30</div>
    </div>
    <button class="button-info">Continue<img src="images/button-arrow.png"></button>
</section>
<div class="divider-gold"></div>

<!--YOU MAY ALSO LIKE CAROUSEL-->
<div class="secondary-background moviepage-carousel">
    <h2>Coming soon!</h2>
    <section class="carousel">

        <div class="card">
            <img src="/images/GreatGitsby.png">
        </div>

        <div class="card">
            <img src="/images/Brokebackend.png">

        </div>
        <div class="card">
            <img src="/images/GOODWILLCODING.png">
        </div>

        <div class="card">
            <img src="/images/gitPullfiction.png">
        </div>

        <div class="card">
            <img src="/images/commitment.png">
        </div>

        <div class="card">
            <img src="/images/nowyoucme.png">
        </div>

        <div class="card">
            <img src="/images/dieploy.png">
        </div>

        <div class="card">
            <img src="/images/Undefined.png">
        </div>

    </section>

</div>

<?php

require __DIR__ . "/footer.php";
