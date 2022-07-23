<?php

	//echo "Hello All";


    // echo "This echo line will not execute because of Single line Comment";
    # echo "This echo line will also not execute because of Single line Comment";
    /*
    Here Written ANYTHING Weather it is valid Code
    Or any incalid Code
    or any Simple text
    will Not be Executed.

    echo "This Line is in Multiline Comment.";
    */
    /*
    $First_name = "Rajat";
    $Last_name = 'Kumar';
    $Age = 25;
    
    echo "My Name is $First_name $Last_name and i am $Age years old.";
    */
    
    /*
    $x = 10;         // Global Variable, Value accesible only main Syntax, Not in functions

   function myNum(){        // php function
        $y = 15;        // Local Variable, Only Accecible inside myNum Function 
        echo "Value of x inside function : $x";
        echo "\n Value of y inside function : $y";
   }

    myNum();     // function call

    echo "\n Value of x outside function : $x";
    echo "\n Value of y outside function : $y";
    */

    /*
    $x = 10;         // Global Variable, Value accesible only main Syntax, Not in functions

   function myNum(){        // php function
        global $x;      // declaring a local variable with global keyword  makes it accessible inside function
        $y = 15;        // Local Variable, Only Accecible inside myNum Function 
        
        echo "Value of x inside function after using keyword global is : $x";   
        echo "\nValue of y inside function : $y";
   }

    myNum();     // function call

    global $y;          // but declaring a local variable with global keyword doesn't make it accessible outside function
    echo "\nValue of x outside function : $x";
    echo "\nValue of y outside function : $y";
    */

    /*
    function useOfStaticKeyword(){

        // Everytime function get called x starts with a value of 10
        $x = 10;
        echo "\nThe Value of x is : $x";
        $x = $x + 5;
    }

    useOfStaticKeyword();       // First time Calling
    useOfStaticKeyword();       // Second time Calling
    useOfStaticKeyword();       // Third time Calling
    */
    /*
    function useOfStaticKeyword(){

function useOfStaticKeyword(){

// With the use of static Keyword with variable x it now starts with the last value it retained after adding 5 in it
        static $x = 10;
        echo "\nThe Value of x is : $x";
        $x = $x + 5;
    }

    useOfStaticKeyword();       // First time Calling
    useOfStaticKeyword();       // Second time Calling
    useOfStaticKeyword();       // Third time Calling

    */

    /*
        echo "This is a Line in Double Quotes";
    echo '\nThis is a Line in Single Quotes'; // Nextline character escape sequence '/n' does not work in single quoted lines
    echo "\nThis is a Line in Single Quotes to show the use of 'double quotted' string here.";
    echo '\nThis is a Line in Single Quotes to show the use of "double quotted" string here.';
    echo "\n","This"," is"," the"," Line"," Made"," With"," multiple"," Parameters.";

    $a = 12;
    $b = 13;
    $c = $a * $b;
    echo "\n\nThe Sum of ".$a." and ".$b." is ".($a+$b);

    print "\nHello World";
    print "\nThe Multiplication of $a with $b results $c";
    print "\n".$a*$b;

    echo ("\nHello All from Paranthesis of echo with  double quotes");
    print ("\nHello All from Paranthesis of print with  double quotes");
    echo ('\nHello All from Paranthesis of echo with  single quotes');
    print ('\nHello All from Paranthesis of print with  single quotes');
    */



?>
