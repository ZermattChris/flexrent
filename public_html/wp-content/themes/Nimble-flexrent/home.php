<?php get_header(); ?>

<div class="home_lang_box">
<?php do_action('icl_language_selector'); ?>
</div>

<?php if ( 'false' == et_get_option( 'nimble_blog_style', 'false' ) ){ ?>
	<?php if ( 'on' == et_get_option( 'nimble_display_services', 'on' ) || 'on' == et_get_option( 'nimble_display_quote', 'on' ) ){ ?>
		<div id="home-section-info" class="home-section">
			<div class="container">
		<?php
			if ( 'on' == et_get_option( 'nimble_display_services', 'on' ) ){
				$blurbs_number = (int) apply_filters( 'et_blurbs_number', 3 );
				echo '<div id="services" class="clearfix">';
					for ( $i = 1; $i <= $blurbs_number; $i++ ){
						$service_query = new WP_Query( apply_filters( 'et_service_query_args', 'page_id=' . get_pageId( html_entity_decode( et_get_option( 'nimble_home_page_' . $i ) ) ), $i ) );
						while ( $service_query->have_posts() ) : $service_query->the_post();
							global $more;
							$more = 0;
							$page_title = ( $blurb_custom_title = get_post_meta( get_the_ID(), 'Blurbtitle', true ) ) && '' != $blurb_custom_title ? $blurb_custom_title : get_the_title();
							$page_permalink = ( $blurb_custom_permalink = get_post_meta( get_the_ID(), 'Blurblink', true ) ) && '' != $blurb_custom_permalink ? $blurb_custom_permalink : get_permalink();

							echo '<div class="service' . ( 1 == $i ? ' first' : '' ) . ( $blurbs_number == $i ? ' last' : '' ) . '">';
								if ( ( $page_icon = get_post_meta( get_the_ID(), 'Icon', true ) ) && '' != $page_icon )
									printf( '<img src="%1$s" alt="%2$s" class="et_page_icon" />', esc_attr( $page_icon ), esc_attr( $page_title ) );

								echo '<h3>' . $page_title . '</h3>';

								if ( has_excerpt() ) the_excerpt();
								else the_content( '' );

								echo '<a href="' . esc_url( $page_permalink ) . '" class="learn-more">' . __( 'More', 'Nimble' ) . '</a>';

							echo '</div> <!-- end .service -->';
						endwhile;
						wp_reset_postdata();
					}
				echo '</div> <!-- end #services -->';
			}
		?>

		<?php
			if ( 'on' == et_get_option( 'nimble_display_quote', 'on' ) ){
				echo '<div id="quote">';
					if ( ( $quote_first_line = et_get_option( 'nimble_quote_first_line' ) ) && '' != $quote_first_line )
						echo '<h3>' . wp_kses_post( $quote_first_line ) . '</h3>';
					if ( ( $quote_second_line = et_get_option( 'nimble_quote_second_line' ) ) && '' != $quote_second_line )
						echo '<p>' . wp_kses_post( $quote_second_line ) . '</p>';
				echo '</div> <!-- end #quote -->';
			}
		?>
			</div> <!-- end .container -->
		</div> <!-- end #home-section-info -->
	<?php } ?>

	<?php if ( 'on' == et_get_option( '_html_panel_1', 'on' ) ){ ?>
		<div id="home-section-pricing" class="home-section">
			<div class="container">
			<?php
            $html_panel_query = new WP_Query( apply_filters( 'et_html_panel_query_args', 'page_id=' . get_pageId( html_entity_decode( et_get_option( 'nimble_home_page_html_panel_1' ) ) ) ) );
				if ( $html_panel_query->have_posts() ) :
					while ( $html_panel_query->have_posts() ) : $html_panel_query->the_post();
						$html_panel_page_url = ( $custom_html_panel_url = get_post_meta( get_the_ID(), 'Homelink' , true ) ) && '' != $custom_html_panel_url ? $custom_html_panel_url : get_permalink();

						if ( has_excerpt() ) the_excerpt();
						else the_content( '' );

					endwhile;
				endif;
			?>
			</div> <!-- end .container -->
		</div> <!-- end #home-section-html-panel-1 -->
	<?php } ?>


    <?php if ( 'on' == et_get_option( 'nimble_html_panel_2', 'on' ) ){ ?>
        <div id="home-section-html-panel-2" class="home-section">
            <div class="container">
                <?php
                $html_panel_query = new WP_Query( apply_filters( 'et_html_panel_query_args', 'page_id=' . get_pageId( html_entity_decode( et_get_option( 'nimble_home_page_html_panel_2' ) ) ) ) );
                if ( $html_panel_query->have_posts() ) :
                    while ( $html_panel_query->have_posts() ) : $html_panel_query->the_post();
                        $html_panel_page_url = ( $custom_html_panel_url = get_post_meta( get_the_ID(), 'Homelink' , true ) ) && '' != $custom_html_panel_url ? $custom_html_panel_url : get_permalink();

                        if ( has_excerpt() ) the_excerpt();
                        else the_content( '' );

                    endwhile;
                endif;
                ?>
            </div> <!-- end .container -->
        </div> <!-- end #home-section-html-panel-2 -->
    <?php } ?>




<?php } else { ?>
	<div id="main-area">
		<div class="container">
			<div id="content-area" class="clearfix">
				<div id="left-area">
					<?php get_template_part( 'includes/entry', 'index' ); ?>
				</div> <!-- end #left-area -->
				<?php get_sidebar(); ?>
			</div> <!-- end #content-area -->
		</div> <!-- end .container -->
	</div> <!-- end #main-area -->
<?php } ?>

<?php get_footer(); ?>