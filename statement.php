<?php include("header.php") ?>

<div class="container mb-5">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="nav flex-column nav-pills mb-5">
                <a href="dashboard.php" class="nav-link">Minha conta</a>
                <a href="payments.php" class="nav-link ">Pagamento</a>
                <a href="statement.php" class="nav-link active">Extrato</a>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <h2 class="mb-4">Pagamentos</h2>

            <div class="table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Descrição</th>    
                            <th class="text-right">Valor (R$)</th>
                            <th class="text-right">Saldo (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>22/07</td>
                            <td>SAQUE 24H - 3166</td>
                            <td class="text-right text-danger"><b>500,00-<b></td>
                            <td class="text-right"><b><b></td>
                        </tr>
                        <tr>
                            <td>22/07</td>
                            <td>SALDO DO DIA</td>
                            <td class="text-right"><b><b></td>
                            <td class="text-right"><b>10.500,00<b></td>
                        </tr>
                        <tr>
                            <td>23/07</td>
                            <td>PAGAMENTO - 3168</td>
                            <td class="text-right text-danger"><b>300,00-<b></td>
                            <td class="text-right"><b><b></td>
                        </tr>
                        <tr>
                            <td>23/07</td>
                            <td>SAQUE 24H - 3169</td>
                            <td class="text-right text-danger"><b>500,00-<b></td>
                            <td class="text-right"><b><b></td>
                        </tr>
                        <tr>
                            <td>23/07</td>
                            <td>DEPOSITO - 3170</td>
                            <td class="text-right text-success"><b>1500,00+<b></td>
                            <td class="text-right"><b><b></td>
                        </tr>
                        <tr>
                            <td>22/07</td>
                            <td>SALDO DO DIA</td>
                            <td class="text-right"><b><b></td>
                            <td class="text-right"><b>11.200,00<b></td>
                        </tr>
                    </tbody>
                </table>                      
            </div> 
        </div>
    </div>
</div>

<?php include("footer.php") ?>