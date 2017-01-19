<?php
/**
 * adds two numbers and returns the result
 *
 * @param double $firstNumber first addend
 * @param double $secondNumber second addend
 * @return double sum of the two numbers
 * @throws UnexpectedValueException if the addends aren't numeric
 **/
function addTwoNumbers($firstNumber, $secondNumber) {
    // verify the addends are numeric
    $firstNumber = filter_var($firstNumber, FILTER_VALIDATE_FLOAT);
    $secondNumber = filter_var($secondNumber, FILTER_VALIDATE_FLOAT);
    if($firstNumber === false || $secondNumber === false) {
        throw(new UnexpectedValueException("addends are not numeric"));
    }

    // return the sum
    $sum = $firstNumber + $secondNumber;
    return($sum);
}

try {
    //**code that *MAY* fail - but hopefully not!//
    echo "1.2 + 2.3 = " . addTwoNumbers(1.2, 2.3) . "<br/>";
    echo"1.2 + 2.3 = " . addTwoNumbers("1.2","2.3") . "<br/>";
    echo"foo + bar = " . addTwoNumbers("foo","bar") . "<br/>";
    echo"3.4 + 3.5 = " . addTwoNumbers(3.4,3.5) . "<br/>";
}catch(UnexpectedValueException $exception) {
    // code that executes when a failure has happened
    // (i.e., what do we do when we "break glass?")
    echo"An exception occurred: " . $exception->getMessage() . "<br/>";
}