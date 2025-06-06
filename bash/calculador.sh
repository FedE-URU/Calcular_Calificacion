#!/bin/bash

calculador() {
  local nombre="$1"
  local practica="$2"
  local problemas="$3"
  local teorica="$4"

  if [[ ! "$practica" =~ ^[0-9]+(\.[0-9]+)?$ ]] || [[ "$practica" -lt 0 || "$practica" -gt 10 ]]; then
    echo "Error: La nota práctica debe ser un número entre 0 y 10."
    return 1
  fi

  if [[ ! "$problemas" =~ ^[0-9]+(\.[0-9]+)?$ ]] || [[ "$problemas" -lt 0 || "$problemas" -gt 10 ]]; then
    echo "Error: La nota de problemas debe ser un número entre 0 y 10."
    return 1
  fi

  if [[ ! "$teorica" =~ ^[0-9]+(\.[0-9]+)?$ ]] || [[ "$teorica" -lt 0 || "$teorica" -gt 10 ]]; then
    echo "Error: La nota teórica debe ser un número entre 0 y 10."
    return 1
  fi

  local nota_final=$(echo "scale=2; ($practica * 0.10) + ($problemas * 0.50) + ($teorica * 0.40)" | bc)
  echo "$nombre - Nota Final: $nota_final"
  return 0
}

while true; do
  read -p "Nombre del alumno (dejar vacío para terminar): " nombre
  if [ -z "$nombre" ]; then
    break
  fi

  read -p "Nota práctica (0-10): " practica
  read -p "Nota de problemas (0-10): " problemas
  read -p "Nota teórica (0-10): " teorica

  calcular_calificacion "$nombre" "$practica" "$problemas" "$teorica"
  echo ""
done

echo "Fin del cálculo de calificaciones."
