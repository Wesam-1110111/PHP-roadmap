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



//  ********************  7  ********************

echo "$t1 7 $t2";

echo "<h3>Constants</h3><br><br>";

define("MY_NAME", "Wesam");

echo MY_NAME;


//  ********************  8  ********************



function print_title($nu, $title){
    echo "<h3>********************  $nu  ********************</h3>";
    echo "<h3>* * * * * * * $title * * * * * * *</h3>";
    echo "<h3>****************************************</h3>";
}

print_title(8, 'Predefined & Magic Constants');