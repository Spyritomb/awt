<?php
$session = \Config\Services::session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= esc($title); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="/assets/css/stylesheet.css" type="text/css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark text-center fadeInDown">

    <div class="container-xxl flex-wrap flex-md-nowrap">
        <a class="navbar-brand" href="/">Advanced Web Technologies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Products </a>
                </li>
            </ul>

            <ul class="navbar-nav  mb-2 mb-lg-0">
                <?php if($session->get('loggedIn')): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/basket">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </a>
                </li>
                <?php endif; ?>

                <?php if(!$session->get('loggedIn')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>

                </li>
                <li>
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <?php else: ?>
                    <a class="nav-link" href="/logout">Logout</a>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>