<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/app.css">
    <title>album</title>
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

<div class="album">
    <?php
    include "../script/php/DataProcessor.php";
    renderAllAlbum(getData("../script/data/mainData.json"))
    ?>
</div>


<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">New content</h1>
    </div>
    <p class="border-bottom"></p>
    <div class="contact-form-wrapper">
        <form action="#" method="POST" class="contact-form">
            <div class="form-content">
                <label class="form-laber" for="imgAlbum">ImgAlbum</label>
                <input class="form-input" id="imgAlbum" name="imgAlbum" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="nameAlbum">NameAlbum</label>
                <input class="form-input" id="nameAlbum" name="nameAlbum" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="priceAlbum">PriceAlbum</label>
                <input class="form-input" id="priceAlbum" name="priceAlbum" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="descriptionAlbum">Description</label>
                <textarea class="form-input" id="descriptionAlbum" name="descriptionAlbum" type="text" rows="5" cols="30"></textarea>
            </div>
            <div class="submit-button-wrapper">
                <input class="form-submit" type="submit"  name="Submit" value="Send">
            </div>
        </form>
    </div>
</div>

<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">New content</h1>
    </div>
    <p class="border-bottom"></p>
    <div class="contact-form-wrapper">
        <form action="#" method="POST" class="contact-form">
            <div class="form-content">
                <label class="form-laber" for="imgAlbum">Nick name</label>
                <input class="form-input" id="imgAlbum" name="nickname" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="nameAlbum">Name</label>
                <input class="form-input" id="nameAlbum" name="name" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="priceAlbum">gender</label>
                <input class="form-input" id="priceAlbum" name="gender" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="priceAlbum">link IMG</label>
                <input class="form-input" id="priceAlbum" name="gender" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="descriptionAlbum">Description</label>
                <textarea class="form-input" id="descriptionAlbum" name="descriptionAlbum" type="text" rows="5"
                          cols="30"></textarea>
            </div>
            <div class="submit-button-wrapper">
                <input class="form-submit" type="submit" name="Submit" value="Send">
            </div>
        </form>
    </div>
</div>

<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">New Song</h1>
    </div>
    <p class="border-bottom"></p>
    <div class="contact-form-wrapper">
        <form action="#" method="POST" class="contact-form">
            <div class="form-content">
                <label class="form-laber" for="nameSong">Name Song:</label>
                <input class="form-input" id="nameSong" name="nameSong" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="imageSong">Link Image Song:</label>
                <input class="form-input" id="imageSong" name="imageSong" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="iframeSpotify">IfremSpotify:</label>
                <input class="form-input" id="iframeSpotify" name="iframeSpotify" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="time">Time:</label>
                <input class="form-input" id="time" name="time" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="lyrics">Lyrics:</label>
                <textarea class="form-input" id="lyrics" name="lyrics" type="text" rows="5" cols="30"></textarea>
            </div>
            <div class="submit-button-wrapper">
                <input class="form-submit" type="submit"  name="Submit" value="Send">
            </div>
        </form>
    </div>
</div>


</body>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="../script/javascript/searchTongue.js"></script>
<script src="../script/javascript/main.js" ></script>
</html>