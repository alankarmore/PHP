<?php

if (!empty($_POST)) {

$fields = array('Code' => '', 'Name' => '', 'IATA' => '', 'Location_type' => '', 'Counter_location' => '', 'Address_1' => '', 'Address_2' => '', 'City' => '', 'State' => '',
    'Country' => '', 'Lat' => '', 'Lon' => '', 'Pickup_instructions' => '', 'Drop-off_instructions' => '', 'Desk_phone' => '', 'Desk_Email' => '', 'Emergency_phone' => '', 'Desk_fax' => '', 'Status' => '');

    echo "<pre> Post by user ";
    $postedData = $_POST;
    foreach($fields as $key => $value) {
        $fields[$key] = trim($postedData[$key]);
    }
    
    $stringData = json_encode($postedData);

    $fp = fopen('new-file1.json', 'w');
    fwrite($fp, $stringData);
    fclose($fp);
    @header("Location:read.php");
    exit;
}