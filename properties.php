
  <?php 
  require 'includes/functions.php';
  
  templateinclude('header');
?>

    <main class="container section center-content">
      <h1>Casa en venta frente al bosque</h1>
      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jepg" />
        <img
          src="build/img/destacada.jpg"
          alt="Propiedad destacada"
          loading="lazy"
        />
      </picture>
      <div class="properties-resume">
        <p class="price">$3.000.000</p>
        <ul class="feature-icons">
          <li>
            <img
              class="dark-icon"
              src="build/img/icono_wc.svg"
              alt="Icono WC"
              loading="lazy"
            />
            <p>3</p>
          </li>
          <li>
            <img
              class="dark-icon"
              src="build/img/icono_estacionamiento.svg"
              alt="Icono Parqueadero"
              loading="lazy"
            />
            <p>3</p>
          </li>
          <li>
            <img
              class="dark-icon"
              src="build/img/icono_dormitorio.svg"
              alt="Icono habitaciones"
              loading="lazy"
            />
            <p>4</p>
          </li>
        </ul>
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