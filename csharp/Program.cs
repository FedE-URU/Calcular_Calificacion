using System;

namespace CalculadoraCalificaciones
{
    class Program
    {
        static double CalcularCalificacion(double practica, double problemas, double teorica)
        {
            if (practica < 0 || practica > 10 || problemas < 0 || problemas > 10 || teorica < 0 || teorica > 10)
            {
                Console.WriteLine("Error: Las notas deben estar entre 0 y 10.");
                return -1; // Valor para indicar error
            }
            return (practica * 0.10) + (problemas * 0.50) + (teorica * 0.40);
        }

        static void Main(string[] args)
        {
            while (true)
            {
                Console.Write("Nombre del alumno (dejar vacío para terminar): ");
                string nombre = Console.ReadLine();

                if (string.IsNullOrEmpty(nombre))
                {
                    break;
                }

                double practica, problemas, teorica;

                Console.Write("Nota práctica (0-10): ");
                if (!double.TryParse(Console.ReadLine(), out practica))
                {
                    Console.WriteLine("Error: Por favor, ingresa un número válido para la nota práctica.");
                    continue;
                }

                Console.Write("Nota de problemas (0-10): ");
                if (!double.TryParse(Console.ReadLine(), out problemas))
                {
                    Console.WriteLine("Error: Por favor, ingresa un número válido para la nota de problemas.");
                    continue;
                }

                Console.Write("Nota teórica (0-10): ");
                if (!double.TryParse(Console.ReadLine(), out teorica))
                {
                    Console.WriteLine("Error: Por favor, ingresa un número válido para la nota teórica.");
                    continue;
                }

                double notaFinal = CalcularCalificacion(practica, problemas, teorica);
                if (notaFinal != -1)
                {
                    Console.WriteLine($"{nombre} - Nota Final: {notaFinal:F2}\n");
                }
            }

            Console.WriteLine("Fin del cálculo de calificaciones.");
            Console.ReadKey(); // Para que la consola no se cierre inmediatamente
        }
    }
}
