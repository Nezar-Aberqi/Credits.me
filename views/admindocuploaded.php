<?php 
  if(isset($_POST['id'])){
    $exitClient = new ClientController();
    $cl = $exitClient->getdoc();
  }else{
    Redirect::to('demandeaccepte');
  } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste des crédits| S&R</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/test.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
          <a href="adminpage" class="active"><span class="fa fa-home"></span><span>Dashboard</span></a>
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
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Acueuil</span></p>

     
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

      


         
          <table class="table table-hover">
            <thead>
              <tr>




                <div class="composant">
        <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Listes des documents <br>
              
          </h2>
              
            </div>
            <div class="body-case">
              <div class="tableau">
                <table width="100%">
                  <thead>
                    <tr>
                
                <th scope="col">Nom du documents</th>
                <th scope="col">fichier</th>
                <th scope="col">date de dépot </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($cl as $dem):?>
                <tr>
                 <!--<th scope="row"><button><a href=profileclient><?php echo $dem['id']; ?></a></button></th>-->
                  <th scope="row"><?php echo $dem['nomdoc']; ?></th>
                  <td><a href="<?php echo $dem['fileurl']; ?>" class="btn btn-success" target="_blank">Télécharger</a></td>
                  <td><?php echo $dem['datedepot'];?></td>
                  </tr>
                            
                  
                  
              <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>





