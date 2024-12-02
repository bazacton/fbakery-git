<?php

$foodbakery_var_options = FOODBAKERY_VAR_GLOBALS()->theme_options();
$foodbakery_var_options = get_option( 'foodbakery_var_options' );
$foodbakery_var_options = (is_array($foodbakery_var_options))? $foodbakery_var_options : array();
$foodbakery_var_options['foodbakery_var_layout'] = isset( $foodbakery_var_options['foodbakery_var_layout'] ) ? $foodbakery_var_options['foodbakery_var_layout'] : '';
$foodbakery_var_options['foodbakery_var_bg_image'] = isset( $foodbakery_var_options['foodbakery_var_bg_image'] ) ? $foodbakery_var_options['foodbakery_var_bg_image'] : '';
$foodbakery_var_options['foodbakery_var_pattern_image'] = isset( $foodbakery_var_options['foodbakery_var_pattern_image'] ) ? $foodbakery_var_options['foodbakery_var_pattern_image'] : '';
$foodbakery_var_options['foodbakery_var_bg_color'] = isset( $foodbakery_var_options['foodbakery_var_bg_color'] ) ? $foodbakery_var_options['foodbakery_var_bg_color'] : '';
$foodbakery_var_options['foodbakery_var_custom_bgimage'] = isset( $foodbakery_var_options['foodbakery_var_custom_bgimage'] ) ? $foodbakery_var_options['foodbakery_var_custom_bgimage'] : '';
$foodbakery_var_options['foodbakery_var_bgimage_position'] = isset( $foodbakery_var_options['foodbakery_var_bgimage_position'] ) ? $foodbakery_var_options['foodbakery_var_bgimage_position'] : '';
$foodbakery_var_options['foodbakery_var_custom_favicon'] = isset( $foodbakery_var_options['foodbakery_var_custom_favicon'] ) ? $foodbakery_var_options['foodbakery_var_custom_favicon'] : '';
$foodbakery_var_options['foodbakery_var_responsive'] = isset( $foodbakery_var_options['foodbakery_var_responsive'] ) ? $foodbakery_var_options['foodbakery_var_responsive'] : '';
$foodbakery_var_options['foodbakery_var_excerpt_length'] = isset( $foodbakery_var_options['foodbakery_var_excerpt_length'] ) ? $foodbakery_var_options['foodbakery_var_excerpt_length'] : '';
$foodbakery_var_options['foodbakery_var_header_style'] = isset( $foodbakery_var_options['foodbakery_var_header_style'] ) ? $foodbakery_var_options['foodbakery_var_header_style'] : '';
$foodbakery_var_options['foodbakery_var_custom_logo'] = isset( $foodbakery_var_options['foodbakery_var_custom_logo'] ) ? $foodbakery_var_options['foodbakery_var_custom_logo'] : '';
$foodbakery_var_options['foodbakery_var_custom_logo_modern'] = isset( $foodbakery_var_options['foodbakery_var_custom_logo_modern'] ) ? $foodbakery_var_options['foodbakery_var_custom_logo_modern'] : '';
$foodbakery_var_options['foodbakery_var_logo_height'] = isset( $foodbakery_var_options['foodbakery_var_logo_height'] ) ? $foodbakery_var_options['foodbakery_var_logo_height'] : '';
$foodbakery_var_options['foodbakery_var_logo_width'] = isset( $foodbakery_var_options['foodbakery_var_logo_width'] ) ? $foodbakery_var_options['foodbakery_var_logo_width'] : '';
$foodbakery_var_options['foodbakery_var_logo_margint'] = isset( $foodbakery_var_options['foodbakery_var_logo_margint'] ) ? $foodbakery_var_options['foodbakery_var_logo_margint'] : '';
$foodbakery_var_options['foodbakery_var_logo_marginb'] = isset( $foodbakery_var_options['foodbakery_var_logo_marginb'] ) ? $foodbakery_var_options['foodbakery_var_logo_marginb'] : '';
$foodbakery_var_options['foodbakery_var_logo_marginr'] = isset( $foodbakery_var_options['foodbakery_var_logo_marginr'] ) ? $foodbakery_var_options['foodbakery_var_logo_marginr'] : '';
$foodbakery_var_options['foodbakery_var_logo_marginl'] = isset( $foodbakery_var_options['foodbakery_var_logo_marginl'] ) ? $foodbakery_var_options['foodbakery_var_logo_marginl'] : '';
$foodbakery_var_options['foodbakery_var_book_now'] = isset( $foodbakery_var_options['foodbakery_var_book_now'] ) ? $foodbakery_var_options['foodbakery_var_book_now'] : '';
$foodbakery_var_options['foodbakery_var_woocommerce_cart_icon'] = isset( $foodbakery_var_options['foodbakery_var_woocommerce_cart_icon'] ) ? $foodbakery_var_options['foodbakery_var_woocommerce_cart_icon'] : '';
$foodbakery_var_options['foodbakery_var_default_header'] = isset( $foodbakery_var_options['foodbakery_var_default_header'] ) ? $foodbakery_var_options['foodbakery_var_default_header'] : '';
$foodbakery_var_options['foodbakery_var_header_border_color'] = isset( $foodbakery_var_options['foodbakery_var_header_border_color'] ) ? $foodbakery_var_options['foodbakery_var_header_border_color'] : '';
$foodbakery_var_options['foodbakery_var_custom_slider'] = isset( $foodbakery_var_options['foodbakery_var_custom_slider'] ) ? $foodbakery_var_options['foodbakery_var_custom_slider'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_style'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_style'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_style'] : '';
$foodbakery_var_options['foodbakery_var_sh_paddingtop'] = isset( $foodbakery_var_options['foodbakery_var_sh_paddingtop'] ) ? $foodbakery_var_options['foodbakery_var_sh_paddingtop'] : '';
$foodbakery_var_options['foodbakery_var_sh_paddingbottom'] = isset( $foodbakery_var_options['foodbakery_var_sh_paddingbottom'] ) ? $foodbakery_var_options['foodbakery_var_sh_paddingbottom'] : '';
$foodbakery_var_options['foodbakery_var_sh_margintop'] = isset( $foodbakery_var_options['foodbakery_var_sh_margintop'] ) ? $foodbakery_var_options['foodbakery_var_sh_margintop'] : '';
$foodbakery_var_options['foodbakery_var_sh_marginbottom'] = isset( $foodbakery_var_options['foodbakery_var_sh_marginbottom'] ) ? $foodbakery_var_options['foodbakery_var_sh_marginbottom'] : '';
$foodbakery_var_options['foodbakery_var_page_title_switch'] = isset( $foodbakery_var_options['foodbakery_var_page_title_switch'] ) ? $foodbakery_var_options['foodbakery_var_page_title_switch'] : '';
$foodbakery_var_options['foodbakery_var_breadcrumbs_switch'] = isset( $foodbakery_var_options['foodbakery_var_breadcrumbs_switch'] ) ? $foodbakery_var_options['foodbakery_var_breadcrumbs_switch'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_text_color'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_text_color'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_text_color'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_border_color'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_border_color'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_border_color'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_fancy_hdng'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_fancy_hdng'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_fancy_hdng'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_sub_hdng'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_sub_hdng'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_sub_hdng'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_bg_img'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_bg_img'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_bg_img'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_parallax'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_parallax'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_parallax'] : '';
$foodbakery_var_options['foodbakery_var_sub_header_bg_clr'] = isset( $foodbakery_var_options['foodbakery_var_sub_header_bg_clr'] ) ? $foodbakery_var_options['foodbakery_var_sub_header_bg_clr'] : '';
$foodbakery_var_options['foodbakery_var_footer_switch'] = isset( $foodbakery_var_options['foodbakery_var_footer_switch'] ) ? $foodbakery_var_options['foodbakery_var_footer_switch'] : '';
$foodbakery_var_options['foodbakery_var_footer_widget'] = isset( $foodbakery_var_options['foodbakery_var_footer_widget'] ) ? $foodbakery_var_options['foodbakery_var_footer_widget'] : '';
$foodbakery_var_options['foodbakery_var_footer_menu'] = isset( $foodbakery_var_options['foodbakery_var_footer_menu'] ) ? $foodbakery_var_options['foodbakery_var_footer_menu'] : '';
$foodbakery_var_options['foodbakery_var_footer_logo'] = isset( $foodbakery_var_options['foodbakery_var_footer_logo'] ) ? $foodbakery_var_options['foodbakery_var_footer_logo'] : '';
$foodbakery_var_options['foodbakery_var_logo_link'] = isset( $foodbakery_var_options['foodbakery_var_logo_link'] ) ? $foodbakery_var_options['foodbakery_var_logo_link'] : '';
$foodbakery_var_options['foodbakery_var_sub_footer_social_icons'] = isset( $foodbakery_var_options['foodbakery_var_sub_footer_social_icons'] ) ? $foodbakery_var_options['foodbakery_var_sub_footer_social_icons'] : '';
$foodbakery_var_options['foodbakery_var_copy_write_section'] = isset( $foodbakery_var_options['foodbakery_var_copy_write_section'] ) ? $foodbakery_var_options['foodbakery_var_copy_write_section'] : '';
$foodbakery_var_options['foodbakery_var_copy_right'] = isset( $foodbakery_var_options['foodbakery_var_copy_right'] ) ? $foodbakery_var_options['foodbakery_var_copy_right'] : '';
$foodbakery_var_options['foodbakery_var_theme_color'] = isset( $foodbakery_var_options['foodbakery_var_theme_color'] ) ? $foodbakery_var_options['foodbakery_var_theme_color'] : '';
$foodbakery_var_options['foodbakery_var_text_color'] = isset( $foodbakery_var_options['foodbakery_var_text_color'] ) ? $foodbakery_var_options['foodbakery_var_text_color'] : '';
$foodbakery_var_options['foodbakery_var_header_bgcolor'] = isset( $foodbakery_var_options['foodbakery_var_header_bgcolor'] ) ? $foodbakery_var_options['foodbakery_var_header_bgcolor'] : '';
$foodbakery_var_options['foodbakery_var_menu_color'] = isset( $foodbakery_var_options['foodbakery_var_menu_color'] ) ? $foodbakery_var_options['foodbakery_var_menu_color'] : '';
$foodbakery_var_options['foodbakery_var_menu_active_color'] = isset( $foodbakery_var_options['foodbakery_var_menu_active_color'] ) ? $foodbakery_var_options['foodbakery_var_menu_active_color'] : '';
$foodbakery_var_options['foodbakery_var_submenu_bgcolor'] = isset( $foodbakery_var_options['foodbakery_var_submenu_bgcolor'] ) ? $foodbakery_var_options['foodbakery_var_submenu_bgcolor'] : '';
$foodbakery_var_options['foodbakery_var_submenu_color'] = isset( $foodbakery_var_options['foodbakery_var_submenu_color'] ) ? $foodbakery_var_options['foodbakery_var_submenu_color'] : '';
$foodbakery_var_options['foodbakery_var_submenu_hover_color'] = isset( $foodbakery_var_options['foodbakery_var_submenu_hover_color'] ) ? $foodbakery_var_options['foodbakery_var_submenu_hover_color'] : '';
$foodbakery_var_options['foodbakery_var_modern_menu_color'] = isset( $foodbakery_var_options['foodbakery_var_modern_menu_color'] ) ? $foodbakery_var_options['foodbakery_var_modern_menu_color'] : '';
$foodbakery_var_options['foodbakery_var_modern_menu_active_color'] = isset( $foodbakery_var_options['foodbakery_var_modern_menu_active_color'] ) ? $foodbakery_var_options['foodbakery_var_modern_menu_active_color'] : '';
$foodbakery_var_options['foodbakery_var_footerbg_color'] = isset( $foodbakery_var_options['foodbakery_var_footerbg_color'] ) ? $foodbakery_var_options['foodbakery_var_footerbg_color'] : '';
$foodbakery_var_options['foodbakery_var_footer_text_color'] = isset( $foodbakery_var_options['foodbakery_var_footer_text_color'] ) ? $foodbakery_var_options['foodbakery_var_footer_text_color'] : '';
$foodbakery_var_options['foodbakery_var_link_color'] = isset( $foodbakery_var_options['foodbakery_var_link_color'] ) ? $foodbakery_var_options['foodbakery_var_link_color'] : '';
$foodbakery_var_options['foodbakery_var_copyright_text_color'] = isset( $foodbakery_var_options['foodbakery_var_copyright_text_color'] ) ? $foodbakery_var_options['foodbakery_var_copyright_text_color'] : '';
$foodbakery_var_options['foodbakery_var_heading_h1_color'] = isset( $foodbakery_var_options['foodbakery_var_heading_h1_color'] ) ? $foodbakery_var_options['foodbakery_var_heading_h1_color'] : '';
$foodbakery_var_options['foodbakery_var_heading_h2_color'] = isset( $foodbakery_var_options['foodbakery_var_heading_h2_color'] ) ? $foodbakery_var_options['foodbakery_var_heading_h2_color'] : '';
$foodbakery_var_options['foodbakery_var_heading_h3_color'] = isset( $foodbakery_var_options['foodbakery_var_heading_h3_color'] ) ? $foodbakery_var_options['foodbakery_var_heading_h3_color'] : '';
$foodbakery_var_options['foodbakery_var_heading_h4_color'] = isset( $foodbakery_var_options['foodbakery_var_heading_h4_color'] ) ? $foodbakery_var_options['foodbakery_var_heading_h4_color'] : '';
$foodbakery_var_options['foodbakery_var_heading_h5_color'] = isset( $foodbakery_var_options['foodbakery_var_heading_h5_color'] ) ? $foodbakery_var_options['foodbakery_var_heading_h5_color'] : '';
$foodbakery_var_options['foodbakery_var_heading_h6_color'] = isset( $foodbakery_var_options['foodbakery_var_heading_h6_color'] ) ? $foodbakery_var_options['foodbakery_var_heading_h6_color'] : '';
$foodbakery_var_options['foodbakery_var_section_title_color'] = isset( $foodbakery_var_options['foodbakery_var_section_title_color'] ) ? $foodbakery_var_options['foodbakery_var_section_title_color'] : '';
$foodbakery_var_options['foodbakery_var_post_title_color'] = isset( $foodbakery_var_options['foodbakery_var_post_title_color'] ) ? $foodbakery_var_options['foodbakery_var_post_title_color'] : '';
$foodbakery_var_options['foodbakery_var_page_title_color'] = isset( $foodbakery_var_options['foodbakery_var_page_title_color'] ) ? $foodbakery_var_options['foodbakery_var_page_title_color'] : '';
$foodbakery_var_options['foodbakery_var_widget_title_color'] = isset( $foodbakery_var_options['foodbakery_var_widget_title_color'] ) ? $foodbakery_var_options['foodbakery_var_widget_title_color'] : '';
$foodbakery_var_options['foodbakery_var_footer_widget_title_color'] = isset( $foodbakery_var_options['foodbakery_var_footer_widget_title_color'] ) ? $foodbakery_var_options['foodbakery_var_footer_widget_title_color'] : '';
$foodbakery_var_options['foodbakery_var_custom_font_woff'] = isset( $foodbakery_var_options['foodbakery_var_custom_font_woff'] ) ? $foodbakery_var_options['foodbakery_var_custom_font_woff'] : '';
$foodbakery_var_options['foodbakery_var_custom_font_ttf'] = isset( $foodbakery_var_options['foodbakery_var_custom_font_ttf'] ) ? $foodbakery_var_options['foodbakery_var_custom_font_ttf'] : '';
$foodbakery_var_options['foodbakery_var_custom_font_svg'] = isset( $foodbakery_var_options['foodbakery_var_custom_font_svg'] ) ? $foodbakery_var_options['foodbakery_var_custom_font_svg'] : '';
$foodbakery_var_options['foodbakery_var_custom_font_eot'] = isset( $foodbakery_var_options['foodbakery_var_custom_font_eot'] ) ? $foodbakery_var_options['foodbakery_var_custom_font_eot'] : '';
$foodbakery_var_options['foodbakery_var_content_font'] = isset( $foodbakery_var_options['foodbakery_var_content_font'] ) ? $foodbakery_var_options['foodbakery_var_content_font'] : '';
$foodbakery_var_options['foodbakery_var_content_font_att'] = isset( $foodbakery_var_options['foodbakery_var_content_font_att'] ) ? $foodbakery_var_options['foodbakery_var_content_font_att'] : '';
$foodbakery_var_options['foodbakery_var_content_size'] = isset( $foodbakery_var_options['foodbakery_var_content_size'] ) ? $foodbakery_var_options['foodbakery_var_content_size'] : '';
$foodbakery_var_options['foodbakery_var_content_lh'] = isset( $foodbakery_var_options['foodbakery_var_content_lh'] ) ? $foodbakery_var_options['foodbakery_var_content_lh'] : '';
$foodbakery_var_options['foodbakery_var_content_textr'] = isset( $foodbakery_var_options['foodbakery_var_content_textr'] ) ? $foodbakery_var_options['foodbakery_var_content_textr'] : '';
$foodbakery_var_options['foodbakery_var_content_spc'] = isset( $foodbakery_var_options['foodbakery_var_content_spc'] ) ? $foodbakery_var_options['foodbakery_var_content_spc'] : '';
$foodbakery_var_options['foodbakery_var_mainmenu_font'] = isset( $foodbakery_var_options['foodbakery_var_mainmenu_font'] ) ? $foodbakery_var_options['foodbakery_var_mainmenu_font'] : '';
$foodbakery_var_options['foodbakery_var_mainmenu_font_att'] = isset( $foodbakery_var_options['foodbakery_var_mainmenu_font_att'] ) ? $foodbakery_var_options['foodbakery_var_mainmenu_font_att'] : '';
$foodbakery_var_options['foodbakery_var_mainmenu_size'] = isset( $foodbakery_var_options['foodbakery_var_mainmenu_size'] ) ? $foodbakery_var_options['foodbakery_var_mainmenu_size'] : '';
$foodbakery_var_options['foodbakery_var_mainmenu_lh'] = isset( $foodbakery_var_options['foodbakery_var_mainmenu_lh'] ) ? $foodbakery_var_options['foodbakery_var_mainmenu_lh'] : '';
$foodbakery_var_options['foodbakery_var_mainmenu_textr'] = isset( $foodbakery_var_options['foodbakery_var_mainmenu_textr'] ) ? $foodbakery_var_options['foodbakery_var_mainmenu_textr'] : '';
$foodbakery_var_options['foodbakery_var_mainmenu_spc'] = isset( $foodbakery_var_options['foodbakery_var_mainmenu_spc'] ) ? $foodbakery_var_options['foodbakery_var_mainmenu_spc'] : '';
$foodbakery_var_options['foodbakery_var_heading1_font'] = isset( $foodbakery_var_options['foodbakery_var_heading1_font'] ) ? $foodbakery_var_options['foodbakery_var_heading1_font'] : '';
$foodbakery_var_options['foodbakery_var_heading1_font_att'] = isset( $foodbakery_var_options['foodbakery_var_heading1_font_att'] ) ? $foodbakery_var_options['foodbakery_var_heading1_font_att'] : '';
$foodbakery_var_options['foodbakery_var_heading_1_size'] = isset( $foodbakery_var_options['foodbakery_var_heading_1_size'] ) ? $foodbakery_var_options['foodbakery_var_heading_1_size'] : '';
$foodbakery_var_options['foodbakery_var_heading_1_lh'] = isset( $foodbakery_var_options['foodbakery_var_heading_1_lh'] ) ? $foodbakery_var_options['foodbakery_var_heading_1_lh'] : '';
$foodbakery_var_options['foodbakery_var_heading_1_textr'] = isset( $foodbakery_var_options['foodbakery_var_heading_1_textr'] ) ? $foodbakery_var_options['foodbakery_var_heading_1_textr'] : '';
$foodbakery_var_options['foodbakery_var_heading_1_spc'] = isset( $foodbakery_var_options['foodbakery_var_heading_1_spc'] ) ? $foodbakery_var_options['foodbakery_var_heading_1_spc'] : '';
$foodbakery_var_options['foodbakery_var_heading2_font'] = isset( $foodbakery_var_options['foodbakery_var_heading2_font'] ) ? $foodbakery_var_options['foodbakery_var_heading2_font'] : '';
$foodbakery_var_options['foodbakery_var_heading2_font_att'] = isset( $foodbakery_var_options['foodbakery_var_heading2_font_att'] ) ? $foodbakery_var_options['foodbakery_var_heading2_font_att'] : '';
$foodbakery_var_options['foodbakery_var_heading_2_size'] = isset( $foodbakery_var_options['foodbakery_var_heading_2_size'] ) ? $foodbakery_var_options['foodbakery_var_heading_2_size'] : '';
$foodbakery_var_options['foodbakery_var_heading_2_lh'] = isset( $foodbakery_var_options['foodbakery_var_heading_2_lh'] ) ? $foodbakery_var_options['foodbakery_var_heading_2_lh'] : '';
$foodbakery_var_options['foodbakery_var_heading_2_textr'] = isset( $foodbakery_var_options['foodbakery_var_heading_2_textr'] ) ? $foodbakery_var_options['foodbakery_var_heading_2_textr'] : '';
$foodbakery_var_options['foodbakery_var_heading_2_spc'] = isset( $foodbakery_var_options['foodbakery_var_heading_2_spc'] ) ? $foodbakery_var_options['foodbakery_var_heading_2_spc'] : '';
$foodbakery_var_options['foodbakery_var_heading3_font'] = isset( $foodbakery_var_options['foodbakery_var_heading3_font'] ) ? $foodbakery_var_options['foodbakery_var_heading3_font'] : '';
$foodbakery_var_options['foodbakery_var_heading3_font_att'] = isset( $foodbakery_var_options['foodbakery_var_heading3_font_att'] ) ? $foodbakery_var_options['foodbakery_var_heading3_font_att'] : '';
$foodbakery_var_options['foodbakery_var_heading_3_size'] = isset( $foodbakery_var_options['foodbakery_var_heading_3_size'] ) ? $foodbakery_var_options['foodbakery_var_heading_3_size'] : '';
$foodbakery_var_options['foodbakery_var_heading_3_lh'] = isset( $foodbakery_var_options['foodbakery_var_heading_3_lh'] ) ? $foodbakery_var_options['foodbakery_var_heading_3_lh'] : '';
$foodbakery_var_options['foodbakery_var_heading_3_textr'] = isset( $foodbakery_var_options['foodbakery_var_heading_3_textr'] ) ? $foodbakery_var_options['foodbakery_var_heading_3_textr'] : '';
$foodbakery_var_options['foodbakery_var_heading_3_spc'] = isset( $foodbakery_var_options['foodbakery_var_heading_3_spc'] ) ? $foodbakery_var_options['foodbakery_var_heading_3_spc'] : '';
$foodbakery_var_options['foodbakery_var_heading4_font'] = isset( $foodbakery_var_options['foodbakery_var_heading4_font'] ) ? $foodbakery_var_options['foodbakery_var_heading4_font'] : '';
$foodbakery_var_options['foodbakery_var_heading4_font_att'] = isset( $foodbakery_var_options['foodbakery_var_heading4_font_att'] ) ? $foodbakery_var_options['foodbakery_var_heading4_font_att'] : '';
$foodbakery_var_options['foodbakery_var_heading_4_size'] = isset( $foodbakery_var_options['foodbakery_var_heading_4_size'] ) ? $foodbakery_var_options['foodbakery_var_heading_4_size'] : '';
$foodbakery_var_options['foodbakery_var_heading_4_lh'] = isset( $foodbakery_var_options['foodbakery_var_heading_4_lh'] ) ? $foodbakery_var_options['foodbakery_var_heading_4_lh'] : '';
$foodbakery_var_options['foodbakery_var_heading_4_textr'] = isset( $foodbakery_var_options['foodbakery_var_heading_4_textr'] ) ? $foodbakery_var_options['foodbakery_var_heading_4_textr'] : '';
$foodbakery_var_options['foodbakery_var_heading_4_spc'] = isset( $foodbakery_var_options['foodbakery_var_heading_4_spc'] ) ? $foodbakery_var_options['foodbakery_var_heading_4_spc'] : '';
$foodbakery_var_options['foodbakery_var_heading5_font'] = isset( $foodbakery_var_options['foodbakery_var_heading5_font'] ) ? $foodbakery_var_options['foodbakery_var_heading5_font'] : '';
$foodbakery_var_options['foodbakery_var_heading5_font_att'] = isset( $foodbakery_var_options['foodbakery_var_heading5_font_att'] ) ? $foodbakery_var_options['foodbakery_var_heading5_font_att'] : '';
$foodbakery_var_options['foodbakery_var_heading_5_size'] = isset( $foodbakery_var_options['foodbakery_var_heading_5_size'] ) ? $foodbakery_var_options['foodbakery_var_heading_5_size'] : '';
$foodbakery_var_options['foodbakery_var_heading_5_lh'] = isset( $foodbakery_var_options['foodbakery_var_heading_5_lh'] ) ? $foodbakery_var_options['foodbakery_var_heading_5_lh'] : '';
$foodbakery_var_options['foodbakery_var_heading_5_textr'] = isset( $foodbakery_var_options['foodbakery_var_heading_5_textr'] ) ? $foodbakery_var_options['foodbakery_var_heading_5_textr'] : '';
$foodbakery_var_options['foodbakery_var_heading_5_spc'] = isset( $foodbakery_var_options['foodbakery_var_heading_5_spc'] ) ? $foodbakery_var_options['foodbakery_var_heading_5_spc'] : '';
$foodbakery_var_options['foodbakery_var_heading6_font'] = isset( $foodbakery_var_options['foodbakery_var_heading6_font'] ) ? $foodbakery_var_options['foodbakery_var_heading6_font'] : '';
$foodbakery_var_options['foodbakery_var_heading6_font_att'] = isset( $foodbakery_var_options['foodbakery_var_heading6_font_att'] ) ? $foodbakery_var_options['foodbakery_var_heading6_font_att'] : '';
$foodbakery_var_options['foodbakery_var_heading_6_size'] = isset( $foodbakery_var_options['foodbakery_var_heading_6_size'] ) ? $foodbakery_var_options['foodbakery_var_heading_6_size'] : '';
$foodbakery_var_options['foodbakery_var_heading_6_lh'] = isset( $foodbakery_var_options['foodbakery_var_heading_6_lh'] ) ? $foodbakery_var_options['foodbakery_var_heading_6_lh'] : '';
$foodbakery_var_options['foodbakery_var_heading_6_textr'] = isset( $foodbakery_var_options['foodbakery_var_heading_6_textr'] ) ? $foodbakery_var_options['foodbakery_var_heading_6_textr'] : '';
$foodbakery_var_options['foodbakery_var_heading_6_spc'] = isset( $foodbakery_var_options['foodbakery_var_heading_6_spc'] ) ? $foodbakery_var_options['foodbakery_var_heading_6_spc'] : '';
$foodbakery_var_options['foodbakery_var_section_title_font'] = isset( $foodbakery_var_options['foodbakery_var_section_title_font'] ) ? $foodbakery_var_options['foodbakery_var_section_title_font'] : '';
$foodbakery_var_options['foodbakery_var_section_title_font_att'] = isset( $foodbakery_var_options['foodbakery_var_section_title_font_att'] ) ? $foodbakery_var_options['foodbakery_var_section_title_font_att'] : '';
$foodbakery_var_options['foodbakery_var_section_title_size'] = isset( $foodbakery_var_options['foodbakery_var_section_title_size'] ) ? $foodbakery_var_options['foodbakery_var_section_title_size'] : '';
$foodbakery_var_options['foodbakery_var_section_title_lh'] = isset( $foodbakery_var_options['foodbakery_var_section_title_lh'] ) ? $foodbakery_var_options['foodbakery_var_section_title_lh'] : '';
$foodbakery_var_options['foodbakery_var_section_title_textr'] = isset( $foodbakery_var_options['foodbakery_var_section_title_textr'] ) ? $foodbakery_var_options['foodbakery_var_section_title_textr'] : '';
$foodbakery_var_options['foodbakery_var_section_title_spc'] = isset( $foodbakery_var_options['foodbakery_var_section_title_spc'] ) ? $foodbakery_var_options['foodbakery_var_section_title_spc'] : '';
$foodbakery_var_options['foodbakery_var_page_title_font'] = isset( $foodbakery_var_options['foodbakery_var_page_title_font'] ) ? $foodbakery_var_options['foodbakery_var_page_title_font'] : '';
$foodbakery_var_options['foodbakery_var_page_title_font_att'] = isset( $foodbakery_var_options['foodbakery_var_page_title_font_att'] ) ? $foodbakery_var_options['foodbakery_var_page_title_font_att'] : '';
$foodbakery_var_options['foodbakery_var_page_title_size'] = isset( $foodbakery_var_options['foodbakery_var_page_title_size'] ) ? $foodbakery_var_options['foodbakery_var_page_title_size'] : '';
$foodbakery_var_options['foodbakery_var_page_title_lh'] = isset( $foodbakery_var_options['foodbakery_var_page_title_lh'] ) ? $foodbakery_var_options['foodbakery_var_page_title_lh'] : '';
$foodbakery_var_options['foodbakery_var_page_title_textr'] = isset( $foodbakery_var_options['foodbakery_var_page_title_textr'] ) ? $foodbakery_var_options['foodbakery_var_page_title_textr'] : '';
$foodbakery_var_options['foodbakery_var_page_title_spc'] = isset( $foodbakery_var_options['foodbakery_var_page_title_spc'] ) ? $foodbakery_var_options['foodbakery_var_page_title_spc'] : '';
$foodbakery_var_options['foodbakery_var_post_title_font'] = isset( $foodbakery_var_options['foodbakery_var_post_title_font'] ) ? $foodbakery_var_options['foodbakery_var_post_title_font'] : '';
$foodbakery_var_options['foodbakery_var_post_title_font_att'] = isset( $foodbakery_var_options['foodbakery_var_post_title_font_att'] ) ? $foodbakery_var_options['foodbakery_var_post_title_font_att'] : '';
$foodbakery_var_options['foodbakery_var_post_title_size'] = isset( $foodbakery_var_options['foodbakery_var_post_title_size'] ) ? $foodbakery_var_options['foodbakery_var_post_title_size'] : '';
$foodbakery_var_options['foodbakery_var_post_title_lh'] = isset( $foodbakery_var_options['foodbakery_var_post_title_lh'] ) ? $foodbakery_var_options['foodbakery_var_post_title_lh'] : '';
$foodbakery_var_options['foodbakery_var_post_title_textr'] = isset( $foodbakery_var_options['foodbakery_var_post_title_textr'] ) ? $foodbakery_var_options['foodbakery_var_post_title_textr'] : '';
$foodbakery_var_options['foodbakery_var_post_title_spc'] = isset( $foodbakery_var_options['foodbakery_var_post_title_spc'] ) ? $foodbakery_var_options['foodbakery_var_post_title_spc'] : '';
$foodbakery_var_options['foodbakery_var_widget_heading_font'] = isset( $foodbakery_var_options['foodbakery_var_widget_heading_font'] ) ? $foodbakery_var_options['foodbakery_var_widget_heading_font'] : '';
$foodbakery_var_options['foodbakery_var_widget_heading_font_att'] = isset( $foodbakery_var_options['foodbakery_var_widget_heading_font_att'] ) ? $foodbakery_var_options['foodbakery_var_widget_heading_font_att'] : '';
$foodbakery_var_options['foodbakery_var_widget_heading_size'] = isset( $foodbakery_var_options['foodbakery_var_widget_heading_size'] ) ? $foodbakery_var_options['foodbakery_var_widget_heading_size'] : '';
$foodbakery_var_options['foodbakery_var_widget_heading_lh'] = isset( $foodbakery_var_options['foodbakery_var_widget_heading_lh'] ) ? $foodbakery_var_options['foodbakery_var_widget_heading_lh'] : '';
$foodbakery_var_options['foodbakery_var_widget_heading_textr'] = isset( $foodbakery_var_options['foodbakery_var_widget_heading_textr'] ) ? $foodbakery_var_options['foodbakery_var_widget_heading_textr'] : '';
$foodbakery_var_options['foodbakery_var_widget_heading_spc'] = isset( $foodbakery_var_options['foodbakery_var_widget_heading_spc'] ) ? $foodbakery_var_options['foodbakery_var_widget_heading_spc'] : '';
$foodbakery_var_options['foodbakery_var_ft_widget_heading_font'] = isset( $foodbakery_var_options['foodbakery_var_ft_widget_heading_font'] ) ? $foodbakery_var_options['foodbakery_var_ft_widget_heading_font'] : '';
$foodbakery_var_options['foodbakery_var_ft_widget_heading_font_att'] = isset( $foodbakery_var_options['foodbakery_var_ft_widget_heading_font_att'] ) ? $foodbakery_var_options['foodbakery_var_ft_widget_heading_font_att'] : '';
$foodbakery_var_options['foodbakery_var_ft_widget_heading_size'] = isset( $foodbakery_var_options['foodbakery_var_ft_widget_heading_size'] ) ? $foodbakery_var_options['foodbakery_var_ft_widget_heading_size'] : '';
$foodbakery_var_options['foodbakery_var_ft_widget_heading_lh'] = isset( $foodbakery_var_options['foodbakery_var_ft_widget_heading_lh'] ) ? $foodbakery_var_options['foodbakery_var_ft_widget_heading_lh'] : '';
$foodbakery_var_options['foodbakery_var_ft_widget_heading_textr'] = isset( $foodbakery_var_options['foodbakery_var_ft_widget_heading_textr'] ) ? $foodbakery_var_options['foodbakery_var_ft_widget_heading_textr'] : '';
$foodbakery_var_options['foodbakery_var_ft_widget_heading_spc'] = isset( $foodbakery_var_options['foodbakery_var_ft_widget_heading_spc'] ) ? $foodbakery_var_options['foodbakery_var_ft_widget_heading_spc'] : '';
$foodbakery_var_options['social_net_tooltip_input'] = isset( $foodbakery_var_options['social_net_tooltip_input'] ) ? $foodbakery_var_options['social_net_tooltip_input'] : '';
$foodbakery_var_options['social_net_url_input'] = isset( $foodbakery_var_options['social_net_url_input'] ) ? $foodbakery_var_options['social_net_url_input'] : '';
$foodbakery_var_options['foodbakery_var_social_icon_input'] = isset( $foodbakery_var_options['foodbakery_var_social_icon_input'] ) ? $foodbakery_var_options['foodbakery_var_social_icon_input'] : '';
$foodbakery_var_options['social_net_awesome_input'] = isset( $foodbakery_var_options['social_net_awesome_input'] ) ? $foodbakery_var_options['social_net_awesome_input'] : '';
$foodbakery_var_options['social_font_awesome_color'] = isset( $foodbakery_var_options['social_font_awesome_color'] ) ? $foodbakery_var_options['social_font_awesome_color'] : '';
$foodbakery_var_options['foodbakery_var_social_net_tooltip'] = isset( $foodbakery_var_options['foodbakery_var_social_net_tooltip'] ) ? $foodbakery_var_options['foodbakery_var_social_net_tooltip'] : '';
$foodbakery_var_options['foodbakery_var_social_net_url'] = isset( $foodbakery_var_options['foodbakery_var_social_net_url'] ) ? $foodbakery_var_options['foodbakery_var_social_net_url'] : '';
$foodbakery_var_options['foodbakery_var_social_icon_path_array'] = isset( $foodbakery_var_options['foodbakery_var_social_icon_path_array'] ) ? $foodbakery_var_options['foodbakery_var_social_icon_path_array'] : '';
$foodbakery_var_options['foodbakery_var_social_net_awesome'] = isset( $foodbakery_var_options['foodbakery_var_social_net_awesome'] ) ? $foodbakery_var_options['foodbakery_var_social_net_awesome'] : '';
$foodbakery_var_options['foodbakery_var_social_icon_color'] = isset( $foodbakery_var_options['foodbakery_var_social_icon_color'] ) ? $foodbakery_var_options['foodbakery_var_social_icon_color'] : '';
$foodbakery_var_options['foodbakery_var_facebook_share'] = isset( $foodbakery_var_options['foodbakery_var_facebook_share'] ) ? $foodbakery_var_options['foodbakery_var_facebook_share'] : '';
$foodbakery_var_options['foodbakery_var_twitter_share'] = isset( $foodbakery_var_options['foodbakery_var_twitter_share'] ) ? $foodbakery_var_options['foodbakery_var_twitter_share'] : '';
$foodbakery_var_options['foodbakery_var_google_plus_share'] = isset( $foodbakery_var_options['foodbakery_var_google_plus_share'] ) ? $foodbakery_var_options['foodbakery_var_google_plus_share'] : '';
$foodbakery_var_options['foodbakery_var_tumblr_share'] = isset( $foodbakery_var_options['foodbakery_var_tumblr_share'] ) ? $foodbakery_var_options['foodbakery_var_tumblr_share'] : '';
$foodbakery_var_options['foodbakery_var_dribbble_share'] = isset( $foodbakery_var_options['foodbakery_var_dribbble_share'] ) ? $foodbakery_var_options['foodbakery_var_dribbble_share'] : '';
$foodbakery_var_options['foodbakery_var_stumbleupon_share'] = isset( $foodbakery_var_options['foodbakery_var_stumbleupon_share'] ) ? $foodbakery_var_options['foodbakery_var_stumbleupon_share'] : '';
$foodbakery_var_options['foodbakery_var_share_share'] = isset( $foodbakery_var_options['foodbakery_var_share_share'] ) ? $foodbakery_var_options['foodbakery_var_share_share'] : '';
$foodbakery_var_options['sidebar_input'] = isset( $foodbakery_var_options['sidebar_input'] ) ? $foodbakery_var_options['sidebar_input'] : '';
$foodbakery_var_options['foodbakery_var_sidebar'] = isset( $foodbakery_var_options['foodbakery_var_sidebar'] ) ? $foodbakery_var_options['foodbakery_var_sidebar'] : '';
$foodbakery_var_options['foodbakery_var_default_page_layout'] = isset( $foodbakery_var_options['foodbakery_var_default_page_layout'] ) ? $foodbakery_var_options['foodbakery_var_default_page_layout'] : '';
$foodbakery_var_options['foodbakery_var_default_layout_sidebar'] = isset( $foodbakery_var_options['foodbakery_var_default_layout_sidebar'] ) ? $foodbakery_var_options['foodbakery_var_default_layout_sidebar'] : '';
$foodbakery_var_options['foodbakery_var_woo_archive_layout'] = isset( $foodbakery_var_options['foodbakery_var_woo_archive_layout'] ) ? $foodbakery_var_options['foodbakery_var_woo_archive_layout'] : '';
$foodbakery_var_options['foodbakery_var_woo_archive_sidebar'] = isset( $foodbakery_var_options['foodbakery_var_woo_archive_sidebar'] ) ? $foodbakery_var_options['foodbakery_var_woo_archive_sidebar'] : '';
$foodbakery_var_options['footer_sidebar_input'] = isset( $foodbakery_var_options['footer_sidebar_input'] ) ? $foodbakery_var_options['footer_sidebar_input'] : '';
$foodbakery_var_options['footer_sidebar_width'] = isset( $foodbakery_var_options['footer_sidebar_width'] ) ? $foodbakery_var_options['footer_sidebar_width'] : '';
$foodbakery_var_options['foodbakery_var_footer_sidebar'] = isset( $foodbakery_var_options['foodbakery_var_footer_sidebar'] ) ? $foodbakery_var_options['foodbakery_var_footer_sidebar'] : '';
$foodbakery_var_options['foodbakery_var_footer_width'] = isset( $foodbakery_var_options['foodbakery_var_footer_width'] ) ? $foodbakery_var_options['foodbakery_var_footer_width'] : '';
$foodbakery_var_options['foodbakery_var_maintenance_switch'] = isset( $foodbakery_var_options['foodbakery_var_maintenance_switch'] ) ? $foodbakery_var_options['foodbakery_var_maintenance_switch'] : '';
$foodbakery_var_options['foodbakery_var_maintenance_logo_switch'] = isset( $foodbakery_var_options['foodbakery_var_maintenance_logo_switch'] ) ? $foodbakery_var_options['foodbakery_var_maintenance_logo_switch'] : '';
$foodbakery_var_options['foodbakery_var_maintenance_social_switch'] = isset( $foodbakery_var_options['foodbakery_var_maintenance_social_switch'] ) ? $foodbakery_var_options['foodbakery_var_maintenance_social_switch'] : '';
$foodbakery_var_options['foodbakery_var_maintenance_newsletter_switch'] = isset( $foodbakery_var_options['foodbakery_var_maintenance_newsletter_switch'] ) ? $foodbakery_var_options['foodbakery_var_maintenance_newsletter_switch'] : '';
$foodbakery_var_options['foodbakery_var_maintenance_header_switch'] = isset( $foodbakery_var_options['foodbakery_var_maintenance_header_switch'] ) ? $foodbakery_var_options['foodbakery_var_maintenance_header_switch'] : '';
$foodbakery_var_options['foodbakery_var_maintenance_footer_switch'] = isset( $foodbakery_var_options['foodbakery_var_maintenance_footer_switch'] ) ? $foodbakery_var_options['foodbakery_var_maintenance_footer_switch'] : '';
$foodbakery_var_options['foodbakery_var_maintinance_mode_page'] = isset( $foodbakery_var_options['foodbakery_var_maintinance_mode_page'] ) ? $foodbakery_var_options['foodbakery_var_maintinance_mode_page'] : '';
$foodbakery_var_options['foodbakery_var_mailchimp_key'] = isset( $foodbakery_var_options['foodbakery_var_mailchimp_key'] ) ? $foodbakery_var_options['foodbakery_var_mailchimp_key'] : '';
$foodbakery_var_options['foodbakery_var_flickr_key'] = isset( $foodbakery_var_options['foodbakery_var_flickr_key'] ) ? $foodbakery_var_options['foodbakery_var_flickr_key'] : '';
$foodbakery_var_options['bkup_import_url'] = isset( $foodbakery_var_options['bkup_import_url'] ) ? $foodbakery_var_options['bkup_import_url'] : '';
$foodbakery_var_options['foodbakery_var_theme_option_save_flag'] = isset( $foodbakery_var_options['foodbakery_var_theme_option_save_flag'] ) ? $foodbakery_var_options['foodbakery_var_theme_option_save_flag'] : '';
$foodbakery_var_options['action'] = isset( $foodbakery_var_options['action'] ) ? $foodbakery_var_options['action'] : '';
