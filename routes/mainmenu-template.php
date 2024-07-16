<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Route::fallback([TemplateController::class, 'error_pages']); */

Route::middleware('admin')->prefix('dev')->group(function () {
    // DEVELOPER
    Route::get('/component', [TemplateController::class, 'dev_component'])->name('component');
    Route::get('/landing_page', [TemplateController::class, 'dev_landing_page'])->name('landing_page');
});
// INTEL
Route::middleware('admin')->prefix('intel')->group(function () {
    Route::get('/analytics_dashboard', [TemplateController::class, 'intel_analytics_dashboard'])->name('analytics_dashboard');
    Route::get('/marketing_dashboard', [TemplateController::class, 'intel_marketing_dashboard'])->name('marketing_dashboard');
    Route::get('/introduction', [TemplateController::class, 'intel_introduction'])->name('introduction');
    Route::get('/privacy', [TemplateController::class, 'intel_privacy'])->name('privacy');
});
// SETTING
Route::middleware('admin')->prefix('setting')->group(function () {
    Route::get('/how_it_works', [TemplateController::class, 'settings_how_it_works'])->name('how_it_works');
    Route::get('/layout_options', [TemplateController::class, 'settings_layout_options'])->name('layout_options');
    Route::get('/theme_modes', [TemplateController::class, 'settings_theme_modes'])->name('theme_modes');
    Route::get('/skin_options', [TemplateController::class, 'settings_skin_options'])->name('skin_options');
    Route::get('/saving_db', [TemplateController::class, 'settings_saving_db'])->name('saving_db');
});
// DOC
Route::middleware('admin')->prefix('docs')->group(function () {
    Route::get('/general', [TemplateController::class, 'docs_general'])->name('general');
    Route::get('/project_structure', [TemplateController::class, 'docs_project_structure'])->name('project_structure');
    Route::get('/flavors_editions', [TemplateController::class, 'docs_flavors_editions'])->name('flavors_editions');
    Route::get('/community_support', [TemplateController::class, 'docs_community_support'])->name('community_support');
    Route::get('/premium_support', [TemplateController::class, 'docs_premium_support'])->name('premium_support');
    Route::get('/licensing', [TemplateController::class, 'docs_licensing'])->name('licensing');
    Route::get('/buildnotes', [TemplateController::class, 'docs_buildnotes'])->name('buildnotes');
});
// UI
Route::middleware('admin')->prefix('ui')->group(function () {
    Route::get('/alerts', [TemplateController::class, 'ui_alerts'])->name('alerts');
    Route::get('/accordion', [TemplateController::class, 'ui_accordion'])->name('accordion');
    Route::get('/badges', [TemplateController::class, 'ui_badges'])->name('badges');
    Route::get('/breadcrumbs', [TemplateController::class, 'ui_breadcrumbs'])->name('breadcrumbs');
    Route::get('/buttons_ui', [TemplateController::class, 'ui_buttons'])->name('buttons_ui');
    Route::get('/button_group', [TemplateController::class, 'ui_button_group'])->name('button_group');
    Route::get('/cards', [TemplateController::class, 'ui_cards'])->name('cards');
    Route::get('/carousel', [TemplateController::class, 'ui_carousel'])->name('carousel');
    Route::get('/collapse', [TemplateController::class, 'ui_collapse'])->name('collapse');
    Route::get('/dropdowns', [TemplateController::class, 'ui_dropdowns'])->name('dropdowns');
    Route::get('/list_filter', [TemplateController::class, 'ui_list_filter'])->name('list_filter');
    Route::get('/modal', [TemplateController::class, 'ui_modal'])->name('modal');
    Route::get('/navbars', [TemplateController::class, 'ui_navbars'])->name('navbars');
    Route::get('/panels', [TemplateController::class, 'ui_panels'])->name('panels');
    Route::get('/pagination', [TemplateController::class, 'ui_pagination'])->name('pagination');
    Route::get('/popovers', [TemplateController::class, 'ui_popovers'])->name('popovers');
    Route::get('/progress_bars', [TemplateController::class, 'ui_progress_bars'])->name('progress_bars');
    Route::get('/scrollspy', [TemplateController::class, 'ui_scrollspy'])->name('scrollspy');
    Route::get('/side_panel', [TemplateController::class, 'ui_side_panel'])->name('side_panel');
    Route::get('/spinners', [TemplateController::class, 'ui_spinners'])->name('spinners');
    Route::get('/tabs_pills', [TemplateController::class, 'ui_tabs_pills'])->name('tabs_pills');
    Route::get('/toasts', [TemplateController::class, 'ui_toasts'])->name('toasts');
    Route::get('/tooltips', [TemplateController::class, 'ui_tooltips'])->name('tooltips');
});
// utilities
Route::middleware('admin')->prefix('utilities')->group(function () {
    Route::get('/borders', [TemplateController::class, 'utilities_borders'])->name('borders');
    Route::get('/clearfix', [TemplateController::class, 'utilities_clearfix'])->name('clearfix');
    Route::get('/color_pallet', [TemplateController::class, 'utilities_color_pallet'])->name('color_pallet');
    Route::get('/display_property', [TemplateController::class, 'utilities_display_property'])->name('display_property');
    Route::get('/fonts', [TemplateController::class, 'utilities_fonts'])->name('fonts');
    Route::get('/flexbox', [TemplateController::class, 'utilities_flexbox'])->name('flexbox');
    Route::get('/helpers', [TemplateController::class, 'utilities_helpers'])->name('helpers');
    Route::get('/position', [TemplateController::class, 'utilities_position'])->name('position');
    Route::get('/responsive_grid', [TemplateController::class, 'utilities_responsive_grid'])->name('responsive_grid');
    Route::get('/sizing', [TemplateController::class, 'utilities_sizing'])->name('sizing');
    Route::get('/spacing', [TemplateController::class, 'utilities_spacing'])->name('spacing');
    Route::get('/typography', [TemplateController::class, 'utilities_typography'])->name('typography');
});
// font icon
Route::middleware('admin')->prefix('icons')->group(function () {
    Route::get('/fontawesome_light', [TemplateController::class, 'icons_fontawesome_light'])->name('fontawesome_light');
    Route::get('/fontawesome_regular', [TemplateController::class, 'icons_fontawesome_regular'])->name('fontawesome_regular');
    Route::get('/fontawesome_solid', [TemplateController::class, 'icons_fontawesome_solid'])->name('fontawesome_solid');
    Route::get('/fontawesome_duotone', [TemplateController::class, 'icons_fontawesome_duotone'])->name('fontawesome_duotone');
    Route::get('/fontawesome_brand', [TemplateController::class, 'icons_fontawesome_brand'])->name('fontawesome_brand');
    Route::get('/nextgen_general', [TemplateController::class, 'icons_nextgen_general'])->name('nextgen_general');
    Route::get('/nextgen_base', [TemplateController::class, 'icons_nextgen_base'])->name('nextgen_base');
    Route::get('/stack_showcase', [TemplateController::class, 'icons_stack_showcase'])->name('stack_showcase');
    Route::get('/stack_generate', [TemplateController::class, 'icons_stack_generate'])->name('stack_generate?layers=3');
});
//tabel
Route::middleware('admin')->prefix('tables')->group(function () {
    Route::get('/basic', [TemplateController::class, 'tables_basic'])->name('basic');
    Route::get('/generate_style', [TemplateController::class, 'tables_generate_style'])->name('generate_style');
});
//Form Stuff
Route::middleware('admin')->prefix('form_stuff')->group(function () {
    Route::get('/basic_inputs', [TemplateController::class, 'form_stuff_basic_inputs'])->name('basic_inputs');
    Route::get('/checkbox_radio', [TemplateController::class, 'form_stuff_checkbox_radio'])->name('checkbox_radio');
    Route::get('/input_groups', [TemplateController::class, 'form_stuff_input_groups'])->name('input_groups');
    Route::get('/validation', [TemplateController::class, 'form_stuff_validation'])->name('validation');
});
//Plugins
Route::middleware('admin')->prefix('plugins')->group(function () {
    Route::get('/faq', [TemplateController::class, 'plugins_faq'])->name('faq');
    Route::get('/waves', [TemplateController::class, 'plugins_waves'])->name('waves');
    Route::get('/pacejs', [TemplateController::class, 'plugins_pacejs'])->name('pacejs');
    Route::get('/smartpanels', [TemplateController::class, 'plugins_smartpanels'])->name('smartpanels');
    Route::get('/bootbox', [TemplateController::class, 'plugins_bootbox'])->name('bootbox');
    Route::get('/slimscroll', [TemplateController::class, 'plugins_slimscroll'])->name('slimscroll');
    Route::get('/throttle', [TemplateController::class, 'plugins_throttle'])->name('throttle');
    Route::get('/navigation', [TemplateController::class, 'plugins_navigation'])->name('navigation');
    Route::get('/i18next', [TemplateController::class, 'plugins_i18next'])->name('i18next');
    Route::get('/appcore', [TemplateController::class, 'plugins_appcore'])->name('appcore');
});
//datatables
Route::middleware('admin')->prefix('datatables')->group(function () {
    Route::get('/basic_databales', [TemplateController::class, 'datatables_basic'])->name('basic_databales');
    Route::get('/autofill', [TemplateController::class, 'datatables_autofill'])->name('autofill');
    Route::get('/buttons', [TemplateController::class, 'datatables_buttons'])->name('buttons');
    Route::get('/export', [TemplateController::class, 'datatables_export'])->name('export');
    Route::get('/colreorder', [TemplateController::class, 'datatables_colreorder'])->name('colreorder');
    Route::get('/columnfilter', [TemplateController::class, 'datatables_columnfilter'])->name('columnfilter');
    Route::get('/fixedcolumns', [TemplateController::class, 'datatables_fixedcolumns'])->name('fixedcolumns');
    Route::get('/fixedheader', [TemplateController::class, 'datatables_fixedheader'])->name('fixedheader');
    Route::get('/keytable', [TemplateController::class, 'datatables_keytable'])->name('keytable');
    Route::get('/responsive', [TemplateController::class, 'datatables_responsive'])->name('responsive');
    Route::get('/responsive_alt', [TemplateController::class, 'datatables_responsive_alt'])->name('responsive_alt');
    Route::get('/rowgroup', [TemplateController::class, 'datatables_rowgroup'])->name('rowgroup');
    Route::get('/rowreorder', [TemplateController::class, 'datatables_rowreorder'])->name('rowreorder');
    Route::get('/scroller', [TemplateController::class, 'datatables_scroller'])->name('scroller');
    Route::get('/select', [TemplateController::class, 'datatables_select'])->name('select');
    Route::get('/alteditor', [TemplateController::class, 'datatables_alteditor'])->name('alteditor');
});
// statistics
Route::middleware('admin')->prefix('statistics')->group(function () {
    Route::get('/flot', [TemplateController::class, 'statistics_flot'])->name('flot');
    Route::get('/chartjs', [TemplateController::class, 'statistics_chartjs'])->name('chartjs');
    Route::get('/chartist', [TemplateController::class, 'statistics_chartist'])->name('chartist');
    Route::get('/c3', [TemplateController::class, 'statistics_c3'])->name('c3');
    Route::get('/peity', [TemplateController::class, 'statistics_peity'])->name('peity');
    Route::get('/sparkline', [TemplateController::class, 'statistics_sparkline'])->name('sparkline');
    Route::get('/easypiechart', [TemplateController::class, 'statistics_easypiechart'])->name('easypiechart');
    Route::get('/dygraph', [TemplateController::class, 'statistics_dygraph'])->name('dygraph');
});
//notifikasi
Route::middleware('admin')->prefix('notifications')->group(function () {
    Route::get('/sweetalert2', [TemplateController::class, 'notifications_sweetalert2'])->name('sweetalert2');
    Route::get('/toastr', [TemplateController::class, 'notifications_toastr'])->name('toastr');
});
//form plugins
Route::middleware('admin')->prefix('form_plugins')->group(function () {
    Route::get('/colorpicker', [TemplateController::class, 'form_plugins_colorpicker'])->name('colorpicker');
    Route::get('/datepicker', [TemplateController::class, 'form_plugins_datepicker'])->name('datepicker');
    Route::get('/daterange_picker', [TemplateController::class, 'form_plugins_daterange_picker'])->name('daterange_picker');
    Route::get('/dropzone', [TemplateController::class, 'form_plugins_dropzone'])->name('dropzone');
    Route::get('/ionrangeslider', [TemplateController::class, 'form_plugins_ionrangeslider'])->name('ionrangeslider');
    Route::get('/inputmask', [TemplateController::class, 'form_plugins_inputmask'])->name('inputmask');
    Route::get('/imagecropper', [TemplateController::class, 'form_plugins_imagecropper'])->name('imagecropper');
    Route::get('/select2', [TemplateController::class, 'form_plugins_select2'])->name('select2');
    Route::get('/summernote', [TemplateController::class, 'form_plugins_summernote'])->name('summernote');
});
//Miscellaneous
Route::middleware('admin')->prefix('miscellaneous')->group(function () {
    Route::get('/fullcalendar', [TemplateController::class, 'miscellaneous_fullcalendar'])->name('fullcalendar');
    Route::get('/lightgallery', [TemplateController::class, 'miscellaneous_lightgallery'])->name('lightgallery');
    //Route::get('/treeview', [TemplateController::class, 'miscellaneous_treeview'])->name('treeview');
});

// Forum
Route::middleware('admin')->prefix('pages/forum')->group(function () {
    Route::get('/list', [TemplateController::class, 'page_forum_list'])->name('list');
    Route::get('/threads', [TemplateController::class, 'page_forum_threads'])->name('threads');
    Route::get('/discussion', [TemplateController::class, 'page_forum_discussion'])->name('discussion');
});
//pages inbox
Route::middleware('admin')->prefix('pages/inbox')->group(function () {
    Route::get('/general_inbox', [TemplateController::class, 'page_inbox_general'])->name('general_inbox');
    Route::get('/read', [TemplateController::class, 'page_inbox_read'])->name('read');
    Route::get('/write', [TemplateController::class, 'page_inbox_write'])->name('write');
});
//Authentication
Route::middleware('admin')->prefix('pages/authentication')->group(function () {
    Route::get('/auth_forget', [TemplateController::class, 'page_auth_forget'])->name('auth_forget');
    Route::get('/auth_locked', [TemplateController::class, 'page_auth_locked'])->name('auth_locked');
    Route::get('/auth_login', [TemplateController::class, 'page_auth_login'])->name('auth_login');
    Route::get('/auth_login_alt', [TemplateController::class, 'page_auth_login_alt'])->name('auth_login_alt');
    Route::get('/auth_register', [TemplateController::class, 'page_auth_register'])->name('auth_register');
    Route::get('/auth_confirmation', [TemplateController::class, 'page_auth_confirmation'])->name('auth_confirmation');
});
//Error Pages
Route::middleware('admin')->prefix('pages/error')->group(function () {
    Route::get('/error_general', [TemplateController::class, 'page_error_general'])->name('error_general');
    Route::get('/error_404', [TemplateController::class, 'page_error_404'])->name('error_404');
    Route::get('/error_announced', [TemplateController::class, 'page_error_announced'])->name('error_announced');
});

Route::middleware('admin')->prefix('pages/other')->group(function () {
    Route::get('/chat', [TemplateController::class, 'page_chat'])->name('chat');
    Route::get('/contacts', [TemplateController::class, 'page_contacts'])->name('contacts');
    Route::get('/invoice', [TemplateController::class, 'page_invoice'])->name('invoice');
    Route::get('/profile', [TemplateController::class, 'page_profile'])->name('profile');
    Route::get('/projects', [TemplateController::class, 'page_projects'])->name('projects');
    Route::get('/search', [TemplateController::class, 'page_search'])->name('search');
    Route::get('/blank', [TemplateController::class, 'page_blank'])->name('blank');
});
