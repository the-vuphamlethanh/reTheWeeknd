<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/app.css">
    <title>search</title>
</head>
<body>

<div class="search__wrap">
    <div class="hotKeyWord">
        "The Weeknd"
    </div>
    <div class="search__container">
        <div class="btn--search">
            <ion-icon name="search-outline"></ion-icon>
        </div>
        <input type="text">
    </div>
    <div class="btn--close">
        <ion-icon name="close-outline"></ion-icon>
    </div>
</div>

<div class="header">
    <div class="header__btn--menu"></div>
    <div class="header__logo">
        <img src="https://cache.umusic.com/_sites/_halo/theweeknd5/images/tw-sitelogo.png" alt="">
    </div>
    <ul class="header__nav">
        <li class="header__nav__item">
            <a href="" class="header__nav__item__link">HOME</a>
            <div class="underline"></div>
        </li>
        <li class="header__nav__item" id="index">
            <a href="" class="header__nav__item__link">ALBUM</a>
            <div class="underline"></div>
        </li>
        <li class="header__nav__item">
            <a href="" class="header__nav__item__link">NEWS</a>
            <div class="underline"></div>
        </li>
        <li class="header__nav__item">
            <a href="" class="header__nav__item__link">RSONG</a>
            <div class="underline"></div>
        </li>
    </ul>
    <div class="header__btn--search">
        <ion-icon id="search" name="search-outline"></ion-icon>
    </div>
</div>



<div class="fakeHeaderSpace">

</div>
<div class="fakeHeaderSpace">

</div>

<div class="search__result">
    <div class="search__result__album">
        <div class="result__title highlight">
            ALBUM
        </div>
        <div class="result__album__container result">
            <div class="album__item">
                <div class="album__item--primary">
                    <div class="album__item--primary__img">
                        <img src="https://www.theweeknd.com/sites/g/files/aaj14496/f/styles/suzuki_breakpoints_image_mobile-lg_sq/public/release/202103/ab67616d0000b273274b406a7e18acebcf743079.jpg?itok=JUd3shfn" alt="">
                    </div>
                    <!--            <div class="album__item&#45;&#45;primary__tag">@album</div>-->
                </div>
                <div class="album__item__description">
                    <div class="album__item__description__artist">The Weeknd</div>
                    <div class="album__item__description__name">"BLINDING LIGHT"</div>
                    <div class="album__item__description__price">1000$</div>
                </div>
            </div>
            <div class="album__item">
                <div class="album__item--primary">
                    <div class="album__item--primary__img">
                        <img src="https://www.theweeknd.com/sites/g/files/aaj14496/f/styles/suzuki_breakpoints_image_mobile-lg_sq/public/release/202110/ab67616d0000b273c3ee50b0720f476670e16407.jpg?itok=AbS_Hkfq" alt="">
                    </div>
                    <!--            <div class="album__item&#45;&#45;primary__tag">@album</div>-->
                </div>
                <div class="album__item__description">
                    <div class="album__item__description__artist">The Weeknd</div>
                    <div class="album__item__description__name">"BLINDING LIGHT ASDSADK"</div>
                    <div class="album__item__description__price">1000$</div>
                </div>
            </div>
            <div class="album__item">
                <div class="album__item--primary">
                    <div class="album__item--primary__img">
                        <img src="https://www.theweeknd.com/sites/g/files/aaj14496/f/styles/suzuki_breakpoints_image_tablet_sq/public/release/202108/TMB.jpg?itok=OW5CGl5Z" alt="">
                    </div>
                    <!--            <div class="album__item&#45;&#45;primary__tag">@album</div>-->
                </div>
                <div class="album__item__description">
                    <div class="album__item__description__artist">The Weeknd</div>
                    <div class="album__item__description__name">"BLINDING LIGHT"</div>
                    <div class="album__item__description__price">1000$</div>
                </div>
            </div>
            <div class="album__item">
                <div class="album__item--primary">
                    <div class="album__item--primary__img">
                        <img src="https://www.theweeknd.com/sites/g/files/aaj14496/f/styles/suzuki_breakpoints_image_mobile-lg_sq/public/release/202002/ab67616d0000b27380e1e80874a5b25317c380c5.jpg?itok=kG1xcFML" alt="">
                    </div>
                    <!--            <div class="album__item&#45;&#45;primary__tag">@album</div>-->
                </div>
                <div class="album__item__description">
                    <div class="album__item__description__artist">The Weeknd</div>
                    <div class="album__item__description__name">"BLINDING LIGHT"</div>
                    <div class="album__item__description__price">1000$</div>
                </div>
            </div>
        </div>
    </div>
    <div class="fakeHeaderSpace">

    </div>
    <div class="search__result__artist">
        <div class="result__title highlight">
            ARTIST
        </div>
        <div class="result__artist__container result">
            <?php
            include "../script/php/DataProcessor.php";
            renderAllSinger(getData("../script/data/mainData.json"))
            ?>
        </div>
    </div>
</div>

<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6OSWTtSplw9SWv33aDmKWB?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>

</body>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="../script/javascript/searchTongue.js"></script>
</html>