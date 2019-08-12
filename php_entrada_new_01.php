<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- meta tags obrigatorias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Will-Soft usando Bootstrap </title>

  <!-- CSS do Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>
<body>
	
	
<p>
<?php
  echo "Oi, comentario em php portanto usa tag php mas sufixo tem que ser php ";
  //  Sou apenas um comentário.
  echo "=====================================";
 ?>
</p>
	
	
	<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>

<div class="container">

  <h2 class="bg-primary text-white">Will-Soft usando Bootstrap </h2>


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Login</a></li>
    <li><a data-toggle="tab" href="#menu1">Cadastre-se</a></li>
    <li><a data-toggle="tab" href="#menu2">Relação de serviços prestados </a></li>
    <li><a data-toggle="tab" href="#menu3">Histórico </a></li>
  </ul>

  <div class="tab-content">
      
    <div id="home" class="tab-pane fade in active">
        
           <h3>--</h3>      
         
		 <div class="container">
	
		  <form action="/action_page.php">
			<div class="form-group">
			  <label for="email">Email:</label>
			  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
			</div>
			<div class="form-group form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember"> Remember me
			  </label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		</div>
      
    </div>
      
    
      
    <div id="menu2" class="tab-pane fade">
        
  <h3>Cadastre-se ... </h3>      
         
		 
		  <h2>--</h2>
		  <form action="/action_page.php">
			<div class="form-group">
			  <label for="email">Email:</label>
			  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
			</div>
			<div class="form-group form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember"> Remember me
			  </label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		
 
  
</div>


  
  &times;



  <!-- Primeiro o jQuery, depois o Popper.js, e depois o Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
  
</body>
</html>
