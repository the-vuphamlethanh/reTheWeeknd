<?php

//function createSinger(){
//    $nameSinger = "aduayds";
//    return new Singer($nameSinger, $nickNameSinger, $gender, $description, $linkImage, []);
//}
//
//function addSinger(indexSinger, indexAlbum)
//{
//    $data = getData("../script/data/mainData.json");
//    $data[indexSinger]["listAlbum"][indexAlbum][] = new Album()
//    $newSinger =  createSinger();
//    $newSinger = (array)$newSinger;
//    $data[] = $newSinger; //push
//
//    echo "<br>";
//    $json = json_encode($data, JSON_UNESCAPED_UNICODE);
//    if (file_put_contents("../script/data/mainData.json", $json))
//        echo "JSON file created successfully...";
//    else
//        echo "Oops! Error creating json file...";
//    echo "<br>";
//}

function getData($link) {
    return json_decode(file_get_contents($link), true);
}

function getSongList($indexSinger, $indexAlbum){
    return getAlbum($indexSinger, $indexAlbum)["listSong"];
}

function getCategory($idCategory):string {
    $categoryList = getData("../script/data/category.json");
    foreach ($categoryList as $category){
        if ($category["idCategory"] == $idCategory){
            return $category["category"];
        }
    }
    return "";
}

function getAlbumCategory($songList): string
{
    $result = "";
    foreach ($songList as $song){
        $result .= getCategory($song["idCategory"]) . " | ";
    }
    return $result;
}

function renderSongList($songList){
    foreach ($songList as $song){
        echo
        '
        <li class="album--detailed__content__song">
            <img src="'.$song["imgSong"].'" alt="" class="song__img">
            <div class="song__name">
                '.$song["nameSong"].'
            </div>
            <span id="'.$song["iframeSpotify"].'" class="song__btn">
                <ion-icon name="play-outline"></ion-icon>
            </span>
        </li>
        ';
    }
}

function getAlbum($indexSinger, $indexAlbum){
    return getSingerAlbumList(getData("../script/data/mainData.json"), $indexSinger)[$indexAlbum];
}

function renderAllAlbum($singerList){
    for ($indexSinger = 0; $indexSinger < count($singerList); $indexSinger++){
        renderSingerAlbum($singerList, $indexSinger);
    }
}
//'.$url.'" id="'.$indexSinger.'$'.$indexAlbum.'
function renderSingerAlbum($singerList, $indexSinger){
    $albumList = getSingerAlbumList($singerList, $indexSinger);
    for ($indexAlbum = 0; $indexAlbum < count($albumList); $indexAlbum++){
        $url = "./albumDetail.php?indexSinger=$indexSinger&indexAlbum=$indexAlbum";
        echo '
            <a href="'.$url.'" onclick="pushKeyAlbumSession(this.id)" class="album__item">
                <div class="album__item--primary">
                    <div class="album__item--primary__img">
                        <img src="'.$albumList[$indexAlbum]["imgAlbum"].'" alt="">
                    </div>
                </div>
                <div class="album__item__description">
                    <div class="album__item__description__artist">'.$singerList[$indexSinger]["nicknameSinger"].'</div>
                    <div class="album__item__description__name">"'.$albumList[$indexAlbum]["nameAlbum"].'"</div>
                    <div class="album__item__description__price">'.$albumList[$indexAlbum]["priceAlbum"].'$</div>
                </div>
            </a>
            ';
    }
}

function getSingerAlbumList($singerList, $indexSinger){
    return $singerList[$indexSinger]["listAlbum"];
}

function renderAllSinger($singerList){
    foreach ($singerList as $singer){
        echo
        '<div class="artist__item">
            <div class="artist__item--primary">
                <div class="artist__item--primary__img">
                    <img src="'.$singer["linkImage"].'" alt="">
                </div>
            </div>
            <div class="album__item__description">
                <div class="album__item__description__name">"'.$singer["nicknameSinger"].'"</div>
            </div>
        </div>';
    }
}

function getSinger($indexSinger){
    return getData("../script/data/mainData.json")[$indexSinger];
}
//
//function getListAlbum($singerList, $indexSinger){
//    return $singerList[$indexSinger]["listAlbum"];
//}
//
//function renderListAlbum($singerList, $indexSinger){
//    $albumList = getListAlbum($singerList, $indexSinger);
//    foreach ($albumList as $album){
//
//    }
//}
//
//function getListSong($albumList, $indexAlbum){
//    return $albumList[$indexAlbum]["listSong"];
//}
//
//function renderAlbum($singerList){
//    foreach ($singerList as $singer){
//
//    }
//}

//function renderAlbum($data){
//    $indexSinger = 0;
//    foreach ($data as $singer){
////        $indexAlbum
//        foreach ($singer["listAlbum"] as $album){
//            echo '
//                <a href="" id="" onclick="pushKeyAlbumSession(this.id)" class="album__item">
//                    <div class="album__item--primary">
//                        <div class="album__item--primary__img">
//                            <img src="'.$album["imgAlbum"].'" alt="">
//                        </div>
//                    </div>
//                    <div class="album__item__description">
//                        <div class="album__item__description__artist">'.$singer["nicknameSinger"].'</div>
//                        <div class="album__item__description__name">"'.$album["nameAlbum"].'"</div>
//                        <div class="album__item__description__price">'.$album["priceAlbum"].'$</div>
//                    </div>
//                </a>
//            ';
//        }
//        $indexSinger ++;
//    }
//}

//function renderSong($data){
//    foreach ($data as $singer){
//        foreach ($singer["listAlbum"] as $album){
//            echo '
//                <a href="" class="album__item">
//                    <div class="album__item--primary">
//                        <div class="album__item--primary__img">
//                            <img src="'.$album["imgAlbum"].'" alt="">
//                        </div>
//            <!--            <div class="album__item&#45;&#45;primary__tag">@album</div>-->
//                    </div>
//                    <div class="album__item__description">
//                        <div class="album__item__description__artist">'.$singer["nicknameSinger"].'</div>
//                        <div class="album__item__description__name">"'.$album["nameAlbum"].'"</div>
//                        <div class="album__item__description__price">'.$album["priceAlbum"].'$</div>
//                    </div>
//                </a>
//            ';
//        }
//    }
//}





