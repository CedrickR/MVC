
      <div class="container theme-showcase" role="main">

      <h1>Utilisateurs enregistrés</h1>
      
      <table class="table table-striped">
      <thead>
      <tr>
          <th>#</th> <th>Nom</th> <th>Prénom</th> <th>Service</th> <th>Actions </th><th>Actions </th>
      </tr> 
      </thead>
      <tbody>
      <?php
        foreach ($utilisateurs as  $user) {
            
        ?>
        <td><?= $user->getId(); ?></td>
        <td><?= $user->getNom(); ?></td>
        <td><?= $user->getPrenom(); ?></td>
        <td><?= $user->getService(); ?></td>
        <td><a class="btn btn-default" href="editController.php?id=<?= $user->getId(); ?>" role="button">Editer</a> </td>
        <td><a class="btn btn-danger" href="deleteControler.php?id=<?= $user->getId(); ?>" role="button">Supprimer</a> </td>

        </tr>
        <?php } ?>
        </tbody> </table>


        <h2>Ajouter un nouvel utilisateur</h2>
        <!-- Formulaire d'ajouter -->
        <div class="row">
            <div class="col-md-4"></div>
  
            <div class="col-md-4">

            <form class="form-horizontal" role="form" method="post" action="ajouter.php">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'utilisateur">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom de l'utilisateur">
                </div>
                <div class="form-group">
                    <label for="service">Service</label>
                    <input type="text" class="form-control" id="service" name="service" placeholder="Serbvice de l'utilisateur">
                </div>

                <button type="submit" class="btn btn-default">Enregistrer</button>
            </form>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div> <!-- /container -->