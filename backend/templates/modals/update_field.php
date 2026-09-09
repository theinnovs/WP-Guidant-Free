<div id="guidant_fields_update" style="display: none;">
    <div class="guidant-modal">
        <div class="guidant-modalheader">
            <h3> <?php echo esc_html__('Modify Custom Field', 'guidant'); ?></h3>
            <span class="dashicons dashicons-no-alt target" onclick="guidant_fields_update_close('<?php echo esc_attr(GUIDANT_URL); ?>')"></span>
        </div>
        <div class="guidant-modalbody">
            <div class="guidant-modalform">
                <div class="guidant_form_group">
                    <label for="guidant-ftitle"> <?php echo esc_html__('Field Label', 'guidant'); ?> <?php $this->guidant_field_info("Label of the custom field."); ?></label>
                    <input type="text" name="ftitle" id="guidant_field_update_field_label" placeholder="">
                    <p class="guidant_field_error" id="guidant_field_update_field_label_empty"> <?php echo esc_html__('Field Label can\'t be empty', 'guidant'); ?> </p>
                </div>
                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Placement', 'guidant'); ?> <?php $this->guidant_field_info("Where to show the field? ie. Post Edit Page."); ?></label>
                    <select id="guidant_field_update_field_placement">
                        <option value=""><?php echo esc_html__('Select', 'guidant'); ?></option>
                        <option value="post"><?php echo esc_html__('Post', 'guidant'); ?></option>
                        <option value="product"><?php echo esc_html__('Product', 'guidant'); ?></option>
                        <option value="all"><?php echo esc_html__('Post & Product', 'guidant'); ?></option>
                    </select>
                    <p class="guidant_field_error" id="guidant_field_update_field_placement_empty"> <?php echo esc_html__('No placement selected', 'guidant'); ?> </p>
                </div>

            </div>
            <button class="guidant-btn guidant_field_update_btn" onclick="guidant_field_update('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Save', 'guidant'); ?></button>
        </div>
    </div>
</div>