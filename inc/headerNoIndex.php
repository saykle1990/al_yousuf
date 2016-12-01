<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Document</title>

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="header not-index">
            <svg class="rect" width="100%" height="600" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 -200 1500 600" preserveAspectRatio="xMidYMid meet">
                <rect transform="rotate(-45 100 100)" height="1120" width="1120" fill="white" fill-opacity=".1" stroke="#eee" stroke-width="1" />
            </svg>
            <section class="navigation">
                <div class="row">
                    <nav class="top-navigation-panel">
                        <div class="container">
                            <ul class="top-navigation-list-not-index">
                                <li><a id="topNav-logo" href="?view=home"><img src="img/logo-top.png" alt=""></a></li>
                                <?php if (isset($menu)):?>
                                    <?php foreach ($menu as $item):?>
                                        <li><a href="?view=content&?page=<?=$item['url']?>"><?=$item['name']?></a><span class="sep">/</span></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                                <li class="search animated bounceInUp">
                                    <label for="search-top-no-index"></label>
                                    <input type="text" id="search-top-no-index">
                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
            <div class="parallax-top not-index">

                    <div class="header-content col-sm-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <span id="number" class="col-sm-4 text-right">64</span>
                                    <p class="logo-text col-sm-7">Years<span class="small-letter">
                                            of</span>Trust<span class="small-letter">&</span>Care
                                        <a href="#" class="button-readMore-noColor">read more ...</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <div id="top-parallax-block not-index">
                    <img class="parallax-image layer" data-depth="0.1" src="img/top-parallax.jpg" alt="">
                </div>
            </div>
            <svg class="angle-separator angle-top" id="header-symbol-line" xmlns="http://www.w3.org/2000/svg"
                 version="1.1" width="100%"
                 height="500" preserveAspectRatio="none" style="opacity: 1">
                <line x1="103%" y1="212" x2="0" y2="495" />
            </svg>
            <svg class="angle-separator angle-top" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#fff"
                 width="100%"
                 height="480" viewBox="0 0 4 0.266661" preserveAspectRatio="none" style="">
                <polygon class="fil0" points="7,0 4,0.266661 -0,0.266661 "/>
            </svg>

        </div>
    </div>
</div>