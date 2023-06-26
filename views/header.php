<header>
  <div class="navHeader">
    <div class="search">
      <div class="button40px squareButton"><i class="fa-solid fa-magnifying-glass fa-xl"></i></div>
      <input id="searchInput" class="searchBar" type="search"  value="Rechercher un outil ...">
    </div>

    <div class="user" onClick="navHidden()">
      <div class="button40px squareButton"><i class="fa-solid fa-user fa-xl"></i></div>

      <div id="navHidden" class="visibilityNav">
        <div class="navUserLogin titleBox separationHorizontalLine1px">
          <a href="loginAccount.php" class="title titleHeader fontSize12px">Me connecter / M’inscrire</a>
        </div>

        <div class="navUserAccount titleBox separationHorizontalLine1px">
          <a href="userPageAccount.php" class="navUserAccountLinks title titleHeader fontSize12px">Mon compte</a>
          <a href="userPageActivities.php" class="navUserAccountLinks title titleHeader fontSize12px">Mes activités</a>
          <a href="userMessaging.php" class="navUserAccountLinks title titleHeader fontSize12px">Ma messagerie</a>
        </div>

        <div class="navUserLogout titleBox">
          <a href="php/logout.php" class="title titleHeader fontSize12px">Me déconnecter</a>
        </div>
      </div>
    </div> 
  </div> 
  
  <a href="index.php"><div class="logoPretooty"></div></a>
</header>