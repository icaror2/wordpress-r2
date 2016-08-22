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
define('DB_NAME', 'wordpress-r2');

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
define('AUTH_KEY',         'n<!<Ngg-dI(6@Fyl48it5w3{|hPEgG5R=3mjF0 kr:<HY]Ky=@Mn,-jbhJe`scI1');
define('SECURE_AUTH_KEY',  'BW*8!L?ETxz]>#hSj+k=O>FbF]W>nW|O&H%K;Sib-S&d+OuqKAvb20]{=7B^##?[');
define('LOGGED_IN_KEY',    '<dHb2ZTxHRPctY]2fy4euEO0>lUe^lM`]HHQIB:=bPW7<3zev=COn{W( RE925D|');
define('NONCE_KEY',        '</4#/svCE]UG6g4O*6?oK@n&6#y+]AWd.*C7k;wCR=PD{JE{1G1Rk0`0l$gnX<u6');
define('AUTH_SALT',        'p&FMDzcM/di7OuUj&4$Nne{Bn@bhid@NIpPd1C9Z5o?Ob3^e{;|`#vi?o+f<}.X?');
define('SECURE_AUTH_SALT', '_|liuA*-3Hxdn_4(yUQLi#N~>UO#$40Ww0JY6$AD7gjnrxx$l +sTyDsA9&kB~c~');
define('LOGGED_IN_SALT',   'Gnhd>*KB>Uao2747y{ oZ8:It)9/ y[1X}G_GNgM *=|]_s#cmztgr(,R3u9(Z?8');
define('NONCE_SALT',       '(Mg^j:}(TkaV1av!F# u5W7.~p(RmWfv{j$r@;LglCdd&@elcs_|ZCG.riCDVu O');

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
