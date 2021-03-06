<?php

/**
 * Trie tree implementation
 * http://phpir.com/tries-and-wildcards/
 *
 * User: Tuan Duong <bacduong[at]gmail[dot]com>
 * Date: 8/10/14
 * Time: 2:32 PM
 *
 * Updated by Mike Gordo
 */
class Trie
{
    public $trie;

    public function __construct()
    {
        $this->trie = array('children' => array());
    }

    public function loadFromRedis($prefix = '')
    {
        $db    = new DB();
        $cache = $db->find('word:tree' . ($prefix ? ':' . $prefix : ''));
        if (!empty($cache)) {
            $this->trie = $cache;
            return true;
        } else {
            return false;
        }
    }

    public function saveToRedis($prefix = '')
    {
        $db = new DB();
        $db->add($this->trie, 'word:tree' . ($prefix ? ':' . $prefix : ''), 300);
    }

    public function add($key, $value = null)
    {
        $trieLevel          = &$this->getTrieForKey($key, true);
        $trieLevel['value'] = $value;
    }

    public function isMember($key)
    {
        $trieLevel = $this->getTrieForKey($key);
        if ($trieLevel != false && array_key_exists('value', $trieLevel)) {
            return true;
        }
        return false;
    }

    public function prefixSearch($prefix)
    {
        $trieLevel = $this->getTrieForKey($prefix);
        if (false == $trieLevel) {
            return false;
        } else {
            return $this->getAllChildren($trieLevel, $prefix);
        }
    }

    private function& getTrieForKey($key, $create = false)
    {
        $trieLevel = &$this->trie;
        for ($i = 0; $i < strlen($key); $i++) {
            $character = $key[$i];
            if (!isset($trieLevel['children'][$character])) {
                if ($create) {
                    $trieLevel['children'][$character] =
                        array('children' => array());
                } else {
                    // Disable notice because of return of reference variable
                    error_reporting(E_ALL && ~E_NOTICE);
                    return false;
                }
            }
            $trieLevel = &$trieLevel['children'][$character];
        }

        return $trieLevel;
    }

    private function getAllChildren($trieLevel, $prefix)
    {
        $return = array();
        if (array_key_exists('value', $trieLevel)) {
            $return[$prefix] = $trieLevel['value'];
        }

        if (isset($trieLevel['children'])) {
            foreach ($trieLevel['children'] as $character => $trie) {
                $return = array_merge($return,
                    $this->getAllChildren($trie, $prefix . $character));
            }
        }
        return $return;
    }
}
