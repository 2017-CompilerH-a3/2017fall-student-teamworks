<?php
    trait Drive {
        public $carName = 'trait';
        public function driving() {
            echo "driving {$this->carName}\n";
        }
    }
    class Person {
        public function eat() {
            echo "eat\n";
        }
    }
    class Student extends Person {
        use Drive;
        public function study() {
            echo "study\n";
        }
    }
    $student = new Student();
    $student->study();
    $student->eat();
    $student->driving();
//Trait的声明使用例子
