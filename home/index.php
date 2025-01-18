<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Acernix</title>
    <link href="https://acernix.lol/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2"></script>
    <style>
        html {
            min-height: 100%;
        }
        body {
            height: 100vh;
        }
    </style>
</head>

<body class="d-flex flex-column">
<header class="p-0 mb-3 navbar navbar-expand-lg sticky-top d-flex flex-column">
    <div class="px-2 py-1 bg-primary w-100">
        <div class="container">
            <div class="d-flex flex-row align-items-center">
                <a href="https://acernix.lol/" class="nav-link link-body-emphasis fw-semibold d-lg-none my-0 mt-1 d-flex align-items-center text-decoration-none">
                    <img src="https://acernix.lol/siteAssets/logo.png" alt="Acernix" height="26">
                </a>
                <button class="navbar-toggler p-1 align-self-baseline ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbartop" aria-controls="navbartop" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse flex-1" id="navbartop">
                <div class="d-flex flex-wrap flex-1 align-items-center">
                    <ul class="nav d-flex flex-lg-row flex-column flex-lg-1 flex-none flex-wrap mt-1">
                        <li class="d-lg-inline d-none">
                            <a href="https://acernix.lol/" class="nav-link px-2 link-body-emphasis fw-semibold d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none me-2">
                                <img src="https://acernix.lol/siteAssets/logo.png" alt="Acernix" height="26">
                            </a>
                        </li>
                        <li><a href="https://acernix.lol/users" class="nav-link ps-0 link-body-emphasis fw-semibold">Users</a></li>
                        <li><a href="https://discord.gg/XkMUz3Csj4" class="nav-link ps-0 link-body-emphasis fw-semibold">Discord</a></li>
                    </ul>
                    <form class="btn-group col-xxl-4 col-lg-auto col-12 d-inline-flex flex-row me-auto align-items-center order-lg-0 order-last" role="search">
                        <input type="search" class="form-control rounded-0 rounded-start border-end-0" placeholder="Search" aria-label="Search">
                        <button type="button" class="btn btn-dark bg-black border-start-0 me"><span class="bi bi-search"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mb-3 mt-1">
    <div class="alert alert-warning" role="alert">
        This site is <b>unfinished!</b> Join the <a href="https://discord.gg/XkMUz3Csj4">discord</a> for more information. Registrations now open for alpha!
    </div>

    <div class="d-flex flex-row gap-3 mx-auto flex-wrap">
        <div class="card mx-auto flex-grow-1" style="flex-basis: 20em;">
            <div class="card-body">
                <form method="post" action="https://acernix.lol/login">
                    <span>Log into Acernix</span>
                    <div class="mx-auto mb-4 mt-1" style="max-width: 275px;">
                        <img class="mt-1 img-fluid" src="https://acernix.lol/images/logo.png" alt="">
                    </div>
                    <input type="text" class="form-control my-1" id="usr" name="usr" placeholder="Username (ex: acernix123)">
                    <input type="password" class="form-control my-1" id="pwd" name="pwd" placeholder="Password">
                    <button class="btn btn-primary w-100 mt-2 py-2" type="submit">Login</button>
                    <a href="https://acernix.lol/register" class="btn btn-primary w-100 mt-2 py-2" type="submit">Register</a>
                </form>
            </div>
        </div>

        <div class="card flex-grow-10 align-self-baseline">
            <div class="card-body">
                <h3>Did you know...</h3>
                <div class="text-muted" hx-get="/facts" hx-trigger="load delay:1s" hx-target="#fact">
                    <div id="fact"><span class="spinner-border text-primary"></span></div>
                </div>
            </div>

            <div class="card-body">
                <h3>News</h3>
                <div class="text-muted" hx-get="/news" hx-trigger="load delay:2s" hx-target="#news">
                    <div id="news"><span class="spinner-border text-primary"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-tertiary mt-auto">
        <div class="container py-2 mb-2 d-flex flex-row gap-4 align-items-center">
            <div class="flex-column pt-2 pb-lg-4 pb-0 d-md-flex d-none" style="max-width: 175px;">
                <img class="img-fluid" src="https://acernix.lol/images/logo.png" style="filter: grayscale(1);" alt="Acernix">
                <small class="text-muted fw-semibold">&copy;2024 Acernix</small>
            </div>

            <div class="flex-column mx-lg-0 mx-auto d-md-none d-flex align-items-center">
                <img class="img-fluid" src="https://acernix.lol/images/logo-small.png" style="filter: grayscale(1);" width="40" alt="Acernix">
                <small class="text-muted fw-semibold">&copy;2024</small>
            </div>

            <div class="d-flex flex-column flex-1 gap-1">
                <div class="d-flex flex-row gap-3 justify-content-center my-1" style="font-size: 1.125em;">
                    <a href="https://acernix.lol/legal/tos" class="text-muted text-decoration-none">Terms of Service</a>
                    <a href="https://acernix.lol/legal/privacy" class="text-muted text-decoration-none">Privacy</a>
                    <a href="https://acernix.lol/discord" class="text-muted text-decoration-none">Discord</a>
                </div>
                <hr class="m-0 p-0 mt-1">
                <small class="text-muted">Acernix is not affiliated with any other corporation. All trademarks and logos mentioned are the property of their respective owners.</small>
            </div>
        </div>
    </div>
</div>

<script>cssVars({include: '[css-include]', onlyLegacy: true});</script>
</body>
</html>
