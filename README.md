# alechan_reportes

## Problema

Actualmente se generan una N cantidad de reportes por parte de un SISTEMA. Estos reportes dependen de los datos dentro de la DB pero actualmente se encuentra acoplada la 
lógica del negocio, la lógica de la capa de datos, la lògica para renderear el reporte y a medida que crecen los requerimientos, se vuelve más difícil de mantener y escalar
el proyecto. Además tenemos una limitante respecto a lo no esencial, es decir, la herramienta. El servidor en el cual corre el proyecto solamente es compatible con php5.

## Reto

- Crear una solución reutilizable que permita crear una cantidad N de reportes de una M variedad de tipos de reportes.
- Cada tipo de reporte tendrá su propia lógica de negocio, es decir los datos de entrada podrán variar y las validaciones de los mismos.
- Agregar nuevos tipos de reporte deberá ser sencillo.
- El código deberá ser predecible, es decir, el esfuerzo mental para realizar cambios o crear nuevos tipos de reporte, debe ser muy bajo.
- Debe permitir la creación de diferentes formatos de salida (PDF, XML, HTML, etc.)
- Debe soportar diferentes fuentes de datos ( SQL Server, API Rest, Etc.)


## Idiomas
El código se redactará en Espanglish, es decir está permitido el uso 
del idioma inglés para términos aceptados por el equipo y lo demás en español.



## Pruebas
https://sandbox.onlinephpfunctions.com/