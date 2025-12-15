<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LPTF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://laplateforme.io">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Units</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Skills</a>
                </li>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Accueil</a></li>
                    <li><a class="dropdown-item" href="#">Units</a></li>
                    <li><a class="dropdown-item" href="#">Jobs</a></li>
                    <li><a class="dropdown-item" href="#">Skills</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="hero-section">
    <div class="container">
        <h1 class="hero-title text-center">LaPlateforme_</h1>
        <div class="row">
            <div class="col-lg-3 col-md-3 mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="card" style="width: 12rem;">
                                <img src="./papillon.png" class="card-img-top" alt="papillon">
                                <div class="card-body">
                                    <h5 class="card-title">Un papillon</h5>
                                    <p class="card-text">Un papillon c'est un peu comme un chenille, mais avec des ailes.Ne pas ingere.</p>
                                    <a href="#" class="btn btn-primary" id="buyButterfly">Commander votre propre papillon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 mb-6">
                <div class="col-12">
                    <div class="px-4 py-4 my-4 text-center" id="jumbotron">
                        <h1 class="display-3 fw-bold">Bonjour, monde!</h1>
                        <p class="lead mb-3">Il existe plusieurs visions du monde. Le monde est la, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison. Le sens le plus courant désigne notre planéte, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-primary btn-lg px-4 gap-3" id="rebootWorld">Rebooter le Monde</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 mb-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Limbes</li>
                    <li class="list-group-item">Luxure</li>
                    <li class="list-group-item">Gourmandise</li>
                    <li class="list-group-item">Avarice</li>
                    <li class="list-group-item">Colère</li>
                    <li class="list-group-item">Hérésie</li>
                    <li class="list-group-item">Violence</li>
                    <li class="list-group-item">Ruse et Tromperie</li>
                    <li class="list-group-item">Trahison</li>
                    <li class="list-group-item">Internet Explorer</li>
                </ul>

            </div>
        </div>
        </diùv>

</section>

<!-- Pagination -->
<nav aria-label="Page navigation positioned at bottom center">
    <ul class="pagination justify-content-center my-4">
        <li class="page-item"><a class="page-link" href="#" data-page="1">1</a></li>
        <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
        <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
    </ul>
</nav>

<div class="container text-center">
    <div class="row">
        <div class="col align-self-start">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                </span>
            </div>
        </div>
    </div>
</div>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>