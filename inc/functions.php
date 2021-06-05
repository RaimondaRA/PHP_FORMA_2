<?php

$validation = [];
function validation($data){
    global $validation;
    if(empty($_POST['name']) or !preg_match('/A-Z/',$_POST['name'])){
        $validation = "Vardas turi buti is didziosios raides";
    }
}

function storeData(){
    $data = "data/messages.txt"; //nusirodome kelia iki text failo
    $content = file_get_contents($data); //nuskaitome duomenis is text failo. Failo turinis
    $formData = implode(',',$_POST); //viska ka gauname is formos, priskiriama kintamajam formData. Konvertuojame POST masyva i string
    $content .= $formData."/n"; //prie formos duomenu pridedame eilutes pabaigos zenkla
    file_put_contents($data,$content); //irasomi duomenys i faila formos duomenys
    //var_dump($content);
}