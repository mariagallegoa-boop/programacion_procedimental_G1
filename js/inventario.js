function ValidarInformacion() {
    let categoria = document.getElementById("categoria").value;
    let codigo_prodt = document.getElementById("codigo_producto").value;
    let nombre_prodt = document.getElementById("nombre_producto").value;
    let descripcion_prodt = document.getElementById("descripcion_producto").value;
    let cantidad_prodt = document.getElementById("cantidad_productos").value;
    let precio_unitario = document.getElementById("precio_unitario").value;
    let provedor = document.getElementById("provedor").value;

    if (
        !categoria ||
        !codigo_prodt ||
        !nombre_prodt ||
        !descripcion_prodt ||
        !cantidad_prodt ||
        !precio_unitario ||
        !provedor
    ) {
        console.log(
            `Informacion del Producto: \n
            ${categoria} \n
            ${codigo_prodt} \n
            ${nombre_prodt} \n
            ${descripcion_prodt} \n
            ${cantidad_prodt} \n
            ${precio_unitario} \n
            ${provedor}`
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
            `Informacion del Producto: \n
            ${categoria} \n
            ${codigo_prodt} \n
            ${nombre_prodt} \n
            ${descripcion_prodt} \n
            ${cantidad_prodt} \n
            ${precio_unitario} \n
            ${provedor}`
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