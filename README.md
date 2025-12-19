
link repositorio=https://github.com/Horgito51/ConsultorioDental.git
# 🩺 Módulo de Consultas - Laravel

Este proyecto implementa un módulo de **gestión de consultas** desarrollado en **Laravel**, siguiendo el patrón **MVC (Modelo–Vista–Controlador)**.

---

## 🧱 Estructura del módulo

El módulo está compuesto por:

- **Modelo:** `Consulta`
- **Controlador:** `ConsultaController`
- **Migración:** creación de la tabla `consultas`
- **Vistas:** Blade (`index`, `create`, `edit`)

---

## 📦 Modelo Consulta

El modelo `Consulta` representa la entidad principal del sistema y se encarga de la interacción con la base de datos.

📁 Ubicación:


Permite:
- Gestionar los datos de las consultas
- Actualizar estados
- Aplicar borrado lógico

---

## 🎮 Controlador ConsultaController

El controlador gestiona la lógica del módulo.

📁 Ubicación:



Funciones principales:
- Listar consultas
- Crear nuevas consultas
- Editar consultas existentes
- Aplicar borrado lógico

---

## 🗄️ Migración y tabla `consultas`

La migración define la estructura de la tabla `consultas`.

📁 Ubicación:


### Campos de la tabla `consultas`

| Campo       | Tipo        | Descripción |
|------------|------------|-------------|
| id         | bigint     | Identificador único de la consulta, autoincremental. |
| paciente   | string(50) | **Campo obligatorio (required)**. Almacena el nombre del paciente. |
| telefono   | string(10) | **Campo obligatorio (required)**. Guarda el número telefónico del paciente. |
| fecha      | date       | **Campo obligatorio (required)**. Representa la fecha programada de la consulta. |
| estado     | enum       | Define el estado de la consulta. Solo admite los valores **pendiente**, **atendido** o **cancelado**. Por defecto se asigna `pendiente`. |
| is_active  | boolean    | Controla el **borrado lógico**. `true` indica que el registro está activo, `false` indica que fue eliminado lógicamente. |
| timestamps | timestamp  | Registra automáticamente la fecha y hora de creación y actualización del registro. |


---

## 🧹 Borrado lógico

El sistema **no elimina registros físicamente**.  
Cuando se elimina una consulta, se actualiza el campo:

```php
is_active = false

