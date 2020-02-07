<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["FName"])&&!empty($_POST["TutorId"])){

    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $TutorId = $_POST["TutorId"];
    $Password = $_POST["Password"];
    $Coursecode = $_POST["Coursecode"];

    $insertTeacher = "INSERT INTO teachers_record(first_name,last_name,tutor_id,password,course_code)
        VALUES('".$FName."','".$LName."','".$TutorId."','".$Password."','".$Coursecode."')";

		$connect->exec($insertTeacher);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please fill Atleast First Name and TutorId</span>';
	}
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">New Teacher</h2>
      

      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Add Teacher:</h4>
        </div>
        <form action="addteacher.php" method="Post">
	    <fieldset>
       <span class="FieldInfo">First Name:</span><br><input type="text" name="FName" value=""><br>
        <span class="FieldInfo">Last Name:</span><br><input type="text" name="LName" value=""><br>
       <span class="FieldInfo">Teacher Id:</span><br><input type="text" name="TutorId" value=""><br>
      <span class="FieldInfo">Password:</span><br><input type="text" name="Password" value=""><br>
      <span class="FieldInfo">Course Code:</span><br><input type="text" name="Coursecode" value=""><br>
<br>
<input type="Submit" name="Submit" value="Submit Your Record"><br>


</fieldset>

</form>
      </div>
    </div>
  </div> 
  
</div> 


<?php include 'footer.php'; ?>
