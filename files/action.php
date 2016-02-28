<?php
session_start();
include_once('dbConfig.php');
if (isset($_POST['bulk_delete_submit'])) {
    $idArr = $_POST['checked_id'];
    foreach ($idArr as $id) {
        $db->query("DELETE FROM speaker WHERE id_speaker=" . $id);
    }
    header("Location:speakers.php");
}