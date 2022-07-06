<?php

use App\FileGenerator;
use App\FilePDF;
use App\FileDocx;

/*
- Specific File Classes are sended to FileGenerator Class
- FileGenertor handle any Class that extends and implements AbstractFile Class
- Thus, to add more features, like another File Class, we just need to create it and extend AbstractFile
- For add new behaviours to already existent concrete Classes, we can create more Abstract Classes
- Nothing about the entire proccess will be modified, and this is the "O" principle of SOLID
*/

$fileGenerator = new FileGenerator();
$fileGenerator->generateFiles([new FilePDF(), new FileDocx()]);