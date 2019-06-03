<!--Login Modal-->	
<div class="modal fade" id="sesionModal" tabindex="-1" role="dialog" aria-labelledby="sesionModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title" id="sesionModalLabel">Ingresa tus datos</span>
      </div>
      <div class="modal-body">
        <form action="../includes/login.php" method="post" id="login-form" onsubmit="return check_required_login(this)">
            <div class="form-group">
                <label for="EmailInput">Email address</label>
                <input type="text" name="user" class="form-control required-login" id="EmailInput" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="PassInput">Password</label>
                <input type="password" name="password" class="form-control required-login" id="PassInput" placeholder="Password">
            </div>
            <!-- Break -->
            <div class="12u$ modal-footer">
                <ul class="actions">
                    <li><input type="submit" value="Aceptar"></li>
                </ul>
            </div>
        </form>
        <form action="register.php" method="post"  id="register-form" onsubmit="return check_required_inputs(this)">
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="username" id="username" placeholder="Nombre de usuario" class="required">
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="password" name="password" id="password" placeholder="Contraseña" class="required">
                </div>
                <!-- Break -->
                <div class="12u$">
                    <input type="text" name="name" id="name" placeholder="Nombre" class="required">
                </div>
                 <!-- Break -->
                 <div class="12u$">
                    <input type="text" name="lastName" id="lastName" placeholder="Apellido" class="required">
                </div>
                <!-- Break -->
                <div class="12u$">
                    <input type="date" name="birthName" id="birthName" placeholder="Fecha de nacimiento" class="required">
                </div>
                <!-- Break -->
                <div class="12u$">
                    <label>Genero</label>       
                </div>
                <div class="4u 12u$(small)">
                    <input type="radio" id="gender-f" name="gender" checked>
                    <label for="gender-f">Femenino</label>
                </div>
                <div class="4u 12u$(small)">
                    <input type="radio" id="gender-m" name="gender">
                    <label for="gender-m">Masculino</label>
                </div>
                <!-- Break -->
                <div class="12u$">
                    <div class="select-wrapper">
                        <select name="secQuestion" id="secQuestion" class="required">
                            <option value="">Pregunta de seguridad</option>
                            <option value="1">Apellido paterno de la madre</option>
                            <option value="2">Nombre del hemrano mayor</option>
                            <option value="3">Nombre de la mascota</option>
                            <option value="4">Mejor amigo de la infancia</option>
                        </select>
                    </div>
                </div>
                <!-- Break -->
                <div class="12u$">
                    <input type="text" name="secAnswer" id="secAnswer" placeholder="Pregunta de seguridad" class="required">
                </div>
                <!-- Break -->
                <div class="12u$ modal-footer">
                    <ul class="actions">
                        <li><input type="submit" value="Aceptar"></li>
                    </ul>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>



