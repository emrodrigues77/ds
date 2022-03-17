<?php

require_once 'Graph.php';

$graph = array(
    'A' => array('B', 'F'),
    'B' => array('A', 'D', 'E'),
    'C' => array('F'),
    'D' => array('B', 'E'),
    'E' => array('B', 'D', 'F'),
    'F' => array('A', 'E', 'C'),
);

$g = new Graph($graph);

// least number of hops between D and C
$g->breadthFirstSearch('D', 'C');
echo "<br />";
// outputs:
// D to C in 3 hops
// D->E->F->C

// least number of hops between B and F
$g->breadthFirstSearch('B', 'F');
echo "<br />";
// outputs:
// B to F in 2 hops
// B->A->F

// least number of hops between A and C
$g->breadthFirstSearch('A', 'C');
echo "<br />";
// outputs:
// A to C in 2 hops
// A->F->C

// least number of hops between A and G
$g->breadthFirstSearch('A', 'G');
echo "<br />";
// outputs:
// No route from A to G