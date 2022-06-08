<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'intranetalternativa' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JrGWu(;vK2F$y+2|p7w44K<u=tfB3x#!muY&7$]@9@Ym: K3Fl9Ofa:g*M@!4mw!' );
define( 'SECURE_AUTH_KEY',  '@8-+S[k$TR/`.C$KC;.^:Q~e,L>IoTC,G8NVW(-S_eq>P~O0,1i>?sZF ;~phpe8' );
define( 'LOGGED_IN_KEY',    '4:TJs Fu*1!9k1[tT._P0tGm]t!_C`d$XNro)L;LkKZj+gi:p|o-<Z%/7kWnLN^v' );
define( 'NONCE_KEY',        'JV;v`cU67H Z-`P2!q*[ac46qtO~}EYI6==a#*0(xjGul$:|X|YO+SX?m6tYd~r>' );
define( 'AUTH_SALT',        'iD]U<a=$=+ndk:N1dx~_q/C>Oww,%4DemaU (x9M12PcU}_3cA$IXh/jT^H,X$5n' );
define( 'SECURE_AUTH_SALT', 'A[[JQ)8DoexXkSBbBiS1hA=6$9=2|Qv73n%c]~,4soQ,&OQl[cVhvBKSed/n|U57' );
define( 'LOGGED_IN_SALT',   'W0dR.sHQGFvMrTE#i{nOp^1=>MOZX5q([m,7E5huao.BeE&cv}cex}Kdn@A s;a$' );
define( 'NONCE_SALT',       'je2Y.A 9D9,e_^z|lL7O(3e(l*+eDGl~M9~&2Ni6#UG#|16#0G*&u}Utwn>e|[NW' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
