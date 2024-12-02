<?php

// ************  1  *************

/*
echo 'Hello world form PHP';
echo 

'<br>';
print 'print command';
*/

// ************  2  *************

/*
echo gettype(2);
echo "<br>";
echo gettype(2.5);
echo "<br>";
echo gettype(true);
echo "<br>";
echo gettype(True);
echo "<br>";
echo gettype('el');
echo "<br>";
echo gettype('1');
echo "<br>";
echo gettype('w');
echo "<br>";
echo gettype("wesam");
echo "<br>";
echo gettype("2");
echo "<br>";
echo gettype(['hello', '2']);
echo "<br>";
// echo gettype();
*/


// ******************  3  ********************


echo <<<"unorderlist"
    <ul>
        <li>3th</li>
        <li>2ed</li>
        <li>1st</li>
    </ul>
unorderlist;



// ****************  4  ******************
// Variable Variable


$t1 = "<h3>********************";
$t2 = "********************</h3>";

$n = "Wesam";

echo $n;

echo "<br>";

$$n = "Mr. W";
echo $$n;

echo "<br>";

echo $Wesam;

echo "<br>";

$$$n = "hi";

echo "he tell me '${$$n}'";


//  ********************  5  ******************


echo '<h3>********************  5  ******************</h3>';


$name = 'wesam';
$surname = &$name;

$surname = 'Mr. w';

echo $name;
echo '<br>';

echo $surname;
echo '<br>';


//  ********************  6  ******************

$num = 6;

echo "$t1 $num $t2";
echo "<h3>Pre-Defined Variables</h3>";



echo '<pre>';
    print_r($_SERVER);
echo '</pre>';

function print_title($nu, $title){
    echo "<br><br><br><br><br><hr><br><br>";
    echo "<h3>********************  $nu  ********************</h3>";
    echo "<h3>* * * * * * * $title * * * * * * *</h3>";
    echo "<h3>****************************************</h3>";
    echo "<br><br><br><br>";
}


//  ********************  7  ********************

echo "<center>";

print_title(7, "Constants");

// define("MY_NAME", "Wesam");

// echo MY_NAME;

echo "<p>The Constants like variables but you can't change the value.<br>To declear a constant use: <code>define()</code>.<br>Example: declear a constant.<br><code>// declear a constant it's name (MY_NAME).<br>define(MY_NAME, 'Wesam');</code>";


//  ********************  8  ********************




print_title(8, "Predefined & Magic Constants");




// ********************  9  ********************

print_title(9, "Operators");


echo <<<'ul'
    <ul>
        <li>[+] => Addition</li>
        <li>[-] => Subtraction</li>
        <li>[*] => Multiplication</li>
        <li>[/] => Division</li>
        <li>[%] => Modulus</li>
        <li>[**] => Power</li>
        <li>[+$a] => Identity</li>
        <li>[-$a] => Negation</li>
    </ul>
ul;

echo "<br>";

echo "<p>The last two are: convert string to integr by just put the '+' or '-' before variable or the value.<br>But they are not the same, the '-' if the number was '100' it will be '-100' in integr, and the '+' don't.<br>";



// *********************  10  *******************


print_title(10, "Error Control");

$aaa = 10;
$b = @$aaa or die("Error, Variable not found in line: " . __LINE__);

echo $b;


echo "<br>";

echo '<p>You can stop the error with: <code>@</code>, before the line of code.<br>Example: <br><code>$a = 10;<br>$b = @$aaa or die("Error, Variable not found in line: " . __LINE__);<br>echo $b;</code>';

echo "<br>";

echo "Here there is no variable called aaa, so <code>die()</code> will work insteed and print the massege in it, and stop the code of running.";

// Close tag center
echo "<br></center>";