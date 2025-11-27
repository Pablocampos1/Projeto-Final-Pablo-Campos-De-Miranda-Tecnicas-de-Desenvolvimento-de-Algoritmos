<h1>Cadastrar Modelo</h1>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Modelo
            <input type="text" name="nome_modelo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Cor do Modelo
            <input type="text" name="cor_modelo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Tipo do Modelo
            <input type="text" name="tipo_modelo" class="form-control">
        </label>
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>


</form>