function crearCliente() {

    var vcedula = document.getElementById("cedula").value;
    var vfechaIng = document.getElementById("fecha_ing").value;

    var vplacas = document.getElementById("placas").value;
    var vmarca = document.getElementById("marca").value;
    var vmodelo = document.getElementById("modelo").value;

    if (vcedula == "" || vfechaIng == "" || vplcas === "" || vmarca == "" || vmodelo == "") {
        //alert("here");
        document.getElementById("respuesta").innerHTML = "<br><p><em>Rellene los campos necesarios...</em></p>";
    } else {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("POST", "controlador_tickets.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            //alert("llegue "+this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("respuesta").innerHTML = this.responseText;
            }
        };

        xmlhttp.send("cedula=" + vcedula + "&fecha_ing=" + vfechaIng + "&placas=" + vplacas + "&marca=" + vmarca + "&modelo=" + vmodelo);
    }
    return false;

}