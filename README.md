# 📈 Obtención del Volumen de Búsqueda de una Palabra Clave usando Google Ads API, Laravel, jQuery y Python

## 📋 Descripción General
Este proyecto es una aplicación web que permite a los usuarios ingresar una palabra clave y obtener su volumen de búsqueda utilizando la API de Google Ads. La interfaz de usuario está construida con Laravel y Blade templates, y la interacción del usuario se maneja con jQuery. El procesamiento de la solicitud y la obtención de datos de la API se realizan mediante un script en Python.

## 🛠 Herramientas Utilizadas
- ![Laravel](https://img.shields.io/badge/-Laravel-F55247?logo=laravel&logoColor=white) **Laravel**: Para el backend y la creación de la interfaz de usuario.
- ![Blade](https://img.shields.io/badge/-Blade%20Templates-FF2D20?logo=laravel&logoColor=white) **Blade templates**: Para el diseño de la página web.
- ![jQuery](https://img.shields.io/badge/-jQuery-0769AD?logo=jquery&logoColor=white) **jQuery**: Para manejar la interacción del usuario y actualizar dinámicamente la interfaz.
- ![Python](https://img.shields.io/badge/-Python-3776AB?logo=python&logoColor=white) **Python**: Para procesar la solicitud y obtener datos de la API de Google Ads.
- ![Google Ads API](https://img.shields.io/badge/-Google%20Ads%20API-4285F4?logo=googleads&logoColor=white) **Google Ads API**: Para obtener el volumen de búsqueda de la palabra clave.

## 📦 Instalación

### Requisitos Previos
- PHP
- Composer
- Python
- Credenciales de Google Ads API

### Pasos
1. Crear Cuenta de Google Ads
   https://ads.google.com/intl/es-419_ALL/home/
2. Nos Dirigimos al siguiente enlace
   https://console.cloud.google.com/apis/dashboard?hl=es-419&project=solicitud-de-api

   Aqui necesitamos crear un proyecto
   ![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/cbc8e03a-fee9-4902-a27a-a2c5f33d0df1)
   // Rellenamos los campos necesarios
3. Ahora habilitamos la API
 ![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/eab363ab-e050-431e-97c2-93d0ba6170f7)
Buscamos la API de Google Ads
![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/c1eb647c-6c3a-42ea-a2ef-e5c71b9cc567)

Presionamos Habilitar API 
![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/89a01fa6-2a29-405a-81c9-78797208c5d7)
(Yo ya la tengo habilitada)

4. Generar Credenciales cliente OAUTH 2
   ![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/c7e1130c-6cc5-44dd-8a5b-5a9e0847b573)

Como nuestro script de python sera el encargado de hacer solitudes, seleccionaremos que es Aplicacion de escritorio 
![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/2837bad5-50a4-4af8-8e3a-a2b21d008684)

Genrado esto nos aparece lo siguiente 
![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/ab3e68f3-3e71-4039-b076-3120744962b7)
Descargamos el JSON que tiene parte de las credenciales.
5. Ahora para autorizar clonamos el repositorio 
https://github.com/googleads/google-ads-python

y nos dirigimos a la carpeta /example



   ![image](https://github.com/DavidSantana872/MetricaPalabraGoogleAds/assets/86623205/743d9378-634a-4b19-9bd9-267a16c529e0)

1. Configuracion Google Ads API:
    ```bash
        git clone https://github.com/googleads/google-ads-python
    ```
