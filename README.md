# API aaPanel

La intención del código es automatizar el proceso de crear sitios o sub dominios en aaPanel, generando el sitio, copiar el contenido que este lleva, generar una base de datos y cargar los datos iniciales a esta.


## Contenidos

A continuacion se detallan los archivos.

| Archivo | Descripción |
| ------ | ------ |
| manager.php | Contiene los llamados para crear en un solo proceso todos los recursos para instalar el aplicativo por sub-dominio|
| config.php | KEY del API para aaPanel y URL del aaPanel |
| api/api_aapanel_mitha.php | API de conectividad con aaPanel |
| addBase.php | Llamados al API para crear la base de datos y cargar un esquema por defecto desde un archivo SQL |
| addSite.php | Llamados al API para crear el sitio y cargar los archivos por defecto al sistema |
| installer.php | Este ejecuta el comando ZIP para desempaquetar los archivos qu ese cargan con addSite.php |
| miSite.zip | Archivo de muestra para cargar y descomprir en el ejemplo |
| miSite.sql | Base de datos SQL de muestra para instalar con la generación de la base |

## Instalación

Recuerde activar en aaPanel el API y generar un nuevo KEY, también autorizar los IP que se van a conectar.


```
Copia los arhivos miSite.zip en la carpeta donde se contienen los sitios, normalmente /www/wwwroot/
Copia el archivo miSite.sql en la carpeta de backup del servidor, normalemente /home/backup/database/
El archivo manager.php puede llevar más programación para realizar la instalación desde una base de datos para realizar el proceso de creación de sitios
```

## License

MIT

**Software Libre!**

**Desarrolla Alfredo Rodríguez - JARS Costa Rica**