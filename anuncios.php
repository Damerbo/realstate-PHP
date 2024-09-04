<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncios - Real State</title>
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
    
<?php 
  require 'includes/functions.php';
  
  templateinclude('header');
?>

    <main class="container section">
        <section class="section container">
            <h2>Casas y Apartamentos en Venta</h2>
            <div class="card-container">
              <div class="card">
                <picture> <source srcset="build/img/anuncio1.webp" type="image/webp"/>
                <picture> <source srcset="build/img/anuncio1.jpg" type="image/jpeg"/>
                  <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
              </picture>
              <div class="card-content">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista acabados de lujo, precios accesibles.</p>
                <p class="price">$3.000.000</p>
                <ul class="feature-icons">
                  <li>
                    <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p>4</p>
                  </li>
                </ul>
                <a href="properties.php" class="btn yellow-btn">Ver Propiedad</a>
              </div>
              </div>
              <div class="card">
                <picture> <source srcset="build/img/anuncio2.webp" type="image/webp"/>
                <picture> <source srcset="build/img/anuncio2.jpg" type="image/jpeg"/>
                  <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
              </picture>
              <div class="card-content">
                <h3>Casa en Chía</h3>
                <p>Hermosa casa en la sabana, con acabados de lujo y parqueadero para varios carros.</p>
                <p class="price">$3.000.000</p>
                <ul class="feature-icons">
                  <li>
                    <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p>4</p>
                  </li>
                </ul>
                <a href="properties.php" class="btn yellow-btn">Ver Propiedad</a>
              </div>
              </div>
              <div class="card">
                <picture> <source srcset="build/img/anuncio3.webp" type="image/webp"/>
                <picture> <source srcset="build/img/anuncio3.jpg" type="image/jpeg"/>
                  <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
              </picture>
              <div class="card-content">
                <h3>Casa en Girardot</h3>
                <p>Casa de verano con todas las comodidades. incluye piscina y zonas húmedas</p>
                <p class="price">$3.000.000</p>
                <ul class="feature-icons">
                  <li>
                    <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p>4</p>
                  </li>
                </ul>
                <a href="properties.php" class="btn yellow-btn">Ver Propiedad</a>
              </div>
              </div>
            </div>
            <div class="card-container">
              <div class="card">
                <picture> <source srcset="build/img//anuncio4.webp" type="image/webp"/>
                <picture> <source srcset="build/img/anuncio4.jpg" type="image/jpeg"/>
                  <img src="build/img/anuncio4.jpg" alt="anuncio" loading="lazy">
              </picture>
              <div class="card-content">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista acabados de lujo, precios accesibles.</p>
                <p class="price">$3.000.000</p>
                <ul class="feature-icons">
                  <li>
                    <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p>4</p>
                  </li>
                </ul>
                <a href="properties.php" class="btn yellow-btn">Ver Propiedad</a>
              </div>
              </div>
              <div class="card">
                <picture> <source srcset="build/img/anuncio5.webp" type="image/webp"/>
                <picture> <source srcset="build/img/anuncio5.jpg" type="image/jpeg"/>
                  <img src="build/img/anuncio5.jpg" alt="anuncio" loading="lazy">
              </picture>
              <div class="card-content">
                <h3>Casa en Chía</h3>
                <p>Hermosa casa en la sabana, con acabados de lujo y parqueadero para varios carros.</p>
                <p class="price">$3.000.000</p>
                <ul class="feature-icons">
                  <li>
                    <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p>4</p>
                  </li>
                </ul>
                <a href="property.php" class="btn yellow-btn">Ver Propiedad</a>
              </div>
              </div>
              <div class="card">
                <picture> <source srcset="build/img/anuncio6.webp" type="image/webp"/>
                <picture> <source srcset="build/img/anuncio6.jpg" type="image/jpeg"/>
                  <img src="build/img/anuncio6.jpg" alt="anuncio" loading="lazy">
              </picture>
              <div class="card-content">
                <h3>Casa en Girardot</h3>
                <p>Casa de verano con todas las comodidades. incluye piscina y zonas húmedas</p>
                <p class="price">$3.000.000</p>
                <ul class="feature-icons">
                  <li>
                    <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                    <p>3</p>
                  </li>
                  <li>
                    <img src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p>4</p>
                  </li>
                </ul>
                <a href="properties.php" class="btn yellow-btn">Ver Propiedad</a>
              </div>
              </div>
            </div>
            
          </section>
          
    </main>
    <section class="contact-image">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Ingresa los datos en el formulario y nos contactaremos en el menor tiempo posible</p>
        <a href="contacto.php" class="yellow-btn-inb">Contáctenos</a>
      </section>
    
      <?php 
    templateinclude('footer');
    ?>