<?PHP
$aModule['cfg']['name'] = 'Manutenção das opções do sistema'; // Módulo é executado publicamente
$aModule['cfg']['system'] = true;             // Módulo do sistema
$aModule['cfg']['public'] = true;             // Módulo do sistema
$aModule['cfg']['paper'] = 'public';          // Grupo do usuário que pode executar
$aModule['cfg']['post'] = '';                 // Arquivo que contém o arquivo HTML (False para especificado no arquivo),
$aModule['main']              = '';           // HTML
$aModule['form']['type']      = 'A';          // Formulário de Ação
$aModule['form']['form']      = 'ususys.html';           // Nome do arquivo HTML (False para não carregar nenhum formulario
$aModule['form']['container'] = 'body';                  // Container do formulario
$aModule['js']['before'] = 'clearChild(body);gl_Desktop.setURL("?ususys")';
$aModule['sql']['select'] = 'select idUser, skin, iconAnimated, videoAutoplay, videoMute, notification, geolocation
                             from cl_user
                             where ( idUser = :iduser )';
$aModule['sql']['param']['iduser'] = $_SESSION['id'];
