<?php
require '../src/Hello.php';

use Salutations\Hello;

$hello = new Hello();
echo $hello->talk(); // Affiche "Hello World !"

?>