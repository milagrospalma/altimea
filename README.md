# Altimea
Página web oficial de Altimea

* Jefe de proyecto: Carlos García *<carlos.garcia@altimea.com>*
* Líder técnico: Hegel Chamba *<hegel.chamba@altimea.com>*

## ¿Cómo montar el proyecto en local?
* Clonar el repositorio al lugar de tu elección
* Hacer una copia del archivo wp-config-template.php (**IMPORTANTE** hacer una copia a partir de este archivo para tener las variables necesarias.)
* Modificar el archivo anterior modificando la url donde va a estar tu proyecto localmente, así como el usuario, clave y nombre de la base de datos. En total, se deberá cambiar los siguientes valores:

>define( 'WP_ENV', 'dev' ); para ambiente de desarrollo

>define('WP_HOME','http://local.altimea.com/');

>define('WP_SITEURL','http://local.altimea.com/');

>define('DB_NAME', 'nombredetubasededatos');

>define('DB_USER', 'nombredeusuario');

>define('DB_PASSWORD', 'contraseña');

* Modificar el archivo **app/assets/themes-developing/altimea/gulpconfig.js**. Cambiar el valor del proxy de BrowserSync al dominio que le hayas asignado al proyecto en tus virtualhost. Ejemplo:

```javascript
browsersync: {
  files: [build+'/**', '!'+build+'/**.map'] // Exclude map files
, notify: false // In-line notifications (the blocks of text saying whether you are connected to the BrowserSync server or not)
, open: true // Set to false if you don't like the browser window opening automatically
, port: 3000 // Port number for the live version of the site; default: 3000
, proxy: 'local.altimea.com' // We need to use a proxy instead of the built-in server because WordPress has to do some server-side rendering for the theme to work
, watchOptions: {
    debounceDelay: 2000 // This introduces a small delay when watching for file change events to avoid triggering too many reloads
  }
},
```
* Asegurarse de tener instalado nodejs/npm y su paquete gulp
    * Para instalar los paquetes ejectuar:
        * sudo npm install -g gulp
* Abrir una terminal en **app/assets/themes-developing/altimea/** y ejectuar los siguientes comandos:
    * npm install
* Copiar los archivos Jenkins y Dockerfile de **project_files_templates** a la carpeta **altimea/**
* Renombrar la carpeta **altimeafactory-disabled**
* Copiar el archivo htaccess de **project_files_templates** a la carpeta **altimea/app/**
* Ejecutar la primera construcción de la plantilla con el siguiente comando dentro de la misma terminal que la anterior:
    * gulp build
* El comando anterior debió de generar una nueva carpeta de nombre 'build' que será donde esten los archivos que se van a cargar en WordPress
* Crear un enlace simbólico desde nuestra nueva carpeta build hacia **app/assets/themes/altimea**. Por ejemplo:
    * **(Linux)** - ln -s /var/www/html/altimea/app/assets/themes-developing/altimea/build /var/www/html/altimea/app/assets/themes/altimea
    * **(Windows)** - mklink /D C:\xampp\htdocs\altimea\app\assets\themes\altimea C:\xampp\htdocs\altimea\app\assets\themes-developing\altimea\build
* En la misma terminal de antes, situada en **app/assets/themes-developing/altimea/** ejecutar:
    * gulp
* El comando anterior hará todas las tareas automáticas configuradas y abrirá un nuevo navegador con el WordPress. Notar que la url que os dará será **http://localhost:3000**. Esta url será la que se podrá usar para ver en tiempo real los cambios que se hagan en el código, pero también estará disponible la url que hayas configurado en tu virtualhost, salvo que tendras que recargar manualmente cada vez que quieras ver un cambio. Ambas url funcionan al 100%


## Organización del proyecto
**IMPORTANTE:** Todo el desarrollo se realiza en la carpeta *app/assets/themes-developing/altimea/src/* y es la herramienta GULP la encargada de colocar todo como debe.

#### Estilos
Se está usando Sass como precompilador de CSS. Podrás encontrar toda la jerarquía de archivos en:
```
app/assets/themes-developing/altimea/src/scss/
```

* El archivo style.css solo se modificará para añadir librerías externas de CSS. Actualmente, el proyecto emplea:
    * Bourbon: Colección de mixins
    * Normalize
* La carpeta base contiene archivos generales a toda la aplicación:
    * _animations.scss: Animaciones CSS
    * _fonts.scss: Fuentes
    * _globals.scss: Estilos globales por ejemplo aplicados a body, html, a...
    * _helpers.scss: Clases para facilitarte la vida como para convertir a uppercase.
    * _icons.scss: Iconos CSS
    * _variables.scss: Definición de las variables SCSS a usar en el proyecto.
* La carpeta responsive será la contenedora de todas aquellas clases encargadas de ajustar la vista a diferentes dispositivos.
* La carpeta sections contendrá los estilos en archivos individuales de cada sección (contacto, ayuda, header, footer...)

### Javascripts
Se configuró el proyecto para que separe nuestros scripts en 2 archivos.
* Los plugins o librerías externas irán almacenados en altimeajs-plugins.js. Estas librerías se deberán instalar mediante npm y es necesario modificar el archivo gulpconfig.js para indicarle los nuevos scripts.
* Nuestro código de aplicación irá en altimeajs-core.js

El archivo core.js que será donde trabajaremos nuestra aplicación se encuentra en **app/assets/themes-developing/altimea/src/js/**

NOTA: Los plugins de terceros que se instalen en WordPress es posible que inserten más scripts, pero en todo caso serán insertados en el footer.

### PHP
Los archivos PHP se intentarán ordenar en lo máximo posible dentro de **app/assets/themes-developing/altimea/src/inc/**, a excepción de los Templates

Actualmente se encuentran 5 carpetas y un archivo ahí:

* assets.php: Este archivo es el encargado de encolar estilos y javascripts de nuestra plantilla.
* actions: Aquí crearemos nuestros actions de WordPress
* filters: Aquí crearemos nuestros filters de WordPress
* custom_posts: Aquí crearemos nuestros custom_posts de WordPress
* custom_fields: Aquí especificaremos los custom fields creados con la herramienta "Advanced Custom Fields"

- Los Templates estarán en la carpeta **app/assets/themes-developing/altimea/src/templates/**

### Imágenes
Durante el proceso de creación de la versión de producción se optimizan todas las imágenes que tengamos en nuestra plantilla.

Las imágenes se almacenan en **app/assets/themes-developing/altimea/src/images/**

**IMPORTANTE:** Siempre que sea posible, organizar las imágenes en subcarpetas para mantener un órden.

Para enlazar imágenes en los CSS, hay una variable que te da el root de la carpeta que las contiene llamada **$imagesPath**

### Fuentes
Las fuentes se encuentran ordenadas en subcarpetas por su familia en **app/assets/themes-developing/altimea/src/fonts/**

Las fuentes se declaran en el archivo de fuentes de Sass utilizando un mixin de Bourbon para conseguir importar todos los formatos en una sola línea. Ejemplo:

```
@include font-face("dinnext-regular", $icon-font-path + "dinnext/DINNextLTPro-Regular", $file-formats: eot woff ttf svg);
```


## Otras consideraciones a la hora de trabajar en el proyecto

* El idioma principal del proyecto es el Inglés
    * Todas las variables deberán ser especificadas en inglés, tanto de PHP, javascript como clases de CSS
    * Es preferible que se comente el código en inglés, pero en este caso podrá ser usado el español si se va a representar mejor la información que quieres transmitir.
* La tabulación por defecto del proyecto es tabulación de 4 tabs. Esta configuración está especificada en el archivo .editorconfig
* Es primordial contar con una extensión para linteo de javascripts en el editor que se vaya a utilizar. Por ejemplo:
    * Atom Editor: jshint (https://atom.io/packages/jshint)
    * Sublime Text Editor: Sublime JSHint (https://github.com/victorporof/Sublime-JSHint)
* El HTML deberá ser correctamente formateado en cascada evitando comprimir varias etiquetas en una sola línea para poder leer más fácilmente el código. Una herramienta automatizada es la encargada luego de comprimir todo el HTML.
* No dejar atributos HTML vacíos como name o id. Si no se necesitan no se ponen.
* No dejar código comentado salvo casos de fuerza mayor. Si se necesita ver versiones anteriores de código se usará GIT.
* En la cabecera de nuestras funciones, poner un pequeño comentario con la funcionalidad de esa función, así como detallar qué parámetros recibe la función y qué devuelve, si es que devuelve algo. Ejemplo:

```
/**
 * Method to change the graph to the selected time frame
 * @param  {string} type "Type of group to return its value"
 * @param  {array} item
 */
```

* Los mensajes de los commits de GIT serán escritos en Español, ya que es algo que podría ver el cliente.



# Despliegue a PRD
Se realíza esta configuracion para los pasos de despliegue al ambiente productivo (version 0.0.1)
- Se creo el archivo JenkinsFile