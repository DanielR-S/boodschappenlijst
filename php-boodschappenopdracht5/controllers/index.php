<?php 

require 'Database.php';
$db = new Database();



// OLD VERS

// $producten = [
// "brood" => ["naam" => "brood", "prijs" => 1.00, "aantal" => 1],
// "Broccoli" => ["naam" => "Broccoli", "prijs" => 0.99, "aantal" => 3],
// "Krentebollen" => ["naam" => "Krentebollen", "prijs" => 1.20, "aantal" => 0],
// "Noten" => ["naam" => "Noten", "prijs" => 2.99, "aantal" => 0]
// ];

///
// $id = $_GET['id'];


$query = "select * from groceries";

$producten = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

// dd($producten);
////

function handy($carry, $item) {

return $carry + $item['price'] * $item['number']; } 


$totalPrice = array_reduce($producten, "handy", 0);


require "./views/index.view.php";