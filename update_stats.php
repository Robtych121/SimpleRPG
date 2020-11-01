<?php
include 'includes/init.php';

$char_id = $_POST["char_id"];
$current_hp = $_POST["current_hp"];
$max_hp = $_POST["max_hp"];
$current_energy = $_POST["current_energy"];
$max_energy = $_POST["max_energy"];
$current_exp = $_POST["current_exp"];
$max_exp =  $_POST["max_exp"];

if($current_hp != $max_hp){
    updateCharacter($char_id, $current_hp, $current_energy, $current_exp);
}
if($current_energy != $max_energy){
    updateCharacter($char_id, $current_hp, $current_energy, $current_exp);
}
if($current_exp != $max_exp){
    updateCharacter($char_id, $current_hp, $current_energy, $current_exp);
}

?>