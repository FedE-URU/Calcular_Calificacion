# Calcular_Calificacion
Repositorio para el ejercicio de cálculo de calificaciones de alumnos implementado en múltiples lenguajes

[![GitHub](https://img.shields.io/github/last-commit/FedE-URU/Calcular_Calificacion?style=flat-square)](https://github.com/FedE-URU/Calcular_Calificacion)
[![GitHub Stars](https://img.shields.io/github/stars/FedE-URU/Calcular_Calificacion?style=flat-square)](https://github.com/FedE-URU/Calcular_Calificacion/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/FedE-URU/Calcular_Calificacion?style=flat-square)](https://github.com/FedE-URU/Calcular_Calificacion/network/members)
[![GitHub Issues](https://img.shields.io/github/issues/FedE-URU/Calcular_Calificacion?style=flat-square)](https://github.com/FedE-URU/Calcular_Calificacion/issues)

## Descripción del ejercicio

> Calcular las calificaciones de un grupo de alumnos.  
> La nota final de cada alumno se calcula según el siguiente criterio:
> 
> - Parte práctica: 10%  
> - Parte de problemas: 50%  
> - Parte teórica: 40%
> 
> El algoritmo debe:
> - Leer el nombre del alumno y sus tres notas.
> - Validar que cada nota esté entre 0 y 10.
> - Calcular y mostrar el resultado si las notas son válidas.
> - Mostrar un mensaje de error y omitir el cálculo si alguna nota es inválida.
> - Repetir el proceso hasta que se ingrese un nombre vacío.

## Lenguajes implementados

- [x] Web
- [ ] Bash
- [ ] C#
- [ ] Python
- [x] React
- [x] Ruby
- [x] Angular
- [x] JavaScript (versión para terminal)

## Estructura de carpetas

El repositorio está organizado de la siguiente manera:

- **web/**: Implementación para navegador usando HTML, CSS y JS.
- **bash/**: Scripts en Bash para ejecución desde terminal Unix.
- **csharp/**: Proyecto en C# usando .NET.
- **python/**: Scripts simples en Python.
- **react/**: Interfaz web con React.
- **ruby/**: Implementación con Ruby.
- **angular/**: Proyecto web con Angular.
- **js-terminal/**: Versión en JavaScript para línea de comandos con Node.js.

## Modo de uso

### JavaScript (Terminal)

1. **Instalar Node.js**  
   [Descargar desde nodejs.org](https://nodejs.org)

2. **Crear archivo `calculador.js`**  
   Ubicarlo dentro de `/js-terminal` y pegar el código fuente.

3. **Ejecutar desde la terminal**  
   ```bash
   node calculador.js

---

### Versión Web

1. **Crear la carpeta `/web`**  
   Dentro de tu proyecto, crear una carpeta llamada `web` (si no existe).

2. **Agregar los siguientes archivos**  
   Dentro de la carpeta `web`, asegurate de tener los siguientes archivos:
   - `calificaciones.html`
   - `estilos.css`
   - `script.js`

3. **Abrir en el navegador**  
   Simplemente abrí el archivo `calificaciones.html` con doble clic o haciendo clic derecho → **"Abrir con"** → tu navegador preferido.

---

### Versión Angular

1. **Crear la carpeta `/angular`**  
   Dentro de tu proyecto, crear una carpeta llamada `angular` (si no existe).

2. **Agregar los siguientes archivos**  
   Dentro de la carpeta `angular`, asegurate de tener los siguientes archivos:
   - `calculadora.component.html`
   - `calculadora.component.css`
   - `calculadora.component.ts`

3. **Integrar en un proyecto Angular existente**  
   Copiá estos archivos en la carpeta `src/app/` de tu proyecto Angular.  
   Luego:

   - Asegurate de **declarar** el componente en `app.module.ts`.
   - Usalo en `app.component.html` con la etiqueta:

     ```html
     <app-calculadora></app-calculadora>
     ```

4. **Ejecutar en el navegador**  
   Desde la terminal, ejecutá el servidor de desarrollo:

   ```bash
   ng serve
5. **Luego abrí tu navegador en:**
   http://localhost:4200

---
---

### Versión Ruby

1. **Instalar Ruby (si no lo tenés)**
   - [Descargar desde ruby-lang.org](https://www.ruby-lang.org/es/downloads/)
   - Luego verificá la instalación con:
     ```bash
     ruby -v
     ```

2. **Crear la carpeta `/ruby`**  
   Dentro de tu proyecto, crear una carpeta llamada `ruby` (si no existe).

3. **Agregar el siguiente archivo**  
   Dentro de la carpeta `ruby`, asegurate de tener el siguiente archivo:
   - `calculador.rb`

4. **Ejecutar en la terminal**  
   Abrí la terminal, navegá a la carpeta `ruby` y ejecutá el script con:

   ```bash
   ruby calculador.rb

---

### Versión React

1. **Instalar Node.js**  
   React necesita Node.js para ejecutarse. Si no lo tenés instalado, descargalo desde:  
   👉 [https://nodejs.org](https://nodejs.org)

2. **Inicializar un nuevo proyecto React**  
   Abrí una terminal y ejecutá:

   ```bash
   npx create-react-app calcular-calificacion
   cd calcular-calificacion
   
3. Ejecutar la aplicación
Desde la raíz del proyecto (donde está el archivo package.json), ejecutá:

   ```bash
   npm start

   
## Contacto

[![GitHub](https://img.shields.io/badge/GitHub-FedE--URU-blue?style=flat-square&logo=github)](https://github.com/FedE-URU)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-federicoesteves-blue?style=flat-square&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/federicoesteves)
