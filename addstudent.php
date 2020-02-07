<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submited"])){
	if(!empty($_POST["FName"])&&!empty($_POST["SID"])){

        $FName = $_POST["FName"];
    		$LName = $_POST["LName"];
    		$SID = $_POST["SID"];
    		$Password = $_POST["Password"];
    

        $insertStudent = "INSERT INTO students_record(first_name,last_name,student_id,password)
        VALUES('".$FName."','".$LName."','".$SID."','".$Password."')";

		$connect->exec($insertStudent);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please fill Atleast First Name and SID</span>';
	}
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Add New Student:</h4>
        </div>
        <form action="addstudent.php" method="Post">
       <fieldset>
         <span class="FieldInfo">First Name:</span><br><input type="text" name="FName" value=""><br>
          <span class="FieldInfo">Last Name:</span><br><input type="text" name="LName" value=""><br>
          <span class="FieldInfo">Student Id:</span><br><input type="text" name="SID" value=""><br>
           <span class="FieldInfo">Password:</span><br><input type="text" name="Password" value=""><br>
    <br>
        <input type="Submit" name="Submited" value="Submit Your Record"><br>


          </fieldset>

         </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
