<?php
/**
 * Logout script
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);

use PhpMyAdmin\Core;
use PhpMyAdmin\Plugins\AuthenticationPlugin;

if (! defined('PHPMYADMIN')) {
    exit;
}

global $auth_plugin, $token_mismatch;

if ($_SERVER['REQUEST_METHOD'] != 'POST' || $token_mismatch) {
    Core::sendHeaderLocation('./index.php?route=/');
} else {
    /** @var AuthenticationPlugin $auth_plugin */
    $auth_plugin->logOut();
}
