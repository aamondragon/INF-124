<?php
    $zip = $_GET['zip'];
    $returnValue;
    
    // Load Zipcode/City/State
    $rows   = array_map('str_getcsv', file('zip_codes.csv'));
    $header = array_shift($rows);
    $zipCodes = array();
    foreach($rows as $row) {
        $zipCodes[] = array_combine($header, $row);
    }
    
    // Close the file
    fclose($file);
    
    foreach($zipCodes as $value){
        if($value['zip'] == $zip){
            $returnValue = $value;
        }
    }
    
    if( isset($returnValue) ){
        print $returnValue['city'].",".$returnValue['state'];
    } else{
        print "";
    }