<?php 

require_once 'validation.php';

$filename = "studentLog.txt";
if(!file_exists("studentLog.txt")){
    $folder = fopen("studentLog.txt", 'w');
}else{
    $folder = fopen("studentLog.txt", 'a');
}

$message = "RA: " . $_POST['ra'] . "-" . "NOME: " . $_POST['name'] . "-" . "IDADE: " . $_POST['age'] . "-" . "Turma: " . $_POST['turma'] . "<br>";

fwrite($folder, $message);
fclose($folder);
header('Location: viewStudent.php');