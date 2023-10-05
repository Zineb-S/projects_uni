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

/* forms_wizard.html.twig */
class __TwigTemplate_2ab07c2e692e020e24770755cc50cc78 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms_wizard.html.twig"));

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

    <title>Sunny Admin - Dashboard  Form Wizard </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Form Wizard</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Forms</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Form Wizard</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t  

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t <!-- Step wizard -->
\t\t  <div class=\"box box-default\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t  <h4 class=\"box-title\">Client Registration</h4>
\t\t\t  <h6 class=\"box-subtitle\">You can find the <a href=\"http://www.jquery-steps.com\" target=\"_blank\">offical website </a></h6>\t\t
\t\t\t</div>
\t\t\t<!-- /.box-header -->
\t\t\t<div class=\"box-body wizard-content\">
\t\t\t\t<form action=\"#\" class=\"tab-wizard wizard-circle\">
\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t<h6>Client Information</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"firstName5\">First Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"firstName5\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"lastName1\">Last Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastName1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"emailAddress1\">Email Address :</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"emailAddress1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"phoneNumber1\">Phone Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"phoneNumber1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline1\">Address Line 1 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline2\">Address Line 2 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"location3\">Select City :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"location3\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Amsterdam\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Berlin\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Frankfurt\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"date1\">Date of Birth :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"date1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t<h6>Account Setup</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"url123\">URL :</label>
\t\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form-control\" id=\"url123\" placeholder=\"http://\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"username123\">Username :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username123\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"password123\">Password :</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password123\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>User Group :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input name=\"group123\" type=\"radio\" id=\"radio_123\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_123\" class=\"d-block\">Sales Person</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group456\" type=\"radio\" id=\"radio_456\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_456\">Customer</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Communications :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_123\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_123\" class=\"d-block\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_234\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_234\" class=\"d-block\">SMS</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_345\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_345\" class=\"d-block\">Phone</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t<h6>Billing Setup</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"int123\">Cardholder Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"int123\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"int234\">Card Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"int234\" placeholder=\"\" value=\"23124567854356\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"intType1\">Exp Month :</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"intType1\" data-placeholder=\"Exp Month\" name=\"intType1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01\">01</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02\">02</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03\">03</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04\" selected=\"\">04</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05\">05</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06\">06</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07\">07</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\">08</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\">09</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\">12</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"intType1\">Exp Year :</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"intType12\" data-placeholder=\"Exp Year\" name=\"intType12\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2018\">2018</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2019\">2019</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2020\">2020</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2021\" selected=\"\">2021</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2022\">2022</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2023\">2023</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2024\">2024</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"intType1\">CVV :</label>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"billing_card_cvv\" placeholder=\"\" value=\"450\" >
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Location1\">Location :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"Location1\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline12\">Address Line 1 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline12\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline13\">Address Line 1 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline13\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Delivery Type :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_1\" class=\"d-block\">Standart Delevery</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_2\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_2\">Fast Delevery</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t<h6>Confirmation</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"decisions1\">Comments</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"decisions\" id=\"decisions1\" rows=\"4\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_1\" class=\"d-block\">Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement</label>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- /.box-body -->
\t\t  </div>
\t\t  <!-- /.box -->

\t\t  <!-- vertical wizard -->
\t\t  <div class=\"box box-default\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t  <h4 class=\"box-title\">Step wizard</h4>
\t\t\t  <h6 class=\"box-subtitle\">You can find the <a href=\"http://www.jquery-steps.com\" target=\"_blank\">offical website</a></h6>
\t\t\t</div>
\t\t\t<!-- /.box-header -->
\t\t\t<div class=\"box-body wizard-content\">
\t\t\t\t<form action=\"#\" class=\"tab-wizard vertical wizard-circle\">
\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t<h6>Personal Info</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"firstName1\">First Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"firstName1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"lastName2\">Last Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastName2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"emailAddress2\">Email Address :</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"emailAddress2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"phoneNumber2\">Phone Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"phoneNumber2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"location2\">Select City :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"location2\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Amsterdam\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Berlin\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Frankfurt\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"date2\">Date of Birth :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"date2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t<h6>Job Status</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"jobTitle6\">Job Title :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"jobTitle6\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"videoUrl2\">Company Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"videoUrl2\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"shortDescription2\">Job Description :</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"shortDescription\" id=\"shortDescription2\" rows=\"6\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t<h6>Interview</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"int2\">Interview For :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"int2\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"intType3\">Interview Type :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"intType3\" data-placeholder=\"Type to search cities\" name=\"intType3\">
\t\t\t\t\t\t\t\t\t\t<option value=\"Banquet\">Normal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Fund Raiser\">Difficult</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dinner Party\">Hard</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Location4\">Location :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"Location4\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"jobTitle5\">Interview Date :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"jobTitle5\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Requirements :</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group3\" type=\"radio\" id=\"radio_5\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_5\" class=\"d-block\">Employee</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group3\" type=\"radio\" id=\"radio_6\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_6\">Contract</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t<h6>Remark</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"behName2\">Behaviour :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"behName2\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants5\">Confidance</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"participants5\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants6\">Result</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"participants6\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Result</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Selected\">Selected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Rejected\">Rejected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Call Second-time\">Call Second-time</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"decisions3\">Comments</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"decisions\" id=\"decisions3\" rows=\"4\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Rate Interviwer :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_11\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_11\" class=\"d-block\">1 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_12\" class=\"d-block\">2 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_13\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_13\" class=\"d-block\">3 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_14\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_14\" class=\"d-block\">4 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_15\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_15\" class=\"d-block\">5 star</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- /.box-body -->
\t\t  </div>
\t\t  <!-- /.box -->

\t\t  <!-- Validation wizard -->
\t\t  <div class=\"box box-default\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t  <h4 class=\"box-title\">Step wizard with validation</h4>
\t\t\t  <h6 class=\"box-subtitle\">You can us the validation like what we did</h6>
\t\t\t</div>
\t\t\t<!-- /.box-header -->
\t\t\t<div class=\"box-body wizard-content\">
\t\t\t\t<form action=\"#\" class=\"validation-wizard wizard-circle\">
\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t<h6>Step 1</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wfirstName2\"> First Name : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"wfirstName2\" name=\"firstName\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wlastName2\"> Last Name : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"wlastName2\" name=\"lastName\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wemailAddress2\"> Email Address : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control required\" id=\"wemailAddress2\" name=\"emailAddress\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wphoneNumber2\">Phone Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"wphoneNumber2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wlocation2\"> Select City : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"wlocation2\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wdate2\">Date of Birth :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"wdate2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t<h6>Step 2</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"jobTitle3\">Company Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"jobTitle3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"webUrl3\">Company URL :</label>
\t\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form-control required\" id=\"webUrl3\" name=\"webUrl3\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"shortDescription3\">Short Description :</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"shortDescription\" id=\"shortDescription3\" rows=\"6\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t<h6>Step 3</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wint1\">Interview For :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"wint1\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wintType1\">Interview Type :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"wintType1\" data-placeholder=\"Type to search cities\" name=\"wintType1\">
\t\t\t\t\t\t\t\t\t\t<option value=\"Banquet\">Normal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Fund Raiser\">Difficult</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dinner Party\">Hard</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wLocation1\">Location :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"wLocation1\" name=\"wlocation\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wjobTitle4\">Interview Date :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control required\" id=\"wjobTitle4\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Requirements :</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group2\" type=\"radio\" id=\"radio_3\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_3\" class=\"d-block\">Employee</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group2\" type=\"radio\" id=\"radio_4\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_4\">Contract</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t<h6>Step 4</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"behName3\">Behaviour :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"behName3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants3\">Confidance</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"participants3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants4\">Result</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"participants4\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Result</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Selected\">Selected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Rejected\">Rejected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Call Second-time\">Call Second-time</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"decisions2\">Comments</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"decisions\" id=\"decisions2\" rows=\"4\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Rate Interviwer :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_6\" class=\"d-block\">1 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_7\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_7\" class=\"d-block\">2 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_8\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_8\" class=\"d-block\">3 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_9\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_9\" class=\"d-block\">4 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_10\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_10\" class=\"d-block\">5 star</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- /.box-body -->
\t\t  </div>
\t\t  <!-- /.box -->

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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"../assets/vendor_components/jquery-steps-master/build/jquery.steps.js\"></script>
    <script src=\"../assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js\"></script>
    <script src=\"../assets/vendor_components/sweetalert/sweetalert.min.js\"></script>
    <script src=\"js/pages/steps.js\"></script>
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
        return "forms_wizard.html.twig";
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

    <title>Sunny Admin - Dashboard  Form Wizard </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Form Wizard</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Forms</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Form Wizard</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t  

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t <!-- Step wizard -->
\t\t  <div class=\"box box-default\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t  <h4 class=\"box-title\">Client Registration</h4>
\t\t\t  <h6 class=\"box-subtitle\">You can find the <a href=\"http://www.jquery-steps.com\" target=\"_blank\">offical website </a></h6>\t\t
\t\t\t</div>
\t\t\t<!-- /.box-header -->
\t\t\t<div class=\"box-body wizard-content\">
\t\t\t\t<form action=\"#\" class=\"tab-wizard wizard-circle\">
\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t<h6>Client Information</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"firstName5\">First Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"firstName5\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"lastName1\">Last Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastName1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"emailAddress1\">Email Address :</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"emailAddress1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"phoneNumber1\">Phone Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"phoneNumber1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline1\">Address Line 1 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline2\">Address Line 2 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"location3\">Select City :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"location3\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Amsterdam\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Berlin\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Frankfurt\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"date1\">Date of Birth :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"date1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t<h6>Account Setup</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"url123\">URL :</label>
\t\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form-control\" id=\"url123\" placeholder=\"http://\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"username123\">Username :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username123\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"password123\">Password :</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password123\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>User Group :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input name=\"group123\" type=\"radio\" id=\"radio_123\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_123\" class=\"d-block\">Sales Person</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group456\" type=\"radio\" id=\"radio_456\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_456\">Customer</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Communications :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_123\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_123\" class=\"d-block\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_234\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_234\" class=\"d-block\">SMS</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_345\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_345\" class=\"d-block\">Phone</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t<h6>Billing Setup</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"int123\">Cardholder Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"int123\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"int234\">Card Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"int234\" placeholder=\"\" value=\"23124567854356\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"intType1\">Exp Month :</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"intType1\" data-placeholder=\"Exp Month\" name=\"intType1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01\">01</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02\">02</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03\">03</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04\" selected=\"\">04</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05\">05</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06\">06</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07\">07</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\">08</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\">09</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\">12</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"intType1\">Exp Year :</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"intType12\" data-placeholder=\"Exp Year\" name=\"intType12\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2018\">2018</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2019\">2019</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2020\">2020</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2021\" selected=\"\">2021</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2022\">2022</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2023\">2023</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2024\">2024</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"intType1\">CVV :</label>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"billing_card_cvv\" placeholder=\"\" value=\"450\" >
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Location1\">Location :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"Location1\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline12\">Address Line 1 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline12\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"addressline13\">Address Line 1 :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"addressline13\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Delivery Type :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_1\" class=\"d-block\">Standart Delevery</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group1\" type=\"radio\" id=\"radio_2\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_2\">Fast Delevery</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t<h6>Confirmation</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"decisions1\">Comments</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"decisions\" id=\"decisions1\" rows=\"4\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_1\" class=\"d-block\">Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement</label>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- /.box-body -->
\t\t  </div>
\t\t  <!-- /.box -->

\t\t  <!-- vertical wizard -->
\t\t  <div class=\"box box-default\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t  <h4 class=\"box-title\">Step wizard</h4>
\t\t\t  <h6 class=\"box-subtitle\">You can find the <a href=\"http://www.jquery-steps.com\" target=\"_blank\">offical website</a></h6>
\t\t\t</div>
\t\t\t<!-- /.box-header -->
\t\t\t<div class=\"box-body wizard-content\">
\t\t\t\t<form action=\"#\" class=\"tab-wizard vertical wizard-circle\">
\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t<h6>Personal Info</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"firstName1\">First Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"firstName1\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"lastName2\">Last Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastName2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"emailAddress2\">Email Address :</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"emailAddress2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"phoneNumber2\">Phone Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"phoneNumber2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"location2\">Select City :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"location2\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Amsterdam\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Berlin\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Frankfurt\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"date2\">Date of Birth :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"date2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t<h6>Job Status</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"jobTitle6\">Job Title :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"jobTitle6\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"videoUrl2\">Company Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"videoUrl2\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"shortDescription2\">Job Description :</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"shortDescription\" id=\"shortDescription2\" rows=\"6\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t<h6>Interview</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"int2\">Interview For :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"int2\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"intType3\">Interview Type :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"intType3\" data-placeholder=\"Type to search cities\" name=\"intType3\">
\t\t\t\t\t\t\t\t\t\t<option value=\"Banquet\">Normal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Fund Raiser\">Difficult</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dinner Party\">Hard</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Location4\">Location :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"Location4\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"jobTitle5\">Interview Date :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"jobTitle5\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Requirements :</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group3\" type=\"radio\" id=\"radio_5\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_5\" class=\"d-block\">Employee</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group3\" type=\"radio\" id=\"radio_6\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_6\">Contract</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t<h6>Remark</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"behName2\">Behaviour :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"behName2\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants5\">Confidance</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"participants5\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants6\">Result</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control\" id=\"participants6\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Result</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Selected\">Selected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Rejected\">Rejected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Call Second-time\">Call Second-time</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"decisions3\">Comments</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"decisions\" id=\"decisions3\" rows=\"4\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Rate Interviwer :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_11\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_11\" class=\"d-block\">1 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_12\" class=\"d-block\">2 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_13\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_13\" class=\"d-block\">3 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_14\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_14\" class=\"d-block\">4 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_15\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_15\" class=\"d-block\">5 star</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- /.box-body -->
\t\t  </div>
\t\t  <!-- /.box -->

\t\t  <!-- Validation wizard -->
\t\t  <div class=\"box box-default\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t  <h4 class=\"box-title\">Step wizard with validation</h4>
\t\t\t  <h6 class=\"box-subtitle\">You can us the validation like what we did</h6>
\t\t\t</div>
\t\t\t<!-- /.box-header -->
\t\t\t<div class=\"box-body wizard-content\">
\t\t\t\t<form action=\"#\" class=\"validation-wizard wizard-circle\">
\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t<h6>Step 1</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wfirstName2\"> First Name : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"wfirstName2\" name=\"firstName\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wlastName2\"> Last Name : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"wlastName2\" name=\"lastName\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wemailAddress2\"> Email Address : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control required\" id=\"wemailAddress2\" name=\"emailAddress\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wphoneNumber2\">Phone Number :</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"wphoneNumber2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wlocation2\"> Select City : <span class=\"danger\">*</span> </label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"wlocation2\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wdate2\">Date of Birth :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"wdate2\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t<h6>Step 2</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"jobTitle3\">Company Name :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"jobTitle3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"webUrl3\">Company URL :</label>
\t\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form-control required\" id=\"webUrl3\" name=\"webUrl3\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"shortDescription3\">Short Description :</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"shortDescription\" id=\"shortDescription3\" rows=\"6\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t<h6>Step 3</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wint1\">Interview For :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"wint1\"> </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wintType1\">Interview Type :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"wintType1\" data-placeholder=\"Type to search cities\" name=\"wintType1\">
\t\t\t\t\t\t\t\t\t\t<option value=\"Banquet\">Normal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Fund Raiser\">Difficult</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dinner Party\">Hard</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wLocation1\">Location :</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"wLocation1\" name=\"wlocation\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select City</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"wjobTitle4\">Interview Date :</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control required\" id=\"wjobTitle4\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Requirements :</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group2\" type=\"radio\" id=\"radio_3\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_3\" class=\"d-block\">Employee</label>
\t\t\t\t\t\t\t\t\t\t<input name=\"group2\" type=\"radio\" id=\"radio_4\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"radio_4\">Contract</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t<h6>Step 4</h6>
\t\t\t\t\t<section>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"behName3\">Behaviour :</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"behName3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants3\">Confidance</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control required\" id=\"participants3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"participants4\">Result</label>
\t\t\t\t\t\t\t\t\t<select class=\"custom-select form-control required\" id=\"participants4\" name=\"location\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Result</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Selected\">Selected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Rejected\">Rejected</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Call Second-time\">Call Second-time</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"decisions2\">Comments</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"decisions\" id=\"decisions2\" rows=\"4\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Rate Interviwer :</label>
\t\t\t\t\t\t\t\t\t<div class=\"c-inputs-stacked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_6\" class=\"d-block\">1 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_7\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_7\" class=\"d-block\">2 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_8\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_8\" class=\"d-block\">3 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_9\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_9\" class=\"d-block\">4 star</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox_10\">
\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox_10\" class=\"d-block\">5 star</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- /.box-body -->
\t\t  </div>
\t\t  <!-- /.box -->

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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"../assets/vendor_components/jquery-steps-master/build/jquery.steps.js\"></script>
    <script src=\"../assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js\"></script>
    <script src=\"../assets/vendor_components/sweetalert/sweetalert.min.js\"></script>
    <script src=\"js/pages/steps.js\"></script>
\t
\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t
    
\t
</body>
</html>
", "forms_wizard.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\forms_wizard.html.twig");
    }
}
