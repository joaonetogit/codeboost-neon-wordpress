<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/plugins.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
  <!-- Primary Meta Tags -->
  <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
  <meta name="title" content="Redesign Banco Neon">
  <meta name="description" content="A conta digital certa pra cuidar bem do seu dinheiro">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://site-neon-redesign.netlify.app/">
  <meta property="og:title" content="Redesign Banco Neon">
  <meta property="og:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
  <meta property="og:image" content="https://site-neon-redesign.netlify.app/share-img.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://site-neon-redesign.netlify.app/">
  <meta property="twitter:title" content="Redesign Banco Neon">
  <meta property="twitter:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
  <meta property="twitter:image" content="https://site-neon-redesign.netlify.app/share-img.jpg">

  <?php wp_head(); ?>
</head>

<body>
  <header id="js-header">
    <div class="container">
      <a href="" class="logo"></a>
      <nav>
        <div class="dropdown" id="js-dropdown">
          <div class="item">
            <strong>Cartão de crédito</strong>
            <p>Cartão de crédito sem anuidade</p>
          </div>
          <div class="item">
            <strong>Cartão pré-pago</strong>
            <p>Cartão de débito internacional Neon</p>
          </div>
          <div class="item">
            <strong>Neon Mais</strong>
            <p>4 saques grátis para quem compra com a Neon</p>
          </div>
          <div class="item">
            <strong>Investimentos</strong>
            <p>A evolução da poupança</p>
          </div>
          <div class="item">
            <strong>Empréstimo pessoal</strong>
            <p>Faça uma simulação de empréstimo pessoal</p>
          </div>
        </div>

        <?php
        $args = array(
          'menu' => 'Header Principal',
          'theme_location' => 'header-principal',
          'container' => false
        );
        wp_nav_menu($args);
        ?>

        <button class="btn-secondary white">Abra sua conta digital</button>

        <button class="btn-mobile" id="js-btn-menu-mobile"><img src="<?php echo get_template_directory_uri() ?>/assets/btn-mobile.svg" alt=""></button>
      </nav>
    </div>
  </header>

  <div class="menu-mobile">
    <div class="overlay" id="js-overlay"></div>
    <aside>
      <img src="<?php echo get_template_directory_uri() ?>/assets/logo-neon-color.svg" class="logo" alt="">
      <?php
        $args = array(
          'menu' => 'Header Principal',
          'theme_location' => 'header-principal',
          'container' => false
        );
        wp_nav_menu($args);
      ?>
    </aside>
  </div>