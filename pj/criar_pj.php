

<form action="?page=listar_pj" method="POST" class="d-flex justify-content-center">
    <div>
        <h1>Gerar Pessoa Jurídica</h1>
        <div class="row">
            <div class="col-6">
                <label for="id">ID</label>
                <input type="number" name="id" class="form-control mb-3">
                
            </div>


        </div>

        <div class="row div_responsive">
            <div class="col-auto">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control mb-3">
                
            </div>

            <div class="col-auto">
                <label for="sobrenome">Nome Fantasia</label>
                <input type="text" name="nome_fantasia" class="form-control mb-3">
            </div>

        </div>

        <div class="row">
            <div class="col-6">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" class="form-control mb-3">
            </div>
        </div>

        
        <div class="row">
            <div class="col-12">
                
                <button type="submit" method="POST" class="btn btn-primary btn-lg btn-block mb-3">Gerar</button>
            </div>
        </div>

    </div>
    
    
    
    
    

</form>