<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'sms');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'sms_user');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'sms_password');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'fJvNw%Q@)1#fYpu!3^9]dw(X@.@|/L(JQg}UU]CyZp{13?C!)3S|5*Q#*tCtRsCS'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'ECJ_0,PZ)/a*,xo=&qB_:813& #ZMKCBH*zN^o1hnngIdJOL.2;Q2^7C{~p`.Is:'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '?~LuuA8g|E%+7yfcojQm3978{sv!Xm]$Cx:)qBzV6UeXv^F~&T7l4<xgWa6qPXz$'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '+-{?H]m{_#aq+l9Bv64*@w-}8[>S.V}N6uNv}%X8qm`n_cc@ =-9|Fq3C|RDERYv'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'RI[QL }5S,Q% 88&okMlK8X;LxY/Y9|ojkfOzuBiBbAec;+0:7oFh^bjl3Iw*vr '); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'W:TDLyb--st3SyI0i,%|,.&XgGKO$;1YMoPbP5H#O4DgP<]*(Gu0UZb5{Mz?7Yr5'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '*M7Q|-p{*(mnDo<{C{q$#PRhZlRQYlo-x3Z5C%f!+qL:kX,*Euww:1T4bDq9)p*`'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '-fsqX[F|=x:L!B>H&x+|Z.`F+EU{KoTx+W6aHW0+as$-<-SmxI}qCOAIRK|1DZzB'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

