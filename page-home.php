<?php
// Template name: Home
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="s-hero">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h3><?php the_field('subtitulo_hero') ?></h3>
          <h1><?php the_field('titulo_hero') ?></h1>
          <button class="btn-primary"><?php the_field('label_botao_hero') ?></button>
          <ul>
            <?php if (have_rows('icones_destaque_hero')) : while (have_rows('icones_destaque_hero')) : the_row(); ?>
                <li>
                  <div class="icon">
                    <img src="<?php the_sub_field('icon_destaque') ?>" alt="">
                  </div>
                  <span><?php the_sub_field('label_destaque') ?></span>
                </li>

            <?php endwhile;
            else : endif; ?>
          </ul>
        </div>
        <div class="area-image">
          <h2 data-aos="fade-left"><?php the_field('texto_banco_hero') ?></h2>
          <div class="image" data-aos="zoom-in">
            <img src="<?php echo get_template_directory_uri() ?>/assets/card-neon-frnt.png" alt="" class="card-front">
            <img src="<?php echo get_template_directory_uri() ?>/assets/card-neon-back.png" alt="" class="card-back">
            <img src="<?php echo get_template_directory_uri() ?>/assets/circle-cards-neon.svg" alt="" class="circle">
          </div>
        </div>
      </div>
    </section>

    <section class="s-card-neon">
      <div class="container">
        <div class="left-area">
          <div class="ilustra-mockup">
            <img src="<?php echo get_template_directory_uri() ?>/assets/circle-mockup.svg" alt="" class="circle" data-aos="fade-left">
            <img src="<?php echo get_template_directory_uri() ?>/assets/mockup.svg" alt="" class="mockup" data-aos="flip-right">
          </div>
          <div class="text" data-aos="fade-up">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/assets/icon-neon.svg" alt="">
            </div>
            <div class="info-text">
              <h3><?php the_field('titulo_baixe_nosso_app') ?></h3>
              <p><?php the_field('descricao_baixe_nosso_app') ?></p>
              <ul>
                <li>
                  <a href="<?php the_field('url_apple') ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/apple-store.svg" alt="">
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('url_android') ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/google-play.svg" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="right-area">
          <div class="main-text" data-aos="fade-left">
            <h2><?php the_field('texto_titulo_app') ?></h2>
            <ul>
              <?php if (have_rows('beneficios_itens_app_neon')) : while (have_rows('beneficios_itens_app_neon')) : the_row(); ?>
                  <li>
                    <div class="info">
                      <img src="<?php the_sub_field('icone_beneficio_app_neon') ?>" class="icon" alt="">
                      <div class="txt">
                        <h3><?php the_sub_field('titulo_beneficio_app_neon') ?></h3>
                        <p><?php the_sub_field('texto_beneficio_app_neon') ?></p>
                      </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/arrow-right.svg" alt="">
                  </li>

              <?php endwhile;
              else : endif; ?>
            </ul>
            <a href="" class="btn"><?php the_field('label_botao_produtos') ?></a>
          </div>
          <div class="box-card" data-aos="fade-left">
            <div class="text">
              <h2><?php the_field('titulo_pj') ?></h2>
              <h3><?php the_field('subtitulo_pj') ?></h3>
              <p><?php the_field('descricao_pj') ?></p>
              <div class="btns">
                <button class="btn-primary"><?php the_field('label_botao_mei') ?></button>
                <button class="btn-primary"><?php the_field('label_botao_me') ?></button>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/card-front-pj.svg" class="image" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="s-depoimentos">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <h2><span><?php the_field('titulo_depoimento') ?></span><?php the_field('titulo_secundario_depoimento') ?></h2>
          <div class="paginacao"></div>
        </div>

        <div class="slide-depoimentos" data-aos="fade-up">
          <div class="swiper-wrapper">
            <?php if (have_rows('depoimento')) : while (have_rows('depoimento')) : the_row(); ?>
                <div class="swiper-slide">
                  <div class="card-depoimento">
                    <div class="user">
                      <strong><?php the_sub_field('usuario_depoimento') ?></strong>
                      <img src="<?php echo get_template_directory_uri() ?>/assets/icon-twiiter.svg" alt="">
                    </div>
                    <p><?php the_sub_field('conteudo_depoimento') ?></p>
                  </div>
                </div>
            <?php endwhile;
            else : endif; ?>
          </div>

        </div>
      </div>
    </section>

    <section class="s-conta-digital">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h2><span><?php the_field('subtitulo_conta_digital') ?></span><?php the_field('titulo_conta_digital') ?></h2>
          <ul>

            <?php if (have_rows('cadastrar_item_conta_digital')) : while (have_rows('cadastrar_item_conta_digital')) : the_row(); ?>

                <li>
                  <div class="icon">
                    <img src="<?php the_sub_field('icon_conta_digital') ?>" alt="">
                  </div>
                  <div class="info">
                    <h4><?php the_sub_field('titulo_conta_digital') ?></h4>
                    <p><?php the_sub_field('conteudo_conta_digital') ?></p>
                  </div>
                </li>
                

            <?php endwhile;
            else : endif; ?>

          </ul>
          <button class="btn-primary"><?php the_field('label_conta_digital') ?></button>
        </div>
        <div class="image">
          <img data-aos="fade-up" src="<?php echo get_template_directory_uri() ?>/assets/mockup-01.svg" class="mockup-01" alt="">
          <img data-aos="fade-down" src="<?php echo get_template_directory_uri() ?>/assets/mockup-02.png" class="mockup-02" alt="">
          <img data-aos="zoom-in" src="<?php echo get_template_directory_uri() ?>/assets/circle-conta-digital.svg" class="circle" alt="">
        </div>
      </div>
    </section>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>