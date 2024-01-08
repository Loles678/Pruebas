<?php
class kiosko{
    function checkPermission()
    {
        // Define la ruta al archivo
        $ruta_archivo = 'C:\Users\User01\Desktop\Prueba\prueba.txt';
        // Comprueba si el archivo existe
        if (file_exists($ruta_archivo)) {
            // Lee el contenido del archivo
            $contenido = file_get_contents($ruta_archivo);
            // Imprime el contenido del archivo
            $data['prueba'] = $contenido;
        } else {
            $data['prueba'] = 'El archivo no existe.';
        }

        if ($contenido == '123456789') {
            $data['prueba'] = "Contraseña aceptada";
        } else {
            $data['prueba'] = "Error de contenido";
        }
    }
}
