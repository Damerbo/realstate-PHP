
  <?php 
  require 'includes/functions.php';
  
  templateinclude('header');
?>

    <main class="container section center-content">
      <h1>Nuestro Blog</h1>
      <article class="blog-entry">
        <div class="image">
          <picture>
            <source srcset="build/img/blog1.webp" type="image/webp" />
            <source srcset="build/img/blog1.jpg" type="image/jepg" />
            <img src="build/img/blog1.jpg" alt="Entrada Blog" loading="lazy" />
          </picture>
        </div>
        <div class="entry-text">
          <a href="entrada.php">
            <h4>Espacios verdes en terrazas</h4>
            <p class="blog-data">
              escrito el: <span>17/08/2024</span> por: <span>admin</span>
            </p>
            <p>
              Consejos para crear espacios ecológicos en la terraza de tu casa
              con materiales reciclados y sin gastar mucho.
            </p>
          </a>
        </div>
      </article>
      <article class="blog-entry">
        <div class="image">
          <picture>
            <source srcset="build/img/blog2.webp" type="image/webp" />
            <source srcset="build/img/blog2.jpg" type="image/jepg" />
            <img src="build/img/blog2.jpg" alt="Entrada Blog" loading="lazy" />
          </picture>
        </div>
        <div class="entry-text">
          <a href="entrada.php">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="blog-data">
              escrito el: <span>10/08/2024</span> por: <span>admin</span>
            </p>
            <p>
              Maximiza los espacios, modifica el escenario perfecto para tu
              descanso y aprende a combinar tus muebles para darle ese look
              agradable a tu hogar.
            </p>
          </a>
        </div>
      </article>
      <article class="blog-entry">
        <div class="image">
          <picture>
            <source srcset="build/img/blog3.webp" type="image/webp" />
            <source srcset="build/img/blog3.jpg" type="image/jepg" />
            <img src="build/img/blog3.jpg" alt="Entrada Blog" loading="lazy" />
          </picture>
        </div>
        <div class="entry-text">
          <a href="entrada.php">
            <h4>Espacios verdes en terrazas</h4>
            <p class="blog-data">
              escrito el: <span>17/08/2024</span> por: <span>admin</span>
            </p>
            <p>
              Consejos para crear espacios ecológicos en la terraza de tu casa
              con materiales reciclados y sin gastar mucho.
            </p>
          </a>
        </div>
      </article>
      <article class="blog-entry">
        <div class="image">
          <picture>
            <source srcset="build/img/blog4.webp" type="image/webp" />
            <source srcset="build/img/blog4.jpg" type="image/jepg" />
            <img src="build/img/blog4.jpg" alt="Entrada Blog" loading="lazy" />
          </picture>
        </div>
        <div class="entry-text">
          <a href="entrada.php">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="blog-data">
              escrito el: <span>10/08/2024</span> por: <span>admin</span>
            </p>
            <p>
              Maximiza los espacios, modifica el escenario perfecto para tu
              descanso y aprende a combinar tus muebles para darle ese look
              agradable a tu hogar.
            </p>
          </a>
        </div>
      </article>
    </main>
    <?php 
    templateinclude('footer');
    ?>
