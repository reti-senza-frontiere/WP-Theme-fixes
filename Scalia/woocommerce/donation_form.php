<?php
/**
 * Single Product Image
 *
 * @author 		Varun Sridharan
 * @package 	WC Quick Donation/Templates
 * @version     0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $donate;
?>
<form method="post" class="form-inline">
	<table>
		<tr class="donation-block">
			<td colspan="6">
				<div class="donation">
					<?php do_action('wc_qd_show_projects_list'); ?>
					<br />
					<br />
					<div class="form-group">
						<label for="donation">Donazione</label>
						<div class="input-group">
							<input type="number" min="1" name="donation_ammount" value="<?php echo get_option('wc_quick_donation_min_required_donation'); ?>" id="donation" style="max-width: 100px; text-align: right" class="form-control text-right col-sm-offset-7">
							<span class="input-group-addon"><?php echo get_woocommerce_currency_symbol(); ?></span>
						</div>
						<br />
						<br />
						<div class="submit_btn">
							<input type="submit" class="pull-right" name="donation_add" value="Aggiungi donazione"/>
						</div>
					</div>
				</div>
			</td>
		</tr>
	</table>
</form> 
