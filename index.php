<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Калькулятор</title>
</head>
<body>

<?php 
$number1 = $_POST['number1'] ? $_POST['number1']:"0";
$number2 = $_POST['number2'] ? $_POST['number2']:"0";
$operand = $_POST['operand'] ? $_POST['operand']:"null";

?>

<?php include 'calculate.php' ?>

<form action="index.php" method="post">
	<input type="number" name="number1" value= <?php echo "\"".$number1."\""; ?>>
	<select name="operand">
		<option  value="+" <?php if ('+' == $operand) { ?> selected <?php } ?> >+</option>
		<option  value="-" <?php if ('-' == $operand) { ?> selected <?php } ?> >-</option>
		<option  value="*" <?php if ('*' == $operand) { ?> selected <?php } ?> >*</option>
		<option  value="/" <?php if ('/' == $operand) { ?> selected <?php } ?> >/</option>
	</select>
	<input type="number" name="number2" value= <?php echo "\"".$number2."\""; ?>>
	<input type="submit" name="" value="=">
	<input type="number" name="result" value=<?php echo "\"".calculate($number1, $number2, $operand)."\""; ?>>


</form>

</body>
</html>