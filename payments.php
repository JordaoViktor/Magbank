<?php include("header.php") ?>

<div class="container mb-5">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="nav flex-column nav-pills mb-5">
                <a href="dashboard.php" class="nav-link">Minha conta</a>
                <a href="payments.php" class="nav-link active">Pagamento</a>
                <a href="statement.php" class="nav-link ">Extrato</a>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <h2 class="mb-4">Extrato de conta corrente</h2>

                <nav class="mt-4 mt-lg-0">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Boleto</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Transferência</a>
                            
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                               <form action="#" class="p-4">
                                    <div class="form-group">
                                        <label for="bar">Código de barras</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Forma de pagamento</label>
                                        <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1" checked>
                                            <label class="form-check-label" for="inlineRadio1">Débito em conta</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                                            <label class="form-check-label" for="inlineRadio2">Cartão de crédito</label>
                                            </div>
                                        </div>
                                    </div>
                                <button class="btn btn-success">Continuar</button>

                               </form>                                 
                            </div>
                            
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <form action="#" class="p-4">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="bar" id="bar">Banco</label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="1">Itaú</option>
                                                        <option value="2">Bradesco</option>
                                                        <option value="3">NuBanck</option>
                                                    </select>                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="agencia">Agência</label>
                                                    <input type="text" class="form-control" id="agencia">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="agencia">Conta</label>
                                                    <input type="text" class="form-control" id="conta">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="agencia">Valor da Transferência</label>
                                                    <input type="text" class="form-control" id="valor">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="agencia">Identificação</label>
                                                    <input type="text" class="form-control" id="identificacao">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <button class="btn btn-success">Continuar</button>

                                </form>                                                          
                            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>