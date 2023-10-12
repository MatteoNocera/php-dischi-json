<?php

/* Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato. */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark bg-gradient">

    <div id="app">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand navbar-light">
                    <div class="nav navbar-nav">

                        <a class="navbar-brand" href="#">

                            <img src="./assets/img/logo.png" alt="logo" width="30">
                        </a>


                    </div>
                </nav>
            </div>

        </div>


        <div class="container py-5 bg-secondary">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center">
                <div class="col">

                    <div class="card p-3 text-center">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h4>data</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>