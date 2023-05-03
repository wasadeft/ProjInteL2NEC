<?php
    $action = $_REQUEST["action"];

    switch ($action) {
        case 'visualiserFauneFlores':
            {
                include("view/v_faunesFlores.php");
                break;
            }            
        case 'visualiser':
            {
                $type = $_REQUEST["type"];
                echo $type;
                switch ($type) {
                    case 'Faune':
                        {
                            $fauneDatas = $laConnexion->getTypeFaune(); //mammi oiseau etc ...
                            include("view/v_faunes.php");
                            break;
                        }
                    case 'Flore':
                        {
                            $floreDatas = $laConnexion->getFloreDatas();
                            include("view/v_flores.php");
                            break;
                        }
                    default:
                        break;
                }                
                break;
            }
        case 'visualiserUnTypeFaune':   
            {
                $nom = $_REQUEST["nomType"];
                $allTypeFauneDatas = $laConnexion->getUnTypeFauneDatas($nom);
                include("view/v_typeFaune.php");
                break;
            }
        case 'insertObservationFauneFormulaire':
            {
                $type = $_REQUEST["nomType"];
                $nomEspece = $_REQUEST["nomEspece"];
                include("view/v_insertFaune.php");
                break;
            }
        case 'insertObservationFaune':
            {
                // recup formulaires

                $type = $_REQUEST["nomType"];
                $nomEspece = $_REQUEST["nomEspece"];
                $lieu = $_REQUEST["lieu"];
                $dates = $_REQUEST["dates"];
                $moyenIndentifications = $_REQUEST["moyenIndentifications"];
                $heureDebut = $_REQUEST["heureDebut"];
                $heureFin = $_REQUEST["heureFin"];
                $temps = $_REQUEST["temps"];
                $temperature = $_REQUEST["temperature"];
                $pointEcoute = $_REQUEST["pointEcoute"];
                $effectif = $_REQUEST["effectif"];
                $idGrp = $_REQUEST["idGrp"];

                // insert observation

                $res = $laConnexion->insertObservationFaune($type, $nomEspece, $lieu, $dates, $moyenIndentifications,
                $heureDebut, $heureFin, $temps, $temperature, $pointEcoute, $effectif, $idGr);

                if ($res > 0 ) {
                    $message = "Insertion reussie";
                }else{
                    $message = "Echec insertion";
                }

                include("view/v_message.php");
                break;
            }
        case 'insertObservationFloreFormulaire':
            {
                $thisNomEspece = $_REQUEST["nomEspece"];
                $allGrp = $laConnexion->getAllGrp();
                include("view/v_insertObservationFlore.php");
                break;
            }
        case 'insertObservationFlore':
            {
                // recup formulaire
                $nomEspece = $_REQUEST["nomEspece"];
                $dates = $_REQUEST["dates"];
                $typeHabitation = $_REQUEST["typeHabitation"];
                $strate = $_REQUEST["strate"];
                $zone = $_REQUEST["zone"];
                $idGrp = $_REQUEST["idGrp"];

                // insert observation
                $res = $laConnexion->insertObservationFlore($nomEspece, $dates, $typeHabitation, $strate, $zone, $idGrp);
                
                // DEBUG
                if ($res > 0) {
                    $message = "Insertion reussie";
                }else{
                    $message = "Echec insertion";
                }
                include("view/v_message.php");
                break;
            }

        default:
        {
            include("view/v_404.php");
            break;
        }
    }
?>