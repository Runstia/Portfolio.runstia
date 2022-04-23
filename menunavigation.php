<!DOCTYPE html>
<html lang="fr" class="theme-dark">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/base.css">
</head>
<body>



<!-- Menu de Navigation -->
<nav class="Menu-Nav">
    <ul class="Menu-Nav-ul">
        <h1 class="titre"><!-- Get the actual page title -->
            <script language="javascript">
            var titre = document.title;
            document.write(titre);
            </script><div style="text-align: right;margin-top: -2%"><?php include '../addon/switch.html'?></div>
        </h1>

        <li class="Menu-Principal"><a class="menu-a" href="../Pages/Accueil.php">Accueil</a></li>
        <li class="Menu-Principal Menu-Principal-deroulant"><a class="menu-a" href="../Pages/Projets.php">Projets</a>
            <ul class="Sous-Menu">
                <li><div class="menu-c"><a class="menu-b" href= "../Pages/Projets.php#jump_Projet_1">Bayouu             <a href= "https://runstia.itch.io/bayouu-adventure"><img style="width: 7%" src="../img/itch-io_logo"></a></a></div></li>
                <li><div class="menu-c"><a class="menu-b" href= "../Pages/Projets.php#jump_Projet_2">Rainy Date         <a href= "https://runstia.itch.io/rainy-date">      <img style="width: 7%" src="../img/itch-io_logo"></a></a></div></li>
                <li><div class="menu-c"><a class="menu-b" href= "../Pages/Projets.php#jump_Projet_3">Keep YOUR Snow !   <a href= "https://runstia.itch.io/keep-your-snow">  <img style="width: 7%" src="../img/itch-io_logo"></a></a></div></li>
            </ul>
        </li>
        <li class="Menu-Principal"><a class="menu-a" href="../Pages/CV.php">CV</a></li>
        <li class="Menu-Principal"><a class="menu-a" href="../Pages/Contact.php">Contact</a></li>
    </ul>
</nav>  
</body>
</html>