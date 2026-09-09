
<div id="guidant_custom_field_list" style="display: none;">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('All Fields', 'guidant'); ?> </h3>
        <button class="guidant-btn" onclick="guidant_field_create_show('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create Field', 'guidant'); ?></button>
    </div>
    <div class="guidant_loader_block guidant-loader" style="display: none;">
        <div class='loader'></div>
    </div>
    <div class="guidant_empty_style_1 guidant-empty">
        <h3><?php echo esc_html__("You haven't created any Custom Field", 'guidant'); ?></h3>
        <button class="guidant-btn" onclick="guidant_field_create_show('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create Custom Field', 'guidant'); ?></button>
    </div>
    <div id="guidant_custom_field_list_items">
    </div>
</div>