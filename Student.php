<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Matt
 */
class Student {
    /**
     * Constructor for creating a new student. 
     * 
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Method to set the email for a student. 
     * @param type $which What the email address is used for by the student.  
     * @param type $address The email address of the student. 
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Method to add a grade for a student.  
     * @param type $grade The grade of the student. 
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Method to calculate the average grade of a student. 
     * @return type Returns the average grade between all the grades of a student. 
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    
    /**
     * Method to summarize a students info into a string. 
     * @return type Returns a string containing the students name, average grade, and emails. 
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    

}
