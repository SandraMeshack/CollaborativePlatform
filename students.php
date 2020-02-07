<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  $ViewQuery = $connect->prepare("SELECT * From students_record");
  $ViewQuery->execute();
  $students = $ViewQuery->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Students</h2>
      <div class="panel-body widget-shadow">
        
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>

              <th>Last Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

              <?php
              if(count($students) > 0){
                foreach ($students as $student) {
                  echo '<tr>';
                    echo '<th scope="row">'.$student['student_id'].'</th>';
                    echo '<th>'.$student['first_name'].'</th>';
                    echo '<th>'.$student['last_name'].'</th>';
                    echo '<th>'."<a href='editstudent.php?id=".$student['student_id']."'>Edit</a>".'</th>';
                   

                  echo'</tr>';
                }
              }
              else{
                echo ' No student Found ';
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addstudent.php"><button style="margin: 25px;height: 30px;width: 145px">Add More Student</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
