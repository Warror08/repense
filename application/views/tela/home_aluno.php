<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
      <a href="<?= base_url();?>login"><button type="button" class="logout_btn" id="suap-logout-button">Sair</button></a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="<?= base_url();?>assets/images/usuario.png" class="mobile_profile_image" alt="">
        <h4 id="nome">Usuário</h4>
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
        <img src="<?= base_url();?>assets/images/usuario.png" class="profile_image" alt="">
      <h4 id="nome">Usuario</h4>
      </div>
      <a href="#"><i class="fas fa-desktop"></i><span>Usuario</span></a>
      <a href="#"><i class="fa-regular fa-face-grin-beam"></i><span>Minhas Emoções</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Meus Pensamentos Disfuncionais</span></a>
      <a href="<?= base_url();?>usuario/mostrar"><i class="fas fa-th"></i><span>Feedback Psicologia</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>Feedback ETEP</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <a  href="<?= base_url();?>usuario/novo"><button>Realizar Registro de Pensamento Disfuncionais</button></a>
      </div>
      <div class="card">
        <a href=""><button>Registrar Justificativa de Falta</button></a>
      </div>
      <div class="card">
        <a href="<?= base_url();?>usuario/novoo"><button>Registrar estado Emocional</button></a>
      </div>
    </div>

    <div class="Responsivo_area">
        <div class="respo">
          <a href="1"><button>Realizar Registro de Pensamento Disfuncionais</button></a>
        </div>
        <div class="respo">
          <a href="1"><button>Registrar Justificativa de Falta</button></a>
        </div>
        <div class="respo">
          <a href="1"><button>Registrar estado Emocional </button></a>
      </div>
        
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
      var suap = new SuapClient(SUAP_URL, CLIENT_ID, REDIRECT_URI, SCOPE);
      suap.init();
      $(document).ready(function () {
      		//$("#suap-login-button").attr('href', suap.getLoginURL());
          if (suap.isAuthenticated()) {
              var scope = suap.getToken().getScope();
              var callback = function (response) {
                  //$("#ident").text(JSON.stringify(response, null, 4)); //aqui vai mostrar todos os dados possíveis.
                  $("#ident").text(response.identificacao);
                  $("#nome").text(response.nome);
									$("#email").text(response.email);
                  $("#campus").text(response.campus);
                  //aqui você vai adicionando os outros campos possíveis.
              };
             suap.getResource(scope, callback);
          } else {
          	  suap.logout();
              window.location.href = "<?= base_url();?>application/views/login";
          }
      });
      $("#suap-logout-button").click(function(){
          suap.logout();
          window.location.href = "<?= base_url();?>application/views/login";
      });      
    });
    </script>

  </body>
</html>
