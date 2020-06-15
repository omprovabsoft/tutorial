<?php
/*
Difficulty: Easy
Being greedy for Water:

You are given container full of water. Container can have limited amount of water. 
You also have NN bottles to fill. 
You need to find the maximum numbers of bottles you can fill.
Input:
First Argument contains an integer arg1 capacity of the container.
Second Argument contains an interger arg2 number of bottles(length of array).
Third Argument contains an array arg3 capacities of each bottles.

Output:
You should print maximum number of bottles you can fill.

Example #1:
    SAMPLE INPUT 
    I: 10 II: 5 III: [8,5,4,3,2]

    SAMPLE OUTPUT s
    3

Example #2:
    SAMPLE INPUT 
    I: 10 II: 6 III: [1,3,7,2,2,1]

    SAMPLE OUTPUT 
    5

*/

ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $arg1);
fscanf($handle,"%d", $arg2);
$arg3 = array();
for ($i = 0; $i < $arg2; $i++) {
	fscanf($handle,"%d", $arg3[$i]);
}


function max_bottels($arg1, $arg2, $arg3) 
{
	//start code here...	
	
	
}

echo max_bottels($arg1, $arg2, $arg3);


?>



---------------------------------------------------------------------------------------------

<?php
/*
Difficulty: Medium
You have an array with n elements, initially each element is 0
and you can perform the following operations..
-> Increment: Choose one element of array and increment its value by 1.
-> Doubling: Double the value of each element.

    You are given an array of integers as desired array ,
    containing n elements, compute the smallest possible number of operations
    needed to change the array from all zeros to desired array.
    So write a program to compute it and simply print the smallest possible number of operations.

Example #1:
    Input:
    I: 2 , II: [2,1]

    Output:
    3

Example #2:
    Input:
    I: 3 , II: [16,16,16]

    Output:
    7

Example #3:
    Input:
    I:1 , II: [100]

    Output:
    9


*/

ini_set('display_errors', '1');
//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $arg1);
$desired_array = array();
for ($i = 0; $i < $arg1; $i++) {
    fscanf($handle,"%d", $desired_array[$i]);
}


function operations($desired_array)
{
    //start code here...

}



echo operations($desired_array);






?>


------------------------------------------------------------------------------------------------

<?php
/*
Difficulty: Medium 
John recently read about fibonacci numbers. His brother has given him a relation similar to 
fibonacci recurrence as follows,
f(n) = 5 f(n-1) + 3 f(n-2) for n > 1 and f(0) = f(1) = 1 Rather than giving him the kth number of the sequence to compute, 
his brother has given him N numbers whose product is k and asked him to calculate the last 3 digits of 
f(k).
Help John to get the answer by writing a function f().

Input Format:
The first argument of the f() contains a single integer denoting N. (N<= 20). 
The second argument of the f() contains an array of integers (<=100).

Output Format:
Print the last 3-digit of f(k).

SAMPLE INPUT 
I: 3 II: [1,2,3]

SAMPLE OUTPUT 
337

Explanation
For the given 3 numbers, k = 1 x 2 x 3 = 6
f(6) = 7337. Hence the answer is 337.
*/

ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $N);
$arr = array();
for ($i = 0; $i < $N; $i++) {
    fscanf($handle,"%d", $arr[$i]);
}

function f($N, $arr)
{
    //start code here...    

}

echo f($N, $arr);



?>

------------------------------------------------------------------------------

<?php
/*
Difficulty: Easy 
John has a string s, of lowercase English letters that she repeated infinitely many times.
Given an integer n , find and print the number of letter a's in the first n letters of 
john's infinite string.
Input Format:
The first Argument contains a single string,$arg1 .
The second Argument contains an integer, $arg2.

OutPut Format:
Print a single integer denoting the number of letter a's in the first letters of the infinite 
string created by repeating infinitely many times.

Example:
Sample Input 1
aba
10
Sample Output 1
7

Sample Input 2
a
1000000000000
Sample Output 2
1000000000000

*/

ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s", $arg1);
fscanf($handle,"%d", $arg2);


function number_of_a($arg1, $arg2)
{
    
    //start code here...    
    
}


echo number_of_a($arg1, $arg2);




?>



-------------------------------------------------------------------------------------


<?php
/*
Difficulty: Medium 
John saw Superhero Playing Cards in a shop. Each card has a Superhero and his power-up portrayed on it, 
i.e. each card has a power-up represented by an integer. 
He thought of buying some cards with unique Power-Up, and he wants to maximize his total power-up, 
but shopkeeper only sells cards which are consecutively placed to each other. 
John wants your help in finding the maximum total power-up that he can get with all unique consecutive cards.
Since he has entered into the shop so he will buy atleast one card.
You need to write a function "max_power_up()" to help John.

Input:
First Argument contains a single integer, N denoting the number of Playing Cards on the shop.
Second Argument contains an array power_ups.The ith element of array represents the power-up of ith card 
on the shop.

Output:
print the maximum total power-up of the cards that John can buy, satisfying his uniqueness wish and 
shopkeeper requirement of consecutive cards.

SAMPLE INPUT 1
N: 6 , power_ups: [1, 2, 1, 2, -2, 5]

SAMPLE OUTPUT 1
6

SAMPLE INPUT 2
N: 8 , power_ups: 1,3,9,2,-4,-7,-2,4

SAMPLE OUTPUT 2
15

*/


ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $N);
$power_ups = array();
for ($i = 0; $i < $N; $i++) {
    fscanf($handle,"%d", $power_ups[$i]);
}


function max_power_up($N, $power_ups)
{
    //start code here...    

}


echo max_power_up($N, $power_ups);
