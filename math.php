<?php

// math defult funcitons

echo abs(-4.5); // Return the absolute value of different numbers

echo decbin(34); // 34 converted decemal to binary number

echo ceil(6.1); // 7
echo ceil(-6.1); // 6
echo floor(6.8); // 6


echo rand() ."<br>";
echo lcg_value() ."<br>"; // return a random number betwen 0 to 1
echo rand(50, 100) ."<br>"; //  genarate a random number betwen 50 to 100
echo mt_rand(50, 100) ."<br>"; // genarate a random number betwen 50 to 100
echo getrandmax() ."<br>"; // Return largest possible random value that can be returned by rand()

echo fmod(10, 2); // reminder of divitioin (10/2) is 0
echo intdiv(8, 2); // 4. int number divition

echo is_infinite(2); // check value infinite or not
echo is_nan(2) ."<br>"; // check value is num or not

echo max(23, 45, 67, 676, 34 ,3435, 45) ."<br>"; // 3435 is the largest number of the list
echo min(23, 45, 67, 676, 34 ,3435, 45) ."<br>"; // 23 is the min number of the list

echo pi() ."<br>"; // 3.141615

echo sqrt(9) ."<br>"; // 3


?>