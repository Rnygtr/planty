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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'k[ui/VRvIcn!->JPUg-Ml~Qk&jK2]F6HmvT,*E{/6NI@$-<=pT; Fdkx1.#$ypee' );
define( 'SECURE_AUTH_KEY',  '_JsG^yYEb6R74nEdDIkJ37MH<{FS }UZIZ$/S6W9?}^G VZ-.-p?9q)FT|-V}8k$' );
define( 'LOGGED_IN_KEY',    'a-&29vXb7(`1nw`d%W+[xsPN(4]neHlqh,:+J&^18|qL/WFgKs:H>}/PJG5S9wIZ' );
define( 'NONCE_KEY',        'k*e|N-@Y/f]r!qXt`[eu681v8KX-{5P,JRWSkl[h00t>QoOfb#n+-Ut}3tY-#QQq' );
define( 'AUTH_SALT',        'MEuR{yVQ+RjX0&.{W/l;tOS8;I,^l986^->2qg(SbfqQ)K{$5.#TnL:_L_J4I(l|' );
define( 'SECURE_AUTH_SALT', '00KWaD~37&Y@P-nn3&t[7^RP[Lo@|h=OWD+$wYbswzr1fosXZpXkL7t;X^LA#N1/' );
define( 'LOGGED_IN_SALT',   '1LlqOxOL)(bTJ<s2Yazto|Dq.e$eq|k Rhv:b6Afoh]2+pfXH1A{3NiX>~+[[>N8' );
define( 'NONCE_SALT',       '_i5k:T*a6;%7q:[`_;b#uB_9b#9xsi^$T*7gdHWsnQr.(^r^l&Wl&g-xx&b4~@hS' );
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
