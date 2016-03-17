<?php

include_once("trie.class.php");
header('Content-type: application/json');
const DICTIONARY = 'dictionary.txt';

$candidateDictionary = [
    'hil' => 'hil_dictionary.txt',
    'ber' => 'ber_dictionary.txt',
    'trump' => 'don_dictionary.txt',
];

$input     = strtolower($_POST['input']);
$candidate = $_POST['candidate'];
$result    = [];

if (!empty($input)) {
    $file = file(DICTIONARY);

    $trie = new Trie();
    foreach ($file as $line) {
        $trie->add(trim($line));
    }

    if (!empty($candidate)) {
        $fileCandidate = file($candidateDictionary[$candidate]);
        foreach ($fileCandidate as $line) {
            $trie->add(trim($line));
        }
    }

    $result = array_unique(array_keys($trie->prefixSearch($input)));
}

if (empty($result)) {
    $result = [];
}

echo json_encode($result);