<?php

require 'BinaryTree.php';

$tree = new BinaryTree();

$tree->insert(1);
$tree->insert(2);
$tree->insert(-2);
$tree->insert(3);
$tree->insert(4);
$tree->insert(0);

$tree->traverse();

var_dump($tree);