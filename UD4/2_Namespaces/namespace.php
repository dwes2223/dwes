<?php

/*

Namespaces
    Si usamos librerías externas podemos tener problemas de colisión de nombres
        -> dos clases se llaman igual
    Para solucionar este problema se usan namespaces, similar a los paquetes en java
        -> es como si organizamos las clases en directorios
    Dos clases con el mismo nombre pueden estar en namespaces distintos
    Es habitual nombrar los directorios (minúsculas: models) 
        y namespaces con el mismo nombre (primera mayúscula: Models)
    Los namespaces tambien se pueden anidar unos dentro de otros
    En un namespace pueden englobarse: constantes, funciones, clases y otros elementos de POO

Declaración:
    Al principio del fichero debe declararse
    Si no se declara el namespace los elementos pertenecen al namespace global (\)
    namespace Dwes; //obligatorio primera línea!!

    Espacios anidados serían: namespace Dwes\Controllers;

Acceso:
    Para acceder a un elemento (constante, función, clase ...)
        Primero hemos de hacerlo disponible: include/require
        Después nos podemos acceder a él
    El acceso puede ser:
        Sin cualificar
        Cualificado

*/