<?php


// Shortcode personalizado para listar los ltimos 5 posts
function recent_posts_shortcode($atts) {
    ob_start();
    $query = new WP_Query([
        'posts_per_page' => 5,
        'post_status'    => 'publish',
    ]);

    if ($query->have_posts()) {
        echo '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
        wp_reset_postdata();
    }

    return ob_get_clean();
}
add_shortcode('recent_posts', 'recent_posts_shortcode');



?>



<!-- En Wordpress, cree una página nueva y agregué esto en un bloque HTML -->
<!-- He implementado temporalmente el códgigo en este enlace: https://diariodecristo.com/shortcode-grupo-lucky/ -->
<div class="mi-bloque-personalizado">
    <p>Este shortcode es para Grupo Lucky por la prueba técnica</p>
  [recent_posts]
</div>