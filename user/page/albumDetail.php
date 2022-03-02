<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/app.css">
    <title>album detail</title>
</head>

<?php
include "../script/php/DataProcessor.php";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$components = parse_url($actual_link);
parse_str($components['query'], $results);
$indexSinger = intval($results["indexSinger"]);
$indexAlbum = intval($results["indexAlbum"]);
?>

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
<!---->

<div class="album--detailed">
    <div class="album--detailed__img">
        <img src="<?php echo getAlbum($indexSinger, $indexAlbum)["imgAlbum"]; ?>" alt="">
    </div>
    <div class="album--detailed__content">
        <div class="album--detailed__content__name">
            <span class="highlight">"<?php echo getAlbum($indexSinger, $indexAlbum)["nameAlbum"]; ?>"</span>
        </div>
        <div class="album--detailed__content__price">
            <?php echo getAlbum($indexSinger, $indexAlbum)["priceAlbum"];?>$
        </div>
        <div class="album--detailed__content__artist">
            <img src="<?php echo getSinger($indexSinger)["linkImage"]; ?>" alt="" class="artist__img">
            <div class="artist__name"><span class="highlight"><?php echo getSinger($indexSinger)["nicknameSinger"]; ?></span></div>
        </div>
        <div class="album--detailed__content__category">
            <span><?php echo getAlbumCategory(getSongList($indexSinger, $indexAlbum)) ?></span>
        </div>
        <ul class="album--detailed__content__list">
            <?php
            renderSongList(getSongList($indexSinger, $indexAlbum));
            ?>
        </ul>
    </div>
</div>

</body>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="../script/javascript/searchTongue.js"></script>
</html>