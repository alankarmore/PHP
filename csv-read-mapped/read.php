<?php

$file = new SplFileObject("new.csv");
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

$fileName = 'new-file1.json';
$fp = fopen($fileName, 'r');
$contents = fread($fp, filesize($fileName));
fclose($fp);
$mappedData = json_decode($contents, true);
 
foreach($data as $k => $info) {
    $temp = array();
    foreach($mappedData as $key => $v) {
        $temp[$key] = isset($info[$v]) ? $info[$v] : "NULL";
    }
   
    echo "<pre>"; print_r($temp);
    echo "<pre>"; print_r($info);die;
}

echo "<pre>";
print_r($data);
print_r($mappedData);
/*function csv_to_array($filename = '', $delimiter = ',')
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
}*/
