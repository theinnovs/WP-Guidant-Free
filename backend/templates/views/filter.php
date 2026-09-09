<div id="guidant_filters_update" style="display: none;">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('Update Filter', 'guidant'); ?> </h3>

    </div>
    <div class="guidant_block_1">
        <div class="guidant_form_group">
            <label for="guidant_filters_update_filter_name"><?php echo esc_html__('Filter Name', 'guidant'); ?> <?php $this->guidant_field_info("Name to identify the filter. Not visible in the front-end area."); ?></label>
            <input type="text" name="ftitle" id="guidant_filters_update_filter_name" placeholder="Give a Name here...">
            <p class="guidant_field_error" id="guidant_filters_update_filter_name_empty"><?php echo esc_html__('Filter Name Can\'t be Empty', 'guidant'); ?></p>
        </div>
        <div class="guidant_form_group">
            <label for="guidant_filters_update_filter_title"><?php echo esc_html__('Filter Title', 'guidant'); ?> <?php $this->guidant_field_info("Title of your filter, this can be empty. Visible in filter front-end design."); ?></label>
            <input type="text" name="ftitle" id="guidant_filters_update_filter_title" placeholder="Add title here...">
        </div>
        <div class="guidant_form_group">
            <label for="guidant_filters_update_filter_description"><?php echo esc_html__('Filter Description', 'guidant'); ?> <?php $this->guidant_field_info("You can add a short description to display it after the title."); ?></label>
            <textarea id="guidant_filters_update_filter_description"></textarea>
        </div>
        <div class="guidant_form_group">
            <label for="guidant_filters_update_filter_type"><?php echo esc_html__('Filter Type', 'guidant'); ?> <?php $this->guidant_field_info("Choose either to display cards or sliders or custom form in your filter."); ?></label>
            <select id="guidant_filters_update_filter_type">
                <option value=""><?php echo esc_html__('Select', 'guidant'); ?></option>
                <option value="card"><?php echo esc_html__('Card', 'guidant'); ?></option>
                <option value="slider"><?php echo esc_html__('Slider', 'guidant'); ?></option>
                <option value="form"><?php echo esc_html__('Form', 'guidant'); ?></option>
            </select>
            <p class="guidant_field_error" id="guidant_filters_update_filter_type_empty"><?php echo esc_html__('Filter Type must be selected', 'guidant'); ?></p>
        </div>

        <div id="guidant_filters_update_card_type_container" style="display: none;">
            <div class="guidant_form_group">
                <label for="guidant_filters_update_card_type"><?php echo esc_html__('Card Type', 'guidant'); ?> <?php $this->guidant_field_info("Choose either multiple cards (Checkbox) can be selected or only one card (Radio)."); ?></label>
                <select id="guidant_filters_update_card_type">
                    <option value="checkbox"><?php echo esc_html__('Checkbox', 'guidant'); ?></option>
                    <option value="radio"><?php echo esc_html__('Radio', 'guidant'); ?></option>
                </select>
            </div>
        </div>

        <button class="guidant-btn guidant_filters_update_btn" style="margin-top: 25px" onclick="guidant_filters_update('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Save', 'guidant'); ?></button>
    </div>
</div>


<div id="guidant_filters_create" style="display: none;">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('Create New Filter', 'guidant'); ?> </h3>

    </div>
    <div class="guidant_block_1">
        <div class="guidant_form_group">
            <label for="guidant_filters_create_filter_name"><?php echo esc_html__('Filter Name', 'guidant'); ?> <?php $this->guidant_field_info("Name to identify the filter. Not visible in the front-end area."); ?></label>
            <input type="text" name="ftitle" id="guidant_filters_create_filter_name" placeholder="<?php echo esc_attr__('Give a Name here...', 'guidant'); ?>">
            <p class="guidant_field_error" id="guidant_filters_create_filter_name_empty"><?php echo esc_html__('Filter Name Can\'t be Empty', 'guidant'); ?></p>
        </div>
        <div class="guidant_form_group">
            <label for="guidant_filters_create_filter_title"><?php echo esc_html__('Filter Title', 'guidant'); ?> <?php $this->guidant_field_info("Title of your filter, this can be empty. Visible in filter front-end design."); ?></label>
            <input type="text" name="ftitle" id="guidant_filters_create_filter_title" placeholder="<?php echo esc_attr__('Add title here...', 'guidant'); ?>">
        </div>
        <div class="guidant_form_group">
            <label for="guidant_filters_create_filter_description"><?php echo esc_html__('Filter Description', 'guidant'); ?> <?php $this->guidant_field_info("You can add a short description to display it after the title."); ?></label>
            <textarea id="guidant_filters_create_filter_description"></textarea>
        </div>

        <div class="guidant_form_group">
            <label for="guidant_filters_create_filter_type"><?php echo esc_html__('Filter Type', 'guidant'); ?> <?php $this->guidant_field_info("Choose either to display cards or sliders or custom form in your filter."); ?></label>
            <select id="guidant_filters_create_filter_type">
                <option value=""><?php echo esc_html__('Select', 'guidant'); ?></option>
                <option value="card"><?php echo esc_html__('Card', 'guidant'); ?></option>
                <option value="slider"><?php echo esc_html__('Slider', 'guidant'); ?></option>
                <option value="form"><?php echo esc_html__('Form', 'guidant'); ?></option>
            </select>
            <p class="guidant_field_error" id="guidant_filters_create_filter_type_empty"><?php echo esc_html__('Filter Type must be selected', 'guidant'); ?></p>
        </div>

        <div id="guidant_filters_create_card_type_container" style="display: none;">
            <div class="guidant_form_group">
                <label for="guidant_filters_create_card_type"><?php echo esc_html__('Card Type', 'guidant'); ?> <?php $this->guidant_field_info("Choose either multiple cards (Checkbox) can be selected or only one card (Radio)."); ?></label>
                <select id="guidant_filters_create_card_type">
                    <option value="checkbox"><?php echo esc_html__('Checkbox', 'guidant'); ?></option>
                    <option value="radio"><?php echo esc_html__('Radio', 'guidant'); ?></option>
                </select>
            </div>
        </div>

        <button class="guidant-btn guidant_filters_create_btn" style="margin-top: 25px" onclick="guidant_filters_create('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create', 'guidant'); ?></button>
    </div>
</div>





<div id="guidant_filters_list" style="display: none;">
    <div class="guidant-body-title">
        <h3> <?php echo esc_html__('Filters', 'guidant'); ?> </h3>
        <div style="display: flex;">
            <button style="margin-right: 12px" class="guidant-btn-light-img" onclick="guidant_guides_list('<?php echo esc_attr(GUIDANT_URL); ?>')"> <img src="<?php echo esc_attr(GUIDANT_IMG_DIR); ?>/guidant-back-icon.svg" > <?php echo esc_html__('Back to All Guides', 'guidant'); ?></button>
            <button class="guidant-btn" onclick="guidant_filters_create_show('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create Filter', 'guidant'); ?></button>
        </div>

    </div>
    <div class="guidant_loader_block guidant-loader" style="display: none;">
        <div class='loader'></div>
    </div>
    <div class="guidant_empty_style_1 guidant-empty">
        <h3><?php echo esc_html__("You don't have any filter yet", 'guidant'); ?></h3>
        <button class="guidant-btn" onclick="guidant_filters_create_show('<?php echo esc_attr(GUIDANT_URL); ?>')"> <?php echo esc_html__('Create New Filter', 'guidant'); ?></button>
    </div>
    <div id="guidant_filters_list_items">
    </div>
</div>