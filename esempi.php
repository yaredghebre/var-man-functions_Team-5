<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Team 5 - Presentazione</title>
</head>

<body>
    <div class="container">
        <h1>Variable Handling Functions</h1>

        <ul class="show">
            <li>ISSET / EMPTY</li>
            <li>UNSET</li>
            <li>GETTYPE (Implicit e explicit casting)</li>
            <li>SETTYPE</li>
        </ul>

        <ul>

            <!-- <li>ISSET - EMPTY</li> -->
            <br>
            <?php

            // $nome = "Mario";


            // if(isset($nome)) {
            // echo "La variabile è definita";
            // } else {
            // echo "La variabile non è definita";
            // }


            // if(empty($nome)) {
            // echo "La variabile è vuota";
            // } else {
            // echo "Il nome è $nome";
            // }
            

            // if(isset($nome) && !empty($nome)) {
            // echo "Il nome è $nome";
            // } else {
            // echo "Il nome non è definito";
            // }
            ?>

            <!-- <li>UNSET</li> -->
            <br>
            <?php
            // STRINGA // //
            // $nome = "Giulio";

            // echo "Il mio nome è: " . $nome . "<br>";

            // unset($nome);
            // echo "Il mio nome è: " . $nome;

            // // elimina la variabile riportando un errore in 'notice'


            // // ARRAY // //
            // $lettere = ["a", "b", "c"];
            // var_dump($lettere);

            // unset($lettere[1]);

            // var_dump($lettere);



            // // for ($i = 0; $i < count($lettere); $i++) {
            // //     echo $lettere[$i];
            // // }



            // foreach ($lettere as $lettera)  {
            //     echo $lettera;
            // }
            // ?>

            <!-- <li>GETTYPE</li> -->
            <br>
            <?php
            // $frutta = array("mela", "banana", "arancia");

            // echo gettype($frutta);



            //// IMPLICIT CASTING //////////////////////
            // $num1 = "5";
            // $num2 = 10;
            // $result = $num1 + $num2;

            // echo gettype($num1) . "<br>";
            // echo gettype($num2) . "<br>";

            // echo $result;


            //////////// EXPLICIT CASTING //////////////////////
            // $num1 = "5"; 
            // $num2 = 10;
            // echo gettype($num1) . "<br>";

            // $num1 = (int) $num1;
            // echo gettype($num1) . "<br>"; 

            // $result = $num1 + $num2;


            // echo $result;

            // echo gettype($result);
            // ?>

            <!-- <li>SETTYPE</li> -->
            <br>
            <?php
            $numero = "10";

            echo gettype($numero) . ": " . $numero . "<br>";

            settype($numero, "float");

            echo gettype($numero) . ": " . $numero;
            ?>

        </ul>

    </div>

</body>

</html>


<?php


//////////// IS CALLABLE  //////////////////////////////

// function sum($a, $b) {
//     return $a + $b;
//   }

//   $somma = 'sum';


//   if (is_callable($somma)) {
//     echo "La variabile è una funzione eseguibile";
//   } else {
//     echo "La variabile non è una funzione eseguibile";
//   }



?>