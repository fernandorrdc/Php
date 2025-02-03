<?php

//so tem validade se index for chamado , pois ele cria a session.
session_start(); 

echo $_SESSION['Aluno'] . "<br>" . $_SESSION['Turno']."<br>".session_id();

