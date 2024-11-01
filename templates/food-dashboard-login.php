<div id="food-manager-food-dashboard">
	<p class="account-sign-in wpfm-alert wpfm-alert-info"><?php echo wp_kses_post(apply_filters('add_food_dashboard_login_required_message', esc_html__('You need to be signed in to manage your food listings.', 'wp-food-manager'))); ?> <a href="<?php echo esc_url(apply_filters('food_manager_food_dashboard_login_url', get_option('food_manager_login_page_url', wp_login_url()))); ?>"><?php echo esc_html(__('Sign in', 'wp-food-manager')); ?></a></p>
</div>