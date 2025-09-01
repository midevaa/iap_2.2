<?php
//Create a class
class Sample{
    public function greet() {
        return "Hello from Sample class!";
    }
}
//call class
//create an instance of the class
$sample = new Sample();
//call the greet method
echo $sample->greet();