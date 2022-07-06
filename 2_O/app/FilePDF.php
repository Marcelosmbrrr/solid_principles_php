<?php declare(strict_types=1);

namespace App;

use App\AbstractFile;

class FilePDF extends AbstractFile {

    // Method from AbstractFile
    public function build() : void {
        echo "<p>PDF builded!</p>";
    }
    
}