// Vanilla JS 
let valoresSeleccionados = [];
function handleCheckboxChange(checkbox) {
    if (checkbox.checked) {
        // Si el checkbox está seleccionado, agregar su valor al arreglo
        valoresSeleccionados.push(checkbox.value);
    } else {
        // Si el checkbox está deseleccionado, remover su valor del arreglo
        const index = valoresSeleccionados.indexOf(checkbox.value);
        if (index !== -1) {
            valoresSeleccionados.splice(index, 1);
        }
    }
    
    // console.log(valoresSeleccionados); // Muestra el arreglo en la consola para propósitos de depuración

    // valoresSeleccionados.forEach(valor => {
    //     console.log(valor);
    // });

    // Crear un objeto XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Especificar la URL del script PHP que recibirá los datos
    var url = "procesa.php";

    // Convertir el arreglo a JSON
    var datosJSON = JSON.stringify(valoresSeleccionados);

    // Abrir una conexión POST a la URL especificada
    xhr.open("POST", url, true);

    // Establecer el encabezado de la solicitud
    xhr.setRequestHeader("Content-Type", "application/json");

    // Definir la función a ejecutar cuando la solicitud se complete
    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        // Aquí puedes manejar la respuesta del servidor si lo necesitas
        console.log(xhr.responseText);
    }
    };

    // Enviar los datos al servidor
    xhr.send(datosJSON);
}

