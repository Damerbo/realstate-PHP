<?php 
  require 'includes/functions.php';
  
  templateinclude('header');
?>
    <main class="section container">
      <h1>Conoce sobre nosotros</h1>
      <div class="about-content">
        <div class="image">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img
              src="build/img/nosotros.jpg"
              alt="Sobre Nosotros"
              loading="lazy"
            />
          </picture>
        </div>
        <div class="about-text">
          <blockquote>25 años de experiencia</blockquote>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae
            ipsa, quos delectus eos non magnam odio magni consequatur ut harum
            ab impedit deleniti soluta voluptatibus ipsam enim exercitationem
            dignissimos illum? Deserunt labore obcaecati debitis nesciunt
            doloremque, eligendi delectus sequi minima dolor quia cupiditate
            error voluptatibus optio fuga architecto possimus perferendis nemo,
            aperiam iste! Suscipit illo velit temporibus quasi ab numquam? Nulla
            dolor cum impedit nisi praesentium laboriosam id. Sunt incidunt
            error, delectus quam eum natus maxime totam animi repudiandae harum
            blanditiis nostrum sit et exercitationem, doloribus repellat
            distinctio at veritatis. Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. Soluta, impedit, odio placeat quidem eveniet
            maiores nihil omnis quod mollitia corporis earum esse. Voluptas
            minima recusandae harum consequuntur sequi inventore blanditiis!
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione,
            natus eos? In possimus minus autem saepe earum a veniam quasi, non
            aut optio nihil ab rem, voluptatibus dolores esse vero. Iure, magnam
            autem odio reiciendis commodi omnis debitis voluptatem minima!
            Excepturi voluptatibus voluptatem commodi mollitia autem, nulla
            voluptate obcaecati cumque consequatur similique velit iste. Quos
            eius consequatur voluptatum quibusdam exercitationem?
          </p>
        </div>
      </div>
    </main>
    <section class="section container">
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
          <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolore
            nihil! Amet obcaecati quidem odio fugiat iste ipsam et.
          </p>
        </div>

        <div class="icon">
          <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
          <h3>A Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolore
            nihil! Amet obcaecati quidem odio fugiat iste ipsam et.
          </p>
        </div>
      </div>
    </section>
    <?php 
    templateinclude('footer');
    ?>
