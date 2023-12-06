<?php 
  if(isset($_POST['find'])){
    $data = new TypeofloansController();
    $loan = $data->findLoan();
  }else{
    $data = new TypeofloansController();
    $loan = $data->getAllLoans();
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
        <li>
          <a href="Allloans"><span class="fa fa-tasks"></span><span>Visualiser les crédits disponibles</span></a>
        </li>
       
      </ul>
    </div>
  </div>



  <div class="content">
    
    <header>
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Espace client</span></p>


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

      


         
          <table class="table table-hover">
            <thead>
              <tr>




                <div class="composant">
        <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Listes des crédits <br>
              
          </h2>
              
            </div>
            <div class="body-case">
              <div class="tableau">
                <table width="100%">
                  <thead>
                    <tr>
                 <th scope="col">Type of loans</th>
                <th scope="col">description</th>
                <th scope="col">montant(Dhs)</th>
                <th scope="col">période</th>
                
                <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($loan as $cl):?>
                <tr>

                  <th scope="row"><?php echo $cl['loanType']; ?></th>
                  <td><?php echo $cl['description'];?></td>
                  <td><?php echo $cl['montant'];?></td>
                  <td><?php echo $cl['periode'];?></td>
                   <td><button> <a href="demandecredit" > Demande le crédit </a></button>
                  </td>
                </tr>
              <?php endforeach;?>
                  </tbody>
                </table>
                <center><img src="public/assets/images/loan.png"height="500px" width="700px"></center>
              </div>

            </div>
          </div>
        </div>







