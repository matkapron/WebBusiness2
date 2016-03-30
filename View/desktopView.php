<!DOCTYPE html>
<html>
<head>
    <title>Magiczny Krak�w</title>
    <link href="../css/bajery.css" rel="stylesheet">
</head>

<body>
<center><h1 id="mainTitle" onclick="zamienTekst()">Magiczny Krak�w - DESKTOP</h1></center>

<center><img id="rynekPanorama" src="../img/desktop/rynek_panorama.jpg" alt="rynek_panorama" height="300" width="1000" align="middle" ></center>

<center>
    <ol id="menu">
        <li><a href="View/desktopView.php"><b>Strona g��wna</b></a></li>
        <li><a href="#2"><b>Zabytki</b></a>
            <ul>
                <li><a href="#21">Smok wawelski</a></li>
                <li><a href="#22">Wawel</a>
                    <ol>
                        <li><a href="#221">Historia</a></li>
                        <li><a href="#222">Mapa budynk?w</a></li>
                        <li><a href="#223">Cennik</a></li>
                    </ol>
                </li>
                <li><a href="#23">Rynek g??wny</a></li>
                <li><a href="#24">Kazimierz</a></li>
                <li><a href="#25">Ko?ci? Mariacki</a></li>
            </ul>
        </li>
        <li><a href="turystyka.html"><b>Turystyka</b></a>
            <ul>
                <li><a href="#31">Noclegi</a></li>
                <li><a href="#32">Restauracje</a> </li>
                <li><a href="#33">Punkty informacyjne</a></li>
            </ul>
        </li>
        <li><a href="#4"><b>Galeria</b></a></li>
        <li><a href="kontakt.html"><b>Kontakt</b></a></li>
    </ol>
</center>
<p style="" id="smokText">
    <b>Smok wawelski </b>
    <a href="https://pl.wikipedia.org/wiki/Smok_wawelski">(wiki)</a>
    - legendarny smok,
</p>
<center><img id="smokImg" onclick="changeDragon()" src="../img/smok.jpg" alt="smok" height="500" width="400" align="middle" usemap="#smokDetails"></center>
<map name="smokDetails">
    <area shape="rect" coords="150,100,260,360" title="Smok wawelski">
    <area shape="rect" coords="170,40,210,110" title="Ogie?">
    <area shape="rect" coords="15,365,390,490" title="Kamie?">
</map>

<?php
require ('../php/userInf.php');
?>

</body>

<script>

    <?php

    $useragent=$_SERVER['HTTP_USER_AGENT'];

    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
        echo "changePanorama()";

    ?>

//    function changePanorama() {
//        var image = document.getElementById('rynekPanorama');
//        image.src = "img/mobile/rynek_panorama2.jpg";
//    }


    function zamienTekst() {
        document.getElementById("mainTitle").style.marginLeft="200px";
    }

    function changeDragon() {
        var image = document.getElementById('smokImg');
        if (image.src.match("smok2")) {
            image.src = "../img/smok.jpg";
        } else {
            image.src = "../img/smok2.jpg";
        }
    }

</script>

</html>