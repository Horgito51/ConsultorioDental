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


### Campos de la tabla:

| Campo | Tipo | Descripción |
|------|------|-------------|
| id | bigint | Identificador |
| paciente | string(50) | Nombre del paciente |
| telefono | string(10) | Teléfono |
| fecha | date | Fecha de la consulta |
| estado | enum | pendiente / atendido / cancelado |
| is_active | boolean | Control de borrado lógico |
| timestamps | timestamp | Fechas de registro |

---

## 🧹 Borrado lógico

El sistema **no elimina registros físicamente**.  
Cuando se elimina una consulta, se actualiza el campo:

```php
is_active = false

