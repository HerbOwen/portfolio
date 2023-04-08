<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="scss/navstyle.scss">
    <script src="nav.js" defer></script>


</head>

<body>
    <nav class="disflex aligncen jusconspcaro navbox">
        <div class="navbrand">
            <a href="index.php"><img src="assets/hoban.png" alt="Herb Owenby Logo" class="hologo"></a>
        </div>
        <div class="hamburger">
            <button class="button-one" aria-controls="primary-navigation" aria-expanded="false">
                <svg fill="var(--button-color)" class="hamburger" viewBox="0 0 100 100" width="40">
                    <rect class="line top" width="80" height="10" x="10" y="25" rx="5">
                    </rect>
                    <rect class="line middle" width="80" height="10" x="10" y="45" rx="5">
                    </rect>
                    <rect class="line bottom" width="80" height="10" x="10" y="65" rx="5">
                    </rect>
                </svg>
            </button>
        </div>

        <div class="mt-2">
            <ul class="navbar-nav disflex aligncen">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php">NOTES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php">WEBSITES</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="flxend slimenmain" id="slimermain">
        <ul>
            <li class="bursliite active">
                <a class="nav-link2" href="index.php">Home</a>
            </li>

            <li class="bursliite">
                <a class="nav-link2" href="about.php">About</a>
            </li>

            <li class="bursliite">
                <a class="nav-link2" href="index.php">Notes</a>
            </li>

            <li class="bursliite">
                <a class="nav-link2" href="index.php">Websites</a>
            </li>
        </ul>
    </div>
</body>

</html>