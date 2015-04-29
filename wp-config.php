<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress_project');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sSKr[UWAOF.9%pD[gMoK8r 7&HWa]yZ&WGs>:Whgt3hUPpR=84DKW=X4+*)`o32p');
define('SECURE_AUTH_KEY',  '+J.=jF<.N%@-usHIbUn-y.<7]oJ6?N4p6$~6T+> mqKh2nrI;C*s!CF5W]AJ.%BR');
define('LOGGED_IN_KEY',    'c6/RHSAYS-{:k>1!HIv[sG3{z8`CynSlA|ohF hD5A1?9F|>Uc89MG%cXkE<69}K');
define('NONCE_KEY',        '^&/sX*=4]@1{Nzx-|})g*[5uUq@WQe=Df@F34+8NG.JK6Lyqd+CU<j:BN2C~L|g}');
define('AUTH_SALT',        'ZCkE!eSa;n:LA.5%W=yE:%3nN*%>29s!003|UPTl%6h}%~FoN)&+6j&x]IJVRa+4');
define('SECURE_AUTH_SALT', '$h{$% 5(>5eWvzmKXLP9P[gXC{HPHK+@JUD_D/jZNq8m)/{ob,W3omo3]j=gg(qB');
define('LOGGED_IN_SALT',   ')P4bA[o.1|?c-/70cf|zvk1NrS#q#.dFomU>D3:%kG4%-_SutU^d72h}|FVY#o^M');
define('NONCE_SALT',       'erZm).1T]N0BA]:~sct%]``MYw[?jq+E=n6`}7NXOH&U{@cx3zQRD[:%&GBXd,:G');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
