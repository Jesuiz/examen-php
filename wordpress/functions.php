<?php

// He implementado temporalmente el códgigo en un blog: https://diariodecristo.com/
// Se puede verificar que los enlaces desde el blog apuntan a las redes de Grupo lucky

// Esta función agrega un mensaje al final de cada post
function add_custom_message_to_posts($content) {
	if (is_single() && get_post_type() === 'post') {
		$custom_message = '<div class="custom-post-message">';
		$custom_message .= '<p>Gracias por leer! Síguenos en nuestras redes sociales:</p>';
		$custom_message .= '<ul>';
		$custom_message .= '<li><a href="https://www.facebook.com/grupolucky/">Facebook</a></li>';
		$custom_message .= '<li><a href="https://twitter.com/grupoluckytrade">Twitter</a></li>';
		$custom_message .= '<li><a href="https://www.instagram.com/grupolucky_pe">Instagram</a></li>';
		$custom_message .= '</ul>';
		$custom_message .= '</div>';

		$content .= $custom_message;
	}
	return $content;
}

add_filter('the_content', 'add_custom_message_to_posts');


?>