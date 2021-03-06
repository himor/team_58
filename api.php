<?php

include_once "vendor/autoload.php";
include_once "trie.class.php";
include_once "redis.class.php";

header('Content-type: application/json');
const DICTIONARY = 'dictionary.txt';

$candidateDictionary = [
    'hillary' => 'hil_dictionary.txt',
    'bernie'  => 'ber_dictionary.txt',
    'trump'   => 'don_dictionary.txt',
];

$result = [];

switch ($_POST['command']) {
    case "phrase":
        $input     = strtolower($_POST['input']);
        $candidate = $_POST['candidate'];

        if (!empty($input)) {
            $trie = new Trie();
            if (!$trie->loadFromRedis($candidate)) {
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
                $trie->saveToRedis($candidate);
            }
            $result = array_unique(array_keys($trie->prefixSearch($input)));
        }
        break;
    case "share":
        $db                  = new DB();
        $input               = $_POST['input'];
        $input['_candidate'] = $_POST['candidate'];
        $key                 = $db->add($input);
        $result              = [
            'key' => $key
        ];
        /* process recent */
        $db->addRecent(array_merge($input, ['_key' => $key]), $input['_candidate']);
        break;
    case "find":
        $db    = new DB();
        $key   = $_POST['input'];
        $block = $db->find($key);
        if (!empty($block)) {
            $result['candidate'] = $block['_candidate'];
            unset($block['_candidate']);
            $result['sentence'] = $block;
        }
        break;
    case "recent":
        $candidate = $_POST['candidate'];
        $db        = new DB();
        $block     = $db->findRecent($candidate);

        foreach ($block as $key => $item) {
            $temp = $item['_key'];
            unset($block[$key]['_candidate'], $block[$key]['_key']);
            $result[$temp] = $block[$key];
        }

        break;
}

if (empty($result)) {
    $result = [];
}

echo json_encode($result);