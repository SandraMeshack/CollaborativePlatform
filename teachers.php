<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  $ViewQuery = $connect->prepare("SELECT * From teachers_record ");
  $ViewQuery->execute();
  $teachers = $ViewQuery->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Teachers</h2>
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
              if(count($teachers) > 0){
                foreach ($teachers as $teacher) {
                  echo '<tr>';
                    echo '<th scope="row">'.$teacher['tutor_id'].'</th>';
                    echo '<th>'.$teacher['first_name'].'</th>';
                    echo '<th>'.$teacher['last_name'].'</th>';
                    echo '<th>'."<a href='editteacher.php?id=".$teacher['tutor_id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deleteteacher.php?tutor_id=".$teacher['tutor_id']."'>Delete</a>".'</th>';
                  echo'</tr>';
                }
              }
              else{
                error('No Teachers.');
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addteacher.php"><button style="margin: 25px;height: 30px;width: 145px">Add More Teacher</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
