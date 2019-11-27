 <!--
     Using Openweather Map API
 -->
<?php
date_default_timezone_set('Asia/Tokyo');
$apiKey = "0464f9af0ec513f24d901e6993346a4b";
$cityIds = array(
    1850147,
    1848354,
    1857910,
    1853909,
    2128295,
    1856057
);
$cityNames = array(
    'Tokyo',
    'Yokohama',
    'Kyoto',
    'Osaka',
    'Sapporo',
    'Nagoya'
);
$countryCode = "JP";

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityIds[0] . "&lang=en&units=metric&APPID=" . $apiKey;
// $googleApiUrl = "http://api.openweathermap.org/data/2.5/forecast/daily?q=" . $cityNames[0] . ", ". $countryCode ."&appId=" . $apiKey;
// $googleApiUrl = "http://api.openweathermap.org/data/2.5/forecast?q=" . $cityNames[0] . ", ". $countryCode . "&lang=en&units=metric&APPID=" . $apiKey;;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<!--
    Using Foursquare API
-->

<?php
//Foursquare Venue Search API Sample
//API Documentation available at https://developer.foursquare.com/docs/venues/search
//Retrieve data sent from your application
//This connects to AngularJS, however depending on your application you ay need to retrieve from $_POST
//Required parameter
//Latitude
//Longitude
//Limit (max is 50 per request)
//Optional param
//Offset - For pagination of results
$foursquare = get_foursquare_data($data);
echo $foursquare;

function get_foursquare_data($data)
{
    $arrayCities = array(
        'Tokyo',
        'Yokohama',
        'Kyoto',
        'Osaka',
        'Sapporo',
        'Nagoya'
    );
    $secret = 'PLW5WN1VV3MZRJ3YDBBQBEHONH1AN0J2HQXQWVQEW1QNPAEU';
    $cid = 'EGRIXVHSNPWUBUWPWNUAYSIX045MHC5MT112Y2YF0JA1AVTT';
    $host = "https://api.foursquare.com/v2/venues/search";
    $ver = '20191128';
    $categoryId= '4deefb944765f83613cdba6e';

    $url = $host . "search?near=" . $arrayCities[0] . ", JP&limit=5&categoryId" . $categoryId . "&client_id=" . $cid . "&client_secret=" . $secret . "&v=" . $ver;
    
    //Final URL Example
    //https://api.foursquare.com/v2/venues/search?ll=37.8141,144.9633&limit=1&offset=1&client_id=FOURSQUARE_CLIENTID&client_secret=FOURSQUARE_SECRET&v=20160510
    
    // initiate curl
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    
    curl_close($ch);
    $data = json_decode($response);
    return $data;
}
?>

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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>/public/img/tour-to-japan-logo.png" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/common/fontawesome-free/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- page specific plugin styles -->

    <!-- scripts -->
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

                <div class="top-heading">
                    <!-- <h1 id="page-title" class="toptext p-absolute w100 std-align main red" style="z-index:20;">
                        Japan: Land of the Rising Sun <br>
                        <span class="subtitle-heading">Endless Discovery</span>
                    </h1> -->
                    <div class="container">
                        <div class="row">
                            <h1 id="page-title" class="toptext p-absolute w100 std-align main-heading red" style="z-index:20;">
                                Japan. Endless Discovery
                            </h1>
                        </div>
                    </div>
                </div>
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

                                                            <div class="see-more-container js-open-modal" id="seeMoreDiv" data-modal-id="popup">
                                                                <span>See more</span>
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

                                                            <div class="see-more-container js-open-modal" id="seeMoreDiv" data-modal-id="popup">
                                                                <span>See more</span>
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

                                                            <div class="see-more-container js-open-modal" id="seeMoreDiv" data-modal-id="popup">
                                                                <span>See more</span>
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

                                                            <div class="see-more-container js-open-modal" id="seeMoreDiv" data-modal-id="popup">
                                                                <span>See more</span>
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

                                                            <div class="see-more-container js-open-modal" id="seeMoreDiv" data-modal-id="popup">
                                                                <span>See more</span>
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

                                                            <div class="see-more-container js-open-modal" id="seeMoreDiv" data-modal-id="popup">
                                                                <span>See more</span>
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
        <div id="popup" class="modal-box">
            <div class="modal-header">
                <span>
                    <img src="<?php echo base_url() ?>/public/img/tour-tips.png" alt="tour-tips-icon" width="40" height="40">
                    <span style="font-size: 24px;">
                        Tour Tips
                    </span>
                </span>
                <i class="fas fa-times js-modal-close close"></i>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="caption-modal-heading">
                                <span>
                                    <?php echo $data->name; ?> Weather Status
                                </span>
                            </div>
                            <div class="weather-forecast">
                                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <span>
                                    <?php echo ucwords($data->weather[0]->description); ?>
                                </span>
                                <br>
                                <span>
                                    Temperature: <?php echo $data->main->temp; ?>°C<br>
                                </span>
                                <?php echo $data->main->temp_max; ?>°C<span class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>

                            </div>
                            <div class="time">
                                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                                <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                            </div>
                            <div class="time">
                                <div><?php echo date("l g:i a", $currentTime); ?></div>
                                <div><?php echo date("jS F, Y", $currentTime); ?></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="place-info">
                                <h4>
                                    Places to Visit
                                </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</body>

</html>