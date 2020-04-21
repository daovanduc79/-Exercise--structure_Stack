<?php
include_once 'class/Stack.php';

$myStack = new Stack(10);
$myStack->push(1);
$myStack->push(2);
$myStack->push(3);
$myStack->push(4);
$myStack->push(5);
$myStack->pop();
$myStack->pop();
$myStack->pop();
$myStack->push(6);
$myStack->push(7);
var_dump($myStack->isEmpty());
$myStack->pop();
$myStack->pop();
$myStack->pop();
$myStack->pop();
var_dump($myStack->isEmpty());
$myStack->top();