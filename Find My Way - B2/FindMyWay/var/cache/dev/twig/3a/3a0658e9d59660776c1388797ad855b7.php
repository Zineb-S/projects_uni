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

/* utilities_tab.html.twig */
class __TwigTemplate_32cec1c45b7430c88bf63e5a1323d79f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilities_tab.html.twig"));

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

    <title>Sunny Admin - Dashboard  Tab  UI </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">
\t
</head>

<body class=\"hold-transition dark-skin sidebar-mini theme-primary\">
<div class=\"wrapper\">
\t
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
\t\t\t\t\t<h3 class=\"page-title\">Tabs</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">UI</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Tabs</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t  <!-- tabs -->

\t\t  <div class=\"row\">

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Vertical Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>vtabs & tabs-vertical</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<div class=\"vtabs\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-vertical\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home4\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span> </a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile4\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages4\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home4\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile4\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages4\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab vertical Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>vtabs, tabs-vertical & customvtab</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<div class=\"vtabs customvtab\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-vertical\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home3\" role=\"tab\" aria-expanded=\"true\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span> </a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile3\" role=\"tab\" aria-expanded=\"false\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages3\" role=\"tab\" aria-expanded=\"false\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home3\" role=\"tabpanel\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile3\" role=\"tabpanel\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages3\" role=\"tabpanel\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Tab with dropdown</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs & tabcontent-border</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home5\" role=\"tab\" aria-controls=\"home5\" aria-expanded=\"true\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile5\" role=\"tab\" aria-controls=\"profile\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a></li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Dropdown</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\"> <a class=\"dropdown-item\" id=\"dropdown1-tab\" href=\"#dropdown1\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"dropdown1\">@fat</a> <a class=\"dropdown-item\" id=\"dropdown2-tab\" href=\"#dropdown2\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"dropdown2\">@mdo</a> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border p-15\" id=\"myTabContent\">
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"home5\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t<p> Pellentesque posuere non mi nec feugiat. Sed mattis neque non nisi consequat fringilla. Mauris justo risus, mattis sollicitudin nulla ac, mattis mollis neque. Vestibulum eget ante magna. Aenean lobortis, neque ac consequat eleifend, eros tortor ultrices mi, a scelerisque mauris libero quis quam. Vivamus luctus dolor ac sodales suscipit. Aenean dictum nisi sapien, non sodales sem pellentesque nec.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"profile5\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t\t<p>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia. Duis vitae feugiat purus. Nulla facilisi. Ut vitae euismod lorem. Donec sed pellentesque mi. Nullam quam urna, tincidunt eu metus sed, pretium luctus tellus. Integer viverra turpis urna, ut facilisis nulla luctus vitae. Maecenas blandit turpis pretium sollicitudin facilisis. Nam vitae aliquet massa, vel posuere tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"dropdown1\" role=\"tabpanel\" aria-labelledby=\"dropdown1-tab\">
\t\t\t\t\t\t\t<p>Donec vitae laoreet neque, id convallis ante. Phasellus a tellus molestie, varius massa in, suscipit diam. Nulla vulputate, nisi eget porttitor semper, quam justo volutpat lacus, in pretium augue tortor at leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at nisl fringilla, malesuada quam eu, eleifend odio. Nulla nunc orci, aliquam quis ligula vel, porttitor tempus nibh. Praesent semper fermentum massa. Proin id maximus metus, vitae ultricies ante. Duis tempus, arcu a vulputate congue, purus ex rutrum elit, at imperdiet nisi nibh at purus. Nunc in fringilla erat.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"dropdown2\" role=\"tabpanel\" aria-labelledby=\"dropdown2-tab\">
\t\t\t\t\t\t\t<p>Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio. Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi. Fusce commodo eros a vulputate accumsan.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab2 Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>customtab</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs customtab2\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home7\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile7\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages7\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home7\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile7\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages7\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab vertical Tab Icon</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>vtabs & tabs-vertical</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<div class=\"vtabs\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-vertical\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home9\" role=\"tab\"><span><i class=\"ion-home mr-15\"></i>Home</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile9\" role=\"tab\"><span><i class=\"ion-person mr-15\"></i>Person</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages9\" role=\"tab\"><span><i class=\"ion-email mr-15\"></i>Email</span></a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home9\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile9\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages9\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->\t

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Tab with icon</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home8\" role=\"tab\"><span><i class=\"ion-home mr-15\"></i>Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile8\" role=\"tab\"><span><i class=\"ion-person mr-15\"></i>Person</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages8\" role=\"tab\"><span><i class=\"ion-email mr-15\"></i>Email</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home8\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile8\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages8\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Nav Pills Tabs</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-pills justify-content-end mb-20\">
\t\t\t\t\t\t<li class=\" nav-item\"> <a href=\"#navpills2-1\" class=\"nav-link active\" data-toggle=\"tab\" aria-expanded=\"false\">Tab One</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills2-2\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"false\">Tab Two</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills2-3\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"true\">Tab Three</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"navpills2-1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img1.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills2-2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img2.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills2-3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img3.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>\t\t  
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Nav Pills Tabs</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-pills mb-20\">
\t\t\t\t\t\t<li class=\" nav-item\"> <a href=\"#navpills-1\" class=\"nav-link active\" data-toggle=\"tab\" aria-expanded=\"false\">Tab One</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills-2\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"false\">Tab Two</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills-3\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"true\">Tab Three</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"navpills-1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img1.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills-2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img2.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills-3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img3.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->
\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Fill</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; nav-fill </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs nav-fill\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home11\" role=\"tab\"><span><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down ml-15\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile11\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages11\" role=\"tab\"><span><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down ml-15\">Messages</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#setting11\" role=\"tab\"><span><i class=\"ion-settings\"></i></span> <span class=\"hidden-xs-down ml-15\">Setting</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#about11\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">About</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#contact11\" role=\"tab\"><span><i class=\"ion-camera\"></i></span> <span class=\"hidden-xs-down ml-15\">Contact</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"setting11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"about11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"contact11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Horizontal alignment</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; justify-content-center </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home12\" role=\"tab\"><span><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down ml-15\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile12\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages12\" role=\"tab\"><span><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down ml-15\">Messages</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#setting12\" role=\"tab\"><span><i class=\"ion-settings\"></i></span> <span class=\"hidden-xs-down ml-15\">Setting</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#about12\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">About</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#contact12\" role=\"tab\"><span><i class=\"ion-camera\"></i></span> <span class=\"hidden-xs-down ml-15\">Contact</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"setting12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"about12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"contact12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Horizontal alignment</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; justify-content-end </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs justify-content-end\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home13\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile13\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages13\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home13\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile13\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages13\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->\t

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Default Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>customtab</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs customtab\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home2\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile2\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages2\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home2\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile2\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages2\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t  </div>
\t\t  <!-- /.row -->
\t\t  <!-- END tabs -->

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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t
\t
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "utilities_tab.html.twig";
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

    <title>Sunny Admin - Dashboard  Tab  UI </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">
\t
</head>

<body class=\"hold-transition dark-skin sidebar-mini theme-primary\">
<div class=\"wrapper\">
\t
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
\t\t\t\t\t<h3 class=\"page-title\">Tabs</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">UI</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Tabs</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t  <!-- tabs -->

\t\t  <div class=\"row\">

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Vertical Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>vtabs & tabs-vertical</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<div class=\"vtabs\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-vertical\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home4\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span> </a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile4\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages4\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home4\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile4\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages4\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab vertical Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>vtabs, tabs-vertical & customvtab</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<div class=\"vtabs customvtab\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-vertical\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home3\" role=\"tab\" aria-expanded=\"true\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span> </a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile3\" role=\"tab\" aria-expanded=\"false\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages3\" role=\"tab\" aria-expanded=\"false\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home3\" role=\"tabpanel\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile3\" role=\"tabpanel\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages3\" role=\"tabpanel\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Tab with dropdown</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs & tabcontent-border</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home5\" role=\"tab\" aria-controls=\"home5\" aria-expanded=\"true\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile5\" role=\"tab\" aria-controls=\"profile\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a></li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Dropdown</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\"> <a class=\"dropdown-item\" id=\"dropdown1-tab\" href=\"#dropdown1\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"dropdown1\">@fat</a> <a class=\"dropdown-item\" id=\"dropdown2-tab\" href=\"#dropdown2\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"dropdown2\">@mdo</a> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border p-15\" id=\"myTabContent\">
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"home5\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t<p> Pellentesque posuere non mi nec feugiat. Sed mattis neque non nisi consequat fringilla. Mauris justo risus, mattis sollicitudin nulla ac, mattis mollis neque. Vestibulum eget ante magna. Aenean lobortis, neque ac consequat eleifend, eros tortor ultrices mi, a scelerisque mauris libero quis quam. Vivamus luctus dolor ac sodales suscipit. Aenean dictum nisi sapien, non sodales sem pellentesque nec.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"profile5\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t\t<p>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia. Duis vitae feugiat purus. Nulla facilisi. Ut vitae euismod lorem. Donec sed pellentesque mi. Nullam quam urna, tincidunt eu metus sed, pretium luctus tellus. Integer viverra turpis urna, ut facilisis nulla luctus vitae. Maecenas blandit turpis pretium sollicitudin facilisis. Nam vitae aliquet massa, vel posuere tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"dropdown1\" role=\"tabpanel\" aria-labelledby=\"dropdown1-tab\">
\t\t\t\t\t\t\t<p>Donec vitae laoreet neque, id convallis ante. Phasellus a tellus molestie, varius massa in, suscipit diam. Nulla vulputate, nisi eget porttitor semper, quam justo volutpat lacus, in pretium augue tortor at leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at nisl fringilla, malesuada quam eu, eleifend odio. Nulla nunc orci, aliquam quis ligula vel, porttitor tempus nibh. Praesent semper fermentum massa. Proin id maximus metus, vitae ultricies ante. Duis tempus, arcu a vulputate congue, purus ex rutrum elit, at imperdiet nisi nibh at purus. Nunc in fringilla erat.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"dropdown2\" role=\"tabpanel\" aria-labelledby=\"dropdown2-tab\">
\t\t\t\t\t\t\t<p>Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio. Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi. Fusce commodo eros a vulputate accumsan.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab2 Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>customtab</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs customtab2\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home7\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile7\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages7\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home7\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile7\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages7\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab vertical Tab Icon</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>vtabs & tabs-vertical</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<div class=\"vtabs\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-vertical\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home9\" role=\"tab\"><span><i class=\"ion-home mr-15\"></i>Home</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile9\" role=\"tab\"><span><i class=\"ion-person mr-15\"></i>Person</span></a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages9\" role=\"tab\"><span><i class=\"ion-email mr-15\"></i>Email</span></a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home9\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile9\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages9\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->\t

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Tab with icon</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home8\" role=\"tab\"><span><i class=\"ion-home mr-15\"></i>Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile8\" role=\"tab\"><span><i class=\"ion-person mr-15\"></i>Person</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages8\" role=\"tab\"><span><i class=\"ion-email mr-15\"></i>Email</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home8\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile8\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages8\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Nav Pills Tabs</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-pills justify-content-end mb-20\">
\t\t\t\t\t\t<li class=\" nav-item\"> <a href=\"#navpills2-1\" class=\"nav-link active\" data-toggle=\"tab\" aria-expanded=\"false\">Tab One</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills2-2\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"false\">Tab Two</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills2-3\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"true\">Tab Three</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"navpills2-1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img1.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills2-2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img2.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills2-3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img3.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>\t\t  
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Nav Pills Tabs</h4>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-pills mb-20\">
\t\t\t\t\t\t<li class=\" nav-item\"> <a href=\"#navpills-1\" class=\"nav-link active\" data-toggle=\"tab\" aria-expanded=\"false\">Tab One</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills-2\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"false\">Tab Two</a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a href=\"#navpills-3\" class=\"nav-link\" data-toggle=\"tab\" aria-expanded=\"true\">Tab Three</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"navpills-1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img1.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills-2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img2.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navpills-3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2\"> <img src=\"../images/card/img3.jpg\" class=\"img-fluid\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->
\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Fill</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; nav-fill </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs nav-fill\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home11\" role=\"tab\"><span><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down ml-15\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile11\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages11\" role=\"tab\"><span><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down ml-15\">Messages</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#setting11\" role=\"tab\"><span><i class=\"ion-settings\"></i></span> <span class=\"hidden-xs-down ml-15\">Setting</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#about11\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">About</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#contact11\" role=\"tab\"><span><i class=\"ion-camera\"></i></span> <span class=\"hidden-xs-down ml-15\">Contact</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"setting11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"about11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"contact11\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Horizontal alignment</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; justify-content-center </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home12\" role=\"tab\"><span><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down ml-15\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile12\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages12\" role=\"tab\"><span><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down ml-15\">Messages</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#setting12\" role=\"tab\"><span><i class=\"ion-settings\"></i></span> <span class=\"hidden-xs-down ml-15\">Setting</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#about12\" role=\"tab\"><span><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down ml-15\">About</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#contact12\" role=\"tab\"><span><i class=\"ion-camera\"></i></span> <span class=\"hidden-xs-down ml-15\">Contact</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"setting12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"about12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"contact12\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Horizontal alignment</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; justify-content-end </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs justify-content-end\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home13\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile13\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages13\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home13\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile13\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages13\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->\t

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Default Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content tabcontent-border\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t\t<div class=\"col-12\">
\t\t\t  <div class=\"box box-default\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t  <h4 class=\"box-title\">Customtab Tab</h4>
\t\t\t\t  <h6 class=\"box-subtitle\">Use default tab with class <code>customtab</code></h6>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs customtab\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home2\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-home\"></i></span> <span class=\"hidden-xs-down\">Home</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile2\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-person\"></i></span> <span class=\"hidden-xs-down\">Profile</span></a> </li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages2\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ion-email\"></i></span> <span class=\"hidden-xs-down\">Messages</span></a> </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"home2\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"profile2\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"messages2\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"p-15\">
\t\t\t\t\t\t\t\t<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
\t\t\t\t\t\t\t\t<h3>Donec vitae laoreet neque, id convallis ante.</h3>
\t\t\t\t\t\t\t\t<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-body -->
\t\t\t  </div>
\t\t\t  <!-- /.box -->
\t\t\t</div>
\t\t\t<!-- /.col -->

\t\t  </div>
\t\t  <!-- /.row -->
\t\t  <!-- END tabs -->

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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t
\t
</body>
</html>
", "utilities_tab.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\utilities_tab.html.twig");
    }
}
