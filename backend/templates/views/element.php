<div id="guidant_elements_list" style="display: none;">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('Card Items', 'guidant'); ?> </h3>

        <div style="display: flex;">
            <button style="margin-right: 12px" class="guidant-btn-light-img" onclick="guidant_elements_back_to_filters('<?php echo esc_attr(GUIDANT_URL); ?>')"> <img src="<?php echo esc_attr(GUIDANT_IMG_DIR); ?>/guidant-back-icon.svg" > <?php echo esc_html__('Back to All Filters', 'guidant'); ?></button>
            <button class="guidant-btn" onclick="guidant_elements_create('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Add Card', 'guidant'); ?></button>
        </div>
    </div>
    <div class="guidant_loader_block guidant-loader" style="display: none;">
        <div class='loader'></div>
    </div>
    <div class="guidant_empty_style_1 guidant-empty">
        <h3><?php echo esc_html__("You don't have any card created yet", 'guidant'); ?></h3>
        <button class="guidant-btn" onclick="guidant_elements_create('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create New Card', 'guidant'); ?></button>
    </div>
    <div id="guidant_elements_list_items">
    </div>
</div>