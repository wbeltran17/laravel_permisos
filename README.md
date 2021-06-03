## Para mas informacion de Permisos y Roles

https://spatie.be/docs/laravel-permission/v4/basic-usage/basic-usage

## Comando basicos

Instala libreria
composer require spatie/laravel-permission

Publicar provider
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

Copiar la importacion de HashRoles en el modelo user

use Spatie\Permission\Traits\HasRoles;

use HasRoles;

Creo Seeder
Php artisan make:seeder RoleSeeder

Dentro del Seeader importamos los modelos de Roles y permisos

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Creamos Roles y permisos

$role = Role::create(['name' => 'writer']);
$permission = Permission::create(['name' => 'edit articles']);

asignamos permisos a rol o viceversa

$role->syncPermissions($permissions);
$permission->syncRoles($roles);

Agregamos los seeders a la migracion

$this->call([RoleSeeder::class]);

Asigno mi rol a mi usuario
->assignRole('admin');
