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

/* profile.html.twig */
class __TwigTemplate_c4e37315046a684c9200fdfbe8ee6d24 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

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

    <title>Sunny Admin - Dashboard  Profile </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Profile</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Extra</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Profile</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t  <div class=\"row\">
\t\t\t  <div class=\"col-12 col-lg-5 col-xl-4\">
\t\t\t\t  
\t\t\t\t  <div class=\"box box-inverse bg-img\" style=\"background-image: url(../images/gallery/full/1.jpg);\" data-overlay=\"2\">
\t\t\t\t\t  <div class=\"flexbox px-20 pt-20\">
\t\t\t\t\t\t<label class=\"toggler toggler-danger text-white\">
\t\t\t\t\t\t  <input type=\"checkbox\">
\t\t\t\t\t\t  <i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t  <a data-toggle=\"dropdown\" href=\"#\"><i class=\"ti-more-alt rotate-90 text-white\"></i></a>
\t\t\t\t\t\t  <div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-user\"></i> Profile</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-picture-o\"></i> Shots</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-check\"></i> Follow</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-ban\"></i> Block</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"box-body text-center pb-50\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t  <img class=\"avatar avatar-xxl avatar-bordered\" src=\"../images/avatar/5.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h4 class=\"mt-2 mb-0\"><a class=\"hover-primary text-white\" href=\"#\">Roben Parkar</a></h4>
\t\t\t\t\t\t<span><i class=\"fa fa-map-marker w-20\"></i> Miami</span>
\t\t\t\t\t  </div>

\t\t\t\t\t  <ul class=\"box-body flexbox flex-justified text-center\" data-overlay=\"4\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <span class=\"opacity-60\">Followers</span><br>
\t\t\t\t\t\t  <span class=\"font-size-20\">8.6K</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <span class=\"opacity-60\">Following</span><br>
\t\t\t\t\t\t  <span class=\"font-size-20\">8457</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <span class=\"opacity-60\">Tweets</span><br>
\t\t\t\t\t\t  <span class=\"font-size-20\">2154</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</div>\t\t\t\t

\t\t\t\t  <!-- Profile Image -->
\t\t\t\t  <div class=\"box\">
\t\t\t\t\t<div class=\"box-body box-profile\">            
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p>Email :<span class=\"text-gray pl-10\">David@yahoo.com</span> </p>
\t\t\t\t\t\t\t\t<p>Phone :<span class=\"text-gray pl-10\">+11 123 456 7890</span></p>
\t\t\t\t\t\t\t\t<p>Address :<span class=\"text-gray pl-10\">123, Lorem Ipsum, Florida, USA</span></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"pb-15\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p class=\"mb-10\">Social Profile</p>
\t\t\t\t\t\t\t\t<div class=\"user-social-acount\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-circle btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-circle btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-circle btn-social-icon btn-instagram\"><i class=\"fa fa-instagram\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"map-box\">
\t\t\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329\" width=\"100%\" height=\"100\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t  </div>

\t\t\t\t  <!-- /.box -->
\t\t\t\t <div class=\"box box-widget widget-user\">
\t\t\t\t\t<!-- Add the bg color to the header using any of the bg-* classes -->
\t\t\t\t\t<div class=\"widget-user-header bg-black\" style=\"background: url('../images/gallery/full/10.jpg') center center;\">
\t\t\t\t\t  <h3 class=\"widget-user-username\">Michael Jorden</h3>
\t\t\t\t\t  <h6 class=\"widget-user-desc\">Designer</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-user-image\">
\t\t\t\t\t  <img class=\"rounded-circle\" src=\"../images/user3-128x128.jpg\" alt=\"User Avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t  <div class=\"description-block\">
\t\t\t\t\t\t\t<h5 class=\"description-header\">12K</h5>
\t\t\t\t\t\t\t<span class=\"description-text\">FOLLOWERS</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.description-block -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t<div class=\"col-sm-4 br-1 bl-1\">
\t\t\t\t\t\t  <div class=\"description-block\">
\t\t\t\t\t\t\t<h5 class=\"description-header\">550</h5>
\t\t\t\t\t\t\t<span class=\"description-text\">FOLLOWERS</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.description-block -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t  <div class=\"description-block\">
\t\t\t\t\t\t\t<h5 class=\"description-header\">158</h5>
\t\t\t\t\t\t\t<span class=\"description-text\">TWEETS</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.description-block -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t  </div>

\t\t\t\t<div class=\"box\">
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"flexbox align-items-baseline mb-20\">
\t\t\t\t\t\t  <h6 class=\"text-uppercase ls-2\">Friends</h6>
\t\t\t\t\t\t  <small>20</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gap-items-2 gap-y\">
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/1.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/3.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/4.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/5.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/6.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/7.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/8.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar avatar-more\" href=\"#\">+15</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<a class=\"text-uppercase d-blockls-1 text-fade\" href=\"#\">Invite People</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"box box-inverse box-carousel slide\" data-ride=\"carousel\" style=\"background-color: #00aced\">
\t\t\t\t  <div class=\"box-header no-border\">
\t\t\t\t\t<span class=\"fa fa-twitter font-size-30\"></span>
\t\t\t\t\t  <div class=\"box-tools pull-right\">
\t\t\t\t\t\t<h5 class=\"box-title box-title-bold\">Carousel feed</h5>
\t\t\t\t\t  </div>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"carousel-inner\">
\t\t\t\t\t<blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15 carousel-item active\">
\t\t\t\t\t  <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<time class=\"text-white\" datetime=\"2017-11-22 20:00\">22 November, 2017</time>
\t\t\t\t\t\t<span><i class=\"fa fa-heart\"></i> 62</span>
\t\t\t\t\t  </div>
\t\t\t\t\t</blockquote>

\t\t\t\t\t<blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15 carousel-item\">
\t\t\t\t\t  <p>Uniquely revolutionize leveraged catalysts for change for world-class web services. Efficiently underwhelm competitive.</p>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<time class=\"text-white\" datetime=\"2017-11-22 20:00\">22 November, 2017</time>
\t\t\t\t\t\t<span><i class=\"fa fa-heart\"></i> 45</span>
\t\t\t\t\t  </div>
\t\t\t\t\t</blockquote>

\t\t\t\t\t<blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15 carousel-item\">
\t\t\t\t\t  <p>Enthusiastically optimize cross-media manufactured products without process-centric web services. Conveniently.</p>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<time class=\"text-white\" datetime=\"2017-11-22 20:00\">22 November, 2017</time>
\t\t\t\t\t\t<span><i class=\"fa fa-heart\"></i> 65</span>
\t\t\t\t\t  </div>
\t\t\t\t\t</blockquote>
\t\t\t\t  </div>

\t\t\t\t</div>

\t\t\t\t<div class=\"box box-inverse\" style=\"background-color: #3b5998\">
\t\t\t\t  <div class=\"box-header no-border\">
\t\t\t\t\t<span class=\"fa fa-facebook font-size-30\"></span>
\t\t\t\t\t  <div class=\"box-tools pull-right\">
\t\t\t\t\t\t<h5 class=\"box-title box-title-bold\">Facebook feed</h5>
\t\t\t\t\t  </div>
\t\t\t\t  </div>

\t\t\t\t  <blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15\">
\t\t\t\t\t<p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
\t\t\t\t\t<div class=\"flexbox\">
\t\t\t\t\t  <time class=\"text-white\" datetime=\"2017-11-21 20:00\">21 November, 2017</time>
\t\t\t\t\t  <span><i class=\"fa fa-heart\"></i> 75</span>
\t\t\t\t\t</div>
\t\t\t\t  </blockquote>
\t\t\t\t</div>

\t\t\t  </div>
\t\t\t  <div class=\"col-12 col-lg-7 col-xl-8\">
\t\t\t\t
\t\t\t  <div class=\"nav-tabs-custom box-profile\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t  <li><a class=\"active\" href=\"#usertimeline\" data-toggle=\"tab\">Timeline</a></li>
\t\t\t\t  <li><a href=\"#activity\" data-toggle=\"tab\">Activity</a></li>
\t\t\t\t  <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t <div class=\"active tab-pane\" id=\"usertimeline\">
\t\t\t\t\t<div class=\"publisher publisher-multi bg-white b-1 mb-30\">
\t\t\t\t\t  <textarea class=\"publisher-input auto-expand\" rows=\"4\" placeholder=\"Write something\"></textarea>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<div class=\"gap-items\">
\t\t\t\t\t\t  <span class=\"publisher-btn file-group\">
\t\t\t\t\t\t\t<i class=\"fa fa-image file-browser\"></i>
\t\t\t\t\t\t\t<input type=\"file\">
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t  <a class=\"publisher-btn\" href=\"#\"><i class=\"fa fa-map-marker\"></i></a>
\t\t\t\t\t\t  <a class=\"publisher-btn\" href=\"#\"><i class=\"fa fa-smile-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"btn btn-sm btn-bold btn-primary\">Post</button>
\t\t\t\t\t  </div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t  <div class=\"media bb-1 border-fade\">
\t\t\t\t\t\t<img class=\"avatar avatar-lg\" src=\"../images/avatar/3.jpg\" alt=\"...\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t  <p>
\t\t\t\t\t\t\t<strong>Denial Webar</strong>
\t\t\t\t\t\t\t<time class=\"float-right text-fade\" datetime=\"2017\">24 min ago</time>
\t\t\t\t\t\t  </p>
\t\t\t\t\t\t  <p><small>Designer</small></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"box-body bb-1 border-fade\">
\t\t\t\t\t\t<p class=\"lead\">Authoritatively syndicate goal-oriented leadership skills for clicks-and-mortar outsourcing. Synergistically reconceptualize enabled catalysts for change.</p>

\t\t\t\t\t\t<div class=\"gap-items-4 mt-10\">
\t\t\t\t\t\t  <a class=\"text-fade hover-light\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-up mr-1\"></i> 1254
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"text-fade hover-light\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-comment mr-1\"></i> 25
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"text-fade hover-light\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-share-alt mr-1\"></i> 12
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>


\t\t\t\t\t  <div class=\"media-list media-list-divided bg-lighter\">
\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\">
\t\t\t\t\t\t\t<img src=\"../images/avatar/6.jpg\" alt=\"...\">
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t  <a href=\"#\"><strong>Rock Tele</strong></a>
\t\t\t\t\t\t\t  <time class=\"float-right text-fade\" datetime=\"2017-07-14 20:00\">Just now</time>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Uniquely enhance world-class channels with just in time schemas.</p>

\t\t\t\t\t\t\t<div class=\"media px-0 mt-20\">
\t\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"../images/avatar/8.jpg\" alt=\"...\">
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t  <a href=\"#\"><strong>Brock Lensar</strong></a>
\t\t\t\t\t\t\t\t  <time class=\"float-right text-fade\" datetime=\"2017-07-14 20:00\">26 mins ago</time>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>Thank you for your nice comment.</p>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\">
\t\t\t\t\t\t\t<img src=\"../images/avatar/9.jpg\" alt=\"...\">
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t  <a href=\"#\"><strong>Tony Stark</strong></a>
\t\t\t\t\t\t\t  <time class=\"float-right text-fade\" datetime=\"2017-07-14 20:00\">2 hours ago</time>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Continually drive user friendly solutions through performance based infomediaries.</p>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <form class=\"publisher bt-1 border-fade\">
\t\t\t\t\t\t<img class=\"avatar avatar-sm\" src=\"../images/avatar/4.jpg\" alt=\"...\">
\t\t\t\t\t\t<input class=\"publisher-input\" type=\"text\" placeholder=\"Add Your Comment\">
\t\t\t\t\t\t<a class=\"publisher-btn\" href=\"#\"><i class=\"fa fa-smile-o\"></i></a>
\t\t\t\t\t\t<span class=\"publisher-btn file-group\">
\t\t\t\t\t\t  <i class=\"fa fa-camera file-browser\"></i>
\t\t\t\t\t\t  <input type=\"file\">
\t\t\t\t\t\t</span>
\t\t\t\t\t  </form>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"box p-15\"> 
\t\t\t\t\t\t<div class=\"timeline timeline-single-column timeline-single-full-column\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"timeline-label\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-info badge-pill\">Images</span>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t<div class=\"timeline-point timeline-point-success\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-image\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-event\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"timeline-title\"><a href=\"#\">Rakesh Kumar</a><small> uploaded new photos</small></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-footer\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-right\"><i class=\"fa fa-clock-o\"></i> 8 days ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t<div class=\"timeline-point timeline-point-info\">
\t\t\t\t\t\t\t\t\t<i class=\"ion ion-chatbubble-working\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-event\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"timeline-title\"><a href=\"#\">Jone Doe</a><small> commented on your post</small></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-footer\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-success btn-sm\" href=\"#\">View comment</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"pull-right\"><i class=\"fa fa-clock-o\"></i> 8 days ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t<div class=\"timeline-point timeline-point-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-videocam\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-event\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"timeline-title\"><a href=\"#\">Jone Doe</a><small> shared a video</small></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t\t\t\t\t\t\t\t<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/k85mRPqvMbE\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-footer\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-success btn-sm\" href=\"#\">View comment</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"pull-right\"><i class=\"fa fa-clock-o\"></i> 8 days ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<span class=\"timeline-label\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-rounded btn-danger\"><i class=\"fa fa-clock-o\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t  </div>    
\t\t\t\t  <!-- /.tab-pane -->

\t\t\t\t  <div class=\"tab-pane\" id=\"activity\">\t\t\t

\t\t\t\t\t<div class=\"box p-15\">\t\t\t\t
\t\t\t\t\t<!-- Post -->
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t  <div class=\"user-block\">
\t\t\t\t\t\t<img class=\"img-bordered-sm rounded-circle\" src=\"../images/user1-128x128.jpg\" alt=\"user image\">
\t\t\t\t\t\t\t<span class=\"username\">
\t\t\t\t\t\t\t  <a href=\"#\">Brayden</a>
\t\t\t\t\t\t\t  <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"description\">5 minutes ago</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.user-block -->
\t\t\t\t\t  <div class=\"activitytimeline\">
\t\t\t\t\t\t  <p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
\t\t\t\t\t\t  </p>
\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"pull-right\">
\t\t\t\t\t\t\t  <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
\t\t\t\t\t\t\t\t(5)</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t  <form class=\"form-element\">
\t\t\t\t\t\t\t  <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
\t\t\t\t\t\t </form>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.post -->

\t\t\t\t\t<!-- Post -->
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t  <div class=\"user-block\">
\t\t\t\t\t\t<img class=\"img-bordered-sm rounded-circle\" src=\"../images/user6-128x128.jpg\" alt=\"user image\">
\t\t\t\t\t\t\t<span class=\"username\">
\t\t\t\t\t\t\t  <a href=\"#\">Evan</a>
\t\t\t\t\t\t\t  <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"description\">5 minutes ago</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.user-block -->
\t\t\t\t\t  <div class=\"activitytimeline\">
\t\t\t\t\t\t  <div class=\"row mb-20\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo1.png\" alt=\"Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo2.png\" alt=\"Photo\">
\t\t\t\t\t\t\t\t  <br><br>
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo3.jpg\" alt=\"Photo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo4.jpg\" alt=\"Photo\">
\t\t\t\t\t\t\t\t  <br><br>
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo1.png\" alt=\"Photo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <!-- /.row -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.row -->

\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"pull-right\">
\t\t\t\t\t\t\t  <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
\t\t\t\t\t\t\t\t(5)</a></li>
\t\t\t\t\t\t  </ul>

\t\t\t\t\t\t  <form class=\"form-element\">
\t\t\t\t\t\t\t  <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
\t\t\t\t\t\t </form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.post -->

\t\t\t\t\t<!-- Post -->
\t\t\t\t\t<div class=\"post clearfix\">
\t\t\t\t\t  <div class=\"user-block\">
\t\t\t\t\t\t<img class=\"img-bordered-sm rounded-circle\" src=\"../images/user7-128x128.jpg\" alt=\"user image\">
\t\t\t\t\t\t\t<span class=\"username\">
\t\t\t\t\t\t\t  <a href=\"#\">Nicholas</a>
\t\t\t\t\t\t\t  <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"description\">5 minutes ago</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.user-block -->
\t\t\t\t\t\t<div class=\"activitytimeline\">
\t\t\t\t\t\t  <p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
\t\t\t\t\t\t  </p>

\t\t\t\t\t\t  <form class=\"form-horizontal form-element\">
\t\t\t\t\t\t\t<div class=\"form-group row no-gutters\">
\t\t\t\t\t\t\t  <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input class=\"form-control input-sm\" placeholder=\"Response\">
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-rounded btn-danger pull-right btn-block btn-sm\">Send</button>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.post -->
\t\t\t\t   </div>

\t\t\t\t  </div>
\t\t\t\t  <!-- /.tab-pane -->

\t\t\t\t  <div class=\"tab-pane\" id=\"settings\">\t\t

\t\t\t\t\t<div class=\"box p-15\">\t\t
\t\t\t\t\t\t<form class=\"form-horizontal form-element col-12\">
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"email\" class=\"form-control\" id=\"inputName\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputPhone\" class=\"col-sm-2 control-label\">Phone</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"tel\" class=\"form-control\" id=\"inputPhone\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputExperience\" class=\"col-sm-2 control-label\">Experience</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <textarea class=\"form-control\" id=\"inputExperience\" placeholder=\"\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputSkills\" class=\"col-sm-2 control-label\">Skills</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" id=\"inputSkills\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"ml-auto col-sm-10\">
\t\t\t\t\t\t\t  <div class=\"checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" checked=\"\">
\t\t\t\t\t\t\t\t<label for=\"basic_checkbox_1\"> I agree to the</label>
\t\t\t\t\t\t\t\t  &nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\">Terms and Conditions</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"ml-auto col-sm-10\">
\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-rounded btn-success\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>\t\t\t  
\t\t\t\t  </div>
\t\t\t\t  <!-- /.tab-pane -->
\t\t\t\t</div>
\t\t\t\t<!-- /.tab-content -->
\t\t\t  </div>
\t\t\t  <!-- /.nav-tabs-custom -->
\t\t\t</div>\t\t\t  
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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"js/pages/timeline.js\"></script>
\t
\t<!-- Sunny Admin App -->
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
        return "profile.html.twig";
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

    <title>Sunny Admin - Dashboard  Profile </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Profile</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Extra</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Profile</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t  <div class=\"row\">
\t\t\t  <div class=\"col-12 col-lg-5 col-xl-4\">
\t\t\t\t  
\t\t\t\t  <div class=\"box box-inverse bg-img\" style=\"background-image: url(../images/gallery/full/1.jpg);\" data-overlay=\"2\">
\t\t\t\t\t  <div class=\"flexbox px-20 pt-20\">
\t\t\t\t\t\t<label class=\"toggler toggler-danger text-white\">
\t\t\t\t\t\t  <input type=\"checkbox\">
\t\t\t\t\t\t  <i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t  <a data-toggle=\"dropdown\" href=\"#\"><i class=\"ti-more-alt rotate-90 text-white\"></i></a>
\t\t\t\t\t\t  <div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-user\"></i> Profile</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-picture-o\"></i> Shots</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-check\"></i> Follow</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-ban\"></i> Block</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"box-body text-center pb-50\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t  <img class=\"avatar avatar-xxl avatar-bordered\" src=\"../images/avatar/5.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h4 class=\"mt-2 mb-0\"><a class=\"hover-primary text-white\" href=\"#\">Roben Parkar</a></h4>
\t\t\t\t\t\t<span><i class=\"fa fa-map-marker w-20\"></i> Miami</span>
\t\t\t\t\t  </div>

\t\t\t\t\t  <ul class=\"box-body flexbox flex-justified text-center\" data-overlay=\"4\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <span class=\"opacity-60\">Followers</span><br>
\t\t\t\t\t\t  <span class=\"font-size-20\">8.6K</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <span class=\"opacity-60\">Following</span><br>
\t\t\t\t\t\t  <span class=\"font-size-20\">8457</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <span class=\"opacity-60\">Tweets</span><br>
\t\t\t\t\t\t  <span class=\"font-size-20\">2154</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</div>\t\t\t\t

\t\t\t\t  <!-- Profile Image -->
\t\t\t\t  <div class=\"box\">
\t\t\t\t\t<div class=\"box-body box-profile\">            
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p>Email :<span class=\"text-gray pl-10\">David@yahoo.com</span> </p>
\t\t\t\t\t\t\t\t<p>Phone :<span class=\"text-gray pl-10\">+11 123 456 7890</span></p>
\t\t\t\t\t\t\t\t<p>Address :<span class=\"text-gray pl-10\">123, Lorem Ipsum, Florida, USA</span></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"pb-15\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p class=\"mb-10\">Social Profile</p>
\t\t\t\t\t\t\t\t<div class=\"user-social-acount\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-circle btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-circle btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-circle btn-social-icon btn-instagram\"><i class=\"fa fa-instagram\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"map-box\">
\t\t\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329\" width=\"100%\" height=\"100\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t  </div>

\t\t\t\t  <!-- /.box -->
\t\t\t\t <div class=\"box box-widget widget-user\">
\t\t\t\t\t<!-- Add the bg color to the header using any of the bg-* classes -->
\t\t\t\t\t<div class=\"widget-user-header bg-black\" style=\"background: url('../images/gallery/full/10.jpg') center center;\">
\t\t\t\t\t  <h3 class=\"widget-user-username\">Michael Jorden</h3>
\t\t\t\t\t  <h6 class=\"widget-user-desc\">Designer</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-user-image\">
\t\t\t\t\t  <img class=\"rounded-circle\" src=\"../images/user3-128x128.jpg\" alt=\"User Avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t  <div class=\"description-block\">
\t\t\t\t\t\t\t<h5 class=\"description-header\">12K</h5>
\t\t\t\t\t\t\t<span class=\"description-text\">FOLLOWERS</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.description-block -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t<div class=\"col-sm-4 br-1 bl-1\">
\t\t\t\t\t\t  <div class=\"description-block\">
\t\t\t\t\t\t\t<h5 class=\"description-header\">550</h5>
\t\t\t\t\t\t\t<span class=\"description-text\">FOLLOWERS</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.description-block -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t  <div class=\"description-block\">
\t\t\t\t\t\t\t<h5 class=\"description-header\">158</h5>
\t\t\t\t\t\t\t<span class=\"description-text\">TWEETS</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.description-block -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t  </div>

\t\t\t\t<div class=\"box\">
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"flexbox align-items-baseline mb-20\">
\t\t\t\t\t\t  <h6 class=\"text-uppercase ls-2\">Friends</h6>
\t\t\t\t\t\t  <small>20</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gap-items-2 gap-y\">
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/1.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/3.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/4.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/5.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/6.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/7.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\"><img src=\"../images/avatar/8.jpg\" alt=\"...\"></a>
\t\t\t\t\t\t  <a class=\"avatar avatar-more\" href=\"#\">+15</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<a class=\"text-uppercase d-blockls-1 text-fade\" href=\"#\">Invite People</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"box box-inverse box-carousel slide\" data-ride=\"carousel\" style=\"background-color: #00aced\">
\t\t\t\t  <div class=\"box-header no-border\">
\t\t\t\t\t<span class=\"fa fa-twitter font-size-30\"></span>
\t\t\t\t\t  <div class=\"box-tools pull-right\">
\t\t\t\t\t\t<h5 class=\"box-title box-title-bold\">Carousel feed</h5>
\t\t\t\t\t  </div>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"carousel-inner\">
\t\t\t\t\t<blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15 carousel-item active\">
\t\t\t\t\t  <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<time class=\"text-white\" datetime=\"2017-11-22 20:00\">22 November, 2017</time>
\t\t\t\t\t\t<span><i class=\"fa fa-heart\"></i> 62</span>
\t\t\t\t\t  </div>
\t\t\t\t\t</blockquote>

\t\t\t\t\t<blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15 carousel-item\">
\t\t\t\t\t  <p>Uniquely revolutionize leveraged catalysts for change for world-class web services. Efficiently underwhelm competitive.</p>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<time class=\"text-white\" datetime=\"2017-11-22 20:00\">22 November, 2017</time>
\t\t\t\t\t\t<span><i class=\"fa fa-heart\"></i> 45</span>
\t\t\t\t\t  </div>
\t\t\t\t\t</blockquote>

\t\t\t\t\t<blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15 carousel-item\">
\t\t\t\t\t  <p>Enthusiastically optimize cross-media manufactured products without process-centric web services. Conveniently.</p>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<time class=\"text-white\" datetime=\"2017-11-22 20:00\">22 November, 2017</time>
\t\t\t\t\t\t<span><i class=\"fa fa-heart\"></i> 65</span>
\t\t\t\t\t  </div>
\t\t\t\t\t</blockquote>
\t\t\t\t  </div>

\t\t\t\t</div>

\t\t\t\t<div class=\"box box-inverse\" style=\"background-color: #3b5998\">
\t\t\t\t  <div class=\"box-header no-border\">
\t\t\t\t\t<span class=\"fa fa-facebook font-size-30\"></span>
\t\t\t\t\t  <div class=\"box-tools pull-right\">
\t\t\t\t\t\t<h5 class=\"box-title box-title-bold\">Facebook feed</h5>
\t\t\t\t\t  </div>
\t\t\t\t  </div>

\t\t\t\t  <blockquote class=\"blockquote blockquote-inverse no-border m-0 py-15\">
\t\t\t\t\t<p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
\t\t\t\t\t<div class=\"flexbox\">
\t\t\t\t\t  <time class=\"text-white\" datetime=\"2017-11-21 20:00\">21 November, 2017</time>
\t\t\t\t\t  <span><i class=\"fa fa-heart\"></i> 75</span>
\t\t\t\t\t</div>
\t\t\t\t  </blockquote>
\t\t\t\t</div>

\t\t\t  </div>
\t\t\t  <div class=\"col-12 col-lg-7 col-xl-8\">
\t\t\t\t
\t\t\t  <div class=\"nav-tabs-custom box-profile\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t  <li><a class=\"active\" href=\"#usertimeline\" data-toggle=\"tab\">Timeline</a></li>
\t\t\t\t  <li><a href=\"#activity\" data-toggle=\"tab\">Activity</a></li>
\t\t\t\t  <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t <div class=\"active tab-pane\" id=\"usertimeline\">
\t\t\t\t\t<div class=\"publisher publisher-multi bg-white b-1 mb-30\">
\t\t\t\t\t  <textarea class=\"publisher-input auto-expand\" rows=\"4\" placeholder=\"Write something\"></textarea>
\t\t\t\t\t  <div class=\"flexbox\">
\t\t\t\t\t\t<div class=\"gap-items\">
\t\t\t\t\t\t  <span class=\"publisher-btn file-group\">
\t\t\t\t\t\t\t<i class=\"fa fa-image file-browser\"></i>
\t\t\t\t\t\t\t<input type=\"file\">
\t\t\t\t\t\t  </span>
\t\t\t\t\t\t  <a class=\"publisher-btn\" href=\"#\"><i class=\"fa fa-map-marker\"></i></a>
\t\t\t\t\t\t  <a class=\"publisher-btn\" href=\"#\"><i class=\"fa fa-smile-o\"></i></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"btn btn-sm btn-bold btn-primary\">Post</button>
\t\t\t\t\t  </div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t  <div class=\"media bb-1 border-fade\">
\t\t\t\t\t\t<img class=\"avatar avatar-lg\" src=\"../images/avatar/3.jpg\" alt=\"...\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t  <p>
\t\t\t\t\t\t\t<strong>Denial Webar</strong>
\t\t\t\t\t\t\t<time class=\"float-right text-fade\" datetime=\"2017\">24 min ago</time>
\t\t\t\t\t\t  </p>
\t\t\t\t\t\t  <p><small>Designer</small></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"box-body bb-1 border-fade\">
\t\t\t\t\t\t<p class=\"lead\">Authoritatively syndicate goal-oriented leadership skills for clicks-and-mortar outsourcing. Synergistically reconceptualize enabled catalysts for change.</p>

\t\t\t\t\t\t<div class=\"gap-items-4 mt-10\">
\t\t\t\t\t\t  <a class=\"text-fade hover-light\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-up mr-1\"></i> 1254
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"text-fade hover-light\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-comment mr-1\"></i> 25
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <a class=\"text-fade hover-light\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-share-alt mr-1\"></i> 12
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>


\t\t\t\t\t  <div class=\"media-list media-list-divided bg-lighter\">
\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\">
\t\t\t\t\t\t\t<img src=\"../images/avatar/6.jpg\" alt=\"...\">
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t  <a href=\"#\"><strong>Rock Tele</strong></a>
\t\t\t\t\t\t\t  <time class=\"float-right text-fade\" datetime=\"2017-07-14 20:00\">Just now</time>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Uniquely enhance world-class channels with just in time schemas.</p>

\t\t\t\t\t\t\t<div class=\"media px-0 mt-20\">
\t\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"../images/avatar/8.jpg\" alt=\"...\">
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t  <a href=\"#\"><strong>Brock Lensar</strong></a>
\t\t\t\t\t\t\t\t  <time class=\"float-right text-fade\" datetime=\"2017-07-14 20:00\">26 mins ago</time>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>Thank you for your nice comment.</p>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"avatar\" href=\"#\">
\t\t\t\t\t\t\t<img src=\"../images/avatar/9.jpg\" alt=\"...\">
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t  <a href=\"#\"><strong>Tony Stark</strong></a>
\t\t\t\t\t\t\t  <time class=\"float-right text-fade\" datetime=\"2017-07-14 20:00\">2 hours ago</time>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Continually drive user friendly solutions through performance based infomediaries.</p>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <form class=\"publisher bt-1 border-fade\">
\t\t\t\t\t\t<img class=\"avatar avatar-sm\" src=\"../images/avatar/4.jpg\" alt=\"...\">
\t\t\t\t\t\t<input class=\"publisher-input\" type=\"text\" placeholder=\"Add Your Comment\">
\t\t\t\t\t\t<a class=\"publisher-btn\" href=\"#\"><i class=\"fa fa-smile-o\"></i></a>
\t\t\t\t\t\t<span class=\"publisher-btn file-group\">
\t\t\t\t\t\t  <i class=\"fa fa-camera file-browser\"></i>
\t\t\t\t\t\t  <input type=\"file\">
\t\t\t\t\t\t</span>
\t\t\t\t\t  </form>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"box p-15\"> 
\t\t\t\t\t\t<div class=\"timeline timeline-single-column timeline-single-full-column\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"timeline-label\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-info badge-pill\">Images</span>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t<div class=\"timeline-point timeline-point-success\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-image\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-event\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"timeline-title\"><a href=\"#\">Rakesh Kumar</a><small> uploaded new photos</small></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../images/150x100.png\" alt=\"...\" class=\"m-10\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-footer\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-right\"><i class=\"fa fa-clock-o\"></i> 8 days ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t<div class=\"timeline-point timeline-point-info\">
\t\t\t\t\t\t\t\t\t<i class=\"ion ion-chatbubble-working\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-event\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"timeline-title\"><a href=\"#\">Jone Doe</a><small> commented on your post</small></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-footer\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-success btn-sm\" href=\"#\">View comment</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"pull-right\"><i class=\"fa fa-clock-o\"></i> 8 days ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t\t<div class=\"timeline-point timeline-point-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-videocam\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-event\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"timeline-title\"><a href=\"#\">Jone Doe</a><small> shared a video</small></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t\t\t\t\t\t\t\t<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/k85mRPqvMbE\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-footer\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-success btn-sm\" href=\"#\">View comment</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"pull-right\"><i class=\"fa fa-clock-o\"></i> 8 days ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<span class=\"timeline-label\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-rounded btn-danger\"><i class=\"fa fa-clock-o\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  
\t\t\t\t  </div>    
\t\t\t\t  <!-- /.tab-pane -->

\t\t\t\t  <div class=\"tab-pane\" id=\"activity\">\t\t\t

\t\t\t\t\t<div class=\"box p-15\">\t\t\t\t
\t\t\t\t\t<!-- Post -->
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t  <div class=\"user-block\">
\t\t\t\t\t\t<img class=\"img-bordered-sm rounded-circle\" src=\"../images/user1-128x128.jpg\" alt=\"user image\">
\t\t\t\t\t\t\t<span class=\"username\">
\t\t\t\t\t\t\t  <a href=\"#\">Brayden</a>
\t\t\t\t\t\t\t  <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"description\">5 minutes ago</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.user-block -->
\t\t\t\t\t  <div class=\"activitytimeline\">
\t\t\t\t\t\t  <p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
\t\t\t\t\t\t  </p>
\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"pull-right\">
\t\t\t\t\t\t\t  <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
\t\t\t\t\t\t\t\t(5)</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t  <form class=\"form-element\">
\t\t\t\t\t\t\t  <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
\t\t\t\t\t\t </form>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.post -->

\t\t\t\t\t<!-- Post -->
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t  <div class=\"user-block\">
\t\t\t\t\t\t<img class=\"img-bordered-sm rounded-circle\" src=\"../images/user6-128x128.jpg\" alt=\"user image\">
\t\t\t\t\t\t\t<span class=\"username\">
\t\t\t\t\t\t\t  <a href=\"#\">Evan</a>
\t\t\t\t\t\t\t  <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"description\">5 minutes ago</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.user-block -->
\t\t\t\t\t  <div class=\"activitytimeline\">
\t\t\t\t\t\t  <div class=\"row mb-20\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo1.png\" alt=\"Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo2.png\" alt=\"Photo\">
\t\t\t\t\t\t\t\t  <br><br>
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo3.jpg\" alt=\"Photo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo4.jpg\" alt=\"Photo\">
\t\t\t\t\t\t\t\t  <br><br>
\t\t\t\t\t\t\t\t  <img class=\"img-fluid\" src=\"../images/photo1.png\" alt=\"Photo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <!-- /.row -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <!-- /.row -->

\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"pull-right\">
\t\t\t\t\t\t\t  <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
\t\t\t\t\t\t\t\t(5)</a></li>
\t\t\t\t\t\t  </ul>

\t\t\t\t\t\t  <form class=\"form-element\">
\t\t\t\t\t\t\t  <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
\t\t\t\t\t\t </form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.post -->

\t\t\t\t\t<!-- Post -->
\t\t\t\t\t<div class=\"post clearfix\">
\t\t\t\t\t  <div class=\"user-block\">
\t\t\t\t\t\t<img class=\"img-bordered-sm rounded-circle\" src=\"../images/user7-128x128.jpg\" alt=\"user image\">
\t\t\t\t\t\t\t<span class=\"username\">
\t\t\t\t\t\t\t  <a href=\"#\">Nicholas</a>
\t\t\t\t\t\t\t  <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"description\">5 minutes ago</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /.user-block -->
\t\t\t\t\t\t<div class=\"activitytimeline\">
\t\t\t\t\t\t  <p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
\t\t\t\t\t\t  </p>

\t\t\t\t\t\t  <form class=\"form-horizontal form-element\">
\t\t\t\t\t\t\t<div class=\"form-group row no-gutters\">
\t\t\t\t\t\t\t  <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input class=\"form-control input-sm\" placeholder=\"Response\">
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-rounded btn-danger pull-right btn-block btn-sm\">Send</button>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.post -->
\t\t\t\t   </div>

\t\t\t\t  </div>
\t\t\t\t  <!-- /.tab-pane -->

\t\t\t\t  <div class=\"tab-pane\" id=\"settings\">\t\t

\t\t\t\t\t<div class=\"box p-15\">\t\t
\t\t\t\t\t\t<form class=\"form-horizontal form-element col-12\">
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"email\" class=\"form-control\" id=\"inputName\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputPhone\" class=\"col-sm-2 control-label\">Phone</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"tel\" class=\"form-control\" id=\"inputPhone\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputExperience\" class=\"col-sm-2 control-label\">Experience</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <textarea class=\"form-control\" id=\"inputExperience\" placeholder=\"\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"inputSkills\" class=\"col-sm-2 control-label\">Skills</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" id=\"inputSkills\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"ml-auto col-sm-10\">
\t\t\t\t\t\t\t  <div class=\"checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" checked=\"\">
\t\t\t\t\t\t\t\t<label for=\"basic_checkbox_1\"> I agree to the</label>
\t\t\t\t\t\t\t\t  &nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\">Terms and Conditions</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"ml-auto col-sm-10\">
\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-rounded btn-success\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>\t\t\t  
\t\t\t\t  </div>
\t\t\t\t  <!-- /.tab-pane -->
\t\t\t\t</div>
\t\t\t\t<!-- /.tab-content -->
\t\t\t  </div>
\t\t\t  <!-- /.nav-tabs-custom -->
\t\t\t</div>\t\t\t  
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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"js/pages/timeline.js\"></script>
\t
\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t
\t
</body>
</html>
", "profile.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\profile.html.twig");
    }
}
