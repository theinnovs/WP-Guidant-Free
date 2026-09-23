<div id="guidant_guide_update_tab_page_container" style="display: none; min-height: 800px">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('Guide Settings', 'guidant'); ?> </h3>
        <div>
            <button class="guidant-btn guidant_guide_update_btn" onclick="guidant_guides_update('<?php echo esc_attr(GUIDANT_URL); ?>')"><?php echo esc_html__('Save Changes', 'guidant'); ?></button>
        </div>

    </div>
    <div class="guidant_loader_block guidant-loader" style="display: none;">
        <div class='loader'></div>
    </div>
    <div class="guidant-card-setting">
        <div class="guidant_tab_menu">
            <ul>
                <li> <?php echo esc_html__('Guide Basic', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Advanced Settings', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Guide Design', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Filter Design', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Card Design', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Slider Design', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Form Design', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Conditional Logic', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Result', 'guidant'); ?> </li>
                <li> <?php echo esc_html__('Result Attributes', 'guidant'); ?> </li>
            </ul>
        </div>
        <div class="guidant_tab_body">




            <div class="guidant_tab_item">

                <div class="guidant_form_group">
                    <label for="guidant_guides_update_guide_name"><?php echo esc_html__('Guide Name', 'guidant'); ?> <?php $this->guidant_field_info("Name to identify the guide. Not visible in the front-end area."); ?></label>
                    <input type="text" id="guidant_guides_update_guide_name" placeholder="<?php echo esc_attr__('Name your guide name here...', 'guidant'); ?>">
                    <p class="guidant_field_error" id="guidant_guides_update_guide_name_empty"><?php echo esc_html__('Guide Name Can\'t be Empty', 'guidant'); ?></p>
                </div>

                <!--<div class="guidant_form_group">
                    <label for="guidant_guides_update_guide_submission_tracking"><?php //echo esc_html__('Submission Report Tracking', 'guidant'); ?> <?php /*$this->guidant_field_info("Enable or Disable tracking of how user's are interacting with this guide in the front-end."); */?></label>
                    <select id="guidant_guides_update_guide_submission_tracking">
                        <option value="enable">Enable - Track users activity</option>
                        <option value="disable">Disable - Do not track</option>
                    </select>
                </div>-->

                <div class="guidant_form_group">
                    <label for="guidant_guides_update_guide_title"><?php echo esc_html__('Guide Title', 'guidant'); ?> <?php $this->guidant_field_info("Title of your guide, can be empty. Visible in guide front-end design."); ?></label>
                    <input type="text" id="guidant_guides_update_guide_title" placeholder="<?php echo esc_attr__('Add title here...', 'guidant'); ?>">
                </div>

                <div class="guidant_form_group">
                    <label for="guidant_guides_update_guide_description"><?php echo esc_html__('Guide Description', 'guidant'); ?> <?php $this->guidant_field_info("You can add a short description to display it after the title."); ?></label>
                    <textarea id="guidant_guides_update_guide_description" placeholder="<?php echo esc_attr__('Add description here...', 'guidant'); ?>"></textarea>
                </div>

            </div>










            <div class="guidant_tab_item">


                <div class="guidant_form_group_small wider_space">
                    <h4> <?php echo esc_html__('Submission Report Tracking', 'guidant'); ?> <?php $this->guidant_field_info("Enable or Disable tracking of how user's are interacting with this guide in the front-end."); ?></h4>
                    <div>
                        <select id="guidant_guides_update_guide_submission_tracking">
                            <option value="enable"> <?php echo esc_html__('Enable', 'guidant'); ?> </option>
                            <option value="disable"> <?php echo esc_html__('Disable', 'guidant'); ?> </option>
                        </select>
                    </div>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Email to User on Submission', 'guidant'); ?> <?php $this->guidant_field_info("Enable or Disable automatic email sending to user on guide completion."); ?></h4>
                    <div>
                        <select id="guidant_guides_update_guide_email_to_user" disabled>
                            <option value="enable"> <?php echo esc_html__('Enable', 'guidant'); ?> </option>
                            <option value="disable"> <?php echo esc_html__('Disable', 'guidant'); ?> </option>
                        </select>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>



                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Mailchimp Integration', 'guidant'); ?> </h4>
                    <div class="guidant-card-api-integration">
                        <span id="guidant_mailchimp_connect_field_btn" class="guidant-card-api-integration-text-large"> <?php echo esc_html__('Connect Mailchimp', 'guidant'); ?> </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Custom CSS', 'guidant'); ?> </h4>
                    <div class="guidant-card-api-integration">
                        <span class="guidant-card-api-integration-text-large"> <?php echo esc_html__('Add Custom CSS', 'guidant'); ?> </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Guide on Popup', 'guidant'); ?> <?php $this->guidant_field_info("Display guide on popup on button click."); ?></h4>
                    <div>
                        <select id="guidant_guides_update_guide_on_popup" disabled>
                            <option value="enable"> <?php echo esc_html__('Enable', 'guidant'); ?> </option>
                            <option value="disable"> <?php echo esc_html__('Disable', 'guidant'); ?> </option>
                        </select>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>



            </div>


            <div class="guidant_tab_item">

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Title color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_guide_title_color">
                        <label for="guidant_guides_update_guide_title_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Title Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_guide_title_fontsize">
                        <span class="guidant-px"> px </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Description Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_guide_description_color">
                        <label for="guidant_guides_update_guide_description_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Description Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_guide_description_fontsize">
                        <span class="guidant-px"> px </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Background Image', 'guidant'); ?> </h4>
                    <input type="hidden" id="guidant_guides_update_guide_background_image">
                    <div class="guidant-card-guiduploadimg">
                        <img id="guidant_guides_update_guide_background_image_shower" alt="image"/>
                        <span onclick="" class="guidant-guiduploadimg-text"> <?php echo esc_html__('select image', 'guidant'); ?> </span>
                        <span onclick="" class="guidant-guiduploadimg-text"> <?php echo esc_html__('clear image', 'guidant'); ?> </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Background Start Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_guide_background_startcolor">
                        <label for="guidant_guides_update_guide_background_startcolor"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Background End Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_guide_background_endcolor">
                        <label for="guidant_guides_update_guide_background_endcolor"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Background Color Direction', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_guide_background_direction">
                        <span class="guidant-px"> <?php echo esc_html__('Degree', 'guidant'); ?> </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

            </div>



            <div class="guidant_tab_item">


                <div class="guidant_form_group_small wider_space">
                    <h4> <?php echo esc_html__('Prev Button Text', 'guidant'); ?> </h4>
                    <div>
                        <input type="text" id="guidant_guides_update_filter_prev_btn_text">
                    </div>
                </div>

                <div class="guidant_form_group_small wider_space">
                    <h4> <?php echo esc_html__('Next Button Text', 'guidant'); ?> </h4>
                    <div>
                        <input type="text" id="guidant_guides_update_filter_next_btn_text">
                    </div>
                </div>

                <div class="guidant_form_group_small wider_space">
                    <h4> <?php echo esc_html__('Submit Button Text', 'guidant'); ?> </h4>
                    <div>
                        <input type="text" id="guidant_guides_update_filter_submit_btn_text">
                    </div>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Title Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_title_color">
                        <label for="guidant_guides_update_filter_title_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Title Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_filter_title_fontsize">
                        <span class="guidant-px"> <?php echo esc_html__('px', 'guidant'); ?> </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Description Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_description_color">
                        <label for="guidant_guides_update_filter_description_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Description Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_filter_description_fontsize">
                        <span class="guidant-px"> <?php echo esc_html__('px', 'guidant'); ?> </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_background_color">
                        <label for="guidant_guides_update_filter_background_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_border_color">
                        <label for="guidant_guides_update_filter_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>



                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Prev Button Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_prev_bg_color">
                        <label for="guidant_guides_update_filter_prev_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Prev Button Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_prev_border_color">
                        <label for="guidant_guides_update_filter_prev_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Prev Button Text Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_prev_text_color">
                        <label for="guidant_guides_update_filter_prev_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Next Button Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_next_bg_color">
                        <label for="guidant_guides_update_filter_next_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Next Button Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_next_border_color">
                        <label for="guidant_guides_update_filter_next_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Next Button Text Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_next_text_color">
                        <label for="guidant_guides_update_filter_next_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Submit Button Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_submit_bg_color">
                        <label for="guidant_guides_update_filter_submit_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Submit Button Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_submit_border_color">
                        <label for="guidant_guides_update_filter_submit_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Submit Button Text Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_filter_submit_text_color">
                        <label for="guidant_guides_update_filter_submit_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

            </div>







            <div class="guidant_tab_item">

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Card Size', 'guidant'); ?> <?php $this->guidant_field_info("Select card size."); ?></h4>
                    <div>
                        <select id="guidant_guides_update_guide_card_size">
                            <option value="standard"><?php echo esc_html__('Standard', 'guidant'); ?></option>
                            <option value="large"><?php echo esc_html__('Large', 'guidant'); ?></option>
                            <option value="extra_large"><?php echo esc_html__('Extra Large', 'guidant'); ?></option>
                        </select>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>
                
                <div class="guidant_form_group_small wider_space">
                    <h4> <?php echo esc_html__('Card Image Height', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_card_image_height">
                        <span class="guidant-px"> px </span>
                    </div>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Label Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_label_color">
                        <label for="guidant_guides_update_card_label_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Label Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_card_label_fontsize">
                        <span class="guidant-px"> px </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>
                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Description Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_description_color">
                        <label for="guidant_guides_update_card_description_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Description Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_card_description_fontsize" value="16">
                        <span class="guidant-px"> px </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>



                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_border_color">
                        <label for="guidant_guides_update_card_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Border Hover Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_border_hover_color">
                        <label for="guidant_guides_update_card_border_hover_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Border Active Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_border_active_color">
                        <label for="guidant_guides_update_card_border_active_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_background_color">
                        <label for="guidant_guides_update_card_background_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_radio_border_color">
                        <label for="guidant_guides_update_card_radio_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Border Hover Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_radio_border_hover_color">
                        <label for="guidant_guides_update_card_radio_border_hover_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Selected Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_radio_selected_bg_color">
                        <label for="guidant_guides_update_card_radio_selected_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Selected Icon Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_card_radio_selected_icon_color">
                        <label for="guidant_guides_update_card_radio_selected_icon_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Auto move to next filter', 'guidant'); ?> <?php $this->guidant_field_info("Automatically move to next filter on radio card selection."); ?></h4>
                    <div>
                        <select id="guidant_guides_update_guide_auto_move_to_next_filter">
                            <option value="enable"><?php echo esc_html__('Enable', 'guidant'); ?></option>
                            <option value="disable"><?php echo esc_html__('Disable', 'guidant'); ?></option>
                        </select>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

            </div>



            <div class="guidant_tab_item">

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Label Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_slider_label_color">
                        <label for="guidant_guides_update_slider_label_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Label Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_slider_label_fontsize">
                        <span class="guidant-px"> px </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Slider Image Height', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_slider_image_height">
                        <span class="guidant-px"> px </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Slider Base Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_slider_base_bg_color">
                        <label for="guidant_guides_update_slider_base_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Slider Selected Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_slider_selected_bg_color">
                        <label for="guidant_guides_update_slider_selected_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

            </div>








            <div class="guidant_tab_item">

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Label Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_label_color">
                        <label for="guidant_guides_update_form_label_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Label Font Size', 'guidant'); ?> </h4>
                    <div>
                        <input type="number" id="guidant_guides_update_form_label_fontsize">
                        <span class="guidant-px"> px </span>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Input Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_input_bg_color">
                        <label for="guidant_guides_update_form_input_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Input Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_input_border_color">
                        <label for="guidant_guides_update_form_input_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Input Text Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_input_text_color">
                        <label for="guidant_guides_update_form_input_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Option Text Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_radio_item_text_color">
                        <label for="guidant_guides_update_form_radio_item_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Border Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_radio_border_color">
                        <label for="guidant_guides_update_form_radio_border_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>


                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Selected Background Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_radio_selected_bg_color">
                        <label for="guidant_guides_update_form_radio_selected_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Radio Selected Icon Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_form_radio_selected_icon_color">
                        <label for="guidant_guides_update_form_radio_selected_icon_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>
            </div>








            <div class="guidant_tab_item">

                <div id="guidant_guide_logic_list" style="display: none;">
                    <div class="guidant_loader_block guidant-loader" style="display: none;">
                        <div class='loader'></div>
                    </div>
                    <div class="guidant_empty_style_2 guidant-empty-logic">
                        <h3><?php echo esc_html__('No logic created yet', 'guidant'); ?></h3>
                        <button class="guidant-btn" onclick="guidant_logic_create_show('<?php echo esc_attr(GUIDANT_URL); ?>')"><?php echo esc_html__('Create New Logic', 'guidant'); ?></button>
                    </div>
                    <div id="guidant_guide_logic_list_items">

                    </div>
                </div>
            </div>





            <div class="guidant_tab_item">

                <div class="guidant_form_group_small wider_space">
                    <h4> <?php echo esc_html__('Display Result on Completion?', 'guidant'); ?> </h4>
                    <div>
                        <select id="guidant_guides_update_display_result">
                            <option value="true"><?php echo esc_html__('Yes', 'guidant'); ?></option>
                            <option value="false"><?php echo esc_html__('No', 'guidant'); ?></option>
                        </select>
                    </div>
                </div>


                <div id="guidant_guides_update_display_result_container" style="display: none;">

                    <div class="guidant_form_group_small wider_space">
                        <h4> <?php echo esc_html__('Maximum Results', 'guidant'); ?> </h4>
                        <div>
                            <input type="number" id="guidant_guides_update_result_maximum">
                        </div>
                    </div>

                    <div class="guidant_form_group_small wider_space">
                        <h4> <?php echo esc_html__('Headline', 'guidant'); ?> </h4>
                        <div>
                            <input type="text" id="guidant_guides_update_result_headline_text">
                        </div>
                    </div>

                    <div class="guidant_form_group_small wider_space">
                        <h4> <?php echo esc_html__('More Results Text', 'guidant'); ?> </h4>
                        <div>
                            <input type="text" id="guidant_guides_update_result_more_text">
                        </div>
                    </div>

                    <div class="guidant_form_group_small wider_space">
                        <h4> <?php echo esc_html__('No Results Text', 'guidant'); ?> </h4>
                        <div>
                            <input type="text" id="guidant_guides_update_result_empty_text">
                        </div>
                    </div>



                    <div class="guidant_form_group_small wider_space pro_field">
                        <h4> <?php echo esc_html__('Headline Text Color', 'guidant'); ?> </h4>
                        <div class="guidant-color-container">
                            <input type="color" id="guidant_guides_update_result_headline_text_color">
                            <label for="guidant_guides_update_result_headline_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                        </div>
                        <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                    </div>

                    <div class="guidant_form_group_small wider_space pro_field">
                        <h4> <?php echo esc_html__('More Results Text Color', 'guidant'); ?> </h4>
                        <div class="guidant-color-container">
                            <input type="color" id="guidant_guides_update_result_more_text_color">
                            <label for="guidant_guides_update_result_more_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                        </div>
                        <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                    </div>

                    <div class="guidant_form_group_small wider_space pro_field">
                        <h4> <?php echo esc_html__('No Results Text Color', 'guidant'); ?> </h4>
                        <div class="guidant-color-container">
                            <input type="color" id="guidant_guides_update_result_empty_text_color">
                            <label for="guidant_guides_update_result_empty_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                        </div>
                        <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                    </div>

                    <div class="guidant_form_group_small wider_space pro_field">
                        <h4> <?php echo esc_html__('Result Card Background Color', 'guidant'); ?> </h4>
                        <div class="guidant-color-container">
                            <input type="color" id="guidant_guides_update_result_card_bg_color">
                            <label for="guidant_guides_update_result_card_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                        </div>
                        <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                    </div>

                    <div class="guidant_form_group_small wider_space pro_field">
                        <h4> <?php echo esc_html__('Result Card Text Color', 'guidant'); ?> </h4>
                        <div class="guidant-color-container">
                            <input type="color" id="guidant_guides_update_result_card_text_color">
                            <label for="guidant_guides_update_result_card_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                        </div>
                        <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                    </div>


                    <div class="guidant_form_group_small wider_space pro_field">
                        <h4> <?php echo esc_html__('Result Card Button BG Color', 'guidant'); ?> </h4>
                        <div class="guidant-color-container">
                            <input type="color" id="guidant_guides_update_result_card_button_bg_color">
                            <label for="guidant_guides_update_result_card_button_bg_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                        </div>
                        <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                    </div>
                    <div class="guidant_form_group_small wider_space pro_field">
                        <h4> <?php echo esc_html__('Result Card Button Text Color', 'guidant'); ?> </h4>
                        <div class="guidant-color-container">
                            <input type="color" id="guidant_guides_update_result_card_button_text_color">
                            <label for="guidant_guides_update_result_card_button_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                        </div>
                        <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                    </div>


                </div>


                <div id="guidant_guides_update_no_result_container" style="display: none;">

                    <div class="guidant_form_group_small wider_space">
                        <h4> <?php echo esc_html__('Primary Text', 'guidant'); ?> </h4>
                        <div>
                            <input type="text" id="guidant_guides_update_no_result_primary_text">
                        </div>
                    </div>

                    <div class="guidant_form_group_small wider_space">
                        <h4> <?php echo esc_html__('Secondary Text', 'guidant'); ?> </h4>
                        <div>
                            <input type="text" id="guidant_guides_update_no_result_secondary_text">
                        </div>
                    </div>

                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Start Over Text', 'guidant'); ?> </h4>
                    <div>
                        <input type="text" id="guidant_guides_update_result_start_over_text">
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

                <div class="guidant_form_group_small wider_space pro_field">
                    <h4> <?php echo esc_html__('Start Over Text Color', 'guidant'); ?> </h4>
                    <div class="guidant-color-container">
                        <input type="color" id="guidant_guides_update_result_start_over_text_color">
                        <label for="guidant_guides_update_result_start_over_text_color"> <?php echo esc_html__('Select Color', 'guidant'); ?> </label>
                    </div>
                    <span class="pro_tag"><strong><?php echo esc_html__('Pro', 'guidant'); ?></strong></span>
                </div>

            </div>





            <div class="guidant_tab_item">

                <div id="guidant_card_results_list" style="display: none;">
                    <div class="guidant_loader_block guidant-loader" style="display: none;">
                        <div class='loader'></div>
                    </div>
                    <div class="guidant_empty_style_2 guidant-empty">
                        <h3><?php echo esc_html__('No result attribute created yet', 'guidant'); ?></h3>
                        <button class="guidant-btn" onclick="guidant_results_create_show('<?php echo esc_attr(GUIDANT_URL); ?>')"><?php echo esc_html__('Create New Result Attribute', 'guidant'); ?></button>
                    </div>
                    <div id="guidant_card_results_list_items">

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>