<div id="guidant_conditions_create" style="display: none;">
    <div class="guidant-modal">
        <div class="guidant-modalheader">
            <h3> <?php echo esc_html__('Create a New Condition', 'guidant'); ?></h3>
            <span class="dashicons dashicons-no-alt target" onclick="guidant_conditions_create_close('<?php echo esc_attr(GUIDANT_URL); ?>')"></span>
        </div>
        <div class="guidant-modalbody">
            <div class="guidant-modalform">
                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Attribute', 'guidant'); ?> </label>
                    <select id="guidant_condition_create_attribute">
                        <option value=""> <?php echo esc_html__('Select', 'guidant'); ?> </option>
                    </select>
                    <p class="guidant_field_error" id="guidant_condition_create_attribute_empty"> <?php echo esc_html__('Attribute Not Selected', 'guidant'); ?> </p>
                </div>




                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Matching Type', 'guidant'); ?> </label>
                    <select id="guidant_condition_create_matching_type">

                    </select>
                    <p class="guidant_field_error" id="guidant_condition_create_matching_type_empty"> <?php echo esc_html__('Matching Type Not Selected', 'guidant'); ?> </p>
                </div>

                <div id="guidant_condition_create_fields_for_card" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-fdes"> <?php echo esc_html__('Value Selection', 'guidant'); ?> </label>
                        <select id="guidant_condition_create_value_selection">
                            <option value=""> <?php echo esc_html__('Select', 'guidant'); ?> </option>
                            <option value="auto"> <?php echo esc_html__('From WordPress Settings', 'guidant'); ?> </option>
                            <option value="manual"> <?php echo esc_html__('Manual Entry', 'guidant'); ?> </option>
                        </select>
                    </div>

                    <div id="guidant_condition_create_value_auto_container" style="display: none;">
                        <div class="guidant_form_group">
                            <label for="guidant-fdes"> <?php echo esc_html__('Value', 'guidant'); ?> </label>
                            <select id="guidant_condition_create_value_auto">
                                <option value=""> <?php echo esc_html__('Select', 'guidant'); ?> </option>
                            </select>
                        </div>
                    </div>

                    <div id="guidant_condition_create_value_manual_container" style="display: none;">
                        <div class="guidant_form_group">
                            <label for="guidant-fdes"> <?php echo esc_html__('Value', 'guidant'); ?> </label>
                            <input type="text" id="guidant_condition_create_value_manual" placeholder="<?php echo esc_attr__('Add manual value here...', 'guidant'); ?>">
                        </div>
                    </div>
                </div>





            </div>
            <button class="guidant-btn guidant_conditions_create_btn" onclick="guidant_conditions_create('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create', 'guidant'); ?></button>
        </div>
    </div>
</div>