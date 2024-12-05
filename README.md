# Proyecto PHP Consultas Psicología

Este proyecto es una aplicación web desarrollada en PHP que permite consultar citas registradas en una base de datos. A continuación se detallan los componentes principales del proyecto y cómo configurarlo.

## Estructura del Proyecto

```
php-consultas-psicologia
├── src
│   ├── controllers
│   │   └── CitasController.php
│   ├── models
│   │   └── Cita.php
│   ├── views
│   │   ├── citas
│   │   │   └── index.php
│   └── config
│       └── database.php
├── public
│   └── index.php
├── consultaspsicologia.sql
├── composer.json
└── README.md
```

## Requisitos

- PHP 7.4 o superior
- Servidor web (Apache, Nginx, etc.)
- Base de datos MySQL

## Instalación

1. Clona el repositorio en tu máquina local:
   ```
   git clone <URL_DEL_REPOSITORIO>
   ```

2. Navega al directorio del proyecto:
   ```
   cd php-consultas-psicologia
   ```

3. Importa la base de datos utilizando el archivo `consultaspsicologia.sql` en tu servidor MySQL.

4. Instala las dependencias del proyecto utilizando Composer:
   ```
   composer install
   ```

## Configuración de la Base de Datos

Edita el archivo `src/config/database.php` para configurar la conexión a tu base de datos. Asegúrate de proporcionar el nombre de usuario, la contraseña y el nombre de la base de datos correctos.

## Ejecución

Para ejecutar la aplicación, asegúrate de que tu servidor web esté configurado para apuntar al directorio `public`. Luego, accede a la aplicación a través de tu navegador en la dirección correspondiente (por ejemplo, `http://localhost/php-consultas-psicologia/public`).

## Funcionalidades

- Consulta de citas registradas.
- Visualización de citas en una tabla.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir, por favor abre un issue o envía un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT.