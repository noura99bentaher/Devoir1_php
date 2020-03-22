<?php 
try{
$f=fopen("file.txt",'r+');
}
catch(exception $e){
    echo "l'erreur est: ".$e;
}
echo"<table>";
while($ligne=fgets($f)){
    $arr=explode("||",$ligne);
    echo "<tr>";
    foreach($arr as $champs){
        echo "<td>$champs</td>";
    }
    echo "</tr>";
}
echo"</table>";

?>