

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
       background: url('medical6.JPG');
      background-repeat: no-repeat;
      background-size: cover;
          color: #fff9f9;
    }
     .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: 386px;
}
   /* width */
::-webkit-scrollbar {
    width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #2c889e;
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #2c889e;
}
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #159cc1;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Dentistry Section</h1>      
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Bonus Team</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../web.php">Home</a></li>
        <li><a href="page1.php" class="active">library</a></li>
        <li><a href="../Blog.php">Blog</a></li>
        <li><a href="../login.php">login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Patholog</div>
        <div class="panel-body">
		<a href="https://www.pdfdrive.net/pathology-books.html">
		<img src="pathology.jpg" class="img-responsive" style="width:100%" alt="Image">
		</a>
		</div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Paediatric Dentistry</div>
        <div class="panel-body">
		<a href="https://books.google.com.eg/books/about/Paediatric_Dentistry.html?id=OydqAAAAMAAJ&redir_esc=y">
		<img src="paediatric dent.jpg" class="img-responsive" style="width:100%" alt="Image">
		</a>
		</div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Contemporary Implant Dentistry</div>
        <div class="panel-body">
		<a href="https://www.cmecde.com/download-contemporary-implant-dentistry-3rd-edition-pdf-free/">
		<img src="implement.jpg" class="img-responsive" style="width:100%" alt="Image">
		</a>
		</div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Esthetic dentistry </div>
        <div class="panel-body">
		<a href = "https://www.google.com.eg/search?q=esthetic+dentistry+pdf&oq=esthetic+denti&aqs=chrome.2.69i57j0l5.19282j0j7&sourceid=chrome&ie=UTF-8">
		<img src="esthetic.jpg" class="img-responsive" style="width:100%" alt="Image">
		</a>
		</div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Public health dentistry</div>
        <div class="panel-body">
		<a href="https://books.google.com.eg/books/about/A_Textbook_of_Public_Health_Dentistry.html?id=NKYy0w1OjJoC&redir_esc=y">
		<img src="public2.jpg" class="img-responsive" style="width:100%" alt="Image">
		</a>
		</div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">conservative dentistry </div>
        <div class="panel-body">
		<a href = "https://www.google.com.eg/search?q=conservative+dentistry+pdf&oq=opservative+dentes&aqs=chrome.2.69i57j0l5.14489j0j7&sourceid=chrome&ie=UTF-8">
		<img src="opservative.jpg" class="img-responsive" style="width:100%" alt="Image">
		</a>
		</div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
     <h3>Bonus Team Copyright</h3>  
  <h4>faculty of engineering<h4>
</footer>

</body>
</html>
