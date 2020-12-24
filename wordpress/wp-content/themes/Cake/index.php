<?php get_header(); ?>

    <!-- Parte Principal do site -->
      <main>
      <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Imagem 1@2x.png" alt="Mão branca com unhas pintadas de vermelho segurando saco de confeitar que decora o bolo apoiado em uma forma.">
      <h1 class="textInstitutional text-light font-weight-bold" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('main_title'); ?></h1>
      <a href="#modalCards"><button class="buttonHeader btn text-light text-uppercase" type="button" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('main_button'); ?></button></a>
      </main>
      
      
      <section class="creme2"> <!-- Fundo Creme do site -->
        <div id="about" class="container">
        <div class="row">
        <div class="col-sm">
        <img class="backgroundSection" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo de máscara 1@2x.png" alt="Mulher branca com traje de cozinheira por trás de um vidro que está cheio de pães e bolos na vitrine.">
        </div>
        <div class="col-sm paragr">
        <h2 style="color:#646464"><?php the_field('history_title'); ?></h2>
        <hr style="float: left"></hr>
        <p class="paragr2" style="font-family: 'Noto Sans', sans-serif; color: #646464"><?php the_field('history_text'); ?></p>
      </div>

        <!-- Início dos produtos -->
      <article class="pt-5 ml-5">
        <div class="textProducts d-block">
        <h2><?php the_field('products_title'); ?></h2>
        <hr  id="modalCards" style="float: left"></hr>
      </div>

        <div class="card-deck modalID">
          <div class="card" data-toggle="modal" data-target="#modalID">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/serghei-savchiuc-Qaruw62_kmM-unsplash@2x.png" alt="Macarons Diversos 90g">
            <div class="card-body">
              <h5 class="card-title font-weight-bold" style="font-family: 'Noto Sans', sans-serif; color: #D6613E"><?php the_field('produto_1'); ?></h5>
              <p class=" valor card-text" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('valor_1'); ?></p>
            </div>
          </div>
          <div class="card" data-toggle="modal" data-target="#modalID2">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kim-daniels-OrkEasJeY74-unsplash@2x.png" alt="Tortilette de Laranja Lima com Amoras
            ">
            <div class="card-body"> 
              <h5 class="card-title font-weight-bold" style="font-family: 'Noto Sans', sans-serif; color: #D6613E"><?php the_field('produto_2'); ?></h5>
              <p class=" valor card-text" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('valor_2'); ?>R$ 12,00</p>
            </div>
          </div>
          <div class="card" data-toggle="modal" data-target="#modalID3">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/anthony-espinosa-6iqpLKqeaE0-unsplash@2x.png" alt="Fatia de Torta Gelada de Café com Chocolate Amargo">
            <div class="card-body">
              <h5 class="card-title font-weight-bold" style="font-family: 'Noto Sans', sans-serif; color: #D6613E"><?php the_field('produto_3'); ?></h5>
              <p class=" valor card-text" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('valor_3'); ?></p>
            </div>
          </div>
        </div>

        <div class="card-deck mt-5 collapse" id="collapseproduct">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/deva-williamson-S2jw81lfrG0-unsplash@2x.png" alt="Cupcake de Morango Glaceado">
            <div class="card-body">
              <h5 class="card-title font-weight-bold" style="font-family: 'Noto Sans', sans-serif; color: #D6613E"><?php the_field('produto_4'); ?></h5>
              <p class=" valor card-text" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('valor_4'); ?></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/elena-koycheva-PFzy4N0_R3M-unsplash@2x.png" alt="Rosquinhas de Morango com Coco">
            <div class="card-body">
              <h5 class="card-title font-weight-bold" style="font-family: 'Noto Sans', sans-serif; color: #D6613E"><?php the_field('produto_5'); ?></h5>
              <p class=" valor card-text" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('valor_5'); ?></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/dilyara-garifullina-I48gnI1Qs5o-unsplash@2x.png" alt="Fatia de Torta Gelada de Frutas Vermelhas">
            <div class="card-body">
              <h5 class="card-title font-weight-bold" style="font-family: 'Noto Sans', sans-serif; color: #D6613E"><?php the_field('produto_6'); ?></h5>
              <p class=" valor card-text" style="font-family: 'Noto Sans', sans-serif;"><?php the_field('valor_6'); ?></p>
            </div>
          </div>
        </div>
        <div class="text-center">
        <input class="btn buttonToggle text-light text-uppercase mt-5 mb-5" id="changeButton" type="button" value="Ver Mais" onClick="changetext()" data-toggle="collapse" data-target="#collapseproduct" aria-expanded="false" aria-controls="collapseproduct" href="#" style="font-family: 'Noto Sans', sans-serif;"></input>
      </div>
      </article>
      
        <!-- Final dos Produtos -->
      


      <!-- Contact Area -->

 <div class="formMap ml-5" id="contact">
<div style="width: 500px;">
  <h2 style="color:#858585; width: 470px; height: 132px; font-weight: bold;"><?php the_field('frase_contato'); ?></h2>
<form class="text-uppercase" style="color:#858585; font-family: 'Noto Sans', sans-serif;">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label"><?php the_field('nome'); ?></label>
    <div class="col-sm-10">
      <input style="font: italic normal 300 14px/19px Noto Sans;" type="name" class="form-control" id="inputName" placeholder="Ex.: Renata Lopes">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputTelephone" class="col-sm-2 col-form-label"><?php the_field('telefone'); ?></label>
    <div class="col-sm-10">
      <input style="font: italic normal 300 14px/19px Noto Sans;" type="tel" class="form-control" id="inputTelephone" placeholder="(xx) x xxxx.xxxx">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label"><?php the_field('email'); ?></label>
    <div class="col-sm-10">
      <input style="font: italic normal 300 14px/19px Noto Sans;" type="email" class="form-control" id="inputEmail" placeholder="exemplo@exemplo.com.br">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputMessage" class="col-sm-2 col-form-label"><?php the_field('mensagem'); ?></label>
    <div class="col-sm-10">
      <textarea style="resize:none; font: italic normal 300 14px/19px Noto Sans;" class="form-control" placeholder="Digite aqui a sua mensagem" id="textArea" rows="3"></textarea>
    </div>
  </div>

    <div class="col-sm-10 ml-5 mt-5">
      <button type="submit" class="buttonToggle btn text-light text-uppercase" href="#" style="font-family: 'Noto Sans', sans-serif;">Enviar</button>
    </div>
  </div>
</form>
</div>

<div class="orangeSquare">
  <h2 class="text-light text-left ml-4 mb-4 mt-3"><?php the_field('mensagem_map'); ?></h2>
  <img class="mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo de máscara 2@2x.png" alt="">
  <img class="pinWhite" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pin.svg" alt="Imagem da localização do estúdio">
<p class="text-light" style="font: normal normal 300 14px/18px Noto Sans; line-height: 18px;"><?php the_field('endereco'); ?></p>
<button type="button" class=" buttonOrange text-uppercase ml-4" style="font-family: 'Noto Sans', sans-serif;">Traçar Rota</button>
</div>

</div>

<?php get_footer(); ?>