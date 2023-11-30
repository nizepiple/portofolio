<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar-nav {
            margin-left: 900px;
        }

        .navbar-brand {
            margin-left: 100px;
        }
    </style>
    <title>Portofolio!</title>
</head>

<body">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #D36953;">
        <a class="navbar-brand" href="#">
            <i class="fas fa-rainbow"> Portofolio</i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbroton -->
    <div class="jumbotron text-center" id="home">
        <img src="../img/rapunzel2.jpg" width="200" height="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Nizepiple</h1>
        <p class="lead">Student | Atlate | Hooman </p>

    </div>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row  mb-4 justify-content-center">
                <h2>About Me</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor excepturi incidunt voluptates fuga repudiandae nisi optio inventore, aspernatur vero assumenda doloribus libero officiis, ipsa iusto nam facilis odit molestias? Dicta!</p>
                </div>
                <div class="col-md-5">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor excepturi incidunt voluptates fuga repudiandae nisi optio inventore, aspernatur vero assumenda doloribus libero officiis, ipsa iusto nam facilis odit molestias? Dicta!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- project -->
    <section id="project" style="background-color: #E9ECEF;">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <h2>My Project</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 pb-3">
                    <div class="card">
                        <img src="../img/project/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-3">
                    <div class="card">
                        <img src="../img/project/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-3">
                    <div class="card">
                        <img src="../img/project/4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="content">
        <div class="container">
            <div class="col text-center">
                <h2>Content Me</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Adress">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer style="background-color: #E9ECEF;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <button type="button" class="btn btn-primary" btn-floating mx-2 style="background-color: #9A514B;">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" class="btn btn-primary" btn-floating mx-2 style="background-color: #9A514B;">
                        <i class="fab fa-youtube"></i>
                    </button>
                    <button type="button" class="btn btn-primary" btn-floating mx-2 style="background-color: #9A514B;">
                        <i class="fab fa-instagram"></i>
                    </button>
                    <button type="button" class="btn btn-primary" btn-floating mx-2 style="background-color: #9A514B;">
                        <i class="fab fa-twitter"></i>
                    </button>
                </div>
                <div class="col-md-4">
                    <h6 class="text-uppercase fw-bold">
                        <i class="far fa-gem"></i>company name
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum totam explicabo quia nam vitae eum!</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- copyright -->
    <div class="text-center text-white p-3" style="background-color: #D36953;">
        @ 2023 copyright:
        <a class="text-white" href="#">Nizepiple</a>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    </body>

</html>