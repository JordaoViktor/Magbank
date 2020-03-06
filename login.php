<?php include("head.php") ?>

<section class="login d-flex align-items-center text-center text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <?php include("logo-white.php") ?>

                <form action="dashboard.php" method="POST" class="mt-5">
                    <div class="form-group">
                        <label for="account">Número da conta</label>
                        <input type="number" id="account" class="form-control text-center">
                    </div>
                    <div class="form-group">
                        <label for="pass">Senha</label>
                        <input type="password" id="pass" class="form-control text-center">
                    </div>
                    <button class="btn btn-success">Criar conta</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include("scripts.php") ?>