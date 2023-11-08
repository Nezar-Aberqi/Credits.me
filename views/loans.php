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
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

      
      
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
              <h2>Listes des crédits <br>
              <a href="http://127.0.0.1/final/Addloan" class="btn btn-sm btn-primary mr-2 mb-2">
            <i class="fas fa-plus"></i>
          </a></h2>
              
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
                  
                  <td class="d-flex flex-row">
                    <form method="post" class="mr-1" action="Updateloan">
                      <input type="hidden" name="idl" value="<?php echo $cl['idl'];?>">
                      <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                    </form>
                    <form method="post" class="mr-1" action="Deleteloan">
                      <input type="hidden" name="idl" value="<?php echo $cl['idl'];?>">
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>




