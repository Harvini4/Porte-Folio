<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - SOUCE Harvini</title>

  <style>
    /* ===== GLOBAL ===== */
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      color: #333;
      background: #fff;
    }

    h1, h2, h3 {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      color: #000;
      margin: 0 0 15px 0;
    }

    a {
      text-decoration: none;
      transition: 0.3s;
    }

    a:hover {
      color: #b5a400;
    }

    /* ===== GLITTER TEXT ===== */
    .glitter-text {
      background: linear-gradient(90deg, #b8860b, #ffd700, #fff1a8, #ffd700, #b8860b);
      background-size: 300%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: glitter 3s infinite linear;
    }

    @keyframes glitter {
      0% { background-position: 0%; }
      100% { background-position: 300%; }
    }

    /* ===== HEADER ===== */
    header {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: #000;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 10%;
      flex-wrap: wrap;
      gap: 15px;
    }

    header .logo img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
      align-items: center;
      flex-wrap: wrap;
    }

    nav a.menu-link {
      color: #ffffff;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 6px;
      transition: 0.3s;
    }

    nav a.menu-link:hover {
      color: #DECE31;
    }

    nav a.lang-btn {
      background: #DECE31;
      color: #000;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 6px;
      transition: 0.3s;
    }

    nav a.lang-btn:hover {
      background: #b5a400;
      color: #fff;
    }

    /* ===== INTRO ===== */
    #intro {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 60px 10%;
      background: #f9f9f9;
      flex-wrap: wrap;
      gap: 30px;
    }

    #intro h2 {
      font-size: 28px;
    }

    #intro p {
      line-height: 1.6;
      max-width: 600px;
    }

    /* ===== CONTACT (CENTRÉ) ===== */
    .o {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .o a {
      color: #DECE31;
      font-weight: 600;
    }

    .o a:hover {
      color: #b5a400;
    }

    /* ===== MAIN CONTENT ===== */
    main {
      padding: 40px 10%;
      text-align: center;
    }

    main h2 {
      font-size: 26px;
      margin-bottom: 25px;
    }

    main p {
      line-height: 1.8;
      max-width: 800px;
      margin: 0 auto 30px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .col {
      flex: 1 1 300px;
      max-width: 300px;
    }

    .option-card {
      background: linear-gradient(145deg, #000, #1a1a1a);
      color: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      border: 1px solid #DECE31;
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: left;
    }

    .option-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(255,215,0,0.3);
    }

    .option-card h3 {
      color: #DECE31;
      margin-bottom: 15px;
    }

    .option-card p {
      font-size: 0.95rem;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    .option-card ul {
      margin: 10px 0 0 20px;
    }

    .option-card ul li {
      margin-bottom: 5px;
    }

    /* ===== FOOTER ===== */
    footer {
      background: #111827;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }

    footer p {
      margin: 5px 0;
      font-size: 0.9rem;
      color: #9ca3af;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        text-align: center;
      }

      nav ul {
        flex-direction: column;
        gap: 10px;
      }

      #intro {
        flex-direction: column;
        text-align: center;
      }

      .option-card {
        text-align: center;
      }
    }
  </style>
</head>

<body>

  <!-- HEADER -->
 <header>
  <div class="logo">
    <img src="images/SOUCE.jpg" alt="Photo de SOUCE Harvini">
  </div>

  <nav>
    <ul>
      <li><a href="Accueil" class="menu-link">Accueil</a></li>
      <li><a href="Parcours_formation" class="menu-link">Parcours & Formations</a></li>
      <li><a href="Compétences" class="menu-link">Compétences</a></li>
      <li><a href="Projets" class="menu-link">Projets</a></li>
      <li><a href="Veille" class="menu-link">Veille Technologique</a></li>
      <li><a href="Contact" class="menu-link">Contact</a></li>

      <!-- VERSION ANGLAISE -->
      <li>
       <li><a href="En/Accueil" class="lang-btn" lang="en">English</a></li>
      </li>
    </ul>
  </nav>
</header>
  <!-- INTRO -->
  <section id="intro">
    <div>
      <h2 class="glitter-text">Présentation</h2>
      <p>Je m’appelle <strong>SOUCE Harvini</strong>. Actuellement étudiant en <strong>BTS SIO option SLAM</strong> à l’école <strong>IRIS</strong>, je vous invite à découvrir sur ce portfolio un aperçu de mon parcours académique et professionnel.</p>
      <p>Vous y trouverez mon mail ainsi que mon <a href="https://www.linkedin.com/in/harvini-souce-93b52b351/" target="_blank">profil LinkedIn</a>.</p>
    </div>

    <div class="o">
      <a href="https://www.linkedin.com/in/harvini-souce-93b52b351/" target="_blank">
        <img src="images/linkedin.webp" alt="Logo LinkedIn" width="50">
      </a>
      <p>
        <a href="mailto:souceharvini25@gmail.com">souceharvini25@gmail.com</a>
      </p>
    </div>
  </section>

  <!-- MAIN -->
  <main>
    <h2 class="glitter-text">Qu'est-ce que le BTS SIO ?</h2>
    <p>Le <strong>BTS SIO</strong> (Services Informatiques aux Organisations) est un diplôme de niveau <strong>Bac+2</strong>. Il forme des experts en informatique, compétents en développement et administration des réseaux.</p>
    <p>Il existe deux options :</p>

    <div class="row">
      <div class="col">
        <div class="option-card">
          <h3>Option SISR</h3>
          <p>L’option <strong>Solutions d’infrastructure, systèmes et réseaux</strong> prépare des spécialistes en réseaux et équipements informatiques.</p>
          <p>Les diplômés peuvent exercer :</p>
          <ul>
            <li>Administrateur systèmes et réseaux</li>
            <li>Informaticien support et déploiement</li>
            <li>Pilote d’exploitation</li>
            <li>Technicien support systèmes et réseaux</li>
          </ul>
        </div>
      </div>

      <div class="col">
        <div class="option-card">
          <h3>Option SLAM</h3>
          <p>L’option <strong>Solutions logicielles et applications métiers</strong> forme des spécialistes du développement et de la conception logicielle.</p>
          <p>Les diplômés peuvent devenir :</p>
          <ul>
            <li>Développeur d’applications</li>
            <li>Développeur informatique</li>
            <li>Analyste d’applications</li>
            <li>Concepteur-développeur</li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <p>© 2025 SOUCE Harvini — Tous droits réservés</p>
    <p>Mentions légales • Plan du site</p>
  </footer>

</body>
</html>
