<?php
//
   session_start();  
   if($_SESSION['Role'] != "Admin"){
              header('Location:login.php');
         }
  include 'contact.php' ;
   include 'files.php' ;

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $patient_name = $_POST['patient_name'];
  $date_of_Investigation = $_POST['date_of_Investigation'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $doctor = $_POST['doctor'];
  $picture = $_POST['picture'];
  if( ! isset($_GET['do'])){
  $sql = "INSERT INTO InvestigationReports(patient_name,date_of_Investigation,title,description,doctor,picture) VALUES ('$patient_name','$date_of_Investigation','$title','$description','$doctor','$picture')";
  $con ->exec($sql);

  header('Location: InvestigationReports.php?do=" " ');
}
   else if ($_GET['do'] == 'Edit')
    {

           $id = $_GET['id'];
          $stmt = $con ->prepare("UPDATE InvestigationReports SET patient_name =?,date_of_Investigation =?,title = ?,description = ?,doctor = ?,picture = ? WHERE id = ? ") ;
          $stmt ->execute(array($patient_name,$date_of_Investigation,$title,$description,$doctor,$picture,$id));

          header('Location: InvestigationReports.php?do=" " ');

          }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   <div id="mySidenav" class="sidenav">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <?php include 'sidebar/sidebar.php' ; ?>
    </div> 
    <div id="main">
 
   <?php include 'navbar/navbar.php' ; ?> 

    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
  
           <div class="panel-heading no-print">
                <div class="btn-group"> 
                     <a class="btn btn-primary btn-lg " href="InvestigationReports.php"> <i class="fa fa-list"></i>  Investigation Reports </a>   
                </div>
            </div> 
    <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-10 col-sm-12">


       <form action="AddInvestigationReport.php" method="POST" class="form-horizontal" >
    <div class="form-group row">
              <label  class="control-label col-sm-2">Patient Name <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <select name="patient_name" class="form-control"  >
                   <option value="" selected="selected">Select Option</option>
                  <?php
                    $stmt = $con  ->prepare("SELECT fullname FROM patients ");
                        $stmt ->execute();

                    $array = $stmt->fetchAll(PDO::FETCH_COLUMN);

                   foreach ($array as $value) {
                    echo "<option>" .$value . "</option>";
                   }
                     ?>
              </select>
               </div>
            </div> 


              <div class="form-group row">
              <label  class="control-label col-sm-2">Date Of Investigation <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <input type="date" name="date_of_Investigation" placeholder="date" class="datepicker form-control" required="">
               </div>
            </div> 


             <div class="form-group row">
              <label  class="control-label col-sm-2">Title <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <input type="text" name="title" placeholder="title" class="form-control" required="">
                </div>
            </div> 
             
             <div class="form-group row">
              <label  class="control-label col-sm-2">Description <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <textarea name="description" placeholder="description" maxlength="140" rows="7" class="tinymce form-control" required="" >  </textarea>
               </div>
            </div> 

             <div class="form-group row">
              <label  class="control-label col-sm-2">Doctor Name <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                 <select name="doctor" class="form-control" >
                   <option value="" selected="selected">Select Option</option>
                  <?php
                  $stmt = $con  ->prepare("SELECT concat('DR.',fullname ) FROM doctors ");
                      $stmt ->execute();

                      $array = $stmt->fetchAll(PDO::FETCH_COLUMN);

                     foreach ($array as $value) {
                      echo "<option>" .$value . "</option>";
                     }
                       ?>
                   </select> 
                   </div>
            </div> 

            <div class="form-group row">
              <label  class="control-label col-sm-2">Picture <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                 <input type="file" name="picture"  >
                </div>
            </div> 

                   <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-6">
                               <input type="submit" name="" value="save" class="btn btn-success btn-lg " >
                               <button type="reset" class="btn btn-primary btn-lg " > Reset</button>
               </div>
           </div>
                  


          </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>