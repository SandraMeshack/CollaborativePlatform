<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  $viewModules = $connect->prepare("SELECT * From modules_record ");
  $viewModules->execute();
  $modules = $viewModules->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Modules</h2>
      <div class="panel-body widget-shadow">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Module Name</th>
              <th>Module Code</th>
              <th>Course ID</th>
              <th>Tutor ID</th>
              <th> Action </th>

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($modules) > 0){
                foreach ($modules as $module) {
                  echo '<tr>';
                    echo '<th scope="row">'.$module['module_id'].'</th>';
                    echo '<th>'.$module['module_name'].'</th>';
                    echo '<th>'.$module['module_code'].'</th>';
                    echo '<th>'.$module['course_id'].'</th>';
                    echo '<th>'.$module['tutor_id'].'</th>';
                    echo '<th>'."<a href='editmodules.php?id=".$module['module_id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deletemodules.php?module_id=".$module['module_id']."'>Delete</a>".'</th>';
                  echo'</tr>';
                }
              }
              else{
                echo 'No modules found';
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addmodule.php"><button style="margin: 25px;height: 30px;width: 145px">Add More Modules</button></a>
    </div>
  </div>
</div>
<?php
  

  $viewContent = $connect->prepare("SELECT * From contents_record");
  $viewContent->execute();
  $contents = $viewContent->fetchAll();

?>



<?php include 'footer.php'; ?>
