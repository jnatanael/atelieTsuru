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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jnatanael_sgi' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'jnata_sgi' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'jnr**//689420' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'robb0352.publiccloud.com.br:3306' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'R$(z]V{ov}RBW4Qj[!C31/@W{uOATISq4SD?44IW=D=.Z`fsh_T5Cqz[&OJQ3g^F' );
define( 'SECURE_AUTH_KEY',  'H{(<EvR2dW:mog-[AL-Oq#m~sEd0oX>bdDt!=61^0zIz#Og9EvxZG{iuVD{XH{s!' );
define( 'LOGGED_IN_KEY',    'U9wo,8f>kGZ,Lv|i@yv4UoJ+FM?2ZTx78jMOu^$FDy<m2BNrK]L*1>`UR8~4GL!K' );
define( 'NONCE_KEY',        'V.OWe{nO_xK(_RLqqIcZ`x,#rh?qO8K|Eu:k8]b?Ul!7=w!%4M^(zXii9Z_o1;uL' );
define( 'AUTH_SALT',        'S,(dT&xD]r`Gwr9j,2K.h5gNS4ZE0~#mmAks0u:=`p[w67|d5*mrn+4I-bE<=}t_' );
define( 'SECURE_AUTH_SALT', 'FD|E3/b#. >ld1<C|)LAgI=%w{Q}9P;%gb/p,F%SnaVLPyp%Zb(VoY:Q.8zY _R)' );
define( 'LOGGED_IN_SALT',   '#of/fGY7]NY%7_>Bl+MI.-lF57Qa-#o_147o[X7@*31w8?Tpsm1tg|F2>8PjBzvQ' );
define( 'NONCE_SALT',       ':0aS&%vnLJeC|QaJ(*NM,&P.RYss>,ZP>L&7WEvw#:)N+GM?/DaQksqcI(R_?5<2' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cartorio_wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
