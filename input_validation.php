<?php

$validation = [
    'name' => [
            'slashcheck'=>true, 'htmlcheck' =>true, 'regex' => '/[a-zA-Z0-9]{3,50}/'
    ],
    'age' => ['int_cast'=>true]
];
forEach($_post as $key=>$value){ //one for each loop for each POST value
    $checks =$validation[$key];
    forEach($checks as $check_key => $check_value){ //one loop for each check value
        switch($check_value){
            case 'slashcheck':
                $_POST[$key]= addslashes($value);
                break;
            case 'htmlcheck':
                $_POST[$key] =htmlentities($value);
                break;
            case 'int_cast':
                $_POST[$key] =(int)$value;  //this will treat the data type as an integer and cutout any nefarious characters
                break;
            case 'regex':
                if(pregmatch($check_value, $value)==0){
                    $errors[] = "invalid value for " . $key;
                }
        }
    }
}

if(count($errors) != 0){
print_r($errors);
    die();
};

?>