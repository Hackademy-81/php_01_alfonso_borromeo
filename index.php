<?php
//Esercizio 1
//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $array = [1,2,3,4,5,6,7,8,9,10];
// $media = 0;
// $count = 0;

// for($i = 0; $i < count($array); $i++){

//     if($array[$i] % 2 == 0){
//         $media = $media + $array[$i];
//         $count++;
//     }

// };

// $media = $media/$count;

// echo "La media è $media";


//Esercizio 2
//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//   ];
  
// $array = [
//     ["name" => "Alfonso", "cognome" => "Borromeo", "gender" => "M"],
//     ["name" => "Lorenzo", "cognome" => "Linciano", "gender" => "M"],
//     ["name" => "Elisa", "cognome" => "Giannella", "gender" => "F"],
//     ["name" => "Eduard", "cognome" => "Corciu", "gender" => "M"],
//     ["name" => "Pippo", "cognome" => "Bisio", "gender" => "NB"],
// ];
// for($i = 0; $i < count($array); $i++){
//     if($array[$i]["gender"] == "M"){
//         echo "Buongiorno Sig. " . $array[$i]["name"] . " " . $array[$i]["cognome"] . "\n";
//     }else if($array[$i]["gender"] == "F"){
//         echo "Buongiorno Sig.ra ". $array[$i]["name"] ." " . $array[$i]["cognome"] . "\n";
//     }else if($array[$i]["gender"] == "NB"){
//         echo "Buongiorno  ". $array[$i]["name"] . " " . $array[$i]["cognome"] . "\n";
// }
// };




//Esercizio 3
//Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY66".

// for($i = 1; $i <= 100; $i++){
//     if($i % 3 == 0 && $i % 5 == 0){
//         echo "$i HACKADEMY81\n";
//     }else if($i % 5 == 0){
//         echo "$i JAVASCRIPT\n";
//     }else if($i % 3 == 0){
//         echo "$i PHP\n";
//     }else{
//         echo $i. "\n";
//     }
// }


?>