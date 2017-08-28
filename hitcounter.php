<?php
$count_my_page = ("hits.txt");
$hits = file($count_my_page);
if(isset($_GET['stats'])){
	echo "<h2>Hits: ". $hits[0] . "</h2><hr>";
}else{
	$hits[0] ++;
	$fp = fopen($count_my_page , "w");
	fputs($fp , "$hits[0]");
	fclose($fp);
}
?>