<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
        
</head>

<body>
    <div class="container projeto-mt-5 ">

        <!-- todos devem criar conta no github e attlassian, depois clonar repositorio(TEM QUE SER COLABORADOR)  -->

        <body class="text-center">
            <form class="form-signin method=POST">
                <div class="row justify-content-center">
                </div>
                <div class="row justify-content-center mt-3  ">
                    <div class=" col-xs-1 col-sm-3 col-md-3 col-lg-1 "></div>
                    <div class="col-xs-3 col-sm-9 col-md-8 col-lg-5">

                        <div class="card border-info bg-primary mb-5">
                            <div class="card-body projeto-text-color-primary">

                                <h1>AudWeb</h1>
                                <p>Audiencias Online</p>
                            </div>
                        </div>
                        <h1 class="h3 mb-3 font-weight-normal">Cadastro</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class=" col-xs-1 col-sm-3 col-md-3 col-lg-4"></div>
                    <div class=" col-xs-3 col-sm-9 col-md-8 col-lg-7 text-center">
                        <p class="text-left">
                            <strong>Instituição de Ensino:</strong>
                        </p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row justify-content-center">
                    <div class=" col-xs-1 col-sm-3 col-md-3 col-lg-1"></div>

                    <div class="col-xs-3 col-sm-9 col-md-8 col-lg-5">
                        <label class="sr-only"></label>
                        <input class="form-control" placeholder="Insira a Instituição" required autofocus name="User_nome">
                    </div>
                </div>




                <div class="row justify-content-center mt-4">
                    <div class=" col-xs-1 col-sm-3 col-md-3 col-lg-4"></div>
                    <div class=" col-xs-3 col-sm-9 col-md-8 col-lg-7 text-center">
                        <p class="text-left">
                            <strong>Profissão:</strong>
                        </p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row justify-content-center">
                    <div class=" col-xs-1 col-sm-3 col-md-3 col-lg-1"></div>

                    <div class="col-xs-3 col-sm-9 col-md-8 col-lg-5">
                        <label class="sr-only"></label>

                        <select id="inputState" class="form-control">
                             <option selected>Selecione...</option>
                            <option>Estudante </option>
                            <option>Outros</option>
                        </select>

                    </div>
                </div>


                <div class="row justify-content-center mt-4">
                    <div class=" col-xs-1 col-sm-3 col-md-3 col-lg-4"></div>
                    <div class=" col-xs-3 col-sm-9 col-md-8 col-lg-7 text-center">
                        <p class="text-left">
                            <strong>Ano do curso que está no momento:</strong>
                        </p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row justify-content-center">
                    <div class=" col-xs-1 col-sm-3 col-md-3 col-lg-1"></div>

                    <div class="col-xs-3 col-sm-9 col-md-8 col-lg-5">
                        <label class="sr-only"></label>

                        <select id="inputState" class="form-control">
                             <option selected>Selecione...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>

                    </div>
                </div>
                    





    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-sm-3 col-lg-1"></div>
        <div class="col-sm-9 col-md-5 col-lg-5     ">
            <div>
                <a href="login.php">
            </div>
            <button class="btn btn-lg btn-primary btn-block link" type="button">Enviar</button>
            </a>
        </div>

    </div>



    </div>
    </form>

    </div>
    </body>

</html>