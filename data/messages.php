<?php

$pdo = include('conf/pdo.php');

if ( !empty($_GET['page']) )
	$page = $_GET['page'];
else $page = 1;

$pageSize = 4;
$offset = ( $page - 1 ) * $pageSize;

// preparation de la requete qui sert à récupérer les messages du topic courant
$statement = $pdo->prepare(sprintf(
	// regarder la doc de sprintf pour la signification des %1$s
	'SELECT * FROM messages WHERE topic_id = ? LIMIT %1$u, %2$u;',
	$offset,
	$pageSize
));
// execution de la requete avec le paramètre id.
$statement->execute([$_GET['id']]);

//print_r($statement->fetchAll(PDO::FETCH_ASSOC));

// récuperation des données
return $statement->fetchAll(PDO::FETCH_ASSOC);
