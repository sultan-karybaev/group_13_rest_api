<?php

class Student{

    //db stuff
    private $conn;
    private $table = 'student';

    //student properties
    public $id;
    public $name;
    public $last_name;
    public $height;
    public $weight;
    public $batch;
    public $description;
    public $address;
    public $city;
    public $province;
    public $country;
    public $phone;
    public $email;
    public $website;
    public $MAD100;
    public $MAD105;
    public $MAD110;
    public $MAD120;
    public $MAD125;
    public $MAD200;
    public $MAD225;
    public $status;

    //constructor with db connection
    public function __construct($db) {
        $this->conn = $db;
    }

    //getting students from database
    public function read() {

        //query
        $query = 'SELECT * FROM ' .$this->table;

        //prepare statement
        $stmt = $this->conn->prepare($query);

        //execute
        $stmt->execute();

        return $stmt;
            
    }

    public function read_single() {

        //query
        $query = 'SELECT FROM ' . $this->table . ' s WHERE s.id = ? LIMIT 1';

        //prepare statement
        $stmt = $this->conn->prepare($query);

        //binding param
        $stmt->bindParam(1, $this->id);

        //execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->last_name = $row['last_name'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->batch = $row['batch'];
        $this->description = $row['description'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->province = $row['province'];
        $this->country = $row['country'];
        $this->phone = $row['phone'];
        $this->email = $row['email'];
        $this->website = $row['website'];
        $this->MAD100 = $row['MAD100'];
        $this->MAD105 = $row['MAD105'];
        $this->MAD110 = $row['MAD110'];
        $this->MAD120 = $row['MAD120'];
        $this->MAD125 = $row['MAD125'];
        $this->MAD200 = $row['MAD200'];
        $this->MAD225 = $row['MAD225'];
        $this->status = $row['status'];
    

    }


}

?>