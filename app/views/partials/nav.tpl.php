<body>
    <header>
        <nav>
            <img id="logo" src="../public/assets/images/logo_DoingDone.png">
            <div id="nav-link">
                <a class="nav-link" href="<?= $router->generate('main-home') ?>"><img class="nav-img" src="../public/assets/images/home.png"> Accueil</a>
                <a class="nav-link" href="<?= $router->generate('array-display') ?>"><img class="nav-img" src="../public/assets/images/array.png"> Tableaux</a>
                <a class="nav-link" href="#"><img class="nav-img" src="../public/assets/images/user-shape.png"> Mon compte</a>
            </div>
        </nav>
    </header>