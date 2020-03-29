<?php
$host_name='localhost';
$user_name='vetmitun_mainuser';
$password='strongpass1';
$db='vetmitun_draft';

$con=mysqli_connect($host_name, $user_name, $password, $db) or die('database error!');
mysqli_select_db($con,$db);

if($con){
//	echo " connection established	";
}else{
	echo"
	connection error";
}
?>

<?php

if(isset($_POST['add'])){
    
     $id = $_POST['id'];	  
	  $division = $_POST['division'];
	  $district = $_POST['district'];
	   $upazila = $_POST['upazila'];
	    $unions = $_POST['unions'];
	  
	     	if($id==$id){
		$query="select* from divi where id='$id'";
		$query_check= mysqli_query($con,$query);
		if($query_check){
			if(mysqli_num_rows($query_check)>0){
				echo "
					  <script>
					  alert('this Mobile. no already used');
					  window.location.href='';
					  </script>
					  ";	
			}
			else{
				$insertion= "INSERT INTO divi VALUES (NULL, '$division','$district','$upazila','$unions')";
	
				$run= mysqli_query($con,$insertion);
				if($run){
					
					echo "
					  <script>
					  alert('Farmer data successfully inserted');
					  window.location.href='';
					  </script>
					  ";
					
				}else{
					
					echo "
					  <script>
					  alert('connection failed');
					  window.location.href='';
					  </script>
					  ";
					// run else
				}
				// email check else
			}
		}else{
			
			echo "
					  <script>
					  alert('database error');
					  window.location.href='';
					  </script>
					  ";
			//query_check else
		}
	}else{

		// else of password
	}	 

}		 
else{
//else of isset
} 
?>											
    
<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>

  <script type="text/javascript">
$(document).ready(function(){
    $('#division').on('change',function(){
        var divisionID = $(this).val();
        if(divisionID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'division_id='+divisionID,
                success:function(html){
                    $('#district').html(html);
                    $('#upazila').html('<option value="">Select district first</option>'); 
                }
            }); 
        }else{
            $('#district').html('<option value="">Select division first</option>');
            $('#upazila').html('<option value="">Select district first</option>'); 
        }
    });
    
    $('#district').on('change',function(){
        var districtID = $(this).val();
        if(districtID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'district_id='+districtID,
                success:function(html){
                    $('#upazila').html(html);
                }
            }); 
        }else{
            $('#upazila').html('<option value="">Select district first</option>'); 
        }
    });
    //
     $('#upazila').on('change',function(){
        var upazilaID = $(this).val();
        if(upazilaID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'upazila_id='+upazilaID,
                success:function(html){
                    $('#unions').html(html);
                }
            }); 
        }else{
            $('#unions').html('<option value="">Select district first</option>'); 
        }
    });
    //
});
    </script>
    
          <h2 style="text-align: center";>divistion-district-upazil-union</h2>
          <br>
           <form method="POST" action="" id="" align="" style="">
          
          <div class="select-boxes">
              
              <?php
//db details
$dbHost = 'localhost';
$dbUsername = 'vetmitun_mainuser';
$dbPassword = 'strongpass1';
$dbName = 'vetmitun_mainsite';
 
//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

    <?php

    //Get all division data
    $query = $db->query("SELECT * FROM dvp_divisions  ORDER BY division_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
       
    ?>
 
    <select name="division" id="division" >
        <option value="">Select division</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['division_id'].'">'.$row['division_name'].'</option>';
            }
        }else{
            echo '<option value="">division not available</option>';
        }
        ?>
      
    </select>
    
    <select name="district" id="district">
        <option value="">Select division first</option>
    </select>
    
    <select name="upazila" id="upazila">
        <option value="<?php echo $values['upazila_name']; ?>">Select District first</option>
    </select>
    <!---->
    <select name="unions" id="unions">
        <option value="">Select Upazila first</option>
    </select>
    <!---->
    </div>
 
		<input type="submit" name="add" value="Add Farmer's Info" class="btn btn-primary"/><br><br/>
		</form>
		
	
			