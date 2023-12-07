<?php 
    include_once('../controllers/ClientControllers.php');
    session_start();
    if(isset($_POST['submit'])){
        $client = new ClientController();
        $client->updatepass();
    }
?>


        
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Changer le mot de passe | S&R</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/gestion_bancaire/public/assets/styles1.css">
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
          <a href="clientpage.php" class="active"><span>PROFILE</span></a>
        </li>
        <li>
          <a href="demande.php"><span class="fa fa-tasks"></span><span>Mes demandes</span></a>
        </li>
        <li>
          <a href="approvedloans.php"><span class="fa fa-th-large"></span><span>Mes demandes validées</span></a>
        </li>
        <li>
          <a href="rejectedloans.php"><span class="fa fa-line-chart"></span><span>Mes demandes refusées</span></a>
        </li>
        <li>
          <a href="docuploaded.php"><span class="fa fa-address-book"></span><span>Mes documents téléchargés</span></a>
        </li>
        <li>
          <a href="demandecredit.php"><span class="fa fa-tasks"></span><span>Faire une nouvelle demande de crédit</span></a>
        </li>
        <li>
          <a href="upload.php"><span class="fa fa-tasks"></span><span>Télécharger un document</span></a>
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
        
        <img src="../public/assets/admin.png" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
        <p><a href="choicelogin.php">Deconnexion</a></p>
        <p><a href="changepassword.php">Changer le mot de passe </a></p>
        </div>
        
      </div>
    </header>

    <main>
       <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Changer le mot de passe <br><br>
              </h2>
              
            </div>
        
        <div class="form">
               <form method="post" class="mr-1">
                 <div class="form-group">
                        Entrer le nouveau mot de passe: <input type="password" name="newpass"  class="form-control" required>
                    </div>
                        <div class="form-group">
                        Comfirmer votre mot de passe: <input type="password" name="comfirmedpass"  class="form-control" required>
                        </div>
                  
                        <button class="btnn" name="submit" class="btn btn-sm btn-primary">Changer</button>
                    </form>
              

</div></div></main></div>
     
    
      

      
    </main>
  </div>
</body>
</html>