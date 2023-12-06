<?php 
	if(isset($_POST['id'])){
		$exitClient = new ClientController();
		$client = $exitClient->getOneClient();
	}else{
		Redirect::to('client');
	}  
	if(isset($_POST['submit'])){
		$exitClient = new ClientController();
		$exitClient->updateClient();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modifier mes données | S&R</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/styles1.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
</head>
<body>
  <input type="checkbox" id="menu" name="">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>R&S</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="clientpage" class="active"><span>PROFILE</span></a>
        </li>
        <li>
          <a href="demande"><span class="fa fa-tasks"></span><span>Mes demandes</span></a>
        </li>
        <li>
          <a href="approvedloans"><span class="fa fa-th-large"></span><span>Mes demandes validées</span></a>
        </li>
        <li>
          <a href="rejectedloans"><span class="fa fa-line-chart"></span><span>Mes demandes refusées</span></a>
        </li>
        <li>
          <a href="docuploaded"><span class="fa fa-address-book"></span><span>Mes documents téléchargés</span></a>
        </li>
        <li>
          <a href="demandecredit"><span class="fa fa-tasks"></span><span>Faire une nouvelle demande de crédit</span></a>
        </li>
        <li>
          <a href="upload"><span class="fa fa-tasks"></span><span>Télécharger un document</span></a>
        </li>
       
      </ul>
    </div>
  </div>



  <div class="content">
    
    <header>
     

      

      <div class="user-wrapper" id="dropdown">
        <div>
          <small><?php  echo $_SESSION['username'];
          
                    ?></small>
        </div>
        
        <img src="public/assets/admin.png" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
        <p><a href="choicelogin">Deconnexion</a></p>
        <p><a href="changepassword">Changer le mot de passe </a></p>
        </div>
        
      </div>
    </header>

    <main>
       <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Modifier mes données <br><br>
              </h2>
              
            </div>
        
        <div class="form">
              	<form method="post">
						<div class="form-group">
							<label for="nom">Nom*</label>
							<input type="text" name="nom" class="form-control" placeholder="Nom"
							value="<?php echo $client->nom; ?>"
							>
						</div>
						<div class="form-group">
							<label for="prenom">Prénom*</label>
							<input type="text" name="prenom" class="form-control" placeholder="Prénom"
							value="<?php echo $client->prenom; ?>"
							>
						</div>
						<div class="form-group">
							<label for="Sexe">Sexe*</label>
							<input type="text" name="sexe" class="form-control" placeholder="Sexe"
								value="<?php echo $client->Sexe; ?>">
						</div>
						<div class="form-group">
							<label for="Nationalité">Nationalité*</label>
							<input type="text" name="nationalite" class="form-control" placeholder="Nationalité"
							value="<?php echo $client->Nationalité; ?>">
							<input type="hidden" name="id" value="<?php echo $client->id;?>">
						</div>
						<div class="form-group">
							<label for="Etat_civil">Etat civil*</label>
							<input type="text" name="etatc" class="form-control" placeholder="Etat_civil"
							value="<?php echo $client->Etat_civil; ?>">
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="text" name="email" class="form-control" placeholder="email"
							value="<?php echo $client->email; ?>">
						</div>
						<div class="form-group">
							<label for="Numtel">Numéro de téléphone*</label>
							<input type="text" name="numtel" class="form-control" placeholder="Numéro de téléphone"
							value="<?php echo $client->Numtel; ?>">
						</div>
						<div class="form-group">
							<label for="Salaire">Salaire*</label>
							<input type="text" name="salaire" class="form-control" placeholder="Salaire"
							value="<?php echo $client->Salaire; ?>">
						</div>
						<div class="form-group">
							<label for="Adresse">Adresse*</label>
							<input type="text" name="Adresse" class="form-control" placeholder="Adresse"
							value="<?php echo $client->Adresse; ?>">
						</div>
						<div class="form-group">
							<label for="Datenaissance">Date de naissance*</label>
							<input type="date" name="dn" class="form-control" placeholder="Date de naissance"
							value="<?php echo $client->Datenaissance; ?>">
						</div>
						<div class="form-group">
							<label for="username">username*</label>
							<input type="text" name="username" class="form-control" placeholder="username"
							value="<?php echo $client->username; ?>">
						</div>

						
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
              

</div></div></main></div>
     
    
      

      
    </main>
  </div>
</body>
</html>
