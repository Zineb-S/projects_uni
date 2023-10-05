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

/* icons_cryptocoins.html.twig */
class __TwigTemplate_8e0f9c5b44032e000f0f26f2e3ddb95d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons_cryptocoins.html.twig"));

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

    <title>Sunny Admin - Dashboard  Icons </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Cryptocoins</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Cryptocoins</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADA\" title=\"ADA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADA-alt\" title=\"ADA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADC\" title=\"ADC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADC-alt\" title=\"ADC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AEON\" title=\"AEON\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AEON</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AEON-alt\" title=\"AEON\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AEON-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AMP\" title=\"AMP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AMP</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AMP-alt\" title=\"AMP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AMP-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ANC\" title=\"ANC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ANC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc ANC-alt\" title=\"ANC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ANC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                               
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc ARCH\" title=\"ARCH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARCH</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARCH-alt\" title=\"ARCH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARCH-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARDR\" title=\"ARDR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARDR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARDR-alt\" title=\"ARDR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARDR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARK\" title=\"ARK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARK-alt\" title=\"ARK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AUR\" title=\"AUR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AUR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AUR-alt\" title=\"AUR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AUR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>          
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BANX\" title=\"BANX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BANX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BANX-alt\" title=\"BANX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BANX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAT\" title=\"BAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAT-alt\" title=\"BAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAY\" title=\"BAY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAY-alt\" title=\"BAY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAY-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BC\" title=\"BC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BC-alt\" title=\"BC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BCN\" title=\"BCN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BCN</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BCN-alt\" title=\"BCN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BCN-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BFT\" title=\"BFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BFT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BFT-alt\" title=\"BFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BFT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BRK\" title=\"BRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BRK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BRX-alt\" title=\"BRX-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BRX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BSD\" title=\"BSD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BSD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BSD-alt\" title=\"BSD-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BSD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTA\" title=\"BTA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTC\" title=\"BTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTC-alt\" title=\"BTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTCD\" title=\"BTCD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTCD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTCD-alt\" title=\"BTCD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTCD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTM\" title=\"BTM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTM-alt\" title=\"BTM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTS\" title=\"BTS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTS-alt\" title=\"BTS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>       
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLAM\" title=\"CLAM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">CLAM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLAM-alt\" title=\"CLAM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">CLAM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLOAK\" title=\"CLOAK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">CLOAK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLOAK-alt\" title=\"CLOAK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DAO\" title=\"DAO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DAO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DAO-alt\" title=\"DAO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DAO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DASH\" title=\"DASH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DASH</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DASH-alt\" title=\"DASH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DASH-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCR\" title=\"DCR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCR-alt\" title=\"DCR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCT\" title=\"DCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCT-alt\" title=\"DCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGB\" title=\"DGB\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGB</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGB-alt\" title=\"DGB\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGB-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGD\" title=\"DGD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGX\" title=\"DGX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DMD\" title=\"DMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DMD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DMD-alt\" title=\"DMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DMD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DOGE\" title=\"DOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DOGE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DOGE-alt\" title=\"DOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DOGE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EMC\" title=\"EMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EMC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EMC-alt\" title=\"EMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EMC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EOS\" title=\"EOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EOS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EOS-alt\" title=\"EOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EOS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ERC\" title=\"ERC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ERC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ERC-alt\" title=\"ERC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ERC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETC\" title=\"ETC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                                
\t\t\t\t\t  <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETC-alt\" title=\"ETC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETH\" title=\"ETH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETH</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETH-alt\" title=\"ETH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETH-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>     

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FC2\" title=\"FC2\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FC2</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FC2-alt\" title=\"FC2\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FC2-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FCT\" title=\"FCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FCT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FCT-alt\" title=\"FCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FCT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FLO\" title=\"FLO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FLO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FLO-alt\" title=\"FLO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FLO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FRK\" title=\"FRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FRK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FRK-alt\" title=\"FRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FRK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FTC\" title=\"FTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FTC-alt\" title=\"FTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>      

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GAME\" title=\"GAME\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GAME</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GAME-alt\" title=\"GAME\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GAME-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GBYTE\" title=\"GBYTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GBYTE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GBYTE-alt\" title=\"GBYTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GBYTE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GDC\" title=\"GDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GDC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GDC-alt\" title=\"GDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GDC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GEMZ\" title=\"GEMZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GEMZ</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GEMZ-alt\" title=\"GEMZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GEMZ-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GLD\" title=\"GLD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GLD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GLD-alt\" title=\"GLD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GLD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNO\" title=\"GNO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNO-alt\" title=\"GNO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNT\" title=\"GNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>   
\t\t\t\t\t  <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNT-alt\" title=\"GNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GOLOS\" title=\"GOLOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GOLOS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GOLOS-alt\" title=\"GOLOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GOLOS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GRC\" title=\"GRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GRC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GRC-alt\" title=\"GRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GRC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GRS\" title=\"GRS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GRS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>     

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc HEAT\" title=\"HEAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">HEAT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc HEAT-alt\" title=\"HEAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">HEAT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ICN\" title=\"ICN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ICN</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ICN-alt\" title=\"ICN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ICN-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IFC\" title=\"IFC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IFC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IFC-alt\" title=\"IFC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IFC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc INCNT\" title=\"INCNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">INCNT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc INCNT-alt\" title=\"INCNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">INCNT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOC\" title=\"IOC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOC-alt\" title=\"IOC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOTA\" title=\"IOTA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOTA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOTA-alt\" title=\"IOTA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOTA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc JBS\" title=\"JBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">JBS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc JBS-alt\" title=\"JBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">JBS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KMD\" title=\"KMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KMD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KMD-alt\" title=\"KMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KMD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KOBO\" title=\"KOBO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KOBO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KORE\" title=\"KORE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KORE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KORE-alt\" title=\"KORE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KORE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LBC\" title=\"LBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LBC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LBC-alt\" title=\"LBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LBC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LDOGE\" title=\"LDOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LDOGE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc LDOGE-alt\" title=\"LDOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LDOGE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LSK\" title=\"LSK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LSK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LSK-alt\" title=\"LSK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LSK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LTC\" title=\"LTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LTC-alt\" title=\"LTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MAID\" title=\"MAID\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MAID</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MAID-alt\" title=\"MAID\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MAID-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MCO\" title=\"MCO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MCO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MCO-alt\" title=\"MCO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MCO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MINT\" title=\"MINT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MINT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MINT-alt\" title=\"MINT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MINT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MONA\" title=\"MONA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MONA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MONA-alt\" title=\"MONA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MONA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MRC\" title=\"MRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MRC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MSC\" title=\"MSC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MSC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MSC-alt\" title=\"MSC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MSC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MTR\" title=\"MTR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MTR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MTR-alt\" title=\"MTR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MTR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MUE\" title=\"MUE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MUE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MUE-alt\" title=\"MUE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MUE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NBT\" title=\"NBT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NBT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEO\" title=\"NEO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEO-alt\" title=\"NEO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEOS\" title=\"NEOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEOS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEOS-alt\" title=\"NEOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEOS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEU\" title=\"NEU\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEU</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEU-alt\" title=\"NEU\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEU-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NLG\" title=\"NLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NLG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NLG-alt\" title=\"NLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NLG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NMC\" title=\"NMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NMC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NMC-alt\" title=\"NMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NMC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NOTE\" title=\"NOTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NOTE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NOTE-alt\" title=\"NOTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NOTE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NVC\" title=\"NVC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NVC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NVC-alt\" title=\"NVC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NVC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NXT\" title=\"NXT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NXT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NXT-alt\" title=\"NXT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NXT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OK\" title=\"OK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OK\" title=\"OK-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMG\" title=\"OMG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMG\" title=\"OMG-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMNI\" title=\"OMNI\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMNI</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMNI\" title=\"OMNI-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMNI-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OPAL\" title=\"OPAL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OPAL</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OPAL-alt\" title=\"OPAL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OPAL-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PART\" title=\"PART\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PART</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PART-alt\" title=\"PART\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PART-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIGGY\" title=\"PIGGY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIGGY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIGGY-alt\" title=\"PIGGY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIGGY-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PINK\" title=\"PINK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PINK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PINK-alt\" title=\"PINK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PINK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIVX\" title=\"PIVX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIVX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIVX-alt\" title=\"PIVX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIVX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc POT\" title=\"POT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">POT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc POT-alt\" title=\"POT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">POT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PPC\" title=\"PPC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PPC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PPC-alt\" title=\"POT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PPC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QRK\" title=\"QRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QRK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QRK-alt\" title=\"QRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QRK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QTUM\" title=\"QTUM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QTUM-alt\" title=\"QTUM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc RADS\" title=\"RADS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc RADS-alt\" title=\"RADS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBIES\" title=\"RBIES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBIES-alt\" title=\"RBIES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBT\" title=\"RBT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBT-alt\" title=\"RBT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBY\" title=\"RBY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBY-alt\" title=\"RBY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RDD\" title=\"RDD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RDD-alt\" title=\"RDD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc REP\" title=\"REP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc REP-alt\" title=\"REP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RISE\" title=\"RISE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RISE-alt\" title=\"RISE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SALT\" title=\"SALT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SALT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SALT-alt\" title=\"SALT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SALT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SAR\" title=\"SAR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SAR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SAR-alt\" title=\"SAR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SAR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SCOT\" title=\"SCOT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SCOT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SCOT-alt\" title=\"SCOT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SCOT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SDC\" title=\"SDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SDC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SDC-alt\" title=\"SDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SDC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SIA\" title=\"SIA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SIA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SIA-alt\" title=\"SIA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SIA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SJCX\" title=\"SJCX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SJCX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SJCX-alt\" title=\"SJCX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SJCX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLG\" title=\"SLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLG-alt\" title=\"SLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLS\" title=\"SLS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLS-alt\" title=\"SLS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SNRG\" title=\"SNRG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SNRGt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SNRG-alt\" title=\"SNRG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SNRG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc START\" title=\"START\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">START</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc START-alt\" title=\"START\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">START-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STEEM\" title=\"STEEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STEEM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STEEM-alt\" title=\"STEEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STEEM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STR\" title=\"STR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STR-alt\" title=\"STR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STRAT\" title=\"STRAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STRAT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STRAT-alt\" title=\"STRAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STRAT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SWIFT\" title=\"SWIFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SWIFT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SWIFT-alt\" title=\"SWIFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SWIFT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SYNC\" title=\"SYNC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYNC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SYNC-alt\" title=\"SYNC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYNC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SYS\" title=\"SYS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t <i class=\"cc SYS-alt\" title=\"SYS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TRIG\" title=\"TRIG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TRIG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TRIG-alt\" title=\"TRIG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TRIG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TX\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TX-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UBQ\" title=\"UBQ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UBQ</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UBQ-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UBQ-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UNITY\" title=\"UNITY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UNITY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UNITY-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UNITY-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc USDT\" title=\"USDT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">USDT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc USDT-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">USDT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VIOR\" title=\"VIOR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VIOR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VIOR-alt\" title=\"VIOR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VIOR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VNL\" title=\"VNL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VNL</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VNL-alt\" title=\"VNL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VNL-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VPN\" title=\"VPN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VPN</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VPN-alt\" title=\"VPN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VPN-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VRC\" title=\"VRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VRC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VRC-alt\" title=\"VRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VRC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VTC\" title=\"VTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VTC-alt\" title=\"VTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc WAVES\" title=\"WAVES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">WAVES</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc WAVES-alt\" title=\"WAVES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">WAVES-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XAI\" title=\"XAI\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XAI</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XAI-alt\" title=\"XAI\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XAI-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XBS\" title=\"XBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XBS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XBS-alt\" title=\"XBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XBS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XCP\" title=\"XCP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XCP</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XCP-alt\" title=\"XCP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XCP-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XEM\" title=\"XEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XEM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XEM-alt\" title=\"XEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XEM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XMR\" title=\"XMR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XMR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XPM\" title=\"XPM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XPM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XPM-alt\" title=\"XPM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XPM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XRP\" title=\"XRP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XRP</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XRP-alt\" title=\"XRP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XRP-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XTZ\" title=\"XTZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XTZ</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XTZ-alt\" title=\"XTZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XTZ-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XZC\" title=\"XZC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XZC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XZC-alt\" title=\"XZC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XZC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc YBC\" title=\"YBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">YBC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc YBC-alt\" title=\"YBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">YBC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEC\" title=\"ZEC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEC-alt\" title=\"ZEC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEIT\" title=\"ZEIT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEIT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEIT-alt\" title=\"ZEIT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEIT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t </div>
\t\t\t</div>

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
        return "icons_cryptocoins.html.twig";
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

    <title>Sunny Admin - Dashboard  Icons </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Cryptocoins</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Cryptocoins</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADA\" title=\"ADA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADA-alt\" title=\"ADA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADC\" title=\"ADC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ADC-alt\" title=\"ADC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ADC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AEON\" title=\"AEON\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AEON</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AEON-alt\" title=\"AEON\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AEON-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AMP\" title=\"AMP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AMP</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AMP-alt\" title=\"AMP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AMP-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ANC\" title=\"ANC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ANC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc ANC-alt\" title=\"ANC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ANC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                               
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc ARCH\" title=\"ARCH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARCH</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARCH-alt\" title=\"ARCH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARCH-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARDR\" title=\"ARDR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARDR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARDR-alt\" title=\"ARDR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARDR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARK\" title=\"ARK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ARK-alt\" title=\"ARK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ARK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AUR\" title=\"AUR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AUR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc AUR-alt\" title=\"AUR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">AUR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>          
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BANX\" title=\"BANX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BANX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BANX-alt\" title=\"BANX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BANX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAT\" title=\"BAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAT-alt\" title=\"BAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAY\" title=\"BAY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BAY-alt\" title=\"BAY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BAY-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BC\" title=\"BC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BC-alt\" title=\"BC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BCN\" title=\"BCN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BCN</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BCN-alt\" title=\"BCN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BCN-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BFT\" title=\"BFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BFT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BFT-alt\" title=\"BFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BFT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BRK\" title=\"BRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BRK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BRX-alt\" title=\"BRX-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BRX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BSD\" title=\"BSD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BSD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BSD-alt\" title=\"BSD-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BSD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTA\" title=\"BTA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTC\" title=\"BTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTC-alt\" title=\"BTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTCD\" title=\"BTCD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTCD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTCD-alt\" title=\"BTCD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTCD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTM\" title=\"BTM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTM-alt\" title=\"BTM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTS\" title=\"BTS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc BTS-alt\" title=\"BTS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>       
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLAM\" title=\"CLAM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">CLAM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLAM-alt\" title=\"CLAM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">CLAM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLOAK\" title=\"CLOAK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">CLOAK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc CLOAK-alt\" title=\"CLOAK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">BTS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DAO\" title=\"DAO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DAO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DAO-alt\" title=\"DAO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DAO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DASH\" title=\"DASH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DASH</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DASH-alt\" title=\"DASH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DASH-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCR\" title=\"DCR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCR-alt\" title=\"DCR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCT\" title=\"DCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DCT-alt\" title=\"DCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DCT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGB\" title=\"DGB\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGB</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGB-alt\" title=\"DGB\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGB-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGD\" title=\"DGD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DGX\" title=\"DGX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DGX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DMD\" title=\"DMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DMD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DMD-alt\" title=\"DMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DMD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DOGE\" title=\"DOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DOGE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc DOGE-alt\" title=\"DOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">DOGE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EMC\" title=\"EMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EMC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EMC-alt\" title=\"EMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EMC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EOS\" title=\"EOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EOS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc EOS-alt\" title=\"EOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">EOS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ERC\" title=\"ERC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ERC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ERC-alt\" title=\"ERC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ERC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETC\" title=\"ETC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                                
\t\t\t\t\t  <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETC-alt\" title=\"ETC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETH\" title=\"ETH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETH</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ETH-alt\" title=\"ETH\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ETH-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>     

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FC2\" title=\"FC2\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FC2</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FC2-alt\" title=\"FC2\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FC2-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FCT\" title=\"FCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FCT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FCT-alt\" title=\"FCT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FCT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FLO\" title=\"FLO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FLO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FLO-alt\" title=\"FLO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FLO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FRK\" title=\"FRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FRK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FRK-alt\" title=\"FRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FRK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FTC\" title=\"FTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc FTC-alt\" title=\"FTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">FTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>      

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GAME\" title=\"GAME\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GAME</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GAME-alt\" title=\"GAME\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GAME-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GBYTE\" title=\"GBYTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GBYTE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GBYTE-alt\" title=\"GBYTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GBYTE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GDC\" title=\"GDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GDC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GDC-alt\" title=\"GDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GDC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GEMZ\" title=\"GEMZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GEMZ</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GEMZ-alt\" title=\"GEMZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GEMZ-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GLD\" title=\"GLD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GLD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GLD-alt\" title=\"GLD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GLD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNO\" title=\"GNO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNO-alt\" title=\"GNO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNT\" title=\"GNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>   
\t\t\t\t\t  <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GNT-alt\" title=\"GNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GNT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                 
\t\t\t\t\t <div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GOLOS\" title=\"GOLOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GOLOS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GOLOS-alt\" title=\"GOLOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GOLOS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GRC\" title=\"GRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GRC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GRC-alt\" title=\"GRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GRC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                   
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc GRS\" title=\"GRS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">GRS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>     

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc HEAT\" title=\"HEAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">HEAT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc HEAT-alt\" title=\"HEAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">HEAT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ICN\" title=\"ICN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ICN</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ICN-alt\" title=\"ICN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ICN-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IFC\" title=\"IFC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IFC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IFC-alt\" title=\"IFC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IFC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc INCNT\" title=\"INCNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">INCNT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc INCNT-alt\" title=\"INCNT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">INCNT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOC\" title=\"IOC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOC-alt\" title=\"IOC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOTA\" title=\"IOTA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOTA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc IOTA-alt\" title=\"IOTA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">IOTA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc JBS\" title=\"JBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">JBS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc JBS-alt\" title=\"JBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">JBS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KMD\" title=\"KMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KMD</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KMD-alt\" title=\"KMD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KMD-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KOBO\" title=\"KOBO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KOBO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KORE\" title=\"KORE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KORE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc KORE-alt\" title=\"KORE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">KORE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LBC\" title=\"LBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LBC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LBC-alt\" title=\"LBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LBC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LDOGE\" title=\"LDOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LDOGE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc LDOGE-alt\" title=\"LDOGE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LDOGE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LSK\" title=\"LSK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LSK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LSK-alt\" title=\"LSK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LSK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LTC\" title=\"LTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc LTC-alt\" title=\"LTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">LTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MAID\" title=\"MAID\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MAID</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MAID-alt\" title=\"MAID\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MAID-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MCO\" title=\"MCO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MCO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MCO-alt\" title=\"MCO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MCO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MINT\" title=\"MINT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MINT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MINT-alt\" title=\"MINT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MINT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MONA\" title=\"MONA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MONA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MONA-alt\" title=\"MONA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MONA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MRC\" title=\"MRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MRC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MSC\" title=\"MSC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MSC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MSC-alt\" title=\"MSC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MSC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MTR\" title=\"MTR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MTR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MTR-alt\" title=\"MTR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MTR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MUE\" title=\"MUE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MUE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc MUE-alt\" title=\"MUE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">MUE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 


\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NBT\" title=\"NBT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NBT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEO\" title=\"NEO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEO</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEO-alt\" title=\"NEO\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEO-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEOS\" title=\"NEOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEOS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEOS-alt\" title=\"NEOS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEOS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEU\" title=\"NEU\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEU</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NEU-alt\" title=\"NEU\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NEU-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NLG\" title=\"NLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NLG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NLG-alt\" title=\"NLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NLG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NMC\" title=\"NMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NMC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NMC-alt\" title=\"NMC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NMC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NOTE\" title=\"NOTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NOTE</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NOTE-alt\" title=\"NOTE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NOTE-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NVC\" title=\"NVC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NVC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NVC-alt\" title=\"NVC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NVC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NXT\" title=\"NXT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NXT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc NXT-alt\" title=\"NXT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">NXT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OK\" title=\"OK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OK\" title=\"OK-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMG\" title=\"OMG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMG\" title=\"OMG-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMNI\" title=\"OMNI\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMNI</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OMNI\" title=\"OMNI-alt\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OMNI-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OPAL\" title=\"OPAL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OPAL</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc OPAL-alt\" title=\"OPAL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">OPAL-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PART\" title=\"PART\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PART</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PART-alt\" title=\"PART\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PART-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIGGY\" title=\"PIGGY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIGGY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIGGY-alt\" title=\"PIGGY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIGGY-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PINK\" title=\"PINK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PINK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PINK-alt\" title=\"PINK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PINK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIVX\" title=\"PIVX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIVX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PIVX-alt\" title=\"PIVX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PIVX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc POT\" title=\"POT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">POT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc POT-alt\" title=\"POT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">POT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PPC\" title=\"PPC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PPC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc PPC-alt\" title=\"POT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">PPC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QRK\" title=\"QRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QRK</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QRK-alt\" title=\"QRK\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QRK-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QTUM\" title=\"QTUM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc QTUM-alt\" title=\"QTUM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc RADS\" title=\"RADS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t   <i class=\"cc RADS-alt\" title=\"RADS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBIES\" title=\"RBIES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBIES-alt\" title=\"RBIES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBT\" title=\"RBT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBT-alt\" title=\"RBT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBY\" title=\"RBY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RBY-alt\" title=\"RBY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RDD\" title=\"RDD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RDD-alt\" title=\"RDD\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc REP\" title=\"REP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc REP-alt\" title=\"REP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RISE\" title=\"RISE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc RISE-alt\" title=\"RISE\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">QTUM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SALT\" title=\"SALT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SALT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SALT-alt\" title=\"SALT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SALT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SAR\" title=\"SAR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SAR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SAR-alt\" title=\"SAR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SAR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SCOT\" title=\"SCOT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SCOT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SCOT-alt\" title=\"SCOT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SCOT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SDC\" title=\"SDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SDC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SDC-alt\" title=\"SDC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SDC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SIA\" title=\"SIA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SIA</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SIA-alt\" title=\"SIA\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SIA-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SJCX\" title=\"SJCX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SJCX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SJCX-alt\" title=\"SJCX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SJCX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLG\" title=\"SLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLG-alt\" title=\"SLG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLS\" title=\"SLS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SLS-alt\" title=\"SLS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SLS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SNRG\" title=\"SNRG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SNRGt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SNRG-alt\" title=\"SNRG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SNRG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc START\" title=\"START\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">START</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc START-alt\" title=\"START\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">START-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STEEM\" title=\"STEEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STEEM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STEEM-alt\" title=\"STEEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STEEM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STR\" title=\"STR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STR-alt\" title=\"STR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STRAT\" title=\"STRAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STRAT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc STRAT-alt\" title=\"STRAT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">STRAT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SWIFT\" title=\"SWIFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SWIFT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SWIFT-alt\" title=\"SWIFT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SWIFT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SYNC\" title=\"SYNC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYNC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SYNC-alt\" title=\"SYNC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYNC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc SYS\" title=\"SYS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t <i class=\"cc SYS-alt\" title=\"SYS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">SYS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TRIG\" title=\"TRIG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TRIG</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TRIG-alt\" title=\"TRIG\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TRIG-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TX\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TX</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc TX-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">TX-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UBQ\" title=\"UBQ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UBQ</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UBQ-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UBQ-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UNITY\" title=\"UNITY\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UNITY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc UNITY-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">UNITY-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc USDT\" title=\"USDT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">USDT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc USDT-alt\" title=\"TX\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">USDT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VIOR\" title=\"VIOR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VIOR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VIOR-alt\" title=\"VIOR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VIOR-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VNL\" title=\"VNL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VNL</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VNL-alt\" title=\"VNL\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VNL-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VPN\" title=\"VPN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VPN</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VPN-alt\" title=\"VPN\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VPN-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VRC\" title=\"VRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VRC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VRC-alt\" title=\"VRC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VRC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VTC\" title=\"VTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VTC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc VTC-alt\" title=\"VTC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">VTC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc WAVES\" title=\"WAVES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">WAVES</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc WAVES-alt\" title=\"WAVES\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">WAVES-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XAI\" title=\"XAI\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XAI</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XAI-alt\" title=\"XAI\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XAI-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XBS\" title=\"XBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XBS</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XBS-alt\" title=\"XBS\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XBS-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XCP\" title=\"XCP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XCP</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XCP-alt\" title=\"XCP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XCP-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XEM\" title=\"XEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XEM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XEM-alt\" title=\"XEM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XEM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XMR\" title=\"XMR\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XMR</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XPM\" title=\"XPM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XPM</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XPM-alt\" title=\"XPM\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XPM-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XRP\" title=\"XRP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XRP</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XRP-alt\" title=\"XRP\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XRP-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XTZ\" title=\"XTZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XTZ</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XTZ-alt\" title=\"XTZ\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XTZ-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XZC\" title=\"XZC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XZC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc XZC-alt\" title=\"XZC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">XZC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc YBC\" title=\"YBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">YBC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc YBC-alt\" title=\"YBC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">YBC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEC\" title=\"ZEC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEC</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEC-alt\" title=\"ZEC\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEC-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEIT\" title=\"ZEIT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEIT</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-md-2 col-lg-2\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"cc ZEIT-alt\" title=\"ZEIT\"></i>
\t\t\t\t\t\t\t  <span class=\"name\">ZEIT-alt</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t </div>
\t\t\t</div>

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
", "icons_cryptocoins.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\icons_cryptocoins.html.twig");
    }
}
