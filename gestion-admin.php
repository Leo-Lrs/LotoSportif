<?php include 'partials/navbar.php'; ?>
<main>
    <br><br>Liste des Equipes : <br><br><br><br>
    <?php
    echo reqListeEquipe();
    echo AddEquipe();
    echo upDateEquipe();
    echo DelEquipe();
    echo upDateMatch();
    echo DelMatch();
    echo AddMatch();
    echo AddScore();
    ?>
    <br>
    <div class="entete"> Gestion d'Equipe: <br><br> </div><br><br>
    <div class="fx-center"> Ajouter Equipe: <br> </div>

    <div class="grix md3">
        <form action="gestion-admin.php" method="post" class="form-field">
            <input type="text" name="nom" placeholder="nom" class="form-control" required>
            <input type="submit" name="ajout" class="btn small grey uppercase">
        </form>
    </div>

    <div class="titre"> Modifier nom d'Equipe: <br><br> </div>
    <div class="grix md3">
        <form action="gestion-admin.php" method="post" class="form-field">
            <input type="text" name="nom" placeholder="nouveau nom" class="form-control" required>
            <div class="form-field">
                <label class="txt-center" for="select">Equipe a modifier</label>
                <select class="form-control" name="id" id="select">
                    <?php echo choixEquipe(); ?>
                </select>
            </div>
            <input type="submit" name="modifier" class="btn small grey uppercase">
        </form>
    </div>

    <div class="titre"> Supprimer equipe: <br></div>
    <div class="grix md3">
        <form action="gestion-admin.php" method="post" class="form-example">
            <div class="form-field">
                <label class="txt-center" for="select">Choisir une équipe</label>
                <select class="form-control" name="id" id="select">
                    <?php echo choixEquipe(); ?>
                </select>
            </div>
            <input type="submit" name="supprimer" class="btn small grey uppercase">
        </form>
    </div>

    <br> <br> Liste des Matchs: <br> <br><br><br>

    <?php echo reqMatch(); ?>
    <br>
    <div class="entete"> Gestion match: <br><br> </div><br><br>


    <div class="titre"> Ajouter Match: <br> </div>
    <div class="grix md3">
        <form action="gestion-admin.php" method="post" class="form-field">
            <div class="form-field">
                <label class="txt-center" for="select">Equipe 1</label>
                <select class="form-control" name="eq1" id="select">
                    <?php echo choixEquipe(); ?>
                </select>
            </div>
            <div class="form-field">
                <label class="txt-center" for="select">Equipe 2</label>
                <select class="form-control" name="eq2" id="select">
                    <?php echo choixEquipe(); ?>
                </select>
            </div>
            <input type="date" name="dateMatch" placeholder="date" class="form-control" required>
            <input type="submit" name="ajoutMatch" class="btn small grey uppercase">
        </form>
    </div>



    <div class="titre"> Ajouter Score: <br><br> </div>
    <div class="grix md3">
        <form action="gestion-admin.php" method="post" class="form-field">
            <label class="form-check">
                <span>Résultat :</span> <br>
                <input type="radio" name="result" value="1" />
                <span>Equipe 1</span>
            </label>
            <label class="form-check">
                <input type="radio" name="result" value="2" />
                <span>Equipe 2</span>
            </label>
            <label class="form-check">
                <input type="radio" name="result" value="N" />
                <span>Match Nul</span>
            </label>
            <div class="form-field">
                <label class="txt-center" for="select">Choix Du Match</label>
                <select class="form-control" name="id" id="select">
                    <?php echo choixMatch(); ?>
                </select>
            </div>
            <input type="submit" name="ajoutScore" class="btn small grey uppercase">
        </form>
    </div>





    <div class="titre"> Modifier Match: <br> </div>
    <div class="grix md3">
        <form action="gestion-admin.php" method="post" class="form-field">
            <div class="form-field">
                <label class="txt-center" for="select">Equipe 1</label>
                <select class="form-control" name="eq1" id="select">
                    <?php echo choixEquipe(); ?>
                </select>
            </div>
            <div class="form-field">
                <label class="txt-center" for="select">Equipe 2</label>
                <select class="form-control" name="eq2" id="select">
                    <?php echo choixEquipe(); ?>
                </select>
            </div>
            <input type="date" name="dateMatch" placeholder="date" class="form-control" required>
            <label class="form-check">
                <span>Résultat :</span> <br>
                <input type="radio" name="result" value="1" />
                <span>Equipe 1</span>
            </label>
            <label class="form-check">
                <input type="radio" name="result" value="2" />
                <span>Equipe 2</span>
            </label>
            <label class="form-check">
                <input type="radio" name="result" value="N" />
                <span>Match Nul</span>
            </label>
            <div class="form-field">
                <label class="txt-center" for="select">Choix Match</label>
                <select class="form-control" name="id" id="select">
                    <?php echo choixMatch(); ?>
                </select>
            </div>
            <input type="submit" name="modifierMatch" class="btn small grey uppercase">
        </form>
    </div>
    <div class="titre"> Supprimer Match : <br></div>
    <div class="grix md3">
        <form action="gestion-admin.php" method="post" class="form-example">
            <div class="form-field">
                <label class="txt-center" for="select"> Match</label>
                <select class="form-control" name="id" id="select">
                    <?php echo choixMatch(); ?>
                </select>
            </div>
            <input type="submit" name="supprimerMatch" class="btn small grey uppercase">
        </form>
    </div>


</main>

<?php include 'partials/footer.php'; ?>