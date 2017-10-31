<?php include('core/init.php'); ?>


<?php
//CREATE db obj
$db = new Database;

$db->query("DELETE FROM contacts WHERE id = :id");

//Bind Values
$db->bind(':id', $_POST['id']);

if($db->execute()){
    echo "Contact was updated.";
} else {
    echo "Could not update contact.";
}

?>