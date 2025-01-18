<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Journal;

class HomeController extends Controller {
    public function index() {
        $journals = [
            new Journal('Journal 1', 2020),
            new Journal('Journal 2', 2021),
            new Journal('Journal 3', 2022)
        ];

        $this->render('index', ['journals' => $journals]);
    }
}

?>
