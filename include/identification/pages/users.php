<?php
 // Lecture de la table utilisateurs
 $mysqli = new mysqli("localhost","sio","sio","cloudcampus");

 if (!$mysqli->connect_errno) {
  $rqut = "SELECT * FROM `tbl_users`;";

  if ($rslt = $mysqli->query($rqut, MYSQLI_USE_RESULT)) {
   $tabUsers = $rslt->fetch_all(MYSQLI_ASSOC);
   $longTabUsers = count($tabUsers);
  }

  // Libération des résultats
  $rslt->free();
 }

 // Fermeture de la connexion
 $mysqli->close();
 ?>

<div class="page-wrapper">

  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Gestion des utilisateurs</h3></div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card" id="btnUser">
            <div class="card-title">
              <h4>Ajout d'un utilisateur </h4>
            </div>
            <div class="button-list">
              <button type="button" class="btn btn-warning m-b-10 m-l-5" onClick="ajoutUser();">Formulaire</button>
            </div>
          </div>

          <div class="card card-outline-primary" id="ajoutUser" style="display: none;">
            <div class="card-header">
              <h3 class="m-b-0 text-white">Formulaire pour l'ajout d'un utilisateur</h3>
            </div>
            <br />
            <div class="button-list">
              <div class="form-validation">
                <form id="user" class="form-valide" action="./core/ajoutUser.php" method="post">
                  <div class="form-group row">
                    <label id="ident" class="col-lg-4 col-form-label" for="val-fullname">Identit&eacute; (Nom et prénom)
                      <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="val-fullname" name="val-fullname" placeholder="" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label id="ident" class="col-lg-4 col-form-label" for="val-email">Email (Utilis&eacute; comme login)
                      <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="val-email" name="val-email" placeholder="" autocomplete="false">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label id="password" class="col-lg-4 col-form-label" for="val-password">Code &agrave 6 chiffres (Date de naissance)
                      <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                      <input type="password" class="form-control" id="val-password" name="val-password" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label id="section" class="col-lg-4 col-form-label" for="val-section">Section<span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                      <select class="form-control" id="val-section" name="val-section">
                        <option value="">Choisissez une section</option>
                        <option value="sio11">SIO 11</option>
                        <option value="sio12">SIO 12</option>
                        <option value="sio21">SIO 21</option>
                        <option value="sio22">SIO 22</option>
                        <option value="prof">Professeur</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label id="role" class="col-lg-4 col-form-label" for="val-role">R&ocirc;le <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                      <select class="form-control" id="val-role" name="val-role">
                        <option value="">Choisissez un rôle</option>
                        <option value="administrateur">Administrateur</option>
                        <option value="utilisateur">Utilisateur</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <span class="text-danger">*</span><h5 style="font-style: italic; color: red;">&nbsp;tous les champs sont obligatoires...</h5>
                    <div class="col-lg-8 ml-auto">
                      <button type="button" class="btn btn-primary" onClick="testUser();">Envoi des informations</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>

          <div class="card" id="listeUsers">
            <div class="card-body">
              <h4 class="card-title">Liste des utilisateurs</h4>
              <h6 class="card-subtitle"><i><u>Note :</u> l'utilisateur connect&eacute; se g&egrave;re par son <b>Compte</b>.</i></h6>
              <div class="table-responsive m-t-40">
                <table id="lesUsers" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Identifiant</th>
                      <th>Email</th>
                      <th>Section</th>
                      <th>R&ocirc;le</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                    for ($i=0; $i<$longTabUsers; $i++) {
                     if ($tabUsers[$i]['email']!=$email) {
                      print('<tr>');
                      print('<td>'.$tabUsers[$i]['full_name'].'</td>');
                      print('<td>'.$tabUsers[$i]['email'].'</td>');
                      print('<td>'.$tabUsers[$i]['section'].'</td>');
                      print('<td>'.$tabUsers[$i]['role'].'</td>');
                      print("<td><a href='#'><span class='fa fa-trash' onClick='delUser(".$tabUsers[$i]['id'].");'/></span></a></td>");
                      print('</tr>');
                     }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
