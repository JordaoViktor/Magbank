<?php include("head.php") ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><?php include("logo-white.php") ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#cartao">Cartão</a>
                        </li>     
                        <li class="nav-item">
                            <a class="nav-link" href="#quem-somos">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a>
                        </li>
                    </ul>
                    
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Abra sua conta
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalExemplo">Pessoa física</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalExemplo">Pessoa jurídica</a>
                            </div>
                        </div>

                        <a href="login.php" class="btn btn-outline-light">Acessar minha conta</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source media="(min-width: 768px)" srcset="assets/images/banner-desktop.jpg" />
                        <img src="assets/images/banner-mobile.jpg" class="d-block w-100" alt="...">
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(min-width: 768px)" srcset="assets/images/banner-desktop.jpg" />
                        <img src="assets/images/banner-mobile.jpg" class="d-block w-100" alt="...">
                    </picture>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="py-5" id="cartao">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-12 col-md-6">
                    <h2 class="h1 font-weight-light text-primary mb-4">Cartão de crédito</h2>

                    <ul class="list-unstyled row">
                        <li class="col-12 col-lg-6 my-2 d-flex align-items-center">
                            <i class="fas fa-credit-card fa-2x text-danger fa-fw"></i> 
                            <span class="h5 text-muted font-weight-normal mb-0 ml-2">Crédito pessoal</span>
                        </li>
                        <li class="col-12 col-lg-6 my-2 d-flex align-items-center">
                            <i class="fas fa-mobile fa-2x text-danger fa-fw"></i> 
                            <span class="h5 text-muted font-weight-normal mb-0 ml-2">APP</span>
                        </li>
                        <li class="col-12 col-lg-6 my-2 d-flex align-items-center">
                            <i class="fas fa-shopping-cart fa-2x text-danger fa-fw"></i> 
                            <span class="h5 text-muted font-weight-normal mb-0 ml-2">Pagamentos online</span>
                        </li>
                        <li class="col-12 col-lg-6 my-2 d-flex align-items-center">
                            <i class="fas fa-wallet fa-2x text-danger fa-fw"></i> 
                            <span class="h5 text-muted font-weight-normal mb-0 ml-2">Carteira digital</span>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 mt-5 mt-md-0 text-center">
                    <img src="assets/images/credit-card.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card mb-3">
                        <img src="assets/images/card1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card mb-3">
                        <img src="assets/images/card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="assets/images/card3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="btn btn-success btn-lg">Abra sua conta</a>
            </div>
        </div>
    </section>

    <section class="about py-5 text-white" id="quem-somos">
        <div class="container">
            <div class="row justify-content-md-end">
                <div class="col-12 col-md-8 col-lg-7">
                    <h2 class="h1 font-weight-light mb-4">Já nascemos digital</h2>

                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, inventore est pariatur consequatur ea illo ipsum necessitatibus iste quos id error suscipit distinctio reiciendis, facere nobis quas delectus repellendus dignissimos!</p>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus iste provident in nobis laborum unde distinctio consectetur et voluptatibus labore, nam cum excepturi asperiores itaque voluptate commodi deserunt iusto obcaecati!</p>

                    <ul class="list-unstyled my-5">
                        <li class="my-3 d-flex align-items-center">
                            <i class="fas fa-mobile-alt fa-2x fa-fw"></i> 
                            <span class="lead ml-2">Sem fila e sem burocracia</span>
                        </li>
                        <li class="my-3 d-flex align-items-center">
                            <i class="fas fa-mobile fa-2x fa-fw"></i> 
                            <span class="lead ml-2">Simples e prático</span>
                        </li>
                        <li class="my-3 d-flex align-items-center">
                            <i class="fas fa-globe fa-2x fa-fw"></i> 
                            <span class="lead ml-2">Abertura de conta 100% online</span>
                        </li>
                        <li class="my-3 d-flex align-items-center">
                            <i class="fas fa-shield-alt fa-2x fa-fw"></i> 
                            <span class="lead ml-2">Transações mais seguras</span>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-outline-light btn-lg">Abra sua conta</a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq py-5 text-white" id="faq">
        <div class="container">
            <h2 class="h1 font-weight-light mb-5 text-center">Dúvidas frequentes</h2>

            <div class="row align-items-lg-center">
                <div class="col-12 col-lg-5">
                    <ul class="nav nav-pills mb-5 mb-lg-0 justify-content-around flex-lg-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center" data-toggle="pill" href="#pills-card" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="fas fa-credit-card fa-3x fa-fw"></i>
                                <h5 class="font-weight-normal m-0 ml-2 d-none d-lg-block">Cartão de crédito e débito</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <i class="fas fa-wallet fa-3x fa-fw"></i>
                                <h5 class="font-weight-normal m-0 ml-2 d-none d-lg-block">Conta e abertura</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" data-toggle="pill" href="#pills-token" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <i class="fas fa-shield-alt fa-3x fa-fw"></i>
                                <h5 class="font-weight-normal m-0 ml-2 d-none d-lg-block">Token digital</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" data-toggle="pill" href="#pills-products" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <i class="fas fa-user-tie fa-3x fa-fw"></i>
                                <h5 class="font-weight-normal m-0 ml-2 d-none d-lg-block">Produtos e serviços</h5>
                            </a>
                        </li>
                    </ul>
                </div>  

                <div class="col-12 col-lg-7">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-card">
                            <h4 class="text-center mb-4 d-lg-none">Cartão de crédito e débito</h4>

                            <div class="accordion" id="accordionExample">
                                <div class="card bg-transparent">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                <div class="card bg-transparent">
                                    <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                <div class="card bg-transparent">
                                    <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-account">
                            <h4 class="text-center mb-4 d-lg-none">Conta e abertura</h4>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla neque odit iure, qui tempore placeat inventore? Perspiciatis quam impedit fuga officia quisquam, explicabo temporibus. Provident reiciendis totam expedita necessitatibus nobis!</p>
                        </div>
                        <div class="tab-pane fade" id="pills-token">
                            <h4 class="text-center mb-4 d-lg-none">Token digital</h4>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem, laboriosam dolorum quia laborum sint officiis. Consequuntur fugiat, ducimus voluptatem eveniet ipsam tempore, mollitia omnis quo nam ullam, id iure!</p>
                        </div>
                        <div class="tab-pane fade" id="pills-products">
                            <h4 class="text-center mb-4 d-lg-none">Produtos e serviços</h4>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ut incidunt, possimus optio facilis delectus fugit ducimus velit aliquid, iusto tempore nulla quae laudantium qui placeat, quod eius distinctio molestias!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Abra sua conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="nome">Seu nome</label>
                            <input type="text" id="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Seu e-mail</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cidade">Sua cidade</label>
                            <select id="cidade" class="form-control">
                                <option value="1">Florianópolis</option>
                                <option value="2">São José</option>
                                <option value="3">Palhoça</option>
                            </select>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Eu li e concordo com os termos de uso</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Criar conta</button>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>