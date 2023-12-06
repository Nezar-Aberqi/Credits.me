<?php 
    if(isset($_POST['submit'])){
        $createDemande = new DemandeController();
        $createDemande->create();
    }
?>


        
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demande de crédit| S&R</title>
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
        <li>
          <a href="Allloans"><span class="fa fa-tasks"></span><span>Visualiser les crédits disponibles</span></a>
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
              <h2>faire une nouvelle demande <br><br>
              </h2>
              
            </div>
        
        <div class="form">
               <form method="post" class="mr-1">
                 <div class="form-group">
                        Entrer le type de crédit désiré: <input type="text" name="typecredit"  class="form-control" required>
                    </div>
                        <div class="form-group">
                        Entrer le montant désiré: <input type="text" name="montantcredit"  class="form-control" required>
                        </div>
                        <div class="form-group">
                        Entrez votre total des revenus mensuels   <input type="text" name="revenum" class="form-control">
                        </div>
                         <div class="form-group">
                        Entrez votre total des charges mensuels   <input type="text" name="chargesm" class="form-control">
                        </div>

                        <button class="btnn" name="submit" class="btn btn-sm btn-primary">Demander</button>
                    </form>
              

</div></div></main></div>
     
    
      

      <div class="calendar">
      <div class="mois-annee">
        <ul>
          <li class="prev">&#10094;</li>
          <li class="next">&#10095;</li>
          <li>JUIN<br><span>2022</span></li>
        </ul>
      </div>

      <ul class="mois">
        
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
        <li>Mo</li>
        <li>Tu</li>
      </ul>

      <ul class="jours">
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li><span class="active">6</span></li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30<li>
      </ul>
      </div>
    </main>
  </div>
</body>
</html>