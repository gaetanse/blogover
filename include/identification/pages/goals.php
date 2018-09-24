<?php

 ?>

<div class="page-wrapper">

  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Gestion des objectifs</h3></div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card" id="btnUser">
            <div class="card-title">
              <h4>Ajout d'un objectif</h4>
            </div>
            <div class="button-list">
              <button type="button" class="btn btn-warning m-b-10 m-l-5" onClick="ajoutGoal();">Formulaire</button>
            </div>
          </div>

          <div class="card card-outline-primary" id="ajoutUser" style="display: none;">
            <div class="card-header">
              <h3 class="m-b-0 text-white">Formulaire pour l'ajout d'un objectif</h3>
            </div>
            <br />
            <div class="button-list">
              <div class="form-validation">
                <form id="user" class="form-valide" action="./core/ajoutObjectif.php" method="post">
                  <div class="form-group row">
                    <span class="text-danger">*</span><h5 style="font-style: italic; color: red;">&nbsp;tous les champs sont obligatoires...</h5>
                    <div class="col-lg-8 ml-auto">
                      <button type="button" class="btn btn-primary" onClick="testObjectif();">Envoi des informations</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>

          <div class="card" id="listeObjectifs">
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
