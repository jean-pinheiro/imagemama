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
define('DB_NAME', 'imagemama');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'T7+&Ho=,}[9hzR)ZW804%&pKv:{E9c&l=_g |d>7gEN6aXL{(!Y|Nv`Li-$?x+@1');
define('SECURE_AUTH_KEY',  '21&NnH<|z~wf^Z6ZG]JG@7YkXeS@UNUW7F&Uc!l%A(jQmf<.d/8yM|>f%+d@*Gw:');
define('LOGGED_IN_KEY',    '_hi5rit2IjH6v`*o|?zD5sRzzT6a*%<:YUZU|r^w`e)`eC>ak,[T.xXB< 5-{mMt');
define('NONCE_KEY',        'Dobb &w%-m82b+1l50#TQm_9)qe4d!m Mn=#5.|d*SHE BrcEVpo[yEL$}1-e!Q1');
define('AUTH_SALT',        '5KG $@d|YM7Uj+/pReNk^Fe|3+;)2Ip5=BhQLMsX3!%H8!JgjK&)+bZs]bJ?Fn_D');
define('SECURE_AUTH_SALT', '9N|wih7-+K+P}Of+(Z9qT#LR`%tGl_clB6AV`7mD0Ud-m{][..KTilxDkusK~|eN');
define('LOGGED_IN_SALT',   '{CAY}4p2@7^^v@jc0(:~odWcNo;dkC&|jTHj)m+=g`$Z?io{R]N]1Y_DDt.]+xT=');
define('NONCE_SALT',       '/loz8kfN$W|%kB$l<GQS!uot>99[JCV1<!@@`o*g*]*E1ji[luesB0f8]|AzMKJ&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpim_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
