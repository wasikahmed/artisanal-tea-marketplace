<?php

namespace App\Models;

use App\Database;
use DateTime;

class Seller {
    public int $id;
    public string $name;
    public string $email;
    public string $phone;
    public string $storeName;
    public string $address;
    public \DateTime $registrationDate;
    public ?\DateTime $updated_at; // Explicit nullable type

    public function __construct(
        int $id = 0, string $name = '', string $email = '', string $phone = '', 
        string $storeName = '', string $address = '', ?\DateTime $updated_at = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->storeName = $storeName;
        $this->address = $address;
        $this->registrationDate = new DateTime();
        $this->updated_at = $updated_at ?? new DateTime();
    }

    public function save(): bool {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO Seller (Name, Email, Phone, StoreName, Address, RegistrationDate, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $registrationDate = $this->registrationDate->format('Y-m-d H:i:s');
        $updated_at = $this->updated_at->format('Y-m-d H:i:s');
        $stmt->bind_param('sssssss', $this->name, $this->email, $this->phone, $this->storeName, $this->address, $registrationDate, $updated_at);
        return $stmt->execute();
    }

    public static function getAll(): array {
        $db = Database::connect();
        $result = $db->query("SELECT * FROM Seller");
        $sellers = [];
        while ($row = $result->fetch_assoc()) {
            $sellers[] = new self(
                (int)$row['SellerID'], $row['Name'], $row['Email'], $row['Phone'], 
                $row['StoreName'], $row['Address'], new \DateTime($row['updated_at'])
            );
        }
        return $sellers;
    }
}

?>
