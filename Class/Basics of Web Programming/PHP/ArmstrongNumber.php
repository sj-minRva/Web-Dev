<?php
if (isset($_POST['submit'])) {
    $num = (int)$_POST['number'];
    $temp = $num;
    $numOfDigits = strlen((string)$num);
    $sum = 0;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numOfDigits);
        $temp = (int)($temp / 10);
    }

    if ($sum == $num) {
        echo "<h2>$num is an Armstrong Number.</h2>";
    } else {
        echo "<h2>$num is not an Armstrong Number.</h2>";
    }
}
?>
