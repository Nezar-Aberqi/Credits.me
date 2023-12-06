<?php 
	if(isset($_POST['idl'])){
		$exitloan = new TypeofloansController();
		$loan = $exitloan->getOneLoan();
		
	}
	}else{
		Redirect::to('loans');
	} 
	if(isset($_POST['submit'])){
		$exitloan = new TypeofloansController();
		$exitloan->updateLoan();
	}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter un nouveau type de credits| S&R</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/test.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	<link rel="stylesheet"  href="http://127.0.0.1/final/public/assets/photo.css">
</head>
<body>
  <input type="checkbox" id="menu" name="">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>S&R</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="test" class="active"><span class="fa fa-home"></span><span>Dashboard</span></a>
        </li>
        <li>
          <a href="loans"><span class="fa fa-tasks"></span><span>Les types de crédits</span></a>
        </li>
        <li>
          <a href="applications"><span class="fa fa-th-large"></span><span>Les demandes de crédits</span></a>
        </li>
        <li>
          <a href="demandeaccepte"><span class="fa fa-line-chart"></span><span>Les crédits accéptés</span></a>
        </li>
        <li>
          <a href="client"><span class="fa fa-address-book"></span><span>Les clients</span></a>
        </li>
       
      </ul>
    </div>
  </div>



  <div class="content">
    
    <header>
     

      

      <div class="user-wrapper" id="dropdown">
        <div>
          <small>Admin</small>
        </div>
        
        <img src="public/assets/admin.png" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
        <p><a href="choicelogin">Deconnexion</a></p>
        
        </div>
        
      </div>
    </header>

    <main>
       <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Ajouter un nouveau type de crédits <br><br>
              </h2>
              
            </div>
        
        <div class="form">
          <form method="post">
						<div class="form-group">
							<label for="loanType">Type de crédit*</label>
							<input type="text" name="loanType" class="form-control" placeholder="Type de crédit"
							value="<?php echo $loan->loanType; ?>"
							>
						</div>
						<div class="form-group">
							<label for="description">Description*</label>
							<input type="text" name="description" class="form-control" placeholder="Description"
							value="<?php echo $loan->description; ?>"
							>
						</div>
						
						<div class="form-group">
							<label for="montant">Montant*</label>
							<input type="text" name="montant" class="form-control" placeholder="montant"
							value="<?php echo $loan->montant; ?>">
						</div>
						<div class="form-group">
							<label for="période">Période*</label>
							<input type="text" name="periode" class="form-control" placeholder="Période"
							value="<?php echo $loan->periode; ?>">
						</div>
						
                    
					
						
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
              
            </div>
         
						</div></div></main></div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
