<?php

/*
* PHP es un protocolo son estado -> las diferentes peticiones son independientes
*   -> para asociarlas se usan las sesiones
* Al iniciar una sesión el servidor asigna y envía al usuario un identificador de sesión
*   en la siguientes peticiones el cliente envía al usuario un identificador de sesión
* Para controlar la sesión el servidor deja una cookie con el id de sesión en el cliente
*