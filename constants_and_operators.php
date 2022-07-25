<?php
    

    /*
        // Case-sensitive Constant using define() function
    define("AGE",25);
    echo "\nMy Age is ".AGE;
    echo "\nMy Age is ".Age;    // Won't Print value of Age due to case sensitivity

    // Case-insensitive Constant using define() function
    define("GREETINGS","\nGood Morning",true);
    echo greetings." Mr. Sagnik";

    function constantCheck(){
        echo "\n".greetings." Mr. Rajat\nI am ".AGE." years old.\n\n"; // Constants are by default global
    }

    constantCheck();
    */

    /*

    // PHP IN-BUILT FUNCTION FOR INTEGER

    echo "\nIn my System, The Maximum Supported Integer value is : ".PHP_INT_MAX;
    echo "\n\nIn my System, The Minium Supported Integer value is : ".PHP_INT_MIN;
    echo "\n\nThe Size of Integer in Bytes is : ".PHP_INT_SIZE."\n";

    $a = 10;
    $b = 15.27;

    // PHP INTEGER and FLOAT NUMBER CHECKING FUNCTION

    echo $int_check1 = (is_int($a)) ? "\n$a is an integer" : "\n$a is not an integer number.";
    echo $int_check2 = (is_int($b)) ? "\n$b is an integer" : "\n$b is not an integer number.";
                                        // OR
    echo $int_check3 = (is_integer($a)) ? "\n\n$a is an integer" : "\n$a is not an integer";
    echo $int_check4 = (is_integer($b)) ? "\n$b is an integer" : "\n$b is not an integer";
    
    echo $float_check1 = (is_float($a)) ? "\n\n$a is a float number." : "\n\n$a is not a float number.";
    echo $float_check2 = (is_float($b)) ? "\n$b is a float number." : "\n$b is not a float nnumber.";
    */

    /*
    // Array Comstant

    define("fruits",["Apple","Mango","Banana"]);
    echo "I Like ".fruits[0].".\n";
    echo "Rajat Likes to eat ".fruits[1].".\n";
    echo "Vandana Likes to eat ".fruits[2].".\n";
    echo "Mukesh Likes to eat ".fruits[3].".\n";        // Test Case 1: if we give excess index : causing Error
    echo "Ramesh Likes to eat ".fruits[-1].".\n";        // Test Case 2: if we give negative index : causing Error
    */

    /*
    // Arithmetic Operator Use

    $a = 16;
    $b = 4;
    $c = 3;
    $addition_result = $a + $b;
    $subtraction_result = $a - $b;
    $multiplication_result = $a * $b;
    $division_result = $a / $b;
    $remainder = $a % $c;
    $exponentiation_result = $b ** $c;

    $d = $a+$b-$c*$division_result/$subtraction_result%$c**$a;

    echo "The Addition of $a and $b results $addition_result \n";
    echo "The Subtraction of $b from $b results $subtraction_result \n";
    echo "The Multiplication of $a and $b is $multiplication_result \n";
    echo "The Division of $a by $b results $division_result \n";
    echo "The Remainder on using modulus operation on $a by $c results $remainder \n";
    echo "$a power raised by $b results $exponentiation_result \n";

    echo "\nThe All Operator use operation results $d";
    */

    /*
                 // Assignment Operator Use

    $x = 10;    // Assigning a value of 10 to variable x
    $y = $x;    // Use of Assignment Operator to copy value of $x into $y
    $z = 20;    // Assigning a value of 20 to variable z

    echo "x = ".$x;
    echo "\ny = ".$y;

    // Use of Addition Shorthand Operator
    echo "\n$x += $x    means   x = $x + $x    Result:   x = ".($x+=$x);
    echo "\n$y += $x    means   y = $y + $x    Result:   y = ".($y += $x);

    // Use of Subtraction Shorthand Operator
    echo "\n$z -= $x    means   z = $z - $x    Result:   z = ".($z -= $x);

    // Use of Multiplication Shorthand Operator
    echo "\n$y *= $x    means   y = $y * $x    Result:   y = ".($y *= $x);

    // Use of Division Shorthand Operator
    echo "\n$y /= $x    means   y = $y / $x  Result:   y = ".($y /= $x);
    
    $z = 3;     // Assigning a value of 3 to $z variable
    // Use of Modulus Shorthand Operator for getting Remainder
    echo "\n$x %= $z    means   x = $x % $z      Result:   x = ".($x %= $z);
    
    // Use of Exponentiation Shorthand Operator
    echo "\n$x **= $z    means   x = $x ** $z      Result:   x = ".($x **= $z);
    */

    /*
        // Assignment Operator Use

    $a = 10;
    $b = $a;
    $c = 8;

    // Equal Operator
    var_dump($a == $b);         // returns true because values are equal
    
    // Identical Operator
    var_dump($a === $b);         // returns true because values are identical
    
    // Not Equal Operator
    var_dump($a != $b);         // returns false because values are equal
    // Not Equal Operator
    var_dump($a <> $c);         // returns true because values are not equal
    
    // Not Identical Operator
    var_dump($a !== $b);         // returns false because values are equal

    // Greater Than Operator
    var_dump($a > $c);         // returns true because value of variable a is greater than value of vaiable c

    // Less Than Operator
    var_dump($a < $c);          // returns false because value of variable a is NOT less than value of vaiable c

    // Greater Than or Equal to Operator
    var_dump($a >= $b);         // returns true because value of variable a is not greater but is equal to value of vaiable b

    // Less Than or Equal to Operator
    var_dump($a <= $c);         // returns false because value of variable a is neither greater than nor equals to value of vaiable b

    
    // Spaceship Comparison Operator

    // Case 1:
    $x = 20;
    $y = 30;
    var_dump($x <=> $y);         // returns -1 because $x is less than $y
    // Case 2:
    $x = 20;
    $y = 20;
    var_dump($x <=> $y);         // returns 0 because $x is less than $y
    // Case 3:
    $x = 30;
    $y = 20;
    var_dump($x <=> $y);         // returns 1 because $x is less than $y
    */

    /*
        // Increment/Decrement Operator

    $x = 10;
    $y = 20;

    // PRE-INCREMENT OPERATOR
    echo "Initial ++x Results :".++$x;      // increses its value by 1 and assigns that value to itself then prints updated value (i.e 11) of variable x 
    echo "\nBut Again on running ++x Results :".++$x;   // Now again increments its value by 1 and then prints new upadted value of variable x (i.e 12) 
    echo "\nBut value of x now is :".$x;   // beacuse in pre increment operator value are incremented first and then get printed. hence value 12 now and ahead
    
    // POST-INCREMENT OPERATOR
    echo "\n\nInitial x++ Results :".$x++;      // prints current value (i.e 12) to variable x and then increses its value by 1 and assigns that value to itself
    echo "\nBut Again on running x++ Results :".$x++;   // Now prints last stored value of variable x (i.e 13) and again increments its value by 1
    echo "\nAnd value of x now is :".$x;   // beacuse in post increment operator value are printed first and then get incremented, hence value 14 now and ahead
    
    // PRE-DECREMENT OPERATOR
    echo "\n\nInitial ++y Results :".++$y;      // increses its value by 1 and assigns that value to itself then prints updated value (i.e 21) of variable y 
    echo "\nBut Again on running ++y Results :".++$y;   // Now again increments its value by 1 and then prints new upadted value of variable y (i.e 22) 
    echo "\nBut value of y now is :".$y;   // beacuse in pre increment operator value are incremented first and then get printedalue is done,hence value 22 now and ahead
    
    // POST-DECREMENT OPERATOR
    echo "\n\nInitial y++ Results :".$y++;      // prints current value (i.e 22) to variable y and then increses its value by 1 and assigns that value to itself
    echo "\nBut Again on running y++ Results :".$y++;   // Now prints last stored value of variable y (i.e 23) and again increments its value by 1
    echo "\nAnd value of y now is :".$y;   // beacuse in post increment operator value are printed first and then get incrementedlue is done, hence value 24 now and ahead
    */

    /*
        // Logical Operator

    $a = 10;
    $b = 20;
    $c = 15;

    // AND (&&) OPERATOR
    if($a > $b && $a > $c){
        echo "$a is Greateest.";
    }
    else if($b > $a and $b > $c){
        echo "$b is Greatetest.";
    }
    else{
        echo "$c is Greatetest.";
    }
    
    // OR (||) OPERATOR
    if($b < 10 or $c < 10 ){
        echo "\n either varable b or variable c  or both are greater than 10";
    }
    else if($a < 0 || $b > 0){
        echo "\nAny One Of varable a or variable b is Positive number.";
    }
    else{
        echo "\nThe Above two are OR Operation Example.";
    }

    echo "\n------------------- Logical Not Operator --------------------";

    if(!($a>$b)){
        echo "\n$a is not graeter than $b";
    }
    
    if(!($b<$c)){
        echo "\n$b is Not Less Than $c";
    }
    
    echo "\n\n--------------- Logical xor Operator  -------------------------------";

    if($a< $b xor $c < $b){
        echo "\nBoth Conditions Are True ,hence xor will be inactive here";
    }
    else if($a< $b xor $c > $b){
        echo "\nEither of given Condition is True ,hence xor will be active here.";
    }
    else{
        "\nThis line is nothing to do with xor operation.";
    }
    echo "\n";
    */

    /*
        // PHP SRING OPERATOR

    $first_name = "Rajat";
    $middle_name = " Kumar";
    $last_name = " Prasad";

    echo "\n********************* Use of Concatenation String Operator **************************";

    echo "\n\nThe Name of canditate is ".$first_name.$middle_name.$last_name;
    
    echo "\n\n*************** Use of Concatenation Assignment String Operator ***************************";
    $full_name = "";
    $full_name .=$first_name .=$middle_name .= $last_name;
    echo "\n\nCandidate Fullname : ".$full_name."\n";

    */

    /*
        echo"\n************* Array Union *******************\n\n";

    $x = array("Name"=>"Rajat","Age"=>25);
    $y = array("Department"=>"Backend","Salary"=>40000);
    $a = array("Name"=>"Rajat","Age"=>25);

    print_r($x + $y);       // Unifies Array x and array y and print as single array

    echo"\n************* Array Equality *******************\n\n";
    
    var_dump($x == $a);        // Retrun True because Arrays are Equal
    var_dump($x == $y);         // Retrun False because Arrays are not Equal
    
    echo"\n************* Array Identity *******************\n\n";

    var_dump($x === $a);        // Retrun True because Arrays are Identical
    var_dump($x === $y);        // Retrun False because Arrays are not Identical

    echo"\n************* Array Inequality *******************\n\n";
    
    var_dump($x != $a);        // Retrun False because Arrays are Equal
    var_dump($x != $y);         // Retrun True because Arrays are not Equal
    
    echo "\n";

    var_dump($y <> $a);         // Retrun True because Arrays are not Equal
    var_dump($x <> $a);         // Retrun False because Arrays are  Equal
    
    echo"\n************* Array Non-identity *******************\n\n";

    var_dump($x !== $a);        // Retrun False because Arrays are Identical
    var_dump($x !== $y);        // Retrun True because Arrays are not Identical

    */

    /*
        // Conditional Asignment Operator

    $x = 50;
    $y = 90;
    $z = 75;

    $greater_one = ($x>$y) ? $x : $y;
    echo "The Greater one between $x and $y is ".$greater_one;

    $greatest_one = ($x>$y && $x>$z) ? $x: ($y>$z?$y:$z); 
    echo "\nThe Greatest one among $x , $y and $z is ".$greatest_one."\n";

        // Null coalescing conditional assignment operator
    
    $m =  ($p) ?? " variable p is either not defined or is Null";
    $o =  ($q = 500) ?? " variable p is either not defined or is Null\n";
    $s =  ($s = 25)?? "variable s is either not defined or is Null\n\n";
    $x =  100 ?? "variable x is either not defined or is Null\n\n";

    echo "\nm = ".$m;           // will print either p is NULL or not defined
    echo "\np = ".$p;           // will print no value of variable p beacause it is undefined variable
    echo "\no = ".$o;           // will print 500 as in first section of expression be declared variable q with value of 500
    echo "\nq = ".$q;           // will print 500 as it get declared and initialised with a value of 500 as expression
    echo "\ns = ".$s;           // will print 25 as variable is declared and initialised in first expression of definition of variable s itself on RHS
    echo "\nx = ".$x."\n";      // update the value of x to 100 as it is already defined and is not NULL as seen in above operations


    $n =  ($j = NULL)?? "variable n is either not defined or is Null";
    echo "\nvalue of n is : = ".$n;     // will will either n is not defined or null as here variable j is not defined
    echo "\nvalue of j is : = ".$j;     // as variable j is initialised with a value of null it will not print anything as result
    echo  "\n\nis_null check result of variable n results : ".is_null($n);  // as value of j is NULL and it get stored into variable n so it also won't print anything
    echo  "\nis_null check result of variable j results : ".is_null($j);    // as value of j is NULL and it will print 1 as output to confirm value of j is NULL
    echo "\nvalue of variable j is NULL because of it's value of is_null() function check is ".is_null($j)."\n\n";
    */

?>