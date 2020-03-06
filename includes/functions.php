<?php
function reqMatch()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $variable = "";
    $reponse = $bdd->query("SELECT M.dateMatch, E.nom as name, EQ.nom as nom, M.result FROM matchs M JOIN equipe E ON M.eq1 = E.id JOIN equipe EQ ON M.eq2 = EQ.id ORDER BY M.dateMatch ASC");
    while ($donnees = $reponse->fetchObject()) {
        foreach ($donnees as $key => $value) {
            if ($value == NULL) {
                $value .= 'match à venir';
            }
            $variable .= $value;
            $variable .= " ";
        }
        $variable .= "<br>";
        $variable .= "<br>";
    }
    $reponse->closeCursor();
    return $variable;
}

function reqListeEquipe()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $variable = "";
    $reponse = $bdd->query('SELECT nom FROM equipe');
    while ($donnees = $reponse->fetchObject()) {
        foreach ($donnees as $key => $value) {
            $variable .= $value . " ";
        }
        $variable .= "<br>";
        $variable .= "<br>";
    }
    $reponse->closeCursor();
    return $variable;
}

function reqAddEquipe()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare("INSERT INTO equipe SET nom=:nom");
    $req->execute(['nom' => $_POST['nom']]);
    $req->closeCursor();
}

function AddEquipe()
{
    if (isset($_POST['ajout'])) {
        reqAddEquipe();
        header("Refresh:0");
    }
}

function reqUpDateEquipe()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare("UPDATE equipe SET nom=:nom WHERE id=:id ");
    $req->execute(['nom' => $_POST['nom'], 'id' => $_POST['id']]);
    $req->closeCursor();
}

function upDateEquipe()
{
    if (isset($_POST['modifier'])) {
        reqUpDateEquipe();
        header("Refresh:0");
    }
}

function reqDelEquipe()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare("DELETE FROM equipe WHERE id=:id ");
    $req->execute(['id' => $_POST['id']]);
    $req->closeCursor();
}

function DelEquipe()
{
    if (isset($_POST['supprimer'])) {
        reqDelEquipe();
        header("Refresh:0");
    }
}

/* Gestion Match */

function reqAddMatch()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare("INSERT INTO matchs SET eq1=:eq1, eq2=:eq2, dateMatch=:dateMatch");
    $req->execute(['eq1' => $_POST['eq1'], 'eq2' => $_POST['eq2'], 'dateMatch' => $_POST['dateMatch']]);
    $req->closeCursor();
}

function AddMatch()
{
    if (isset($_POST['ajoutMatch'])) {
        reqAddMatch();
        header("Refresh:0");
    }
}

function reqUpDateMatch()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare("UPDATE matchs SET eq1=:eq1, eq2=:eq2, dateMatch=:dateMatch, result=:result WHERE id=:id ");
    $req->execute(['eq1' => $_POST['eq1'], 'eq2' => $_POST['eq2'], 'dateMatch' => $_POST['dateMatch'], 'result' => $_POST['result'], 'id' => $_POST['id']]);
    $req->closeCursor();
}

function upDateMatch()
{
    if (isset($_POST['modifierMatch'])) {
        reqUpDateMatch();
        header("Refresh:0");
    }
}

function reqDelMatch()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare("DELETE FROM matchs WHERE id=:id ");
    $req->execute(['id' => $_POST['id']]);
    $req->closeCursor();
}

function DelMatch()
{
    if (isset($_POST['supprimerMatch'])) {
        reqDelMatch();
        header("Refresh:0");
    }
}

/* Gestion Score */

function ReqAddScore(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare("UPDATE matchs SET result=:result WHERE id=:id ");
    $req->execute(['result'=> $_POST['result'], 'id' => $_POST['id']]);
    $req->closeCursor();
}
function AddScore(){
    if(isset($_POST['ajoutScore']))
    {
        ReqAddScore();
        //header("Refresh:0");
    }
} 

function choixEquipe()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $variable = "";
    $reponse = $bdd->query('SELECT id, nom FROM equipe');
    while ($donnees = $reponse->fetchObject()) {
        $variable .= "<option value = '$donnees->id'>";
        $variable .= $donnees->nom . "</option>";
    }
    $reponse->closeCursor();
    return $variable;
}

function choixMatch()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $variable = "";
    $reponse = $bdd->query("SELECT M.id as idmatch, M.dateMatch as datematch, E.nom as name, EQ.nom as nom FROM matchs M JOIN equipe E ON M.eq1 = E.id JOIN equipe EQ ON M.eq2 = EQ.id");
    while ($donnees = $reponse->fetchObject()) {
        $variable .= "<option value = '$donnees->idmatch'>";
        $variable .= $donnees->name . " " . $donnees->nom . " " . $donnees->datematch . "</option>";
    }
    $reponse->closeCursor();
    return $variable;
}


function MatchTerminer()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $variable = "";
    $reponse = $bdd->query("SELECT M.dateMatch, E.nom as name, EQ.nom as nom, M.result FROM matchs M JOIN equipe E ON M.eq1 = E.id JOIN equipe EQ ON M.eq2 = EQ.id WHERE M.result = 1 OR M.result = 2 OR M.result = 'N' ORDER BY M.dateMatch ASC");
    while ($donnees = $reponse->fetchObject()) {
        foreach ($donnees as $key => $value) {
            if ($value == NULL) {
                $value .= 'match à venir';
            }
            $variable .= $value;
            $variable .= " ";
        }
        $variable .= "<br>";
        $variable .= "<br>";
    }
    $reponse->closeCursor();
    return $variable;
}
function MatchAVenir()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=loto_sportif;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $variable = "";
    $reponse = $bdd->query("SELECT M.dateMatch, E.nom as name, EQ.nom as nom, M.result FROM matchs M JOIN equipe E ON M.eq1 = E.id JOIN equipe EQ ON M.eq2 = EQ.id WHERE M.dateMatch >= CURRENT_TIMESTAMP ORDER BY M.dateMatch ASC");
    while ($donnees = $reponse->fetchObject()) {
        foreach ($donnees as $key => $value) {
            if ($value == NULL) {
                $value .= 'match à venir';
            }
            $variable .= $value;
            $variable .= " ";
        }
        $variable .= "<br>";
        $variable .= "<br>";
    }
    $reponse->closeCursor();
    return $variable;
}
