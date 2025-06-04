def calcular_calificacion(nombre, practica, problemas, teorica):
    """Calcula la calificación final de un alumno."""
    if not (0 <= practica <= 10 and 0 <= problemas <= 10 and 0 <= teorica <= 10):
        print("Error: Las notas deben estar entre 0 y 10.")
        return None
    nota_final = (practica * 0.10) + (problemas * 0.50) + (teorica * 0.40)
    return nota_final

if __name__ == "__main__":
    while True:
        nombre = input("Nombre del alumno (dejar vacío para terminar): ")
        if not nombre:
            break

        try:
            practica = float(input("Nota práctica (0-10): "))
            problemas = float(input("Nota de problemas (0-10): "))
            teorica = float(input("Nota teórica (0-10): "))
        except ValueError:
            print("Error: Por favor, ingresa números para las notas.")
            continue

        nota_final = calcular_calificacion(nombre, practica, problemas, teorica)
        if nota_final is not None:
            print(f"{nombre} - Nota Final: {nota_final:.2f}\n")

    print("Fin del cálculo de calificaciones.")
