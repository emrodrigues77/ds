<?php

//node structure
class Node {
    public $data;
    public $next;
}

class LinkedList {
    public $head;

    //constructor to create an empty LinkedList
    public function __construct() {
        $this->head = null;
    }

    public function printList() {
        $temp = new Node();
        $temp = $this->head;

        if ($temp != null) {
            echo "List's Content: ";

            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }

            echo " ";
        } else {
            echo "The list is empty.\n";
        }
    }
}