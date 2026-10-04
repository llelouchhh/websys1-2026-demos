<form >
	<input type="number" placeholder="Enter Number" name="numero">
	<input type="submit">
</form>

<?php
if (isset($_GET['numero'])){
	echo "Entered Number : <b style='color:red'>".$_GET['numero']."</b><br>";
	$number = $_GET['numero'];
	if ($number % 2 == 0){
		echo "The number is <strong style='color:green'>EVEN</strong>";
	}else{
		echo "The number is <strong style='color:RED'>ODD</strong>";
	} 
}
?>	