
  <?php 
  require 'includes/functions.php';
  
  templateinclude('header');
?>

    <main class="container section center-content">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jepg" />
        <img
          src="build/img/destacada3.jpg"
          alt="Imagen Contacto"
          loading="lazy"
        />
      </picture>
      <h2>Llene el formulario de contacto</h2>
      <form class="form">
        <fieldset>
          <legend>Información personal</legend>
          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Tu Nombre" id="nombre" required />
          <label for="email">E-mail</label>
          <input type="email" placeholder="Tu Correo" id="email" required />
          <label for="phone">Teléfono</label>
          <input type="tel" placeholder="Tu Teléfono" id="phone" required />
          <label for="message">Déjanos tu mensaje:</label>
          <textarea name="mensaje" id="message"></textarea>
        </fieldset>
        <fieldset>
          <legend>Información sobre la propiedad</legend>
          <label for="options">Vender o comprar:</label>
          <select name="" id="options">
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="comprar">Comprar</option>
            <option value="vender">Vender</option>
          </select>
          <label for="presupuesto">Presupuesto</label>
          <input
            type="text"
            placeholder="Tu Precio o presupuesto"
            id="presupuesto"
          />
        </fieldset>
        <fieldset>
          <legend>Contacto</legend>
          <p>¿Como desea ser contactado?</p>
          <div class="contact-radio">
            <label for="contacto-telefono">Teléfono</label>
            <input
              type="radio"
              name="contact"
              value="phone"
              id="contacto-telefono"
            />
            <label for="contacto-email">Correo </label>
            <input
              type="radio"
              name="contact"
              value="email"
              id="contacto-email"
            />
          </div>
          <p>
            Si eligió teléfono elija una fecha y una hora para ser contactado
          </p>
          <label for="contact-date">Fecha</label>
          <input type="date" name="" id="contact-date" />
          <label for="contact-hour">Hora</label>
          <input
            type="time"
            name=""
            id="contact-hour"
            min="09:00"
            max="18:00"
          />
        </fieldset>
        <input type="submit" value="Enviar" class="green-btn" />
      </form>
    </main>

    <?php 
    templateinclude('footer');
    ?>
