

  <div class="navbar navbar1">
    lebonplan
  </div>


  <style>
    /* Navbar 2 */
    .navbar2 {
      background-color: #0d0d0e;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar2 .left,
    .navbar2 .right {
      display: flex;
      align-items: center;
      margin-left: 0%;
    }

    .navbar2 .left a,
    .navbar2 .right a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      padding: 0 10px;
    }

    .navbar2 .left .separator,
    .navbar2 .right .separator {
      color: white;
    }

    /* Burger button */
    .burger-btn {
      display: none;
      font-size: 28px;
      cursor: pointer;
      background: none;
      border: none;
      color: white;
      padding: 10px;
      margin-right: 15px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .burger-btn {
        display: block;
      }

      .navbar2 {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar2 .left,
      .navbar2 .right {
        display: none !important;
        flex-direction: column;
        width: 100%;
        background-color: #0d0d0e;
        padding: 10px 0;
      }

      .navbar2.active .left,
      .navbar2.active .right {
        display: flex !important;
      }

      .navbar2 .left a,
      .navbar2 .right a {
        padding: 10px 20px;
        width: 100%;
      }

      .separator {
        display: none;
      }
    }
  </style>

  <div class="navbar navbar2" id="main-navbar">
    <button class="burger-btn" onclick="toggleMenu()">≡</button>

    <div class="left">
    <a href="/accueil">Accueil</a>
      <span class="separator">|</span>
      <a href="/entreprises">Entreprises</a>
      <span class="separator">|</span>
      <a href="/offres"><span style="color: orangered;">Offres</span></a>
      <span class="separator">|</span>
      <a href="/wishlist">WishList</a>
      <span class="separator">|</span>
      <a href="/contact">Contact</a>
    </div>

    <div class="right">
    <a href="/connexion">Connexion</a>
      <span class="separator">|</span>
      <a href="/inscription" class="signup-btn">S’inscrire</a>
    </div>
  </div>


  
 
  <div class="navbar navbar3">
    <div class="breadcrumb">
    <a href="/accueil"><span style="color: blue;">Accueil</span></a> >
    <a href="/offres"><span style="color: blue;">Offres</span></a>>
      <a href="#"><span style="color: blue;">Stages</span></a> >
      <a  href="/connexion">Postuler</a>
    </div>
  </div>

  <script>
  function toggleMenu() {
    const nav = document.getElementById('main-navbar');
    nav.classList.toggle('active');
  }
</script>


  
<!-- </body>
</html> -->
