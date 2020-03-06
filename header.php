<?php include("head.php") ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><?php include("logo-white.php") ?></a>

            <form action="#" class="d-none d-md-flex align-items-center mr-auto ml-4 w-50">
                <input type="text" class="form-control" placeholder="O que você procura?">
                <button class="bg-transparent border-0 text-white"><i class="fas fa-search fa-lg ml-2"></i></button>
            </form>

            <a href="index.php" class="btn btn-outline-light">Sair</a>
        </div>
    </nav>
</header>

<div class="container">
    <form action="#" class="d-md-none d-flex align-items-center my-3">
        <input type="text" class="form-control" placeholder="O que você procura?">
        <button class="bg-transparent border-0 text-primary"><i class="fas fa-search fa-lg ml-2"></i></button>
    </form>

    <div class="d-flex align-items-center my-3">
        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 65px; height: 65px;">
            <i class="fas fa-user fa-2x text-black-50"></i>
        </div>
        <div class="ml-2">
            <h5 class="m-0">Renato Zimmer</h5>
            <small class="text-muted">ag: 1234 c/c: 3214-6</small>

        </div>
    </div>
</div>