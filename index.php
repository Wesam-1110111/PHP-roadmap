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


$t = "********************";

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

echo "<h3>$t $num $t</h3>";
echo "<h3>Pre-Defined Variables</h3>";



echo '<pre>';
    print_r($_SERVER);
echo '</pre>';

