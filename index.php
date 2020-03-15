<?php

/** 
*strstr() function searches for the first occurrence of a string inside another string and it return string From where it found the string
*/
$str = "ketanchavdad@gmail.com";
$return = strstr($str,'@'); // output will be @gmail.com
echo "<br />OUTPUT of strstr() function : $return";


/** 
* strpos() function finds the position of the first occurrence of a string inside another string and it return integer if found else false
*/
$str = "ketanchavdad@gmail.com";
$return = strpos($str,'@'); // output will be 12
echo "<br />OUTPUT of strpos() function : $return";


/** 
* strlen() function finds string length and return integer length of the string if found else false
*/
$str = "ketanchavdad@gmail.com";
$return = strlen($str); // output will be 22
echo "<br />OUTPUT of strlen() function : $return";

/** 
* strrev() function it reverse the string
*/
$str = "ketanchavdad@gmail.com";
$return = strrev($str); // output will be moc.liamg@dadvahcnatek
echo "<br />OUTPUT of strrev() function : $return";

/** 
* str_word_count() function it count words and it return total number of words string contains and note it seperates words from special characters
*/
$str = "ketanchavdad@gmail.com";
$return = str_word_count($str); // output will be 3
echo "<br />OUTPUT of str_word_count() function : $return";

/** 
* The str_replace() function replaces words with some other words in a string.
*/
$str = "ketanchavdad@gmail.com";
$return = str_replace('gmail','yahoo',$str); // output will be ketanchavdad@yahoo.com
echo "<br />OUTPUT of str_replace() function : $return";


/** 
* The str_repeat() function repeats a string as specified number of times in second parameter.
*/
$return = str_repeat('gmail',5); // output will be gmailgmailgmailgmailgmail
echo "<br />OUTPUT of str_repeat() function : $return";

/** 
* The ucwords() function converts the first character of each word into uppercase.
*/
$str = "ketan chavda";
$return = ucwords($str); // output will be Ketan Chavda
echo "<br />OUTPUT of ucwords() function : $return";


/** 
* The strcmp() function compares two strings.
* 0 - if the two strings are equal < 0 - if string1 is less than string2  >0 - if string1 is greater than string2
*/
$str1 = "ketan";
$str2 = "Ketan";
$return = strcmp($str1,$str2); // output will be 1 both string are not quiet same
echo "<br />OUTPUT of strcmp() function : $return";

/** 
* The substr() function returns a substring of a string.
*/
$str = "ketan";
$return = substr($str,2); // output will be tan
$return = substr($str,1,4); // output will be etan
$return = substr($str,2,-1); // output will be ta
echo "<br />OUTPUT of substr() function : $return";
