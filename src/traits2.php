<?php 
    trait Drive {
        public function hello() {
            echo "hello drive\n";
        }
        public function driving() {
            echo "driving from drive\n";
        }
    }
    class Person {
        public function hello() {
            echo "hello person\n";
        }
        public function driving() {
            echo "driving from person\n";
        }
    }
    class Student extends Person {
        use Drive;
        public function hello() {
            echo "hello student\n";
        }
    }
    $student = new Student();
    $student->hello();
    $student->driving();
//当方法或属性同名时，当前类中的方法会覆盖 trait的 方法，而 trait 的方法又覆盖了基类中的方法。
