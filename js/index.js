let categoria = document.getElementById("categoria").value;
let genero = document.querySelector('input[name="genero"]:checked').value; //radio buttons

do{

} while(categoria == "Bebida") 


while (categoria == "Bebida"){
    console.log("Es una bebida");

}

for(let i = 0 ;i < 100 ; i++){
    console.log("Es una bebida");       
}


switch(categoria){
    case 'Bebida':  
        console.log("");
        break;
    case 'Aseo' : 
        console.log("");
        break;
    default:
        console.log("");
}

if (categoria != "Bebida"){
    console.log("Es una bebida");
}else if(categoria == "Aseo"){
    console.log("Es un V");
}else {
    console.log("ninguna de las anteriores")
}

/**
& -> AND (V)
|| -> OR (V)


(V) & (V) = V
(V) || (F) = V 


AND , NOT , OR  -> SQL / PYTHON
&& , ! , || -> JS
<
>
>=
<=
!=
!
 */

let nombre = document.getElementById("nombre").value;
let apellidos = document.getElementById("apellidos").value;

function Saludar(){
    console.log(`Bienvenido: ${nombre} ${apellidos}`);
}

onclick
onblur
onchange
onfocus