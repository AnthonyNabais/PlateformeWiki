<!-- Content -->
  <div class="main">
    <div class="hipsum">
      <div class="jumbotron">
        <h1 id="hello,-world!">Ajouter un utilisateur</h1>
        <p>Via le formulaire ci-dessous, modifiez directement des utilisateurs avec leurs différentes informations en ne pas oubliant de renseigner le rang de l'utilisateur.</p>
      </div>
      <div class="form-wrapper">
        <h1>Modifier un utilisateur</h1>
        <form action="admin.php" method="post" role="form">
          <div class="form-item">
            <label for="mail"></label>
            <input type="mail" id="mail" name="mail" required="required" placeholder="Adresse mail"></input>
          </div>
          <div class="form-item">
            <label for="nom"></label>
            <input type="text" id="nom" name="nom" required="required" placeholder="Nom"></input>
          </div>
          <div class="form-item">
            <label for="prenom"></label>
            <input type="text" id="prenom" name="prenom" required="required" placeholder="Prenom"></input>
          </div>
          <div class="form-item">
            <label for="password"></label>
            <input type="password" id="password" name="password" required="required" placeholder="Mot de passe"></input>
          </div>
          <div class="form-item">
            <select id="rang" name="rang">
              <option value="Administrateur">Administrateur</option>
              <option value="auteur">auteur</option>
            </select>
          </div>
          <div class="button-panel">
            <input type="submit" name="register" class="button" title="Modifier un nouvel utilisateur" value="Modifie un nouvel utilisateur"></button>
          </div>
    </div>
  </div>

</body>