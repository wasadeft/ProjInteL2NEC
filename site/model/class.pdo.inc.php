<?php
Class Pdo
{
    private static $monPdo;
    private static $monPdobdOpetit = null;

    private function __construct()
    {
        Pdo::$monPdo = new PDO('mysql:host=localhost;dbname=bdOpetit', 'root', '');
        Pdo::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        Pdo::$monPdo = null;
    }

    private static function getPdobdOpetit()
    {
        if (Pdo::$monPdo == null) {
            Pdo::$monPdo = new Pdo();
        }
        return Pdo::$monPdo;
    }

    public static function getTypeFaune()
    {
        $req = "select * from type";
        $res = Pdo::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public static function getFloreDatas()
    {
        $req = "select * from flore";
        $res = Pdo::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }


    public static function getUnTypeFauneDatas($nom)
    {
        $req = "select * from '$nom'";
        $res = Pdo::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public static function insertObservationFaune($type, $nomEspece, $lieu, $dates, $moyenIndentifications, $heureDebut, $heureFin, $temps, $temperature, $pointEcoute, $effectif, $idGr)
    {
        $req = "insert into observationFaune values (null, '$type', '$nomEspece', '$lieu', '$dates', '$moyenIndentifications', '$heureDebut', '$heureFin', '$temps', '$temperature', '$pointEcoute', '$effectif', '$idGr')";
        $res = Pdo::$monPdo->exec($req);
        return $res;
    }

    public static function insertObservationFlore($nomEspece, $dates, $typeHabitation, $strate, $zone, $idGrp)
    {
        $req = "insert into observationFlore values (null, '$nomEspece', '$dates', '$typeHabitation', '$strate', '$zone', '$idGrp')";
        $res = Pdo::$monPdo->exec($req);
        return $res;
    }
}

?>