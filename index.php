<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>"/>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

     <!-- google fonte -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <?php wp_head();?>
   </head>
 <body>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 logo"><a href="<?phpbloginfo('home');?"><img src="<?php bloginfo('template_url'); ?>/images/marca.png" class="img-responsive" alt="Mova Videos" tilte="Mova Videos"></a></div>
         <div class="col-md-9">
           <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Jogos</a></li>
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ação</a></li>
            <li><a href="#">Aventura</a></li>
            <li><a href="#">Terror</a></li>
          </ul>
        </li>
        <li><a href="#">Canais</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Demos, Jogos, desenvolvedores">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon glyphicon-user"></span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         </div>
      </div>
    </div>
  </div>
  <div class="width-full-box">
    <div class="container">
       
       <div class="row">
         <div class="title-box">
          <div class="col-md-9"><h4>Mais jogados</h4></div>
          <div class="col-md-3"  ><h4>Mais baixados</h4></div>
         </div>
       </div>

       <div class="row">

         <div class="col-md-3 iten-futebol">
           <a href=""><img src="http://via.placeholder.com/370x220" class="img-responsive img-thumbnail" alt="" title="" /></a>
           <span>Campo extra</span>
           <h1><a href="">Titulo do post para a categoria futebol</a></h1>
         </div>

         <div class="col-md-3 iten-futebol">
           <a href=""><img src="http://via.placeholder.com/370x220" class="img-responsive img-thumbnail" alt="" title="" /></a>
           <span>Campo extra</span>
           <h1><a href="">Titulo do post para a categoria futebol</a></h1>
         </div>

          <div class="col-md-3 iten-futebol">
           <a href=""><img src="http://via.placeholder.com/370x220" class="img-responsive img-thumbnail" alt="" title="" /></a>
           <span>Campo extra</span>
           <h1><a href="">Titulo do post para a categoria futebol</a></h1>
         </div>

         <div class="col-md-3 iten-futebol">
           <a href=""><img src="http://via.placeholder.com/370x220" class="img-responsive img-thumbnail" alt="" title="" /></a>
           <span>Campo extra</span>
           <h1><a href="">Titulo do post para a categoria jogos</a></h1>
         </div>

       </div>
    
    </div>
  </div>
  <!--/width-full-box-->

  <div class="container">
    <div class="row">
        <div class="title-box">
          <div class="col-md-7"><h4>Mais jogados</h4></div>
          <div class="col-md-5"  ><h4>Mais baixados</h4></div>
        </div>   
    </div>
    <div class="row">
      <div class="col-md-7" id="posts-jogos">

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://via.placeholder.com/220x140" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h1 class="media-heading">Titulo do post para a categoria jogos</h1>
              <span>campo extra</span>
              <p>Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes.</p>
            </div>
          </div>

                    <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://via.placeholder.com/220x140" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h1 class="media-heading">Titulo do post para a categoria jogos</h1>
              <span>campo extra</span>
              <p>Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes.</p>
            </div>
          </div>

      </div>
      <!--/post-jogos-->

      <div class="col-md-5" id="recomendados-home">Recomendados</div>
    </div>
  </div>

 <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
 <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
 <?php wp_footer();?>
 </body>
</html> 