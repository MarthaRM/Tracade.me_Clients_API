# API Clientes Tracade.me

#Documentación

Se utiliza Laravel Passport como herramienta de autentificación con API

## Servidor
para correr el servidor donde la api estara montada de manera local, ejecutar el siguiente comando

```
php artisan serve --port 8000
```

## Rutas
Las rutas se crean en *routes/api.php*.

Se debe agregar el prefijo *api* a la ruta ejemplo:

*localhost:8000/api/signup*

## CRUDs
**Ruta API local:** local:8000/api/

**Headers:**

Content-Type: application/json

X-Requested-With: XMLHttpRequest

### Plan
##### Create
Ruta: *register-plan*

Json:
```json
{
    "pla_nombre": "nombre",
    "pla_tipo_plan": "tipo",
    "pla_precio": "000.00",
    "pla_descripcion": "descripcion",
    "pla_numero_alumnos": "000"
} 
```
##### Read
##### Update
##### Delete

### Academia
##### Create
Ruta: *register-academy*

Json:
```json
{
    "aca_nombre": "nombre",
    "aca_status": "status",
    "aca_num_alumnos": "000",
    "aca_fecha_corte": "yyyy/mm/dd",
    "aca_adeudo": "000.00",
    "pla_id": "0"
} 
```
##### Read
##### Update
##### Delete

### Usuario (Administrador)
##### Create
Ruta: *signup*

Json:
```json
{
    "name": "Nombre",
    "email": "example@mail.com",
    "password": "password",
    "password_confirmation": "password",
    "adm_apellido_paterno": "Apellido",
    "adm_apellido_materno": "Apellido",
    "adm_metodo_de_pago": "metodo"
} 
```
##### Read
##### Update
##### Delete

### Pago
##### Create
Ruta: *register-payment*

Json:
```json
{
  "pag_fecha": "yyyy/mm/aa",
  "pag_cantidad": "000.00",
  "aca_id": "1"    
} 
```
##### Read
##### Update
##### Delete