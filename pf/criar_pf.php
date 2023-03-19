
<?php

?>
<form action="?page=listar_pf" method="POST" class="d-flex justify-content-center">
    
    <div>
        <h1>Gerar Pessoa Física</h1>
        <div class="row" style>
            <div class="col-6">
                <label for="id">ID</label>
                <input type="number" name="id" class="form-control  mb-3" required>
                
            </div>


        </div>

        <div class="row div_responsive">
            <div class="col-auto">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control  mb-3">
                
            </div>

            <div class="col-auto">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control mb-3">
            </div>

        </div>

        <div class="row div_responsive">
            <div class="col-auto">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control  mb-3 ">
            </div>
            <div class="col-auto">
                <label for="data">Data de Nascimento</label>
                <input type="date" name="data" class="form-control mb-3">
            </div>
        </div>

        
        <div class="row">
            <div class="col-12">
                
                <button type="submit" method="POST" class="btn btn-primary btn-lg btn-block mb-3">Gerar</button>
            </div>
        </div>
    </div>
    
</form>