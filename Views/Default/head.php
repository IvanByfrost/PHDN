<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL . RQ ?>css/style.css">
</head>

<body>
    <header>
        <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand">
                    <img src="<?php echo URL . RQ ?>images/icons/horizontal-logo.svg" alt="logoPrincipal" class="mx-auto w-50 imglogo">SalesSystem
                </a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse"
                    aria-controls="navbar-collapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-sm-inline-flex flex-sm-row-reverse" id="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" title="Manage">Hello!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" title="Manage">LogOut</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Login</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>