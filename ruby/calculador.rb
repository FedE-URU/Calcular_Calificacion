def calcular_calificacion(nombre, practica, problemas, teorica)
  if practica < 0 || practica > 10 || problemas < 0 || problemas > 10 || teorica < 0 || teorica > 10
    puts "Error: Las notas deben estar entre 0 y 10."
    return nil
  end

  nota_final = (practica * 0.10) + (problemas * 0.50) + (teorica * 0.40)
  puts "#{nombre} - Nota Final: #{nota_final.round(2)}"
end

while true
  print "Nombre del alumno (dejar vacío para terminar): "
  nombre = gets.chomp
  break if nombre.empty?

  print "Nota práctica (0-10): "
  practica_str = gets.chomp
  print "Nota de problemas (0-10): "
  problemas_str = gets.chomp
  print "Nota teórica (0-10): "
  teorica_str = gets.chomp

  practica = practica_str.to_f
  problemas = problemas_str.to_f
  teorica = teorica_str.to_f

  calcular_calificacion(nombre, practica, problemas, teorica)
  puts ""
end

puts "Fin del cálculo de calificaciones."
