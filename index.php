<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Hope Mobile - Accueil</title>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
  <h1>Hope Mobile Boutique</h1>
  <nav>
    <a href="index.php">Accueil</a>
    <a href="produits.php">Produits</a>
    <a href="panier.php">Panier</a>
    <a href="contact.php">Contact</a>
    <?php if (isset($_SESSION['user_id'])): ?>
      <a href="logout.php">Déconnexion</a>
    <?php else: ?>
      <a href="login.php">Connexion</a>
    <?php endif; ?>
  </nav>
</header>

<section class="hero">
  <img src="images/coque.jpg" class="hero-img" alt="">
  <div class="overlay">
    <h2>Des accessoires pour tous les téléphones</h2>
    <p>Power Bank, écouteurs, chargeurs, coques et plus encore !</p>
    <a href="produits.php" class="btn">Voir les produits</a>
  </div>
</section>

<footer>
  <p>&copy; 2025 Hope Mobile Boutique</p>
</footer>
</body>
</html>