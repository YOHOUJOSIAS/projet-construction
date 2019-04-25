<?php 
    include('connexion_db.php');
    $nom = $prenom = $email = $numero = $date = $password = $juste = "";
    $verif = false;
    if(isset($_POST['formulaire']))
    {
        $prenom = $_POST["lastname"]; 
        $nom = $_POST["firstname"]; 
        $email = $_POST["email"]; 
        $phone = $_POST["phone"];
        $date  = $_POST["date"];
        $password = $_POST["motpasse"];
        $requete = $db->prepare('INSERT INTO compte (nom,prenom,email,numero,date,password)  VALUES(?,?,?,?,?,?)');
        $requete->execute([$nom,$prenom,$email,$numero,$date,$password]);
        var_dump($requete->execute([$nom,$prenom,$email,$numero,$date,$password]));
        if($requete->execute([$nom,$prenom,$email,$numero,$date,$password]))
        {
            $verif = true;
        }
        if($verif)
        {
            $juste = "votre compte a été enrégistré avec success";
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
        <script src="script.js"></script>
    </head>
    <body>
        <section id="papa">
            <div class="container">
                <div class="nav">
                    <h1>BuildConst<span class="glyphicon glyphicon-ice-lolly"></span> ---</h1>
                    <ul>
                        <li><a href="">Contact</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="">Page</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="index.php">Acceuille</a></li>
                    </ul>
                </div>
                <div class="nancy">
                    <h1>contact us</h1>
                    <p>home  <span class="glyphicon glyphicon-arrow-right"></span> contact us</p>
                   
            </div>
            </div>
        
        </section>
        <section id="masta">
            <div class="container">
                <div class="row">
                    <div class="isael">
                        <form class="abou">
                            <div class="col-xs-4">
                            <label for="adress">adress: </label>  
                            <input type="email" name="email" placeholder="votre adress" required>
                            </div>
                            <div class="col-xs-4">
                            <label for="password">mot de pass: </label>  
                            <input type="password" name="password" placeholder="votre mot de pass" required>
                            </div>
                            <div class="col-xs-4">
                                <input type="submit" value="connexion" class="btn btn-danger">
                            </div>
                            
                                <a href="inscription.php">inscription</a>
                            
                            
                        
                           
                        </form>
                    
                    </div>
                
                </div>
            
            </div>
        
        </section>
        <section id="kilian">
            <div class="container">
                <div class="row">
                <h3>page de reservation</h3>
                    <form method="post">
                <div class="col-xs-6">
                    <label for="name">nom :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="entrez votre nom" required>
                </div>
                <div class="col-xs-6">
                    <label for="prenom">prenom :</label>
                    <input type="text" id="lastname" name="lastname" placeholder="entrez votre prenom" required>
        
                </div>
                    <div class="col-xs-6">
                    <label for="name">email:</label>
                    <input type="email" id="email" name="email" placeholder="entrez votre email" required>
                </div>
                    <div class="col-xs-6">
                    <label for="name">mumero:</label>
                    <input type="text" id="phone" name="phone" placeholder="entrez votre numero" required>
                </div>
                    <div class="col-xs-6">
                    <label for="name">date  :</label>
                    <input type="date" id="date" name="date" placeholder="entrez votre date" required>
                </div>
                    <div class="col-xs-6">
                    <label for="name">password :</label>
                    <input type="password" id="motpasse" name="motpasse" placeholder="mot de pass" required>
                </div>
                    
                    <div class="col-lg-12">
                    <input type="submit" value="valider" name="formulaire" id="riou" class="btn btn-danger">
                </div>
                      <p class="thank-you"><?php echo $juste  ?></p>
                    </form>
                 </div>
            </div>
        </section>