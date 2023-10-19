<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/ProjetoForms/stylesheets/style.css">

    <script src="/ProjetoForms/javascript/login.js"></script>

    <?php
        //inicializa sessão do usuário
        session_start(); 
    ?>

</head>
<body id="bd1">
    <header>
        <nav class="navbar navbar-expand-lg border" id="navb">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">Projeto Forms</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/tomazgabriel">Github</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container m-0">

    </main>
    <footer>
        <a class="navbar fixed-bottom text-decoration-none text-light form-control" href="https://github.com/tomazgabriel"><i>Github - Gabriel Tomaz - 2023</i></a>
    </footer>
</body>
</html>