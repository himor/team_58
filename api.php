<?php

include_once("trie.class.php");

ini_set('xdebug.var_display_max_depth', -1);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);


const DICTIONARY = 'dictionary.txt';

$file = file(DICTIONARY);

$trie = new Trie();
foreach ($file as $line) {
    $trie->add(trim($line));
}

var_dump($trie->prefixSearch('i want'));

var_dump($trie->prefixSearch('say'));