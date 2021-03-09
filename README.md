## Prueba de TWGroup - Laravel

Clonar repo

```
git clone git@github.com:raicoacosta/test-twgroup.git
```

Colocarse en la carpeta del proyecto e instalar dependecias de php
```
cd ~/test-twgroup && composer install
```

Configura las credenciales en el archivo `.env`

Corre migraciones y seeds
 ```
 php artisan migrate --seed
 ```

Arranca el servidor

```
php artisan serve
```

Usuario `admin@twgroup.cl`
Password `password`