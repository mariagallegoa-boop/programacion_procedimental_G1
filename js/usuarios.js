function ValidarInformacion() {
    let nombres = document.getElementById("nombres").value;
    let apellidos = document.getElementById("apellidos").value;
    let tipo_documento = document.getElementById("tipo_documento").value;
    let documento_identidad = document.getElementById("documento_identidad").value;
    let telefono = document.getElementById("telefono").value;
    let email = document.getElementById("email").value;
    let genero = document.querySelector('input[name="genero"]:checked').value;
    let cargo = document.getElementById("cargo").value;
    let fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
    let contrasena = document.getElementById("contrasena").value;


    if (
        !nombres || !apellidos ||
        !tipo_documento || !documento_identidad ||
        !telefono || !email ||
        !genero || !cargo ||
        !fecha_nacimiento || !contrasena
    ) {
        console.log(
            `Informacion del Usuario: \n
            ${nombres} \n ${apellidos} \n
            ${tipo_documento} \n ${documento_identidad} \n
            ${telefono} \n ${email} \n
            ${genero} \n ${cargo} \n
            ${fecha_nacimiento} \n ${contrasena}`
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
            `Informacion del Usuario: \n
            ${nombres} \n ${apellidos} \n
            ${tipo_documento} \n ${documento_identidad} \n
            ${telefono} \n ${email} \n
            ${genero} \n ${cargo} \n
            ${fecha_nacimiento} \n ${contrasena}`
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