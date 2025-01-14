# JAbbBlog

**JAbbBlog** es una aplicación web diseñada para facilitar la creación, lectura y administración de blogs. Esta plataforma ofrece una interfaz moderna, funcionalidades robustas y una experiencia intuitiva para los usuarios. Desarrollado con el framework Laravel, JAbbBlog aprovecha las últimas tecnologías para ofrecer un entorno seguro y eficiente.

## Características

- Registro y autenticación de usuarios.
- Creación, edición y eliminación de blogs.
- Administración de etiquetas y categorías.
- Funcionalidad de búsqueda y filtrado.
- Diseño responsivo para dispositivos móviles.

## Tecnologías Utilizadas

- **Backend**: Laravel 10
- **Frontend**: Blade Templates, TailwindCSS, Livewire
- **Base de Datos**: MySQL
- **Autenticación**: Laravel Jetstream
- **Herramientas Adicionales**: Vite, PostCSS

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto localmente:

1. Clona el repositorio:

   ```bash
   git clone https://github.com/tuusuario/JAbbBlog.git
   cd JAbbBlog
   ```

2. Instala las dependencias del proyecto:

   ```bash
   composer install
   npm install
   ```

3. Copia el archivo de configuración de ejemplo y genera la clave de la aplicación:

   ```bash
    cp .env.example .env
    php artisan key:generate
   ```

4. Configura tu base de datos en el archivo `.env`.

5. Ejecuta las migraciones y los seeders:

   ```bash
   php artisan migrate --seed
   ```

6. Compila los activos del frontend:

   ```bash
   npm run dev
   ```

7. Inicia el servidor local:

   ```bash
   php artisan serve
   ```

8. Accede a la aplicación en tu navegador en `http://localhost:8000`.

## Credenciales de Administrador

Para acceder al panel de administración, utiliza las siguientes credenciales:

- **Correo Electrónico**: jabb@gmail.com
- **Contraseña**: andres123

## Estructura del Proyecto

- `app/` - Contiene los modelos, controladores y lógica de negocio.
- `resources/views` - Plantillas Blade para las vistas del frontend.
- `database/migrations` - Archivos de migración para la base de datos.
- `public/` - Archivos públicos como imágenes y CSS compilado.
- `routes/` - Archivos de rutas web y API.

## Contribuciones

¡Las contribuciones son bienvenidas! Por favor, sigue estos pasos:

1. Haz un fork del proyecto.
2. Crea una rama con una descripción clara de la funcionalidad: `git checkout -b nueva-funcionalidad`.
3. Realiza los cambios y haz commits descriptivos.
4. Envía un pull request explicando tus cambios.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.

---

¡Gracias por usar JAbbBlog! Si tienes preguntas o sugerencias, no dudes en abrir un issue o contactar al equipo de desarrollo.
