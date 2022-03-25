<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/cssanalise.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">
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
        <img src="images/usuario.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Inicio</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Minhas Emoções</span></a>
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
        <p><strong></strong> <span id="nome"></span></p>
      </div>
      <a href="#"><i class="fas fa-desktop"></i><span>Usuario</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Minhas Emoções</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Meus Pensamentos Disfuncionais</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Feedback Psicologia</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>Feedback ETEP</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="button button1">Analisar Registros de pensamentos disfuncionais dos estudantes</div>

    <div id="teste" class="tabela">
    <div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>comentarios</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($comentarios as $comentario) : ?>
          <tr>
<td> <?= $lista['comentario']?></td>

          </tr>
          <?php endforeach;?>
			</tbody>
		</table> 
        <h1>teste</h1>
        <div id="teste" class="tabela">
    <div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>comentarios</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($comentarioestado as $comentarioes) : ?>
          <tr>
<td> <?= $comentarioes['comentarioes']?></td>

          </tr>
          <?php endforeach;?>
			</tbody>
		</table>
	</div>
    </div> </div>
    <div id="teste2" class="texto">
      <p>Adicionar <br> comentário</p>
    </div> 
    <div id="teste3" class="comentarios">
      <input type="text"></input>
    </div> 
    <div id="teste4"class="buttonso">
      <button type="submit">Salvar</button>
    </div>
  
    </div>
    
      </div>
      <div class="resp">
        <div class="but but1">Analisar Registros de pensamentos disfuncionais dos estudantes</div>
          
        <div  class="header4">
         <div class="header5">
             <input type="text" placeholder="Nome do aluno"></input>
             <input type="text" placeholder="Matricula"></input>
             <input type="text" placeholder="Data do Registro"></input>
             <button id="btn1" class="pesqu" type="submit">
               <i class="fa fa-search"></i>
               </button>
         </div> 
         
        </div>
      <div class="resp2">
        <div id="teste4" class="tabela">
          <table>
            <tr>
              <th>Data/Hora</th>
              <th>Situação</th>
              <th>Pensamentos</th>
              <th>Emoções/Sentimentos</th>
              <th>Compotamento</th>
              
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
             
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
             
              
            </tr>
          </table>
        </div>
        <div class="textorr">
          <p id="teste6">Adicionar <br> comentário</p>
        </div> 
        <div class="comentariosr">
          <input id="teste7" type="text"></input>
        </div> 
        <div class="buttonsor">
          <button id="teste8" type="submit">Salvar</button>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });

      
      var btn = document.querySelector("#btn");
btn.addEventListener("click", function() {
    var div = document.querySelector("#teste");
  
  if(div.style.display === "none") {
        div.style.display = "block";
    } else {
      div.style.display = "none";
  }
   var div = document.querySelector( "#teste2");
    
  if(div.style.display === "none") {
        div.style.display = "block";
    } else {
      div.style.display = "none";
  }
  var div = document.querySelector( "#teste3");
    
    if(div.style.display === "none") {
          div.style.display = "block";
      } else {
        div.style.display = "none";
    }
    var div = document.querySelector( "#teste4");
    
    if(div.style.display === "none") {
          div.style.display = "block";
      } else {
        div.style.display = "none";
    }  
});



var btn = document.querySelector("#btn1");
btn.addEventListener("click", function() {
    var div = document.querySelector("#teste5");
  
  if(div.style.display === "none") {
        div.style.display = "block";
    } else {
      div.style.display = "none";
  }
   var div = document.querySelector( "#teste6");
    
  if(div.style.display === "none") {
        div.style.display = "block";
    } else {
      div.style.display = "none";
  }
  var div = document.querySelector( "#teste7");
    
    if(div.style.display === "none") {
          div.style.display = "block";
      } else {
        div.style.display = "none";
    }
    var div = document.querySelector( "#teste8");
    
    if(div.style.display === "none") {
          div.style.display = "block";
      } else {
        div.style.display = "none";
    }  
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
              window.location.href = "login.html";
          }
      });
    });
    });
    </script>

  </body>
</html>