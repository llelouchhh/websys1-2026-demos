<?php
echo "<pre>";
print("hi");
print_r($_GET);
echo "Your Name is: ".$_GET['pangalan']."<br>";
$sex = $_GET['gender'];
$edad = $_GET['age'];
?>
Age :<?php echo $_GET['age']; ?> 
Sex :<?=$sex?>

<form action="result.php">
	<input type="text" placeholder="Enter Name" value="<?php echo $_GET['pangalan']; ?>" name="pangalan">
	<input type="text" placeholder="Age" value="<?=$edad?>" name="age">
	<?php
	$male = "";
	$female = "";
	if ($sex == 2){ $female = " selected";}else{
		$male = " selected";
	}
	?>
	<select name="gender">
		<option value="1" <?=$male?>>Male</option>
		<option value="2" <?=$female?> >Female</option>
	</select>
	<input type="submit">
</form>