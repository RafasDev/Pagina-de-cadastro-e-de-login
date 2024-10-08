<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="   css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>documento</title>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbarCustomizacao">
            <div class="container-fluid">
                <a class="navbar-brand palavraHeader" href="index.php">Clean Connect</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active palavraHeader" aria-current="page" href="view/Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link palavraHeader" href="view/Serviços.html">Serviços</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle palavraHeader" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                alguma coisa
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item palavraHeader" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"
                            style="background-color: rgb(1, 1, 160); color: white; border: none;">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>Bem-vindo à Clean Connect!</h1>
        <p>Oferecemos uma variedade de serviços domésticos para atender às suas necessidades.</p>

        <h2>Limpeza Geral</h2>
        <img src="caminho_para_sua_imagem" alt="Imagem do serviço de Limpeza Geral">
        <p>Nossos profissionais de limpeza irão cuidar de todas as suas necessidades de limpeza doméstica, deixando sua
            casa brilhando.</p>

        <h2>Limpeza Profunda</h2>
        <img src="caminho_para_sua_imagem" alt="Imagem do serviço de Limpeza Profunda">
        <p>Este serviço é perfeito para a primavera ou para uma limpeza profunda ocasional. Inclui tudo na limpeza geral
            e mais.</p>



    </main>
    <footer class="card">
        <div class="card-footer">
            esse aqui vai ser o footer, mas não faço a minima ideia do que vai ter
        </div>
    </footer>
</body>