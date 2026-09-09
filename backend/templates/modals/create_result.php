<div id="guidant_results_create" style="display: none;">
    <div class="guidant-modal">
        <div class="guidant-modalheader">
            <h3> <?php echo esc_html__('Create a New Result Attribute', 'guidant'); ?></h3>
            <span class="dashicons dashicons-no-alt target" onclick="guidant_results_create_close('<?php echo esc_attr(GUIDANT_URL); ?>')"></span>
        </div>
        <div class="guidant-modalbody">
            <div class="guidant-modalform">
                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Attribute', 'guidant'); ?> </label>
                    <select id="guidant_result_create_attribute">
                        <option value=""> <?php echo esc_html__('Select', 'guidant'); ?> </option>
                    </select>
                    <p class="guidant_field_error" id="guidant_result_create_attribute_empty"> <?php echo esc_html__('Attribute can\'t be empty', 'guidant'); ?> </p>
                </div>



                <div id="guidant_results_create_prefix_container" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-fdes"> <?php echo esc_html__('Prefix (Optional)', 'guidant'); ?> </label>
                        <input type="text" id="guidant_result_create_prefix" placeholder="">
                    </div>
                </div>

                <div id="guidant_results_create_image_container" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-fdes"> <?php echo esc_html__('Image Height (px)', 'guidant'); ?> </label>
                        <input type="number" id="guidant_result_create_image_height" value="200">
                    </div>
                </div>


                <div id="guidant_results_create_button_container" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-fdes"> <?php echo esc_html__('Button Text', 'guidant'); ?> </label>
                        <input type="text" id="guidant_result_create_button_text" value="View">
                    </div>
                </div>


            </div>
            <button class="guidant-btn guidant_result_create_btn" onclick="guidant_result_create('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create', 'guidant'); ?></button>
        </div>
    </div>
</div>