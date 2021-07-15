<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

//caminho banco;
$databasePath = __DIR__.'/banco.sqlite';
$pdo = new PDO('sqlite:' .$databasePath);

//instanciando a classe student:
$student = new Student(null, 'Vinicius Dias', new \DateTimeImmutable('1997-10-25'));

$sqlInsert = "INSERT INTO student(name, birth_day) VALUES('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

 //echo "$sqlInsert";

//$pdo->exec($sqlInsert);

var_dump($pdo->exec($sqlInsert));