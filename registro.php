<?php
//leer los datos del archivo data-1.json
  function leerDatos(){
    $data_file = fopen('./data-1.json', 'r');
    $data = fread($data_file, filesize('./data-1.json'));
    $data = json_decode($data, true);
    fclose($data_file);
    return ($data);
  };
