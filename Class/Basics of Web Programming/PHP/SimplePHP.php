<?php
$week = ["Monday" => "Lunes", "Tuesday" => "Martes", "Wednesday" => "Miércoles", "Thursday" => "Jueves", 
        "Friday" => "Viernes", "Saturday" => "Sábado", "Sunday" => "Domingo"];

$days = array_keys($week);

for($i=0; $i<7; $i++)
{
    print("$days[$i]\n");
}
?>


<?php

$week = ["Monday" => "Lunes", "Tuesday" => "Martes", "Wednesday" => "Miércoles", "Thursday" => "Jueves", 
        "Friday" => "Viernes", "Saturday" => "Sábado", "Sunday" => "Domingo"];
$days = array_keys($week);
for($i=0; $i<7; $i++)
{
    echo $days[$i] , "      ";
}

?>