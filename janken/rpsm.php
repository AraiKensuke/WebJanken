<?php
    if (isset($_POST["unique_filename"])) {
        $uniq_filename = $_POST['unique_filename'];
    } else {
        echo "no value:  unique_filename";
    }


    if (isset($_POST["name1"])) {
        $rec_hands = $_POST['name1'];
    } else {
        echo "no value:  name1";    
    }


    if (isset($_POST["name2"])) {
        $rec_per_hands = $_POST['name2'];
    } else {
        echo "no value:  name2";        
    }


    if (isset($_POST["name3"])) {
        $rec_times = $_POST['name3'];    

    } else {
        echo "no value:  name3";            
    }


    if (isset($_POST["name4"])) {
        $rec_inp_methd = $_POST['name4'];    

    } else {
        echo "no value:  name4";                
    }


    if (isset($_POST["name5"])) {
        $ini_weight = $_POST['name5'];    

    } else {
        echo "no value:  name5";                    
    }


    if (isset($_POST["name6"])) {
        $fin_weight = $_POST['name6'];    

    } else {
        echo "no value:  name6";                        
    }
    
    $file = "taisen_data/rpsm_" . $uniq_filename . ".dat";
    file_put_contents($file, $rec_hands);
    file_put_contents($file, "\n", FILE_APPEND);
    file_put_contents($file, $rec_per_hands, FILE_APPEND);
    file_put_contents($file, "\n", FILE_APPEND);
    file_put_contents($file, $rec_times, FILE_APPEND);
    file_put_contents($file, "\n", FILE_APPEND);
    file_put_contents($file, $rec_inp_methd, FILE_APPEND);
    file_put_contents($file, "\n", FILE_APPEND);
    file_put_contents($file, $ini_weight, FILE_APPEND);
    file_put_contents($file, "\n", FILE_APPEND);
    file_put_contents($file, $fin_weight, FILE_APPEND);
    ?>
