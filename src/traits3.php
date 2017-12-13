<?php
trait Trait1 {
    public function hello() {
        echo "Trait1::hello\n";
    }
    public function hi() {
        echo "Trait1::hi\n";
    }
}
trait Trait2 {
    public function hello() {
        echo "Trait2::hello\n";
    }
    public function hi() {
        echo "Trait2::hi\n";
    }
}
class Class1 {
    use Trait1, Trait2;
}
