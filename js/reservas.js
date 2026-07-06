function ValidarInformacion() {
    let nombre_completo = document.getElementById("nombre_completo").value;
    let fecha_reserva = document.getElementById("fecha_reserva").value;
    let cantidad_personas = document.getElementById("cantidad_personas").value;

    if (
        !nombre_completo ||
        !fecha_reserva ||
        !cantidad_personas 
    ) {
        console.log(
            `Informacion del de la Reserva: \n
            ${nombre_completo} \n
            ${fecha_reserva} \n
            ${cantidad_personas}`
        );
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "Campos Incompletos",
            showConfirmButton: false,
            timer: 1500
        });
    }
    else {
        console.log(
            `Informacion de la Reserva: \n
            ${nombre_completo} \n
            ${fecha_reserva} \n
            ${cantidad_personas}`
        );
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Informacion Guardada Correctamente",
            showConfirmButton: false,
            timer: 1500
        });
    }
}

document.getElementById("btnGuardar").onclick = ValidarInformacion;