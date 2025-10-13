<?php
//Write a PHP program to store the name and roll number of 10 students in an Associative Array and use 
//foreach loop to process the array and perform asort, rsort, and ksort. Illustrate with output.

$students = array(
    "101" => "Rhea",
    "102" => "John",
    "103" => "Anu",
    "104" => "Vishal",
    "105" => "Maria",
    "106" => "Alan",
    "107" => "Neha",
    "108" => "George",
    "109" => "Chris",
    "110" => "Lina"
);

// Display original array
echo "<h3>Original Student List:</h3>";
foreach ($students as $roll => $name) {
    echo "Roll No: $roll - Name: $name<br>";
}

// 1️⃣ asort() → Sort by value (names) in ascending order
asort($students);
echo "<h3>After asort() (Ascending by Name):</h3>";
foreach ($students as $roll => $name) {
    echo "Roll No: $roll - Name: $name<br>";
}

// 2️⃣ rsort() → Sort values only in descending order
$names = array_values($students);
rsort($names);
echo "<h3>After rsort() (Descending by Name):</h3>";
foreach ($names as $name) {
    echo "Name: $name<br>";
}

// 3️⃣ ksort() → Sort by key (roll number) in ascending order
ksort($students);
echo "<h3>After ksort() (Ascending by Roll Number):</h3>";
foreach ($students as $roll => $name) {
    echo "Roll No: $roll - Name: $name<br>";
}
?>
