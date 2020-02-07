
<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  $courseworkRecord = $connect->prepare("SELECT * From coursework_record ");
  $courseworkRecord->execute();
  $courseworks = $courseworkRecord->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Course Notes Records</h2>
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
              if(count($courseworks) > 0){
                foreach ($courseworks as $courseworks) {
                  echo '<tr>';
                    echo '<th scope="row">'.$courseworks['id'].'</th>';
                    echo '<th>'.$courseworks['title'].'</th>';
                    echo '<th>'.$courseworks['description'].'</th>';
                    echo '<th>'.$courseworks['document_name'].'</th>';
					echo '<th>'.$courseworks['Document_version'].'</th>';
                    echo '<th>'.$courseworks['date'].'</th>';

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
        <a href="addcoursework.php"><button style="margin: 25px;height: 50px;width: 170px">Add More Course Notes</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
