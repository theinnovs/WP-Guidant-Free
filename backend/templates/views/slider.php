<div id="guidant_slider_tab_page_container" style="display: none;">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('Slider Settings', 'guidant'); ?> </h3>

        <div style="display: flex;">
            <button style="margin-right: 12px" class="guidant-btn-light-img" onclick="guidant_slider_back_to_elements('<?php echo esc_attr(GUIDANT_URL); ?>')"> <img src="<?php echo esc_attr(GUIDANT_IMG_DIR); ?>/guidant-back-icon.svg" > <?php echo esc_html__('Back to All Sliders', 'guidant'); ?></button>
            <button class="guidant-btn guidant_slider_update_btn" onclick="guidant_slider_tab_page_save('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Save Changes', 'guidant'); ?></button>
        </div>

    </div>
    <div class="guidant_loader_block guidant-loader" style="display: none;">
        <div class='loader'></div>
    </div>
    <div class="guidant-card-setting">
        <div class="guidant_tab_menu">
            <ul>
                <li> <?php echo esc_html__('Slider Settings', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Slider Conditions', 'guidant'); ?> </li>
            </ul>
        </div>
        <div class="guidant_tab_body">

            <div class="guidant_tab_item">

                <div class="guidant_form_group">
                    <label for="guidant_slider_tab_page_slider_label"> <?php echo esc_html__('Slider Label', 'guidant'); ?></label>
                    <input type="text" id="guidant_slider_tab_page_slider_label" placeholder="<?php echo esc_attr__('Text to be displayed above slider', 'guidant'); ?>">
                </div>

                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Slider Type', 'guidant'); ?> </label>
                    <select id="guidant_slider_tab_page_slider_type">
                        <option value="single"> <?php echo esc_html__('Single', 'guidant'); ?></option>
                        <option value="range"> <?php echo esc_html__('Range', 'guidant'); ?></option>
                    </select>
                </div>

                <div class="guidant_form_group">
                    <label for="guidant-cardfilset-imglab"> <?php echo esc_html__('Slider Image', 'guidant'); ?></label>
                    <input type="hidden" id="guidant_slider_tab_page_image">
                    <div class="guidant-img-field-container">
                        <img id="guidant_slider_tab_page_image_shower"/>
                        <span onclick="guidant_image_chooser('guidant_slider_tab_page_image', 'guidant_slider_tab_page_image_shower')"> <?php echo esc_html__('Select Image', 'guidant'); ?></span>
                        <span onclick="guidant_image_cleaner('<?php echo GUIDANT_IMG_DIR; ?>', 'guidant_slider_tab_page_image', 'guidant_slider_tab_page_image_shower')"> <?php echo esc_html__('Clear Image', 'guidant'); ?></span>
                    </div>
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_slider_tab_page_min_range"> <?php echo esc_html__('Minimum Range', 'guidant'); ?></label>
                    <input type="number" id="guidant_slider_tab_page_min_range">
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_slider_tab_page_max_range"> <?php echo esc_html__('Maximum Range', 'guidant'); ?></label>
                    <input type="number" id="guidant_slider_tab_page_max_range">
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_slider_tab_page_slider_step"> <?php echo esc_html__('Slider Step', 'guidant'); ?></label>
                    <input type="number" id="guidant_slider_tab_page_slider_step">
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_slider_tab_page_slider_prefix_text"> <?php echo esc_html__('Text before Slider Value', 'guidant'); ?></label>
                    <input type="text" id="guidant_slider_tab_page_slider_prefix_text">
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_slider_tab_page_slider_postfix_text"> <?php echo esc_html__('Text after Slider Value', 'guidant'); ?></label>
                    <input type="text" id="guidant_slider_tab_page_slider_postfix_text">
                </div>


                <div class="guidant_form_group">
                    <label for="guidant-fdes"> <?php echo esc_html__('Condition Behavior', 'guidant'); ?></label>
                    <select id="guidant_slider_tab_page_behavior">
                        <option value="or"> <?php echo esc_html__('OR - Any of the conditions need to be matched', 'guidant'); ?></option>
                        <option value="and"> <?php echo esc_html__('AND - All conditions need to be matched', 'guidant'); ?></option>
                    </select>
                </div>
            </div>

            <div class="guidant_tab_item">

                <div id="guidant_slider_conditions_list" style="display: none;">
                    <div class="guidant_loader_block guidant-loader" style="display: none;">
                        <div class='loader'></div>
                    </div>
                    <div class="guidant_empty_style_2 guidant-empty">
                        <h3><?php echo esc_html__('No condition created yet', 'guidant'); ?></h3>
                        <button class="guidant-btn" onclick="guidant_conditions_create_show('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create New Condition', 'guidant'); ?></button>
                    </div>
                    <div id="guidant_slider_conditions_list_items">
                        <!--<div class="guidant_card_style_2">
                        <p> Test Card One </p>
                        <div class="guidant_card_action">
                            <a href="#" class="guidant-edit-icon"><img src="<?php /*echo GUIDANT_FRONT_IMG_DIR . "/edit.png" */?>" alt="icon"/> </a>
                            <a href="#" class="guidant-trash-icon"><img src="<?php /*echo GUIDANT_FRONT_IMG_DIR . "/trash.png" */?>" alt="icon"/> </a>
                        </div>
                    </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>