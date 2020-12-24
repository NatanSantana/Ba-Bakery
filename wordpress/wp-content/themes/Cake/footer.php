<!-- Footer -->

<footer class="creme2 text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
       <img class="logoFooter" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 232.svg" alt="">
      </div>
      <!--Grid column-->


      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

        <ul class="list-unstyled mb-0">
          <li>
            <img class="socialIcons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Telefone - Filled 01.svg" alt="">
            <a style="font: normal normal bold 16px/22px Noto Sans; color:#858585"><?php the_field('footer_telefone'); ?></a>
          </li>
          <li>
            <img class="socialIcons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Email - Filled 01.svg" alt="">
            <a style="font: normal normal bold 16px/22px Noto Sans; color:#858585"><?php the_field('footer_email'); ?></a>
          </li>
          <div class="ml-4" style="border: 1px solid #858585; width: 36px; height: 0px;"></div>
          <li>
            <img class="socialIcons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Location Pin - Filled 01.svg" alt="">
            <a style="font: normal normal 300 16px/22px Noto Sans; color:#858585"><?php the_field('footer_endereco'); ?></a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

        <ul class="list-unstyled">
          <li>
            <a href="#home">
            <img style="width: 55px;
            height: 35px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 238.svg" alt="">
          </a>
          </li>
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class=" creme2 text-center mt-5" style="border-top: 1px solid #C8C8C8;">
    <p class="mt-5" style="font: normal normal 300 12px/20px Noto Sans; color: #5B5B5B;"><?php the_field('copyright'); ?></p>
  </div>
  <!-- Copyright -->
</footer>

<!-- Footer Final -->
    </section>


    <!-- Modals que são abertos quando o usuário clicar em algum dos 3 cards dos produtos.-->
    
<!-- Modal Start 1 -->

<div id="modalID" class="modalBg">
<div class="modalContainer align-items-center mx-auto">
  <div class="row mt-1 modalFinal">
    <div class="col-sm mt-5 ml-3">
      <img class="ml-3" style="width: 297px;
   height: 297px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/serghei-savchiuc-Qaruw62_kmM-unsplash@2x.png" alt="">
   <div class="d-flex justify-content-start mt-3 ml-3">
    <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/serghei-savchiuc-Qaruw62_kmM-unsplash@2x.png" alt="">
    <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/serghei-savchiuc-Qaruw62_kmM-unsplash@2x.png" alt="">
    <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/serghei-savchiuc-Qaruw62_kmM-unsplash@2x.png" alt="">
   </div>
    </div>

    <div class="col-sm">
      <img class="m-2 close" style="float: right;" data-dismiss="modal" aria-label="Fechar" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 400.svg" alt="Macarons Diversos 90g">
      <h3 class="mt-5" style="font: normal normal bold 18px/24px Noto Sans; color: #D6613E;"><?php the_field('produto_1_modal'); ?></h3>
    <p style="font: normal normal normal 18px/30px Noto Sans;
    letter-spacing: 0px;
    color: #646464;"><?php the_field('valor_1_modal'); ?></p>
    <p style="text-align: left;
    font: normal normal normal 16px/30px Noto Sans;
    letter-spacing: 0px;
    color: #646464; margin-bottom: 200px;"><?php the_field('descricao_1_modal'); ?></p>
      <img class="moreLess ml-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 336.svg" alt="">
      <span class="moreLess p-1">01</span>
      <img class="moreLess mr-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 397.svg" alt="">
      <button class="buttonHeader btn text-light text-uppercase p-1" type="button" href="#" style="font-family: 'Noto Sans', sans-serif;">Adicionar ao Carrinho</button>
    </div>
  </div>
  </div>
</div>

  <!-- Modal End  1-->

  <!-- Modal Start 2-->

<div id="modalID2" class="modalBg">
  <div class="modalContainer align-items-center mx-auto">
    <div class="row mt-1 modalFinal">
      <div class="col-sm mt-5 ml-3">
        <img class="ml-3" style="width: 297px;
     height: 297px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kim-daniels-OrkEasJeY74-unsplash@2x.png" alt="">
     <div class="d-flex justify-content-start mt-3 ml-3">
      <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kim-daniels-OrkEasJeY74-unsplash@2x.png" alt="">
      <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kim-daniels-OrkEasJeY74-unsplash@2x.png" alt="">
      <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kim-daniels-OrkEasJeY74-unsplash@2x.png" alt="">
     </div>
      </div>
  
      <div class="col-sm">
        <img class="m-2 close" style="float: right;" data-dismiss="modal" aria-label="Fechar" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 400.svg" alt="Tortilette de Laranja Lima com Amoras">
        <h3 class="mt-5" style="font: normal normal bold 18px/24px Noto Sans; color: #D6613E;"><?php the_field('produto_2_modal'); ?></h3>
      <p style="font: normal normal normal 18px/30px Noto Sans;
      letter-spacing: 0px;
      color: #646464;"><?php the_field('valor_2_modal'); ?></p>
      <p style="text-align: left;
      font: normal normal normal 16px/30px Noto Sans;
      letter-spacing: 0px;
      color: #646464; margin-bottom: 200px;"><?php the_field('descricao_2_modal'); ?></p>
        <img class="moreLess ml-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 336.svg" alt="">
        <span class="moreLess p-1">01</span>
        <img class="moreLess mr-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 397.svg" alt="">
        <button class="buttonHeader btn text-light text-uppercase p-1" type="button" href="#" style="font-family: 'Noto Sans', sans-serif;">Adicionar ao Carrinho</button>
      </div>
    </div>
    </div>
  </div>
  
    <!-- Modal End 2-->


      <!-- Modal Start 3-->

      <div id="modalID3" class="modalBg">
        <div class="modalContainer align-items-center mx-auto">
          <div class="row mt-1 modalFinal">
            <div class="col-sm mt-5 ml-3">
              <img class="ml-3" style="width: 297px;
           height: 297px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/anthony-espinosa-6iqpLKqeaE0-unsplash@2x.png" alt="">
           <div class="d-flex justify-content-start mt-3 ml-3">
            <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/anthony-espinosa-6iqpLKqeaE0-unsplash@2x.png" alt="">
            <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/anthony-espinosa-6iqpLKqeaE0-unsplash@2x.png" alt="">
            <img class="miniatura" src="<?php echo get_stylesheet_directory_uri(); ?>/img/anthony-espinosa-6iqpLKqeaE0-unsplash@2x.png" alt="">
           </div>
            </div>
        
            <div class="col-sm">
              <img class="m-2 close" style="float: right;" data-dismiss="modal" aria-label="Fechar" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 400.svg" alt="Fatia de Torta Gelada de Café com Chocolate Amargo">
              <h3 class="mt-4" style="font: normal normal bold 18px/24px Noto Sans; color: #D6613E;"><?php the_field('produto_3_modal'); ?></h3>
            <p style="font: normal normal normal 18px/30px Noto Sans;
            letter-spacing: 0px;
            color: #646464;"><?php the_field('valor_3_modal'); ?></p>
            <p style="text-align: left;
            font: normal normal normal 16px/30px Noto Sans;
            letter-spacing: 0px;
            color: #646464; margin-bottom: 200px;"><?php the_field('descricao_3_modal'); ?></p>
              <img class="moreLess ml-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 336.svg" alt="">
              <span class="moreLess p-1">01</span>
              <img class="moreLess mr-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Grupo 397.svg" alt="">
              <button class="buttonHeader btn text-light text-uppercase p-1" type="button" href="#" style="font-family: 'Noto Sans', sans-serif;">Adicionar ao Carrinho</button>
            </div>
          </div>
          </div>
        </div>

    <!-- Modal End 3-->

    <!-- Footer Wordpress -->
    <?php wp_footer(); ?>
    <!-- Final Footer Wordpress -->
    
</body>
</html>