<?php
    
	$erreur = false;

	if ($action == "validation") {
            $message = "start";
			$nom = $_POST ["Nom"];
			$prenom = $_POST ["Prenom"];
			$adresse = $_POST ["Adresse"];
			$cp = $_POST ["cp"];			
            $tel = $_POST ["tel"];
			$email = $_POST ["email"];
			$civilite = $_POST ["civilite"];
			$password = $_POST ["password"];
			$login = $_POST["login"];
            $message = "";
            $erreur = false;
            // nom conforme
            if(!preg_match("/^[a-zA-Z]{2,*}$/", $nom))
            {
				$erreur = true;
                $message .="Nom invalide\n";
            }
            //telephone conforme 
            if(!preg_match("/^[0-9]{10}$/",$tel)){
				$erreur = true;
                $message .="Téléphone invalide\n";
			}
        
			if(erreur) {
                //Ne trouve pas le client
                $message = "save";
				$client = new Client ();
				$client->setNom($nom);
                $client->setPrenom($prenom);
                $client->setAdresse($adresse);
                $client->setCodepostal($cp);
                $client->setTel($tel);
                $client->setEmail($email);
                $client->setSexe($civilite);
                $client->setPass($password);
                $client->setLogin($login);
                $client->save();
                $message = "Sauvegarde OK2 !!" . $nom;
			}
        
            $smarty->assign("message",$message);
            $smarty->display("$page.tpl");
           // $smarty->assign("message",$message);
	       //$smarty->display("$page.tpl");
	} 
    else
    {
        
        $smarty->assign("message","get");
	    $smarty->display("$page.tpl");
    }
?>
