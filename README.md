# tickevent 🎫

## Docs
El proyecto se basa en una extensa investigación y está respaldado por las directrices de la Asociación Estadounidense de Psicología (APA) y el Instituto de Ingenieros Eléctricos y Electrónicos (IEEE), lo que garantiza la confiabilidad y corrección de la información proporcionada. el objetivo principal de esta tarea es documentar objetivos y procesos del proyecto a llevar Los diagramas se han creado para mostrar  con el fin de explicar los cambios de la arquitectura .

Los diagramas ofrecen una ilustración sencilla y fácil de entender de los principales pasos y conexiones del proyectoAdemás, se ha creado un cronograma completo que describe las tareas a realizar, sus respectivas fechas de vencimiento y los recursos necesarios para completar cada tarea de manera eficiente y efectiva. "Este calendario funcionará como una herramienta útil para supervisar y seguir el progreso del proyecto".

https://github.com/awapu/Tickevent/tree/main/Documentaci%C3%B3n

## Page 💻

https://tickevent.app/

## Overview 

![Img overview project](https://github.com/awapu/Tickevent/blob/main/public/images/Images/Monochrome%20Collage%20Ripped%20Paper%20Instagram%20Story.png)



 ## Mockups 
 Vista 1: LOGIN
 
![Img overview project](https://github.com/awapu/Tickevent/blob/main/public/images/Images/1.png)

 Permite el ingreso a la aplicación por medio del login.
 El contenido descriptivo de la vista sería el siguiente:
 
 Campo 1:
 
 Recibe el correo de usuario.

 Campo 2:
 
 Recibe el correo de usuario
 
 Botón 1:
 
 Envía petición de consulta a la base de datos de la credenciales de usuario ingresadas.
 
 Una vez las credencialesson validadas por el sistema, te redirige a la vista 2: "Home".
 
Vista 2: Home

![Img overview project](https://github.com/awapu/Tickevent/blob/main/public/images/Images/2.png)

Es la vista incial una vez el usuario ingresa al sistema.

El contenido descriptivo de la vista general seria el siguiente:

Contiene solo dos botones:

Botón de imagen 1:

Validar entrada: este botón redireccionará a la vista 3: validar boleta

Botón de imagen 2:

Puede tener un texto que indique "vender boleta"; este botón permite redireccionar a la sección de venta de boletas (vista 4: Procesar la venta de boletas).

Vista 3: Validar boletas (ingreso o salida del asistente)

![Img overview project](https://github.com/awapu/Tickevent/blob/main/public/images/Images/3.png)

Permite validar la boleta que es leída por QR en el momento de ingreso del asistente o salida momentánea del evento.

El contenido descriptivo de la vista sería el siguiente:

Campo 1:

Recibe el ingreso del id de la boleta leída (únicamente por lector de QR)

Sección 1: acciones del asistente

Tendrá dos radius botón: uno para cuando se procesa la entrada del usuario y otro para procesar una salida momentánea

Botón 1: validar

Seria el botón "validar".Realizará la búsqueda del ID del código de barras en la base de datos.

Espacio de visualización:

En la parte inferior aparecerán los datos de validación de la boleta escaneada con los siguientes estados:

Boleta falsa: un aviso que podría decir:
*QR No ENCOTRADO: Este ID nunca se procesó en las transacciones de TICKEVENT.
Acérquese a la taquilla para adquirir una entrada para el evento.*

Boleta leida cuando el asistente entra por primera vez: un aviso que podría decir:

*Entrada procesada:Felicitaciones
Fecha[la fecha]
Hora:[La hora]*

Boleta leída cuando asistente sale: un aviso que podría decir:
*Salida procesada: Regresa pronto.*
Boleta leída cuando asistente entra nuevamente: un aviso que podría decir:
*Entrada procesada: Siga disfrutando del evento*

Vista 4: Procesar la venta de boletas

![Img overview project](https://github.com/awapu/Tickevent/blob/main/public/images/Images/4.png)

Permite realizar la venta de una o más boletas a un cliente
El contenido descriptivo de la vista sería el siguiente:
Campo desplegable 1:

Campo desplegable para seleccionar el evento

Botón 1:

botón de incremento para seleccionar la cantidad de boletas que serán vendidas

Sección 1: datos del asistente
La sección está compuesta de datos de comprador:
Los elementos de la sección serian:

Campo 1: Nombres

Campo 2: Apellidos

Campo 3: E-mail

Campo 4: Cedula

Campo 6: número de celular

Botón 2:

Sería el botón “vender boleta”.
 
 
