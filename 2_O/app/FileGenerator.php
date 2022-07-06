<?php

namespace App;

/*
- Here the instances of specific Files Classes are received and executed
- Each specific File class is a extension of AbstractFile class
- So, any object of a class that extends AbstractFile can be sended to here
*/

class FileGenerator {

    public function generateFiles(array $files){

        foreach($files as $file){
            $file->build();
        }
    }
}