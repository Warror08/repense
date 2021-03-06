<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home aluno</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/analise33.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
      <img src="<?= base_url();?>assets/images/repense.png" alt="">
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Sair</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="<?= base_url();?>assets/images/usuario.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Inicio</span></a>
        <a href="#"><i class="fa-regular fa-face-grin-beam"></i><span>Minhas Emoções</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Meus Pensamentos Disfuncionais</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Feedback Psicologia</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>Feedback ETEP</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="images/usuario.png" class="profile_image" alt="">
        <h4>Usuário</h4>
      </div>
      <a href="#"><i class="fas fa-desktop"></i><span>Usuario</span></a>
      <a href="#"><i class="fa-regular fa-face-grin-beam"></i><span>Minhas Emoções</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Meus Pensamentos Disfuncionais</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Feedback Psicologia</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>Feedback ETEP</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <p><?= $this->session->flashdata("msg"); ?></p>
      <h2>Digite seu estado emocional no momento</h2>
      <form method="post" action="<?= base_url('usuario/regist')?>">
        <div class="form-group">
          <label for="matricula">Qual seu estado emocional?
          </label>
          <input type="text" class="form-control" id="matricula" placeholder="Digite sua matrícula" name="matricula">
          <input type="text" class="form-control" id="figura" placeholder="Digite seu estado emocional no momento" name="figura">
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
       </form>
    </div> </div>
    
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
