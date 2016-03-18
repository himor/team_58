<?php

include_once("trie.class.php");
include_once("redis.class.php");
header('Content-type: application/json');
const DICTIONARY = 'dictionary.txt';

$candidateDictionary = [
    'hil'   => 'hil_dictionary.txt',
    'ber'   => 'ber_dictionary.txt',
    'trump' => 'don_dictionary.txt',
];

$result = [];

switch ($_POST['command']) {
    case "phrase":
        $input     = strtolower($_POST['input']);
        $candidate = $_POST['candidate'];

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
        break;
    case "share":
        $db     = new DB();
        $input = $_POST['input'];
        $input['_candidate'] = $_POST['candidate'];
        $result = [
            'key' => $db->add($input)
        ];
        break;
    case "find":
        $db     = new DB();
        $key = $_POST['input'];
        $block = $db->find($key);
        if (!empty($block)) {
            $result['candidate'] = $block['_candidate'];
            unset($block['_candidate']);
            $result['sentence'] = $block;
        }
        break;
}

if (empty($result)) {
    $result = [];
}

echo json_encode($result);