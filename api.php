<?php

include_once("trie.class.php");
header('Content-type: application/json');
const DICTIONARY = 'dictionary.txt';

$input = strtolower($_POST['input']);
$result = [];

if (!empty($input)) {
    $file = file(DICTIONARY);

    $trie = new Trie();
    foreach ($file as $line) {
        $trie->add(trim($line));
    }

    $result = array_keys($trie->prefixSearch($input));
}

if (empty($result)) {
    $result = [];
}

echo json_encode($result);