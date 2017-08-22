<?php
function calculate ($number1, $number2, $operand){
	switch ($operand) {
		case '+':
			return $number1 + $number2;
			break;
		case '-':
			return $number1 - $number2;
			break;
		case '*':
		    return $number1 * $number2;
		    break;
		case '/':
		     return $number1 / $number2;
		     break;


		default:
			return "erorr";
			break;
	}
}

assert(4 == calculate(2, 2, "+"));
assert(0 == calculate(2, 2, "-"));
assert(4 == calculate(2, 2, "*"));
assert(1 == calculate(2, 2, "/"));
  ?>