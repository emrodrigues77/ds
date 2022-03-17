<?php

require 'TrieTree.php';

$trie = new Trie();

$strings = ['b', 'abc', 'abd', 'bcd', 'abcd', 'efg', 'hii'];

foreach ($strings as $str) {
    $trie->insert($str);
}

if ($trie->find('bcd')) {
    print  "Include this string\n";
} else {
    print  "Does not contain this string\n";
}

print_r($trie->getRoot());