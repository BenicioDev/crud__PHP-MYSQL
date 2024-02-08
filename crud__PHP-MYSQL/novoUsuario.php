<h1 class="d-flex justify-content-center m-3">Cadastro - Novo usuário</h1>

<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="d-flex flex-column align-items-center">
    
    <div class="mb-3 col-sm-5">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Seu nome">
    </div>

    <div class="mb-3 col-sm-5">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="Seu email">
    </div>

    <div class="mb-3 col-sm-5">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control" placeholder="Seu telefone">
    </div>

    <div class="mb-3 col-sm-5">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Crie uma senha">
    </div>

    <div class="mb-3 col-sm-5">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

</div>
    
    <div class="d-flex flex-row justify-content-center p-2">
        <button type="submit" class="btn btn-success me-2"> Enviar </button>
        <button type="submit" class="btn btn-primary me-2" formaction="?page=listar"> Ver Lista </button>
        <button type="submit" class="btn btn-danger" formaction="index.php"> Cancelar </button>
    </div>
    
    
</form>