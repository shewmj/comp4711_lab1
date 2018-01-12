<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            include('Student.php');

            //array to contain all new students
            $students = array();

            //add new default student 
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            //add new default student 
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //add new student - Me
            $third = new Student();
            $third->surname = "Shew";
            $third->first_name = "Matthew";
            $third->add_email('home','Matt@gmail.com');
            $third->add_email('work1','mjs@bcit.ca');
            $third->add_email('work2','matthew@physics.mit.edu');
            $third->add_grade(56);
            $third->add_grade(45);
            $third->add_grade(98);
            $students['M342'] = $third;
            
            //sort students order
            ksort($students); // one of the many sort functions
            
            //print students info to screen 
            foreach($students as $student)
                echo $student->toString();
            
        ?>
    </body>
</html>
