<?php
/**
 * WooCommerce Email Customizer with Drag and Drop Email Builder
 * Create awesome transactional emails with a drag and drop email builder
 * @author Flycart Technologies LLP
 * @license GNU GPL V3 or later
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

?>
<form name="settings" id="woo-mail-settings" action="#">
    <div class="email-builder-settings-option">
        <div class="email-builder-settings_fields">
            <label class="settings-label" for="settings_show_payment_instruction">
                <?php esc_html_e('Display payment instruction above order table', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $show_payment_instruction = isset($woo_mb_settings->show_payment_instruction)? $woo_mb_settings->show_payment_instruction: 1;
            ?>
            <select name="settings[show_payment_instruction]" id="settings_show_payment_instruction">
                <option <?php echo ($show_payment_instruction == 1)? 'selected="selected"': ''; ?> value="1"><?php esc_html_e('Yes', 'woo-email-customizer-page-builder'); ?></option>
                <option <?php echo ($show_payment_instruction == 0)? 'selected="selected"': ''; ?> value="0"><?php esc_html_e('No', 'woo-email-customizer-page-builder'); ?></option>
                <option <?php echo ($show_payment_instruction == 2)? 'selected="selected"': ''; ?> value="2"><?php esc_html_e('Only for Customer', 'woo-email-customizer-page-builder'); ?></option>
            </select>
        </div>
        <div class="email-builder-settings_fields">
            <label class="settings-label" for="settings_show_product_image">
                <?php esc_html_e('Show product image', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $show_product_image = isset($woo_mb_settings->show_product_image)? $woo_mb_settings->show_product_image: 0;
            ?>
            <label><input type="radio" name="settings[show_product_image]" value="1"<?php echo ($show_product_image == 1)? ' checked': ''; ?>><?php esc_html_e('Yes', 'woo-email-customizer-page-builder'); ?></label>&nbsp;
            <label><input type="radio" name="settings[show_product_image]" value="0"<?php echo ($show_product_image == 0)? ' checked': ''; ?>><?php esc_html_e('No', 'woo-email-customizer-page-builder'); ?></label>
        </div>
        <div class="email-builder-settings_fields show_product_image_option">
            <label class="settings-label" for="settings_product_image_height">
                <?php esc_html_e('Image height', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $product_image_height = isset($woo_mb_settings->product_image_height)? $woo_mb_settings->product_image_height: 32;
            ?>
            <input type="number" name="settings[product_image_height]" id="settings_product_image_height" value="<?php echo $product_image_height; ?>"/>px
        </div>
        <div class="email-builder-settings_fields show_product_image_option">
            <label class="settings-label" for="settings_product_image_width">
                <?php esc_html_e('Image width', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $product_image_width = isset($woo_mb_settings->product_image_width)? $woo_mb_settings->product_image_width: 32;
            ?>
            <input type="number" name="settings[product_image_width]" id="settings_product_image_width" value="<?php echo $product_image_width; ?>"/>px
        </div>
        <div class="email-builder-settings_fields">
            <label class="settings-label" for="settings_order_item_table_border_color">
                <?php esc_html_e('Order Item table border color', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $order_item_table_border_color = isset($woo_mb_settings->order_item_table_border_color)? $woo_mb_settings->order_item_table_border_color: '#dddddd';
            ?>
            <div class="email-builder-settings_fields_input">
                <input class="color_picker_wooemail" id="settings_order_item_table_border_color" name="settings[order_item_table_border_color]" value="<?php echo $order_item_table_border_color; ?>" data-default-color="#dddddd"/>
            </div>
        </div>
        <div class="email-builder-settings_fields">
            <label class="settings-label" for="settings_container_width">
                <?php esc_html_e('Container width', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $woo_mb_settings_container_width = isset($woo_mb_settings->container_width)? $woo_mb_settings->container_width: '';
            if($woo_mb_settings_container_width == '') $woo_mb_settings_container_width = 640;
            ?>
            <div class="email-builder-settings_fields_input">
                <input type="text" id="settings_container_width" name="settings[container_width]" value="<?php echo $woo_mb_settings_container_width; ?>"/>px
            </div>
        </div>
        <div class="email-builder-settings_fields">
            <label class="settings-label" for="settings_custom_css">
                <?php esc_html_e('Custom CSS', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $woo_mb_settings_custom_css = isset($woo_mb_settings->custom_css)? $woo_mb_settings->custom_css: '';
            ?>
            <div class="email-builder-settings_fields_input">
                <textarea id="settings_custom_css" name="settings[custom_css]"><?php echo $woo_mb_settings_custom_css; ?></textarea>
            </div>
        </div>
        <div class="email-builder-settings_fields">
            <label class="settings-label" for="settings_order_url">
                <?php esc_html_e('Order URL', 'woo-email-customizer-page-builder'); ?>
            </label>
            <?php
            $woo_mb_settings_order_url = isset($woo_mb_settings->order_url)? $woo_mb_settings->order_url: '';
            ?>
            <div class="email-builder-settings_fields_input">
                <input type="text" id="settings_order_url" name="settings[order_url]" value="<?php echo $woo_mb_settings_order_url; ?>"/>
                <?php esc_html_e('Use the shortcode [woo_mb_order_id] for dynamic id', 'woo-email-customizer-page-builder'); ?>
            </div>
        </div>
        <div class="email-builder-settings_fields">
            <label class="settings-label" for="">
                <?php esc_html_e('Change email subject and form name', 'woo-email-customizer-page-builder'); ?>
                <a target="_blank" href="<?php echo admin_url('admin.php?page=wc-settings&tab=email'); ?>">Click here</a>
            </label>
            <div class="email-builder-settings_fields_input">
            </div>
        </div>
        <div class="email-builder-settings_fields">
            <a class="md-btn md-btn-default md-btn-mini" onclick="woo_email_customizer_saveWooEmailCustomizerSettings()" ref="saveWooEmailCustomizerSettings" data-url="#" title="<?php esc_html_e('Save settings', 'woo-email-customizer-page-builder'); ?>" href="#">
                <i class="actions md-icon material-icons save md-color-green-600">save</i>
            </a>
        </div>
    </div>
</form>