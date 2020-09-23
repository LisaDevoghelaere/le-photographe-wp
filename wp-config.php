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
define( 'DB_NAME', 'wp_photographe' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`{zK!z?S)6X$xiG3P%CozrQ:mfa4t(2rH[afbR p]bAX$1;>`8!8O4=ku{chs[IB' );
define( 'SECURE_AUTH_KEY',  'WHna65#qmPc7RV2d:%m>-Je|n+]OAAU-o`L4*1}81a<Gy^|,2Cvz0$G6:!b7L{}g' );
define( 'LOGGED_IN_KEY',    '4S~4DY@HNJj5paHdeavm Ik^|(*<,Iw^cj_R(K&5^;hmIf[CW[cDg,0CRd ?3GYt' );
define( 'NONCE_KEY',        'R9<.U.kI$Bi-3W]Eg&o%+*AzTU:3n }CR?Agrb1C{mZ,07WBMV$RH mv)tVnDQa4' );
define( 'AUTH_SALT',        'bVv< vS6XgI_:Cwr{qW`CfFQmS3l8Ovf?i@C7xDog)WxH5Tal nB_w:Zl>,5zv$m' );
define( 'SECURE_AUTH_SALT', '`(Pu |ou6hcf@>y$]Ty|-)}}G(~6Cqk5-}E&B)wR;o9s1nCjM+fLSJsyXpjdn5C:' );
define( 'LOGGED_IN_SALT',   '&0*;#lMZG;H}++?+F)cAdj&pO^VK=$BQt&DcjcQgF5j,U{Bk=e6n.inD[q+U+)8$' );
define( 'NONCE_SALT',       '-^%jy!|g#>LH+d2nrSUa Db%(cF($ijSZeC4(?GkDb2$+o0Ce]aEPM>YJ)0j2 H[' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
