<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real State</title>
  <link rel="stylesheet" href="/realstate/build/css/app.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>

<body>
  <header class="header <?php echo ($home)  ? 'home' : ''; ?>">
    <div class="container header-content">
      <div class="bar">
        <a href="/realstate/index.php"><img src="/realstate/build/img/logo.svg" alt="Real State Logo" /></a>
        <div class="mobile-menu">
          <img src="/realstate/build/img/barras.svg" alt="icono menu responsive">
        </div>
        <div class="right">
          <label for="toggle" class="toggle">
            <i class="bx bxs-sun"></i>
            <i class="bx bx-moon"></i>
            <span class="ball"></span>
          </label>
          <nav class="navbar">
            <a href="/realstate/index.php">Inicio</a>
            <a href="/realstate/nosotros.php">Nosotros</a>
            <a href="/realstate/anuncios.php">Anuncios</a>
            <a href="/realstate/blog.php">Blog</a>
            <a href="/realstate/contacto.php">Contáctenos</a>
          </nav>
        </div>

      </div>
      <?php if ($home) { ?>
        <h1>Venta de casas y apartamentos de lujo</h1>
      <?php }; ?>
    </div>
  </header>