<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title" style="color:blue;">', '</h2>' ); ?>

				<?php twentyseventeen_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
				  <section class="container_1" style="display: flex;">
						<div class="container1">
							<p>Facebook wants to be more transparent about what is and isn't allowed on the world's largest social network.</p>
						</div>
						<div class="container2">
							<p>On Tuesday, the company released an updated version of its Community Standards guidelines -- the rules that dictate what's acceptable content for its 2.2 billion users to post.</p>
						</div>
					</section>
					<section class="container_2" style="display: flex;">
						<div class="container3" style="padding: 10px;">
							<p>Facebook's rules themselves haven't changed. What's new is the release of the comprehensive guidelines its content moderators use to handle objectionable material. Previously, users could only see surface-level descriptions of what they couldn't post. Now, the rules provide details on how Facebook deals with specific situations and defines certain terms.</p>
						</div>
					  <div class="container4">
							<p>For example, the social network says it defines a "mass murder" as a homicide that "results in 4 or more deaths in one incident." And in the section on harassment, Facebook says people can't send a message that "calls for death, serious disease or disability, or physical harm" or "claims that a victim of a violent tragedy is lying about being a victim."</p>
						</div>
					</section>
				</div>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
