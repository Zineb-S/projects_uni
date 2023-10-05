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

/* components_buttons.html.twig */
class __TwigTemplate_e7a2c24433827232a3640120997ce0e4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components_buttons.html.twig"));

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

    <title>Sunny Admin - Dashboard  Button UI </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Buttons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">UI</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Buttons</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">General Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>.btn-</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Button with outline</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-outline</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Rounded Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-rounded</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Rounded Outline Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-rounded</code><code>.btn-outline</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Button Sizes</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-lg</code><code>.btn-Primary</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Default Normal</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\">Primary btn Large</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-sm\">Secondary Small</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-xs\">Info Extra Small</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Flat Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>.btn-flat</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-flat mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-flat mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-flat mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-flat mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-flat mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-flat mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning btn-flat mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Button with icon</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>i class =\"fa fa-check</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-5\"><i class=\"fa fa-check\"></i> Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary mb-5\"><i class=\"fa fa-check\"></i> Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary mb-5\"><i class=\"fa fa-check\"></i> Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info mb-5\"><i class=\"fa fa-check\"></i> Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success mb-5\"><i class=\"fa fa-check\"></i> Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger mb-5\"><i class=\"fa fa-check\"></i> Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning mb-5\"><i class=\"fa fa-check\"></i> Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-5\"><i class=\"fa fa-check\"></i> Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light mb-5\"><i class=\"fa fa-check\"></i> Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title\">Split buttons</h4>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">Default</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary\">Primary</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-secondary\">Secondary</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Info</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\">Success</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger\">Danger</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning\">Warning</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-dark\">Dark</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-light\">Light</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-light dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title\">Button with Dropdown</h4>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Default</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">Primary</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">Secondary</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\">Info</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\">Success</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">Danger</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\">Warning</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\">Dark</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-light dropdown-toggle\" data-toggle=\"dropdown\">Light</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Circle Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>.btn-circle</code> <code>.btn-</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span><code>.btn-xs</code></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span><code>.btn-sm</code></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span>Default</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span><code>.btn-lg</code></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Horizontal Button Group</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Horizontal button groups are easy to create with bootstrap. Just add your buttons inside <code>&lt;div class=\"btn-group\"&gt;&lt;/div&gt;</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Left</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Middle</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Right</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-left\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-center\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-right\"></i></button>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning\">1</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning\">2</button>

\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Vertical Button Group</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Vertical button groups are easy to create with bootstrap. Just add your buttons inside <code>&lt;div class=\"btn-group-vertical\"&gt;&lt;/div&gt;</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group-vertical\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Left</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Middle</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Right</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group-vertical\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-left\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-center\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-right\"></i></button>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group-vertical\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger\">1</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger\">2</button>

\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t  <i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Social buttons Icon with Name</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Use a classes <code>btn btn-social btn-bitbucket /  &lt; class=\"fa fa-bitbucket\"&gt;&lt;/i&gt;</code> to quickly create a General btn.</p>
\t\t\t\t\t<div class=\"clearfix\">\t\t\t\t\t
\t\t\t\t\t  <button class=\"btn btn-social btn-bitbucket mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-bitbucket\"></i> Sign in with Bitbucket
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-dropbox mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-dropbox\"></i> Sign in with Dropbox
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-facebook mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i> Sign in with Facebook
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-flickr mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-flickr\"></i> Sign in with Flickr
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-foursquare mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-foursquare\"></i> Sign in with Foursquare
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-github mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-github\"></i> Sign in with GitHub
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-google mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i> Sign in with Google
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-instagram mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i> Sign in with Instagram
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-linkedin mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i> Sign in with LinkedIn
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-tumblr mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-tumblr\"></i> Sign in with Tumblr
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-twitter mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i> Sign in with Twitter
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-vk mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-vk\"></i> Sign in with VK
\t\t\t\t\t  </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Social buttons Icon</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Use a classes <code>btn btn-social-icon btn-bitbucket</code> to quickly create a General btn.</p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-bitbucket\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-dropbox\"><i class=\"fa fa-dropbox\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-flickr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-foursquare\"><i class=\"fa fa-foursquare\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-github\"><i class=\"fa fa-github\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-google-plus\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-instagram\"><i class=\"fa fa-instagram\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-linkedin\"><i class=\"fa fa-linkedin\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-tumblr\"><i class=\"fa fa-tumblr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-vk\"><i class=\"fa fa-vk\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Social Icon With Circle buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Use a classes <code>btn btn-social-icon btn-circle</code> to quickly create a General btn.</p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-bitbucket\"><i class=\"fa fa-bitbucket\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-dropbox\"><i class=\"fa fa-dropbox\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-facebook\"><i class=\"fa fa-facebook\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-flickr\"><i class=\"fa fa-flickr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-foursquare\"><i class=\"fa fa-foursquare\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-github\"><i class=\"fa fa-github\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-google\"><i class=\"fa fa-google-plus\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-instagram\"><i class=\"fa fa-instagram\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-linkedin\"><i class=\"fa fa-linkedin\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-tumblr\"><i class=\"fa fa-tumblr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-twitter\"><i class=\"fa fa-twitter\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-vk\"><i class=\"fa fa-vk\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Application Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Add the classes <code>.btn.btn-app</code> to an <code>&lt;a&gt;</code> tag to achieve the following:</p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t  <a class=\"btn btn-app btn-info\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i> Edit
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-success\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-play\"></i> Play
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-secondary\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-pause\"></i> Pause
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-primary\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-stop\"></i> Stop
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-warning\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-repeat\"></i> Repeat
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-danger\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i> Save
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-warning\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-danger\">12</span>
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i> Notifications
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-warning\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-primary\">41</span>
\t\t\t\t\t\t\t<i class=\"fa fa-users\"></i> Users
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-primary\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-success\">45</span>
\t\t\t\t\t\t\t<i class=\"fa fa-inbox\"></i> Orders
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-success\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-info\">2</span>
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i> Inbox
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-danger\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-success\">48</span>
\t\t\t\t\t\t\t<i class=\"fa fa-barcode\"></i> Products
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-info\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-danger\">31</span>
\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i> Likes
\t\t\t\t\t\t  </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

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
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components_buttons.html.twig";
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

    <title>Sunny Admin - Dashboard  Button UI </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Buttons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">UI</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Buttons</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">General Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>.btn-</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Button with outline</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-outline</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Rounded Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-rounded</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-rounded btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Rounded Outline Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-rounded</code><code>.btn-outline</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-primary mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-secondary mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-info mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-success mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-danger mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-warning mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline btn-rounded btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Button Sizes</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn-lg</code><code>.btn-Primary</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Default Normal</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\">Primary btn Large</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-sm\">Secondary Small</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-xs\">Info Extra Small</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Flat Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>.btn-flat</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-flat mb-5\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-flat mb-5\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-flat mb-5\">Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-flat mb-5\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-flat mb-5\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-flat mb-5\">Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning btn-flat mb-5\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat btn-dark mb-5\">Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat btn-light mb-5\">Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Button with icon</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>i class =\"fa fa-check</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-5\"><i class=\"fa fa-check\"></i> Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary mb-5\"><i class=\"fa fa-check\"></i> Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary mb-5\"><i class=\"fa fa-check\"></i> Secondary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info mb-5\"><i class=\"fa fa-check\"></i> Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success mb-5\"><i class=\"fa fa-check\"></i> Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger mb-5\"><i class=\"fa fa-check\"></i> Danger</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning mb-5\"><i class=\"fa fa-check\"></i> Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-5\"><i class=\"fa fa-check\"></i> Dark</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light mb-5\"><i class=\"fa fa-check\"></i> Light</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title\">Split buttons</h4>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">Default</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary\">Primary</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-secondary\">Secondary</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Info</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\">Success</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger\">Danger</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning\">Warning</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-dark\">Dark</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-light\">Light</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-light dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title\">Button with Dropdown</h4>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Default</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">Primary</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">Secondary</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\">Info</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\">Success</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">Danger</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\">Warning</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\">Dark</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mb-5\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-light dropdown-toggle\" data-toggle=\"dropdown\">Light</button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Circle Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Using the base class <code>.btn</code> <code>.btn-circle</code> <code>.btn-</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light btn-xs mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span><code>.btn-xs</code></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light btn-sm mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span><code>.btn-sm</code></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span>Default</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-default btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-primary btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-secondary btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-info btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-success btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-danger btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-warning btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-dark btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-circle btn-light btn-lg mb-5\"><i class=\"mdi mdi-check\"></i></button>
\t\t\t\t\t\t<span><code>.btn-lg</code></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Horizontal Button Group</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Horizontal button groups are easy to create with bootstrap. Just add your buttons inside <code>&lt;div class=\"btn-group\"&gt;&lt;/div&gt;</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Left</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Middle</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Right</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-left\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-center\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-right\"></i></button>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning\">1</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-warning\">2</button>

\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Vertical Button Group</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Vertical button groups are easy to create with bootstrap. Just add your buttons inside <code>&lt;div class=\"btn-group-vertical\"&gt;&lt;/div&gt;</code></p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div class=\"btn-group-vertical\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Left</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Middle</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-info\">Right</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group-vertical\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-left\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-center\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-align-right\"></i></button>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t<div class=\"btn-group-vertical\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger\">1</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger\">2</button>

\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t  <i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Social buttons Icon with Name</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Use a classes <code>btn btn-social btn-bitbucket /  &lt; class=\"fa fa-bitbucket\"&gt;&lt;/i&gt;</code> to quickly create a General btn.</p>
\t\t\t\t\t<div class=\"clearfix\">\t\t\t\t\t
\t\t\t\t\t  <button class=\"btn btn-social btn-bitbucket mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-bitbucket\"></i> Sign in with Bitbucket
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-dropbox mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-dropbox\"></i> Sign in with Dropbox
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-facebook mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i> Sign in with Facebook
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-flickr mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-flickr\"></i> Sign in with Flickr
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-foursquare mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-foursquare\"></i> Sign in with Foursquare
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-github mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-github\"></i> Sign in with GitHub
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-google mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i> Sign in with Google
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-instagram mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i> Sign in with Instagram
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-linkedin mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i> Sign in with LinkedIn
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-tumblr mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-tumblr\"></i> Sign in with Tumblr
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-twitter mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i> Sign in with Twitter
\t\t\t\t\t  </button>
\t\t\t\t\t  <button class=\"btn btn-social btn-vk mb-5\">
\t\t\t\t\t\t<i class=\"fa fa-vk\"></i> Sign in with VK
\t\t\t\t\t  </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Social buttons Icon</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Use a classes <code>btn btn-social-icon btn-bitbucket</code> to quickly create a General btn.</p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-bitbucket\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-dropbox\"><i class=\"fa fa-dropbox\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-flickr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-foursquare\"><i class=\"fa fa-foursquare\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-github\"><i class=\"fa fa-github\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-google-plus\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-instagram\"><i class=\"fa fa-instagram\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-linkedin\"><i class=\"fa fa-linkedin\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-tumblr\"><i class=\"fa fa-tumblr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-vk\"><i class=\"fa fa-vk\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Social Icon With Circle buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Use a classes <code>btn btn-social-icon btn-circle</code> to quickly create a General btn.</p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-bitbucket\"><i class=\"fa fa-bitbucket\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-dropbox\"><i class=\"fa fa-dropbox\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-facebook\"><i class=\"fa fa-facebook\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-flickr\"><i class=\"fa fa-flickr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-foursquare\"><i class=\"fa fa-foursquare\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-github\"><i class=\"fa fa-github\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-google\"><i class=\"fa fa-google-plus\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-instagram\"><i class=\"fa fa-instagram\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-linkedin\"><i class=\"fa fa-linkedin\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-tumblr\"><i class=\"fa fa-tumblr\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-twitter\"><i class=\"fa fa-twitter\"></i></button>
\t\t\t\t\t\t<button class=\"btn btn-social-icon btn-circle btn-vk\"><i class=\"fa fa-vk\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

\t\t\t  <div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t  <h4 class=\"box-title mb-5\">Application Buttons</h4>
\t\t\t\t  <p class=\"subtitle mb-20\">Add the classes <code>.btn.btn-app</code> to an <code>&lt;a&gt;</code> tag to achieve the following:</p>
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t  <a class=\"btn btn-app btn-info\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i> Edit
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-success\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-play\"></i> Play
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-secondary\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-pause\"></i> Pause
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-primary\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-stop\"></i> Stop
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-warning\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-repeat\"></i> Repeat
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-danger\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i> Save
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-warning\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-danger\">12</span>
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i> Notifications
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-warning\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-primary\">41</span>
\t\t\t\t\t\t\t<i class=\"fa fa-users\"></i> Users
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-primary\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-success\">45</span>
\t\t\t\t\t\t\t<i class=\"fa fa-inbox\"></i> Orders
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-success\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-info\">2</span>
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i> Inbox
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-danger\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-success\">48</span>
\t\t\t\t\t\t\t<i class=\"fa fa-barcode\"></i> Products
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"btn btn-app btn-info\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge bg-danger\">31</span>
\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i> Likes
\t\t\t\t\t\t  </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.box -->
\t\t\t  </div>

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
</body>
</html>
", "components_buttons.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\components_buttons.html.twig");
    }
}
