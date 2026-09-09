<div class="guidant-header">
    <div class="guidant-logo">
        <img src="<?php echo GUIDANT_IMG_DIR . "/guidant-logo.svg" ?>" height="30px" alt="WP Guidant"/>
    </div>
    <div class="guidant-top-menu">
        <ul>
            <li><a href="#" class="active" id="guidant_header_guides_menu" onclick="guidant_guides_list(`<?php echo GUIDANT_URL; ?>`)"> <?php echo esc_html__('Guides', 'guidant'); ?></a></li>
            <li><a href="#" id="guidant_header_fields_menu" onclick="guidant_custom_fields_list(`<?php echo GUIDANT_URL; ?>`)"> <?php echo esc_html__('Custom Fields', 'guidant'); ?></a></li>
            <li><a href="#" id="guidant_header_reports_menu" onclick="guidant_reports_list(`<?php echo GUIDANT_URL; ?>`, `0`, `1`)"> <?php echo esc_html__('Reports', 'guidant'); ?></a></li>
            <li><a href="https://wpcommerz.com/guidant" class="pro" target="_blank"> <?php echo esc_html__('Get Pro', 'guidant'); ?></a></li>

        </ul>
    </div>
</div>