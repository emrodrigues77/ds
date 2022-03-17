<?php

require 'LinkedList.php';

$linkedList = new LinkedList();

$node1 = new Node();
$node1->data = 10;

$node2 = new Node();
$node2->data = 20;

$node3 = new Node();
$node3->data = 30;

$node1->next = $node2;
$node2->next = $node3;
$linkedList->head = $node1;

$linkedList->printList();