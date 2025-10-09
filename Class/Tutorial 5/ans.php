$ages = [
    "Harry" => 21,
    "Alice" => 20,
    "Megha" => 22,
    "Bob" => 19
];

$ages["Megha"] = 28;

asort($ages);
foreach ($ages as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

unset($ages["Alice"]);