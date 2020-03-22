

<?php
try{
    $f=fopen("file.txt",'r+');
    }
    catch(exception $e){
        echo "l'erreur est: ".$e;
    }
?>

<h1>centrale d'achat</h1>
<h3>commande clients</h3>
<table border='1px'>
<tr class='header' >
<td>Numero de commande</td>
<td>Numero de client</td>
<td>date de comande</td>
<td>article</td>
<td>quantite(pal)</td>
<td>prix unitaire(dh)</td>
<td>deta de livraison</td>
<td>adresse client</td>

</tr>
<style>
tr.header{
    background-color:pink;
    
}
</style>
<?php 
while($ligne=fgets($f)){
    ?><tr><?php
    $arr=explode("|",$ligne);
    foreach($arr as $a){?>
    <td><?php echo$a;?></td>
    <?php
}    
?><tr><?php }
?>
</table>