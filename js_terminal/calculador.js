// PASO 1: Instalar Node.js si no está instalado
// Puedes descargarlo desde: https://nodejs.org

// ===============================
// PASO 2: Crear un archivo llamado calcularNota.js
// Copiar este código dentro del archivo.

// ===============================
// PASO 3: Ejecutar el programa desde la terminal:
// > node calcularNota.js

// ===============================
// PASO 4: Seguir las instrucciones en pantalla:
// Se pedirá ingresar el nombre del alumno y las tres notas.
// El programa validará los datos e imprimirá la nota final.
// ===============================

const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function pedirDato(pregunta) {
    return new Promise((resolve) => {
        rl.question(pregunta, (respuesta) => {
            resolve(respuesta);
        });
    });
}

async function calcularCalificacion() {
    const nombre = await pedirDato("Ingrese el nombre del alumno: ");
    if (nombre.trim() === "") {
        console.log("El nombre no puede estar vacío.");
        rl.close();
        return;
    }

    const practica = parseFloat(await pedirDato("Nota de práctica (0 a 10): "));
    const problemas = parseFloat(await pedirDato("Nota de problemas (0 a 10): "));
    const teorica = parseFloat(await pedirDato("Nota teórica (0 a 10): "));

    if (
        isNaN(practica) || isNaN(problemas) || isNaN(teorica) ||
        practica < 0 || practica > 10 ||
        problemas < 0 || problemas > 10 ||
        teorica < 0 || teorica > 10
    ) {
        console.log("Error: Todas las notas deben ser números entre 0 y 10.");
        rl.close();
        return;
    }

    const notaFinal = (practica * 0.10) + (problemas * 0.50) + (teorica * 0.40);
    console.log(`\nNombre del alumno: ${nombre}`);
    console.log(`Nota final: ${notaFinal.toFixed(2)}`);

    rl.close();
}

calcularCalificacion();
