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

function loadFile($id){
    $db = new DatabaseConnection();
    $res = $db->filtered_query('files a', 'a.ID, a.name, a.extension', 'ID='.$id);
    echo json_encode($res);
}

switch ($_POST['function']){
    case 'sf':
        echo saveFile($_POST['ID'], $_POST['name'],$_POST['extension']);
        break;
    case 'ef':
        loadFile($_POST['ID']);
        break;
}