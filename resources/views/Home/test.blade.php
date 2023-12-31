<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <script>
        if (CSS.supports('scroll-snap-align: start')) {
            alert("native");
        } else {
            alert("polyfill");
            scrollSnapPolyfill();
        }
    </script>
</head>

<body>
    <div class="wrapper wrapper-light">
        <div class="scrollable-container">
            <div class="scrollable-cards">

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1522503864/ngpb7rercmaftyoanant.jpg">
                        <div class="tag tag-primary card-tag">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.32595 11.2559L5.56198 10.556C2.84698 8.094 1.05398 6.47002 1.05398 4.47702C1.0501 4.0951 1.12245 3.71623 1.26681 3.36264C1.41118 3.00904 1.62467 2.68776 1.89474 2.41769C2.16481 2.14762 2.48603 1.93425 2.83963 1.78988C3.19322 1.64552 3.57209 1.57311 3.95401 1.57699C4.40501 1.58027 4.85002 1.68009 5.25918 1.86984C5.66834 2.05958 6.0321 2.33482 6.32595 2.67697C6.61981 2.33482 6.98357 2.05958 7.39273 1.86984C7.80189 1.68009 8.24696 1.58027 8.69796 1.57699C9.07984 1.57325 9.45863 1.64571 9.81216 1.79013C10.1657 1.93454 10.4869 2.14802 10.7569 2.41806C11.027 2.68809 11.2404 3.00922 11.3849 3.36276C11.5293 3.71629 11.6017 4.09514 11.598 4.47702C11.598 6.47002 9.80599 8.094 7.08999 10.561L6.32595 11.2559Z"
                                    fill="#1A1A1A" />
                            </svg>
                            Praticien de la semaine
                        </div>

                        <div class="card-specialties">
                            ART-THÉRAPIE
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Réflexologie de confort & Expression par le rythme
                        </h3>
                        <div class="card-name">
                            Alice Larrabure
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"></polygon>
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            7 commentaires
                        </div>
                    </div>
                </div>

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1522748419/lz9awyiyhu3art6p8xsg.jpg">

                        <div class="card-specialties">
                            Access Bars® <br>
                            NATUROPATHIE <br>
                            NUTRITION <br>
                            PLANTES & HUILES ESSENTIELLES
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Réflexologie de confort
                        </h3>
                        <div class="card-name">
                            Farah Benwahoud
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            20 commentaires
                        </div>
                    </div>
                </div>

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1542202459/ilncu71pfjlq2ilei7gl.jpg">
                        <div class="card-specialties">
                            EMDR <br>
                            PSYCHO-ÉNERGÉTIQUE <br>
                            RESPIRATION HOLOTROPIQUE
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Fenêtre sur soi et créativité : Champ d'argile®, Soulcollage®
                        </h3>
                        <div class="card-name">
                            Solange Lemoine
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            45 commentaires
                        </div>
                    </div>
                </div>

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1542904330/uycx26c5rajzsynaapzf.jpg">

                        <div class="card-specialties">
                            YOGA <br>
                            YOGA DE L'ÉNERGIE <br>
                            RUNNING <br>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Running Yoga
                        </h3>
                        <div class="card-name">
                            Philippe Carralou
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            12 commentaires
                        </div>
                    </div>
                </div>

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1522503864/ngpb7rercmaftyoanant.jpg">
                        <div class="card-specialties">
                            ART-THÉRAPIE
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Réflexologie de confort & Expression par le rythme
                        </h3>
                        <div class="card-name">
                            Alice Larrabure
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            7 commentaires
                        </div>
                    </div>
                </div>

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1522748419/lz9awyiyhu3art6p8xsg.jpg">

                        <div class="card-specialties">
                            Access Bars® <br>
                            NATUROPATHIE <br>
                            NUTRITION <br>
                            PLANTES & HUILES ESSENTIELLES
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Réflexologie de confort
                        </h3>
                        <div class="card-name">
                            Farah Benwahoud
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            20 commentaires
                        </div>
                    </div>
                </div>

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1542202459/ilncu71pfjlq2ilei7gl.jpg">
                        <div class="card-specialties">
                            EMDR <br>
                            PSYCHO-ÉNERGÉTIQUE <br>
                            RESPIRATION HOLOTROPIQUE
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Fenêtre sur soi et créativité : Champ d'argile®, Soulcollage®
                        </h3>
                        <div class="card-name">
                            Solange Lemoine
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            45 commentaires
                        </div>
                    </div>
                </div>

                <div class="card-h">
                    <div class="card-thumbnail">
                        <img
                            src="https://res.cloudinary.com/hammv7x3f/image/upload/c_fill,g_face,h_320,w_320/v1542904330/uycx26c5rajzsynaapzf.jpg">

                        <div class="card-specialties">
                            YOGA <br>
                            YOGA DE L'ÉNERGIE <br>
                            RUNNING <br>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Running Yoga
                        </h3>
                        <div class="card-name">
                            Philippe Carralou
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="card-rating">
                            <div class="stars">
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                                <svg width="10px" viewBox="0 0 20 20" fill="#FFD100">
                                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78">
                                </svg>
                            </div>
                            12 commentaires
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
