<?php

$link = new PDO("mysql:host=localhost;dbname=cdv", "root", "");

$result = $link->query('SELECT id, nome FROM snb_cidade');

$posts = array();
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$link = null;

require 'templates/list.php';

?>