<?php 
  require 'includes/functions.php';
  
  templateinclude('header');
?>
    <main class="container section center-content">
      <h1>Guía para la decoración de tu hogar</h1>
      <picture>
        <source srcset="build/img/blog1.webp" type="image/webp" />
        <source srcset="build/img/blog1.jpg" type="image/jepg" />
        <img
          src="build/img/blog1.jpg"
          alt="Propiedad destacada"
          loading="lazy"
        />
      </picture>
      <p class="blog-data">
        escrito el: <span>10/08/2024</span> por: <span>admin</span>
      </p>
      <div class="properties-resume">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
          officia molestiae, voluptates debitis magnam laborum quasi adipisci
          repudiandae libero velit aspernatur, ab suscipit. Vero, quia et
          voluptatem labore corporis nobis.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
          officia molestiae, voluptates debitis magnam laborum quasi adipisci
          repudiandae libero velit aspernatur, ab suscipit. Vero, quia et
          voluptatem labore corporis nobis.
        </p>
      </div>
    </main>

    <?php 
    templateinclude('footer');
    ?>
