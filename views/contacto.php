<style>
    body {
      background-color: #FADADD; /* Fondo rosado suave */
      font-family: 'Segoe UI', sans-serif;
    }
    h1, h2, h3 {
      color: #333;
    }
    .form-control:focus {
      border-color: #f8b0a6cb;
      box-shadow: 0 0 0 0.2rem rgba(248, 176, 166, 0.5);
    }
    .btn-custom {
      background-color: #f8b0a6cb;
      color: white;
      font-weight: bold;
      border-radius: 20px;
    }
    .btn-custom:hover {
      background-color: #f4e58a;
      color: #333;
    }
    footer {
      background-color: #f4e58a;
      padding: 20px;
      text-align: center;
    }
    .map-container {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .map-container iframe {
      width: 100%;
      height: 350px;
      border: 0;
    }
  </style>




  </head>
<body>
   <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-4">
            <h3 class="text-center mb-4">Escríbenos</h3>
            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
              </div>
              <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono (opcional)</label>
                <input type="tel" class="form-control" id="telefono" placeholder="+54 9 11 1234 5678">
              </div>
              <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu consulta aquí..."></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-custom">Enviar mensaje</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Información de contacto -->
 <section class="text-center my-5">
    <h3>O si prefieres, contáctanos directamente:</h3>
    <p><strong>Teléfono:</strong> +54 9 11 5555 5555</p>
    <p><strong>Email:</strong> contacto@vidasana.com</p>
    <p><strong>Dirección:</strong> Av. Belleza 123, Buenos Aires</p>
  </section> 


 <!-- Mapa -->
  <div class="container my-5">
    <h3 class="text-center mb-4">Encuéntranos aquí</h3>
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.7302128846823!2d-58.381559284770334!3d-34.60373848045998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac9b9c94f27%3A0x18a2eaf8f1d6d4c8!2sObelisco%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1700000000000"
        allowfullscreen=""
        loading="lazy">
      </iframe>
    </div>
  </div>


