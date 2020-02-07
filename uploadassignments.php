
<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  $assignmentRecord = $connect->prepare("SELECT * From assignments_record ");
  $assignmentRecord->execute();
  $assignments = $assignmentRecord->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Assignment Records</h2>
      <div class="panel-body widget-shadow">
       
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Document Name</th>
			  <th>Document Version</th>
              <th>Date</th>

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($assignments) > 0){
                foreach ($assignments as $assignment) {
                  echo '<tr>';
                    echo '<th scope="row">'.$assignment['id'].'</th>';
                    echo '<th>'.$assignment['title'].'</th>';
                    echo '<th>'.$assignment['description'].'</th>';
                    echo '<th>'.$assignment['document_name'].'</th>';
					echo '<th>'.$assignment['Document_version'].'</th>';
                    echo '<th>'.$assignment['date'].'</th>';

                  echo'</tr>';
                }
              }
              else{
                error('No modules.');
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addassignment.php"><button style="margin: 25px;height: 50px;width: 170px">Add More Assignment</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
