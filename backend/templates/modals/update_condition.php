<div id="guidant_conditions_update" style="display: none;">
    <div class="guidant-modal">
        <div class="guidant-modalheader">
            <h3> <?php echo esc_html__('Modify Condition', 'guidant'); ?></h3>
            <span class="dashicons dashicons-no-alt target" onclick="guidant_condition_update_close('<?php echo esc_attr(GUIDANT_URL); ?>')"></span>
        </div>
        <div class="guidant-modalbody">
            <div class="guidant-modalform">
                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Attribute', 'guidant'); ?> </label>
                    <select id="guidant_condition_update_attribute" style="min-width: 250px;">
                        <option><?php echo esc_html__('Select', 'guidant'); ?></option>
                    </select>
                </div>

                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Matching Type', 'guidant'); ?> </label>
                    <select id="guidant_condition_update_matching_type">

                    </select>
                </div>



                <div id="guidant_condition_update_fields_for_card" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-fdes"> <?php echo esc_html__('Value Selection', 'guidant'); ?> </label>
                        <select id="guidant_condition_update_value_selection">
                            <option value=""><?php echo esc_html__('Select', 'guidant'); ?></option>
                            <option value="auto"><?php echo esc_html__('From WordPress Settings', 'guidant'); ?></option>
                            <option value="manual"><?php echo esc_html__('Manual Entry', 'guidant'); ?></option>
                        </select>
                    </div>

                    <div id="guidant_condition_update_value_auto_container" style="display: none;">
                        <div class="guidant_form_group">
                            <label for="guidant-fdes"> <?php echo esc_html__('Value', 'guidant'); ?> </label>
                            <select id="guidant_condition_update_value_auto" style="min-width: 250px;">
                                <option><?php echo esc_html__('Select', 'guidant'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div id="guidant_condition_update_value_manual_container" style="display: none;">
                        <div class="guidant_form_group">
                            <label for="guidant-fdes"> <?php echo esc_html__('Value', 'guidant'); ?> </label>
                            <input type="text" id="guidant_condition_update_value_manual" placeholder="<?php echo esc_attr__('Add manual value here...', 'guidant'); ?>">
                        </div>
                    </div>
                </div>



            </div>
            <button class="guidant-btn guidant_condition_update_btn" onclick="guidant_conditions_update('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Update', 'guidant'); ?></button>
        </div>
    </div>
</div>