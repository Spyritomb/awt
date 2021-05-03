<?php

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title><?= esc($title); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="/assets/css/stylesheet.css" type="text/css" rel="stylesheet">


</head>

<body>
    <div class="text-center fadeInDown">
        <main class="form-signin">
            <form method="post" action="/auth/login">
                <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="" name="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Phone Number</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                           placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

            </form>
        </main>
        <div class="text-center pt-5 fadeIn">
            Copyright© 2021 17008762, All rights reserved.
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
</body>

<!--<body class="text-center">-->
<!---->
<!--<main class="edit">-->
<!--    <form>-->
<!--        <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
<!--        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>-->
<!---->
<!--        <div class="form-floating">-->
<!--            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">-->
<!--            <label for="floatingInput">Email address</label>-->
<!--        </div>-->
<!--        <div class="form-floating">-->
<!--            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">-->
<!--            <label for="floatingPassword">Password</label>-->
<!--        </div>-->
<!---->
<!--        <div class="checkbox mb-3">-->
<!--            <label>-->
<!--                <input type="checkbox" value="remember-me"> Remember me-->
<!--            </label>-->
<!--        </div>-->
<!--        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>-->
<!--        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>-->
<!--    </form>-->
<!--</main>-->
<!---->
<!---->
<!---->
<!--</body>-->

</html>