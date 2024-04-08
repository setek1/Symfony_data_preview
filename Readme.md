# 1.Composer
Se debe verificar composer en el sistema para eso en consola introducimos:
```bash
composer -V
```
En el caso de no tenerlo visitar:

* [Composer](https://getcomposer.org/)

# 2. Instalación de dependencias
Una vez instalado el proyecto en el directorio raíz se debera ejecutar el siguiente comando:
```bash
composer install
```
Este comando instalará las dependencias necesarias para poder correr el sistema.
# 3. Verificar .env
Se debe verificar el estado de DATABASE_URL dentro de .env. En el proyecto esta de la siguiente manera:

```bash
DATABASE_URL="mysql://root:@127.0.0.1:3306/renta_cargo_db?serverVersion=8&charset=utf8mb4"  
```
En la cual representa las siguientes credenciales para el acceso a la base de datos:
```json
{
  "host": "localhost",
  "user": "root",
  "password": ""
}
```

En el caso de que se tuvieran otras credenciales para el acceso a la base de datos, acontinación se deja la plantilla para que se pueda introducir sin problemas:
```bash
DATABASE_URL="mysql://user:password@127.0.0.1:3306/tabla_a_trabajar?serverVersion=8&charset=utf8mb4"  
```


# 4. Ejecución de proyecto
Para ejecutar el proyecto se deberá estar en el directorio raíz del proyecto y ejecutar el siguiente comando:

```bash
php -S localhost:8000 -t public   
```


