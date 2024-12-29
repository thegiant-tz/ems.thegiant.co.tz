@extends('layouts.frontend')

@section('content')

    <body class="">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        <!-- [ navigation menu ] start -->
        <nav class="pcoded-navbar menupos-fixed menu-dark menu-item-icon-style6 ">
            <div class="navbar-wrapper ">
                <div class="navbar-brand header-logo">
                    <a href="index.html" class="b-brand">

                        <img src="assets/images/logo.svg" alt="logo" class="logo images">
                        <img src="assets/images/logo-icon.svg" alt="logo" class="logo-thumb images">
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="index.html#!"><span></span></a>
                </div>
                <div class="navbar-content scroll-div   " id="layout-sidenav">



                    <ul class="nav pcoded-inner-navbar sidenav-inner">
                        <li class="nav-item pcoded-menu-caption">
                            <label>Navigation</label>
                        </li>
                        <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="index.html" class="">Analytics</a></li>
                                <li class=""><a href="dashboard-sale.html" class="">Sales</a></li>
                                <li class=""><a href="dashboard-project.html" class="">Project</a></li>
                                <li class=""><a href="dashboard-help.html" class="">Helpdesk<span
                                            class="pcoded-badge label label-danger">NEW</span></a></li>
                            </ul>
                        </li>
                        <li data-username="vertical horizontal box layout RTL fixed static collapse menu color icon dark background image"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-layout"></i></span><span class="pcoded-mtext">Page
                                    layouts</span></a>
                            <ul class="pcoded-submenu">
                                <li class="pcoded-hasmenu"><a href="index.html#!" class="">Vertical</a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="layout-static.html" class=""
                                                target="_blank">Static</a></li>
                                        <li class=""><a href="layout-fixed.html" class=""
                                                target="_blank">Fixed</a></li>
                                        <li class=""><a href="layout-menu-fixed.html" class=""
                                                target="_blank">Navbar fixed</a></li>
                                        <li class=""><a href="layout-mini-menu.html" class=""
                                                target="_blank">Collapse menu</a></li>
                                        <li class=""><a href="layout-navbg.html" class="" target="_blank">Navbar
                                                imagebg</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="layout-horizontal.html" class=""
                                        target="_blank">Horizontal</a></li>
                                <li class=""><a href="layout-horizontal-1.html" class=""
                                        target="_blank">Horizontal v1</a></li>
                                <li class=""><a href="layout-horizontal-2.html" class=""
                                        target="_blank">Horizontal v2</a></li>
                                <li class=""><a href="layout-horizontal-rtl.html" class=""
                                        target="_blank">Horizontal RTL</a></li>
                                <li class=""><a href="layout-box.html" class="" target="_blank">Box layout</a>
                                </li>
                                <li class=""><a href="layout-rtl.html" class="" target="_blank">RTL</a></li>
                                <li class=""><a href="layout-light.html" class="" target="_blank">Light
                                        layout</a></li>
                                <li class=""><a href="layout-dark.html" class="" target="_blank">Dark layout
                                        <span class="pcoded-badge label label-danger">Hot</span></a></li>
                                <li class=""><a href="layout-menu-icon.html" class="" target="_blank">Color
                                        icon</a></li>
                            </ul>
                        </li>
                        <li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-layers"></i></span><span
                                    class="pcoded-mtext">Widget</span><span
                                    class="pcoded-badge label label-success">100+</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="widget-statistic.html" class="">Statistic</a></li>
                                <li class=""><a href="widget-data.html" class="">Data</a></li>
                                <li class=""><a href="widget-chart.html" class="">Chart</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>UI Element</label>
                        </li>
                        <li data-username="basic components button alert badges breadcrumb pagination progress tooltip popovers carousel cards collapse tabs pills modal spinner grid system toasts typography extra shadows embeds"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="bc_alert.html" class="">Alert</a></li>
                                <li class=""><a href="bc_button.html" class="">Button</a></li>
                                <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                                <li class=""><a href="bc_breadcrumb-pagination.html" class="">Pagination</a>
                                </li>
                                <li class=""><a href="bc_card.html" class="">Cards</a></li>
                                <li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
                                <li class=""><a href="bc_carousel.html" class="">Carousel</a></li>
                                <li class=""><a href="bc_grid.html" class="">Grid system</a></li>
                                <li class=""><a href="bc_progress.html" class="">Progress</a></li>
                                <li class=""><a href="bc_modal.html" class="">Modal</a></li>
                                <li class=""><a href="bc_spinner.html" class="">Spinner<span
                                            class="pcoded-badge label label-danger">NEW</span></a></li>
                                <li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
                                <li class=""><a href="bc_typography.html" class="">Typography</a></li>
                                <li class=""><a href="bc_tooltip-popover.html" class="">Tooltip &
                                        popovers</a></li>
                                <li class=""><a href="bc_toasts.html" class="">Toasts<span
                                            class="pcoded-badge label label-danger">NEW</span></a></li>
                                <li class=""><a href="bc_extra.html" class="">Utilities</a></li>
                            </ul>
                        </li>
                        <li data-username="advance components alert gridstack lightbox modal notification pnotify rating rangeslider slider syntax highlighter tour User card Timeline tree view nestable toolbar"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-gitlab"></i></span><span
                                    class="pcoded-mtext">Advance</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="ac_alert.html" class="">Sweet alert</a></li>
                                <li class=""><a href="ac-datepicker-component.html" class="">Datepicker</a>
                                </li>
                                <li class=""><a href="ac_gridstack.html" class="">Gridstack</a></li>
                                <li class=""><a href="ac_lightbox.html" class="">Lightbox</a></li>
                                <li class=""><a href="ac_modal.html" class="">Modal</a></li>
                                <li class=""><a href="ac_notification.html" class="">Notification</a></li>
                                <li class=""><a href="ac_nestable.html" class="">Nestable</a></li>
                                <li class=""><a href="ac_rating.html" class="">Rating</a></li>
                                <li class=""><a href="ac_rangeslider.html" class="">Rangeslider</a></li>
                                <li class=""><a href="ac_slider.html" class="">Slider</a></li>
                                <li class=""><a href="ac_syntax_highlighter.html" class="">Syntax
                                        highlighter</a></li>
                                <li class=""><a href="ac_tour.html" class="">Tour</a></li>
                                <li class=""><a href="ac_treeview.html" class="">Tree view</a></li>
                                <li class=""><a href="ac_toolbar.html" class="">Toolbar</a></li>
                                <li class=""><a href="ac_usercard.html" class="">User card</a></li>
                                <li class=""><a href="timeline.html" class="">Timeline</a></li>
                            </ul>
                        </li>

                        <li data-username="animations" class="nav-item"><a href="animation.html" class="nav-link"><span
                                    class="pcoded-micon"><i class="feather icon-aperture"></i></span><span
                                    class="pcoded-mtext">Animations</span></a></li>
                        <li data-username="icons feather fontawsome flag material simple line themify"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-feather"></i></span><span
                                    class="pcoded-mtext">Icons</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="icon-feather.html" class="">Feather<span
                                            class="pcoded-badge label label-danger">NEW</span></a></li>
                                <li class=""><a href="icon-fontawsome.html" class="">Font Awesome 5<span
                                            class="pcoded-badge label label-primary">1000+</span></a></li>
                                <li class=""><a href="icon-flag.html" class="">Flag</a></li>
                                <li class=""><a href="icon-material.html" class="">Material</a></li>
                                <li class=""><a href="icon-simple-line.html" class="">Simple line</a></li>
                                <li class=""><a href="icon-themify.html" class="">Themify</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Forms</label>
                        </li>
                        <li data-username="form elements advance component validation masking wizard picker select"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-file-text"></i></span><span
                                    class="pcoded-mtext">Forms</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="form_elements.html" class="">Form Basic</a></li>
                                <li class=""><a href="form2_basic.html" class="">Form elements</a></li>
                                <li class=""><a href="form2_input_group.html" class="">Input group</a></li>
                                <li class=""><a href="form2_checkbox.html" class="">Checkbox</a></li>
                                <li class=""><a href="form2_radio.html" class="">radio</a></li>
                                <li class=""><a href="form2_switch.html" class="">Switch</a></li>
                                <li class=""><a href="form2_megaoption.html" class="">Mega option</a></li>
                            </ul>
                        </li>
                        <li data-username="form elements advance component validation masking wizard picker select"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms
                                    Plugins</span></a>
                            <ul class="pcoded-submenu">
                                <li class="pcoded-hasmenu"><a href="index.html#!" class="">Date</a>
                                    <ul class="pcoded-submenu">
                                        <li><a href="form2_datepicker.html">Datepicker</a></li>
                                        <li><a href="form2_daterangepicker.html">Date Range Picker</a></li>
                                        <li><a href="form2_timepicker.html">Timepicker</a></li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu"><a href="index.html#!" class="">Select</a>
                                    <ul class="pcoded-submenu">
                                        <li><a href="form2_multipleselectsplitter.html">Multiple Select Splitter</a></li>
                                        <li><a href="form2_choices.html">Choices js</a></li>
                                        <li><a href="form2_select2.html">Select2</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="form2_recaptcha.html">Google reCaptcha</a></li>
                                <li class=""><a href="form2_inputmask.html">Input Masks</a></li>
                                <li class=""><a href="form2_rangeslider.html">Range Slider</a></li>
                                <li class=""><a href="form2_clipboard.html">Clipboard</a></li>
                                <li class=""><a href="form2_nouislider.html">Nouislider</a></li>
                                <li class=""><a href="form2_repeater.html">Repeater</a></li>
                                <li class=""><a href="form2_switchjs.html">Switchjs</a></li>
                                <li class=""><a href="form2_typeahead.html">Typeahead</a></li>
                                <li class=""><a href="form2_tags-input.html">Tags Input</a></li>
                                <li class=""><a href="form2_maxlength.html">Maxlength</a></li>
                                <li class=""><a href="form2_mat-datetimepicker.html">Material Datetimepicker</a>
                                </li>
                                <li class=""><a href="form-picker.html">Color picker</a></li>
                            </ul>
                        </li>
                        <li data-username="form elements advance component validation masking wizard picker select"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-file-text"></i></span><span class="pcoded-mtext">Text
                                    Editors</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="form2_tinymce.html">Tinymce</a></li>
                                <li><a href="form2_quill.html">Quill</a></li>
                                <li class="pcoded-hasmenu"><a href="index.html#!">CK editor</a>
                                    <ul class="pcoded-submenu">
                                        <li><a href="editor-classic.html">Classic</a></li>
                                        <li><a href="editor-document.html">Document</a></li>
                                        <li><a href="editor-inline.html">Inline</a></li>
                                        <li><a href="editor-balloon.html">Balloon</a></li>
                                    </ul>
                                </li>
                                <li><a href="editor-trumbowyg.html">Trumbowyg editor</a></li>
                                <li><a href="form2_markdown.html">Markdown</a></li>
                            </ul>
                        </li>
                        <li data-username="form elements advance component validation masking wizard picker select"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form
                                    Layouts</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="form2_lay-default.html">Layouts</a></li>
                                <li><a href="form2_lay-multicolumn.html">Multicolumn</a></li>
                                <li><a href="form2_lay-actionbars.html">Actionbars</a></li>
                                <li><a href="form2_lay-stickyactionbars.html">Sticky Actionbars</a></li>
                            </ul>
                        </li>
                        <li data-username="form elements advance component validation masking wizard picker select"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-file-text"></i></span><span class="pcoded-mtext">File
                                    upload</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="file-upload.html">Dropzone</a></li>
                                <li><a href="form2_flu-uppy.html">Uppy</a></li>
                            </ul>
                        </li>
                        <li data-username="Form Validation" class="nav-item"><a href="form-validation.html"
                                class="nav-link"><span class="pcoded-micon"><i class="feather icon-grid"></i></span><span
                                    class="pcoded-mtext">Form
                                    Validation</span></a></li>
                        <li data-username="Form image cropper" class="nav-item"><a href="image_crop.html"
                                class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-scissors"></i></span><span class="pcoded-mtext">Image
                                    cropper</span></a></li>
                        <li data-username="form wizard" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form
                                    Wizard</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="page-wizard2.html">Wizard </a></li>
                                <li><a href="page-wizard3.html">Wizard 1</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>table</label>
                        </li>
                        <li data-username="table basic sizing border styling" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap
                                    table</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="tbl_bootstrap.html" class="">Basic table</a></li>
                                <li class=""><a href="tbl_sizing.html" class="">Sizing table</a></li>
                                <li class=""><a href="tbl_border.html" class="">Border table</a></li>
                                <li class=""><a href="tbl_styling.html" class="">Styling table</a></li>
                            </ul>
                        </li>
                        <li data-username="table basic advance styling api ajax server plugin data sources"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-package"></i></span><span class="pcoded-mtext">Data
                                    table</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="dt_basic.html" class="">Basic initialization</a></li>
                                <li class=""><a href="dt_advance.html" class="">Advance initialization</a>
                                </li>
                                <li class=""><a href="dt_styling.html" class="">Styling</a></li>
                                <li class=""><a href="dt_api.html" class="">API</a></li>
                                <li class=""><a href="dt_ajax.html" class="">Ajax</a></li>
                                <li class=""><a href="dt_serverside.html" class="">Server side</a></li>
                                <li class=""><a href="dt_plugin.html" class="">Plug-in</a></li>
                                <li class=""><a href="dt_sources.html" class="">Data sources</a></li>
                            </ul>
                        </li>
                        <li data-username="table extensions autofill basic data export col reorder fixed columns header key responsive row scroller select"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-server"></i></span><span class="pcoded-mtext">DT
                                    extensions</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="dt_ext_autofill.html" class="">Autofill</a></li>
                                <li class="nav-item pcoded-hasmenu">
                                    <a href="index.html#!" class="nav-link"><span class="pcoded-mtext">Button</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="dt_ext_basic_buttons.html" class="">Basic
                                                button</a></li>
                                        <li class=""><a href="dt_ext_export_buttons.html" class="">Data
                                                export</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="dt_ext_col_reorder.html" class="">Col reorder</a></li>
                                <li class=""><a href="dt_ext_fixed_columns.html" class="">Fixed columns</a>
                                </li>
                                <li class=""><a href="dt_ext_fixed_header.html" class="">Fixed header</a>
                                </li>
                                <li class=""><a href="dt_ext_key_table.html" class="">Key table</a></li>
                                <li class=""><a href="dt_ext_responsive.html" class="">Responsive</a></li>
                                <li class=""><a href="dt_ext_row_reorder.html" class="">Row reorder</a></li>
                                <li class=""><a href="dt_ext_scroller.html" class="">Scroller</a></li>
                                <li class=""><a href="dt_ext_select.html" class="">Select table</a></li>
                            </ul>
                        </li>

                        <li data-username="table foo" class="nav-item"><a href="tbl_foo.html" class="nav-link"><span
                                    class="pcoded-micon"><i class="feather icon-list"></i></span><span
                                    class="pcoded-mtext">Foo table</span></a></li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Chart & Maps</label>
                        </li>
                        <li data-username="charts am chart amChart js echart google highchart knob morris nvd3 peity radial"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-pie-chart"></i></span><span
                                    class="pcoded-mtext">Chart</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="chart-am.html" class="">amChart 4</a></li>
                                <li class=""><a href="chart-chartjs.html" class="">Chart js</a></li>
                                <li class=""><a href="chart-echart.html" class="">Echart</a></li>
                                <li class=""><a href="chart-google.html" class="">Google</a></li>
                                <li class=""><a href="chart-highchart.html" class="">Highchart</a></li>
                                <li class=""><a href="chart-knob.html" class="">Knob</a></li>
                                <li class=""><a href="chart-morris.html" class="">Morris</a></li>
                                <li class=""><a href="chart-nvd3.html" class="">Nvd3</a></li>
                                <li class=""><a href="chart-peity.html" class="">Peity</a></li>
                                <li class=""><a href="chart-radial.html" class="">Radial</a></li>
                            </ul>
                        </li>
                        <li data-username="maps google vector google map search api location"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="map-google.html" class="">Google</a></li>
                                <li class=""><a href="map-vector.html" class="">Vector</a></li>
                                <li class=""><a href="map-api.html" class="">Gmap search API</a></li>
                                <li class=""><a href="map-location.html" class="">Location</a></li>
                            </ul>
                        </li>
                        <li data-username="landing page" class="nav-item"><a href="extra-pages/landingpage/index.html"
                                class="nav-link" target="_blank"><span class="pcoded-micon"><i
                                        class="feather icon-navigation-2"></i></span><span class="pcoded-mtext">Landing
                                    page</span></a></li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Pages</label>
                        </li>
                        <li data-username="authentication sign up sign in reset password change password personal information profile settings map form subscribe"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-lock"></i></span><span
                                    class="pcoded-mtext">Authentication</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a>
                                </li>
                                <li class=""><a href="auth-signup1.html" class="" target="_blank">Sign up
                                        v2<span class="pcoded-badge label label-primary">New</span></a></li>
                                <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a>
                                </li>
                                <li class=""><a href="auth-signin-img-side.html" class=""
                                        target="_blank">Sign in v2<span
                                            class="pcoded-badge label label-primary">New</span></a></li>
                                <li class=""><a href="auth-signin-img-slider.html" class=""
                                        target="_blank">Sign in v3<span
                                            class="pcoded-badge label label-primary">New</span></a></li>
                                <li class=""><a href="auth-signin-img-slider2.html" class=""
                                        target="_blank">Sign in v4<span
                                            class="pcoded-badge label label-primary">New</span></a></li>
                                <li class=""><a href="auth-signin-img-tabs.html" class=""
                                        target="_blank">Sign in v5<span
                                            class="pcoded-badge label label-primary">New</span></a></li>
                                <li class=""><a href="auth-reset-password.html" class=""
                                        target="_blank">Reset password</a></li>
                                <li class=""><a href="auth-change-password.html" class=""
                                        target="_blank">Change password</a></li>
                                <li class=""><a href="auth-profile-settings.html" class=""
                                        target="_blank">Profile settings</a></li>
                            </ul>
                        </li>
                        <li data-username="Maintenance Error offline ui" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-sliders"></i></span><span
                                    class="pcoded-mtext">Maintenance</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="maint-error.html" class="">Error</a></li>
                                <li class=""><a href="maint-offline-ui.html" class=""
                                        target="_blank">Offline UI</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>App</label>
                        </li>
                        <li data-username="message" class="nav-item"><a href="message.html" class="nav-link"><span
                                    class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span
                                    class="pcoded-mtext">Message</span></a></li>
                        <li data-username="Email inbox read mail compose" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-mail"></i></span><span class="pcoded-mtext">Email</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="email_inbox.html" class="">Inbox</a></li>
                                <li class=""><a href="email_read.html" class="">Read mail</a></li>
                                <li class=""><a href="email_compose.html" class="">Compose mail</a></li>
                            </ul>
                        </li>
                        <li data-username="task list board details" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-clipboard"></i></span><span
                                    class="pcoded-mtext">Task</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="task-list.html" class="">List</a></li>
                                <li class=""><a href="task-board.html" class="">Board</a></li>
                                <li class=""><a href="task-detail.html" class="">Detail</a></li>
                            </ul>
                        </li>
                        <li data-username="to-do notes" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-check-square"></i></span><span
                                    class="pcoded-mtext">To-Do</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="todo.html" class="">To-Do</a></li>
                                <li class=""><a href="notes.html" class="">Notes</a></li>
                            </ul>
                        </li>
                        <li data-username="gallery grid masonry advance" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-image"></i></span><span
                                    class="pcoded-mtext">Gallery</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="gallery-grid.html" class="">Grid</a></li>
                                <li class=""><a href="gallery-advance.html" class="">Advance</a></li>
                            </ul>
                        </li>
                        <li data-username="search1 search2 search2" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-search"></i></span><span class="pcoded-mtext">Search<span
                                        class="pcoded-badge label label-info">NEW</span></span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="search1.html" class="">Search1</a></li>
                                <li class=""><a href="search2.html" class="">Search2</a></li>
                                <li class=""><a href="search3.html" class="">Search3</a></li>
                            </ul>
                        </li>
                        <li data-username="Helpdesk Customer list dashboard detail Ticket"
                            class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-help-circle"></i></span><span
                                    class="pcoded-mtext">Helpdesk<span
                                        class="pcoded-badge label label-success">NEW</span></span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="hd-help-desk.html" class="">Helpdesk dashboard</a></li>
                                <li class=""><a href="hd-dashboard.html" class="">Customer dashboard</a></li>
                                <li class=""><a href="hd-cust-list.html" class="">Customer list</a></li>
                                <li class=""><a href="hd-detail.html" class="">Customer detail</a></li>
                                <li class=""><a href="hd-new-ticket.html" class="">Ticket</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Extension</label>
                        </li>
                        <li data-username="invoice summury list" class="nav-item pcoded-hasmenu">
                            <a href="index.html#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-file-minus"></i></span><span
                                    class="pcoded-mtext">Invoice</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="invoice.html" class="">Invoice</a></li>
                                <li class=""><a href="invoice-summary.html" class="">Invoice summary</a></li>
                                <li class=""><a href="invoice-list.html" class="">Invoice list</a></li>
                            </ul>
                        </li>
                        <li data-username="full calendar" class="nav-item"><a href="full-calendar.html"
                                class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-calendar"></i></span><span class="pcoded-mtext">Full
                                    calendar</span></a></li>
                        <li data-username="grid animation" class="nav-item"><a href="grid-animation.html"
                                class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-globe"></i></span><span class="pcoded-mtext">Grid
                                    animation</span><span class="pcoded-badge label label-info">NEW</span></a></li>
                        <li data-username="minimal form" class="nav-item"><a href="minimal-form.html"
                                class="nav-link"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span
                                    class="pcoded-mtext">Minimal
                                    form</span><span class="pcoded-badge label label-danger">NEW</span></a></li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Other</label>
                        </li>
                        <li data-username="menu levels menu level 2.1 menu level 2.2" class="nav-item pcoded-hasmenu">
                            <a href="index.html#" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-menu"></i></span><span class="pcoded-mtext">Menu
                                    levels</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="index.html#" class="">Menu Level 2.1</a></li>
                                <li class="pcoded-hasmenu">
                                    <a href="index.html#" class="">Menu level 2.2</a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="index.html#" class="">Menu level 3.1</a></li>
                                        <li class=""><a href="index.html#" class="">Menu level 3.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li data-username="disabled menu" class="nav-item disabled"><a href="index.html#!"
                                class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled
                                    menu</span></a></li>
                        <li data-username="sample page" class="nav-item"><a href="sample-page.html"
                                class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample
                                    page</span></a></li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Support</label>
                        </li>
                        <li data-username="documentation" class="nav-item"><a
                                href="https://html.phoenixcoded.net/dasho/bootstrap/doc/index.html" class="nav-link"
                                target="_blank"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span
                                    class="pcoded-mtext">Documentation</span></a></li>
                        <li data-username="need support" class="nav-item"><a href="index.html#" class="nav-link"
                                target="_blank"><span class="pcoded-micon"><i
                                        class="feather icon-help-circle"></i></span><span class="pcoded-mtext">Need
                                    support
                                    ?</span></a></li>
                    </ul>



                </div>

            </div>
        </nav>
        <!-- [ navigation menu ] end -->



        <!-- [ Header ] start -->
        <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">

            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse1" href="index.html#!"><span></span></a>
                <a href="index.html" class="b-brand">

                    <img src="assets/images/logo.svg" alt="" class="logo images">
                    <img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images">
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="index.html#!">
                <i class="feather icon-more-horizontal"></i>
            </a>
            <div class="collapse navbar-collapse">
                <a href="index.html#!" class="mob-toggler"></a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <div class="main-search open">
                            <div class="input-group">
                                <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                                <a href="index.html#!" class="input-group-append search-close">
                                    <i class="feather icon-x input-group-text"></i>
                                </a>
                                <span class="ms-1 input-group-append search-btn btn btn-primary">
                                    <i class="feather icon-search input-group-text"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="index.html#" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="icon feather icon-bell"></i></a>
                            <div class="dropdown-menu dropdown-menu-end notification">
                                <div class="noti-head">
                                    <h6 class="d-inline-block m-b-0">Notifications</h6>
                                    <div class="float-end">
                                        <a href="index.html#!" class="m-r-10">mark as read</a>
                                        <a href="index.html#!">clear all</a>
                                    </div>
                                </div>
                                <ul class="noti-body">
                                    <li class="n-title">
                                        <p class="m-b-0">NEW</p>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                                alt="Profile Image">
                                            <div class="flex-grow-1">
                                                <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                                <p>New ticket Added</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="n-title">
                                        <p class="m-b-0">EARLIER</p>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                                alt="Profile Image">
                                            <div class="flex-grow-1">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius" src="assets/images/user/avatar-3.jpg"
                                                alt="Profile Image">
                                            <div class="flex-grow-1">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                                <p>currently login</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                                alt="Profile Image">
                                            <div class="flex-grow-1">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius" src="assets/images/user/avatar-3.jpg"
                                                alt="Profile Image">
                                            <div class="flex-grow-1">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
                                                <p>currently login</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                                alt="Profile Image">
                                            <div class="flex-grow-1">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="noti-footer">
                                    <a href="index.html#!">show all</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="index.html#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
                    <li>
                        <div class="dropdown drp-user">
                            <a href="index.html#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="icon feather icon-settings"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-notification">
                                <div class="pro-head">
                                    <img src="assets/images/user/avatar-1.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>
                                        <span class="text-muted">Free Trial</span>
                                        <span class="h6">doe@company.com</span>
                                    </span>
                                </div>
                                <ul class="pro-body">
                                    <li><a href="index.html#!" class="dropdown-item"><i
                                                class="feather icon-settings"></i>
                                            Settings</a></li>
                                    <li><a href="index.html#!" class="dropdown-item"><i class="feather icon-user"></i>
                                            Profile</a>
                                    </li>
                                    <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i>
                                            My Messages</a></li>
                                    <li><a href="auth-signin.html" class="dropdown-item"><i
                                                class="feather icon-lock"></i> Lock Screen</a></li>
                                    <li><a href="index.html#!" class="dropdown-item"><i
                                                class="feather icon-power text-danger"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </header>
        <!-- [ Header ] end -->


        <!-- [ chat user list ] start -->
        <section class="header-user-list">
            <a href="index.html#!" class="h-close-text"><i class="feather icon-x"></i></a>
            <ul class="nav nav-tabs" id="chatTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active text-uppercase" id="chat-tab" data-bs-toggle="tab"
                        href="index.html#chat" role="tab" aria-controls="chat" aria-selected="true"><i
                            class="feather icon-message-circle me-2"></i>Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="user-tab" data-bs-toggle="tab" href="index.html#user"
                        role="tab" aria-controls="user" aria-selected="false"><i
                            class="feather icon-users me-2"></i>User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="setting-tab" data-bs-toggle="tab"
                        href="index.html#setting" role="tab" aria-controls="setting" aria-selected="false"><i
                            class="feather icon-settings me-2"></i>Setting</a>
                </li>
            </ul>
            <div class="tab-content" id="chatTabContent">
                <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                    <div class="h-list-header">
                        <div class="input-group">
                            <input type="text" id="search-friends" class="form-control"
                                placeholder="Search Friend . . .">
                        </div>
                    </div>
                    <div class="h-list-body">
                        <div class="main-friend-cont scroll-div">
                            <div class="main-friend-list">
                                <div class="d-flex userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-1.jpg" alt="Profile Image ">
                                        <div class="live-status">3</div>
                                    </a>
                                    <div class="flex-grow-1">
                                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                                .
                                            </small></h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-2.jpg" alt="Profile Image">
                                        <div class="live-status">1</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Lary Doe<small
                                                class="d-block text-c-green">online</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online"
                                    data-username="Alice">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-3.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="offline"
                                    data-username="Alia">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-1.jpg" alt="Profile Image">
                                        <div class="live-status">1</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="offline"
                                    data-username="Suzen">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-4.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-1.jpg" alt="Profile Image ">
                                        <div class="live-status">3</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                                .
                                            </small></h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-2.jpg" alt="Profile Image">
                                        <div class="live-status">1</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Lary Doe<small
                                                class="d-block text-c-green">online</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online"
                                    data-username="Alice">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-3.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="offline"
                                    data-username="Alia">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-1.jpg" alt="Profile Image">
                                        <div class="live-status">1</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="offline"
                                    data-username="Suzen">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-4.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-1.jpg" alt="Profile Image ">
                                        <div class="live-status">3</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                                .
                                            </small></h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-2.jpg" alt="Profile Image">
                                        <div class="live-status">1</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Lary Doe<small
                                                class="d-block text-c-green">online</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online"
                                    data-username="Alice">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-3.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
                    <div class="h-list-body">
                        <div class="main-friend-cont scroll-div">
                            <div class="main-friend-list">
                                <div class="media px-3 d-flex align-items-center mt-3">
                                    <a class="media-left m-r-15" href="index.html#!">
                                        <div
                                            class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                            <i class="icon feather icon-users"></i>
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <p class="chat-header f-w-600 mb-0">New Group</p>
                                    </div>
                                </div>
                                <div class="media p-3 d-flex align-items-center">
                                    <a class="media-left m-r-15" href="index.html#!">
                                        <div
                                            class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                            <i class="icon feather icon-user-plus"></i>
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <p class="chat-header f-w-600 mb-0">New Contact</p>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-1.jpg" alt="Profile Image "></a>
                                    <div class="media-body">
                                        <p class="chat-header">Josephin Doe<small class="d-block">i am not what happened
                                                .
                                                .</small></p>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-2.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Lary Doe<small class="d-block">Avalable</small></h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online"
                                    data-username="Alice">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-3.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Alice<small class="d-block">hear using Dasho</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="offline"
                                    data-username="Alia">
                                    <a class="media-left" href="index.html#!">
                                        <div
                                            class="hei-50 wid-50 img-radius bg-success d-flex text-white f-22 align-items-center justify-content-center">
                                            A</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Alia<small class="d-block text-muted">Avalable</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="offline"
                                    data-username="Suzen">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-4.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Suzen<small class="d-block text-muted">Avalable</small>
                                        </h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe">
                                    <a class="media-left" href="index.html#!">
                                        <div
                                            class="hei-50 wid-50 bg-danger img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                            JD</div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Josephin Doe<small class="d-block text-muted">Don't send
                                                me
                                                image</small></h6>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe">
                                    <a class="media-left" href="index.html#!"><img class="media-object img-radius"
                                            src="assets/images/user/avatar-2.jpg" alt="Profile Image"></a>
                                    <div class="media-body">
                                        <h6 class="chat-header">Lary Doe<small class="d-block text-muted">not send free
                                                msg</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                    <div class="p-4 main-friend-cont scroll-div">
                        <h6 class="mt-2"><i class="feather icon-monitor me-2"></i>Desktop settings</h6>
                        <hr>
                        <div class="form-group mb-0">
                            <div class="switch switch-primary d-inline m-r-10">
                                <input type="checkbox" id="cn-p-1" checked>
                                <label for="cn-p-1" class="cr switch-alignment"></label>
                            </div>
                            <label class="f-w-600">Allow desktop notification</label>
                        </div>
                        <p class="text-muted ms-5">You get latest content at a time when data will updated</p>
                        <div class="form-group mb-0">
                            <div class="switch switch-primary d-inline m-r-10">
                                <input type="checkbox" id="cn-p-5">
                                <label for="cn-p-5" class="cr switch-alignment"></label>
                            </div>
                            <label class="f-w-600">Store Cookie</label>
                        </div>
                        <h6 class="mb-0 mt-5"><i class="feather icon-layout me-2"></i>Application settings</h6>
                        <hr>
                        <div class="form-group mb-0">
                            <div class="switch switch-primary d-inline m-r-10">
                                <input type="checkbox" id="cn-p-3" checked>
                                <label for="cn-p-3" class="cr switch-alignment"></label>
                            </div>
                            <label class="f-w-600">Backup Storage</label>
                        </div>
                        <p class="text-muted mb-0 ms-5">Automaticaly take backup as par schedule</p>
                        <div class="form-group mb-4">
                            <div class="switch switch-primary d-inline m-r-10">
                                <input type="checkbox" id="cn-p-4" checked>
                                <label for="cn-p-4" class="cr switch-alignment"></label>
                            </div>
                            <label class="f-w-600">Allow guest to print file</label>
                        </div>
                        <h6 class="mb-0 mt-5"><i class="feather icon-globe me-2"></i>System settings</h6>
                        <hr>
                        <div class="form-group mb-0">
                            <div class="switch switch-primary d-inline m-r-10">
                                <input type="checkbox" id="cn-p-2">
                                <label for="cn-p-2" class="cr switch-alignment"></label>
                            </div>
                            <label class="f-w-600">View other user chat</label>
                        </div>
                        <p class="text-muted ms-5">Allow to show public user message</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- [ chat user list ] end -->

        <!-- [ chat message ] start -->
        <section class="header-chat">
            <div class="h-list-header">
                <h6>Josephin Doe</h6>
                <a href="index.html#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
            </div>
            <div class="h-list-body">
                <div class="main-chat-cont scroll-div">
                    <div class="main-friend-chat">
                        <div class="d-flex chat-messages">
                            <a class="media-left photo-table" href="index.html#!"><img
                                    class="media-object img-radius img-radius m-t-5"
                                    src="assets/images/user/avatar-2.jpg" alt="Profile Image"></a>
                            <div class="flex-grow-1 chat-menu-content">
                                <div class="">
                                    <p class="chat-cont">hello tell me something</p>
                                    <p class="chat-cont">about yourself?</p>
                                </div>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="d-flex chat-messages">
                            <div class="flex-grow-1 chat-menu-reply">
                                <div class="">
                                    <p class="chat-cont">Ohh! very nice</p>
                                </div>
                                <p class="chat-time">8:22 a.m.</p>
                            </div>
                            <a class="media-right photo-table" href="index.html#!"><img
                                    class="media-object img-radius img-radius m-t-5"
                                    src="assets/images/user/avatar-1.jpg" alt="Profile Image"></a>
                        </div>
                        <div class="d-flex chat-messages">
                            <a class="media-left photo-table" href="index.html#!"><img
                                    class="media-object img-radius img-radius m-t-5"
                                    src="assets/images/user/avatar-2.jpg" alt="Profile Image"></a>
                            <div class="flex-grow-1 chat-menu-content">
                                <div class="">
                                    <p class="chat-cont">can you help me?</p>
                                </div>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-list-footer">
                <div class="input-group">
                    <input type="file" class="chat-attach" style="display:none">
                    <a href="index.html#!" class="input-group-prepend btn btn-success btn-attach">
                        <i class="feather icon-paperclip"></i>
                    </a>
                    <input type="text" name="h-chat-text" class="form-control h-send-chat"
                        placeholder="Write hear . . ">
                    <button type="submit" class="input-group-append btn-send btn btn-primary">
                        <i class="feather icon-message-circle"></i>
                    </button>
                </div>
            </div>
        </section>
        <!-- [ chat message ] end -->

        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ breadcrumb ] start -->
                                <div class="page-header">
                                    <div class="page-block">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <div class="page-header-title">
                                                    <h5>Home</h5>
                                                </div>
                                                <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                                class="feather icon-home"></i></a></li>
                                                    <li class="breadcrumb-item"><a href="index.html#!">Analytics
                                                            Dashboard</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ breadcrumb ] end -->
                                <!-- [ Main Content ] start -->
                                <div class="row">
                                    <div class="col-xl-6 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Currently active session</h5>
                                            </div>
                                            <div class="card-body">
                                                <div id="sales-analytics-chart" style="height:345px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">Orders Received</h6>
                                                        <h2 class="text-start"><span>486</span><i
                                                                class="feather icon-shopping-cart float-end"></i></h2>
                                                        <p class="m-b-0 text-end">Completed Orders<span
                                                                class="float-start">351</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">Total Sales</h6>
                                                        <h2 class="text-start"><span>1641</span><i
                                                                class="feather icon-shopping-cart float-end"></i></h2>
                                                        <p class="m-b-0 text-end">This Month<span
                                                                class="float-start">213</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card mrr-card">
                                                    <div class="card-body mb-3">
                                                        <span class="d-flex align-items-center"><i
                                                                class="fab fa-bitcoin text-c-blue f-22 m-r-5"></i>Bitcoin</span>
                                                    </div>
                                                    <div id="average-chart11" class="position-absolute bottom-chart"
                                                        style="height:145px;width:100%;"></div>
                                                    <div class="card-body">
                                                        <h3 class="m-0">$80</h3>
                                                        <span>Goal: $75</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card mrr-card">
                                                    <div class="card-body mb-3">
                                                        <span class="d-flex align-items-center"><i
                                                                class="fab fa-ethereum text-c-green f-22 m-r-5"></i>Ethereum</span>
                                                    </div>
                                                    <div id="average-chart12" class="position-absolute bottom-chart"
                                                        style="height:145px;width:100%;"></div>
                                                    <div class="card-body">
                                                        <h3 class="m-0">$80</h3>
                                                        <span>Goal: $75</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card table-card widget-primary-card bg-c-blue">
                                                    <div class="row-table">
                                                        <div class="col-4 card-body-big">
                                                            <i class="feather icon-star-on"></i>
                                                        </div>
                                                        <div class="col-8">
                                                            <h4>4000 +</h4>
                                                            <h6>Ratings Received</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card table-card widget-purple-card bg-c-yellow">
                                                    <div class="row-table">
                                                        <div class="col-4 card-body-big">
                                                            <i class="fas fa-trophy"></i>
                                                        </div>
                                                        <div class="col-8">
                                                            <h4>17</h4>
                                                            <h6>Achievements</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xl-4">
                                        <div class="card card-social">
                                            <div class="card-block border-bottom">
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-auto">
                                                        <i class="fab fa-facebook-f text-primary f-36"></i>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h3>12,281</h3>
                                                        <h5 class="text-c-blue mb-0">+7.2% <span
                                                                class="text-muted">Total
                                                                Likes</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="row align-items-center justify-content-center card-active">
                                                    <div class="col-6">
                                                        <h6 class="text-center m-b-10"><span
                                                                class="text-muted m-r-5">Target:</span>35,098</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-c-blue progress-primary"
                                                                role="progressbar" style="width:60%;height:6px;"
                                                                aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-center  m-b-10"><span
                                                                class="text-muted m-r-5">Duration:</span>350</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-c-green"
                                                                role="progressbar" style="width:45%;height:6px;"
                                                                aria-valuenow="45" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-social">
                                            <div class="card-block border-bottom">
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-auto">
                                                        <i class="fab fa-twitter text-c-info f-36"></i>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h3>11,200</h3>
                                                        <h5 class="text-c-info mb-0">+6.2% <span
                                                                class="text-muted">Total
                                                                Likes</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="row align-items-center justify-content-center card-active">
                                                    <div class="col-6">
                                                        <h6 class="text-center m-b-10"><span
                                                                class="text-muted m-r-5">Target:</span>34,185</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-c-blue bg-primary"
                                                                role="progressbar" style="width:40%;height:6px;"
                                                                aria-valuenow="40" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-center  m-b-10"><span
                                                                class="text-muted m-r-5">Duration:</span>800</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-c-green"
                                                                role="progressbar" style="width:70%;height:6px;"
                                                                aria-valuenow="70" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-social">
                                            <div class="card-block border-bottom">
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-auto">
                                                        <i class="fab fa-google-plus-g text-c-red f-36"></i>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h3>10,500</h3>
                                                        <h5 class="text-c-red mb-0">+5.9% <span class="text-muted">Total
                                                                Likes</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="row align-items-center justify-content-center card-active">
                                                    <div class="col-6">
                                                        <h6 class="text-center m-b-10"><span
                                                                class="text-muted m-r-5">Target:</span>25,998</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-c-blue bg-primary"
                                                                role="progressbar" style="width:80%;height:6px;"
                                                                aria-valuenow="80" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-center  m-b-10"><span
                                                                class="text-muted m-r-5">Duration:</span>900</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-c-green"
                                                                role="progressbar" style="width:50%;height:6px;"
                                                                aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sessions-section start -->
                                    <div class="col-xl-8 col-md-6">
                                        <div class="card table-card">
                                            <div class="card-header">
                                                <h5>Site visitors session log</h5>
                                            </div>
                                            <div class="card-body px-0 py-0">
                                                <div class="table-responsive">
                                                    <div class="session-scroll" style="height:478px;position:relative;">
                                                        <table class="table table-hover m-b-0">
                                                            <thead>
                                                                <tr>
                                                                    <th><span>CAMPAIGN DATE</span></th>
                                                                    <th><span>CLICK <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                    <th><span>COST <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                    <th><span>CTR <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                    <th><span>ARPU <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                    <th><span>ECPI <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                    <th><span>ROI <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                    <th><span>REVENUE <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                    <th><span>CONVERSIONS <a class="help"
                                                                                data-bs-toggle="popover"
                                                                                title="Popover title"
                                                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                    class="feather icon-help-circle f-16"></i></a></span>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Total and average</td>
                                                                    <td>1300</td>
                                                                    <td>1025</td>
                                                                    <td>14005</td>
                                                                    <td>95,3%</td>
                                                                    <td>29,7%</td>
                                                                    <td>3,25</td>
                                                                    <td>2:30</td>
                                                                    <td>45.5%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8-11-2016</td>
                                                                    <td>786
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>485
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-primary rounded"
                                                                                role="progressbar" style="width: 50%;"
                                                                                aria-valuenow="50" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>769
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>45,3%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6,7%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-info rounded"
                                                                                role="progressbar" style="width: 30%;"
                                                                                aria-valuenow="30" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>8,56
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>10:55
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>33.8%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15-10-2016</td>
                                                                    <td>786
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 65%;"
                                                                                aria-valuenow="65" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>523
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-primary rounded"
                                                                                role="progressbar" style="width: 80%;"
                                                                                aria-valuenow="80" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>736
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 80%;"
                                                                                aria-valuenow="80" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>78,3%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6,6%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-info rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>7,56
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 44%;"
                                                                                aria-valuenow="44" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>4:30
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 68%;"
                                                                                aria-valuenow="68" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>76.8%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 90%;"
                                                                                aria-valuenow="90" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8-8-2017</td>
                                                                    <td>624
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 45%;"
                                                                                aria-valuenow="45" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>436
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-primary rounded"
                                                                                role="progressbar" style="width: 55%;"
                                                                                aria-valuenow="55" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>756
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 95%;"
                                                                                aria-valuenow="95" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>78,3%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 38%;"
                                                                                aria-valuenow="38" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6,4%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-info rounded"
                                                                                role="progressbar" style="width: 30%;"
                                                                                aria-valuenow="30" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>9,45
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 41%;"
                                                                                aria-valuenow="41" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>9:05
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 67%;"
                                                                                aria-valuenow="67" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>8.63%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 41%;"
                                                                                aria-valuenow="41" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-12-2017</td>
                                                                    <td>423
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 54%;"
                                                                                aria-valuenow="54" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>123
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-primary rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>756
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 75%;"
                                                                                aria-valuenow="75" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>78,6%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>45,6%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-info rounded"
                                                                                role="progressbar" style="width: 90%;"
                                                                                aria-valuenow="90" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6,85
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 30%;"
                                                                                aria-valuenow="30" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>7:45
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>33.8%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 80%;"
                                                                                aria-valuenow="80" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8-11-2016</td>
                                                                    <td>786
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>485
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-primary rounded"
                                                                                role="progressbar" style="width: 50%;"
                                                                                aria-valuenow="50" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>769
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>45,3%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 60%;"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6,7%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-info rounded"
                                                                                role="progressbar" style="width: 30%;"
                                                                                aria-valuenow="30" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>8,56
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>10:55
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>33.8%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 40%;"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15-10-2016</td>
                                                                    <td>786
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 65%;"
                                                                                aria-valuenow="65" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>523
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-primary rounded"
                                                                                role="progressbar" style="width: 80%;"
                                                                                aria-valuenow="80" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>736
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 80%;"
                                                                                aria-valuenow="80" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>78,3%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6,6%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-info rounded"
                                                                                role="progressbar" style="width: 70%;"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>7,56
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 44%;"
                                                                                aria-valuenow="44" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>4:30
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 68%;"
                                                                                aria-valuenow="68" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>76.8%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 90%;"
                                                                                aria-valuenow="90" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8-8-2017</td>
                                                                    <td>624
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 45%;"
                                                                                aria-valuenow="45" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>436
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-primary rounded"
                                                                                role="progressbar" style="width: 55%;"
                                                                                aria-valuenow="55" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>756
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 95%;"
                                                                                aria-valuenow="95" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>78,3%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 38%;"
                                                                                aria-valuenow="38" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6,4%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-info rounded"
                                                                                role="progressbar" style="width: 30%;"
                                                                                aria-valuenow="30" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>9,45
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-danger rounded"
                                                                                role="progressbar" style="width: 41%;"
                                                                                aria-valuenow="41" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>9:05
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-warning rounded"
                                                                                role="progressbar" style="width: 67%;"
                                                                                aria-valuenow="67" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>8.63%
                                                                        <div class="progress mt-1" style="height:4px;">
                                                                            <div class="progress-bar bg-success rounded"
                                                                                role="progressbar" style="width: 41%;"
                                                                                aria-valuenow="41" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sessions-section end -->
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card user-card">
                                            <div class="card-header">
                                                <h5>Profile</h5>
                                            </div>
                                            <div class="card-body  text-center">
                                                <div class="usre-image">
                                                    <img src="assets/images/widget/img-round1.jpg"
                                                        class="img-radius wid-100 m-auto" alt="User Profile Image">
                                                </div>
                                                <h6 class="f-w-600 m-t-25 m-b-10">Alessa Robert</h6>
                                                <p>Active | Male | Born 23.05.1992</p>
                                                <hr>
                                                <p class="m-t-15">Activity Level: 87%</p>
                                                <div class="bg-c-blue counter-block m-t-10 p-20 rounded">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <i class="fas fa-calendar-check text-white f-20"></i>
                                                            <h6 class="text-white mt-2 mb-0">1256</h6>
                                                        </div>
                                                        <div class="col-4">
                                                            <i class="fas fa-user text-white f-20"></i>
                                                            <h6 class="text-white mt-2 mb-0">8562</h6>
                                                        </div>
                                                        <div class="col-4">
                                                            <i class="fas fa-folder-open text-white f-20"></i>
                                                            <h6 class="text-white mt-2 mb-0">189</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="m-t-15">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry.</p>
                                                <hr>
                                                <div class="row justify-content-center user-social-link">
                                                    <div class="col-auto"><a href="index.html#!"><i
                                                                class="fab fa-facebook-f text-primary f-22"></i></a></div>
                                                    <div class="col-auto"><a href="index.html#!"><i
                                                                class="fab fa-twitter text-c-info f-22"></i></a></div>
                                                    <div class="col-auto"><a href="index.html#!"><i
                                                                class="fab fa-dribbble text-c-red f-22"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->

        <!-- Warning Section start -->
        <!-- Older IE warning message -->
        <!--[if lt IE 11]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade
                   <br/>to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="assets/images/browser/chrome.png" alt="Chrome">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="assets/images/browser/firefox.png" alt="Firefox">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="assets/images/browser/opera.png" alt="Opera">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="assets/images/browser/safari.png" alt="Safari">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="assets/images/browser/ie.png" alt="">
                                <div>IE (11 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
        <script src="assets/js/menu-setting.js"></script>

        <!-- am chart js -->
        <script src="assets/plugins/chart-am4/js/core.js"></script>
        <script src="assets/plugins/chart-am4/js/charts.js"></script>
        <script src="assets/plugins/chart-am4/js/animated.js"></script>
        <script src="assets/plugins/chart-am4/js/maps.js"></script>
        <script src="assets/plugins/chart-am4/js/worldLow.js"></script>
        <script src="assets/plugins/chart-am4/js/continentsLow.js"></script>



        <!-- dashboard-custom js -->
        <script src="assets/js/pages/dashboard-analytics.js"></script>


        <div class="footer-fab">
            <div class="b-bg">
                <i class="fas fa-question"></i>
            </div>
            <div class="fab-hover">
                <ul class="list-unstyled">
                    <li><a href="https://html.phoenixcoded.net/dasho/bootstrap/doc/index-bc-package.html"
                            target="_blank" data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i
                                class="feather icon-layers"></i></a></li>
                    <li><a href="https://html.phoenixcoded.net/dasho/bootstrap/doc/index.html" target="_blank"
                            data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i
                                class="feather icon feather icon-book"></i></a></li>
                </ul>
            </div>
        </div>


    </body>
@stop
