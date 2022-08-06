<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/homepage')?>/assets/deficon.jpg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/homepage')?>/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="background-color:#e0e4e5;">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?= base_url('')?>"><img src="<?= base_url('assets/homepage')?>/assets/logo.png" alt="" style="height: 30px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('')?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/dashboard/about_us') ?>">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><p class="text-center mt-1"><b>SKINCARE</b></p></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/whitening') ?>">Whitening Series</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/luminous') ?>">Luminous Series</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/ultimate') ?>">Ultimate Series</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('/kategori/acne') ?>">Acne Series</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>