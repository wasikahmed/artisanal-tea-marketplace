<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Seller;

class SellerController extends Controller {
    public function index() {
        $sellers = Seller::getAll();
        $this->render('sellers/index', ['sellers' => $sellers]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $seller = new Seller(
                id: 0, 
                name: $_POST['name'], 
                email: $_POST['email'], 
                phone: $_POST['phone'], 
                storeName: $_POST['storeName'], 
                address: $_POST['address'], 
                updated_at: new \DateTime()
            );
            if ($seller->save()) {
                header('Location: /sellers');
            } else {
                echo 'Failed to create seller.';
            }
        } else {
            $this->render('sellers/create');
        }
    }
}

?>
