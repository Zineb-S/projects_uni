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

/* icons_simpleline.html.twig */
class __TwigTemplate_968a85d0d3db25cfbd38e1481399ccb6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons_simpleline.html.twig"));

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
\t\t\t\t\t<h3 class=\"page-title\">Simple Line Icons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Simple Line Icons</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box icons-page\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<p>Click on the icons to get the icon class name</p>
\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user si\"></i><span class=\"name\">user</span> <code class=\"code-preview\">.si-user</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-people si\"></i><span class=\"name\">people</span> <code class=\"code-preview\">.si-people</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-female si\"></i><span class=\"name\">user-female</span> <code class=\"code-preview\">.si-user-female</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-follow si\"></i><span class=\"name\">user-follow</span> <code class=\"code-preview\">.si-user-follow</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-following si\"></i><span class=\"name\">user-following</span> <code class=\"code-preview\">.si-user-following</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-unfollow si\"></i><span class=\"name\">user-unfollow</span> <code class=\"code-preview\">.si-user-unfollow</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-login si\"></i><span class=\"name\">login</span> <code class=\"code-preview\">.si-login</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-logout si\"></i><span class=\"name\">logout</span> <code class=\"code-preview\">.si-logout</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-emotsmile si\"></i><span class=\"name\">emotsmile</span> <code class=\"code-preview\">.si-emotsmile</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-phone si\"></i><span class=\"name\">phone</span> <code class=\"code-preview\">.si-phone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-call-end si\"></i><span class=\"name\">call-end</span> <code class=\"code-preview\">.si-call-end</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-call-in si\"></i><span class=\"name\">call-in</span> <code class=\"code-preview\">.si-call-in</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-call-out si\"></i><span class=\"name\">call-out</span> <code class=\"code-preview\">.si-call-out</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-map si\"></i><span class=\"name\">map</span> <code class=\"code-preview\">.si-map</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-location-pin si\"></i><span class=\"name\">location-pin</span> <code class=\"code-preview\">.si-location-pin</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-direction si\"></i><span class=\"name\">direction</span> <code class=\"code-preview\">.si-direction</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-directions si\"></i><span class=\"name\">directions</span> <code class=\"code-preview\">.si-directions</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-compass si\"></i><span class=\"name\">compass</span> <code class=\"code-preview\">.si-compass</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-layers si\"></i><span class=\"name\">layers</span> <code class=\"code-preview\">.si-layers</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-menu si\"></i><span class=\"name\">menu</span> <code class=\"code-preview\">.si-menu</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-list si\"></i><span class=\"name\">list</span> <code class=\"code-preview\">.si-list</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-options-vertical si\"></i><span class=\"name\">options-vertical</span> <code class=\"code-preview\">.si-options-vertical</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-options si\"></i><span class=\"name\">options</span> <code class=\"code-preview\">.si-options</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-down si\"></i><span class=\"name\">arrow-down</span> <code class=\"code-preview\">.si-arrow-down</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-left si\"></i><span class=\"name\">arrow-left</span> <code class=\"code-preview\">.si-arrow-left</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-right si\"></i><span class=\"name\">arrow-right</span> <code class=\"code-preview\">.si-arrow-right</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-up si\"></i><span class=\"name\">arrow-up</span> <code class=\"code-preview\">.si-arrow-up</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-up-circle si\"></i><span class=\"name\">arrow-up-circle</span> <code class=\"code-preview\">.si-arrow-up-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-left-circle si\"></i><span class=\"name\">arrow-left-circle</span> <code class=\"code-preview\">.si-arrow-left-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-right-circle si\"></i><span class=\"name\">arrow-right-circle</span> <code class=\"code-preview\">.si-arrow-right-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-down-circle si\"></i><span class=\"name\">arrow-down-circle</span> <code class=\"code-preview\">.si-arrow-down-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-check si\"></i><span class=\"name\">check</span> <code class=\"code-preview\">.si-check</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-clock si\"></i><span class=\"name\">clock</span> <code class=\"code-preview\">.si-clock</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-plus si\"></i><span class=\"name\">plus</span> <code class=\"code-preview\">.si-plus</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-minus si\"></i><span class=\"name\">minus</span> <code class=\"code-preview\">.si-minus</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-close si\"></i><span class=\"name\">close</span> <code class=\"code-preview\">.si-close</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-event si\"></i><span class=\"name\">event</span> <code class=\"code-preview\">.si-event</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-exclamation si\"></i><span class=\"name\">exclamation</span> <code class=\"code-preview\">.si-exclamation</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-organization si\"></i><span class=\"name\">organization</span> <code class=\"code-preview\">.si-organization</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-trophy si\"></i><span class=\"name\">trophy</span> <code class=\"code-preview\">.si-trophy</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-screen-smartphone si\"></i><span class=\"name\">screen-smartphone</span> <code class=\"code-preview\">.si-screen-smartphone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-screen-desktop si\"></i><span class=\"name\">screen-desktop</span> <code class=\"code-preview\">.si-screen-desktop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-plane si\"></i><span class=\"name\">plane</span> <code class=\"code-preview\">.si-plane</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-notebook si\"></i><span class=\"name\">notebook</span> <code class=\"code-preview\">.si-notebook</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-mustache si\"></i><span class=\"name\">mustache</span> <code class=\"code-preview\">.si-mustache</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-mouse si\"></i><span class=\"name\">mouse</span> <code class=\"code-preview\">.si-mouse</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnet si\"></i><span class=\"name\">magnet</span> <code class=\"code-preview\">.si-magnet</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-energy si\"></i><span class=\"name\">energy</span> <code class=\"code-preview\">.si-energy</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-disc si\"></i><span class=\"name\">disc</span> <code class=\"code-preview\">.si-disc</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cursor si\"></i><span class=\"name\">cursor</span> <code class=\"code-preview\">.si-cursor</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cursor-move si\"></i><span class=\"name\">cursor-move</span> <code class=\"code-preview\">.si-cursor-move</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-crop si\"></i><span class=\"name\">crop</span> <code class=\"code-preview\">.si-crop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-chemistry si\"></i><span class=\"name\">chemistry</span> <code class=\"code-preview\">.si-chemistry</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-speedometer si\"></i><span class=\"name\">speedometer</span> <code class=\"code-preview\">.si-speedometer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-shield si\"></i><span class=\"name\">shield</span> <code class=\"code-preview\">.si-shield</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-screen-tablet si\"></i><span class=\"name\">screen-tablet</span> <code class=\"code-preview\">.si-screen-tablet</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magic-wand si\"></i><span class=\"name\">magic-wand</span> <code class=\"code-preview\">.si-magic-wand</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-hourglass si\"></i><span class=\"name\">hourglass</span> <code class=\"code-preview\">.si-hourglass</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-graduation si\"></i><span class=\"name\">graduation</span> <code class=\"code-preview\">.si-graduation</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-ghost si\"></i><span class=\"name\">ghost</span> <code class=\"code-preview\">.si-ghost</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-game-controller si\"></i><span class=\"name\">game-controller</span> <code class=\"code-preview\">.si-game-controller</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-fire si\"></i><span class=\"name\">fire</span> <code class=\"code-preview\">.si-fire</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-eyeglass si\"></i><span class=\"name\">eyeglass</span> <code class=\"code-preview\">.si-eyeglass</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-envelope-open si\"></i><span class=\"name\">envelope-open</span> <code class=\"code-preview\">.si-envelope-open</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-envelope-letter si\"></i><span class=\"name\">envelope-letter</span> <code class=\"code-preview\">.si-envelope-letter</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bell si\"></i><span class=\"name\">bell</span> <code class=\"code-preview\">.si-bell</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-badge si\"></i><span class=\"name\">badge</span> <code class=\"code-preview\">.si-badge</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-anchor si\"></i><span class=\"name\">anchor</span> <code class=\"code-preview\">.si-anchor</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-wallet si\"></i><span class=\"name\">wallet</span> <code class=\"code-preview\">.si-wallet</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-vector si\"></i><span class=\"name\">vector</span> <code class=\"code-preview\">.si-vector</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-speech si\"></i><span class=\"name\">speech</span> <code class=\"code-preview\">.si-speech</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-puzzle si\"></i><span class=\"name\">puzzle</span> <code class=\"code-preview\">.si-puzzle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-printer si\"></i><span class=\"name\">printer</span> <code class=\"code-preview\">.si-printer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-present si\"></i><span class=\"name\">present</span> <code class=\"code-preview\">.si-present</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-playlist si\"></i><span class=\"name\">playlist</span> <code class=\"code-preview\">.si-playlist</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-pin si\"></i><span class=\"name\">pin</span> <code class=\"code-preview\">.si-pin</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-picture si\"></i><span class=\"name\">picture</span> <code class=\"code-preview\">.si-picture</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-handbag si\"></i><span class=\"name\">handbag</span> <code class=\"code-preview\">.si-handbag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-globe-alt si\"></i><span class=\"name\">globe-alt</span> <code class=\"code-preview\">.si-globe-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-globe si\"></i><span class=\"name\">globe</span> <code class=\"code-preview\">.si-globe</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-folder-alt si\"></i><span class=\"name\">folder-alt</span> <code class=\"code-preview\">.si-folder-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-folder si\"></i><span class=\"name\">folder</span> <code class=\"code-preview\">.si-folder</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-film si\"></i><span class=\"name\">film</span> <code class=\"code-preview\">.si-film</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-feed si\"></i><span class=\"name\">feed</span> <code class=\"code-preview\">.si-feed</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-drop si\"></i><span class=\"name\">drop</span> <code class=\"code-preview\">.si-drop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-drawer si\"></i><span class=\"name\">drawer</span> <code class=\"code-preview\">.si-drawer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-docs si\"></i><span class=\"name\">docs</span> <code class=\"code-preview\">.si-docs</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-doc si\"></i><span class=\"name\">doc</span> <code class=\"code-preview\">.si-doc</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-diamond si\"></i><span class=\"name\">diamond</span> <code class=\"code-preview\">.si-diamond</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cup si\"></i><span class=\"name\">cup</span> <code class=\"code-preview\">.si-cup</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-calculator si\"></i><span class=\"name\">calculator</span> <code class=\"code-preview\">.si-calculator</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bubbles si\"></i><span class=\"name\">bubbles</span> <code class=\"code-preview\">.si-bubbles</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-briefcase si\"></i><span class=\"name\">briefcase</span> <code class=\"code-preview\">.si-briefcase</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-book-open si\"></i><span class=\"name\">book-open</span> <code class=\"code-preview\">.si-book-open</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-basket-loaded si\"></i><span class=\"name\">basket-loaded</span> <code class=\"code-preview\">.si-basket-loaded</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-basket si\"></i><span class=\"name\">basket</span> <code class=\"code-preview\">.si-basket</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bag si\"></i><span class=\"name\">bag</span> <code class=\"code-preview\">.si-bag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-action-undo si\"></i><span class=\"name\">action-undo</span> <code class=\"code-preview\">.si-action-undo</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-action-redo si\"></i><span class=\"name\">action-redo</span> <code class=\"code-preview\">.si-action-redo</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-wrench si\"></i><span class=\"name\">wrench</span> <code class=\"code-preview\">.si-wrench</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-umbrella si\"></i><span class=\"name\">umbrella</span> <code class=\"code-preview\">.si-umbrella</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-trash si\"></i><span class=\"name\">trash</span> <code class=\"code-preview\">.si-trash</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-tag si\"></i><span class=\"name\">tag</span> <code class=\"code-preview\">.si-tag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-support si\"></i><span class=\"name\">support</span> <code class=\"code-preview\">.si-support</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-frame si\"></i><span class=\"name\">frame</span> <code class=\"code-preview\">.si-frame</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-size-fullscreen si\"></i><span class=\"name\">size-fullscreen</span> <code class=\"code-preview\">.si-size-fullscreen</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-size-actual si\"></i><span class=\"name\">size-actual</span> <code class=\"code-preview\">.si-size-actual</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-shuffle si\"></i><span class=\"name\">shuffle</span> <code class=\"code-preview\">.si-shuffle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-share-alt si\"></i><span class=\"name\">share-alt</span> <code class=\"code-preview\">.si-share-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-share si\"></i><span class=\"name\">share</span> <code class=\"code-preview\">.si-share</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-rocket si\"></i><span class=\"name\">rocket</span> <code class=\"code-preview\">.si-rocket</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-question si\"></i><span class=\"name\">question</span> <code class=\"code-preview\">.si-question</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-pie-chart si\"></i><span class=\"name\">pie-chart</span> <code class=\"code-preview\">.si-pie-chart</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-pencil si\"></i><span class=\"name\">pencil</span> <code class=\"code-preview\">.si-pencil</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-note si\"></i><span class=\"name\">note</span> <code class=\"code-preview\">.si-note</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-loop si\"></i><span class=\"name\">loop</span> <code class=\"code-preview\">.si-loop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-home si\"></i><span class=\"name\">home</span> <code class=\"code-preview\">.si-home</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-grid si\"></i><span class=\"name\">grid</span> <code class=\"code-preview\">.si-grid</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-graph si\"></i><span class=\"name\">graph</span> <code class=\"code-preview\">.si-graph</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-microphone si\"></i><span class=\"name\">microphone</span> <code class=\"code-preview\">.si-microphone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-music-tone-alt si\"></i><span class=\"name\">music-tone-alt</span> <code class=\"code-preview\">.si-music-tone-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-music-tone si\"></i><span class=\"name\">music-tone</span> <code class=\"code-preview\">.si-music-tone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-earphones-alt si\"></i><span class=\"name\">earphones-alt</span> <code class=\"code-preview\">.si-earphones-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-earphones si\"></i><span class=\"name\">earphones</span> <code class=\"code-preview\">.si-earphones</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-equalizer si\"></i><span class=\"name\">equalizer</span> <code class=\"code-preview\">.si-equalizer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-like si\"></i><span class=\"name\">like</span> <code class=\"code-preview\">.si-like</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-dislike si\"></i><span class=\"name\">dislike</span> <code class=\"code-preview\">.si-dislike</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-start si\"></i><span class=\"name\">control-start</span> <code class=\"code-preview\">.si-control-start</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-rewind si\"></i><span class=\"name\">control-rewind</span> <code class=\"code-preview\">.si-control-rewind</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-play si\"></i><span class=\"name\">control-play</span> <code class=\"code-preview\">.si-control-play</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-pause si\"></i><span class=\"name\">control-pause</span> <code class=\"code-preview\">.si-control-pause</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-forward si\"></i><span class=\"name\">control-forward</span> <code class=\"code-preview\">.si-control-forward</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-end si\"></i><span class=\"name\">control-end</span> <code class=\"code-preview\">.si-control-end</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-volume-1 si\"></i><span class=\"name\">volume-1</span> <code class=\"code-preview\">.si-volume-1</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-volume-2 si\"></i><span class=\"name\">volume-2</span> <code class=\"code-preview\">.si-volume-2</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-volume-off si\"></i><span class=\"name\">volume-off</span> <code class=\"code-preview\">.si-volume-off</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-calendar si\"></i><span class=\"name\">calendar</span> <code class=\"code-preview\">.si-calendar</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bulb si\"></i><span class=\"name\">bulb</span> <code class=\"code-preview\">.si-bulb</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-chart si\"></i><span class=\"name\">chart</span> <code class=\"code-preview\">.si-chart</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-ban si\"></i><span class=\"name\">ban</span> <code class=\"code-preview\">.si-ban</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bubble si\"></i><span class=\"name\">bubble</span> <code class=\"code-preview\">.si-bubble</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-camrecorder si\"></i><span class=\"name\">camrecorder</span> <code class=\"code-preview\">.si-camrecorder</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-camera si\"></i><span class=\"name\">camera</span> <code class=\"code-preview\">.si-camera</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cloud-download si\"></i><span class=\"name\">cloud-download</span> <code class=\"code-preview\">.si-cloud-download</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cloud-upload si\"></i><span class=\"name\">cloud-upload</span> <code class=\"code-preview\">.si-cloud-upload</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-envelope si\"></i><span class=\"name\">envelope</span> <code class=\"code-preview\">.si-envelope</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-eye si\"></i><span class=\"name\">eye</span> <code class=\"code-preview\">.si-eye</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-flag si\"></i><span class=\"name\">flag</span> <code class=\"code-preview\">.si-flag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-heart si\"></i><span class=\"name\">heart</span> <code class=\"code-preview\">.si-heart</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-info si\"></i><span class=\"name\">info</span> <code class=\"code-preview\">.si-info</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-key si\"></i><span class=\"name\">key</span> <code class=\"code-preview\">.si-key</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-link si\"></i><span class=\"name\">link</span> <code class=\"code-preview\">.si-link</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-lock si\"></i><span class=\"name\">lock</span> <code class=\"code-preview\">.si-lock</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-lock-open si\"></i><span class=\"name\">lock-open</span> <code class=\"code-preview\">.si-lock-open</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnifier si\"></i><span class=\"name\">magnifier</span> <code class=\"code-preview\">.si-magnifier</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnifier-add si\"></i><span class=\"name\">magnifier-add</span> <code class=\"code-preview\">.si-magnifier-add</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnifier-remove si\"></i><span class=\"name\">magnifier-remove</span> <code class=\"code-preview\">.si-magnifier-remove</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-paper-clip si\"></i><span class=\"name\">paper-clip</span> <code class=\"code-preview\">.si-paper-clip</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-paper-plane si\"></i><span class=\"name\">paper-plane</span> <code class=\"code-preview\">.si-paper-plane</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-power si\"></i><span class=\"name\">power</span> <code class=\"code-preview\">.si-power</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-refresh si\"></i><span class=\"name\">refresh</span> <code class=\"code-preview\">.si-refresh</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-reload si\"></i><span class=\"name\">reload</span> <code class=\"code-preview\">.si-reload</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-settings si\"></i><span class=\"name\">settings</span> <code class=\"code-preview\">.si-settings</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-star si\"></i><span class=\"name\">star</span> <code class=\"code-preview\">.si-star</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-symbol-female si\"></i><span class=\"name\">symbol-female</span> <code class=\"code-preview\">.si-symbol-female</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-symbol-male si\"></i><span class=\"name\">symbol-male</span> <code class=\"code-preview\">.si-symbol-male</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-target si\"></i><span class=\"name\">target</span> <code class=\"code-preview\">.si-target</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-credit-card si\"></i><span class=\"name\">credit-card</span> <code class=\"code-preview\">.si-credit-card</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-paypal si\"></i><span class=\"name\">paypal</span> <code class=\"code-preview\">.si-paypal</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-tumblr si\"></i><span class=\"name\">social-tumblr</span> <code class=\"code-preview\">.si-social-tumblr</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-twitter si\"></i><span class=\"name\">social-twitter</span> <code class=\"code-preview\">.si-social-twitter</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-facebook si\"></i><span class=\"name\">social-facebook</span> <code class=\"code-preview\">.si-social-facebook</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-instagram si\"></i><span class=\"name\">social-instagram</span> <code class=\"code-preview\">.si-social-instagram</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-linkedin si\"></i><span class=\"name\">social-linkedin</span> <code class=\"code-preview\">.si-social-linkedin</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-pinterest si\"></i><span class=\"name\">social-pinterest</span> <code class=\"code-preview\">.si-social-pinterest</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-github si\"></i><span class=\"name\">social-github</span> <code class=\"code-preview\">.si-social-github</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-google si\"></i><span class=\"name\">social-google</span> <code class=\"code-preview\">.si-social-google</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-reddit si\"></i><span class=\"name\">social-reddit</span> <code class=\"code-preview\">.si-social-reddit</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-skype si\"></i><span class=\"name\">social-skype</span> <code class=\"code-preview\">.si-social-skype</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-dribbble si\"></i><span class=\"name\">social-dribbble</span> <code class=\"code-preview\">.si-social-dribbble</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-behance si\"></i><span class=\"name\">social-behance</span> <code class=\"code-preview\">.si-social-behance</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-foursqare si\"></i><span class=\"name\">social-foursqare</span> <code class=\"code-preview\">.si-social-foursqare</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-soundcloud si\"></i><span class=\"name\">social-soundcloud</span> <code class=\"code-preview\">.si-social-soundcloud</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-spotify si\"></i><span class=\"name\">social-spotify</span> <code class=\"code-preview\">.si-social-spotify</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-stumbleupon si\"></i><span class=\"name\">social-stumbleupon</span> <code class=\"code-preview\">.si-social-stumbleupon</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-youtube si\"></i><span class=\"name\">social-youtube</span> <code class=\"code-preview\">.si-social-youtube</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-dropbox si\"></i><span class=\"name\">social-dropbox</span> <code class=\"code-preview\">.si-social-dropbox</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-vkontakte si\"></i><span class=\"name\">social-vkontakte</span> <code class=\"code-preview\">.si-social-vkontakte</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-steam si\"></i><span class=\"name\">social-steam</span> <code class=\"code-preview\">.si-social-steam</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                
\t\t\t\t\t</div>
\t\t\t\t</div>
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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"js/pages/icons.js\"></script>
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
        return "icons_simpleline.html.twig";
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
\t\t\t\t\t<h3 class=\"page-title\">Simple Line Icons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Simple Line Icons</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box icons-page\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<p>Click on the icons to get the icon class name</p>
\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user si\"></i><span class=\"name\">user</span> <code class=\"code-preview\">.si-user</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-people si\"></i><span class=\"name\">people</span> <code class=\"code-preview\">.si-people</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-female si\"></i><span class=\"name\">user-female</span> <code class=\"code-preview\">.si-user-female</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-follow si\"></i><span class=\"name\">user-follow</span> <code class=\"code-preview\">.si-user-follow</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-following si\"></i><span class=\"name\">user-following</span> <code class=\"code-preview\">.si-user-following</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-user-unfollow si\"></i><span class=\"name\">user-unfollow</span> <code class=\"code-preview\">.si-user-unfollow</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-login si\"></i><span class=\"name\">login</span> <code class=\"code-preview\">.si-login</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-logout si\"></i><span class=\"name\">logout</span> <code class=\"code-preview\">.si-logout</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-emotsmile si\"></i><span class=\"name\">emotsmile</span> <code class=\"code-preview\">.si-emotsmile</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-phone si\"></i><span class=\"name\">phone</span> <code class=\"code-preview\">.si-phone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-call-end si\"></i><span class=\"name\">call-end</span> <code class=\"code-preview\">.si-call-end</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-call-in si\"></i><span class=\"name\">call-in</span> <code class=\"code-preview\">.si-call-in</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-call-out si\"></i><span class=\"name\">call-out</span> <code class=\"code-preview\">.si-call-out</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-map si\"></i><span class=\"name\">map</span> <code class=\"code-preview\">.si-map</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-location-pin si\"></i><span class=\"name\">location-pin</span> <code class=\"code-preview\">.si-location-pin</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-direction si\"></i><span class=\"name\">direction</span> <code class=\"code-preview\">.si-direction</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-directions si\"></i><span class=\"name\">directions</span> <code class=\"code-preview\">.si-directions</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-compass si\"></i><span class=\"name\">compass</span> <code class=\"code-preview\">.si-compass</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-layers si\"></i><span class=\"name\">layers</span> <code class=\"code-preview\">.si-layers</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-menu si\"></i><span class=\"name\">menu</span> <code class=\"code-preview\">.si-menu</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-list si\"></i><span class=\"name\">list</span> <code class=\"code-preview\">.si-list</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-options-vertical si\"></i><span class=\"name\">options-vertical</span> <code class=\"code-preview\">.si-options-vertical</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-options si\"></i><span class=\"name\">options</span> <code class=\"code-preview\">.si-options</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-down si\"></i><span class=\"name\">arrow-down</span> <code class=\"code-preview\">.si-arrow-down</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-left si\"></i><span class=\"name\">arrow-left</span> <code class=\"code-preview\">.si-arrow-left</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-right si\"></i><span class=\"name\">arrow-right</span> <code class=\"code-preview\">.si-arrow-right</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-up si\"></i><span class=\"name\">arrow-up</span> <code class=\"code-preview\">.si-arrow-up</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-up-circle si\"></i><span class=\"name\">arrow-up-circle</span> <code class=\"code-preview\">.si-arrow-up-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-left-circle si\"></i><span class=\"name\">arrow-left-circle</span> <code class=\"code-preview\">.si-arrow-left-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-right-circle si\"></i><span class=\"name\">arrow-right-circle</span> <code class=\"code-preview\">.si-arrow-right-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-arrow-down-circle si\"></i><span class=\"name\">arrow-down-circle</span> <code class=\"code-preview\">.si-arrow-down-circle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-check si\"></i><span class=\"name\">check</span> <code class=\"code-preview\">.si-check</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-clock si\"></i><span class=\"name\">clock</span> <code class=\"code-preview\">.si-clock</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-plus si\"></i><span class=\"name\">plus</span> <code class=\"code-preview\">.si-plus</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-minus si\"></i><span class=\"name\">minus</span> <code class=\"code-preview\">.si-minus</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-close si\"></i><span class=\"name\">close</span> <code class=\"code-preview\">.si-close</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-event si\"></i><span class=\"name\">event</span> <code class=\"code-preview\">.si-event</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-exclamation si\"></i><span class=\"name\">exclamation</span> <code class=\"code-preview\">.si-exclamation</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-organization si\"></i><span class=\"name\">organization</span> <code class=\"code-preview\">.si-organization</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-trophy si\"></i><span class=\"name\">trophy</span> <code class=\"code-preview\">.si-trophy</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-screen-smartphone si\"></i><span class=\"name\">screen-smartphone</span> <code class=\"code-preview\">.si-screen-smartphone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-screen-desktop si\"></i><span class=\"name\">screen-desktop</span> <code class=\"code-preview\">.si-screen-desktop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-plane si\"></i><span class=\"name\">plane</span> <code class=\"code-preview\">.si-plane</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-notebook si\"></i><span class=\"name\">notebook</span> <code class=\"code-preview\">.si-notebook</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-mustache si\"></i><span class=\"name\">mustache</span> <code class=\"code-preview\">.si-mustache</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-mouse si\"></i><span class=\"name\">mouse</span> <code class=\"code-preview\">.si-mouse</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnet si\"></i><span class=\"name\">magnet</span> <code class=\"code-preview\">.si-magnet</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-energy si\"></i><span class=\"name\">energy</span> <code class=\"code-preview\">.si-energy</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-disc si\"></i><span class=\"name\">disc</span> <code class=\"code-preview\">.si-disc</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cursor si\"></i><span class=\"name\">cursor</span> <code class=\"code-preview\">.si-cursor</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cursor-move si\"></i><span class=\"name\">cursor-move</span> <code class=\"code-preview\">.si-cursor-move</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-crop si\"></i><span class=\"name\">crop</span> <code class=\"code-preview\">.si-crop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-chemistry si\"></i><span class=\"name\">chemistry</span> <code class=\"code-preview\">.si-chemistry</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-speedometer si\"></i><span class=\"name\">speedometer</span> <code class=\"code-preview\">.si-speedometer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-shield si\"></i><span class=\"name\">shield</span> <code class=\"code-preview\">.si-shield</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-screen-tablet si\"></i><span class=\"name\">screen-tablet</span> <code class=\"code-preview\">.si-screen-tablet</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magic-wand si\"></i><span class=\"name\">magic-wand</span> <code class=\"code-preview\">.si-magic-wand</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-hourglass si\"></i><span class=\"name\">hourglass</span> <code class=\"code-preview\">.si-hourglass</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-graduation si\"></i><span class=\"name\">graduation</span> <code class=\"code-preview\">.si-graduation</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-ghost si\"></i><span class=\"name\">ghost</span> <code class=\"code-preview\">.si-ghost</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-game-controller si\"></i><span class=\"name\">game-controller</span> <code class=\"code-preview\">.si-game-controller</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-fire si\"></i><span class=\"name\">fire</span> <code class=\"code-preview\">.si-fire</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-eyeglass si\"></i><span class=\"name\">eyeglass</span> <code class=\"code-preview\">.si-eyeglass</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-envelope-open si\"></i><span class=\"name\">envelope-open</span> <code class=\"code-preview\">.si-envelope-open</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-envelope-letter si\"></i><span class=\"name\">envelope-letter</span> <code class=\"code-preview\">.si-envelope-letter</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bell si\"></i><span class=\"name\">bell</span> <code class=\"code-preview\">.si-bell</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-badge si\"></i><span class=\"name\">badge</span> <code class=\"code-preview\">.si-badge</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-anchor si\"></i><span class=\"name\">anchor</span> <code class=\"code-preview\">.si-anchor</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-wallet si\"></i><span class=\"name\">wallet</span> <code class=\"code-preview\">.si-wallet</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-vector si\"></i><span class=\"name\">vector</span> <code class=\"code-preview\">.si-vector</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-speech si\"></i><span class=\"name\">speech</span> <code class=\"code-preview\">.si-speech</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-puzzle si\"></i><span class=\"name\">puzzle</span> <code class=\"code-preview\">.si-puzzle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-printer si\"></i><span class=\"name\">printer</span> <code class=\"code-preview\">.si-printer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-present si\"></i><span class=\"name\">present</span> <code class=\"code-preview\">.si-present</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-playlist si\"></i><span class=\"name\">playlist</span> <code class=\"code-preview\">.si-playlist</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-pin si\"></i><span class=\"name\">pin</span> <code class=\"code-preview\">.si-pin</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-picture si\"></i><span class=\"name\">picture</span> <code class=\"code-preview\">.si-picture</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-handbag si\"></i><span class=\"name\">handbag</span> <code class=\"code-preview\">.si-handbag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-globe-alt si\"></i><span class=\"name\">globe-alt</span> <code class=\"code-preview\">.si-globe-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-globe si\"></i><span class=\"name\">globe</span> <code class=\"code-preview\">.si-globe</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-folder-alt si\"></i><span class=\"name\">folder-alt</span> <code class=\"code-preview\">.si-folder-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-folder si\"></i><span class=\"name\">folder</span> <code class=\"code-preview\">.si-folder</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-film si\"></i><span class=\"name\">film</span> <code class=\"code-preview\">.si-film</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-feed si\"></i><span class=\"name\">feed</span> <code class=\"code-preview\">.si-feed</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-drop si\"></i><span class=\"name\">drop</span> <code class=\"code-preview\">.si-drop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-drawer si\"></i><span class=\"name\">drawer</span> <code class=\"code-preview\">.si-drawer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-docs si\"></i><span class=\"name\">docs</span> <code class=\"code-preview\">.si-docs</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-doc si\"></i><span class=\"name\">doc</span> <code class=\"code-preview\">.si-doc</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-diamond si\"></i><span class=\"name\">diamond</span> <code class=\"code-preview\">.si-diamond</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cup si\"></i><span class=\"name\">cup</span> <code class=\"code-preview\">.si-cup</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-calculator si\"></i><span class=\"name\">calculator</span> <code class=\"code-preview\">.si-calculator</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bubbles si\"></i><span class=\"name\">bubbles</span> <code class=\"code-preview\">.si-bubbles</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-briefcase si\"></i><span class=\"name\">briefcase</span> <code class=\"code-preview\">.si-briefcase</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-book-open si\"></i><span class=\"name\">book-open</span> <code class=\"code-preview\">.si-book-open</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-basket-loaded si\"></i><span class=\"name\">basket-loaded</span> <code class=\"code-preview\">.si-basket-loaded</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-basket si\"></i><span class=\"name\">basket</span> <code class=\"code-preview\">.si-basket</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bag si\"></i><span class=\"name\">bag</span> <code class=\"code-preview\">.si-bag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-action-undo si\"></i><span class=\"name\">action-undo</span> <code class=\"code-preview\">.si-action-undo</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-action-redo si\"></i><span class=\"name\">action-redo</span> <code class=\"code-preview\">.si-action-redo</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-wrench si\"></i><span class=\"name\">wrench</span> <code class=\"code-preview\">.si-wrench</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-umbrella si\"></i><span class=\"name\">umbrella</span> <code class=\"code-preview\">.si-umbrella</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-trash si\"></i><span class=\"name\">trash</span> <code class=\"code-preview\">.si-trash</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-tag si\"></i><span class=\"name\">tag</span> <code class=\"code-preview\">.si-tag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-support si\"></i><span class=\"name\">support</span> <code class=\"code-preview\">.si-support</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-frame si\"></i><span class=\"name\">frame</span> <code class=\"code-preview\">.si-frame</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-size-fullscreen si\"></i><span class=\"name\">size-fullscreen</span> <code class=\"code-preview\">.si-size-fullscreen</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-size-actual si\"></i><span class=\"name\">size-actual</span> <code class=\"code-preview\">.si-size-actual</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-shuffle si\"></i><span class=\"name\">shuffle</span> <code class=\"code-preview\">.si-shuffle</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-share-alt si\"></i><span class=\"name\">share-alt</span> <code class=\"code-preview\">.si-share-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-share si\"></i><span class=\"name\">share</span> <code class=\"code-preview\">.si-share</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-rocket si\"></i><span class=\"name\">rocket</span> <code class=\"code-preview\">.si-rocket</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-question si\"></i><span class=\"name\">question</span> <code class=\"code-preview\">.si-question</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-pie-chart si\"></i><span class=\"name\">pie-chart</span> <code class=\"code-preview\">.si-pie-chart</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-pencil si\"></i><span class=\"name\">pencil</span> <code class=\"code-preview\">.si-pencil</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-note si\"></i><span class=\"name\">note</span> <code class=\"code-preview\">.si-note</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-loop si\"></i><span class=\"name\">loop</span> <code class=\"code-preview\">.si-loop</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-home si\"></i><span class=\"name\">home</span> <code class=\"code-preview\">.si-home</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-grid si\"></i><span class=\"name\">grid</span> <code class=\"code-preview\">.si-grid</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-graph si\"></i><span class=\"name\">graph</span> <code class=\"code-preview\">.si-graph</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-microphone si\"></i><span class=\"name\">microphone</span> <code class=\"code-preview\">.si-microphone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-music-tone-alt si\"></i><span class=\"name\">music-tone-alt</span> <code class=\"code-preview\">.si-music-tone-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-music-tone si\"></i><span class=\"name\">music-tone</span> <code class=\"code-preview\">.si-music-tone</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-earphones-alt si\"></i><span class=\"name\">earphones-alt</span> <code class=\"code-preview\">.si-earphones-alt</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-earphones si\"></i><span class=\"name\">earphones</span> <code class=\"code-preview\">.si-earphones</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-equalizer si\"></i><span class=\"name\">equalizer</span> <code class=\"code-preview\">.si-equalizer</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-like si\"></i><span class=\"name\">like</span> <code class=\"code-preview\">.si-like</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-dislike si\"></i><span class=\"name\">dislike</span> <code class=\"code-preview\">.si-dislike</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-start si\"></i><span class=\"name\">control-start</span> <code class=\"code-preview\">.si-control-start</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-rewind si\"></i><span class=\"name\">control-rewind</span> <code class=\"code-preview\">.si-control-rewind</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-play si\"></i><span class=\"name\">control-play</span> <code class=\"code-preview\">.si-control-play</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-pause si\"></i><span class=\"name\">control-pause</span> <code class=\"code-preview\">.si-control-pause</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-forward si\"></i><span class=\"name\">control-forward</span> <code class=\"code-preview\">.si-control-forward</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-control-end si\"></i><span class=\"name\">control-end</span> <code class=\"code-preview\">.si-control-end</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-volume-1 si\"></i><span class=\"name\">volume-1</span> <code class=\"code-preview\">.si-volume-1</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-volume-2 si\"></i><span class=\"name\">volume-2</span> <code class=\"code-preview\">.si-volume-2</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-volume-off si\"></i><span class=\"name\">volume-off</span> <code class=\"code-preview\">.si-volume-off</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-calendar si\"></i><span class=\"name\">calendar</span> <code class=\"code-preview\">.si-calendar</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bulb si\"></i><span class=\"name\">bulb</span> <code class=\"code-preview\">.si-bulb</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-chart si\"></i><span class=\"name\">chart</span> <code class=\"code-preview\">.si-chart</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-ban si\"></i><span class=\"name\">ban</span> <code class=\"code-preview\">.si-ban</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-bubble si\"></i><span class=\"name\">bubble</span> <code class=\"code-preview\">.si-bubble</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-camrecorder si\"></i><span class=\"name\">camrecorder</span> <code class=\"code-preview\">.si-camrecorder</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-camera si\"></i><span class=\"name\">camera</span> <code class=\"code-preview\">.si-camera</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cloud-download si\"></i><span class=\"name\">cloud-download</span> <code class=\"code-preview\">.si-cloud-download</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-cloud-upload si\"></i><span class=\"name\">cloud-upload</span> <code class=\"code-preview\">.si-cloud-upload</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-envelope si\"></i><span class=\"name\">envelope</span> <code class=\"code-preview\">.si-envelope</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-eye si\"></i><span class=\"name\">eye</span> <code class=\"code-preview\">.si-eye</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-flag si\"></i><span class=\"name\">flag</span> <code class=\"code-preview\">.si-flag</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-heart si\"></i><span class=\"name\">heart</span> <code class=\"code-preview\">.si-heart</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-info si\"></i><span class=\"name\">info</span> <code class=\"code-preview\">.si-info</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-key si\"></i><span class=\"name\">key</span> <code class=\"code-preview\">.si-key</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-link si\"></i><span class=\"name\">link</span> <code class=\"code-preview\">.si-link</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-lock si\"></i><span class=\"name\">lock</span> <code class=\"code-preview\">.si-lock</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-lock-open si\"></i><span class=\"name\">lock-open</span> <code class=\"code-preview\">.si-lock-open</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnifier si\"></i><span class=\"name\">magnifier</span> <code class=\"code-preview\">.si-magnifier</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnifier-add si\"></i><span class=\"name\">magnifier-add</span> <code class=\"code-preview\">.si-magnifier-add</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-magnifier-remove si\"></i><span class=\"name\">magnifier-remove</span> <code class=\"code-preview\">.si-magnifier-remove</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-paper-clip si\"></i><span class=\"name\">paper-clip</span> <code class=\"code-preview\">.si-paper-clip</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-paper-plane si\"></i><span class=\"name\">paper-plane</span> <code class=\"code-preview\">.si-paper-plane</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-power si\"></i><span class=\"name\">power</span> <code class=\"code-preview\">.si-power</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-refresh si\"></i><span class=\"name\">refresh</span> <code class=\"code-preview\">.si-refresh</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-reload si\"></i><span class=\"name\">reload</span> <code class=\"code-preview\">.si-reload</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-settings si\"></i><span class=\"name\">settings</span> <code class=\"code-preview\">.si-settings</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-star si\"></i><span class=\"name\">star</span> <code class=\"code-preview\">.si-star</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-symbol-female si\"></i><span class=\"name\">symbol-female</span> <code class=\"code-preview\">.si-symbol-female</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-symbol-male si\"></i><span class=\"name\">symbol-male</span> <code class=\"code-preview\">.si-symbol-male</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-target si\"></i><span class=\"name\">target</span> <code class=\"code-preview\">.si-target</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-credit-card si\"></i><span class=\"name\">credit-card</span> <code class=\"code-preview\">.si-credit-card</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-paypal si\"></i><span class=\"name\">paypal</span> <code class=\"code-preview\">.si-paypal</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-tumblr si\"></i><span class=\"name\">social-tumblr</span> <code class=\"code-preview\">.si-social-tumblr</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-twitter si\"></i><span class=\"name\">social-twitter</span> <code class=\"code-preview\">.si-social-twitter</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-facebook si\"></i><span class=\"name\">social-facebook</span> <code class=\"code-preview\">.si-social-facebook</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-instagram si\"></i><span class=\"name\">social-instagram</span> <code class=\"code-preview\">.si-social-instagram</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-linkedin si\"></i><span class=\"name\">social-linkedin</span> <code class=\"code-preview\">.si-social-linkedin</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-pinterest si\"></i><span class=\"name\">social-pinterest</span> <code class=\"code-preview\">.si-social-pinterest</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-github si\"></i><span class=\"name\">social-github</span> <code class=\"code-preview\">.si-social-github</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-google si\"></i><span class=\"name\">social-google</span> <code class=\"code-preview\">.si-social-google</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-reddit si\"></i><span class=\"name\">social-reddit</span> <code class=\"code-preview\">.si-social-reddit</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-skype si\"></i><span class=\"name\">social-skype</span> <code class=\"code-preview\">.si-social-skype</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-dribbble si\"></i><span class=\"name\">social-dribbble</span> <code class=\"code-preview\">.si-social-dribbble</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-behance si\"></i><span class=\"name\">social-behance</span> <code class=\"code-preview\">.si-social-behance</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-foursqare si\"></i><span class=\"name\">social-foursqare</span> <code class=\"code-preview\">.si-social-foursqare</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-soundcloud si\"></i><span class=\"name\">social-soundcloud</span> <code class=\"code-preview\">.si-social-soundcloud</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-spotify si\"></i><span class=\"name\">social-spotify</span> <code class=\"code-preview\">.si-social-spotify</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-stumbleupon si\"></i><span class=\"name\">social-stumbleupon</span> <code class=\"code-preview\">.si-social-stumbleupon</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-youtube si\"></i><span class=\"name\">social-youtube</span> <code class=\"code-preview\">.si-social-youtube</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-dropbox si\"></i><span class=\"name\">social-dropbox</span> <code class=\"code-preview\">.si-social-dropbox</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-vkontakte si\"></i><span class=\"name\">social-vkontakte</span> <code class=\"code-preview\">.si-social-vkontakte</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><div class=\"icons-preview-box col-6 col-md-3\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<a href=\"#\" class=\"show-code\" title=\"click to show css class name\"><i class=\"si-social-steam si\"></i><span class=\"name\">social-steam</span> <code class=\"code-preview\">.si-social-steam</code></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>                                
\t\t\t\t\t</div>
\t\t\t\t</div>
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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"js/pages/icons.js\"></script>
\t
\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t
</body>
</html>
", "icons_simpleline.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\icons_simpleline.html.twig");
    }
}
