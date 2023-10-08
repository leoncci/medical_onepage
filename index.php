<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Medical</title>
    
</head>
<body>

<?php include "navbar.php";?>
<div class="container">

<div class="row mt-4">
    <div class="col-md-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajouterRendezVousModal">
        Prendre Rendez-vous
    </button>
    </div>
    <div class="col-md-10">

<table class="table table-sm table-bordered ">
        <thead>
            <tr>
                <th></th>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
       
            </tr>
        </thead>
        <tbody>
            <?php
            for ($heure = 8; $heure <= 17; $heure++) {
                echo "<tr>";
                echo "<th>$heure:00</th>";
                for ($jour = 1; $jour <= 5; $jour++) {
                    echo "<td></td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
  <!-- Modale pour prendre un rendez-vous -->
  <div class="modal fade" id="ajouterRendezVousModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prendre un rendez-vous</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulaire pour ajouter le rendez-vous -->
                    <form>
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" id="nom" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" placeholder="Prénom">
                        </div>
                        <div class="form-group">
                            <label for="heureRendezVous">Heure du rendez-vous :</label>
                            <select class="form-control" id="heureRendezVous">
                                <?php
                                    for ($heure = 8; $heure < 17; $heure++) {
                                        echo "<option value='$heure'>$heure:00</option>";
                                    }
                                ?>
                            </select>

                        </div>
                        <div class="form-group">
                        <label for="date_rdv">Choisir le jour:</label>

                        <input type="date" class="form-control" id="date_rdv" name="rdv" value="2023-01-01"  />
                        </div>
                        

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Connexion -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="username">Identifiant</label>
            <input type="text" class="form-control" id="username" placeholder="Votre identifiant">
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" placeholder="Votre mot de passe">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Se connecter</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
