<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herb's Web Dev - Journey Of A Web Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <!--my css-->
    <link rel="stylesheet" href="scss/styles.scss">
    <!--js-->
    <script type="module" src="main.js"></script>
    <!--seo-->
    <meta name="description" content="Becoming a web developer? Herb's Web Dev page follows the journey of a web developer. Follow along through Herb's progression">
    <meta name=”robots” content="index, nofollow">
    <meta property="og:title" content="Herb Owenby Web Dev - Developer blog and resume" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.herbowenby.com" />
    <meta property="og:image" content="../assets/sunpic.png" />
    <meta property="og:description" content="Developer blog and resume showcasing progress on the journey of becoming a web dev" />
    <meta property="og:locale" content="en_US" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/sunpic.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
</head>

<body>

    <?php
    include "nav.php";
    ?>

    <main class="content">

        <!--cards section-->
        <div class="container-onsmall disflex">
            <img src="assets/Daphne4.png" class="dapimg" alt="">
            <div class="disflex flxdirrow gap5">
                <img src="assets/twitter2.png" class="twilog1" alt="twitter logo">
                <a href="https://facebook.com" target="_blank"><img src="assets/fblogo2.png" class="fblog1" alt="fb logo"></a>
                <img src="assets/ebay.png" class="ebalog1" alt="ebay logo">
            </div>
        </div>

        <div class="container-onlarge disflex justcont">
            <img src="assets/Daphne4.png" class="daplrgimg " alt="">
            <div class="mt-catphr disflex flxdircol justcon aligncen">
                <h2 class="pasforfro">PASSION FOR<span class="hd-span"> FRONT-END</span> DEV</h2>
                <h2 class="trainbac">TRAINING IN<span class="hd-span"> BACK-END</span> DEV</h2>
                <h3 class="joumasweb clgray">Journey to Mastering Web</h3>
            </div>
        </div>

        <div class="supermain disflex">

            <div class="supermainthree disflex justcont">
                <div class="biomai disflex aligncen">
                    <div class="biosecmain">
                        <div>
                            <h2>QUICK BIO</h2>
                        </div>
                        <div>
                            <h6>Location</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="supermaintwo  justcont aligncen">

                <div class="mascararea disflex flxdircol">

                    <div class="disflex carare cartexone">
                        <div class="disflex carbac flxdircol">
                            <div class="disflex cartex flxdircol justcont">
                                <div class="justcont aligncen imacen">
                                    <img src="assets/Group 26.png" class="carimg" alt="">
                                </div>
                                <div class="disflex flxdircol justcont aligncen lartxtpad">
                                    <h5 class="carhea">HISTORY</h5>
                                    <p class="carcont">
                                        A desire for creating a website for my business
                                        ignited a passion for web development and a constant
                                        drive for gaining knowledge in the field. Long
                                        time resident of Raleigh, NC. Currently building
                                        pages/sites, learning, repeat.
                                    <p>
                                        <button type="button" class="button-two" id="buttontwo">
                                            See More
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="disflex carare">
                        <div class="disflex carbac flxdircol">

                            <div class="disflex cartex flxdircol justcont">
                                <div class="justcont aligncen imacen">
                                    <img src="assets/Group 27.png" class="carimg" alt="">
                                </div>
                                <div class="disflex flxdircol justcont aligncen lartxtpad">
                                    <h5 class="carhea">LIKES</h5>
                                    <p class="carcont">
                                        My interests and leisure activities demonstrate a well-rounded
                                        individual who values family and relationships,
                                        engages in a variety of activities such as collecting comics,
                                        playing golf, weather and investing. Homebody.
                                        Enjoy spending time with my dog.
                                    <p>
                                        <button type="button" class="button-two" id="buttonthree">
                                            See More
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="disflex carare cartexradtwo">
                        <div class="disflex carbac flxdircol">
                            <div class="disflex cartex flxdircol justcont">
                                <div class="justcont aligncen imacen">
                                    <img src="assets/sunpic.png" class="carimg" alt="">
                                </div>
                                <div class="disflex flxdircol justcont aligncen lartxtpad">
                                    <h5 class="carhea">FUTURE</h5>
                                    <p class="carcont">
                                        I am actively working to improve my front-end skills over the next
                                        year with a specific focus on Javascript and React Native.
                                        My goal is to re-enter the job market with a solid set of front-end
                                        talents and continue learning from more experienced people.
                                    <p>
                                        <button type="button" class="button-two" id="buttontwo">
                                            See More
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </main>

    <footer>
        <?php
        include "footer.php";
        ?>
    </footer>
</body>

</html>