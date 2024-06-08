<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formCadastrarProfissional.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastro de Profissional de Serviços Domésticos</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Cadastro de Profissional</h1>
                    </div>
                    <div class="card-body">
                        <form action="../controller/cadastrarProfissionalController.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nome">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" required>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" required>
                            </div>
                            <div class="form-group">
                                <label for="servico">Tipo de Serviço</label>
                                <select class="form-control" id="servico" name="servico" required>
                                    <option value="limpeza">Limpeza</option>
                                    <option value="cozinha">Cozinha</option>
                                    <option value="lavanderia">Lavanderia</option>
                                    <option value="babá">Babá</option>
                                    <option value="jardinagem">Jardinagem</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição dos Serviços</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="curriculo">Anexar Currículo</label>
                                <input type="file" class="form-control-file" id="curriculo" name="curriculo" accept=".pdf,.doc,.docx">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>