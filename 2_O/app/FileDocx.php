<?php declare(strict_types=1);

namespace App;

use App\AbstractFile;

class FileDocx extends AbstractFile {

     // Method from AbstractFile
    public function build() : void {
        echo "<p>DOCX builded!</p>";
    }

}