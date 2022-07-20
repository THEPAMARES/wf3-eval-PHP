<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=URL?>">Le Bon Appart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=URL?>">Accueil</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/ajouter_une_annonce.php">Ajouter une Annonce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/consulter_toutes_les_annonces.php">Consulter toutes les annonces</a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="erreur">
    <?=$msg?>
</div>