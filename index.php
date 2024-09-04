<?php 
  require 'includes/functions.php';
  
  templateInclude('header', $home = true);
?>
    <main class="section container">
      <h1>Más Sobre nosotros</h1>
      <div class="about-icons">
        <div class="icon">
          <img
          
          src="build/img/icono1.svg"
          alt="Icono seguridad"
          loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolore
            nihil! Amet obcaecati quidem odio fugiat iste ipsam et.
          </p>
        </div>
        <div class="icon">
          <img  src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolore
            nihil! Amet obcaecati quidem odio fugiat iste ipsam et.
          </p>
        </div>
        
        <div class="icon">
          <img  src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
          <h3>A Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolore
            nihil! Amet obcaecati quidem odio fugiat iste ipsam et.
          </p>
        </div>
      </div>
    </main>
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
                <img class="dark-icon" src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                <p>3</p>
              </li>
              <li>
                <img class="dark-icon" src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                <p>3</p>
              </li>
              <li>
                <img class="dark-icon" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
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
                <img class="dark-icon" src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                <p>3</p>
              </li>
              <li>
                <img class="dark-icon" src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                <p>3</p>
              </li>
              <li>
                <img class="dark-icon" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
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
                <img class="dark-icon" src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                <p>3</p>
              </li>
              <li>
                <img class="dark-icon" src="build/img/icono_estacionamiento.svg" alt="Icono Parqueadero" loading="lazy">
                <p>3</p>
              </li>
              <li>
                <img class="dark-icon" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                <p>4</p>
              </li>
            </ul>
            <a href="properties.php" class="btn yellow-btn">Ver Propiedad</a>
          </div>
          </div>
        </div>
        <div class="align-right"><a href="anuncios.php" class="green-btn">Ver Todas</a></div>
      </section>
      <section class="contact-image">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Ingresa los datos en el formulario y nos contactaremos en el menor tiempo posible</p>
        <a href="contacto.php" class="yellow-btn-inb">Contáctenos</a>
      </section>
      <div class="section container lower-section">
        <section class="blog">
          <h3>Nuestro blog</h3>
          <article class="blog-entry">
            <div class="image">
              <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jepg">
                <img src="build/img/blog1.jpg" alt="Entrada Blog" loading="lazy">
              </picture>
            </div>
            <div class="entry-text">
              <a href="entrada.php">
                <h4>Espacios verdes en terrazas</h4>
                <p class="blog-data">escrito el: <span>17/08/2024</span> por: <span>admin</span></p>
                <p>Consejos para crear espacios ecológicos en la terraza de tu casa con materiales reciclados y sin gastar mucho.</p>
              </a>
            </div>
          </article>
          <article class="blog-entry">
            <div class="image">
              <picture>
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source srcset="build/img/blog2.jpg" type="image/jepg">
                <img src="build/img/blog2.jpg" alt="Entrada Blog" loading="lazy">
              </picture>
            </div>
            <div class="entry-text">
              <a href="entrada.php">
                <h4>Guía para la decoración de tu hogar </h4>
                <p class="blog-data">escrito el: <span>10/08/2024</span> por: <span>admin</span></p>
                <p>Maximiza los espacios, modifica el escenario perfecto para tu descanso y aprende a combinar tus muebles para darle ese look agradable a tu hogar. </p>
              </a>
            </div>
          </article>
        </section>
        <section class="testimonials">
          <h3>Testimonios</h3>
          <div class="testimonial">
            <blockquote>
              El equipo es muy amable y se mostró interesado en que pudiera encontrar ese lugar ideal para mi, además me dieron la atención personalizada que estaba buscando.
            </blockquote>
            <p>- Paola Peña</p>
          </div>
        </section>
      </div>
    <?php 
      templateInclude('footer');
    ?>
