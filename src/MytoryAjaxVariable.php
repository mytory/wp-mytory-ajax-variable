<?php
namespace Mytory\AjaxVariable;
/**
 * Mytory Board의 확장팩 성격의 좋아요 모듈.
 * Class MytoryLike
 */
class MytoryAjaxVariable {
	public function __construct() {
		add_action( 'wp_head', [ $this, 'ajax_variable' ] );
	}

	public function ajax_variable() {
		global $wp_query;
		?>
		<script type="text/javascript">
            window.mytory_like = {
                ajax_url: <?= json_encode( admin_url( "admin-ajax.php" ) ); ?>,
                ajax_nonce: <?= json_encode( wp_create_nonce( "mytory-like-ajax-nonce" ) ); ?>,
                wp_debug: <?= defined( WP_DEBUG ) ? WP_DEBUG : 'false' ?>
            };
		</script><?php
	}
}
