<?php
/**
 * Plugin Name: ProFunctions
 * Plugin URI: https://wpshop.ru/
 * Description: Редактируйте этот плагин (Плагины - Редактор) вместо functions.php Вашей темы. Это поможет избежать потери информации при смене или обновлении темы
 * Version: 1.0.0
 * Author: WPShop
 * Author URI: https://wpshop.ru/
 * License: GPL v3
 */

/* Добавьте Ваш код ниже, открывать <?php не нужно */


add_filter( 'quizle/result_export/remote_post_args', function ( $args, $result, $url, $result_data ) {
    if ( substr( $url, 0, 28 ) === 'https://api.telegram.org/bot' ) {
        $args['body'] = json_encode( [
            'text'    => json_encode( $result_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ),
            'chat_id' => '7340999991',
        ] );
    }

    return $args;
}, 10, 4 );