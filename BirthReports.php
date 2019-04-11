<?php 
            session_start();
 
     ?>
     

      
 <?php 
 // Birth Report 
   $do = isset($_GET['do']) ? $_GET['do'] : 'manage' ;
    include 'contact.php' ;
    if($do != 'Edit' and $do !='delete'){

    
     global $i;
       $i = 1 ;
     
        $sql = $con->prepare("SELECT * FROM birthreports ");
        $sql->execute();

                     ?>
            
                 
             
              <!--  table area -->
              <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                       
                     <?php include 'files.php' ;?>
                      <?php include 'sidebar/sidebar.php'; ?>

              </div>

              <div id="main">
                <?php include 'navbar/navbar.php' ?>
              <div class="col-sm-12">
                  <div  class="panel panel-default thumbnail">
           
                      <div class="panel-heading no-print">
                          <div class="btn-group" style="position: relative;"> 
                              <a class="btn btn-success btn-lg" href="addBirthreport.php"> <i class="fa fa-plus"></i>  Add Birth Report </a>  
                             
                          </div>
                      </div> 

              <div class="panel-body">
                  <div  class="table-responsive ">
                         <table class="datatable table table-striped table-bordered"  cellspacing="0" width="100%">
                           <h1 class="btn btn-success btn-block btn-lg" >Birth Report </h1>
                          <thead>
                                  <tr>
                                      <th>NO</th>
                                      <th>Full Name</th>
                                      <th>Title</th>
                                      <th>Description</th>
                                      <th>Doctor Name</th> 
                                       <th>Action</th>
                                  </tr>
                              </thead>
           
             <?php  


        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tbody>
          <tr class="odd gradeX" >
         <td> <?php echo $i; $i++ ;?>
          <td><?php echo $row['fullname'];?></td>
         <td><?php echo $row['title'];?></td> 
         <td><?php echo $row['description'];?></td> 
         <td><?php echo $row['doctor'];?></td> 
         <td><a  class="btn btn-primary" href="BirthReports.php?do=Edit&id=<?php echo $row['id'] ?>"> edit</a>
               <a class="btn btn-danger" href="BirthReports.php?do=delete&id=<?php echo $row['id'] ?>"> delete</a></td> 
        </tr>
        <?php } ?></tbody>
      </table>
       </div>
        </div>
    </div> 
    </div> 
  </div>
     <?php  }else if($do == 'Edit'){

       if($_SESSION['Role'] != "Admin"){
              header('Location:login.php');
         }
          $id = $_GET['id'];
           $sql = $con->prepare("SELECT * FROM birthreports Where id = ? ");
           $sql->execute(array($id));
           $row = $sql ->fetch();
           $count =$sql ->rowCount();

            $fullname = $row['fullname'];
            $date_of_birth = $row['date_of_birth'];
            $title = $row['title'];
            $description = $row['description'];
            $doctor = $row['doctor'];

             if($count > 0)
           { ?> 
               <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             
           <?php include 'files.php' ;?>
            <?php include 'sidebar/sidebar.php'; ?>

    </div>
    <div id="main">
      <?php include 'navbar/navbar.php' ; ?>
        <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
  
           <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary btn-lg " href="BirthReports.php"> <i class="fa fa-list"></i>  Birth Reports </a>  
                </div>
            </div> 
    <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-10 col-sm-12">

            <form action="addBirthreport.php?do=Edit&id=<?php echo $row['id'] ?>" method="POST" class="form-horizontal" >
           <div class="form-group row">
              <label  class="control-label col-sm-2">Full Name <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <input type="text" name="fullname" placeholder="fullname" value="<?php echo $fullname ?>" class="form-control" >
               </div>
            </div> 


            <div class="form-group row">
              <label  class="control-label col-sm-2">Date <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <input type="date" name="date_of_birth" placeholder="date" value="<?php echo $date_of_birth ?>" class="datepicker form-control" >
               </div>
            </div> 

             <div class="form-group row">
              <label  class="control-label col-sm-2">Title <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <input type="text" name="title" placeholder="title" value="<?php echo $title ?>" class="form-control" >
                </div>
            </div> 


              <div class="form-group row">
              <label  class="control-label col-sm-2">Description <i class="text-danger">*</i></label>
                <div class="col-sm-10">
                <textarea name="description" placeholder="description" maxlength="140" rows="7" class="tinymce form-control" > <?php echo $description ?> </textarea>
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

            <?php    }
           
        }elseif ($_GET['do'] == 'delete') {

           if($_SESSION['Role'] != "Admin"){
              header('Location:login.php');
              exit();
         }
               $id = $_GET['id'];
              $stmt = $con ->prepare(" DELETE FROM birthreports WHERE id=? ");
              $stmt ->execute(array($id));

              header('Location: BirthReports.php?do=" " ');


        } 


