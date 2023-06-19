<?php
//  REFFERENCE
// https://www.php.net/manual/en/language.oop5.basic.php 

// classes: may contain its own constant,variable(called properties), and functions(called methods)

// EXAMPLE1: A Simple class definition 

// class SimpleClass{

//     //property declaration same as properties
//     public $var= 'a Peace values';

//     //method declaration same as function
//     public function displayVar(){

//         echo $this->var;

//         // $this is a variable when a method is called from within an object context
//         // $this is a value of calling object
//     }
// }

// //EXAMPLE 2 of the $this pseudo-variable

// class A{
  
//      function peace(){
     
//         if(isset($this)){
//             echo '$this is defined (';
//             echo get_class($this);
//             echo ').';
//         }else{
//             echo '$this is not defined';
//         }

//      }
//     }
//     class B
//     {
        
//         function Namahoro(){
//         A::peace();
//     }
//     }

// $a = new A();
// $a->peace();

// A::peace();

// $b=new B();
// $b->Namahoro();

// B::Namahoro();



// //  readonly properties

// // readonly class foo
// // {
// //     public static int $bar;
// // }
// //  this will print the error 


// // EXAMPLE 3 Creating an instance or Object

// $instance = new SimpleClass();

// //This can also be done with a variable
// $className= 'SimpleClass';
// $instance = $className;




class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
    return 'ClassA';
}

var_dump(new (getSomeClass()));
var_dump(new ('Class' . 'B'));
var_dump(new ('Class' . 'C'));
var_dump(new (ClassD::class));

?>