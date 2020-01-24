<?php
    $email = $_GET["email"];
    $password = $_GET["password"];
    $name = $_GET["name"];
    $sobrenome = $_GET["sobrenome"];
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Dados</title>
        <meta charset="UTF-8"
    </head>
    <body background="https://www.10wallpaper.com/wallpaper/1680x1050/1208/Aesthetic_Dream_Space_HD_Desktop_wallpaper_13_1680x1050.jpg">           
        <header class="menu-principal">
            <main>
                <div class="header-1">
                    <div class="escrita">
                                <a href="">
                                    <font color="white"><h1>Recebendo dados</h1></font>
                                </a>
                                <a href="">
                                    <p>
                                        <font color="red">Name: <?php echo $name; ?></font>
                                    </p>
                                </a>
                                <a href="">
                                    <p>
                                        <font color="pink">Sobrenome: <?php echo $sobrenome; ?></font>
                                    </p>
                                </a>
                                <a href="">
                                    <p>
                                        <font color="green">Email: <?php echo $email; ?></font>
                                    </p>
                                </a>
                                <a href="">
                                    <p>
                                     <font color="blue">Senha: <?php echo $password; ?></font>
                                    </p>
                                </a>
                                <h2>Vamos para o Censipam</h2>
                                <h3><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/0x0wYg66Q9A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></h3>
                                <h4><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.798995962869!2d-47.94018497804098!3d-15.81454924821052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a303fd4572f85%3A0x83cc0256d3844626!2sCENSIPAM!5e0!3m2!1spt-BR!2sbr!4v1579283167273!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:20;" allowfullscreen=""></iframe></h4>
                    </div>
                </div>
            </main>
        </header>
    </body>
</html>