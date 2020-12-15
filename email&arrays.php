<!-- SOLO LOGICA PHP  -->

<!-- Controllare che l'email passata in GET sia 
ben formata e contenga un punto e una chiocciola.
Se è corretta stampare un div che contenga 'OK' 
o altrimenti contenga 'KO'  -->

<?php
// FUNZIONE DI UTILITY PER CAPIRE SE UNA 
// VARIABILE CONTIENE UN VALORE OPPURE è VUOTA
// empty (se è vuota == true)

// ?email=francesco@gmail.com
if (empty($_GET['email'])) {
    echo 'Errore, nessun parametro per l\'indirizzo email';
}                                        // OPPURE
elseif (strpos($_GET['email'], '@') === false || strpos($_GET['email'], '.')  === false) {
    echo 'Accesso Negato';
} else {
    echo 'Accesso Riuscito';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>ARRAYS PHP</h2>

    <?php

    $my_array = ['Ciao', 'Hello', 'World'];

    var_dump($my_array);

    ?>

    <h2>ARRAYS CON CHIAVI PHP</h2>

    <?php
    $user = [
        'nome' => 'Francesco',
        'cognome' => 'Amato',
        'professione' => 'Aspirante Web Dev'
    ];
    var_dump($user);

    ?>

    <dl>
        <dt><strong>Nome: </strong></dt>
        <dd>
            <?php
            echo $user['nome'];
            ?>
        </dd>
        <dt><strong>Cognome: </strong></dt>
        <dd>
            <?php
            echo $user['cognome'];
            ?>
        </dd>
        <dt><strong>Professione: </strong></dt>
        <dd>
            <?php
            echo $user['professione'];
            ?>
        </dd>
    </dl>

<h2>AGGIUNGERE DATI AD UN ARRAY</h2>

<h4>Con chiavi Standard</h4>

<?php

$strumenti_musicali = ['Chitarra', 'Pianoforte','Basso', 'Batteria'];
$strumenti_musicali[] = 'Sax';

var_dump($strumenti_musicali);
?>

<h4>Con chiavi definite dall'Utente</h4>

<?php 
$user['età'] = 33;
var_dump($user);
?>




</body>

</html>