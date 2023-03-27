<form

  class="row g-3 needs-validation"
  novalidate method="POST" enctype="multipart/form-data" 
  action="../../../back-end/controladores/usuario_login_controlador.php">

  <input type="hidden" name="opcion" value="1">
  <input type="hidden" name="id">


 
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Nombre</label>
    
    <input type="text" class="form-control" id="validationCustom02" name="nombre" required>

  </div>
  <div class="input-group has-validation">

  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Apellido</label>
    
    <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
    <!--     <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-5">
    <label for="validationCustom03" class="form-label">Email</label> 
    <span  id="inputGroupPrepend">@ <input type="text" class="form-control" id="validationCustom03" name="email" required></span>
    
    
    <!--     <div class="invalid-feedback">
      Please provide a valid city.
    </div> -->
  </div>

  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom02" name="password" required> 
    
  </div>

  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Alias</label>
    <input type="text" class="form-control" id="validationCustom02" name="alias" required> 
    
  </div>

 

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Imagen</label>
    <input accept="image/*" input type="file" class="form-control" id="validationCustom03" name="imagen" required>
    <!--     <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Estado</label>
          <select class="form-select" id="validationCustom04" name="estado" required>
            <option selected disabled value="">Elige</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select>
<!--        <div class="valid-feedback">
            Perfecto!
          </div>3
          <div class="invalid-feedback">
            Por favor seleccione un campo
          </div>
        </div> -->
        </div>

     <!--    <div class="col-md-12">
      <label for="validationCustom06" class="form-label">Imagen</label>
      <input accept="image/*" input type="file" class="form-control" id="validationCustom03" name="imagen" required> -->
<!--       <div class="valid-feedback">
        Perfecto!
      </div> -->
<!--       <div class="invalid-feedback">
        Por favor ingrese un campo valido
      </div> -->
    </div> 
        

       



<!--   <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div> -->

<br>
  <div class="col-3">
    <button class="btn btn-primary" type="submit">Guardar registro</button>
  </div>

</form>


<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>