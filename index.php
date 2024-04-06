<?php
header("Content-type:application/json");
$b = $_GET['b'] ? $_GET['b'] : "PC软件库";
//构建数据
$data = array(
    "storeHouse" => array(
        array(
            'sourceName'=>'🌹'.$b.'主仓库🌹',
            'sourceUrl'=>'http://tv.pcoof.com/list.php'
        )
        ,array(
            'sourceName'=>'🌹'.$b.'超级仓库🌹',
            'sourceUrl'=>'https://agit.ai/hu/hcr/raw/branch/master/99668.txt'
        )
        ,array(
            'sourceName'=>'🌹'.$b.'☁️gk0748仓库🌹',
            'sourceUrl'=>'https://agit.ai/gk0748/gk0/raw/branch/master/ls.txt'
        )
        ,array(
            'sourceName'=>'🌹'.$b.'☁️安卓小小鸟仓库🌹',
            'sourceUrl'=>'https://gitcode.net/wzlyd1/00/-/raw/master/0.txt'
        )
    )
);
//转为JSON
echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>
