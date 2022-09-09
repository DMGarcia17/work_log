<?php
require_once '../core/Connection.php';
function saveFile($id, $name, $extension){
    $db = new DatabaseConnection();
    if ($id == null) {
        $res = $db->insert('files', 'name, extension', "'{$_POST['name']}', {$_POST['extension']}");
    }else{
        $res = $db->update('files', "ID={$_POST['ID']}", "name='{$_POST['name']}', extension={$_POST['extension']}");
    }
    return $res;
}

if ($_POST['function'] == 'sf'){
    echo saveFile($_POST['ID'], $_POST['name'],$_POST['extension']);
}