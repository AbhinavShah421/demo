<?php
  $pdo = new PDO('mysql:host=localhost;dbname=db_name', 'root', '');
  $select = 'SELECT *';
  $from = ' FROM workers';
  $where = ' WHERE TRUE';
  $opts = isset($_POST['filterOpts'])? $_POST['filterOpts'] : array('');
   if (in_array("hasCar0", $opts)){
    $where .= " AND hasCar  =0";
  }
 
  if (in_array("hasCar1", $opts)){
    $where .= " AND hasCar  =1";
  }
 
  if (in_array("hasCar2", $opts)){
    $where .= " AND hasCar  >1";
  }
  
   if (in_array("hasCar3", $opts)){
    $where .= " AND hasCar  >2";
  }

if (in_array("hasCar4", $opts)){
    $where .= " AND hasCar  >3";
  }


  if (in_array("speaksForeignLanguage", $opts)){
    $where .= " AND speaksForeignLanguage =1";
  }
if (in_array("speaksForeignLanguage2", $opts)){
    $where .= " AND speaksForeignLanguage =2";
  }
if (in_array("speaksForeignLanguage3", $opts)){
    $where .= " AND speaksForeignLanguage >=3";
  }
 


  if (in_array("canWorkNights", $opts)){
    $where .= " AND canWorkNights = 1";
  }
 
  if (in_array("isStudent", $opts)){
    $where .= " AND isStudent = 1";
  }
 
  $sql = $select . $from . $where;
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_ASSOC);
  $json = json_encode($results);
  echo($json);
?>