<!DOCTYPE html>
<html>
<head>
    <title>Painel CMS</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<section class="general">
<div>
<header class="hide aside-menu">
    <div class="header">
        <div class="head-menu">
            <h2>Do it.</h2>
            <nav>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>"><i data-feather="home"></i> Dashboard</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#templates"><i data-feather="archive"></i> Templates</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>criar-template"><i data-feather="crop"></i> Criar Template</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>criar-menu"><i data-feather="database"></i> Menus</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#config"><i data-feather="cpu"></i> Config</a></li>
                </ul>
            </nav>
        </div><!--head-menu-->
        <div class="box">
            <h6>Upgrade to Premium <br />to get all features!</h6>
            <button>Get Started</button>
            <img src="" />
        </div><!--box-->
        <div class="flut">
            <span><i data-feather="log-out"></i> Logout</span>
        </div><!--flut-->
    </div><!--header-->
</header>
</div>
<div>
<header class="header-mobile">
    <div class="menu">
        <a class="menuAside"><i data-feather="menu"></i></a>
    </div>
    <div class="home-menu">
        <a href=""><i data-feather="home"></i></a>
    </div>
</header><!--header-mobile-->