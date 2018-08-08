
<?php

    // initialize object
    include_once 'partida.php';
    $selection_human = $_POST['selection_human'];;
    Partida::jugar($selection_human);

    // $partida = new Partida();
    // $var = $partida->jugar($selection_human);



 ?>
