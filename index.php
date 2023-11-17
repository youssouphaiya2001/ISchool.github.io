<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil IY School</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="../logo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>
  <header>
    <nav class="navbar">
      <a href="#" class="logo">
        <img src="../logo.png" style="width: 90px; hight: 90px;"alt="IY-school Logo">
      </a>
      <ul class="menu-links">
        <li><a href="#">Acceuil</a></li>
        <li><a href="eleves.php">Eleves</a></li>
        <li><a href="serie.php">Series</a></li>
        <li><a href="salle.php">Classe</a></li>
        <li><a href="Classe.php">salle</a></li>
        <li><a href="professeur.php">Professeurs</a></li>
        <li><a href="matieres.php">Matieres</a></li>
        
        
        <li><a href="Prcla.php">Prof Par Classe</a></li>
        <li><a href="releve.php">Relever</a></li>
        <li><a href="deconnexion.php">Deconnexion</a></li>
        <li class="join-btn"><a href="contact.php">Nous Contactez</a></li>
        <span id="close-menu-btn" class="material-symbols-outlined">fermer</span>
      </ul>
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>

  <section class="hero-section">
    <div class="content">
      <h1>Trouvez Nous Et Commencez Avec Nous</h1>
      <form action="#" class="search-form">
        <input type="text" placeholder="tous les sservices" required>
        <button class="material-symbols-outlined" type="sumbit">Recherche</button>
      </form>
      <div class="popular-tags">
        Populaires:
        <ul class="tags">
          <li><a href="#">Cours</a></li>
          <li><a href="#">Matieres</a></li>
          <li><a href="#">Serie</a></li>
          <li><a href="#">Enseignement</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <script>
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");

    // click sur le menu hamburger
    hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

    // click de fermeture
    closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
  </script>
</body>
</html>