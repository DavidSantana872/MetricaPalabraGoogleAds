# 📈 Obtención del Volumen de Búsqueda de una Palabra Clave usando Google Ads API, Laravel, jQuery y Python

## 📋 Descripción General
Este proyecto es una aplicación web que permite a los usuarios ingresar una palabra clave y obtener su volumen de búsqueda utilizando la API de Google Ads. La interfaz de usuario está construida con Laravel y Blade templates, y la interacción del usuario se maneja con jQuery. El procesamiento de la solicitud y la obtención de datos de la API se realizan mediante un script en Python.

## 🛠 Herramientas Utilizadas
- ### PHP
![PHP Logo](https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/64px-PHP-logo.svg.png)

- **Versión Requerida:** PHP 8.1 o superior.
- Asegúrate de tener esta versión instalada y configurada correctamente antes de ejecutar `php artisan serve`.

### Laravel Framework
![Laravel Logo](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/64px-Laravel.svg.png)

- **Versión Requerida:** Laravel Framework 10.10 o superior.
- Asegúrate de que tus dependencias estén actualizadas para evitar conflictos de versión.

### Python
![Python Logo](https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/64px-Python-logo-notext.svg.png)

- **Versión Requerida:** Python 3 (preferiblemente Python 3.8 o superior).

- Asegúrate de tener Python instalado y configurado según sea necesario para tu entorno de desarrollo.
- ![Blade](https://img.shields.io/badge/-Blade%20Templates-FF2D20?logo=laravel&logoColor=white) **Blade templates**: Para el diseño de la página web.
- ![jQuery](https://img.shields.io/badge/-jQuery-0769AD?logo=jquery&logoColor=white) **jQuery**: Para manejar la interacción del usuario y actualizar dinámicamente la interfaz.
- ![Google Ads API](https://img.shields.io/badge/-Google%20Ads%20API-4285F4?logo=googleads&logoColor=white) **Google Ads API**: Para obtener el volumen de búsqueda de la palabra clave.

## 📦 Instalación

### Requisitos Previos
- PHP
- Composer
- Python
- Credenciales de Google Ads API

## Ejecucion del proyecto 
1. **Clonar el Repositorio:**
   Abre tu terminal y ejecuta el siguiente comando para clonar el repositorio:
   ```bash
   git clone https://github.com/DavidSantana872/MetricaPalabraGoogleAds.git
    ```
2. 
     ```bash
      cd MetricaPalabraGoogleAds
    ```
3.  ```bash
      composer update 
    ```
4.  ```bash
      composer install 
    ```
4.  ```bash
      php artisan serve 
    ```
Instalar libreria de python para peticion a la api Google Ads 
5.  ```bash
      python -m pip install google-ads
    ```
### Pasos

1. **Crear Cuenta de Google Ads**
   - [Crear una cuenta en Google Ads](https://ads.google.com/intl/es-419_ALL/home/).

2. **Crear un Proyecto en Google Cloud**
   - Dirígete a [Google Cloud Console](https://console.cloud.google.com/apis/dashboard?hl=es-419&project=solicitud-de-api).
   - Crea un nuevo proyecto.
     ![Crear Proyecto](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/cbc8e03a-fee9-4902-a27a-a2c5f33d0df1)
     // Rellena los campos necesarios.

3. **Habilitar la API de Google Ads**
   - En el panel de la API, busca y selecciona la **API de Google Ads**.
     ![Buscar API](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/c1eb647c-6c3a-42ea-a2ef-e5c71b9cc567)
   - Presiona **Habilitar API**.
     ![Habilitar API](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/89a01fa6-2a29-405a-81c9-78797208c5d7)
     (Si ya está habilitada, puedes omitir este paso).

4. **Generar Credenciales Cliente OAuth 2**
   - Como tu script de Python realizará solicitudes, elige "Aplicación de escritorio".
     ![Generar Credenciales](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/c7e1130c-6cc5-44dd-8a5b-5a9e0847b573)
   - Descarga el JSON que contiene las credenciales.

5. **Autorización y Configuración**
   - Clona el repositorio [Google Ads Python](https://github.com/googleads/google-ads-python).
   - Navega a la carpeta `/examples` y ejecuta `python3 generate_user_credentials.py --client_secrets_path="ruta/al/json"` para obtener un enlace y un token de refresh.
   - Copia el archivo [google-ads.yaml](https://github.com/googleads/google-ads-python/blob/main/google-ads.yaml) y completa los valores necesarios y recuerda poner `user_proto_bus = True`.
   - Mueve el archivo `.yaml` a la carpeta `/public` y ajusta el `customer_id` en `main.py` con tu ID de cliente.

   **Nota:** El `customer_id` debe pertenecer a una cuenta de prueba. Consulta la [documentación](https://developers.google.com/google-ads/api/docs/best-practices/test-accounts?hl=es-419) para más información.


