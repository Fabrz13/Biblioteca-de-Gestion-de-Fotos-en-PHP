Funcionalidades:

Gestión de Fotos:
Registrar Fotos:
-Permite añadir nuevas fotos a la biblioteca con detalles relevantes, como el nombre y la descripción.
Editar Fotos:
-Modifica los detalles de una foto existente.
-Eliminar Fotos:
Elimina fotos de la biblioteca de forma permanente.
-Actualizar Información:
Actualiza la información asociada a las fotos.

Exportación de Datos:
-Exporta los datos de las fotos almacenadas en un formato adecuado (por ejemplo, PDF o CSV) utilizando bibliotecas como TCPDF.

Visualización de Fotos:
-Proporciona una interfaz para listar y visualizar las fotos registradas en la biblioteca.

Formulario Interactivo:
-Utiliza formularios dinámicos para facilitar la interacción del usuario con el sistema.

Estructura del Proyecto:
-actualizar_foto.php: Actualiza la información de una foto existente.
-borrar_foto.php: Elimina una foto de la base de datos.
-conexion.php: Maneja la conexión con la base de datos.
-editar_foto.php: Proporciona una interfaz para editar fotos.
-exportar_foto.php: Exporta los datos de las fotos a formatos como PDF o CSV.
-formulario_foto.php: Genera el formulario para registrar nuevas fotos.
-head.php: Contiene el encabezado común del proyecto.
-index.php: Página principal para listar y visualizar las fotos.
-registrar_foto.php: Procesa el registro de nuevas fotos.

# Biblioteca de Gestión de Fotos en PHP

## Descripción
Este proyecto es un sistema web desarrollado en PHP para gestionar una biblioteca de fotos.
Ofrece funcionalidades completas para registrar, editar, eliminar y exportar fotos, además de proporcionar una interfaz de usuario interactiva para visualizar y manejar las fotos.

## Funcionalidades
- **Registrar Fotos:** Añadir nuevas fotos a la biblioteca con sus respectivos detalles.
- **Editar Fotos:** Modificar información existente de una foto.
- **Eliminar Fotos:** Eliminar fotos no deseadas de la base de datos.
- **Actualizar Información:** Actualizar datos relacionados con las fotos almacenadas.
- **Exportar Datos:** Exportar información de las fotos en formatos como PDF o CSV.
- **Visualización:** Mostrar una lista completa de las fotos registradas en el sistema.

## Requisitos
- **Servidor Web:** Apache, Nginx o similar con soporte para PHP.
- **PHP:** Versión 7.4 o superior.
- **Base de Datos:** MySQL o MariaDB.
- **Dependencias Adicionales:**
  - Biblioteca TCPDF para la exportación de datos.

## Instalación

### **1. Clonar el Repositorio**
Clona este proyecto en tu servidor local:
```bash
git clone https://github.com/tu_usuario/tu_repositorio.git
