<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms_advanced.html.twig */
class __TwigTemplate_156a7a64315f30cd0d84bda80b8354e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms_advanced.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../images/favicon.ico\">

    <title>Sunny Admin - Dashboard  Advanced form elements </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">

</head>
<body class=\"hold-transition dark-skin sidebar-mini theme-primary\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top pl-30\">
      <!-- Sidebar toggle button-->
\t  <div>
\t\t  <ul class=\"nav\">
\t\t\t<li class=\"btn-group nav-item\">
\t\t\t\t<a href=\"#\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" data-toggle=\"push-menu\" role=\"button\">
\t\t\t\t\t<i class=\"nav-link-icon mdi mdi-menu\"></i>
\t\t\t    </a>
\t\t\t</li>
\t\t\t<li class=\"btn-group nav-item\">
\t\t\t\t<a href=\"#\" data-provide=\"fullscreen\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" title=\"Full Screen\">
\t\t\t\t\t<i class=\"nav-link-icon mdi mdi-crop-free\"></i>
\t\t\t    </a>
\t\t\t</li>\t\t\t
\t\t\t<li class=\"btn-group nav-item d-none d-xl-inline-block\">
\t\t\t\t<a href=\"#\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" title=\"\">
\t\t\t\t\t<i class=\"ti-check-box\"></i>
\t\t\t    </a>
\t\t\t</li>
\t\t\t<li class=\"btn-group nav-item d-none d-xl-inline-block\">
\t\t\t\t<a href=\"calendar.html.twig\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" title=\"\">
\t\t\t\t\t<i class=\"ti-calendar\"></i>
\t\t\t    </a>
\t\t\t</li>
\t\t  </ul>
\t  </div>
\t\t
      <div class=\"navbar-custom-menu r-side\">
        <ul class=\"nav navbar-nav\">
\t\t  <!-- full Screen -->
\t      <li class=\"search-bar\">\t\t  
\t\t\t  <div class=\"lookup lookup-circle lookup-right\">
\t\t\t     <input type=\"text\" name=\"s\">
\t\t\t  </div>
\t\t  </li>\t\t\t
\t\t  <!-- Notifications -->
\t\t  <li class=\"dropdown notifications-menu\">
\t\t\t<a href=\"#\" class=\"waves-effect waves-light rounded dropdown-toggle\" data-toggle=\"dropdown\" title=\"Notifications\">
\t\t\t  <i class=\"ti-bell\"></i>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu animated bounceIn\">

\t\t\t  <li class=\"header\">
\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t<div class=\"flexbox\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 mt-0\">Notifications</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-danger\">Clear All</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </li>

\t\t\t  <li>
\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t<ul class=\"menu sm-scrol\">
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-users text-info\"></i> Curabitur id eros quis nunc suscipit blandit.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-warning text-warning\"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-users text-danger\"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-shopping-cart text-success\"></i> In gravida mauris et nisi
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-user text-danger\"></i> Praesent eu lacus in libero dictum fermentum.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-user text-primary\"></i> Nunc fringilla lorem 
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-user text-success\"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t  <li class=\"footer\">
\t\t\t\t  <a href=\"#\">View all</a>
\t\t\t  </li>
\t\t\t</ul>
\t\t  </li>\t
\t\t  
\t      <!-- User Account-->
          <li class=\"dropdown user user-menu\">\t
\t\t\t<a href=\"#\" class=\"waves-effect waves-light rounded dropdown-toggle p-0\" data-toggle=\"dropdown\" title=\"User\">
\t\t\t\t<img src=\"../images/avatar/1.jpg\" alt=\"\">
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu animated flipInX\">
\t\t\t  <li class=\"user-body\">
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-user text-muted mr-2\"></i> Profile</a>
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-wallet text-muted mr-2\"></i> My Wallet</a>
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-settings text-muted mr-2\"></i> Settings</a>
\t\t\t\t <div class=\"dropdown-divider\"></div>
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-lock text-muted mr-2\"></i> Logout</a>
\t\t\t  </li>
\t\t\t</ul>
          </li>\t
\t\t  <li>
              <a href=\"#\" data-toggle=\"control-sidebar\" title=\"Setting\" class=\"waves-effect waves-light\">
\t\t\t  \t<i class=\"ti-settings\"></i>
\t\t\t  </a>
          </li>
\t\t\t
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">
    <!-- sidebar-->
    <section class=\"sidebar\">\t
\t\t
        <div class=\"user-profile\">
\t\t\t<div class=\"ulogo\">
\t\t\t\t <a href=\"index.html.twig\">
\t\t\t\t  <!-- logo for regular state and mobile devices -->
\t\t\t\t\t <div class=\"d-flex align-items-center justify-content-center\">\t\t\t\t\t \t
\t\t\t\t\t\t  <img src=\"../images/logo-dark.png\" alt=\"\">
\t\t\t\t\t\t  <h3><b>Sunny</b> Admin</h3>
\t\t\t\t\t </div>
\t\t\t\t</a>
\t\t\t</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class=\"sidebar-menu\" data-widget=\"tree\">  
\t\t  
\t\t<li>
          <a href=\"index.html.twig\">
            <i data-feather=\"pie-chart\"></i>
\t\t\t<span>Dashboard</span>
          </a>
        </li>  
\t\t
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"message-circle\"></i>
            <span>Application</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"chat.html.twig\"><i class=\"ti-more\"></i>Chat</a></li>
            <li><a href=\"calendar.html.twig\"><i class=\"ti-more\"></i>Calendar</a></li>
          </ul>
        </li> 
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"mail\"></i> <span>Mailbox</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"mailbox_inbox.html.twig\"><i class=\"ti-more\"></i>Inbox</a></li>
            <li><a href=\"mailbox_compose.html.twig\"><i class=\"ti-more\"></i>Compose</a></li>
            <li><a href=\"mailbox_read_mail.html.twig\"><i class=\"ti-more\"></i>Read</a></li>
          </ul>
        </li>
\t\t
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"file\"></i>
            <span>Pages</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"profile.html.twig\"><i class=\"ti-more\"></i>Profile</a></li>
            <li><a href=\"invoice.html.twig\"><i class=\"ti-more\"></i>Invoice</a></li>
            <li><a href=\"gallery.html.twig\"><i class=\"ti-more\"></i>Gallery</a></li>
            <li><a href=\"faq.html.twig\"><i class=\"ti-more\"></i>FAQs</a></li>
            <li><a href=\"timeline.html.twig\"><i class=\"ti-more\"></i>Timeline</a></li>
          </ul>
        </li> \t\t  
\t\t 
        <li class=\"header nav-small-cap\">User Interface</li>
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"grid\"></i>
            <span>Components</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"components_alerts.html.twig\"><i class=\"ti-more\"></i>Alerts</a></li>
            <li><a href=\"components_badges.html.twig\"><i class=\"ti-more\"></i>Badge</a></li>
            <li><a href=\"components_buttons.html.twig\"><i class=\"ti-more\"></i>Buttons</a></li>
            <li><a href=\"components_sliders.html.twig\"><i class=\"ti-more\"></i>Sliders</a></li>
            <li><a href=\"components_dropdown.html.twig\"><i class=\"ti-more\"></i>Dropdown</a></li>
            <li><a href=\"components_modals.html.twig\"><i class=\"ti-more\"></i>Modal</a></li>
            <li><a href=\"components_nestable.html.twig\"><i class=\"ti-more\"></i>Nestable</a></li>
            <li><a href=\"components_progress_bars.html.twig\"><i class=\"ti-more\"></i>Progress Bars</a></li>
          </ul>
        </li>
\t\t
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"credit-card\"></i>
            <span>Cards</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
\t\t\t<li><a href=\"card_advanced.html.twig\"><i class=\"ti-more\"></i>Advanced Cards</a></li>
\t\t\t<li><a href=\"card_basic.html.twig\"><i class=\"ti-more\"></i>Basic Cards</a></li>
\t\t\t<li><a href=\"card_color.html.twig\"><i class=\"ti-more\"></i>Cards Color</a></li>
\t\t  </ul>
        </li>  
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"hard-drive\"></i>
            <span>Content</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"content_typography.html.twig\"><i class=\"ti-more\"></i>Typography</a></li>
            <li><a href=\"content_media.html.twig\"><i class=\"ti-more\"></i>Media</a></li>
            <li><a href=\"content_grid.html.twig\"><i class=\"ti-more\"></i>Grid</a></li>
          </ul>
        </li>
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"package\"></i>
            <span>Utilities</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"utilities_border.html.twig\"><i class=\"ti-more\"></i>Border</a></li>
            <li><a href=\"utilities_color.html.twig\"><i class=\"ti-more\"></i>Color</a></li>
            <li><a href=\"utilities_ribbons.html.twig\"><i class=\"ti-more\"></i>Ribbons</a></li>
            <li><a href=\"utilities_tab.html.twig\"><i class=\"ti-more\"></i>Tabs</a></li>
            <li><a href=\"utilities_animations.html.twig\"><i class=\"ti-more\"></i>Animation</a></li>
          </ul>
        </li>
\t\t  
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"edit-2\"></i>
            <span>Icons</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"icons_fontawesome.html.twig\"><i class=\"ti-more\"></i>Font Awesome</a></li>
            <li><a href=\"icons_glyphicons.html.twig\"><i class=\"ti-more\"></i>Glyphicons</a></li>
            <li><a href=\"icons_material.html.twig\"><i class=\"ti-more\"></i>Material Icons</a></li>\t
            <li><a href=\"icons_themify.html.twig\"><i class=\"ti-more\"></i>Themify Icons</a></li>
            <li><a href=\"icons_simpleline.html.twig\"><i class=\"ti-more\"></i>Simple Line Icons</a></li>
            <li><a href=\"icons_cryptocoins.html.twig\"><i class=\"ti-more\"></i>Cryptocoins Icons</a></li>
            <li><a href=\"icons_flag.html.twig\"><i class=\"ti-more\"></i>Flag Icons</a></li>
            <li><a href=\"icons_weather.html.twig\"><i class=\"ti-more\"></i>Weather Icons</a></li>
          </ul>
        </li> 
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"inbox\"></i>
\t\t\t<span>Forms</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"forms_advanced.html.twig\"><i class=\"ti-more\"></i>Advanced Elements</a></li>
            <li><a href=\"forms_editors.html.twig\"><i class=\"ti-more\"></i>Editors</a></li>
            <li><a href=\"forms_code_editor.html.twig\"><i class=\"ti-more\"></i>Code Editor</a></li>
            <li><a href=\"forms_validation.html.twig\"><i class=\"ti-more\"></i>Form Validation</a></li>
            <li><a href=\"forms_wizard.html.twig\"><i class=\"ti-more\"></i>Form Wizard</a></li>
            <li><a href=\"forms_general.html.twig\"><i class=\"ti-more\"></i>General Elements</a></li>
            <li><a href=\"forms_dropzone.html.twig\"><i class=\"ti-more\"></i>Dropzone</a></li>
          </ul>
        </li>
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"server\"></i>
\t\t\t<span>Tables</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"tables_simple.html.twig\"><i class=\"ti-more\"></i>Simple tables</a></li>
            <li><a href=\"tables_data.html.twig\"><i class=\"ti-more\"></i>Data tables</a></li>
          </ul>
        </li>
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"pie-chart\"></i>
            <span>Charts</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"charts_chartjs.html.twig\"><i class=\"ti-more\"></i>ChartJS</a></li>
            <li><a href=\"charts_flot.html.twig\"><i class=\"ti-more\"></i>Flot</a></li>
            <li><a href=\"charts_inline.html.twig\"><i class=\"ti-more\"></i>Inline</a></li>\t
            <li><a href=\"charts_morris.html.twig\"><i class=\"ti-more\"></i>Morris</a></li>
            <li><a href=\"charts_peity.html.twig\"><i class=\"ti-more\"></i>Peity</a></li>
            <li><a href=\"charts_chartist.html.twig\"><i class=\"ti-more\"></i>Chartist</a></li>
          </ul>
        </li>  
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"map\"></i>
\t\t\t<span>Map</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"map_google.html.twig\"><i class=\"ti-more\"></i>Google Map</a></li>
            <li><a href=\"map_vector.html.twig\"><i class=\"ti-more\"></i>Vector Map</a></li>
          </ul>
        </li> \t\t\t  
\t\t  
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"alert-triangle\"></i>
\t\t\t<span>Authentication</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"auth_login.html.twig\"><i class=\"ti-more\"></i>Login</a></li>
\t\t\t<li><a href=\"auth_register.html.twig\"><i class=\"ti-more\"></i>Register</a></li>
\t\t\t<li><a href=\"auth_lockscreen.html.twig\"><i class=\"ti-more\"></i>Lockscreen</a></li>
\t\t\t<li><a href=\"auth_user_pass.html.twig\"><i class=\"ti-more\"></i>Password</a></li>
\t\t\t<li><a href=\"error_404.html.twig\"><i class=\"ti-more\"></i>Error 404</a></li>
\t\t\t<li><a href=\"error_maintenance.html.twig\"><i class=\"ti-more\"></i>Maintenance</a></li>\t
          </ul>
        </li> \t\t  \t\t  
\t\t  
\t\t<li class=\"header nav-small-cap\">EXTRA</li>\t\t  
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"layers\"></i>
\t\t\t<span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\">Level One</a></li>
            <li class=\"treeview\">
              <a href=\"#\">Level One
                <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\">Level Two</a></li>
                <li class=\"treeview\">
                  <a href=\"#\">Level Two
                    <span class=\"pull-right-container\">
\t\t\t\t\t  <i class=\"fa fa-angle-right pull-right\"></i>
\t\t\t\t\t</span>
                  </a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Level Three</a></li>
                    <li><a href=\"#\">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href=\"#\">Level One</a></li>
          </ul>
        </li>  
\t\t  
\t\t<li>
          <a href=\"auth_login.html.twig\">
            <i data-feather=\"lock\"></i>
\t\t\t<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
\t
\t<div class=\"sidebar-footer\">
\t\t<!-- item-->
\t\t<a href=\"javascript:void(0)\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Settings\" aria-describedby=\"tooltip92529\"><i class=\"ti-settings\"></i></a>
\t\t<!-- item-->
\t\t<a href=\"mailbox_inbox.html.twig\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Email\"><i class=\"ti-email\"></i></a>
\t\t<!-- item-->
\t\t<a href=\"javascript:void(0)\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Logout\"><i class=\"ti-lock\"></i></a>
\t</div>
  </aside>
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
\t  <div class=\"container-full\">
\t\t<!-- Content Header (Page header) -->
\t\t<div class=\"content-header\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"mr-auto\">
\t\t\t\t\t<h3 class=\"page-title\">Advanced Form Elements</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Forms</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Advanced Form Elements</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t  <div class=\"row\">

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box\">
\t\t\t\t  
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title\">Type options</h4>  
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Datetime</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"datetime\" name=\"datetime\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"datetime\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Date</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"date\" name=\"date\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"date\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Month</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"month\" name=\"month\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"month\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Time</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"time\" name=\"time\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"time\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Week</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"week\" name=\"week\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"week\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Number</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"number\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"number\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Email</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"email\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">URL</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"url\" name=\"url\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"url\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Search</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" name=\"search\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"search\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Tel</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"tel\" name=\"tel\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"tel\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Color</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"color\" name=\"color\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"color\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t  
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title\">Basic file inputs</h4>  
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-lg-2\">Default file input</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-lg-2\">Custom BS file input</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"custom-file-input\" id=\"customFile\">
\t\t\t\t\t\t\t\t<label class=\"custom-file-label\" for=\"customFile\">Choose file</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Input masks</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Date dd/mm/yyyy -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date masks:</label>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'alias': 'dd/mm/yyyy'\" data-mask>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.input group -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t  <!-- Date mm/dd/yyyy -->
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'alias': 'mm/dd/yyyy'\" data-mask>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.input group -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- phone mask -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>US phone mask:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask':[ '(999) 999-9999']\" data-mask>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- phone mask -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Intl US phone mask:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control\"
\t\t\t\t\t\t\t data-inputmask=\"'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']\" data-mask>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- IP mask -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>IP mask:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-laptop\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'alias': 'ip'\" data-mask>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->\t\t\t\t\t  
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Color & Time Picker</h4>
\t\t\t\t</div>\t\t\t\t  
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Color Picker -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Color picker:</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control my-colorpicker1\">
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Color Picker -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Color picker with addon:</label>

\t\t\t\t\t<div class=\"input-group my-colorpicker2\">
\t\t\t\t\t  <input type=\"text\" class=\"form-control\">

\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"ion ion-paintbucket\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- time Picker -->
\t\t\t\t  <div class=\"bootstrap-timepicker\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label>Time picker:</label>

\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control timepicker\">

\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t  <i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.input group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.form group -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t  <i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control timepicker\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.input group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.form group -->
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Date picker</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Date -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date:</label>

\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control pull-right\" id=\"datepicker\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Date range -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date range:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control pull-right\" id=\"reservation\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Date and time range -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date and time range:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control pull-right\" id=\"reservationtime\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Date and time range -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date range button:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default pull-right btn-rounded\" id=\"daterange-btn\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t  <i class=\"fa fa-calendar\"></i> Date range picker
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t  </button>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Select Elements</h4>
\t\t\t\t\t<ul class=\"box-controls pull-right\">
\t\t\t\t\t  <li><a class=\"box-btn-close\" href=\"#\"></a></li>
\t\t\t\t\t  <li><a class=\"box-btn-slide\" href=\"#\"></a></li>\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body pb-0\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Minimal</label>
\t\t\t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\">
\t\t\t\t\t\t  <option selected=\"selected\">Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option>California</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Disabled</label>
\t\t\t\t\t\t<select class=\"form-control select2\" disabled=\"disabled\" style=\"width: 100%;\">
\t\t\t\t\t\t  <option selected=\"selected\">Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option>California</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Multiple</label>
\t\t\t\t\t\t<select class=\"form-control select2\" multiple=\"multiple\" data-placeholder=\"Select a State\"
\t\t\t\t\t\t\t\tstyle=\"width: 100%;\">
\t\t\t\t\t\t  <option>Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option>California</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Disabled Result</label>
\t\t\t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\">
\t\t\t\t\t\t  <option selected=\"selected\">Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option disabled=\"disabled\">California (disabled)</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.row -->
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t  <div class=\"box-header with-border\">
\t\t\t\t\t<h4 class=\"box-title\">Bootstrap Select boxes</h4>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"box-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h5 class=\"my-10\">Select box</h5>
\t\t\t\t\t\t\t<select class=\"selectpicker\">
\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h5 class=\"my-10\">Select boxes with Option groups</h5>
\t\t\t\t\t\t\t<select class=\"selectpicker\">
\t\t\t\t\t\t\t\t<optgroup label=\"\">
\t\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"\">
\t\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h5 class=\"my-10\">Multiple select boxes</h5>
\t\t\t\t\t\t\t<select class=\"selectpicker\" multiple>
\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"my-10\">With colored Button Classes</h5>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-primary\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-info btn-outline-info\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-warning \">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-danger\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-success\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20\" data-style=\"btn-default\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t  <div class=\"box-header with-border\">
\t\t\t\t\t<h4 class=\"box-title\">Bootstrap TouchSpin</h4>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"box-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<form class=\"pr-20\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Vertical Touchspin</label>
\t\t\t\t\t\t\t\t\t<input class=\"vertical-spin\" type=\"text\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\" value=\"\" name=\"vertical-spin\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Postfix</label>
\t\t\t\t\t\t\t\t\t<input id=\"demo1\" type=\"text\" value=\"55\" name=\"demo1\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Prefix</label>
\t\t\t\t\t\t\t\t\t<input id=\"demo2\" type=\"text\" value=\"0\" name=\"demo2\" class=\" form-control\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Init </label>
\t\t\t\t\t\t\t\t\t<input id=\"demo3\" type=\"text\" value=\"\" name=\"demo3\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Value set 30 </label>
\t\t\t\t\t\t\t\t\t<input id=\"demo3_1\" type=\"text\" value=\"30\" name=\"demo3_1\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Button group</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input id=\"demo4\" type=\"text\" class=\"form-control\" name=\"demo4\" value=\"50\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t<!-- /.box-body -->\t\t\t\t  
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Input Tags</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h6 class=\"box-subtitle d-block mb-10\">Add <code>data-role=\"tagsinput\"</code> to your input field & its automatically change it to a tags input.</h6>
\t\t\t\t\t<div class=\"tags-default\">
\t\t\t\t\t\t<input type=\"text\" value=\"Lorem,Ipsum,Amet\" data-role=\"tagsinput\" placeholder=\"add tags\" /> </div>
\t\t\t\t\t<h5 class=\"box-title mt-20\">Select Tags</h5>
\t\t\t\t\t<h6 class=\"box-subtitle d-block mb-10\">You can also use <code>select multiple</code> to your input field.</h6>
\t\t\t\t\t<select multiple data-role=\"tagsinput\">
\t\t\t\t\t\t<option value=\"Lorem\">Lorem</option>
\t\t\t\t\t\t<option value=\"Ipsum\">Ipsum</option>
\t\t\t\t\t\t<option value=\"Amet\">Amet</option>
\t\t\t\t\t</select>
\t\t\t\t\t<h5 class=\"box-title  mt-20 d-block mb-10\">Input Group Tags</h5>
\t\t\t\t\t<h6 class=\"box-subtitle d-block mb-10\">You can also use group tag <code>data-role=\"tagsinput\"</code> to your input field.</h6>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" value=\"Lorem,Ipsum,Amet\" data-role=\"tagsinput\" placeholder=\"add tags\"> <span class=\"input-group-addon\">Tags</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">iCheck - Checkbox &amp; Radio Inputs</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Minimal style -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">

\t\t\t\t\t\t  <!-- checkbox -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal\" disabled>
\t\t\t\t\t\t\t  Minimal skin checkbox
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- Minimal red style -->

\t\t\t\t\t\t  <!-- checkbox -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal-red\" disabled>
\t\t\t\t\t\t\t  Minimal red skin checkbox
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- Minimal red style -->

\t\t\t\t\t\t  <!-- checkbox -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"flat-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"flat-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"flat-red\" disabled>
\t\t\t\t\t\t\t  Flat green skin checkbox
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>\t

\t\t\t\t\t\t  <!-- radio -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r1\" class=\"minimal\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r1\" class=\"minimal\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r1\" class=\"minimal\" disabled>
\t\t\t\t\t\t\t  Minimal skin radio
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- radio -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r2\" class=\"minimal-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r2\" class=\"minimal-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r2\" class=\"minimal-red\" disabled>
\t\t\t\t\t\t\t  Minimal red skin radio
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- radio -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r3\" class=\"flat-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r3\" class=\"flat-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r3\" class=\"flat-red\" disabled>
\t\t\t\t\t\t\t  Flat green skin radio
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-square-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Checkbox</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" checked />
\t\t\t\t\t\t<label for=\"basic_checkbox_1\">Default</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_2\" class=\"filled-in\" checked />
\t\t\t\t\t\t<label for=\"basic_checkbox_2\">Filled In</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_3\" checked disabled />
\t\t\t\t\t\t<label for=\"basic_checkbox_3\">Default - Disabled</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_4\" class=\"filled-in\" checked disabled />
\t\t\t\t\t\t<label for=\"basic_checkbox_4\">Filled In - Disabled</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-square-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Checkbox Design Colors</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_1\" class=\"chk-col-primary\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_1\">Primary</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_3\" class=\"chk-col-success\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_3\">Success</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_4\" class=\"chk-col-info\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_4\">Info</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_6\" class=\"chk-col-warning\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_6\">Warning</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_7\" class=\"chk-col-danger\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_7\">Danger</label>\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-square-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Checkbox Design Colors with Filled In</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_21\" class=\"filled-in chk-col-primary\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_21\">Primary</label>\t\t\t\t\t
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_23\" class=\"filled-in chk-col-success\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_23\">Success</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_24\" class=\"filled-in chk-col-info\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_24\">Info</label>\t
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_27\" class=\"filled-in chk-col-warning\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_27\">Warning</label>\t\t\t\t\t
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_29\" class=\"filled-in chk-col-danger\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_29\">Danger</label>\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-circle text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Radio Button</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-radio-button\">
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_1\" checked />
\t\t\t\t\t\t<label for=\"radio_1\">Radio - 1</label>
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_2\" />
\t\t\t\t\t\t<label for=\"radio_2\">Radio - 2</label>
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" class=\"with-gap\" id=\"radio_3\" />
\t\t\t\t\t\t<label for=\"radio_3\">Radio - With Gap</label>
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_4\" class=\"with-gap\" />
\t\t\t\t\t\t<label for=\"radio_4\">Radio - With Gap</label>
\t\t\t\t\t\t<input name=\"group2\" type=\"radio\" id=\"radio_5\" checked disabled />
\t\t\t\t\t\t<label for=\"radio_5\">Radio - Disabled</label>
\t\t\t\t\t\t<input name=\"group3\" type=\"radio\" id=\"radio_6\" class=\"with-gap\" checked disabled />
\t\t\t\t\t\t<label for=\"radio_6\">Radio - Disabled</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-circle text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Radio Button Design Colors</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-radio-button\">
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_7\" class=\"radio-col-primary\" checked />
\t\t\t\t\t\t<label for=\"radio_7\">Primary</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_9\" class=\"radio-col-success\" />
\t\t\t\t\t\t<label for=\"radio_9\">Success</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_10\" class=\"radio-col-info\" />
\t\t\t\t\t\t<label for=\"radio_10\">Info</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_12\" class=\"radio-col-warning\" />
\t\t\t\t\t\t<label for=\"radio_12\">Warning</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_13\" class=\"radio-col-danger\" />
\t\t\t\t\t\t<label for=\"radio_13\">Danger</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-circle-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Radio Button Design Colors with Outline</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-radio-button\">
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_30\" class=\"with-gap radio-col-primary\" checked />
\t\t\t\t\t\t<label for=\"radio_30\">Primary</label>\t\t\t\t\t
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_32\" class=\"with-gap radio-col-success\" />
\t\t\t\t\t\t<label for=\"radio_32\">Success</label>
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_33\" class=\"with-gap radio-col-info\" />
\t\t\t\t\t\t<label for=\"radio_33\">Info</label>
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_35\" class=\"with-gap radio-col-warning\" />
\t\t\t\t\t\t<label for=\"radio_35\">Warning</label>
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_36\" class=\"with-gap radio-col-danger\" />
\t\t\t\t\t\t<label for=\"radio_36\">Danger</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- ./col -->
\t\t  </div>
\t\t  <!-- /.row -->
\t\t</section>
\t\t<!-- /.content -->
\t  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class=\"main-footer\">
    <div class=\"pull-right d-none d-sm-inline-block\">
        <ul class=\"nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end\">
\t\t  <li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"javascript:void(0)\">FAQ</a>
\t\t  </li>
\t\t  <li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"#\">Purchase Now</a>
\t\t  </li>
\t\t</ul>
    </div>
\t  &copy; 2020 <a href=\"#\">Psd to Html Expert</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class=\"control-sidebar\">
\t  
\t<div class=\"rpanel-title\"><span class=\"pull-right btn btn-circle btn-danger\"><i class=\"ion ion-close text-white\" data-toggle=\"control-sidebar\"></i></span> </div>  <!-- Create the tabs -->
    <ul class=\"nav nav-tabs control-sidebar-tabs\">
      <li class=\"nav-item\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\" class=\"active\">Chat</a></li>
      <li class=\"nav-item\"><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\">Todo</a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
          <div class=\"flexbox\">
\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\"><i class=\"ti-minus\"></i></a>\t
\t\t\t<p>Users</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"text-right text-grey\"><i class=\"ti-plus\"></i></a>
\t\t  </div>
\t\t  <div class=\"lookup lookup-sm lookup-right d-none d-lg-block\">
\t\t\t<input type=\"text\" name=\"s\" placeholder=\"Search\" class=\"w-p100\">
\t\t  </div>
          <div class=\"media-list media-list-hover mt-20\">
\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-success\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/1.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Tyler</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Praesent tristique diam...</p>
\t\t\t\t  <span>Just now</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-danger\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/2.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Luke</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Cras tempor diam ...</p>
\t\t\t\t  <span>33 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-warning\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/3.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-primary\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/4.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>\t\t\t
\t\t\t
\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-success\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/1.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Tyler</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Praesent tristique diam...</p>
\t\t\t\t  <span>Just now</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-danger\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/2.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Luke</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Cras tempor diam ...</p>
\t\t\t\t  <span>33 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-warning\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/3.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-primary\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/4.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>
\t\t\t  
\t\t  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
          <div class=\"flexbox\">
\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\"><i class=\"ti-minus\"></i></a>\t
\t\t\t<p>Todo List</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"text-right text-grey\"><i class=\"ti-plus\"></i></a>
\t\t  </div>
        <ul class=\"todo-list mt-20\">
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_1\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_1\" class=\"mb-0 h-15\"></label>
\t\t\t  <!-- todo text -->
\t\t\t  <span class=\"text-line\">Nulla vitae purus</span>
\t\t\t  <!-- Emphasis label -->
\t\t\t  <small class=\"badge bg-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
\t\t\t  <!-- General tools such as edit or delete-->
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_2\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_2\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Phasellus interdum</span>
\t\t\t  <small class=\"badge bg-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_3\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_3\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Quisque sodales</span>
\t\t\t  <small class=\"badge bg-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_4\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_4\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Proin nec mi porta</span>
\t\t\t  <small class=\"badge bg-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_5\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_5\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Maecenas scelerisque</span>
\t\t\t  <small class=\"badge bg-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_6\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_6\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Vivamus nec orci</span>
\t\t\t  <small class=\"badge bg-info\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_7\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_7\" class=\"mb-0 h-15\"></label>
\t\t\t  <!-- todo text -->
\t\t\t  <span class=\"text-line\">Nulla vitae purus</span>
\t\t\t  <!-- Emphasis label -->
\t\t\t  <small class=\"badge bg-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
\t\t\t  <!-- General tools such as edit or delete-->
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_8\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_8\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Phasellus interdum</span>
\t\t\t  <small class=\"badge bg-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_9\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_9\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Quisque sodales</span>
\t\t\t  <small class=\"badge bg-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_10\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_10\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Proin nec mi porta</span>
\t\t\t  <small class=\"badge bg-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

    
\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js\"></script>
\t<script src=\"../assets/vendor_components/select2/dist/js/select2.full.js\"></script>
\t<script src=\"../assets/vendor_plugins/input-mask/jquery.inputmask.js\"></script>
\t<script src=\"../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
\t<script src=\"../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js\"></script>
\t<script src=\"../assets/vendor_components/moment/min/moment.min.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js\"></script>
\t<script src=\"../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js\"></script>
\t<script src=\"../assets/vendor_plugins/iCheck/icheck.min.js\"></script>
\t<script src=\"js/pages/advanced-form-element.js\"></script>
\t
\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "forms_advanced.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../images/favicon.ico\">

    <title>Sunny Admin - Dashboard  Advanced form elements </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">

</head>
<body class=\"hold-transition dark-skin sidebar-mini theme-primary\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top pl-30\">
      <!-- Sidebar toggle button-->
\t  <div>
\t\t  <ul class=\"nav\">
\t\t\t<li class=\"btn-group nav-item\">
\t\t\t\t<a href=\"#\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" data-toggle=\"push-menu\" role=\"button\">
\t\t\t\t\t<i class=\"nav-link-icon mdi mdi-menu\"></i>
\t\t\t    </a>
\t\t\t</li>
\t\t\t<li class=\"btn-group nav-item\">
\t\t\t\t<a href=\"#\" data-provide=\"fullscreen\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" title=\"Full Screen\">
\t\t\t\t\t<i class=\"nav-link-icon mdi mdi-crop-free\"></i>
\t\t\t    </a>
\t\t\t</li>\t\t\t
\t\t\t<li class=\"btn-group nav-item d-none d-xl-inline-block\">
\t\t\t\t<a href=\"#\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" title=\"\">
\t\t\t\t\t<i class=\"ti-check-box\"></i>
\t\t\t    </a>
\t\t\t</li>
\t\t\t<li class=\"btn-group nav-item d-none d-xl-inline-block\">
\t\t\t\t<a href=\"calendar.html.twig\" class=\"waves-effect waves-light nav-link rounded svg-bt-icon\" title=\"\">
\t\t\t\t\t<i class=\"ti-calendar\"></i>
\t\t\t    </a>
\t\t\t</li>
\t\t  </ul>
\t  </div>
\t\t
      <div class=\"navbar-custom-menu r-side\">
        <ul class=\"nav navbar-nav\">
\t\t  <!-- full Screen -->
\t      <li class=\"search-bar\">\t\t  
\t\t\t  <div class=\"lookup lookup-circle lookup-right\">
\t\t\t     <input type=\"text\" name=\"s\">
\t\t\t  </div>
\t\t  </li>\t\t\t
\t\t  <!-- Notifications -->
\t\t  <li class=\"dropdown notifications-menu\">
\t\t\t<a href=\"#\" class=\"waves-effect waves-light rounded dropdown-toggle\" data-toggle=\"dropdown\" title=\"Notifications\">
\t\t\t  <i class=\"ti-bell\"></i>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu animated bounceIn\">

\t\t\t  <li class=\"header\">
\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t<div class=\"flexbox\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 mt-0\">Notifications</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-danger\">Clear All</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </li>

\t\t\t  <li>
\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t<ul class=\"menu sm-scrol\">
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-users text-info\"></i> Curabitur id eros quis nunc suscipit blandit.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-warning text-warning\"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-users text-danger\"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-shopping-cart text-success\"></i> In gravida mauris et nisi
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-user text-danger\"></i> Praesent eu lacus in libero dictum fermentum.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-user text-primary\"></i> Nunc fringilla lorem 
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t  <i class=\"fa fa-user text-success\"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
\t\t\t\t\t</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t  <li class=\"footer\">
\t\t\t\t  <a href=\"#\">View all</a>
\t\t\t  </li>
\t\t\t</ul>
\t\t  </li>\t
\t\t  
\t      <!-- User Account-->
          <li class=\"dropdown user user-menu\">\t
\t\t\t<a href=\"#\" class=\"waves-effect waves-light rounded dropdown-toggle p-0\" data-toggle=\"dropdown\" title=\"User\">
\t\t\t\t<img src=\"../images/avatar/1.jpg\" alt=\"\">
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu animated flipInX\">
\t\t\t  <li class=\"user-body\">
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-user text-muted mr-2\"></i> Profile</a>
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-wallet text-muted mr-2\"></i> My Wallet</a>
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-settings text-muted mr-2\"></i> Settings</a>
\t\t\t\t <div class=\"dropdown-divider\"></div>
\t\t\t\t <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-lock text-muted mr-2\"></i> Logout</a>
\t\t\t  </li>
\t\t\t</ul>
          </li>\t
\t\t  <li>
              <a href=\"#\" data-toggle=\"control-sidebar\" title=\"Setting\" class=\"waves-effect waves-light\">
\t\t\t  \t<i class=\"ti-settings\"></i>
\t\t\t  </a>
          </li>
\t\t\t
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">
    <!-- sidebar-->
    <section class=\"sidebar\">\t
\t\t
        <div class=\"user-profile\">
\t\t\t<div class=\"ulogo\">
\t\t\t\t <a href=\"index.html.twig\">
\t\t\t\t  <!-- logo for regular state and mobile devices -->
\t\t\t\t\t <div class=\"d-flex align-items-center justify-content-center\">\t\t\t\t\t \t
\t\t\t\t\t\t  <img src=\"../images/logo-dark.png\" alt=\"\">
\t\t\t\t\t\t  <h3><b>Sunny</b> Admin</h3>
\t\t\t\t\t </div>
\t\t\t\t</a>
\t\t\t</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class=\"sidebar-menu\" data-widget=\"tree\">  
\t\t  
\t\t<li>
          <a href=\"index.html.twig\">
            <i data-feather=\"pie-chart\"></i>
\t\t\t<span>Dashboard</span>
          </a>
        </li>  
\t\t
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"message-circle\"></i>
            <span>Application</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"chat.html.twig\"><i class=\"ti-more\"></i>Chat</a></li>
            <li><a href=\"calendar.html.twig\"><i class=\"ti-more\"></i>Calendar</a></li>
          </ul>
        </li> 
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"mail\"></i> <span>Mailbox</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"mailbox_inbox.html.twig\"><i class=\"ti-more\"></i>Inbox</a></li>
            <li><a href=\"mailbox_compose.html.twig\"><i class=\"ti-more\"></i>Compose</a></li>
            <li><a href=\"mailbox_read_mail.html.twig\"><i class=\"ti-more\"></i>Read</a></li>
          </ul>
        </li>
\t\t
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"file\"></i>
            <span>Pages</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"profile.html.twig\"><i class=\"ti-more\"></i>Profile</a></li>
            <li><a href=\"invoice.html.twig\"><i class=\"ti-more\"></i>Invoice</a></li>
            <li><a href=\"gallery.html.twig\"><i class=\"ti-more\"></i>Gallery</a></li>
            <li><a href=\"faq.html.twig\"><i class=\"ti-more\"></i>FAQs</a></li>
            <li><a href=\"timeline.html.twig\"><i class=\"ti-more\"></i>Timeline</a></li>
          </ul>
        </li> \t\t  
\t\t 
        <li class=\"header nav-small-cap\">User Interface</li>
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"grid\"></i>
            <span>Components</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"components_alerts.html.twig\"><i class=\"ti-more\"></i>Alerts</a></li>
            <li><a href=\"components_badges.html.twig\"><i class=\"ti-more\"></i>Badge</a></li>
            <li><a href=\"components_buttons.html.twig\"><i class=\"ti-more\"></i>Buttons</a></li>
            <li><a href=\"components_sliders.html.twig\"><i class=\"ti-more\"></i>Sliders</a></li>
            <li><a href=\"components_dropdown.html.twig\"><i class=\"ti-more\"></i>Dropdown</a></li>
            <li><a href=\"components_modals.html.twig\"><i class=\"ti-more\"></i>Modal</a></li>
            <li><a href=\"components_nestable.html.twig\"><i class=\"ti-more\"></i>Nestable</a></li>
            <li><a href=\"components_progress_bars.html.twig\"><i class=\"ti-more\"></i>Progress Bars</a></li>
          </ul>
        </li>
\t\t
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"credit-card\"></i>
            <span>Cards</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
\t\t\t<li><a href=\"card_advanced.html.twig\"><i class=\"ti-more\"></i>Advanced Cards</a></li>
\t\t\t<li><a href=\"card_basic.html.twig\"><i class=\"ti-more\"></i>Basic Cards</a></li>
\t\t\t<li><a href=\"card_color.html.twig\"><i class=\"ti-more\"></i>Cards Color</a></li>
\t\t  </ul>
        </li>  
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"hard-drive\"></i>
            <span>Content</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"content_typography.html.twig\"><i class=\"ti-more\"></i>Typography</a></li>
            <li><a href=\"content_media.html.twig\"><i class=\"ti-more\"></i>Media</a></li>
            <li><a href=\"content_grid.html.twig\"><i class=\"ti-more\"></i>Grid</a></li>
          </ul>
        </li>
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"package\"></i>
            <span>Utilities</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"utilities_border.html.twig\"><i class=\"ti-more\"></i>Border</a></li>
            <li><a href=\"utilities_color.html.twig\"><i class=\"ti-more\"></i>Color</a></li>
            <li><a href=\"utilities_ribbons.html.twig\"><i class=\"ti-more\"></i>Ribbons</a></li>
            <li><a href=\"utilities_tab.html.twig\"><i class=\"ti-more\"></i>Tabs</a></li>
            <li><a href=\"utilities_animations.html.twig\"><i class=\"ti-more\"></i>Animation</a></li>
          </ul>
        </li>
\t\t  
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"edit-2\"></i>
            <span>Icons</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"icons_fontawesome.html.twig\"><i class=\"ti-more\"></i>Font Awesome</a></li>
            <li><a href=\"icons_glyphicons.html.twig\"><i class=\"ti-more\"></i>Glyphicons</a></li>
            <li><a href=\"icons_material.html.twig\"><i class=\"ti-more\"></i>Material Icons</a></li>\t
            <li><a href=\"icons_themify.html.twig\"><i class=\"ti-more\"></i>Themify Icons</a></li>
            <li><a href=\"icons_simpleline.html.twig\"><i class=\"ti-more\"></i>Simple Line Icons</a></li>
            <li><a href=\"icons_cryptocoins.html.twig\"><i class=\"ti-more\"></i>Cryptocoins Icons</a></li>
            <li><a href=\"icons_flag.html.twig\"><i class=\"ti-more\"></i>Flag Icons</a></li>
            <li><a href=\"icons_weather.html.twig\"><i class=\"ti-more\"></i>Weather Icons</a></li>
          </ul>
        </li> 
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"inbox\"></i>
\t\t\t<span>Forms</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"forms_advanced.html.twig\"><i class=\"ti-more\"></i>Advanced Elements</a></li>
            <li><a href=\"forms_editors.html.twig\"><i class=\"ti-more\"></i>Editors</a></li>
            <li><a href=\"forms_code_editor.html.twig\"><i class=\"ti-more\"></i>Code Editor</a></li>
            <li><a href=\"forms_validation.html.twig\"><i class=\"ti-more\"></i>Form Validation</a></li>
            <li><a href=\"forms_wizard.html.twig\"><i class=\"ti-more\"></i>Form Wizard</a></li>
            <li><a href=\"forms_general.html.twig\"><i class=\"ti-more\"></i>General Elements</a></li>
            <li><a href=\"forms_dropzone.html.twig\"><i class=\"ti-more\"></i>Dropzone</a></li>
          </ul>
        </li>
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"server\"></i>
\t\t\t<span>Tables</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"tables_simple.html.twig\"><i class=\"ti-more\"></i>Simple tables</a></li>
            <li><a href=\"tables_data.html.twig\"><i class=\"ti-more\"></i>Data tables</a></li>
          </ul>
        </li>
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"pie-chart\"></i>
            <span>Charts</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"charts_chartjs.html.twig\"><i class=\"ti-more\"></i>ChartJS</a></li>
            <li><a href=\"charts_flot.html.twig\"><i class=\"ti-more\"></i>Flot</a></li>
            <li><a href=\"charts_inline.html.twig\"><i class=\"ti-more\"></i>Inline</a></li>\t
            <li><a href=\"charts_morris.html.twig\"><i class=\"ti-more\"></i>Morris</a></li>
            <li><a href=\"charts_peity.html.twig\"><i class=\"ti-more\"></i>Peity</a></li>
            <li><a href=\"charts_chartist.html.twig\"><i class=\"ti-more\"></i>Chartist</a></li>
          </ul>
        </li>  
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"map\"></i>
\t\t\t<span>Map</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"map_google.html.twig\"><i class=\"ti-more\"></i>Google Map</a></li>
            <li><a href=\"map_vector.html.twig\"><i class=\"ti-more\"></i>Vector Map</a></li>
          </ul>
        </li> \t\t\t  
\t\t  
\t\t<li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"alert-triangle\"></i>
\t\t\t<span>Authentication</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"auth_login.html.twig\"><i class=\"ti-more\"></i>Login</a></li>
\t\t\t<li><a href=\"auth_register.html.twig\"><i class=\"ti-more\"></i>Register</a></li>
\t\t\t<li><a href=\"auth_lockscreen.html.twig\"><i class=\"ti-more\"></i>Lockscreen</a></li>
\t\t\t<li><a href=\"auth_user_pass.html.twig\"><i class=\"ti-more\"></i>Password</a></li>
\t\t\t<li><a href=\"error_404.html.twig\"><i class=\"ti-more\"></i>Error 404</a></li>
\t\t\t<li><a href=\"error_maintenance.html.twig\"><i class=\"ti-more\"></i>Maintenance</a></li>\t
          </ul>
        </li> \t\t  \t\t  
\t\t  
\t\t<li class=\"header nav-small-cap\">EXTRA</li>\t\t  
\t\t  
        <li class=\"treeview\">
          <a href=\"#\">
            <i data-feather=\"layers\"></i>
\t\t\t<span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\">Level One</a></li>
            <li class=\"treeview\">
              <a href=\"#\">Level One
                <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-right pull-right\"></i>
            </span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\">Level Two</a></li>
                <li class=\"treeview\">
                  <a href=\"#\">Level Two
                    <span class=\"pull-right-container\">
\t\t\t\t\t  <i class=\"fa fa-angle-right pull-right\"></i>
\t\t\t\t\t</span>
                  </a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Level Three</a></li>
                    <li><a href=\"#\">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href=\"#\">Level One</a></li>
          </ul>
        </li>  
\t\t  
\t\t<li>
          <a href=\"auth_login.html.twig\">
            <i data-feather=\"lock\"></i>
\t\t\t<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
\t
\t<div class=\"sidebar-footer\">
\t\t<!-- item-->
\t\t<a href=\"javascript:void(0)\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Settings\" aria-describedby=\"tooltip92529\"><i class=\"ti-settings\"></i></a>
\t\t<!-- item-->
\t\t<a href=\"mailbox_inbox.html.twig\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Email\"><i class=\"ti-email\"></i></a>
\t\t<!-- item-->
\t\t<a href=\"javascript:void(0)\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Logout\"><i class=\"ti-lock\"></i></a>
\t</div>
  </aside>
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
\t  <div class=\"container-full\">
\t\t<!-- Content Header (Page header) -->
\t\t<div class=\"content-header\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"mr-auto\">
\t\t\t\t\t<h3 class=\"page-title\">Advanced Form Elements</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Forms</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Advanced Form Elements</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t  <div class=\"row\">

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box\">
\t\t\t\t  
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title\">Type options</h4>  
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Datetime</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"datetime\" name=\"datetime\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"datetime\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Date</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"date\" name=\"date\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"date\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Month</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"month\" name=\"month\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"month\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Time</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"time\" name=\"time\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"time\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Week</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"week\" name=\"week\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"week\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Number</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"number\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"number\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Email</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"email\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">URL</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"url\" name=\"url\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"url\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Search</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" name=\"search\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"search\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Tel</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"tel\" name=\"tel\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"tel\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-md-2\">Color</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"color\" name=\"color\">
\t\t\t\t\t\t\t<span class=\"form-text text-muted\">Using <code>input type=\"color\"</code></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t  
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title\">Basic file inputs</h4>  
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-lg-2\">Default file input</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-form-label col-lg-2\">Custom BS file input</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"custom-file-input\" id=\"customFile\">
\t\t\t\t\t\t\t\t<label class=\"custom-file-label\" for=\"customFile\">Choose file</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Input masks</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Date dd/mm/yyyy -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date masks:</label>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'alias': 'dd/mm/yyyy'\" data-mask>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.input group -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t  <!-- Date mm/dd/yyyy -->
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'alias': 'mm/dd/yyyy'\" data-mask>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.input group -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- phone mask -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>US phone mask:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask':[ '(999) 999-9999']\" data-mask>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- phone mask -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Intl US phone mask:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control\"
\t\t\t\t\t\t\t data-inputmask=\"'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']\" data-mask>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- IP mask -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>IP mask:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-laptop\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control\" data-inputmask=\"'alias': 'ip'\" data-mask>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->\t\t\t\t\t  
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Color & Time Picker</h4>
\t\t\t\t</div>\t\t\t\t  
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Color Picker -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Color picker:</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control my-colorpicker1\">
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Color Picker -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Color picker with addon:</label>

\t\t\t\t\t<div class=\"input-group my-colorpicker2\">
\t\t\t\t\t  <input type=\"text\" class=\"form-control\">

\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"ion ion-paintbucket\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- time Picker -->
\t\t\t\t  <div class=\"bootstrap-timepicker\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label>Time picker:</label>

\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control timepicker\">

\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t  <i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.input group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.form group -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t  <i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control timepicker\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.input group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.form group -->
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Date picker</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Date -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date:</label>

\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control pull-right\" id=\"datepicker\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Date range -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date range:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control pull-right\" id=\"reservation\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Date and time range -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date and time range:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <div class=\"input-group-addon\">
\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t  </div>
\t\t\t\t\t  <input type=\"text\" class=\"form-control pull-right\" id=\"reservationtime\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.input group -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t  <!-- Date and time range -->
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<label>Date range button:</label>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default pull-right btn-rounded\" id=\"daterange-btn\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t  <i class=\"fa fa-calendar\"></i> Date range picker
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t  </button>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <!-- /.form group -->

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Select Elements</h4>
\t\t\t\t\t<ul class=\"box-controls pull-right\">
\t\t\t\t\t  <li><a class=\"box-btn-close\" href=\"#\"></a></li>
\t\t\t\t\t  <li><a class=\"box-btn-slide\" href=\"#\"></a></li>\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body pb-0\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Minimal</label>
\t\t\t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\">
\t\t\t\t\t\t  <option selected=\"selected\">Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option>California</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Disabled</label>
\t\t\t\t\t\t<select class=\"form-control select2\" disabled=\"disabled\" style=\"width: 100%;\">
\t\t\t\t\t\t  <option selected=\"selected\">Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option>California</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Multiple</label>
\t\t\t\t\t\t<select class=\"form-control select2\" multiple=\"multiple\" data-placeholder=\"Select a State\"
\t\t\t\t\t\t\t\tstyle=\"width: 100%;\">
\t\t\t\t\t\t  <option>Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option>California</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-md-3 col-12\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label>Disabled Result</label>
\t\t\t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\">
\t\t\t\t\t\t  <option selected=\"selected\">Alabama</option>
\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t  <option disabled=\"disabled\">California (disabled)</option>
\t\t\t\t\t\t  <option>Delaware</option>
\t\t\t\t\t\t  <option>Tennessee</option>
\t\t\t\t\t\t  <option>Texas</option>
\t\t\t\t\t\t  <option>Washington</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.form-group -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t  </div>
\t\t\t\t  <!-- /.row -->
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t  <div class=\"box-header with-border\">
\t\t\t\t\t<h4 class=\"box-title\">Bootstrap Select boxes</h4>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"box-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h5 class=\"my-10\">Select box</h5>
\t\t\t\t\t\t\t<select class=\"selectpicker\">
\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h5 class=\"my-10\">Select boxes with Option groups</h5>
\t\t\t\t\t\t\t<select class=\"selectpicker\">
\t\t\t\t\t\t\t\t<optgroup label=\"\">
\t\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"\">
\t\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h5 class=\"my-10\">Multiple select boxes</h5>
\t\t\t\t\t\t\t<select class=\"selectpicker\" multiple>
\t\t\t\t\t\t\t\t<option>Lorem</option>
\t\t\t\t\t\t\t\t<option>Ipsum</option>
\t\t\t\t\t\t\t\t<option>Dummy</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"my-10\">With colored Button Classes</h5>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-primary\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-info btn-outline-info\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-warning \">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-danger\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20 mr-10\" data-style=\"btn-success\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<select class=\"selectpicker mb-20\" data-style=\"btn-default\">
\t\t\t\t\t\t\t\t\t<option data-tokens=\"Lorem\">Sed posuere metus vel maximus fringilla.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"ipsum\">Nam in nisl a ligula semper euismod.</option>
\t\t\t\t\t\t\t\t\t<option data-tokens=\"dolor\">Ut rhoncus diam et elit tristique venenatis.</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t  <div class=\"box-header with-border\">
\t\t\t\t\t<h4 class=\"box-title\">Bootstrap TouchSpin</h4>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"box-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<form class=\"pr-20\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Vertical Touchspin</label>
\t\t\t\t\t\t\t\t\t<input class=\"vertical-spin\" type=\"text\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\" value=\"\" name=\"vertical-spin\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Postfix</label>
\t\t\t\t\t\t\t\t\t<input id=\"demo1\" type=\"text\" value=\"55\" name=\"demo1\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Prefix</label>
\t\t\t\t\t\t\t\t\t<input id=\"demo2\" type=\"text\" value=\"0\" name=\"demo2\" class=\" form-control\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Init </label>
\t\t\t\t\t\t\t\t\t<input id=\"demo3\" type=\"text\" value=\"\" name=\"demo3\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Value set 30 </label>
\t\t\t\t\t\t\t\t\t<input id=\"demo3_1\" type=\"text\" value=\"30\" name=\"demo3_1\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Button group</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input id=\"demo4\" type=\"text\" class=\"form-control\" name=\"demo4\" value=\"50\" data-bts-button-down-class=\"btn btn-secondary\" data-bts-button-up-class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t<!-- /.box-body -->\t\t\t\t  
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Input Tags</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h6 class=\"box-subtitle d-block mb-10\">Add <code>data-role=\"tagsinput\"</code> to your input field & its automatically change it to a tags input.</h6>
\t\t\t\t\t<div class=\"tags-default\">
\t\t\t\t\t\t<input type=\"text\" value=\"Lorem,Ipsum,Amet\" data-role=\"tagsinput\" placeholder=\"add tags\" /> </div>
\t\t\t\t\t<h5 class=\"box-title mt-20\">Select Tags</h5>
\t\t\t\t\t<h6 class=\"box-subtitle d-block mb-10\">You can also use <code>select multiple</code> to your input field.</h6>
\t\t\t\t\t<select multiple data-role=\"tagsinput\">
\t\t\t\t\t\t<option value=\"Lorem\">Lorem</option>
\t\t\t\t\t\t<option value=\"Ipsum\">Ipsum</option>
\t\t\t\t\t\t<option value=\"Amet\">Amet</option>
\t\t\t\t\t</select>
\t\t\t\t\t<h5 class=\"box-title  mt-20 d-block mb-10\">Input Group Tags</h5>
\t\t\t\t\t<h6 class=\"box-subtitle d-block mb-10\">You can also use group tag <code>data-role=\"tagsinput\"</code> to your input field.</h6>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" value=\"Lorem,Ipsum,Amet\" data-role=\"tagsinput\" placeholder=\"add tags\"> <span class=\"input-group-addon\">Tags</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">iCheck - Checkbox &amp; Radio Inputs</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <!-- Minimal style -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">

\t\t\t\t\t\t  <!-- checkbox -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal\" disabled>
\t\t\t\t\t\t\t  Minimal skin checkbox
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- Minimal red style -->

\t\t\t\t\t\t  <!-- checkbox -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"minimal-red\" disabled>
\t\t\t\t\t\t\t  Minimal red skin checkbox
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- Minimal red style -->

\t\t\t\t\t\t  <!-- checkbox -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"flat-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"flat-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"checkbox\" class=\"flat-red\" disabled>
\t\t\t\t\t\t\t  Flat green skin checkbox
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>\t

\t\t\t\t\t\t  <!-- radio -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r1\" class=\"minimal\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r1\" class=\"minimal\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r1\" class=\"minimal\" disabled>
\t\t\t\t\t\t\t  Minimal skin radio
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- radio -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r2\" class=\"minimal-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r2\" class=\"minimal-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r2\" class=\"minimal-red\" disabled>
\t\t\t\t\t\t\t  Minimal red skin radio
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <!-- radio -->
\t\t\t\t\t\t  <div class=\"form-group ichack-input\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r3\" class=\"flat-red\" checked>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r3\" class=\"flat-red\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t  <input type=\"radio\" name=\"r3\" class=\"flat-red\" disabled>
\t\t\t\t\t\t\t  Flat green skin radio
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-square-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Checkbox</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" checked />
\t\t\t\t\t\t<label for=\"basic_checkbox_1\">Default</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_2\" class=\"filled-in\" checked />
\t\t\t\t\t\t<label for=\"basic_checkbox_2\">Filled In</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_3\" checked disabled />
\t\t\t\t\t\t<label for=\"basic_checkbox_3\">Default - Disabled</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_4\" class=\"filled-in\" checked disabled />
\t\t\t\t\t\t<label for=\"basic_checkbox_4\">Filled In - Disabled</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-square-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Checkbox Design Colors</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_1\" class=\"chk-col-primary\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_1\">Primary</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_3\" class=\"chk-col-success\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_3\">Success</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_4\" class=\"chk-col-info\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_4\">Info</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_6\" class=\"chk-col-warning\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_6\">Warning</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_7\" class=\"chk-col-danger\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_7\">Danger</label>\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-square-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Checkbox Design Colors with Filled In</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_21\" class=\"filled-in chk-col-primary\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_21\">Primary</label>\t\t\t\t\t
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_23\" class=\"filled-in chk-col-success\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_23\">Success</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_24\" class=\"filled-in chk-col-info\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_24\">Info</label>\t
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_27\" class=\"filled-in chk-col-warning\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_27\">Warning</label>\t\t\t\t\t
\t\t\t\t\t\t<input type=\"checkbox\" id=\"md_checkbox_29\" class=\"filled-in chk-col-danger\" checked />
\t\t\t\t\t\t<label for=\"md_checkbox_29\">Danger</label>\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-circle text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Radio Button</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-radio-button\">
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_1\" checked />
\t\t\t\t\t\t<label for=\"radio_1\">Radio - 1</label>
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_2\" />
\t\t\t\t\t\t<label for=\"radio_2\">Radio - 2</label>
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" class=\"with-gap\" id=\"radio_3\" />
\t\t\t\t\t\t<label for=\"radio_3\">Radio - With Gap</label>
\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_4\" class=\"with-gap\" />
\t\t\t\t\t\t<label for=\"radio_4\">Radio - With Gap</label>
\t\t\t\t\t\t<input name=\"group2\" type=\"radio\" id=\"radio_5\" checked disabled />
\t\t\t\t\t\t<label for=\"radio_5\">Radio - Disabled</label>
\t\t\t\t\t\t<input name=\"group3\" type=\"radio\" id=\"radio_6\" class=\"with-gap\" checked disabled />
\t\t\t\t\t\t<label for=\"radio_6\">Radio - Disabled</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-circle text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Radio Button Design Colors</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-radio-button\">
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_7\" class=\"radio-col-primary\" checked />
\t\t\t\t\t\t<label for=\"radio_7\">Primary</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_9\" class=\"radio-col-success\" />
\t\t\t\t\t\t<label for=\"radio_9\">Success</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_10\" class=\"radio-col-info\" />
\t\t\t\t\t\t<label for=\"radio_10\">Info</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_12\" class=\"radio-col-warning\" />
\t\t\t\t\t\t<label for=\"radio_12\">Warning</label>
\t\t\t\t\t\t<input name=\"group4\" type=\"radio\" id=\"radio_13\" class=\"radio-col-danger\" />
\t\t\t\t\t\t<label for=\"radio_13\">Danger</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <i class=\"fa fa-check-circle-o text-black\"></i>

\t\t\t\t  <h4 class=\"box-title\">Basic Radio Button Design Colors with Outline</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"demo-radio-button\">
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_30\" class=\"with-gap radio-col-primary\" checked />
\t\t\t\t\t\t<label for=\"radio_30\">Primary</label>\t\t\t\t\t
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_32\" class=\"with-gap radio-col-success\" />
\t\t\t\t\t\t<label for=\"radio_32\">Success</label>
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_33\" class=\"with-gap radio-col-info\" />
\t\t\t\t\t\t<label for=\"radio_33\">Info</label>
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_35\" class=\"with-gap radio-col-warning\" />
\t\t\t\t\t\t<label for=\"radio_35\">Warning</label>
\t\t\t\t\t\t<input name=\"group5\" type=\"radio\" id=\"radio_36\" class=\"with-gap radio-col-danger\" />
\t\t\t\t\t\t<label for=\"radio_36\">Danger</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- ./col -->
\t\t  </div>
\t\t  <!-- /.row -->
\t\t</section>
\t\t<!-- /.content -->
\t  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class=\"main-footer\">
    <div class=\"pull-right d-none d-sm-inline-block\">
        <ul class=\"nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end\">
\t\t  <li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"javascript:void(0)\">FAQ</a>
\t\t  </li>
\t\t  <li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"#\">Purchase Now</a>
\t\t  </li>
\t\t</ul>
    </div>
\t  &copy; 2020 <a href=\"#\">Psd to Html Expert</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class=\"control-sidebar\">
\t  
\t<div class=\"rpanel-title\"><span class=\"pull-right btn btn-circle btn-danger\"><i class=\"ion ion-close text-white\" data-toggle=\"control-sidebar\"></i></span> </div>  <!-- Create the tabs -->
    <ul class=\"nav nav-tabs control-sidebar-tabs\">
      <li class=\"nav-item\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\" class=\"active\">Chat</a></li>
      <li class=\"nav-item\"><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\">Todo</a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
          <div class=\"flexbox\">
\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\"><i class=\"ti-minus\"></i></a>\t
\t\t\t<p>Users</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"text-right text-grey\"><i class=\"ti-plus\"></i></a>
\t\t  </div>
\t\t  <div class=\"lookup lookup-sm lookup-right d-none d-lg-block\">
\t\t\t<input type=\"text\" name=\"s\" placeholder=\"Search\" class=\"w-p100\">
\t\t  </div>
          <div class=\"media-list media-list-hover mt-20\">
\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-success\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/1.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Tyler</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Praesent tristique diam...</p>
\t\t\t\t  <span>Just now</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-danger\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/2.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Luke</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Cras tempor diam ...</p>
\t\t\t\t  <span>33 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-warning\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/3.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-primary\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/4.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>\t\t\t
\t\t\t
\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-success\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/1.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Tyler</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Praesent tristique diam...</p>
\t\t\t\t  <span>Just now</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-danger\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/2.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Luke</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>Cras tempor diam ...</p>
\t\t\t\t  <span>33 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-warning\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/3.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"media py-10 px-0\">
\t\t\t  <a class=\"avatar avatar-lg status-primary\" href=\"#\">
\t\t\t\t<img src=\"../images/avatar/4.jpg\" alt=\"...\">
\t\t\t  </a>
\t\t\t  <div class=\"media-body\">
\t\t\t\t<p class=\"font-size-16\">
\t\t\t\t  <a class=\"hover-primary\" href=\"#\"><strong>Evan</strong></a>
\t\t\t\t</p>
\t\t\t\t<p>In posuere tortor vel...</p>
\t\t\t\t  <span>42 min ago</span>
\t\t\t  </div>
\t\t\t</div>
\t\t\t  
\t\t  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
          <div class=\"flexbox\">
\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\"><i class=\"ti-minus\"></i></a>\t
\t\t\t<p>Todo List</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"text-right text-grey\"><i class=\"ti-plus\"></i></a>
\t\t  </div>
        <ul class=\"todo-list mt-20\">
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_1\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_1\" class=\"mb-0 h-15\"></label>
\t\t\t  <!-- todo text -->
\t\t\t  <span class=\"text-line\">Nulla vitae purus</span>
\t\t\t  <!-- Emphasis label -->
\t\t\t  <small class=\"badge bg-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
\t\t\t  <!-- General tools such as edit or delete-->
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_2\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_2\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Phasellus interdum</span>
\t\t\t  <small class=\"badge bg-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_3\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_3\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Quisque sodales</span>
\t\t\t  <small class=\"badge bg-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_4\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_4\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Proin nec mi porta</span>
\t\t\t  <small class=\"badge bg-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_5\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_5\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Maecenas scelerisque</span>
\t\t\t  <small class=\"badge bg-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_6\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_6\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Vivamus nec orci</span>
\t\t\t  <small class=\"badge bg-info\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_7\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_7\" class=\"mb-0 h-15\"></label>
\t\t\t  <!-- todo text -->
\t\t\t  <span class=\"text-line\">Nulla vitae purus</span>
\t\t\t  <!-- Emphasis label -->
\t\t\t  <small class=\"badge bg-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
\t\t\t  <!-- General tools such as edit or delete-->
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_8\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_8\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Phasellus interdum</span>
\t\t\t  <small class=\"badge bg-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5 by-1\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_9\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_9\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Quisque sodales</span>
\t\t\t  <small class=\"badge bg-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t\t<li class=\"py-15 px-5\">
\t\t\t  <!-- checkbox -->
\t\t\t  <input type=\"checkbox\" id=\"basic_checkbox_10\" class=\"filled-in\">
\t\t\t  <label for=\"basic_checkbox_10\" class=\"mb-0 h-15\"></label>
\t\t\t  <span class=\"text-line\">Proin nec mi porta</span>
\t\t\t  <small class=\"badge bg-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
\t\t\t  <div class=\"tools\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t  </div>
\t\t\t</li>
\t\t  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

    
\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js\"></script>
\t<script src=\"../assets/vendor_components/select2/dist/js/select2.full.js\"></script>
\t<script src=\"../assets/vendor_plugins/input-mask/jquery.inputmask.js\"></script>
\t<script src=\"../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
\t<script src=\"../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js\"></script>
\t<script src=\"../assets/vendor_components/moment/min/moment.min.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js\"></script>
\t<script src=\"../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js\"></script>
\t<script src=\"../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js\"></script>
\t<script src=\"../assets/vendor_plugins/iCheck/icheck.min.js\"></script>
\t<script src=\"js/pages/advanced-form-element.js\"></script>
\t
\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t

</body>
</html>
", "forms_advanced.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\forms_advanced.html.twig");
    }
}
