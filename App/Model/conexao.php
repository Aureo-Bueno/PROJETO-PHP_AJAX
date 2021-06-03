<?php
  $connect = mysqli_connect('localhost', 'root', '', 'php_ajax');
    if (!$con) {
        die('Erro de conexão: ' . mysqli_connect_errno($connect));
    }