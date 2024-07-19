<?php


// Solicitamos el usuario a consultar en la API de GitHub
echo "Ingresa el nombre del usuario en GitHub: ";
    $name = trim(fgets(STDIN));


function getGitHubUser($name) {
    $url = "https://api.github.com/users/$name";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Script');
    
    $response = curl_exec($ch);
    
    if(curl_errno($ch)) {
        echo 'Error en cURL: ' . curl_error($ch);
    }
    
    curl_close($ch);

    $data = json_decode($response, true);
    
    return $data;
}


$data = getGitHubUser($name);
if ($data) {
    echo "Has solicitado los datos del usuario $name: \n";
    echo "Nombre: " . ($data['name'] ?? 'no disponible') . "\n";
    echo "Biografía: " . ($data['bio'] ?? 'no disponible') . "\n";
    echo "Empresa: " . ($data['company'] ?? 'no disponible') . "\n";
    echo "Correo: " . ($data['email'] ?? 'no disponible') . "\n";
    echo "Ubicación: " . ($data['location'] ?? 'no disponible') . "\n";
    echo "Repositorios Públicos: " . ($data['public_repos'] ?? 'no disponible') . "\n";
} else {
    echo "No se encontraron datos para el usuario '$name'.";
}


?>