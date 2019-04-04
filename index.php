

<!DOCTYPE html>
<html>
	<head>
		<title>Basic calculator</title>
		<style type="text/css">
			body{
				background: lightgrey;
			}
		</style>
	</head>
<body>
<h3>Basic calculator</h3>


<form action="index.php" method="POST" >
	<input type="text" placeholder="Number 1" name="num1"><br>
	<input type="text" placeholder="Number 2" name="num2"><br>
	<select name="cal" >
		<option value="add">Add</option>
		<option value="sub">Subtract</option>
		<option value="mul">Multiply</option>
		<option value="div">Divide</option>
	</select><br>
	<input type="submit" value="Calculate!">
</form>



<?php

if (isset($_POST)) {
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$cal = $_POST["cal"];
} else {
	echo "POST variable issue...";
}




class Calculator{
	public $num1;
	public $num2;
	public $cal;

	public function __construct($num1, $num2, $cal){
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->cal = $cal;
	}

	public function doSomeMath(){
		switch ($this->cal) {
			case 'add':
				$result = $this->num1 + $this->num2;
				break;
			case 'sub':
				$result = $this->num1 - $this->num2;
				break;
			case 'mul':
				$result = $this->num1 * $this->num2;
				break;
			case 'div':
				$result = $this->num1 / $this->num2;
				break;
			default:
				$result = "This error comes from the switch element. Check the switch and everything before the switch.";
				break;
		}return $result;
	}
}

$newObject = new Calculator($num1, $num2, $cal);
echo "<strong>= " . $newObject->doSomeMath() . "</strong>";

?>

</body>
</html>