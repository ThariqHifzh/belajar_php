<?php

// $nama = "Reza Ibrahim";
// $phone = "0987654";
// $gender = ["L", "P"];
// $umur = 30;
// $weight = 69.50;
// $student = TRUE;
// $job_seeker = FALSE;

// var_dump($umur);
// var_dump($weight);
// echo $nama . "<br>";
// echo $phone;
// var_dump($gender);


$manusia = [
    [
        'name' => 'Reza Ibrahim',
        'phone' => "0987654",
        'gender' => ['L', 'P'],
        'umur' => 30,
        'weight' => 69.10,
        'student' => TRUE,
        'job_seeker' => FALSE,
    ],
    [
        'name' => 'Bambang Pamungkas',
        'phone' => "12345678",
        'gender' => ['L', 'P'],
        'umur' => 30,
        'weight' => 69.10,
        'student' => TRUE,
        'job_seeker' => FALSE,
    ],
];

// fungsi dari function : untuk membuat sebuah query / perintah yang berulang
function convertGender($gender){
    if($gender == ucfirst("l")){
        $gender_text = "Laki-laki";
    } else{
    $gender_text = "Perempuan";
    }
    
    return $gender_text;
}

function convertGender2()
{
    $gender = "P";
    switch ($gender) {
        case 'L':
    $gender_text = "Laki-laki";
    break;
default:
    $gender_text = "Perempuan";
    break;
}    
    return $gender_text;
}
foreach($manusia as $key => $value){
    $kalimat = " Nama saya adalah ". $value['name']. " Jenis Kelamin ". convertGender($value['gender'][0])  . "<br>";
    echo $kalimat;

}