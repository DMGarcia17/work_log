<?php
    require_once '../core/Connection.php';
    $db = new DatabaseConnection();
    if (isset($_POST['file']) && $_POST['file'] != ''){
        $query = "insert into daily_log (file, registration_date, details, state) values ('{$_POST['file']}', now(),'{$_POST['details']}','{$_POST['state']}');";
        echo $query;
        if ($db->insert($query)){
            echo 'Success';
        } else{
            echo 'Fail';
        }
    } else {
        echo 'Empty form, please fill all the data';
    }