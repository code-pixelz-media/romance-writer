<?php

/**
 * Topics Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;
?>

<?php
do_action('bbp_template_before_topics_loop'); ?>

<div class="bbp-all-topics">
	<div class="bbp-topics">
		<ul id="bbp-forum-<?php bbp_forum_id(); ?>" class="bbp-topics">
			<li class="bbp-header">
				<ul class="forum-titles">
					<li class="bbp-topic-title"><?php esc_html_e('Topic', 'bbpress'); ?></li>
					<li class="bbp-topic-voice-count"><?php esc_html_e('Voices', 'bbpress'); ?>
						&<?php bbp_show_lead_topic()
								? esc_html_e('Replies', 'bbpress')
								: esc_html_e('Posts',   'bbpress');
							?></li>
					<li class="bbp-topic-freshness"><?php esc_html_e('Last Post', 'bbpress'); ?></li>
				</ul>
			</li>
			<!-- differntiating sticky topic and normal topic -->
			<li class="bbp-body">

					<span class="bbp-topic-sticky">Sticky Topic</span>
					<?php while (bbp_topics()) : bbp_the_topic(); ?>
						<?php if (bbp_is_topic_sticky()) : ?>
							<?php bbp_get_template_part('loop', 'single-topic'); ?>
						<?php endif; ?>
					<?php endwhile; ?>
					<hr>
						<span class="bbp-topic-normal">Normal Topic</span>
				<?php while (bbp_topics()) : bbp_the_topic(); ?>
					<?php if (!bbp_is_topic_sticky()) : ?>
						<?php bbp_get_template_part('loop', 'single-topic'); ?>
					<?php endif; ?>
				<?php endwhile; ?>

			</li>

			<li class="bbp-footer">
				<div class="tr">
					<p>
						<span class="td colspan<?php echo (bbp_is_user_home() && (bbp_is_favorites() || bbp_is_subscriptions())) ? '5' : '4'; ?>">&nbsp;</span>
					</p>
				</div><!-- .tr -->
			</li>
		</ul>
	</div>
	<div class="bbp-latest-topics">
		<?php if (is_active_sidebar('latest-topic')) { ?>
			<div id="secondary" role="complementary">
				<?php dynamic_sidebar('latest-topic'); ?>
			</div>
		<?php } ?>

	</div>
</div>
<!-- #bbp-forum-<?php bbp_forum_id(); ?> -->

<?php do_action('bbp_template_after_topics_loop');
?>