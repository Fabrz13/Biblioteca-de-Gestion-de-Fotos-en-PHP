# Biblioteca de Gestión de Fotos en PHP

## Descripción
**Proyecto Creado Por:** Ing. Fabrizio Castro  

Este proyecto es un **sistema web desarrollado en PHP** que permite gestionar una biblioteca de fotos. Ofrece funcionalidades completas para **registrar**, **editar**, **eliminar** y **exportar fotos**, además de proporcionar una interfaz de usuario interactiva para **visualizar** y **manejar** las fotos registradas en el sistema.

---

## Funcionalidades

### **Gestión de Fotos**
1. **Registrar Fotos:**  
   - Permite añadir nuevas fotos a la biblioteca con detalles relevantes, como el nombre y la descripción.

2. **Editar Fotos:**  
   - Modifica la información existente de una foto.

3. **Eliminar Fotos:**  
   - Elimina fotos de la biblioteca de forma permanente.

4. **Actualizar Información:**  
   - Actualiza los detalles asociados a las fotos almacenadas.

### **Exportación de Datos**
- Exporta la información de las fotos en **formato PDF** utilizando bibliotecas como **TCPDF**.

### **Visualización de Fotos**
- Proporciona una **interfaz interactiva** para listar y visualizar todas las fotos registradas.

### **Formulario Interactivo**
- Utiliza **formularios dinámicos** para facilitar la interacción del usuario con el sistema.

---

## Estructura del Proyecto

### **Archivos Principales**
- **`actualizar_foto.php`:**  
  Actualiza la información de una foto existente.

- **`borrar_foto.php`:**  
  Elimina una foto de la base de datos.

- **`conexion.php`:**  
  Maneja la conexión con la base de datos MySQL.

- **`editar_foto.php`:**  
  Proporciona una interfaz para editar los detalles de las fotos.

- **`exportar_foto.php`:**  
  Exporta los datos de las fotos a **formatos como PDF o CSV**.

- **`formulario_foto.php`:**  
  Genera el formulario para registrar nuevas fotos.

- **`head.php`:**  
  Contiene el **encabezado común** del proyecto.

- **`index.php`:**  
  Página principal para **listar** y **visualizar** las fotos registradas.

- **`registrar_foto.php`:**  
  Procesa el registro de nuevas fotos en la base de datos.

---

## Requisitos

### **Servidor Web**
- Apache, Nginx o similar con soporte para PHP.

### **Lenguaje**
- **PHP:** Versión 7.4 o superior.

### **Base de Datos**
- **MySQL** o **MariaDB**.

### **Dependencias Adicionales**
- Biblioteca **TCPDF** para la exportación de datos a PDF.  
  Instala TCPDF si no está presente en tu proyecto.

---

## Instalación

### 1. Clonar el Repositorio
```bash
git clone https://github.com/tu_usuario/tu_repositorio.git
```

### 2. Configurar la Base de Datos
Crea una base de datos en MySQL o MariaDB.

Configura la conexión en el archivo `conexion.php`:
```php
$host = "localhost";
$dbname = "nombre_base_datos";
$username = "usuario";
$password = "contraseña";
```
Importa el archivo SQL (si está disponible) para crear las tablas necesarias.

### 3. Configurar el Servidor
Asegúrate de que tu servidor web (Apache o Nginx) esté configurado para servir archivos PHP desde el directorio del proyecto.

### 4. Instalar Dependencias
Si usas Composer, instala TCPDF con el siguiente comando:
```bash
composer require tecnickcom/tcpdf
```

### 5. Probar el Sistema
Abre el navegador y accede al proyecto usando la URL local:
```
http://localhost/tu_proyecto/index.php
```

## Uso del Sistema

### Registrar una Foto
- Accede al formulario para añadir nuevas fotos.

### Editar o Eliminar una Foto
- Selecciona una foto existente y utiliza las opciones para editar o eliminar.

### Visualizar Fotos
- Visualiza la lista completa de fotos en la página principal.

### Exportar Datos
- Utiliza la opción para exportar los datos de las fotos en formato PDF.

## Notas Importantes
- Asegúrate de tener permisos adecuados en los directorios donde se almacenarán las fotos y los archivos exportados.
- Verifica que la base de datos esté configurada correctamente antes de ejecutar el proyecto.
- Instala todas las dependencias necesarias, como TCPDF, para asegurar el funcionamiento completo del sistema.
