<?php
    $zip = $_GET['zip'];
    $returnValue;
    
    // Load Tax Rate Data
    $rows   = array_map('str_getcsv', file('tax_rates.csv'));
    $header = array_shift($rows);
    $taxRates = array();
    foreach($rows as $row) {
        $taxRates[] = array_combine($header, $row);
    }
    
    // Close the file
    fclose($file);
    
    foreach($taxRates as $value){
        if($value['ZipCode'] == $zip){
            print $value['CombinedRate'];
            return;
        }
    }