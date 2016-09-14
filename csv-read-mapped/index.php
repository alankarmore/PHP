<?php
$fields = array('Code' => '', 'Name' => '', 'IATA' => '', 'Location_type' => '', 'Counter_location' => '', 'Address_1' => '', 'Address_2' => '', 'City' => '', 'State' => '',
    'Country' => '', 'Lat' => '', 'Lon' => '', 'Pickup_instructions' => '', 'Drop-off_instructions' => '', 'Desk_phone' => '', 'Desk_Email' => '', 'Emergency_phone' => '', 'Desk_fax' => '', 'Status' => '');

$file = new SplFileObject("new1.csv");
$header = NULL;
$data = array();
while (!$file->eof()) {
    $row = $file->fgetcsv();
    if (!$header) {
        $header = $row;
    } else {
        $data[] = @array_combine($header, $row);
    }
}

echo "<br> Predefined fields: <pre>";
print_r($fields);

echo "<br/> Found below feilds please provide the correct value in front the column name <br/>". implode("<br/>", $header);


/*


$copiedData = json_decode($contents, true);
echo "<pre>";
print_r($copiedData);
die;
echo $contents;
die;
echo "copied";
die;

echo '<pre>';
print_r($header);
echo '</pre>';
echo '<pre>';
print_r($data);
echo '</pre>';
die;
*/
$fileName = 'new1.csv';

function csv_to_array($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}
?>

<form name="frmSetData" id="frmSetData" action="test.php" method="POST">
<?php foreach($fields as $key => $data) : ?>
    <span><?php echo $key; ?></span> : <span><input type="text" name="<?php echo $key;?>" value="" /> <br/></span>
    <?php endforeach;?>
    <input type="submit"  />
</form>