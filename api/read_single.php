<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initializing api
include_once('../core/initialize.php');

//instantiate student
$student = new Student($db);

$student->id = isset($_GET['id']) ? $_GET['id'] : die();

$student->read_single();



$student_arr = array(
    'id' => $student->id,
    'name' => $student->name,
    'last_name' => $student->last_name,
    'height' => $student->height,
    'weight' => $student->weight,
    'batch' => $student->batch,
    'description' => $student->description,
    'address' => $student->address,
    'city' => $student->city,
    'province' => $student->province,
    'country' => $student->country,
    'phone' => $student->phone,
    'email' => $student->email,
    'website' => $student->website,
    'MAD100' => $student->MAD100,
    'MAD105' => $student->MAD105,
    'MAD110' => $student->MAD110,
    'MAD120' => $student->MAD120,
    'MAD125' => $student->MAD125,
    'MAD200' => $student->MAD200,
    'MAD225' => $student->MAD225,
    'status' => $student->status,
);

//make a json
print_r(json_encode($student_arr));





?>