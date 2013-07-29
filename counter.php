<?php

	//$count = file_get_contents("/data/count.txt");
	//$count = trim($count);
	//$count = $count + 1;
	
	$count = 0;
	$file = fopen("./data/count.txt","r+");

	$count = fgets($file);
	$count = (int)$count + 1;
	rewind($file);
	fwrite($file,$count);
	fclose($file);
?>

<center>
<br><br><br><br><br><br><br><br><br>

<?php

	echo "Gratulerar, dette var klikk nummer $count! :)"

?>

<br><br><br>

<a href="index.php">Tillbaka</a>