function ValidarInformacion() {
    let tipo_documento = document.getElementById("tipo_documento").value;
    let documento_identidad = document.getElementById("documento_identidad").value;
    let contrasena = document.getElementById("contrasena").value;

    if (
        !tipo_documento ||
        !documento_identidad ||
        !contrasena 
    ) {
        console.log(
            `Informacion del Inicio de Sesion: \n
            ${tipo_documento} \n
            ${documento_identidad} \n
            ${contrasena}`
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
            `Informacion del Inicio de Sesion: \n
            ${tipo_documento} \n
            ${documento_identidad} \n
            ${contrasena}`
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