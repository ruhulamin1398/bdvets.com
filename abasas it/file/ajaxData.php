<?php
//Include database configuration file
include('dbConfig.php');
 
  if(isset($_POST["division_id"]) && !empty($_POST["division_id"])){
    //Get all district data
    $query = $db->query("SELECT * FROM dvp_districts WHERE division_id = ".$_POST['division_id']." ORDER BY district_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display districts list
    if($rowCount > 0){
        echo '<option value="">Select district</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['district_id'].'">'.$row['district_name'].'</option>';
        }
    }else{
        echo '<option value="">district not available</option>';
    }
}  

if(isset($_POST["district_id"]) && !empty($_POST["district_id"])){
    //Get all upazila data
    $query = $db->query("SELECT * FROM dvp_upazilas WHERE district_id = ".$_POST['district_id']." ORDER BY upazila_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display upazilas list
    if($rowCount > 0){
        echo '<option value="">Select upazila</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['upazila_id'].'">'.$row['upazila_name'].'</option>';
        }
    }else{
        echo '<option value="">upazila not available</option>';
    }
}
//

if(isset($_POST["upazila_id"]) && !empty($_POST["upazila_id"])){
    //Get all union data
    $query = $db->query("SELECT * FROM dvp_unions WHERE upazila_id = ".$_POST['upazila_id']." ORDER BY unions_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display union list
    if($rowCount > 0){
        echo '<option value="">Select Union</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['unions_name'].'">'.$row['unions_name'].'</option>';
        }
    }else{
        echo '<option value="">Union not available</option>';
    }
}
//

?>