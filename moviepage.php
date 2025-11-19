<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/moviepage.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/offer.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>

    <header>
        <img class="logo" src="images/Logga(1).png">
    </header>


    <!-- BACKGROUND IMAGE, MOVIE POSTER, H1 & BUTTON -->
    <div class="moviepage-image-container">
        <img class="hero-img" src="/images/FILEZILLA.png">

        <section class="moviepage-movie-presentation">
            <h1>Filezilla - King of Monsters</h1>
            <img class="moviepage-poster" src="images/FILEZILLA.png">
            <button class="button-info">Get your tickets! <img src="images/button-arrow.png"></button>
        </section>

    </div>



    <section class="movie-information">
        <h2>Information</h2>
        <div class="info-boxes">
            <div class="info-box">Premiere 2/12</div>
            <div class="info-box">Horror</div>
            <div class="info-box">1h 57min</div>
            <div class="info-box">PG13</div>
        </div>
        <p><strong>About:</strong> The world is beset by the appearance of monstrous creatures,
            but one of them may be the only one who can save humanity.</p>
        <div class="movie-information-details">
            <p><strong>Director:</strong> </p>
            <p><strong>Actors:</strong> </p>
            <p><strong>Language:</strong> English</p>
        </div>

    </section>

    <!--GALLERY CAROUSEL-->
    <div class="secondary-background gallery-carousel">
        <h2>GALLERY</h2>
        <section class="carousel">
            <div class="card">
                <img src="">
            </div>

            <div class="card">
                <img src="">
            </div>

            <div class="card">
                <img src="">
            </div>

            <div class="card">
                <img src="">
            </div>
        </section>
    </div>

    <!-- DESKTOP ONLY: GALLERY GRID -->
    <div class="secondary-background" id="gallery-grid">
        <h2>GALLERY</h2>
        <div class="gallery-grid-container">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="divider-gold"></div>

    <!-- BOOKING MODULE -->
    <section class="booking-module">
        <div class="booking-module-text">
            <h2>Tickets</h2>
            <p><strong>Date</strong></p>
        </div>
        <div class="date-block-container">
            <div class="date-block">2/12</div>
            <div class="date-block" id="date-block-selected">3/12</div>
            <div class="date-block">4/12</div>
            <div class="date-block">5/12</div>
            <div class="date-block">6/12</div>
            <div class="date-block">7/12</div>
            <div class="date-block">7/12</div>
            <div class="date-block" id="more">></div>
        </div>
        <div class="booking-module-text">
            <p><strong>Time</strong></p>
        </div>
        <div class="time-block-container">
            <div class="time-block">10.00</div>
            <div class="time-block">12.30</div>
            <div class="time-block">15.00</div>
            <div class="time-block" id="date-block-selected">17.30</div>
            <div class="time-block">20.00</div>
            <div class="time-block">22.30</div>
        </div>
        <button class="button-info">Continue<img src="images/button-arrow.png"></button>
    </section>
    <div class="divider-gold"></div>

    <!--YOU MAY ALSO LIKE CAROUSEL-->
    <div class="secondary-background gallery-carousel">
        <h2>YOU MAY ALSO LIKE</h2>
        <section class="carousel">
            <div class="card">
                <img src="">
            </div>

            <div class="card">
                <img src="">
            </div>

            <div class="card">
                <img src="">
            </div>

            <div class="card">
                <img src="">
            </div>
        </section>
    </div>

    <?php

    require __DIR__ . "/footer.php";
