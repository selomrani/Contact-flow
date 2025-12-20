<?php
require_once __DIR__ . '/../../../../src/config/connectdb.php';
$Delete_id = $_POST['delete'];

    $query ="DELETE FROM contacts WHERE id = $Delete_id";
    $stmt = $db_connect->prepare($query);
    $stmt->execute();
    header("Location: ../home.php");
