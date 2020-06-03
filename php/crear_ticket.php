<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="formulario.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="../javasc/controlador.js" type="text/javascript"></script>
</head>

<body >

    <h1>Crear Ticket</h1>

    <form id="formulario01" onsubmit="return crearCliente()">
        <!-- <fieldset> -->
            <!-- <label hidden="disable" for="numero">Numero :</label> -->
            <input hidden="disable" maxlength="10" type="text" id="numero" name="numero" value="" placeholder="Ingrese el número de cedula ..." />
            <span id="mensajeCedula" class="error"></span>
            <br>

            <label for="cedula">Cedula Cliente :</label>
            <input maxlength="10" type="text" id="cedula" name="cedula" value="" placeholder="Ingrese la cedula" />
            <span id="mensajeFecha" class="error"></span>
            <label for="respues" id="resp" hidden='disable'></label>
            <br>

            <label for="fecha_ing">Fechade Ingreso :</label>
            <input maxlength="10" type="date" id="fecha_ing" name="fecha_ing" value="" placeholder="Fecha de Ingreso" />
            <span id="mensajeFecha" class="error"></span>
            <br>

           
            <label for="placas">Placas del Vehiculo :</label>
            <input type="text" id="placas" name="placas" value="" placeholder="Ingrese las placas del vehiculo" />
            <span id="mensajeDireccion" class="error"></span>
            <br>

            <label for="marca">Marca :</label>
            <input type="text" id="marca" name="marca" value="" placeholder="Ingrese la marca" />
            <span id="mensajeTelefono" class="error"></span>
            <br>

            <label for="modelo">Modelo :</label>
            <input type="text" id="modelo" name="modelo" value="" placeholder="Ingrese su correo electrónico ...">
            <span id="mensajeEmail" class="error"></span>
            <br>
            
            <button type="submit" id="crear" name="crear" onclick="crearCliente()">Acept</button>
            <!-- <button type="reset" id="cancelar" name="cancelar" value="Cancelar"> Cancelar </button> -->


        <!-- </fieldset> -->

        <!-- <div>
            <input type="button" id="buscar" name="buscar" value="Aceptar" onclick="crearUsuario()">
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
        </div> -->

        <div id="respuesta"></div>

    </form>

</body>

</html>