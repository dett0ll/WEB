<?php
/*PHP provides two ways to compare two variables:

Loose comparison using == or != : both variables have "the same value".
Strict comparison using === or !== : both variables have "the same type and the same value".
PHP type juggling vulnerabilities arise when loose comparison (== or !=) is employed instead of
strict comparison (=== or !==) in an area where the attacker can control one of the variables being compared.
This vulnerability can result in the application returning an unintended answer to the true or false statement,
and can lead to severe authorization and/or authentication bugs
https://www.youtube.com/watch?v=_Zr84AeHECA
https://github.com/swisskyrepo/PayloadsAllTheThings/blob/master/Type%20Juggling/README.md*/


/*$a = 7;         //integer
$b = '7';      //string
if ($a == $b){
	
    echo ("php can compare integer and strings"); //php will convert string to integer and then compare both
} 

$a = 7;         //integer
$b = '7-string';      //string
if ($a == $b){ //it will extract integer 7 from string and compare 7 and 7
	
    echo ("php can compare integer and strings");
}

$a = 0;         //integer
$b = 'string';      //string
if ($a == $b){ // string will be converted to 0 and 0 is equal to integer 0
	
    echo ("php can compare integer and strings");
}
 */
//Authentication code example
if ($_POST['username']=='admin' && $_POST['password'] == "pass@123"){
    echo ('login successful');
}
/* if the attacker enters username = admin and password = 0. Then it will convert admin which is a string to 0
and then compare 0 with the password entered which is also 0 . However it is not often exploitable because POST requests are usually passed as string.
Means even if we enter 0 in password it will be passed as string. php will be comparing two strings and no type conversion will be needed and hence will
not evaluate to true.
However, if the application accepts input as JSON or serialized objects
{ "usernmae" : "admin", "password" : "0" } --------> password will be treated as string 
{ "usernmae" : "admin", "password" :  0 }  --------> password will be treated as integer
End user can control the input data type passed in and hence type juggling issue can be exploited*/

?>
