<!DOCTYPE html>
<html>
<head>
  <title>Página de Pago</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>InvShop - Realiza tu Pago.</h1><br><br>
    <h3>Monto de carrito: $<span id="total_carrito">0.00</span></h3>
    <form>
      <div class="form-group">
        <label for="nombre">Nombre en la tarjeta</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre en la tarjeta" maxlength="50">
      </div>

      <div class="form-group">
        <label for="numero">Número de tarjeta</label>
        <input type="text" class="form-control" id="numero" placeholder="Número de tarjeta" maxlength="16">
      </div>

      <div class="form-group">
        <label for="fecha">Fecha de vencimiento</label>
        <input type="text" class="form-control" id="fecha" placeholder="MM/AA" maxlength="5">
      </div>

      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="text" class="form-control" id="cvv" placeholder="CVV" maxlength="4">
      </div>

      <div class="form-group">
        <label for="pais">País</label>
        <input type="text" class="form-control" id="pais" placeholder="País" maxlength="50">
      </div>

      <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" id="estado" placeholder="Estado" maxlength="50">
      </div>

      <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" maxlength="50">
      </div>

      <div class="form-group">
        <label for="cpp">Código Postal</label>
        <input type="text" class="form-control" id="cpp" placeholder="Código Postal" pattern="\d*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="5">
      </div>

      <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" placeholder="Dirección" maxlength="100">
      </div>

      <div class="form-group">
        <label for="telefono">Número de contacto</label>
        <input type="text" class="form-control" id="telefono" placeholder="Número de contacto" pattern="\d*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10">
      </div>

      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" class="form-control" id="correo" placeholder="Correo electrónico" maxlength="100">
      </div>

      <button type="submit" class="btn btn-primary">Pagar</button><br><br>
      </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>

        <script>
            // Obtener el valor de la variable de localStorage
            var total = localStorage.getItem("total");

            let total_carrito = document.getElementById("total_carrito");
            total_carrito.innerText=total+".00";

            //localStorage.removeItem("total");

        </script>

  </body>
</html>






