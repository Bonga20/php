<?php
//all your code
// $my name ="Bonga Charles Beltrone"-
// echo $myname;

//arrays
$students =array("Purity","Annet","Bonga");
echo $students[2];

//Associatiative array
$mymarks = array("Assessments"=>25,
                    "CAT"=>15,
                    "Projects"=>35,
                    "Attendance"=>8
                );
echo "My Project Marks:" .$mymarks["Projects"];

//Multidimentional Arrays
$webDevTechnologies = array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend' => array('PHP','Python','Java','JS'),
    'framework' => array('Laravel','Django','SpringBoot','flutter'),
    'database' => array('MySQL','PostgreSQL','MongoDB','Firebase'),
);
echo $webDevTechnologies['frontend'][3];
echo $webDevTechnologies['framework'][2];
echo $webDevTechnologies['database'][0];
?>