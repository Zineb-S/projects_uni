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

/* icons_glyphicons.html.twig */
class __TwigTemplate_e406e57a2d2feb802db49e59695baf02 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons_glyphicons.html.twig"));

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
\t\t<a href=\"mailbox_inbox.html\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Email\"><i class=\"ti-email\"></i></a>
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
\t\t\t\t\t<h3 class=\"page-title\">Glyphicons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Glyphicons</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box box-body\">

\t\t\t\t<ul class=\"bs-glyphicons\">
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-asterisk\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-asterisk</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-plus</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-euro\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-euro</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eur\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eur</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-minus</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cloud\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cloud</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-envelope</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pencil</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-glass\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-glass</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-music\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-music</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-search</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-heart\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-heart</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-star</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-star-empty</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-user</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-film\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-film</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-th-large\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-th-large</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-th</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-th-list\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-th-list</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ok</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-remove</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-zoom-in\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-zoom-in</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-zoom-out\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-zoom-out</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-off\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-off</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-signal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-signal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cog\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cog</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-trash</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-home\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-home</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-file</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-time\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-time</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-road\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-road</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-download-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-download-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-download\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-download</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-upload\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-upload</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-inbox\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-inbox</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-play-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-play-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-repeat\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-repeat</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-refresh\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-refresh</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-list-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-lock\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-lock</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-flag\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-flag</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-headphones\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-headphones</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-volume-off\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-volume-off</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-volume-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-volume-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-volume-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-volume-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-qrcode\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-qrcode</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-barcode\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-barcode</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tag\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tag</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tags\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tags</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-book\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-book</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bookmark\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bookmark</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-print\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-print</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-camera\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-camera</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-font\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-font</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bold\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bold</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-italic\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-italic</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-height\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-height</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-width\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-width</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-center\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-center</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-justify\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-justify</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-list\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-list</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-indent-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-indent-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-indent-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-indent-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-facetime-video\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-facetime-video</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-picture\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-picture</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-map-marker\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-map-marker</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-adjust\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-adjust</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tint\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tint</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-edit</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-share\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-share</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-check\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-check</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-move\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-move</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-step-backward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-step-backward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fast-backward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fast-backward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-backward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-backward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-play\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-play</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pause\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pause</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-stop\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-stop</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-forward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-forward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fast-forward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fast-forward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-step-forward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-step-forward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eject\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eject</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-plus-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-plus-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-minus-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-minus-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-remove-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ok-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-question-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-question-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-info-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-info-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-screenshot\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-screenshot</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-remove-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ok-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ban-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ban-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-share-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-share-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-full\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-full</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-small\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-small</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-exclamation-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-exclamation-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-gift\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-gift</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-leaf\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-leaf</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fire\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fire</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eye-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eye-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eye-close\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eye-close</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-warning-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-warning-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-plane\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-plane</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-calendar\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-calendar</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-random\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-random</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-comment\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-comment</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-magnet\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-magnet</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-retweet\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-retweet</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-shopping-cart\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-shopping-cart</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-folder-close\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-folder-close</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-folder-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-folder-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-vertical\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-vertical</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-horizontal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-horizontal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hdd\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hdd</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bullhorn\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bullhorn</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bell\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bell</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-certificate\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-certificate</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-thumbs-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-thumbs-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-globe\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-globe</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-wrench\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-wrench</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tasks\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tasks</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-filter\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-filter</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-briefcase\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-briefcase</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fullscreen\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fullscreen</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-dashboard\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-dashboard</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-paperclip</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-heart-empty\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-heart-empty</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-link\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-link</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-phone\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-phone</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pushpin\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pushpin</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-usd\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-usd</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-gbp\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-gbp</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-alphabet\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-alphabet</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-alphabet-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-alphabet-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-order\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-order</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-order-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-order-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-attributes\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-attributes</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-attributes-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-attributes-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-unchecked\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-unchecked</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-expand\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-expand</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-collapse-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-collapse-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-collapse-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-collapse-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-log-in\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-log-in</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-flash\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-flash</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-log-out</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-new-window\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-new-window</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-record\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-record</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-save\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-save</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-saved\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-saved</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-import\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-import</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-export\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-export</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-send\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-send</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-disk\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-disk</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-saved\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-saved</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-remove\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-remove</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-save\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-save</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-credit-card\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-credit-card</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-transfer\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-transfer</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cutlery\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cutlery</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-header\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-header</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-compressed\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-compressed</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-earphone\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-earphone</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-phone-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-phone-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tower\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tower</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-stats\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-stats</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sd-video\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sd-video</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hd-video\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hd-video</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-subtitles\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-subtitles</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-stereo\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-stereo</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-dolby\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-dolby</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-5-1\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-5-1</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-6-1\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-6-1</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-7-1\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-7-1</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-copyright-mark\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-copyright-mark</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-registration-mark\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-registration-mark</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cloud-download\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cloud-download</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cloud-upload\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cloud-upload</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tree-conifer\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tree-conifer</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tree-deciduous\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tree-deciduous</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cd\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cd</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-save-file\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-save-file</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-open-file\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-open-file</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-level-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-level-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-copy\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-copy</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-paste\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-paste</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-alert\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-alert</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-equalizer\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-equalizer</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-king\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-king</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-queen\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-queen</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pawn\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pawn</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bishop\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bishop</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-knight\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-knight</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-baby-formula\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-baby-formula</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tent\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tent</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-blackboard\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-blackboard</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bed\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bed</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-apple\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-apple</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-erase\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-erase</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hourglass\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hourglass</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-lamp\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-lamp</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-duplicate\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-duplicate</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-piggy-bank\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-piggy-bank</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-scissors\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-scissors</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bitcoin\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bitcoin</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-btc\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-btc</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-xbt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-xbt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-yen\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-yen</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-jpy\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-jpy</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ruble\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ruble</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-rub\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-rub</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-scale\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-scale</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ice-lolly\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ice-lolly</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ice-lolly-tasted\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ice-lolly-tasted</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-education\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-education</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-option-horizontal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-option-horizontal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-option-vertical\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-option-vertical</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-hamburger\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-hamburger</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-modal-window\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-modal-window</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-oil\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-oil</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-grain\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-grain</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sunglasses\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sunglasses</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-size\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-size</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-color\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-color</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-background\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-background</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-top\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-top</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-bottom\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-bottom</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-horizontal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-horizontal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-vertical\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-vertical</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-bottom\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-bottom</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-top\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-top</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-console\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-console</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-superscript\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-superscript</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-subscript\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-subscript</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-up</span>
\t\t\t\t  </li>
\t\t\t\t</ul>

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
        return "icons_glyphicons.html.twig";
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
\t\t<a href=\"mailbox_inbox.html\" class=\"link\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Email\"><i class=\"ti-email\"></i></a>
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
\t\t\t\t\t<h3 class=\"page-title\">Glyphicons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Glyphicons</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box box-body\">

\t\t\t\t<ul class=\"bs-glyphicons\">
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-asterisk\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-asterisk</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-plus</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-euro\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-euro</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eur\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eur</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-minus</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cloud\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cloud</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-envelope</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pencil</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-glass\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-glass</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-music\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-music</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-search</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-heart\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-heart</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-star</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-star-empty</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-user</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-film\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-film</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-th-large\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-th-large</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-th</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-th-list\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-th-list</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ok</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-remove</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-zoom-in\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-zoom-in</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-zoom-out\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-zoom-out</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-off\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-off</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-signal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-signal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cog\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cog</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-trash</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-home\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-home</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-file</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-time\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-time</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-road\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-road</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-download-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-download-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-download\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-download</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-upload\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-upload</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-inbox\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-inbox</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-play-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-play-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-repeat\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-repeat</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-refresh\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-refresh</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-list-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-lock\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-lock</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-flag\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-flag</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-headphones\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-headphones</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-volume-off\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-volume-off</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-volume-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-volume-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-volume-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-volume-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-qrcode\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-qrcode</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-barcode\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-barcode</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tag\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tag</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tags\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tags</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-book\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-book</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bookmark\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bookmark</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-print\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-print</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-camera\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-camera</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-font\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-font</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bold\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bold</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-italic\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-italic</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-height\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-height</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-width\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-width</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-center\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-center</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-align-justify\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-align-justify</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-list\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-list</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-indent-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-indent-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-indent-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-indent-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-facetime-video\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-facetime-video</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-picture\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-picture</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-map-marker\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-map-marker</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-adjust\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-adjust</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tint\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tint</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-edit</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-share\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-share</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-check\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-check</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-move\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-move</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-step-backward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-step-backward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fast-backward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fast-backward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-backward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-backward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-play\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-play</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pause\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pause</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-stop\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-stop</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-forward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-forward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fast-forward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fast-forward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-step-forward\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-step-forward</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eject\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eject</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-plus-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-plus-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-minus-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-minus-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-remove-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ok-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-question-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-question-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-info-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-info-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-screenshot\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-screenshot</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-remove-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ok-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ok-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ban-circle\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ban-circle</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-arrow-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-share-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-share-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-full\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-full</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-small\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-small</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-exclamation-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-exclamation-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-gift\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-gift</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-leaf\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-leaf</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fire\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fire</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eye-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eye-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-eye-close\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-eye-close</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-warning-sign\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-warning-sign</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-plane\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-plane</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-calendar\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-calendar</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-random\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-random</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-comment\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-comment</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-magnet\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-magnet</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-chevron-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-retweet\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-retweet</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-shopping-cart\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-shopping-cart</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-folder-close\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-folder-close</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-folder-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-folder-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-vertical\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-vertical</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-resize-horizontal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-resize-horizontal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hdd\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hdd</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bullhorn\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bullhorn</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bell\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bell</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-certificate\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-certificate</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-thumbs-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-thumbs-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hand-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-circle-arrow-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-circle-arrow-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-globe\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-globe</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-wrench\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-wrench</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tasks\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tasks</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-filter\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-filter</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-briefcase\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-briefcase</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-fullscreen\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-fullscreen</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-dashboard\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-dashboard</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-paperclip\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-paperclip</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-heart-empty\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-heart-empty</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-link\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-link</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-phone\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-phone</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pushpin\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pushpin</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-usd\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-usd</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-gbp\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-gbp</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-alphabet\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-alphabet</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-alphabet-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-alphabet-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-order\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-order</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-order-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-order-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-attributes\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-attributes</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sort-by-attributes-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sort-by-attributes-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-unchecked\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-unchecked</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-expand\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-expand</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-collapse-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-collapse-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-collapse-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-collapse-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-log-in\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-log-in</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-flash\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-flash</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-log-out</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-new-window\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-new-window</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-record\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-record</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-save\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-save</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-saved\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-saved</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-import\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-import</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-export\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-export</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-send\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-send</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-disk\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-disk</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-saved\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-saved</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-remove\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-remove</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-save\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-save</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-open\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-floppy-open</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-credit-card\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-credit-card</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-transfer\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-transfer</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cutlery\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cutlery</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-header\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-header</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-compressed\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-compressed</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-earphone\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-earphone</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-phone-alt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-phone-alt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tower\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tower</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-stats\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-stats</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sd-video\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sd-video</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hd-video\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hd-video</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-subtitles\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-subtitles</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-stereo\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-stereo</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-dolby\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-dolby</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-5-1\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-5-1</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-6-1\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-6-1</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sound-7-1\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sound-7-1</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-copyright-mark\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-copyright-mark</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-registration-mark\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-registration-mark</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cloud-download\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cloud-download</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cloud-upload\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cloud-upload</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tree-conifer\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tree-conifer</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tree-deciduous\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tree-deciduous</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-cd\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-cd</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-save-file\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-save-file</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-open-file\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-open-file</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-level-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-level-up</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-copy\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-copy</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-paste\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-paste</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-alert\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-alert</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-equalizer\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-equalizer</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-king\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-king</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-queen\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-queen</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pawn\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-pawn</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bishop\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bishop</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-knight\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-knight</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-baby-formula\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-baby-formula</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-tent\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-tent</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-blackboard\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-blackboard</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bed\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bed</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-apple\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-apple</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-erase\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-erase</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-hourglass\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-hourglass</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-lamp\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-lamp</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-duplicate\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-duplicate</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-piggy-bank\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-piggy-bank</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-scissors\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-scissors</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-bitcoin\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-bitcoin</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-btc\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-btc</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-xbt\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-xbt</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-yen\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-yen</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-jpy\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-jpy</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ruble\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ruble</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-rub\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-rub</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-scale\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-scale</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ice-lolly\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ice-lolly</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-ice-lolly-tasted\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-ice-lolly-tasted</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-education\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-education</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-option-horizontal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-option-horizontal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-option-vertical\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-option-vertical</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-hamburger\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-hamburger</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-modal-window\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-modal-window</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-oil\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-oil</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-grain\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-grain</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-sunglasses\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-sunglasses</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-size\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-size</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-color\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-color</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-text-background\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-text-background</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-top\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-top</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-bottom\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-bottom</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-horizontal\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-horizontal</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-vertical\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-vertical</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-object-align-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-object-align-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-bottom\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-bottom</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-triangle-top\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-triangle-top</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-console\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-console</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-superscript\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-superscript</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-subscript\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-subscript</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-left\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-left</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-right\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-right</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-down\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-down</span>
\t\t\t\t  </li>
\t\t\t\t  <li>
\t\t\t\t\t<span class=\"glyphicon glyphicon-menu-up\"></span>
\t\t\t\t\t<span class=\"glyphicon-class\">glyphicon glyphicon-menu-up</span>
\t\t\t\t  </li>
\t\t\t\t</ul>

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
", "icons_glyphicons.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\icons_glyphicons.html.twig");
    }
}
