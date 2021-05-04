<?php
$session = Config\Services::session();
$error = $session->getFlashdata('error') ?? '';
helper('form');


?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="/assets/css/stylesheet.css" type="text/css" rel="stylesheet">
</head>

<body class="bg-dark">

<div class="fadeIn ms-5">
    <a class="text-white" href="/">Back to main page</a>
</div>


<div class="container center-screen">
    <div class="formContent fadeInDown">
        <main class="form-signin">
            <form method="post" action="/auth/login">


                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>"/>
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <p>
                    <?= "<div class='text-danger'><p>$error</p></div>"; ?>
                </p>


                <div class="form-floating m-3">
                    <input type="" name="phone" class="form-control" id="floatingInput" placeholder="1234567891">
                    <label for="floatingInput">Phone Number</label>
                    <div id="emailHelp" class="form-text text-start">Please type your phone with out (+44) at the start</div>
                </div>


                <div class="form-floating m-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                           placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-50 btn btn-lg btn-dark" type="submit">Sign in</button>

            </form>
        </main>
        <div class="text-center pt-5 fadeIn">
            Copyright© 2021 17008762, All rights reserved.
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html>