<?php

namespace App\Http\Controllers\temp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    // intel
    public function index()
    {
        return view('dashboard');
    }
    public function about()
    {
        return view('about');
    }
    public function dev_component()
    {
        return view('admin.content.developer_component');
    }
    public function intel_analytics_dashboard()
    {
        return view('admin.content.intel_analytics_dashboard');
    }
    public function intel_marketing_dashboard()
    {
        return view('admin.content.intel_marketing_dashboard');
    }
    public function intel_introduction()
    {
        return view('admin.content.intel_introduction');
    }
    public function intel_privacy()
    {
        return view('admin.content.intel_privacy');
    }
    // *
    // Theme Setting
    //*
    public function settings_how_it_works()
    {
        return view('admin.content.settings_how_it_works');
    }
    public function settings_layout_options()
    {
        return view('admin.content.settings_layout_options');
    }
    public function settings_theme_modes()
    {
        return view('admin.content.settings_theme_modes');
    }
    public function settings_skin_options()
    {
        return view('admin.content.settings_skin_options');
    }
    public function settings_saving_db()
    {
        return view('admin.content.settings_saving_db');
    }
    // *
    // Doc
    //*
    public function docs_general()
    {
        return view('admin.content.docs_general');
    }
    public function docs_project_structure()
    {
        return view('admin.content.docs_project_structure');
    }
    public function docs_flavors_editions()
    {
        return view('admin.content.docs_flavors_editions');
    }
    public function docs_community_support()
    {
        return view('admin.content.docs_community_support');
    }
    public function docs_premium_support()
    {
        return view('admin.content.docs_premium_support');
    }
    public function docs_licensing()
    {
        return view('admin.content.docs_licensing');
    }
    public function docs_buildnotes()
    {
        return view('admin.content.docs_buildnotes');
    }

    // *
    // UI
    //*
    public function ui_alerts()
    {
        return view('admin.content.ui_alerts');
    }
    public function ui_accordion()
    {
        return view('admin.content.ui_accordion');
    }
    public function ui_badges()
    {
        return view('admin.content.ui_badges');
    }
    public function ui_breadcrumbs()
    {
        return view('admin.content.ui_breadcrumbs');
    }
    public function ui_buttons()
    {
        return view('admin.content.ui_buttons');
    }
    public function ui_button_group()
    {
        return view('admin.content.ui_button_group');
    }
    public function ui_cards()
    {
        return view('admin.content.ui_cards');
    }
    public function ui_carousel()
    {
        return view('admin.content.ui_carousel');
    }
    public function ui_collapse()
    {
        return view('admin.content.ui_collapse');
    }
    public function ui_dropdowns()
    {
        return view('admin.content.ui_dropdowns');
    }
    public function ui_list_filter()
    {
        return view('admin.content.ui_list_filter');
    }
    public function ui_modal()
    {
        return view('admin.content.ui_modal');
    }
    public function ui_navbars()
    {
        return view('admin.content.ui_navbars');
    }
    public function ui_panels()
    {
        return view('admin.content.ui_panels');
    }
    public function ui_pagination()
    {
        return view('admin.content.ui_pagination');
    }
    public function ui_popovers()
    {
        return view('admin.content.ui_popovers');
    }
    public function ui_progress_bars()
    {
        return view('admin.content.ui_progress_bars');
    }
    public function ui_scrollspy()
    {
        return view('admin.content.ui_scrollspy');
    }
    public function ui_side_panel()
    {
        return view('admin.content.ui_side_panel');
    }
    public function ui_spinners()
    {
        return view('admin.content.ui_spinners');
    }
    public function ui_tabs_pills()
    {
        return view('admin.content.ui_tabs_pills');
    }
    public function ui_toasts()
    {
        return view('admin.content.ui_toasts');
    }
    public function ui_tooltips()
    {
        return view('admin.content.ui_tooltips');
    }
    //
    // utilitas
    //
    public function utilities_borders()
    {
        return view('admin.content.utilities_borders');
    }
    public function utilities_clearfix()
    {
        return view('admin.content.utilities_clearfix');
    }
    public function utilities_color_pallet()
    {
        return view('admin.content.utilities_color_pallet');
    }
    public function utilities_display_property()
    {
        return view('admin.content.utilities_display_property');
    }
    public function utilities_fonts()
    {
        return view('admin.content.utilities_fonts');
    }
    public function utilities_flexbox()
    {
        return view('admin.content.utilities_flexbox');
    }
    public function utilities_helpers()
    {
        return view('admin.content.utilities_helpers');
    }
    public function utilities_position()
    {
        return view('admin.content.utilities_position');
    }
    public function utilities_responsive_grid()
    {
        return view('admin.content.utilities_responsive_grid');
    }
    public function utilities_sizing()
    {
        return view('admin.content.utilities_sizing');
    }
    public function utilities_spacing()
    {
        return view('admin.content.utilities_spacing');
    }
    public function utilities_typography()
    {
        return view('admin.content.utilities_typography');
    }

    //
    // font
    //
    public function icons_fontawesome_light()
    {
        return view('admin.content.icons_fontawesome_light');
    }
    public function icons_fontawesome_regular()
    {
        return view('admin.content.icons_fontawesome_regular');
    }
    public function icons_fontawesome_solid()
    {
        return view('admin.content.icons_fontawesome_solid');
    }
    public function icons_fontawesome_duotone()
    {
        return view('admin.content.icons_fontawesome_duotone');
    }
    public function icons_fontawesome_brand()
    {
        return view('admin.content.icons_fontawesome_brand');
    }

    public function icons_nextgen_general()
    {
        return view('admin.content.icons_nextgen_general');
    }
    public function icons_nextgen_base()
    {
        return view('admin.content.icons_nextgen_base');
    }
    public function icons_stack_showcase()
    {
        return view('admin.content.icons_stack_showcase');
    }
    public function icons_stack_generate()
    {
        return view('admin.content.icons_stack_generate');
    }

    //
    // tabel
    //
    public function tables_basic()
    {
        return view('admin.content.tables_basic');
    }
    public function tables_generate_style()
    {
        return view('admin.content.tables_generate_style');
    }
    //
    // form
    //
    public function form_stuff_basic_inputs()
    {
        return view('admin.content.form_stuff_basic_inputs');
    }
    public function form_stuff_checkbox_radio()
    {
        return view('admin.content.form_stuff_checkbox_radio');
    }
    public function form_stuff_input_groups()
    {
        return view('admin.content.form_stuff_input_groups');
    }
    public function form_stuff_validation()
    {
        return view('admin.content.form_stuff_validation');
    }

    //
    // plugin
    //
    public function plugins_faq()
    {
        return view('admin.content.plugins_faq');
    }
    public function plugins_waves()
    {
        return view('admin.content.plugins_waves');
    }
    public function plugins_pacejs()
    {
        return view('admin.content.plugins_pacejs');
    }
    public function plugins_smartpanels()
    {
        return view('admin.content.plugins_smartpanels');
    }
    public function plugins_bootbox()
    {
        return view('admin.content.plugins_bootbox');
    }
    public function plugins_slimscroll()
    {
        return view('admin.content.plugins_slimscroll');
    }
    public function plugins_throttle()
    {
        return view('admin.content.plugins_throttle');
    }
    public function plugins_navigation()
    {
        return view('admin.content.plugins_navigation');
    }
    public function plugins_i18next()
    {
        return view('admin.content.plugins_i18next');
    }
    public function plugins_appcore()
    {
        return view('admin.content.plugins_appcore');
    }
    //
    // datatables
    //
    public function datatables_basic()
    {
        return view('admin.content.datatables_basic');
    }
    public function datatables_autofill()
    {
        return view('admin.content.datatables_autofill');
    }
    public function datatables_buttons()
    {
        return view('admin.content.datatables_buttons');
    }
    public function datatables_export()
    {
        return view('admin.content.datatables_export');
    }
    public function datatables_colreorder()
    {
        return view('admin.content.datatables_colreorder');
    }
    public function datatables_columnfilter()
    {
        return view('admin.content.datatables_columnfilter');
    }
    public function datatables_fixedcolumns()
    {
        return view('admin.content.datatables_fixedcolumns');
    }
    public function datatables_fixedheader()
    {
        return view('admin.content.datatables_fixedheader');
    }
    public function datatables_keytable()
    {
        return view('admin.content.datatables_keytable');
    }
    public function datatables_responsive()
    {
        return view('admin.content.datatables_responsive');
    }
    public function datatables_responsive_alt()
    {
        return view('admin.content.datatables_responsive_alt');
    }
    public function datatables_rowgroup()
    {
        return view('admin.content.datatables_rowgroup');
    }
    public function datatables_rowreorder()
    {
        return view('admin.content.datatables_rowreorder');
    }
    public function datatables_scroller()
    {
        return view('admin.content.datatables_scroller');
    }
    public function datatables_select()
    {
        return view('admin.content.datatables_select');
    }
    public function datatables_alteditor()
    {
        return view('admin.content.datatables_alteditor');
    }
    //
    // statistik
    //
    public function statistics_flot()
    {
        return view('admin.content.statistics_flot');
    }
    public function statistics_chartjs()
    {
        return view('admin.content.statistics_chartjs');
    }
    public function statistics_chartist()
    {
        return view('admin.content.statistics_chartist');
    }
    public function statistics_c3()
    {
        return view('admin.content.statistics_c3');
    }
    public function statistics_peity()
    {
        return view('admin.content.statistics_peity');
    }
    public function statistics_sparkline()
    {
        return view('admin.content.statistics_sparkline');
    }
    public function statistics_easypiechart()
    {
        return view('admin.content.statistics_easypiechart');
    }
    public function statistics_dygraph()
    {
        return view('admin.content.statistics_dygraph');
    }
    //
    // notifikasi
    //
    public function notifications_sweetalert2()
    {
        return view('admin.content.notifications_sweetalert2');
    }
    public function notifications_toastr()
    {
        return view('admin.content.notifications_toastr');
    }
    //
    //form plugins
    //
    public function form_plugins_colorpicker()
    {
        return view('admin.content.form_plugins_colorpicker');
    }
    public function form_plugins_datepicker()
    {
        return view('admin.content.form_plugins_datepicker');
    }
    public function form_plugins_daterange_picker()
    {
        return view('admin.content.form_plugins_daterange_picker');
    }
    public function form_plugins_dropzone()
    {
        return view('admin.content.form_plugins_dropzone');
    }
    public function form_plugins_ionrangeslider()
    {
        return view('admin.content.form_plugins_ionrangeslider');
    }
    public function form_plugins_inputmask()
    {
        return view('admin.content.form_plugins_inputmask');
    }
    public function form_plugins_imagecropper()
    {
        return view('admin.content.form_plugins_imagecropper');
    }
    public function form_plugins_select2()
    {
        return view('admin.content.form_plugins_select2');
    }
    public function form_plugins_summernote()
    {
        return view('admin.content.form_plugins_summernote');
    }
    //
    // Miscellaneous
    //
    public function miscellaneous_fullcalendar()
    {
        return view('admin.content.miscellaneous_fullcalendar');
    }
    public function miscellaneous_lightgallery()
    {
        return view('admin.content.miscellaneous_lightgallery');
    }
    public function miscellaneous_treeview()
    {
        return view('admin.content.miscellaneous_treeview');
    }
    //
    // pages
    //
    public function page_chat()
    {
        return view('admin.content.page_chat');
    }
    public function page_contacts()
    {
        return view('admin.content.page_contacts');
    }
    public function page_invoice()
    {
        return view('admin.content.page_invoice');
    }
    public function page_profile()
    {
        return view('admin.content.page_profile');
    }
    public function page_projects()
    {
        return view('admin.content.page_projects');
    }
    public function page_search()
    {
        return view('admin.content.page_search');
    }
    public function page_blank()
    {
        return view('admin.content.page_blank');
    }

    // page forum
    public function page_forum_list()
    {
        return view('admin.content.page_forum_list');
    }
    public function page_forum_threads()
    {
        return view('admin.content.page_forum_threads');
    }
    public function page_forum_discussion()
    {
        return view('admin.content.page_forum_discussion');
    }

    // page inbox
    public function page_inbox_general()
    {
        return view('admin.content.page_inbox_general');
    }
    public function page_inbox_read()
    {
        return view('admin.content.page_inbox_read');
    }
    public function page_inbox_write()
    {
        return view('admin.content.page_inbox_write');
    }

    // page error
    public function page_error_general()
    {
        return view('admin.content.page_error_general');
    }
    public function page_error_404()
    {
        return view('admin.content.page_error_404');
    }
    public function page_error_announced()
    {
        return view('admin.content.page_error_announced');
    }

    // page auth
    public function page_auth_forget()
    {
        return view('admin.content.page_auth_forget');
    }
    public function page_auth_locked()
    {
        return view('admin.content.page_auth_locked');
    }
    public function page_auth_login()
    {
        return view('admin.content.page_auth_login');
    }
    public function page_auth_login_alt()
    {
        return view('admin.content.page_auth_login_alt');
    }
    public function page_auth_register()
    {
        return view('admin.content.page_auth_register');
    }
    public function page_auth_confirmation()
    {
        return view('admin.content.page_auth_confirmation');
    }
}
