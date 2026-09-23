<div id="guidant_logic_create" style="display: none;">
    <div class="guidant-modal">
        <div class="guidant-modalheader">
            <h3> <?php echo esc_html__('Create a New Logic', 'guidant'); ?></h3>
            <span class="dashicons dashicons-no-alt target" onclick="guidant_logic_create_close('<?php echo esc_attr(GUIDANT_URL); ?>')"></span>
        </div>
        <div class="guidant-modalbody">
            <div class="guidant-modalform">
                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Choose Element (Card)', 'guidant'); ?> </label>
                    <select id="guidant_logic_create_selected_element">
                        <option value=""> <?php echo esc_html__('Select', 'guidant'); ?> </option>
                    </select>
                    <p class="guidant_field_error" id="guidant_logic_create_selected_element_empty"> <?php echo esc_html__('Element Not Selected', 'guidant'); ?> </p>
                </div>



                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Selection Method', 'guidant'); ?> </label>
                    <select id="guidant_logic_create_card_selection_method">
                        <option value="selected"> <?php echo esc_html__('Selected', 'guidant'); ?> </option>
                    </select>
                </div>


                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Filter to Hide', 'guidant'); ?> </label>
                    <select id="guidant_logic_create_selected_filter_to_hide">
                        <option value=""> <?php echo esc_html__('Select', 'guidant'); ?> </option>
                    </select>
                    <p class="guidant_field_error" id="guidant_logic_create_selected_filter_to_hide_empty"> <?php echo esc_html__('Filter Not Selected', 'guidant'); ?> </p>
                </div>



            </div>
            <button class="guidant-btn guidant_logic_create_btn" onclick="guidant_logic_create('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create', 'guidant'); ?></button>
        </div>
    </div>
</div>