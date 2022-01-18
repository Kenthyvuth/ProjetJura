<?php
require_once "Template/Header.php";
?>


<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <title>Projet Jura</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        img {
            height: 280px;
        }

        body {
            background: hsl(0, 0, 94%);
        }
    </style>
</head>

<body>

    <div class="container-fluid my-5">
        <h1 class="text-center fw-bold display-1 mb-5">Mes <span class="text-danger">Sejour</span></h1>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <img src="https://www.lemoniteur.fr/mediatheque/0/6/3/001989360_620x393_c.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Owl Carousel</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="data:image/jpeg;base64,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" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Owl Carousel</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://static.actu.fr/uploads/2021/09/ehpad.png" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Owl Carousel</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://fayssalmechmeche.github.io/PortFolio/assets/img/pix.jpg.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Owl Carousel</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://fayssalmechmeche.github.io/PortFolio/assets/img/pix.jpg.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Owl Carousel</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="7.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Owl Carousel</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>

</html>


<?php

require_once "Template/Footer.php";
?>

