import React, { useState } from 'react';
import './Calculadora.css';

function Calculadora() {
  const [nombre, setNombre] = useState('');
  const [practica, setPractica] = useState('');
  const [problemas, setProblemas] = useState('');
  const [teorica, setTeorica] = useState('');
  const [resultado, setResultado] = useState(null);
  const [error, setError] = useState(null);
  const [alumnosCalculados, setAlumnosCalculados] = useState([]);

  const calcularCalificacion = (event) => {
    event.preventDefault();

    if (nombre === '') {
      if (alumnosCalculados.length > 0) {
        console.log('Calificaciones Calculadas:', alumnosCalculados);
      }
      setNombre('');
      setPractica('');
      setProblemas('');
      setTeorica('');
      setResultado(null);
      setError(null);
      return;
    }

    const practicaNum = parseFloat(practica);
    const problemasNum = parseFloat(problemas);
    const teoricaNum = parseFloat(teorica);

    if (
      isNaN(practicaNum) || isNaN(problemasNum) || isNaN(teoricaNum) ||
      practicaNum < 0 || practicaNum > 10 ||
      problemasNum < 0 || problemasNum > 10 ||
      teoricaNum < 0 || teoricaNum > 10
    ) {
      setResultado(null);
      setError('Error: Las notas deben estar entre 0 y 10.');
      return;
    }

    const notaFinal = (practicaNum * 0.10) + (problemasNum * 0.50) + (teoricaNum * 0.40);
    const nuevoResultado = { nombre, notaFinal: notaFinal.toFixed(2) };
    setResultado(nuevoResultado);
    setError(null);
    setAlumnosCalculados([...alumnosCalculados, nuevoResultado]);

    // Limpiar el formulario para el siguiente alumno
    setNombre('');
    setPractica('');
    setProblemas('');
    setTeorica('');
  };

  return (
    <div className="container">
      <h2>Calculadora de Calificaciones</h2>
      <form onSubmit={calcularCalificacion}>
        <div>
          <label htmlFor="nombre">Nombre del Alumno:</label>
          <input
            type="text"
            id="nombre"
            value={nombre}
            onChange={(e) => setNombre(e.target.value)}
          />
        </div>
        <div>
          <label htmlFor="practica">Nota Práctica (0-10):</label>
          <input
            type="number"
            id="practica"
            min="0"
            max="10"
            value={practica}
            onChange={(e) => setPractica(e.target.value)}
          />
        </div>
        <div>
          <label htmlFor="problemas">Nota Problemas (0-10):</label>
          <input
            type="number"
            id="problemas"
            min="0"
            max="10"
            value={problemas}
            onChange={(e) => setProblemas(e.target.value)}
          />
        </div>
        <div>
          <label htmlFor="teorica">Nota Teórica (0-10):</label>
          <input
            type="number"
            id="teorica"
            min="0"
            max="10"
            value={teorica}
            onChange={(e) => setTeorica(e.target.value)}
          />
        </div>
        <button type="submit">Calcular Calificación</button>
      </form>

      {resultado && (
        <div className="resultado">
          <h3>Resultado:</h3>
          <p>{resultado.nombre} - Nota Final: {resultado.notaFinal}</p>
        </div>
      )}

      {error && (
        <div className="error">
          <p>{error}</p>
        </div>
      )}
    </div>
  );
}

export default Calculadora;
