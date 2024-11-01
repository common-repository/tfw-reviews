<div class="wrap">
    <h1>Google Review</h1>
    <form method="post" action="options.php">
        <?php settings_fields('talforweb-review-settings-group'); ?>
        <?php do_settings_sections('talforweb-review-settings-group'); ?>
        <table class="form-table">
            <tr valign="top">
            <th scope="row">Google Write Review Link</th>
                <td><input style="width: 100%;" type="text" name="talforweb_write_review_url" value="<?php echo esc_attr(get_option('talforweb_write_review_url')); ?>" /></td>
            </tr>
            <tr valign="top">
            <th scope="row">Show Write Review link</th>
                <td><input type="checkbox" name="talforweb_show_review" value="1" <?php echo (get_option('talforweb_show_review') == '1')?'checked="checked"':''; ?> /></td>
            </tr>
            <tr valign="top">
            <th scope="row">Google pb ID</th>
            <td><input style="width: 100%;" type="text" name="talforweb_place_id" value="<?php echo esc_attr(get_option('talforweb_place_id')); ?>" />
            <br /><small>Example: !1m2!1y7715437134510776335!2y10307002471025652395!2m2!2i28!2i10!3e1!4m5!3b1!4b1!5b1!6b1!7b1!5m2!1srnuUXvOCEY7H4-EPpPuuUA!7e81</small><br />
            <a href="<?php echo plugin_dir_url(__FILE__); ?>images/example.jpeg" target="_blank"><img src="<?php echo plugin_dir_url(__FILE__); ?>images/crop_example.jpeg" draggable="false" alt=""></a></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>

<?php
include ('function.php');

$file = esc_attr(get_option('talforweb_place_id'));

if ($file != '') talkforweb_add_review();