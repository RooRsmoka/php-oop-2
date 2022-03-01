<?php
require_once __DIR__ . "/classes/products.php";
require_once __DIR__ . "/classes/foods.php";
require_once __DIR__ . "/classes/accessories.php";
require_once __DIR__ . "/classes/toys.php";
require_once __DIR__ . "/classes/user.php";


$item1 = new Foods("Gatti", "Patè di manzo gourmet in umido", 0.89, "85 gr", "05/13/2021");
$item2 = new Toys("Cani", "Osso giocattolo", 5.29, "Corda");
$item3 = new Accessories("Uccelli", "Mangiatoia per uccelli", 15.99, "Dispenser di mangime");
var_dump($item1, $item2, $item3);
?>