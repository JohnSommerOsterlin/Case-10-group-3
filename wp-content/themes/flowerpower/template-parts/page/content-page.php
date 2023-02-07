<?php
/**
 * Template part to display page content in page.php.
 */
?>
<article id="post-<?php the_ID(); ?>">

	<header class="page-header">
		<?php $bild = get_field( 'bild' ); ?>
		<?php if ( $bild ) : ?>
		<img src="<?php echo esc_url( $bild['url'] ); ?>" alt="<?php echo esc_attr( $bild['alt'] ); ?>" />
		<?php endif; ?>

		<div class="page-header-meta">
			<h1>
				<?php the_field( 'rubrik' ); ?>
			</h1>
			<p>
				<?php the_field( 'beskrivning' ); ?>
			</p>
		</div>
	</header>

	<div class="entry-content">
		<?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                'after'  => '</div>',
            ) );
        ?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'ninestars' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article>