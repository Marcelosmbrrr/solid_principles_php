<?php declare(strict_types=1);

namespace App;

/*
- This class is only used for email routines
*/

class EmailController {

    public string $subject;
    public string $datetime;
    public string $from;
    public string $for;
    
    public function __construct(string $subject, string $from, string $for){
        $this->subject = $subject;
        $this->datetime = date("Y-m-d H:i:s");
        $this->from = $from;
        $this->for = $for;
    }

    public function send(){
        echo "<p>Subject: {$this->subject} | From: {$this->from} | For: {$this->for} | Date: {$this->datetime} </p>";
        echo "<p>Sending.....</p>";
        echo "<p>Email was successful sent!</p>";
    }
    
}