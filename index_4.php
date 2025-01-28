<?php

echo '<center>';

require('toolbox.php');




//   ***************  1  ****************


print_title(1, 'String Access');



echo 'You can access to item/char in a string like you do with Array.<br>';


echo '<br>Example:<br><br><br><code>$name = \'Wesam\';<br>echo $name[3]; // = a</code>';



//  ********************  2  **********************



print_title(2, 'String Functions Part 1');


echo '- lcfirst() --> lower case first: only the first letter will convert.<br>';
echo '- ucfirst() --> upper case first: only the first letter will convert.<br>';
echo '- strtolower() --> string to lower: the hole string will convert.<br>';
echo '- strtoupper() --> string to upper: the hole string will convert.<br>';
echo '- ucwords() --> upper case words: only the first letter of every word will convert.<br>';



//  *******************  3  ********************



print_title(3, 'String Functions Part 2');


echo '';




//  *******************  4  ********************



print_title(4, 'String Functions Part 3');




echo '- chunk_slpit(String[require], Length[optional], End[optional]) --> Split the string as you want.<br>';
echo '- strlen(String[require]) --> Return the string length.<br>';
echo '- str_slpit(String[require], Length[optional]) --> Split the string as you want and return it as Array.<br>';



//  ***********************  5  *******************


print_title(5, 'String Functions Part 4');


echo<<<'test'

- strpos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Sensitive* Return the position of the value in the string.

- strrpos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Sensitive* Return the last(Right) position of the value in the string.

- stripos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Insensitive* Return the position of the value in the string.

- strripos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Insensitive* Return the last position of the value in the string.

- substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional]) --> *unknowon* Return the count of the value in string.

test;



//  ****************  6  ******************

print_title(6, 'String Functions Part 5');


echo '***** First Function: parse_str(String[Required], Array[Required]) *****';
echo '<br><br><br>';

echo 'The Text  -->  name=wesam&email=mrw202065@gmail.com' . '<br><br>';

parse_str('name=wesam&email=mrw202065@gmail.com', $arr);


echo '<pre>';
print_r($arr);
echo '</pre>';


echo "my name: $arr[name]" . '<br>';
echo "my email: $arr[email]" . '<br>';



echo '<br><br><br>';
echo '***** 2ed Function: quotemeta(String[Required]) *****';
echo '<br><br><br>';



echo quotemeta('my(name)is{wesam}and..you can call me [theSam]...#please_don\'t!');



echo '<br><br><br>';
echo '***** 3th Function: str_pad(String[Required], Length[Required], Value[Optional], Pad Flag[Optional]) *****';
echo '<br><br><br>';



echo 'without str_pad() -->  13' . '<br>';
echo 'With str_pad(length=4, value=0, STR_PAD_LEFT) -->   ' . str_pad('13', 4, 0, STR_PAD_LEFT);
echo '<br>';
echo 'With str_pad(length=4, value=0, STR_PAD_BOTH) -->   ' . str_pad('13', 4, 0, STR_PAD_BOTH);
echo '<br>';
echo 'With str_pad(length=4, value=0, STR_PAD_RIGHT) -->   ' . str_pad('13', 4, 0, STR_PAD_RIGHT);
echo '<br>';



echo '<br><br><br>';
echo '***** 4th Function: strtr(String[Required], From[Required], To[Optional] || String[Required], Array[Required]) *****';
echo '<br><br><br>';


echo 'the input --> what the fuck';
echo '<br>';

$words = ['fuck' => '****', 'shit' => '****'];

echo 'the output --> ' . strtr('what the fuck', $words);

echo '<br>';



// ****************  7  ******************


print_title(7, 'String Functions Part 6');



echo <<< 'echo'

- str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional]) --> *Case-Sensitive*
<br>
- str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional]) --> *Case-Insensitive*
<br>
<br>
echo;


echo 'like the past part';




//  *****************  8  *****************



print_title(8, 'String Functions Part 7');



echo '- substr_replace(String[Required], Replace or Insert[Required], Start[Required], Length[Optional])<br>';
echo 'Length: <br>- Positive Number => Length of string to be Replaced.<br>- Negative Number => Characters left at the end after Replacement.<br>- 0 => Insert instead of Replace.';

newLine(2);

echo "Input --> 'hello i am a String, nice to meet you.'";
newLine();

echo '<h2>Outputs:</h2>';

newLine();

echo 'String[Input], Replace[99], Start[0] --> ' . substr_replace("hello i am a String, nice to meet you.", "99", 0);

newLine();

echo 'String[Input], Replace[99], Start[2] --> ' . substr_replace("hello i am a String, nice to meet you.", "99", 2);

newLine();

echo 'String[Input], Replace[99], Start[10] --> ' . substr_replace("hello i am a String, nice to meet you.", "99", 10);

newLine();

echo 'String[Input], Replace[99], Start[-3] --> ' . substr_replace("hello i am a String, nice to meet you.", "99", -3);

newLine();

echo '-------------------------------------';

newLine();

echo 'String[Input], Replace[99], Start[2], Length[5] --> ' . substr_replace("hello i am a String, nice to meet you.", "99", 2, 5);

newLine();

echo 'String[Input], Replace[99], Start[7], Length[-2] --> ' . substr_replace("hello i am a String, nice to meet you.", "99", 7, -2);

newLine();

echo 'String[Input], Replace[99], Start[10], Length[0] --> ' . substr_replace("hello i am a String, nice to meet you.", "99", 10, 0);




// **********************  9  ******************


print_title(9, 'String Functions Part 8');



echo <<< 'dd'

- wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Opional = False]) <br>
- ord(String[Required]) --> Convert Char to ASCII <br>
- chr(Int[Required]) --> Convert ASCII to Char <br>
- similar_text(String_One[Required], String_Two[Required], Percent[Optional]) <br>

dd;


//  *********************  10  ****************


print_title(10, 'String Functions Part 9');


echo <<< 'dd'

- strstr(String[Required], Search[Required], Before_Search[Optional = False]) --> Case-Sensitive <br>
- stristr(String[Required], Search[Required], Before_Search[Optional = False]) --> Case-Insensitive <br>
- number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Sapartor[Optional]) <br>

dd;


newLine(2);

echo '<h2>-- Done With String Functions --</h2>';
