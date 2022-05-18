<?php 
require('./includes/pdo.php');
require('./includes/requests_homegpe.php');
?>

<section class="header-gpe">
        <section class="banner-gpe">
            <div class="banner-image-gpe" style="background-image:url(./assets/<?=$groups[0]["idgroups"]?>-group.jpg)"></div>     
        </section>

        <nav class="navbar navbar-expand-xl navbar-light">
        <div class="container">
            <section class="group-profil">
                <div class="image-circle">
                    <img src="assets/<?= $groups[0]["idgroups"]?>-logo.svg" class="rounded-circle" alt="group logo">
                </div>
            </section>
            <a class="navbar-brand" href="#"> <?= $groups[0]["name"] ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">  
                    <a class="nav-link nav-link-gpe" href="./group_presentation.php">A propos</a>
                    <a class="nav-link nav-link-gpe" href="./group.php">Sujets</a>
                    <a class="nav-link nav-link-gpe" href="./group_invitation.php">Invitez vos amis</a>
                    <a class="nav-link nav-link-gpe" href="./group_members.php?id_gpe=<?= $groups[0]["idgroups"]?>">Membres du groupe</a>
                    <a class="nav-link nav-link-gpe" href="./group_quit.php?id_gpe=<?= $groups[0]["idgroups"]?>&idUserFromGpe=0">Nous quitter</a>
                </div>
            </div>
        </div>
    </nav>
</section>

   