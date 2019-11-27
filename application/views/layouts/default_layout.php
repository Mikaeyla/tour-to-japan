<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf_8">
    <title> Tour to Japan </title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>/public/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/style.scss">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>/public/img/tour-to-japan-logo.png" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/common/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/modalanimate.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- page specific plugin styles -->

    <!-- scripts -->

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Remember to include jQuery :) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/animations.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div id="top-background" class="w-100 m-b-15 p-relative">
                <div class="w-100 p-relative">
                    <div class="bg-img-mask w100 p-absolute"></div>
                </div>

                <h1 id="page-title" class="toptext p-absolute w100 std-align main red" style="z-index:20;">
                    Japan <br>
                    Endless Discovery
                </h1>
            </div>
        </div>

        <div class="main">
            <div class="content w100 std-algn main float">
                <div class="container">
                    <div class="row flex-grid-thirds">
                        <div class="col col-flex">
                            <div class="card card-flex">
                                <div class="card-container">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="city-details">
                                                <div class="card-title">
                                                    <span>
                                                        <i class="fas fa-map-marker-alt"></i> Tokyo
                                                    </span>
                                                </div>

                                                <div class="city-details-flip flip">
                                                    <div class="detail-box">
                                                        <div class="city-bg face front">
                                                            <div class="inner snip1190">
                                                                <img src="<?php echo base_url() ?>/public/img/tokyo/tokyo-card-bg-2.jpg" alt="tokyo-senso-ji-temple">
                                                                <figcaption>
                                                                    <div class="square">
                                                                        <div></div>
                                                                    </div>
                                                                    <h2>Sensōji<span> Temple</span></h2>
                                                                    <p>Buddhist temple in Asakusa</p>
                                                                </figcaption>
                                                            </div>
                                                        </div>

                                                        <div class="city-info face back">
                                                            <span>
                                                                <!-- A paradise-like oasis of green in the heart of busy Tokyo, Ueno
                                                                Park is the city's largest green space and one of its most
                                                                popular tourist attractions.
                                                                Address: 9-83, Ueno Park, Tokyo, Kanto 110-8711 -->
                                                                In the Asakusa district of Tokyo, the exquisite Sensō-ji
                                                                Temple - the city's most famous shrine - stands at the
                                                                end of a long street market hosting vendors selling
                                                                masks, carvings, combs made of ebony and wood, toys,
                                                                kimonos, fabrics, and precious paper goods.
                                                                Address: 2 Chome-3-1 Asakusa, Taito, Tokyo 111-0032
                                                            </span>

                                                            <div id="seeMoreDiv six" class="see-more-container button see-more-btn" data-modal-id="popup">
                                                                <span>
                                                                    See more
                                                                </span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-flex col">
                            <div class="card card-flex">
                                <div class="card-container">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="city-details">
                                                <div class="card-title">
                                                    <span>
                                                        <i class="fas fa-map-marker-alt"></i> Yokohama
                                                    </span>
                                                </div>

                                                <div class="city-details-flip flip">
                                                    <div class="detail-box">
                                                        <div class="city-bg face front">
                                                            <div class="inner snip1190">
                                                                <img src="<?php echo base_url() ?>/public/img/yokohama/yokohama-card-bg-4.jpg" alt="yokohama-city">
                                                                <figcaption>
                                                                    <div class="square">
                                                                        <div></div>
                                                                    </div>
                                                                    <h2>Yokohama Landmark Tower
                                                                    </h2>
                                                                    <p>
                                                                        Minato Mirai at night (the Landmark Tower and
                                                                        Cosmo World Ferris Wheel)
                                                                    </p>
                                                                </figcaption>
                                                            </div>
                                                        </div>

                                                        <div class="city-info face back">
                                                            <span>
                                                                City of Yokohama is known for its history as flourished port
                                                                town, where unique culture is presented. It is considered as a
                                                                city of culture, shopping,
                                                                entertainment, and gourmet.
                                                            </span>

                                                            <div id="seeMoreDiv six" class="see-more-container button see-more-btn">
                                                                <span>
                                                                    See more
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-flex">
                            <div class="card card-flex">
                                <div class="card-container">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="city-details">
                                                <div class="card-title">
                                                    <span>
                                                        <i class="fas fa-map-marker-alt"></i> Kyoto
                                                    </span>
                                                </div>

                                                <div class="city-details-flip flip">
                                                    <div class="detail-box">
                                                        <div class="city-bg face front">
                                                            <div class="inner snip1190">
                                                                <img src="<?php echo base_url() ?>/public/img/kyoto/kyoto-card-bg-2.jpg" alt="kyoto-golden-pavilion">
                                                                <figcaption>
                                                                    <div class="square">
                                                                        <div></div>
                                                                    </div>
                                                                    <h2>Kinkakuji <span>(Golden Pavilion)</span>
                                                                    </h2>
                                                                    <p>Zen Temple in North Kyoto</p>
                                                                </figcaption>
                                                            </div>
                                                        </div>

                                                        <div class="city-info face back">
                                                            <span>
                                                                The Golden Pavilion temple has three stories, and they
                                                                seamlessly incorporate three major Japanese styles of
                                                                architecture:
                                                                Samurai, Zen and Shinden.
                                                            </span>

                                                            <div id="seeMoreDiv six" class="see-more-container button see-more-btn">
                                                                <span>
                                                                    See more
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row flex-grid-thirds">
                        <div class="col col-flex">
                            <div class="card card-flex">
                                <div class="card-container">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="city-details">
                                                <div class="card-title">
                                                    <span>
                                                        <i class="fas fa-map-marker-alt"></i> Osaka
                                                    </span>
                                                </div>

                                                <div class="city-details-flip flip">
                                                    <div class="detail-box">
                                                        <div class="city-bg face front">
                                                            <div class="inner snip1190">
                                                                <img src="<?php echo base_url() ?>/public/img/osaka/osaka-card-bg-1.jpg" alt="osaka-cherry-blossom-tree">
                                                                <figcaption>
                                                                    <div class="square">
                                                                        <div></div>
                                                                    </div>
                                                                    <h2>Osaka Castle Park<span> (Osakajo)</span>
                                                                    </h2>
                                                                    <p>A park with cherry blossom trees that blooms in
                                                                        early April</p>
                                                                </figcaption>
                                                            </div>
                                                        </div>

                                                        <div class="city-info face back">
                                                            <span>
                                                                About 800 cherry trees line the moat of this pretty little
                                                                (reconstructed) castle. It is a popular spot for night viewing
                                                                of the blossoms, which are lit up by around 600 paper lanterns.
                                                            </span>

                                                            <div id="seeMoreDiv six" class="see-more-container button see-more-btn">
                                                                <span>
                                                                    See more
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-flex">
                            <div class="card card-flex">
                                <div class="card-container">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="city-details">
                                                <div class="card-title">
                                                    <span>
                                                        <i class="fas fa-map-marker-alt"></i> Sapporo
                                                    </span>
                                                </div>

                                                <div class="city-detail-flip flip">
                                                    <div class="detail-box">
                                                        <div class="city-bg face front">
                                                            <div class="inner snip1190">
                                                                <img src="<?php echo base_url() ?>/public/img/sapporo/sapporo-card-bg-6.jpg" alt="sapporo jozankei onsen">
                                                                <figcaption>
                                                                    <div class="square">
                                                                        <div></div>
                                                                    </div>
                                                                    <h2>Jozankei Onsen<span> Sapporo</span>
                                                                    </h2>
                                                                    <p>One of the most popular hot spring districts in
                                                                        Hokkaido</p>
                                                                </figcaption>
                                                            </div>
                                                        </div>

                                                        <div class="city-info face back">
                                                            <span>
                                                                “Sapporo’s Annex” — The valley in the hot springs district with
                                                                history and popularity that continues to charm
                                                            </span>

                                                            <div id="seeMoreDiv six" class="see-more-container button see-more-btn">
                                                                <span>
                                                                    See more
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-flex">
                            <div class="card card-flex">
                                <div class="card-container">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="city-details">
                                                <div class="card-title">
                                                    <span>
                                                        <i class="fas fa-map-marker-alt"></i> Nagoya
                                                    </span>
                                                </div>

                                                <div class="city-detail-flip flip">
                                                    <div class="detail-box">
                                                        <div class="city-bg face front">
                                                            <div class="inner snip1190">
                                                                <img src="<?php echo base_url() ?>/public/img/nagoya/nagoya-card-bg-5.jpg" alt="nagoya-tv-tower">
                                                                <figcaption>
                                                                    <div class="square">
                                                                        <div></div>
                                                                    </div>
                                                                    <h2>Nagoya TV Tower
                                                                    </h2>
                                                                    <p>Tower resembling the Eiffel Tower in Paris</p>
                                                                </figcaption>
                                                            </div>
                                                        </div>

                                                        <div class="city-info face back">
                                                            <span>
                                                                Nagoya TV Tower is one of the main landmarks in Nagoya and soars
                                                                to a height of some 180 meters. It also has the claim to fame of
                                                                being the oldest
                                                                of its kind in Japan.
                                                            </span>

                                                            <div id="seeMoreDiv six" class="see-more-container button see-more-btn">
                                                                <span>
                                                                    See more
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal-container">
            <div class="modal-background">
                <div class="modal">
                    <h2>I'm a <a href="https://www.jqueryscript.net/tags.php?/Modal/">Modal</a></h2>
                    <p>Hear me roar.</p>
                    <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                        <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



<!-- place inside content div -->
<!-- Modals --->

<!-- <div id="popup" class="modal-box">
                    <div class="modal-header">
                        <i class="fas fa-times js-modal-close close"></i>

                    </div>
                    <div class="modal-body">
                        <h3>Modal Body</h3>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div> -->