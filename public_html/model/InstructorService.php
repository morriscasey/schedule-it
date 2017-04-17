<?php
  require('Instructor.php');
  require('InstructorMapperMySQL.php');

  class InstructorService {
    // TODO: JCM Create field to store repository mapper updateStartEnd

    // TODO: JCM Create constructor to initialize Mapper

    /* Takes first and last name  adds data to instructor table and creates an object based on data table */
    public function addInstructor($firstName, $lastName){
      $instructor = new Instructor();
      $mapper = new InstructorMapperMySQL();
      $instructor = $mapper->addByName($instructor, $firstName, $lastName);
      return $instructor;
    }

    public function deleteInstructor(Instructor $instructor){
      $mapper = new InstructorMapperMySQL();
      $mapper->removeById($instructor->id);
    }

    public function fetchAll(){
      $mapper = new InstructorMapperMySQL();
      $mapper->fetchAll();

    }
  }
?>
