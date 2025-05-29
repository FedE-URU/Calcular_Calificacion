function calcularCalificacion() {
    const nombre = document.getElementById('nombre').value;
    if (nombre === "") {
        return; // Terminar si el nombre está vacío
    }

    const practica = parseFloat(document.getElementById('practica').value);
    const problemas = parseFloat(document.getElementById('problemas').value);
    const teorica = parseFloat(document.getElementById('teorica').value);

    if (isNaN(practica) || isNaN(problemas) || isNaN(teorica) ||
        practica < 0 || practica > 10 ||
        problemas < 0 || problemas > 10 ||
        teorica < 0 || teorica > 10) {
        document.getElementById('resultado').classList.add('oculto');
        document.getElementById('error').classList.remove('oculto');
        return;
    }

    const notaFinal = (practica * 0.10) + (problemas * 0.50) + (teorica * 0.40);

    document.getElementById('nombre-alumno').textContent = nombre;
    document.getElementById('nota-final').textContent = notaFinal.toFixed(2);
    document.getElementById('error').classList.add('oculto');
    document.getElementById('resultado').classList.remove('oculto');

    // Limpiar el formulario para el siguiente alumno
    document.getElementById('nombre').value = "";
    document.getElementById('practica').value = "";
    document.getElementById('problemas').value = "";
    document.getElementById('teorica').value = "";
}
