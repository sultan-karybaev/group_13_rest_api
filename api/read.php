<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initializing api
include_once('../core/initialize.php');

//instantiate student
$student = new Student($db);

//blog student query
$result = $student->read();

//get the row count
$num = $result->rowCount();

if($num > 0) {
    $student_arr = array();
    $student_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $student_item = array(
            'id' => $id,
            'name' => $name,
            'last_name' => $last_name,
            'height' => $height,
            'weight' => $weight,
            'batch' => $batch,
            'description' => $description,
            'address' => $address,
            'city' => $city,
            'province' => $province,
            'country' => $country,
            'phone' => $phone,
            'email' => $email,
            'website' => $website,
            'MAD100' => $MAD100,
            'MAD105' => $MAD105,
            'MAD110' => $MAD110,
            'MAD120' => $MAD120,
            'MAD125' => $MAD125,
            'MAD200' => $MAD200,
            'MAD225' => $MAD225,
            'status' => $status
        );

        array_push($student_arr['data'], $student_item);

    }

    //convert to JSON and output
    echo json_encode($student_arr);


} else {

    echo json_encode(array('message' => 'No students found.'));

}

?>