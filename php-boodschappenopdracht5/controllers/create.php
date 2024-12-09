<?php


require "validator.php";
require 'Database.php';
$db = new Database();



if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if(! validator::string($_POST['name'])) {
        $errors['name'] = 'Product Name is required';
    } 
    else if(! validator::integer($_POST['number'])) { 
        $errors['number'] = 'Product number is invalid';
    }
     else if(! validator::integer($_POST['price'])) { 
       $errors['price'] = 'Product price is invalid';
  }


    if(empty($errors)) {
        $db->query('insert into groceries(name, number, price) VALUES (:name, :number, :price)', [
            'name' => $_POST['name'],
            'number' => (int)$_POST['number'],
            'price' => (int)$_POST['price']
        ]);
    }
}
      

require "./views/create.view.php";

// if($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $errors = [];

//     if(strlen($_POST['name']) === 0) {
//         $errors['name'] = 'Product Name is required';
//     } 
//     else if(strlen($_POST['number']) === 0) { 
//         $errors['number'] = 'Product number is invalid';
//     }
//      else if(strlen($_POST['price']) === 0) { 
//        $errors['price'] = 'Product price is invalid';
//   }


//     if(empty($errors)) {
//         $db->query('insert into groceries(name, number, price) VALUES (:name, :number, :price)', [
//             'name' => $_POST['name'],
//             'number' => (int)$_POST['number'],
//             'price' => (int)$_POST['price']
//         ]);
//     }
// }