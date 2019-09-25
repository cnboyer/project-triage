<?php
//code goes Hernandez

$someVar = 5;

function foo() {
return 'bar'
}


//echo is the same as "display"; odt equals conncatinate
echo $someVar;
echo foo() . foo();


class myClass {
  public $someVar;

  public funion addOne($n) {
    return $n + 1;
  }
}

$inst = new MyClass ();

$inst -> someVar = 5;

$arr = [];

//Both lines of code are equivilant; add item to array
array_push($arr,'a');
$arr[] = 'b';

//Associative arraY
$arr['key'] = 'val';
