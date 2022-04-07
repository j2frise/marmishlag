<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tp_cms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '123456' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qFeJJV<&R0R3?*Yw[b)z0A+c|ymgE=!LVw>YDrXgGwG>d8c/10X8K;B+4D-4c4Vz' );
define( 'SECURE_AUTH_KEY',  'HvO@N#F6d;0Ao)~nY_=yF$RuYBbkA5v9EV1J=I|%%}ot&uJV%cxQw%TY&7wng$mM' );
define( 'LOGGED_IN_KEY',    'neE9*=:@~K(u7P[?v=jy9k/W4i!RsHB;eJf7$1c/aL9NJ|O3blg,;]&Q?WQ0c8>P' );
define( 'NONCE_KEY',        ';)n3~UI]uZMqP{!X#K;8plO{?]+vJ[[MmRcLUczrg=U*Q4a!4^w2QIiOD*}95udg' );
define( 'AUTH_SALT',        '}C55/RMK|z+q*lO:wRqaj~MP]?q9IfO=(n>B3SLvGDo~M]IM0@]=X%dE!~y4k^w|' );
define( 'SECURE_AUTH_SALT', 'IFr`O:]VYZ3 gK-Vz`tQl7dQ}|WRYJp]9D3asUo--uN$v-^H$>f2x<4IB*lJ%ig/' );
define( 'LOGGED_IN_SALT',   '>P]i+](kXcx949l^T 7Mke8(fP,D(?AV&nc6vg7cLEKpP_,4i2%k#=/R[9j5n6Vz' );
define( 'NONCE_SALT',       'h<(6A?+Fa$(W A68<.7[Vv]9tPO?cl(q4C#xtgel&5|FnJ|{G}3*<aer-:fJQZRu' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
