<?php 
    $str = file_get_contents('http://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
    $array = json_decode($str);
    $imgurl = $array->{"images"}[0]->{"url"};
    // echo "http://www.bing.com{$imgurl}";
    header('Location: http://www.bing.com'.$imgurl, true, 302);
?>