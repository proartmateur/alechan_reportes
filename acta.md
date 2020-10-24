#Actas

Las actas al final generan un PDF y un XML

## Header

- logos: image[]
- title: text
- id: text número de acta
- date: text fecha de creación o extempo DD MMMM YYYY 
- autoridad: text indica plaza
- Ubicación: text indica el lugar - dirección completa

## Body
- body title: text
- intro: paragraph
- cargo de quien crea el reporte: string
- responsiva: paragraph
- testigos: paragraph
- antecedentes: paragraph[]
- hechos: paragraphs[]


### Cierre
- firmas: firma[]
- anexo1: tabla de bienes - Las hojas van horizontales
- anexo2: tabla de bienes - Las hojas van horizontales
- cierre de acta: paragraph

## Footer
imagenes_pie: image[]
Direccion completa: text


El gobierno retiene productos de aduanas o que no cumplieron
si gana el juicio se donan o destruyen.

## Tipos de acta
- Asignación
Se da los bienes a una institución de gobierno.
  a quien se asigna
  Nuevos antecedentes: paragraph[]

- Donación
Se entrega a alguien no gob ONG u otra:

  a quien se le dona
  Nuevos antecedentes: paragraph[]
  
- Destrucción
Se destruyen los bienes.
  No lleva XML
  No lleva Firma eletrónica
  LLeva firma autografa
  se firma, escanea y guarda
  
 
 ## Proceso de creación de actas
 
 Tiene 3 estados: Borrador, Confirmado, Cerrado
 
 ### Borrador
 Es cuando se está trabajando en la generación del acta pero 
 nadie lo ha revisado.
 
 No trae firmas
 Genera un PDF con marca de agua
 
 ### Confirmado
 Trae firmas
 Genera un PDF sin marca de agua No modificable pero puede regresar a borrador
 
 ### Cerrado
 Se anexaron todos los documentos(El reporteador no sabe) pero 
 permite cerrarlo.
 Es el mismo PDF del confirmado.
 