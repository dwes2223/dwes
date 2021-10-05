<?php
// Abre la sesión y recupera el valor
session_start();
echo "la variable count vale: ".$_SESSION['count'];