<?php

//имапорт стиля и скрипта
function yourstartup_assets(){
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/CSS/styles.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/JavaScript/script.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'yourstartup_assets' );

//добавляет svg в список разрешенных для загрузки файлов
add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow($mimes){
    $mimes['svg']  = 'image/svg+xml';
    return $mimes;
}

//исправление mime типа для svg файлов
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = ''){
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    if ($dosvg) {
        if (current_user_can('manage_options')) {
            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }
    return $data;
}