<?php

namespace App\Models;

class Journal {
    public $name;
    public $publishYear;

    public function __construct($name, $publishYear) 
    {
        $this->name = $name;
        $this->publishYear = $publishYear;
    }
}

?>