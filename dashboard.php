<?php include("header.php") ?>

<div class="container mb-5">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="nav flex-column nav-pills mb-5">
                <a href="dashboard.php" class="nav-link active">Minha conta</a>
                <a href="payments.php" class="nav-link ">Pagamento</a>
                <a href="statement.php" class="nav-link ">Extrato</a>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <h2 class="mb-4">Conta corrente</h2>

            <div class="row">
                <div class="col-12 col-lg-3">
                    <h6 class="m-0">Saldo em conta corrente</h6>
                    <p class="lead text-success"><small>R$</small>11.500 <small>,00</small></p>

                    <h6 class="m-0">Cheque especial</h6>
                    <p>Limite de crédito<br>
                        R$ 5.000,00
                    </p>
                </div>
                
                <div class="col-12 col-lg-9">
                    <nav class="mt-4 mt-lg-0">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lançamentos</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lançamentos futuros</a>
                            
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Descrição</th>    
                                            <th class="text-right">Valor (R$)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>22/07</td>
                                            <td>SAQUE 24H - 3166</td>
                                            <td class="text-right"><b>500,00<b></td>
                                        </tr>
                                        <tr>
                                            <td>23/07</td>
                                            <td>RECEBIMENTO 3167</td>
                                            <td class="text-right"><b>2500,00<b></td>
                                        </tr>
                                        <tr>
                                            <td>22/07</td>
                                            <td>PAGAMENTO - 3168</td>
                                            <td class="text-right"><b>300,00<b></td>
                                        </tr>
                                        <tr>
                                            <td>22/07</td>
                                            <td>SAQUE 24H - 3169</td>
                                            <td class="text-right"><b>500,00<b></td>
                                        </tr>
                                    </tbody>

                                </table>

                                
                            </div>
                            
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Descrição</th>    
                                            <th class="text-right">Valor (R$)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>22/08</td>
                                            <td>PAGAMENTO</td>
                                            <td class="text-right"><b>90,00<b></td>
                                        </tr>
                                        <tr>
                                            <td>22/08</td>
                                            <td>PAGAMENTO - CELESC</td>
                                            <td class="text-right"><b>200,00<b></td>
                                        </tr>
                                        <tr>
                                            <td>22/07</td>
                                            <td>PAGAMENTO - 3168</td>
                                            <td class="text-right"><b>300,00<b></td>
                                        </tr>
                                        <tr>
                                            <td>22/07</td>
                                            <td>SAQUE 24H - 3169</td>
                                            <td class="text-right"><b>500,00<b></td>
                                        </tr>
                                    </tbody>

                                </table>   

                            </div>
                            
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>