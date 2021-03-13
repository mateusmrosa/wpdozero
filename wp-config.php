<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpdozero' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')c,Si#Pb>9@5eB3l+tWELQ5c9_{w_Z5;Tc*TUv.7jgo9+~Gzh^dhAzcU&A|gf7C$' );
define( 'SECURE_AUTH_KEY',  'O;z3H4Jvqrfk36w-Ca0JYGt3o2,1ud#ZI`2DFz4H^X(YwV=^INr*OUP&zx#dh4t/' );
define( 'LOGGED_IN_KEY',    '5{CS/~6XphR:[B5fu}MCWF<!ci3N|n,jx}C~H,tz[a9{qtDd5=J9P-dk!gx@u7ls' );
define( 'NONCE_KEY',        'P[/[D;a3pDH;nb2 6TFOd?ro=F~<^X/I%@?ll.]HK.t1g]Iezjk8!wjSNspP.v(0' );
define( 'AUTH_SALT',        'KwA00:/p7b!7n+)>d_4/Ov((kcyB%cr]u%7|AwK mxEK2@lxO}Vb?YI5B>Y*+;Qy' );
define( 'SECURE_AUTH_SALT', 'fIY^^!j]r-37OTQ~l:8prC?1&]F_zD=|qU~7NNuH920yn~ArE`u/*OoZ/#_&{mn ' );
define( 'LOGGED_IN_SALT',   'pBWeR>_3QpU9Rk>nW~b{ad-FvU=`_5,KyQtPJ5ll$X?yg=)?J,31S{2h+dI@NINn' );
define( 'NONCE_SALT',       'S1jA;w<6pKT5Q`wah-9,LR6`y)wztyq/@,LIfVMCzxIH@i}hwj|l}M@YKm%t2(U+' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
