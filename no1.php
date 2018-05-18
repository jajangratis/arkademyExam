<?php
// $nama = "Trian Afiansyah";
// $address = "Jatiuwung,Tangerang";
// $hobbies = array('coding','watch anime','game');
// $is_married = false;
// $school = [
//     'highschool' => "smkn 4 tangerang",
// ];

class bio
{
    public $nama;
    public $address;
    public $hobbies;
    public $is_married;
    public $schools;
    public $skill;
    
    
}

function printMe()
{
    $biome = new bio();
    $biome->nama = 'Trian Afiansyah';
    $biome->address = "Jatiuwung,Tangerang";
    $biome->hobbies = array('coding','watch anime','game');
    $biome->is_married = false;
    $biome->schools = (object)[
            'highschool' => "smkn 4 tangerang"
        ];
    $biome->skill = (object)[
        'skills' => array(
            'write a code',
            'pc Maintenance'
        )
    ];

    echo json_encode($biome);
}

printMe();
 
?>