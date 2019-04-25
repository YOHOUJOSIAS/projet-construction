<?php 
    include('connexion_db.php');
    $nom = $prenom = $telephone= $jourCommande = $jourDepot = $envoyer = "";
    $verif = false;
    if(isset($_POST['formulaire']))
    {
        $nom = $_POST["firstname"]; 
        $prenom = $_POST["lastname"]; 
        $telephone = $_POST["phone"]; 
        $jourCommande= $_POST["jcommande"];
        $jourDepot= $_POST["jdepot"];
        $requete = $db->prepare('INSERT INTO reservation (nom,prenom,telephone,jourCommande,jourDepot)  VALUES(?,?,?,?,?)');
        $requete->execute([$nom,$prenom,$telephone,$jourCommande,$jourDepot]);
        var_dump($requete->execute([$nom,$prenom,$telephone,$jourCommande,$jourDepot]));
        if($requete->execute([$nom,$prenom,$telephone,$jourCommande,$jourDepot]))
        {
            $verif = true;
        }
        if($verif)
        {
            $envoyer = "votre demande a été effectué";
        }
    }
?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-content,initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="js/jquery-3.3.1.min.js">
        <script src="script.js"></script>
    </head>
    <body>
         <section id="papa">
            <div class="container">
                <div class="nav">
                    <h1>BuildConst<span class="glyphicon glyphicon-ice-lolly"></span> ---</h1>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="">Page</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="index.php">Acceuille</a></li>
                    </ul>
                </div>
                <div class="nancy">
                    <h1>formulaire de reservation</h1>
                    <p>home  <span class="glyphicon glyphicon-arrow-right"></span>reserver</p>
                   
            </div>
            </div>
        
        </section>
        <section id="form">
            <div class="container">
                <div class="row">
                    <form method="post">
                        <div class="col-lg-12">
                        <label for="name">nom :</label>
                        <input type="text" id="name" name="firstname" placeholder="votre nom" required>
                        </div>
                         <div class="col-lg-12">
                        <label for="name">prenom :</label>
                        <input type="text" id="lastname" name="lastname" placeholder="votre nom" required>
                        </div>
                        
                        <div class="col-lg-12">
                        <label for="name">telephone :</label>
                        <input type="text" id="phone" name="phone" placeholder="votre numéro de telephone" required>
                        </div>
                        <div class="col-lg-12">
                        <label for="name">jourCommande:</label>
                        <input type="text" id="jcommande" name="jcommande" placeholder=" jour de commande" required>
                        </div>
                        <div class="col-lg-12">
                        <label for="name">jourDepot :</label>
                        <input type="text" id="jdepot" name="jdepot" placeholder="jour de depot" required>
                        </div>
                        
                        <div class="col-lg-12">
                        <input type="submit" name="formulaire"value="envoyer">
                        </div>
                         <p class="thank-you"><?php echo $envoyer  ?></p>
                       
                    </form>
                
                </div>
                </div>
            <section id="levi">
            <div class="container-fluid">
                <h1>contact us</h1>
            </div>
       </section>
            
            
         </section>
         <section id="eli" style="background: gray">
            <div class="container">
                <div class="row">
                    <div class="hui">
                    <div class="col-md-4">
                        <h2>a propos</h2>
                        <p><span id="poi">buildconst </span>nous sommes une companie en relation avec d'autres cpmpaniespour mieux faciliter des traveaux de construction tels que des ingenieurs en btp, des architectes,des materiels de constructions ,des outils et aussi des accessoirs de maisons </p>
                    </div>
                        <div class="col-md-4">
                        <h2>newsteller</h2>
                        <p>rester a jours avec les dernières tendences </p>
                            <input type="email" placeholder="entrez votre mail" ><span class="glyphicon glyphicon-arrow-right" id="mo"></span>
                        </div>
                        <div class="col-md-4">
                        <h2>ou nous trouver</h2>
                        <p>localisation:  <span class="glyphicon glyphicon-map-marker"></span>cocody II plateau</p>
                            <p>téléphone:  <span class="glyphicon glyphicon-phone"></span>+225 79180832</p>
                            <p>email  :<span class="glyphicon glyphicon-envelope"></span>abeljosais@gmail?com</p>
                            
                        </div>
                     </div>
             </div>
            </div>
        </section>
    </body>