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

<h4>Con chiavi Standard 0, 1, 2 ecc</h4>

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

<h1>MANIPOLAZIONE ARRAY</h1>

            <!-- MANIPOLAZIONE DI ARRAY  -->

<!-- 1. array_key_exists(key, array) - restituisce TRUE se la chiave esiste, altrimenti FALSE -->

<h3>--- OTTIMO PER I FLUSSI DI DECISIONE ---</h3>
<h4>Key exist</h4>
<?php
$exist = array_key_exists('nome', $user);
var_dump($exist);
?>

<!-- 2. in_array(value, array) - restituisce TRUE se il valore è presente nell'array altrimenti FALSE  -->
 
 <h4>In Array</h4>
 
 <?php
$animals = ['cat', 'dog', 'paolo' ];
// $in = in_array('paolo', $animals);
$in = in_array('tiger', $animals);
// qui di seguito si potrebbe 
// proseguire con una condizione
var_dump($in);
 ?>

<!-- 3. array_keys(array) - restituisce tutte le chiavi dell'Array.  -->

<h4>array_keys</h4>

<?php
$shop = [
    'prodotto' => 'abbigliamento',
    'modello' => 'femminile',
    'taglia' => 'S-M-L-XL'
];

$key = array_keys($shop);
var_dump($key);
?>

<!-- 4. array_merge(array1, array2...) unsice due o più array - il CONCAT del mondo PHP  -->

<h4> array_merge</h4>

<?php

$merged = array_merge($animals, $strumenti_musicali);
var_dump($merged);

?>

<!-- 5. array_search(value, array) - cerca il valore all'interno di un array e 
restituisce la chiave della prima occorrenza trovata -->

<h4>array_search</h4>

<?php
$shop = [
    'prodotto' => 'abbigliamento',
    'modello' => 'femminile',
    'taglia' => 'S-M-L-XL'
];

$target = array_search('femminile', $shop);
var_dump($target);  
?>




















</body>

</html>