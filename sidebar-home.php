<?php
/**
 * Sidebar Home
 *
 * Displays on the Home Page
 *
 * @package            ${PACKAGE}
 * @license            license.txt
 * @copyright          ${YEAR} ${COMPANY}
 * @since              ${VERSION}
 *
 * Please do not edit this file. This file is part of the ${PACKAGE} Framework and all modifications
 * should be made in a child theme.
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets" class="home-widgets">
		<div id="home_widget_1" class="col-md-4">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
				<aside class="widget-wrapper">

					<h3 class="widget-title-home"><?php _e( 'Home Widget 1', 'responsive' ); ?></h3>
					<div class="textwidget"><?php _e( 'This is your first home widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area 6 called Home Widget 1. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</aside><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

			<?php responsive_widgets_end(); // responsive after widgets hook ?>
		</div><!-- end of .col-md-4 -->

		<div id="home_widget_2" class="col-md-4">
			<?php responsive_widgets(); // responsive above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-2' ) ) : ?>
				<aside class="widget-wrapper">

					<h3 class="widget-title-home"><?php _e( 'Home Widget 2', 'responsive' ); ?></h3>
					<div class="textwidget"><?php _e( 'This is your second home widget box. To edit please go to Appearance > Widgets and choose 7th widget from the top in area 7 called Home Widget 2. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</aside><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div><!-- end of .col-md-4 -->

		<div id="home_widget_3" class="col-md-4">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-3' ) ) : ?>
				<aside class="widget-wrapper">

					<h3 class="widget-title-home"><?php _e( 'Home Widget 3', 'responsive' ); ?></h3>
					<div class="textwidget"><?php _e( 'This is your third home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 3. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</aside><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-3 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div><!-- end of .col-md-4 -->
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>