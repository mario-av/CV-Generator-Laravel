
# 📚 Generador de Perfiles de Alumnos

Este es un proyecto de aplicación web simple construido con **Laravel** que permite gestionar un **CRUD** (Crear, Leer, Actualizar, Borrar) completo de perfiles de alumnos. Incluye subida de imágenes y una función para "Imprimir como PDF".

El proyecto está diseñado para ser un portafolio o una herramienta de gestión simple, por lo que **no incluye autenticación** (es un CRUD público).

-----

## 🚀 Características Principales

  * **CRUD de Alumnos:** Gestión completa de perfiles de alumnos.
  * **Gestión de Fotos:** Subir, actualizar y eliminar la fotografía de perfil de cada alumno.
  * **Campos Personalizados:** Incluye campos como `nota_media`, `formación` y `habilidades`.
  * **Imprimir a PDF:** Un botón en la vista de detalle que utiliza el CSS `@media print` y JavaScript (`window.print()`) para generar un PDF limpio del perfil del alumno.
  * **Lógica de Almacenamiento:** Utiliza el `Storage` de Laravel para manejar los archivos de imagen, borrando la foto antigua cuando se sube una nueva.

-----

## 🛠️ Stack Tecnológico

  * **Backend:** PHP / **Laravel 10**
  * **Frontend:** Blade Templates (HTML y CSS)
  * **Base de Datos:** MySQL
  * **Servidor:** XAMPP (o similar, como Laragon, Herd)

-----

## ⚙️ Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local.

**1. Clonar el Repositorio**

```bash
git clone [URL_DE_TU_REPOSITORIO]
cd [NOMBRE_DE_TU_CARPETA]
```

**2. Instalar Dependencias**

Asegúrate de tener [Composer](https://getcomposer.org/) instalado.

```bash
composer install
```

**3. Configurar el Entorno**

Copia el archivo de entorno de ejemplo y genera la clave de la aplicación.

```bash
cp .env.example .env
php artisan key:generate
```

**4. Configurar la Base de Datos**

1.  Abre tu gestor de base de datos (como phpMyAdmin) y crea una nueva base de datos. (Ej: `alumnos_db`).

2.  Abre el archivo `.env` y actualiza las credenciales de la base de datos:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=alumnos_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

**5. Ejecutar las Migraciones**

Este comando creará la tabla `alumnos` en tu base de datos.

```bash
php artisan migrate
```

**6. Crear el Enlace Simbólico (Symlink)**

¡Este paso es **crítico**\! Permite que las imágenes guardadas en `storage/` sean visibles públicamente.

```bash
php artisan storage:link
```

**7. Iniciar el Servidor**

¡Ya está todo listo\!

```bash
php artisan serve
```

Abre tu navegador y visita `http://127.0.0.1:8000`

-----

## 🗺️ Rutas de la Aplicación

La aplicación utiliza `Route::resource` para una arquitectura RESTful estándar.

  * `GET /` (redirige a `/alumnos`)
  * `GET /alumnos` (Vista `index` - Muestra todos los alumnos)
  * `GET /alumnos/create` (Vista `create` - Formulario para crear)
  * `POST /alumnos` (Ruta `store` - Guarda el nuevo alumno)
  * `GET /alumnos/{id}` (Vista `show` - Muestra un alumno)
  * `GET /alumnos/{id}/edit` (Vista `edit` - Formulario para editar)
  * `PUT /alumnos/{id}` (Ruta `update` - Actualiza el alumno)
  * `DELETE /alumnos/{id}` (Ruta `destroy` - Elimina el alumno)

-----

## 📄 Licencia

Este proyecto está bajo la [Licencia MIT](LICENSE.md).
