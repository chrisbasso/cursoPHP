<?php
    $descripciones = ["Malla Apple Watch","Tour en bote", "Cedric, stand up show", "paseo en kayak", "cambio de aceite Midas", "Spa con pileta", "Tobogan acuático"];
    $precios = [9.99, 30, 29.75, 79, 22, 21, 29.99];
    $imagenes = ["apple-Watch", "bote", "cedric", "kayaks", "midas", "pileta", "tobogan"];
    $lenArticulos = count($precios);
    $i = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-family: helvetica;
            color: #666;
        }
        #container{
            width: 960px;
            margin: auto;
        }
        .oferta{
            width:349px;
            border: 1px solid #ccc;
            margin: 10px;
            float: left;
        }
            .oferta .precio{
                color: #0a2;
                font-size: 24px;
            }
        .clear{
            clear: both;
            height: 20px;
            border: none;
        }
    </style>
</head>
<body>

        <section id="container">
            <h1>Ofertas</h1>

            <?php  for ($i=0; $i < $lenArticulos; $i++) { 
            ?>

            <article class="oferta">
                <img src="imagenesGroupon/<?php echo $imagenes[$i]; ?>.jpg">
                <h2><?php echo $descripciones[$i]; ?></h2>
                <span class="precio">$ <?php echo $precios[$i]; ?></span>
            </article>

            <?php } ?>

            <hr class="clear">
        </section>

</body>
</html>
