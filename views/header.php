<header>
  <section class="navHeader">
    <section class="search">
      <section class="button40px squareButton"><i class="fa-solid fa-magnifying-glass fa-xl"></i></section>
      <input id="searchInput" class="searchBar" type="search"  value="Rechercher un outil ...">
    </section>

    <section class="user" onClick="navHidden()">
      <section class="button40px squareButton"><i class="fa-solid fa-user fa-xl"></i></section>

      <section id="navHidden" class="visibilityNav">
        <section class="navUserLogin titleBox separationHorizontalLine1px">
          <a href="loginAccount.php" class="title titleHeader fontSize12px">Me connecter / M’inscrire</a>
        </section>

        <section class="navUserAccount titleBox separationHorizontalLine1px">
          <a href="userPageAccount.php" class="navUserAccountLinks title titleHeader fontSize12px">Mon compte</a>
          <a href="userPageActivities.php" class="navUserAccountLinks title titleHeader fontSize12px">Mes activités</a>
          <a href="userMessaging.php" class="navUserAccountLinks title titleHeader fontSize12px">Ma messagerie</a>
        </section>

        <section class="navUserLogout titleBox">
          <a href="php/logout.php" class="title titleHeader fontSize12px">Me déconnecter</a>
        </section>
      </section>
    </section> 
  </section> 
  
  <a href="index.php"><section class="logoPretooty"></section></a>
</header>