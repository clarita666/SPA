 <!-- Sección Servicios -->
<section class="container my-5">
    <h2 class="text-center fw-bold mb-4">Nuestros Servicios</h2>
    <div class="row g-4">
        <!-- Masaje Relajante -->
        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="img/masaje1.webp" class="card-img-top" alt="Masaje relajante">
                <div class="card-body">
                    <h5 class="card-title">💆‍♀️ Masaje Relajante</h5>
                    <p class="card-text">Reduce el estrés y mejora tu circulación con aceites esenciales.</p>
                    <p><strong>Duración:</strong> 60 min</p>
                    <p><strong>Precio:</strong> $5.000</p>
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#reservaModal">Reservar</button>
                </div>
            </div>
        </div>
        <!-- Masaje Descontracturante -->
        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="img/masaje2.jpg" class="card-img-top" alt="Masaje descontracturante">
                <div class="card-body">
                    <h5 class="card-title">🌿 Masaje Descontracturante</h5>
                    <p class="card-text">Ideal para aliviar dolores musculares y liberar tensiones.</p>
                    <p><strong>Duración:</strong> 50 min</p>
                    <p><strong>Precio:</strong> $6.500</p>
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#reservaModal">Reservar</button>
                </div>
            </div>
        </div>
        <!-- Facial Revitalizante -->
        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="img/masaje3.jpg" class="card-img-top" alt="Facial revitalizante">
                <div class="card-body">
                    <h5 class="card-title">✨ Facial Revitalizante</h5>
                    <p class="card-text">Limpieza profunda y nutrición con productos naturales.</p>
                    <p><strong>Duración:</strong> 45 min</p>
                    <p><strong>Precio:</strong> $4.800</p>
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#reservaModal">Reservar</button>
                </div>
            </div>
        </div>
        <!-- Masaje con Piedras Calientes -->
        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="img/masaje4.jpg" class="card-img-top" alt="Masaje con piedras calientes">
                <div class="card-body">
                    <h5 class="card-title">🔥 Masaje con Piedras Calientes</h5>
                    <p class="card-text">La combinación de calor y masaje alivia tensiones profundas.</p>
                    <p><strong>Duración:</strong> 70 min</p>
                    <p><strong>Precio:</strong> $7.200</p>
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#reservaModal">Reservar</button>
                </div>
            </div>
        </div>
        <!-- Tratamiento Corporal -->
        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="img/masaje5.jpg" class="card-img-top" alt="Tratamiento corporal exfoliante">
                <div class="card-body">
                    <h5 class="card-title"> 🌸 Tratamiento Corporal</h5>
                    <p class="card-text">Exfoliación y nutrición que dejan tu piel suave y luminosa.</p>
                    <p><strong>Duración:</strong> 60 min</p>
                    <p><strong>Precio:</strong> $6.000</p>
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#reservaModal">Reservar</button>
                </div>
            </div>
        </div>
        <!-- Spa Completo -->
        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="img/masaje6.jpg" class="card-img-top" alt="Spa completo">
                <div class="card-body">
                    <h5 class="card-title">🧖‍♀️ Spa Completo</h5>
                    <p class="card-text">Un día de relajación con masajes, faciales y aromaterapia.</p>
                    <p><strong>Duración:</strong> 2 horas</p>
                    <p><strong>Precio:</strong> $12.000</p>
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#reservaModal">Reservar</button>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Modal -->
    <div class="modal fade" id="reservaModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reservar turno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Servicio</label>
                            <select class="form-select">
                                <option>Masaje relajante</option>
                                <option>Tratamiento facial</option>
                                <option>Spa completo</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Enviar reserva</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Equipo -->
    <section class="team text-center my-5">
        <h2 class="fw-bold mb-4">Conoce a Nuestr@s Masajistas</h2>
        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <img src="img/masajista1.webp" alt="Masajista 1">
                <h5>Ana López</h5>
                <p>Especialista en masajes relajantes y aromaterapia.</p>
            </div>
            <div class="col-md-4">
                <img src="img/masajista2.jpg" alt="Masajista 2">
                <h5>Juan Pérez</h5>
                <p>Experto en masajes descontracturantes y reflexología.</p>
            </div>
        </div>
    </section>






   


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
