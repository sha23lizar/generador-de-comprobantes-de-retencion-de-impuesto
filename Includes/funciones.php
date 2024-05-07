<?php

function revertirFecha($fecha)
{
    $date_string = $fecha;
    
    // $date_string = "2024-04-10"; 
    // $date = date_create_from_format("Y-m-d", $date_string);
    // $formatted_date = date_format($date, "d-m-Y");

    $date_array = explode("-", $date_string);
    $formatted_date = $date_array[2] . "-" . $date_array[1] . "-" . $date_array[0];
    return $formatted_date; // Output: 2024-04-10 (not the desired format)
    return $formatted_date; // Output: 10-04-2024
}
