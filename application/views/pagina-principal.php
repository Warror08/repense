
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<form method="post" action="<?= base_url('welcome/autenticar')?>">
    <div class="container">
        <?php if($this->session->flashdata("sucesso")) : ?>
            <p> <?=$this->session->flashdata("sucesso")?></p>
            <?php endif ?>

            <?php if($this->session->flashdata("danger")) : ?>
                <p> <?=$this->session->flashdata("danger")?></p>
            <?php endif ?>

        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-Vindo(a)! </h2>
                <p class="description description-primary">Acesse a sua conta agora mesmo.</p>
            </div>    
            <div class="second-column">
                <img src="repense.png" alt="">
                <div class="social-media">

                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Insira os Dados de acesso ao SUAP:</p>
                <form class="form" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Name">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="matricula" placeholder="Matrícula">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>
                    
                    
                    <button type="submit" class="btn btn-second">ENTRAR</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary"></h2>
                <p class="description description-primary"></p>
                <p class="description description-primary"></p>
                <button id="signup" class="btn btn-primary">sign up</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">sign in to developer</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second"></p>
                <form class="form">
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Password">
                    </label>
                
                    <a class="password" href="#">forgot your password?</a>
                    <button class="btn btn-second">sign in</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="<?= base_url()?>assets/js/app.js"></script>
</body>
</html>