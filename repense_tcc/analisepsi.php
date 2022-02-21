<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="cssanalise.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
      <img src="repense.png" alt="">
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Sair</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="usuario.png" class="mobile_profile_image" alt="">
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
        <img src="usuario.png" class="profile_image" alt="">
        <h4>Usuário</h4>
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
        
      <div  class="header2">
       <div class="header3">
         <ul>
           <li class="li1">Nome do aluno</li>
           <li class="li2">Mátricula </li> 
           <li class="li3">Data do Registro</li> 
           <input type="text"></input>
           <input type="text"></input>
           <input type="text"></input>
           <button class="pesquisa" type="submit">
             <i class="fa fa-search"></i>
             </button>
         </ul>
       </div> 
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
             <button class="pesqu" type="submit">
               <i class="fa fa-search"></i>
               </button>
         </div> 
        </div>
        <table class="table">
          <tr>
              <th>Código</th>
              <th>Nome do Fabricante</th>
              <th>Detalhes</th>
              <th>Editar</th>
              <th>Excluir</th>
          </tr>
      
          <?php foreach ($registros as $r): ?>
              <tr>
                  <td><?= $r->codfabricante ?></td>
                  <td><?= $r->fabricante ?></td>
                  <td>
                  <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="detalhesFabricante(<?= $r->codfabricante?>)">detalhes</a>
                  <!--<a href="<?/*=base_url('fabricante/detalhes/'.$r->codfabricante);*/?>">detalhes</a>-->
                  </td>
                  <td>
                  <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="editarFabricante(<?= $r->codfabricante?>)">editar</a>
                  </td>
                  <td><?= anchor('fabricante/apagar/'.$r->codfabricante, "apagar") ?></td>
              </tr>
          <?php endforeach; ?>
          <tr>
          </tr>
      
      </table>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });

    });
    </script>

  </body>
</html>