<?php
/**
 * Represents the view for the plugin to add new search form page or edit it.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user to create or edit search form.
 *
 * @package IS
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exits if accessed directly.
}
?>
<div class="wrap">

	<h1 class="wp-heading-inline"><?php
		if ( $post->initial() ) {
			esc_html_e( 'Add New Search Form', 'ivory-search' );
		} else {
			esc_html_e( 'Edit Search Form', 'ivory-search' );
		}
	?></h1>

	<?php
		if ( ! $post->initial() && current_user_can( 'is_edit_search_forms' ) ) {
			echo sprintf( '<a href="%1$s" class="add-new-h2">%2$s</a>',
				esc_url( menu_page_url( 'ivory-search-new', false ) ),
				esc_html( __( 'Add New', 'ivory-search' ) ) );
		}
	?>

	<hr class="wp-header-end">

	<?php do_action( 'is_admin_notices' ); ?>

	<?php
	if ( $post ) :

		if ( current_user_can( 'is_edit_search_form', $post_id ) ) {
			$disabled = '';
		} else {
			$disabled = ' disabled="disabled"';
		}
	?>

	<form method="post" action="<?php echo esc_url( add_query_arg( array( 'post' => $post_id ), menu_page_url( 'ivory-search', false ) ) ); ?>" id="is-admin-form-element"<?php do_action( 'is_post_edit_form_tag' ); ?>>
		<?php
			if ( current_user_can( 'is_edit_search_form', $post_id ) ) {
				wp_nonce_field( 'is-save-search-form_' . $post_id );
			}
		?>
		<input type="hidden" id="post_ID" name="post_ID" value="<?php echo (int) $post_id; ?>" />
		<input type="hidden" id="is_locale" name="is_locale" value="<?php echo esc_attr( $post->locale() ); ?>" />
		<input type="hidden" id="hiddenaction" name="action" value="save" />
		<input type="hidden" id="active-tab" name="active-tab" value="<?php echo isset( $_GET['active-tab'] ) ? (int) $_GET['active-tab'] : '0'; ?>" />

		<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div id="titlediv">
					<div id="titlewrap">
						<label class="screen-reader-text" id="title-prompt-text" for="title"><?php echo esc_html( __( 'Enter title here', 'ivory-search' ) ); ?></label>
					<?php
						$posttitle_atts = array(
							'type' => 'text',
							'name' => 'post_title',
							'size' => 30,
							'value' => $post->initial() ? '' : $post->title(),
							'id' => 'title',
							'spellcheck' => 'true',
							'autocomplete' => 'off',
							'disabled' =>
								current_user_can( 'is_edit_search_form', $post_id ) && 'Default Search Form' !== $post->title() ? '' : 'disabled',
						);

						echo sprintf( '<input %s />', IS_Admin_Public::format_atts( $posttitle_atts ) );
					?>
					</div><!-- #titlewrap -->

					<div class="inside">
					<?php
						if ( ! $post->initial() ) :
					?>
						<p class="description">
						<label for="is-shortcode"><?php echo esc_html( __( "Copy this shortcode and paste it into your post, page, or text widget content:", 'ivory-search' ) ); ?></label>
						<span class="shortcode wp-ui-highlight"><input type="text" id="is-shortcode" onfocus="this.select();" readonly="readonly" class="large-text code" value="<?php echo esc_attr( $post->shortcode() ); ?>" /></span>
						</p>
					<?php
						endif;
					?>
					</div>
				</div><!-- #titlediv -->
			</div><!-- #post-body-content -->

			<div id="postbox-container-1" class="postbox-container">
				<?php if ( current_user_can( 'is_edit_search_form', $post_id ) ) : ?>
				<div id="submitdiv" class="postbox">
					<h3><?php echo esc_html( __( 'Status', 'ivory-search' ) ); ?></h3>
					<div class="inside">
					<div class="submitbox" id="submitpost">

					<div id="minor-publishing-actions">

					<div class="hidden">
						<input type="submit" class="button-primary" name="is_save" value="<?php echo esc_attr( __( 'Save', 'ivory-search' ) ); ?>" />
					</div>

					<?php
						if ( ! $post->initial() ) :
							$copy_nonce = wp_create_nonce( 'is-copy-search-form_' . $post_id );
					?>
						<input type="submit" name="is-copy" class="copy button" value="<?php echo esc_attr( __( 'Duplicate', 'ivory-search' ) ); ?>" <?php echo "onclick=\"this.form._wpnonce.value = '$copy_nonce'; this.form.action.value = 'copy'; return true;\""; ?> />
					<?php endif; ?>
					</div><!-- #minor-publishing-actions -->

					<div id="misc-publishing-actions">
					<?php do_action( 'is_admin_misc_pub_section', $post_id ); ?>
					</div><!-- #misc-publishing-actions -->

					<div id="major-publishing-actions">

					<?php
						if ( ! $post->initial() && 'Default Search Form' !== $post->title() ) :
							$delete_nonce = wp_create_nonce( 'is-delete-search-form_' . $post_id );
					?>
					<div id="delete-action">
						<input type="submit" name="is-delete" class="delete submitdelete" value="<?php echo esc_attr( __( 'Delete', 'ivory-search' ) ); ?>" <?php echo "onclick=\"if (confirm('" . esc_js( __( "You are about to delete this search form.\n  'Cancel' to stop, 'OK' to delete.", 'ivory-search' ) ) . "')) {this.form._wpnonce.value = '$delete_nonce'; this.form.action.value = 'delete'; return true;} return false;\""; ?> />
					</div><!-- #delete-action -->
					<?php endif; ?>

					<div id="publishing-action">
						<span class="spinner"></span>
						<?php $this->save_button( $post_id ); ?>
					</div>
					<div class="clear"></div>
					</div><!-- #major-publishing-actions -->
					</div><!-- #submitpost -->
					</div>
				</div><!-- #submitdiv -->
				<?php endif; ?>

				<div id="informationdiv" class="postbox">
					<h3><?php echo esc_html( __( 'Information', 'ivory-search' ) ); ?></h3>
					<div class="inside">
						<ul>
							<li><a href="https://ivorysearch.com/documentation/" target="_blank"><?php _e( 'Docs', 'ivory-search' ); ?></a></li>
							<li><a href="https://ivorysearch.com/support/" target="_blank"><?php _e( 'Support', 'ivory-search' ); ?></a></li>
							<li><a href="https://ivorysearch.com/contact/" target="_blank"><?php _e( 'Contact', 'ivory-search' ); ?></a></li>
							<li><a href="https://wordpress.org/support/plugin/add-search-to-menu/reviews/?filter=5#new-post" target="_blank"><?php _e( 'Give us a rating', 'ivory-search' ); ?></a></li>
						</ul>
					</div>
				</div><!-- #informationdiv -->

			</div><!-- #postbox-container-1 -->

			<div id="postbox-container-2" class="postbox-container">
			<div id="search-form-editor">
			<div class="keyboard-interaction"><?php
				echo sprintf(
					/* translators: 1: ◀ ▶ dashicon, 2: screen reader text for the dashicon */
					esc_html( __( '%1$s %2$s keys switch panels', 'ivory-search' ) ),
					'<span class="dashicons dashicons-leftright" aria-hidden="true"></span>',
					sprintf(
						'<span class="screen-reader-text">%s</span>',
						/* translators: screen reader text */
						esc_html( __( '(left and right arrow)', 'ivory-search' ) )
					)
				);
			?></div>

			<?php

				$editor = new IS_Search_Editor( $post );
				$panels = array();

				if ( current_user_can( 'is_edit_search_form', $post_id ) ) {
					$panels = array(
						'includes' => array(
							'title' => __( 'Includes', 'ivory-search' ),
							'callback' => 'includes_panel',
						),
						'excludes' => array(
							'title' => __( 'Excludes', 'ivory-search' ),
							'callback' => 'excludes_panel',
						),
						'settings' => array(
							'title' => __( 'Settings', 'ivory-search' ),
							'callback' => 'settings_panel',
						),
					);
				}

				$panels = apply_filters( 'is_editor_panels', $panels );

				foreach ( $panels as $id => $panel ) {
					$editor->add_panel( $id, $panel['title'], $panel['callback'] );
				}

				$editor->display();
			?>
			</div><!-- #search-form-editor -->

			<?php if ( current_user_can( 'is_edit_search_form', $post_id ) ) : ?>
				<p class="submit"><?php $this->save_button( $post_id ); ?></p>
			<?php endif; ?>

			</div><!-- #postbox-container-2 -->

		</div><!-- #post-body -->
		<br class="clear" />
		</div><!-- #poststuff -->
	</form>

	<?php endif; ?>

</div><!-- .wrap -->

<?php
	do_action( 'is_admin_footer' );
