<?php 
  const DBHOST = 'localhost'; 
  const DBUSER = 'root'; 
  const DBPASS = 'CnDp@2015'; 
  const DBNAME = 'cndpform'; 
  
  $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME); 
  if ($conn->connect_error){
    die('could not connect to the databse!' .$conn ->connect_error); 
  } 
  else{
    $query = 'SELECT * FROM cndeliberation'; 
    $stmt = $conn->prepare($query); 
    $stmt->execute(); 
    $result = $stmt->get_result();  
    
    if($result == null){
      print( nothing to display); 
    } 
    else {
      while($row = $result->fetch_assoc()){
        print ($row['Année]); 
        print ($row['NDeliberation']); 
        print('cool'); 
    } 
  } 
?>
