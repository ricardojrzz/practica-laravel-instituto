# 🏫 Sistema de Gestión de Instituto - Laravel 12

Proyecto final de práctica que implementa un sistema de gestión escolar con autenticación, CRUD de alumnos y multi-idioma.

## 🚀 Funcionalidades
- **Autenticación completa:** Registro, login y logout de usuarios.
- **CRUD de Alumnos:** Gestión total (Crear, Leer, Actualizar, Borrar) con confirmación mediante **SweetAlert**.
- **Gestión de Proyectos:** Lista de proyectos cargada mediante **Seeders** y mostrada en el Dashboard.
- **Internacionalización (i18n):** Traducción completa a **Castellano, Inglés y Francés** con selector de idioma persistente.
- **Diseño Moderno:** Interfaz responsiva usando **Tailwind CSS** y **DaisyUI**.

## 🛠️ Instalación y ejecución
1. Clonar el repositorio.
2. Ejecutar `composer install` y `npm install`.
3. Crear el archivo `.env` y generar la clave: `php artisan key:generate`.
4. Ejecutar migraciones y seeders: `php artisan migrate --seed`.
5. Iniciar servidores: `php artisan serve` y `npm run dev`.

## 📁 Estructura del Proyecto
- `app/Http/Controllers/AlumnoController.php`: Lógica del CRUD.
- `app/Http/Middleware/SetLocale.php`: Gestión de cambio de idioma.
- `lang/`: Archivos de traducción (es, en, fr).
- `resources/views/alumnos/`: Vistas del recurso Alumnos.
