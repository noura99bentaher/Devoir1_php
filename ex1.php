<?php
$arr=['aa.jpg','bb.jpg','hh.jpg','cc.jpg','dd.jpg','ff.jpg'];
echo "<h2>Fruits and Vegetables  </h2>";
shuffle($arr);
foreach ($arr as $img){
    echo "<img src='$img'>";
}
?>
<style>
img{
    display:inline;
    width:30%;
    margin:1%;
    border:1px solid black;
    height:300px;
}
h2{
    text-align: center;
}
</style>