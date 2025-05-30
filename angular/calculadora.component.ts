import { Component } from '@angular/core';

interface Alumno {
  nombre: string;
  practica: number | null;
  problemas: number | null;
  teorica: number | null;
}

interface Resultado {
  nombre: string;
  notaFinal: number;
}

@Component({
  selector: 'app-calculadora',
  templateUrl: './calculadora.component.html',
  styleUrls: ['./calculadora.component.css']
})
export class CalculadoraComponent {
  alumno: Alumno = {
    nombre: '',
    practica: null,
    problemas: null,
    teorica: null
  };
  resultado: Resultado | null = null;
  error: string | null = null;
  alumnosCalculados: Resultado[] = [];

  calcularCalificacion() {
    if (!this.alumno.nombre) {
      this.resultado = null;
      this.error = null;
      if (this.alumnosCalculados.length > 0) {
        console.log('Calificaciones Calculadas:', this.alumnosCalculados);
      }
      this.alumno = { nombre: '', practica: null, problemas: null, teorica: null };
      return;
    }

    if (this.alumno.practica === null || this.alumno.problemas === null || this.alumno.teorica === null ||
        this.alumno.practica < 0 || this.alumno.practica > 10 ||
        this.alumno.problemas < 0 || this.alumno.problemas > 10 ||
        this.alumno.teorica < 0 || this.alumno.teorica > 10) {
      this.resultado = null;
      this.error = 'Error: Las notas deben estar entre 0 y 10.';
      return;
    }

    const notaFinal = (this.alumno.practica * 0.10) + (this.alumno.problemas * 0.50) + (this.alumno.teorica * 0.40);
    this.resultado = { nombre: this.alumno.nombre, notaFinal: notaFinal };
    this.error = null;
    this.alumnosCalculados.push(this.resultado);

    // Limpiar el formulario para el siguiente alumno
    this.alumno = { nombre: '', practica: null, problemas: null, teorica: null };
  }
}
