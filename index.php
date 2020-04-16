<?php
    switch ($_GET["api"]) {
        case "bingpic":
            include "bingpic.php";
            break;
        case "qr":
            include "phpqrcode/qrlib.php";
            //include "phpqrcode/phpqrcode.php"
            //$qr_data = $_GET["cont"];
            //QRcode::png($qr_data, false, QR_ECLEVEL_Q, 4);
            QRcode::png($_GET["cont"], false, QR_ECLEVEL_Q, 4);
            break;
        case "gravatar":
            header('Location: https://cn.gravatar.com/avatar/'.md5(strtolower(trim($_GET["email"]))), true, 302);
            break;
        case "nemusic":
            if ($_GET["id"]) {
                include "nemusic.php";
                $thisong = new NeteaseMusicAPI();
                $result = $thisong->url($_GET["id"], 96000);
                $songData = json_decode($result);
                header('Location: '.$songData->data[0]->url, true, 302);

            } else echo "音乐ID在哪里？";
            break;
        default:
            include "help.php";
    }
?>