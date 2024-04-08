# 1.Composer
Se debe verificar composer en el sistema para eso en consola lo verificamos con:
```bash
composer -V
```
En el caso de no tenerlo visitar:

* [Composer](https://getcomposer.org/)

# 2. Instalacion de dependencias
Una vez instalado el proyecto en el directorio raíz se debera ejecutar el siguiente comando:
```bash
composer install
```
# 3. Verificar .env
Se debe verificar el estado de DATABASE_URL dentro de .env este debe tener el usuario, la contraseña y la tabla con la que se trabajara, a continuacion se presenta la que se encuentra en el proyecto:

```bash
DATABASE_URL="mysql://root:@127.0.0.1:3306/renta_cargo_db?serverVersion=8&charset=utf8mb4"  
```
A continuacion, se presenta la plantilla de como se debe introducir en el caso de no tener las mismas credenciales
```bash
DATABASE_URL="mysql://user:password@127.0.0.1:3306/tabla_a_trabajar?serverVersion=8&charset=utf8mb4"  
```


4. Ejecución de proyecto
Para ejecutar el proyecto se debera estar en el directorio raiz del proyecto y ejecutar el siguiente comando:

```bash
php -S localhost:8000 -t public   
```


