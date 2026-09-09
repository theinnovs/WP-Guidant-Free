<div id="guidant_form_tab_page_container" style="display: none;">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('Form Element Settings', 'guidant'); ?> </h3>

        <div style="display: flex;">
            <button style="margin-right: 12px" class="guidant-btn-light-img" onclick="guidant_form_back_to_elements('<?php echo esc_attr(GUIDANT_URL); ?>')"> <img src="<?php echo esc_attr(GUIDANT_IMG_DIR); ?>/guidant-back-icon.svg" > <?php echo esc_html__('Back to All Elements', 'guidant'); ?></button>
            <button class="guidant-btn guidant_card_update_btn" onclick="guidant_form_tab_page_save('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Save Changes', 'guidant'); ?></button>
        </div>
    </div>
    <div class="guidant_loader_block guidant-loader" style="display: none;">
        <div class='loader'></div>
    </div>
    <div class="guidant-card-setting">
        <div class="guidant_tab_menu">
            <ul>
                <li> <?php echo esc_html__('Element Settings', 'guidant'); ?> </li>
            </ul>
        </div>
        <div class="guidant_tab_body">

            <div class="guidant_tab_item">
                <div class="guidant_form_group">
                    <label for="guidant_form_tab_page_element_label"> <?php echo esc_html__('Element Label', 'guidant'); ?></label>
                    <input type="text" id="guidant_form_tab_page_element_label" placeholder="<?php echo esc_attr__('Text to be displayed as label of the element', 'guidant'); ?>">
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_form_tab_page_input_type"> <?php echo esc_html__('Element Type', 'guidant'); ?> </label>
                    <select id="guidant_form_tab_page_input_type">
                        <option value="input"> <?php echo esc_html__('Input Field', 'guidant'); ?> </option>
                        <option value="select"> <?php echo esc_html__('Select Field', 'guidant'); ?> </option>
                        <option value="checkbox"> <?php echo esc_html__('Checkbox', 'guidant'); ?> </option>
                        <option value="radio"> <?php echo esc_html__('Radio Field', 'guidant'); ?> </option>
                        <option value="textarea"> <?php echo esc_html__('Textarea', 'guidant'); ?> </option>
                    </select>
                </div>


                <div id="guidant_form_tab_page_input_field_type_container" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant_form_tab_page_input_field_type"> <?php echo esc_html__('Input Type', 'guidant'); ?> </label>
                        <select id="guidant_form_tab_page_input_field_type">
                            <option value="text"> <?php echo esc_html__('Text', 'guidant'); ?> </option>
                            <option value="number"> <?php echo esc_html__('Number', 'guidant'); ?> </option>
                            <option value="email"> <?php echo esc_html__('Email', 'guidant'); ?> </option>
                            <option value="password"> <?php echo esc_html__('Password', 'guidant'); ?> </option>
                            <option value="date"> <?php echo esc_html__('Date', 'guidant'); ?> </option>
                            <option value="time"> <?php echo esc_html__('Time', 'guidant'); ?> </option>
                        </select>
                    </div>
                </div>


                <div id="guidant_form_tab_page_input_type_select_container" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-gname"> <?php echo esc_html__('Select Field Options', 'guidant'); ?> </label>
                    </div>
                    <div id="guidant_form_tab_page_select_options_container"></div>
                    <button class="guidant-btn-sm" style="margin-top: 12px;" onclick="guidant_form_tab_page_add_select_option(``)"><?php echo esc_html__('Add Option', 'guidant'); ?></button>
                </div>

                <div id="guidant_form_tab_page_input_type_checkbox_container" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-gname"> <?php echo esc_html__('Checkbox Items', 'guidant'); ?> </label>
                    </div>
                    <div id="guidant_form_tab_page_checkbox_options_container"></div>
                    <button class="guidant-btn-sm" style="margin-top: 12px;" onclick="guidant_form_tab_page_add_checkbox_option(``)"><?php echo esc_html__('Add Item', 'guidant'); ?></button>
                </div>

                <div id="guidant_form_tab_page_input_type_radio_container" style="display: none;">
                    <div class="guidant_form_group">
                        <label for="guidant-gname"> <?php echo esc_html__('Radio Items', 'guidant'); ?> </label>
                    </div>
                    <div id="guidant_form_tab_page_radio_options_container"></div>
                    <button class="guidant-btn-sm" style="margin-top: 12px;" onclick="guidant_form_tab_page_add_radio_option(``)"><?php echo esc_html__('Add Item', 'guidant'); ?></button>
                </div>


                <div class="guidant_form_group">
                    <label for="guidant_form_tab_page_element_required"> <?php echo esc_html__('Is field required?', 'guidant'); ?> </label>
                    <select id="guidant_form_tab_page_element_required">
                        <option value="required"> <?php echo esc_html__('Required', 'guidant'); ?> </option>
                        <option value="optional"> <?php echo esc_html__('Optional', 'guidant'); ?> </option>
                    </select>
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_form_tab_page_element_label"> <?php echo esc_html__('Custom Class', 'guidant'); ?> </label>
                    <input type="text" id="guidant_form_tab_page_element_class" pattern="[^.]" placeholder="Custom Class Names.  Ex: class1 class2">
                </div>


            </div>
        </div>
    </div>
</div>