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

- [x] HTML + CSS + JS (Web) 
- [x] PHP + MySQL (Web)
- [x] Bash
- [x] C#
- [x] Python
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
   [https://nodejs.org](https://nodejs.org)

2. **Inicializar un nuevo proyecto React**  
   Abrí una terminal y ejecutá:

   ```bash
   npx create-react-app calcular-calificacion
   cd calcular-calificacion
   
3. Ejecutar la aplicación
Desde la raíz del proyecto (donde está el archivo package.json), ejecutá:

   ```bash
   npm start

---

### Versión Python

1. **Crear la carpeta `/python`**  
   Dentro de tu proyecto, crear una carpeta llamada `python` (si no existe).

2. **Agregar el siguiente archivo**  
   - `calculador.py`

3. **Ejecutar desde la terminal**  
   Asegurate de tener Python instalado. Luego, desde la terminal ejecutá:

   ```bash
   python python/calculador.py

---

### C# (Terminal)

1. **Instalar .NET SDK**  
   [Descargar desde dotnet.microsoft.com](https://dotnet.microsoft.com/download)

2. **Crear archivo `Program.cs`**  
   Ubicarlo dentro de la carpeta `/csharp` y pegar el código fuente.

3. **Ejecutar desde la terminal**  
   Abrí una terminal en la carpeta `/csharp` y ejecutá:

   ```bash
   dotnet new console --force
   dotnet run

---

### Bash (Terminal)

1. **Tener Bash disponible**  
   Este script funciona en sistemas Linux, macOS o Windows con WSL o Git Bash instalado.

2. **Crear archivo `calculador.sh`**  
   Ubicarlo dentro de la carpeta `/bash` y pegar el código fuente.

3. **Dar permisos de ejecución (opcional)**  
   Desde la terminal, ejecutar:

   ```bash
   chmod +x bash/calculador.sh

4. **Ejecutar el script**
En la terminal, correr:

   ```bash
   bash bash/calculador.sh

---

### PHP + MySQL (Web)

1. **Requisitos previos**  
   Tener instalado un servidor local como [XAMPP](https://www.apachefriends.org/index.html), [MAMP](https://www.mamp.info/) o similar, que incluya Apache, PHP y MySQL.

2. **Crear base de datos MySQL**  
   Ingresar a **phpMyAdmin** o usar la terminal para ejecutar el contenido de:

   - `php/calificaciones_db.sql`

   > Esto creará la base `calificaciones_db` y sus tablas.

3. **Configurar conexión a la base**  
   Editar el archivo `php/db_config.php` con tus credenciales de MySQL:

   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "calificaciones_db";

4. **Ejecutar en el navegador**
Mover la carpeta php/ dentro de la carpeta htdocs/ de XAMPP o la carpeta raíz de tu servidor.

Luego, abrir el navegador y acceder a:

http://localhost/php/index.php   

   
## Contacto

[![GitHub](https://img.shields.io/badge/GitHub-FedE--URU-blue?style=flat-square&logo=github)](https://github.com/FedE-URU)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-federicoesteves-blue?style=flat-square&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/federicoesteves)
