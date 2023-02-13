<?php
require_once('database.php');

// Get IDs
$clinic_id = filter_input(INPUT_POST, 'Clinic_Id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($clinic_id != false) {
    $query = 'DELETE FROM Clinic
              WHERE clinicID = :Clinic_Id';
    $statement = $db->prepare($query);
    $statement->bindValue(':Clinic_Id', $clinic_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');

