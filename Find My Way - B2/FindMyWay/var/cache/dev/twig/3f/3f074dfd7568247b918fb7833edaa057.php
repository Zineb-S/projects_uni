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

/* icons_flag.html.twig */
class __TwigTemplate_f3b48a07bda587ce350dcc106181c99f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons_flag.html.twig"));

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
\t\t\t\t\t<h3 class=\"page-title\">Flag Icons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Flag Icons</li>
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
\t\t\t\t\t<h4 class=\"box-title\">Flag icons</h4>
\t\t\t\t\t<h6 class=\"box-subtitle mb-15\">You can use any icons with class <code>flag-icon flag-icon-us</code></h6>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ad\" title=\"ad\" id=\"ad\"></i> AD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ae\" title=\"ae\" id=\"ae\"></i> AE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-af\" title=\"af\" id=\"af\"></i> AF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ag\" title=\"ag\" id=\"ag\"></i> AG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ai\" title=\"ai\" id=\"ai\"></i> AU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-al\" title=\"al\" id=\"al\"></i> AL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-am\" title=\"am\" id=\"am\"></i> AM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ao\" title=\"ao\" id=\"ao\"></i> AO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-aq\" title=\"aq\" id=\"aq\"></i> AQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ar\" title=\"ar\" id=\"ar\"></i> AR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-as\" title=\"as\" id=\"as\"></i> AS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-at\" title=\"at\" id=\"at\"></i> AT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-au\" title=\"au\" id=\"au\"></i> AU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-aw\" title=\"aw\" id=\"aw\"></i> AW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ax\" title=\"ax\" id=\"ax\"></i> AX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-az\" title=\"az\" id=\"az\"></i> AZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ba\" title=\"ba\" id=\"ba\"></i> BA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bb\" title=\"bb\" id=\"bb\"></i> BB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bd\" title=\"bd\" id=\"bd\"></i> BD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-be\" title=\"be\" id=\"be\"></i> BE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bf\" title=\"bf\" id=\"bf\"></i> BF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bg\" title=\"bg\" id=\"bg\"></i> BG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bh\" title=\"bh\" id=\"bh\"></i> BH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bi\" title=\"bi\" id=\"bi\"></i> BI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bj\" title=\"bj\" id=\"bj\"></i> BJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bl\" title=\"bl\" id=\"bl\"></i> BL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bm\" title=\"bm\" id=\"bm\"></i> BM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bn\" title=\"bn\" id=\"bn\"></i> BN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bo\" title=\"bo\" id=\"bo\"></i> BO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bq\" title=\"bq\" id=\"bq\"></i> BQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-br\" title=\"br\" id=\"br\"></i> BR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bs\" title=\"bs\" id=\"bs\"></i> BS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bt\" title=\"bt\" id=\"bt\"></i> BT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bv\" title=\"bv\" id=\"bv\"></i> BV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bw\" title=\"bw\" id=\"bw\"></i> BW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-by\" title=\"by\" id=\"by\"></i> BY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bz\" title=\"bz\" id=\"bz\"></i> BZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ca\" title=\"ca\" id=\"ca\"></i> CA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cc\" title=\"cc\" id=\"cc\"></i> CC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cd\" title=\"cd\" id=\"cd\"></i> CD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cf\" title=\"cf\" id=\"cf\"></i> CF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cg\" title=\"cg\" id=\"cg\"></i> CG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ch\" title=\"ch\" id=\"ch\"></i> CH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ci\" title=\"ci\" id=\"ci\"></i> CI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ck\" title=\"ck\" id=\"ck\"></i> CK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cl\" title=\"cl\" id=\"cl\"></i> CL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cm\" title=\"cm\" id=\"cm\"></i> CM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cn\" title=\"cn\" id=\"cn\"></i> CN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-co\" title=\"co\" id=\"co\"></i> CO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cr\" title=\"cr\" id=\"cr\"></i> CR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cu\" title=\"cu\" id=\"cu\"></i> CU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cv\" title=\"cv\" id=\"cv\"></i> CV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cw\" title=\"cw\" id=\"cw\"></i> CW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cx\" title=\"cx\" id=\"cx\"></i> CX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cy\" title=\"cy\" id=\"cy\"></i> CY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cz\" title=\"cz\" id=\"cz\"></i> CZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-de\" title=\"de\" id=\"de\"></i> DE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dj\" title=\"dj\" id=\"dj\"></i> DJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dk\" title=\"dk\" id=\"dk\"></i> DK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dm\" title=\"dm\" id=\"dm\"></i> DM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-do\" title=\"do\" id=\"do\"></i> DO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dz\" title=\"dz\" id=\"dz\"></i> DZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ec\" title=\"ec\" id=\"ec\"></i> EC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ee\" title=\"ee\" id=\"ee\"></i> EE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-eg\" title=\"eg\" id=\"eg\"></i> EG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-eh\" title=\"eh\" id=\"eh\"></i> EH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-er\" title=\"er\" id=\"er\"></i> ER</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-es\" title=\"es\" id=\"es\"></i> ES</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-et\" title=\"et\" id=\"et\"></i> ET</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fi\" title=\"fi\" id=\"fi\"></i> FI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fj\" title=\"fj\" id=\"fj\"></i> FJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fk\" title=\"fk\" id=\"fk\"></i> FK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fm\" title=\"fm\" id=\"fm\"></i> FM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fo\" title=\"fo\" id=\"fo\"></i> FO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fr\" title=\"fr\" id=\"fr\"></i> FR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ga\" title=\"ga\" id=\"ga\"></i> GA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gb\" title=\"gb\" id=\"gb\"></i> GB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gd\" title=\"gd\" id=\"gd\"></i> GD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ge\" title=\"ge\" id=\"ge\"></i> GE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gf\" title=\"gf\" id=\"gf\"></i> GF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gg\" title=\"gg\" id=\"gg\"></i> GG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gh\" title=\"gh\" id=\"gh\"></i> GH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gi\" title=\"gi\" id=\"gi\"></i> GI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gl\" title=\"gl\" id=\"gl\"></i> GL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gm\" title=\"gm\" id=\"gm\"></i> GM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gn\" title=\"gn\" id=\"gn\"></i> GN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gp\" title=\"gp\" id=\"gp\"></i> GP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gq\" title=\"gq\" id=\"gq\"></i> GQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gr\" title=\"gr\" id=\"gr\"></i> GR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gs\" title=\"gs\" id=\"gs\"></i> GS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gt\" title=\"gt\" id=\"gt\"></i> GT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gu\" title=\"gu\" id=\"gu\"></i> GU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gw\" title=\"gw\" id=\"gw\"></i> GW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gy\" title=\"gy\" id=\"gy\"></i> GY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hk\" title=\"hk\" id=\"hk\"></i> HK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hm\" title=\"hm\" id=\"hm\"></i> HM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hn\" title=\"hn\" id=\"hn\"></i> HN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hr\" title=\"hr\" id=\"hr\"></i> HR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ht\" title=\"ht\" id=\"ht\"></i> HT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hu\" title=\"hu\" id=\"hu\"></i> HU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-id\" title=\"id\" id=\"id\"></i> ID</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ie\" title=\"ie\" id=\"ie\"></i> IE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-il\" title=\"il\" id=\"il\"></i> IL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-im\" title=\"im\" id=\"im\"></i> IM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-in\" title=\"in\" id=\"in\"></i> IN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-io\" title=\"io\" id=\"io\"></i> IO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-iq\" title=\"iq\" id=\"iq\"></i> IQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ir\" title=\"ir\" id=\"ir\"></i> IR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-is\" title=\"is\" id=\"is\"></i> IS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-it\" title=\"it\" id=\"it\"></i> IT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-je\" title=\"je\" id=\"je\"></i> JE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-jm\" title=\"jm\" id=\"jm\"></i> JM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-jo\" title=\"jo\" id=\"jo\"></i> JO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-jp\" title=\"jp\" id=\"jp\"></i> JP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ke\" title=\"ke\" id=\"ke\"></i> KE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kg\" title=\"kg\" id=\"kg\"></i> KG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kh\" title=\"kh\" id=\"kh\"></i> KH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ki\" title=\"ki\" id=\"ki\"></i> KI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-km\" title=\"km\" id=\"km\"></i> KM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kn\" title=\"kn\" id=\"kn\"></i> KN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kp\" title=\"kp\" id=\"kp\"></i> KP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kr\" title=\"kr\" id=\"kr\"></i> KR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kw\" title=\"kw\" id=\"kw\"></i> KW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ky\" title=\"ky\" id=\"ky\"></i> KY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kz\" title=\"kz\" id=\"kz\"></i> KZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-la\" title=\"la\" id=\"la\"></i> LA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lb\" title=\"lb\" id=\"lb\"></i> LB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lc\" title=\"lc\" id=\"lc\"></i> LC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-li\" title=\"li\" id=\"li\"></i> LI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lk\" title=\"lk\" id=\"lk\"></i> LK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lr\" title=\"lr\" id=\"lr\"></i> LR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ls\" title=\"ls\" id=\"ls\"></i> LS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lt\" title=\"lt\" id=\"lt\"></i> LT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lu\" title=\"lu\" id=\"lu\"></i> LU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lv\" title=\"lv\" id=\"lv\"></i> LV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ly\" title=\"ly\" id=\"ly\"></i> LY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ma\" title=\"ma\" id=\"ma\"></i> MA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mc\" title=\"mc\" id=\"mc\"></i> MC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-md\" title=\"md\" id=\"md\"></i> MD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-me\" title=\"me\" id=\"me\"></i> ME</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mf\" title=\"mf\" id=\"mf\"></i> MF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mg\" title=\"mg\" id=\"mg\"></i> MG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mh\" title=\"mh\" id=\"mh\"></i> MH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mk\" title=\"mk\" id=\"mk\"></i> MK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ml\" title=\"ml\" id=\"ml\"></i> ML</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mm\" title=\"mm\" id=\"mm\"></i> MM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mn\" title=\"mn\" id=\"mn\"></i> MN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mo\" title=\"mo\" id=\"mo\"></i> MO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mp\" title=\"mp\" id=\"mp\"></i> MP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mq\" title=\"mq\" id=\"mq\"></i> MQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mr\" title=\"mr\" id=\"mr\"></i> MR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ms\" title=\"ms\" id=\"ms\"></i> MS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mt\" title=\"mt\" id=\"mt\"></i> MT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mu\" title=\"mu\" id=\"mu\"></i> MU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mv\" title=\"mv\" id=\"mv\"></i> MV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mw\" title=\"mw\" id=\"mw\"></i> MW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mx\" title=\"mx\" id=\"mx\"></i> MX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-my\" title=\"my\" id=\"my\"></i> MY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mz\" title=\"mz\" id=\"mz\"></i> MZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-na\" title=\"na\" id=\"na\"></i> NA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nc\" title=\"nc\" id=\"nc\"></i> NC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ne\" title=\"ne\" id=\"ne\"></i> NE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nf\" title=\"nf\" id=\"nf\"></i> NF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ng\" title=\"ng\" id=\"ng\"></i> NG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ni\" title=\"ni\" id=\"ni\"></i> NI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nl\" title=\"nl\" id=\"nl\"></i> NL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-no\" title=\"no\" id=\"no\"></i> NO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-np\" title=\"np\" id=\"np\"></i> NP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nr\" title=\"nr\" id=\"nr\"></i> NR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nu\" title=\"nu\" id=\"nu\"></i> NU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nz\" title=\"nz\" id=\"nz\"></i> NZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-om\" title=\"om\" id=\"om\"></i> OM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pa\" title=\"pa\" id=\"pa\"></i> PA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pe\" title=\"pe\" id=\"pe\"></i> PE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pf\" title=\"pf\" id=\"pf\"></i> PF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pg\" title=\"pg\" id=\"pg\"></i> PG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ph\" title=\"ph\" id=\"ph\"></i> PH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pk\" title=\"pk\" id=\"pk\"></i> PK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pl\" title=\"pl\" id=\"pl\"></i> PL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pm\" title=\"pm\" id=\"pm\"></i> PM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pn\" title=\"pn\" id=\"pn\"></i> PN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pr\" title=\"pr\" id=\"pr\"></i> PR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ps\" title=\"ps\" id=\"ps\"></i> PS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pt\" title=\"pt\" id=\"pt\"></i> PT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pw\" title=\"pw\" id=\"pw\"></i> PW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-py\" title=\"py\" id=\"py\"></i> PY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-qa\" title=\"qa\" id=\"qa\"></i> QA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-re\" title=\"re\" id=\"re\"></i> RE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ro\" title=\"ro\" id=\"ro\"></i> RO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-rs\" title=\"rs\" id=\"rs\"></i> RS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ru\" title=\"ru\" id=\"ru\"></i> RU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-rw\" title=\"rw\" id=\"rw\"></i> RW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sa\" title=\"sa\" id=\"sa\"></i> SA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sb\" title=\"sb\" id=\"sb\"></i> SB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sc\" title=\"sc\" id=\"sc\"></i> SC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sd\" title=\"sd\" id=\"sd\"></i> SD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-se\" title=\"se\" id=\"se\"></i> SE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sg\" title=\"sg\" id=\"sg\"></i> SG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sh\" title=\"sh\" id=\"sh\"></i> SH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-si\" title=\"si\" id=\"si\"></i> SI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sj\" title=\"sj\" id=\"sj\"></i> SJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sk\" title=\"sk\" id=\"sk\"></i> SK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sl\" title=\"sl\" id=\"sl\"></i> SL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sm\" title=\"sm\" id=\"sm\"></i> SM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sn\" title=\"sn\" id=\"sn\"></i> SN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-so\" title=\"so\" id=\"so\"></i> SO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sr\" title=\"sr\" id=\"sr\"></i> SR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ss\" title=\"ss\" id=\"ss\"></i> SS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-st\" title=\"st\" id=\"st\"></i> ST</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sv\" title=\"sv\" id=\"sv\"></i> SV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sx\" title=\"sx\" id=\"sx\"></i> SX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sy\" title=\"sy\" id=\"sy\"></i> SY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sz\" title=\"sz\" id=\"sz\"></i> SZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tc\" title=\"tc\" id=\"tc\"></i> TC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-td\" title=\"td\" id=\"td\"></i> TD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tf\" title=\"tf\" id=\"tf\"></i> TF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tg\" title=\"tg\" id=\"tg\"></i> TG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-th\" title=\"th\" id=\"th\"></i> TH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tj\" title=\"tj\" id=\"tj\"></i> TJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tk\" title=\"tk\" id=\"tk\"></i> TK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tl\" title=\"tl\" id=\"tl\"></i> TL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tm\" title=\"tm\" id=\"tm\"></i> TM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tn\" title=\"tn\" id=\"tn\"></i> TN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-to\" title=\"to\" id=\"to\"></i> TO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tr\" title=\"tr\" id=\"tr\"></i> TR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tt\" title=\"tt\" id=\"tt\"></i> TT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tv\" title=\"tv\" id=\"tv\"></i> TV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tw\" title=\"tw\" id=\"tw\"></i> TW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tz\" title=\"tz\" id=\"tz\"></i> TZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ua\" title=\"ua\" id=\"ua\"></i> UA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ug\" title=\"ug\" id=\"ug\"></i> UG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-um\" title=\"um\" id=\"um\"></i> UM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-us\" title=\"us\" id=\"us\"></i> US</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-uy\" title=\"uy\" id=\"uy\"></i> UY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-uz\" title=\"uz\" id=\"uz\"></i> UZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-va\" title=\"va\" id=\"va\"></i> VA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vc\" title=\"vc\" id=\"vc\"></i> VC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ve\" title=\"ve\" id=\"ve\"></i> VE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vg\" title=\"vg\" id=\"vg\"></i> VG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vi\" title=\"vi\" id=\"vi\"></i> VI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vn\" title=\"vn\" id=\"vn\"></i> VN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vu\" title=\"vu\" id=\"vu\"></i> VU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-wf\" title=\"wf\" id=\"wf\"></i> WF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ws\" title=\"ws\" id=\"ws\"></i> WS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ye\" title=\"ye\" id=\"ye\"></i> YE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-yt\" title=\"yt\" id=\"yt\"></i> YT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-za\" title=\"za\" id=\"za\"></i> ZA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-zm\" title=\"zm\" id=\"zm\"></i> ZM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-zw\" title=\"zw\" id=\"zw\"></i> ZW</div>
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
        return "icons_flag.html.twig";
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
\t\t\t\t\t<h3 class=\"page-title\">Flag Icons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Flag Icons</li>
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
\t\t\t\t\t<h4 class=\"box-title\">Flag icons</h4>
\t\t\t\t\t<h6 class=\"box-subtitle mb-15\">You can use any icons with class <code>flag-icon flag-icon-us</code></h6>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ad\" title=\"ad\" id=\"ad\"></i> AD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ae\" title=\"ae\" id=\"ae\"></i> AE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-af\" title=\"af\" id=\"af\"></i> AF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ag\" title=\"ag\" id=\"ag\"></i> AG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ai\" title=\"ai\" id=\"ai\"></i> AU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-al\" title=\"al\" id=\"al\"></i> AL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-am\" title=\"am\" id=\"am\"></i> AM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ao\" title=\"ao\" id=\"ao\"></i> AO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-aq\" title=\"aq\" id=\"aq\"></i> AQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ar\" title=\"ar\" id=\"ar\"></i> AR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-as\" title=\"as\" id=\"as\"></i> AS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-at\" title=\"at\" id=\"at\"></i> AT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-au\" title=\"au\" id=\"au\"></i> AU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-aw\" title=\"aw\" id=\"aw\"></i> AW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ax\" title=\"ax\" id=\"ax\"></i> AX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-az\" title=\"az\" id=\"az\"></i> AZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ba\" title=\"ba\" id=\"ba\"></i> BA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bb\" title=\"bb\" id=\"bb\"></i> BB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bd\" title=\"bd\" id=\"bd\"></i> BD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-be\" title=\"be\" id=\"be\"></i> BE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bf\" title=\"bf\" id=\"bf\"></i> BF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bg\" title=\"bg\" id=\"bg\"></i> BG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bh\" title=\"bh\" id=\"bh\"></i> BH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bi\" title=\"bi\" id=\"bi\"></i> BI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bj\" title=\"bj\" id=\"bj\"></i> BJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bl\" title=\"bl\" id=\"bl\"></i> BL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bm\" title=\"bm\" id=\"bm\"></i> BM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bn\" title=\"bn\" id=\"bn\"></i> BN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bo\" title=\"bo\" id=\"bo\"></i> BO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bq\" title=\"bq\" id=\"bq\"></i> BQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-br\" title=\"br\" id=\"br\"></i> BR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bs\" title=\"bs\" id=\"bs\"></i> BS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bt\" title=\"bt\" id=\"bt\"></i> BT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bv\" title=\"bv\" id=\"bv\"></i> BV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bw\" title=\"bw\" id=\"bw\"></i> BW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-by\" title=\"by\" id=\"by\"></i> BY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-bz\" title=\"bz\" id=\"bz\"></i> BZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ca\" title=\"ca\" id=\"ca\"></i> CA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cc\" title=\"cc\" id=\"cc\"></i> CC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cd\" title=\"cd\" id=\"cd\"></i> CD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cf\" title=\"cf\" id=\"cf\"></i> CF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cg\" title=\"cg\" id=\"cg\"></i> CG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ch\" title=\"ch\" id=\"ch\"></i> CH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ci\" title=\"ci\" id=\"ci\"></i> CI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ck\" title=\"ck\" id=\"ck\"></i> CK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cl\" title=\"cl\" id=\"cl\"></i> CL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cm\" title=\"cm\" id=\"cm\"></i> CM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cn\" title=\"cn\" id=\"cn\"></i> CN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-co\" title=\"co\" id=\"co\"></i> CO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cr\" title=\"cr\" id=\"cr\"></i> CR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cu\" title=\"cu\" id=\"cu\"></i> CU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cv\" title=\"cv\" id=\"cv\"></i> CV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cw\" title=\"cw\" id=\"cw\"></i> CW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cx\" title=\"cx\" id=\"cx\"></i> CX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cy\" title=\"cy\" id=\"cy\"></i> CY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-cz\" title=\"cz\" id=\"cz\"></i> CZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-de\" title=\"de\" id=\"de\"></i> DE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dj\" title=\"dj\" id=\"dj\"></i> DJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dk\" title=\"dk\" id=\"dk\"></i> DK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dm\" title=\"dm\" id=\"dm\"></i> DM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-do\" title=\"do\" id=\"do\"></i> DO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-dz\" title=\"dz\" id=\"dz\"></i> DZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ec\" title=\"ec\" id=\"ec\"></i> EC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ee\" title=\"ee\" id=\"ee\"></i> EE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-eg\" title=\"eg\" id=\"eg\"></i> EG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-eh\" title=\"eh\" id=\"eh\"></i> EH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-er\" title=\"er\" id=\"er\"></i> ER</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-es\" title=\"es\" id=\"es\"></i> ES</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-et\" title=\"et\" id=\"et\"></i> ET</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fi\" title=\"fi\" id=\"fi\"></i> FI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fj\" title=\"fj\" id=\"fj\"></i> FJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fk\" title=\"fk\" id=\"fk\"></i> FK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fm\" title=\"fm\" id=\"fm\"></i> FM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fo\" title=\"fo\" id=\"fo\"></i> FO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-fr\" title=\"fr\" id=\"fr\"></i> FR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ga\" title=\"ga\" id=\"ga\"></i> GA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gb\" title=\"gb\" id=\"gb\"></i> GB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gd\" title=\"gd\" id=\"gd\"></i> GD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ge\" title=\"ge\" id=\"ge\"></i> GE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gf\" title=\"gf\" id=\"gf\"></i> GF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gg\" title=\"gg\" id=\"gg\"></i> GG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gh\" title=\"gh\" id=\"gh\"></i> GH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gi\" title=\"gi\" id=\"gi\"></i> GI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gl\" title=\"gl\" id=\"gl\"></i> GL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gm\" title=\"gm\" id=\"gm\"></i> GM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gn\" title=\"gn\" id=\"gn\"></i> GN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gp\" title=\"gp\" id=\"gp\"></i> GP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gq\" title=\"gq\" id=\"gq\"></i> GQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gr\" title=\"gr\" id=\"gr\"></i> GR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gs\" title=\"gs\" id=\"gs\"></i> GS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gt\" title=\"gt\" id=\"gt\"></i> GT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gu\" title=\"gu\" id=\"gu\"></i> GU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gw\" title=\"gw\" id=\"gw\"></i> GW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-gy\" title=\"gy\" id=\"gy\"></i> GY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hk\" title=\"hk\" id=\"hk\"></i> HK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hm\" title=\"hm\" id=\"hm\"></i> HM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hn\" title=\"hn\" id=\"hn\"></i> HN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hr\" title=\"hr\" id=\"hr\"></i> HR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ht\" title=\"ht\" id=\"ht\"></i> HT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-hu\" title=\"hu\" id=\"hu\"></i> HU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-id\" title=\"id\" id=\"id\"></i> ID</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ie\" title=\"ie\" id=\"ie\"></i> IE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-il\" title=\"il\" id=\"il\"></i> IL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-im\" title=\"im\" id=\"im\"></i> IM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-in\" title=\"in\" id=\"in\"></i> IN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-io\" title=\"io\" id=\"io\"></i> IO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-iq\" title=\"iq\" id=\"iq\"></i> IQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ir\" title=\"ir\" id=\"ir\"></i> IR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-is\" title=\"is\" id=\"is\"></i> IS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-it\" title=\"it\" id=\"it\"></i> IT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-je\" title=\"je\" id=\"je\"></i> JE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-jm\" title=\"jm\" id=\"jm\"></i> JM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-jo\" title=\"jo\" id=\"jo\"></i> JO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-jp\" title=\"jp\" id=\"jp\"></i> JP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ke\" title=\"ke\" id=\"ke\"></i> KE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kg\" title=\"kg\" id=\"kg\"></i> KG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kh\" title=\"kh\" id=\"kh\"></i> KH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ki\" title=\"ki\" id=\"ki\"></i> KI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-km\" title=\"km\" id=\"km\"></i> KM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kn\" title=\"kn\" id=\"kn\"></i> KN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kp\" title=\"kp\" id=\"kp\"></i> KP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kr\" title=\"kr\" id=\"kr\"></i> KR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kw\" title=\"kw\" id=\"kw\"></i> KW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ky\" title=\"ky\" id=\"ky\"></i> KY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-kz\" title=\"kz\" id=\"kz\"></i> KZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-la\" title=\"la\" id=\"la\"></i> LA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lb\" title=\"lb\" id=\"lb\"></i> LB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lc\" title=\"lc\" id=\"lc\"></i> LC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-li\" title=\"li\" id=\"li\"></i> LI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lk\" title=\"lk\" id=\"lk\"></i> LK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lr\" title=\"lr\" id=\"lr\"></i> LR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ls\" title=\"ls\" id=\"ls\"></i> LS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lt\" title=\"lt\" id=\"lt\"></i> LT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lu\" title=\"lu\" id=\"lu\"></i> LU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-lv\" title=\"lv\" id=\"lv\"></i> LV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ly\" title=\"ly\" id=\"ly\"></i> LY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ma\" title=\"ma\" id=\"ma\"></i> MA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mc\" title=\"mc\" id=\"mc\"></i> MC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-md\" title=\"md\" id=\"md\"></i> MD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-me\" title=\"me\" id=\"me\"></i> ME</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mf\" title=\"mf\" id=\"mf\"></i> MF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mg\" title=\"mg\" id=\"mg\"></i> MG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mh\" title=\"mh\" id=\"mh\"></i> MH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mk\" title=\"mk\" id=\"mk\"></i> MK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ml\" title=\"ml\" id=\"ml\"></i> ML</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mm\" title=\"mm\" id=\"mm\"></i> MM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mn\" title=\"mn\" id=\"mn\"></i> MN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mo\" title=\"mo\" id=\"mo\"></i> MO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mp\" title=\"mp\" id=\"mp\"></i> MP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mq\" title=\"mq\" id=\"mq\"></i> MQ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mr\" title=\"mr\" id=\"mr\"></i> MR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ms\" title=\"ms\" id=\"ms\"></i> MS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mt\" title=\"mt\" id=\"mt\"></i> MT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mu\" title=\"mu\" id=\"mu\"></i> MU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mv\" title=\"mv\" id=\"mv\"></i> MV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mw\" title=\"mw\" id=\"mw\"></i> MW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mx\" title=\"mx\" id=\"mx\"></i> MX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-my\" title=\"my\" id=\"my\"></i> MY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-mz\" title=\"mz\" id=\"mz\"></i> MZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-na\" title=\"na\" id=\"na\"></i> NA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nc\" title=\"nc\" id=\"nc\"></i> NC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ne\" title=\"ne\" id=\"ne\"></i> NE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nf\" title=\"nf\" id=\"nf\"></i> NF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ng\" title=\"ng\" id=\"ng\"></i> NG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ni\" title=\"ni\" id=\"ni\"></i> NI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nl\" title=\"nl\" id=\"nl\"></i> NL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-no\" title=\"no\" id=\"no\"></i> NO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-np\" title=\"np\" id=\"np\"></i> NP</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nr\" title=\"nr\" id=\"nr\"></i> NR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nu\" title=\"nu\" id=\"nu\"></i> NU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-nz\" title=\"nz\" id=\"nz\"></i> NZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-om\" title=\"om\" id=\"om\"></i> OM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pa\" title=\"pa\" id=\"pa\"></i> PA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pe\" title=\"pe\" id=\"pe\"></i> PE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pf\" title=\"pf\" id=\"pf\"></i> PF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pg\" title=\"pg\" id=\"pg\"></i> PG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ph\" title=\"ph\" id=\"ph\"></i> PH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pk\" title=\"pk\" id=\"pk\"></i> PK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pl\" title=\"pl\" id=\"pl\"></i> PL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pm\" title=\"pm\" id=\"pm\"></i> PM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pn\" title=\"pn\" id=\"pn\"></i> PN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pr\" title=\"pr\" id=\"pr\"></i> PR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ps\" title=\"ps\" id=\"ps\"></i> PS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pt\" title=\"pt\" id=\"pt\"></i> PT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-pw\" title=\"pw\" id=\"pw\"></i> PW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-py\" title=\"py\" id=\"py\"></i> PY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-qa\" title=\"qa\" id=\"qa\"></i> QA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-re\" title=\"re\" id=\"re\"></i> RE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ro\" title=\"ro\" id=\"ro\"></i> RO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-rs\" title=\"rs\" id=\"rs\"></i> RS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ru\" title=\"ru\" id=\"ru\"></i> RU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-rw\" title=\"rw\" id=\"rw\"></i> RW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sa\" title=\"sa\" id=\"sa\"></i> SA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sb\" title=\"sb\" id=\"sb\"></i> SB</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sc\" title=\"sc\" id=\"sc\"></i> SC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sd\" title=\"sd\" id=\"sd\"></i> SD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-se\" title=\"se\" id=\"se\"></i> SE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sg\" title=\"sg\" id=\"sg\"></i> SG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sh\" title=\"sh\" id=\"sh\"></i> SH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-si\" title=\"si\" id=\"si\"></i> SI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sj\" title=\"sj\" id=\"sj\"></i> SJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sk\" title=\"sk\" id=\"sk\"></i> SK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sl\" title=\"sl\" id=\"sl\"></i> SL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sm\" title=\"sm\" id=\"sm\"></i> SM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sn\" title=\"sn\" id=\"sn\"></i> SN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-so\" title=\"so\" id=\"so\"></i> SO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sr\" title=\"sr\" id=\"sr\"></i> SR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ss\" title=\"ss\" id=\"ss\"></i> SS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-st\" title=\"st\" id=\"st\"></i> ST</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sv\" title=\"sv\" id=\"sv\"></i> SV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sx\" title=\"sx\" id=\"sx\"></i> SX</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sy\" title=\"sy\" id=\"sy\"></i> SY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-sz\" title=\"sz\" id=\"sz\"></i> SZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tc\" title=\"tc\" id=\"tc\"></i> TC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-td\" title=\"td\" id=\"td\"></i> TD</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tf\" title=\"tf\" id=\"tf\"></i> TF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tg\" title=\"tg\" id=\"tg\"></i> TG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-th\" title=\"th\" id=\"th\"></i> TH</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tj\" title=\"tj\" id=\"tj\"></i> TJ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tk\" title=\"tk\" id=\"tk\"></i> TK</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tl\" title=\"tl\" id=\"tl\"></i> TL</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tm\" title=\"tm\" id=\"tm\"></i> TM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tn\" title=\"tn\" id=\"tn\"></i> TN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-to\" title=\"to\" id=\"to\"></i> TO</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tr\" title=\"tr\" id=\"tr\"></i> TR</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tt\" title=\"tt\" id=\"tt\"></i> TT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tv\" title=\"tv\" id=\"tv\"></i> TV</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tw\" title=\"tw\" id=\"tw\"></i> TW</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-tz\" title=\"tz\" id=\"tz\"></i> TZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ua\" title=\"ua\" id=\"ua\"></i> UA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ug\" title=\"ug\" id=\"ug\"></i> UG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-um\" title=\"um\" id=\"um\"></i> UM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-us\" title=\"us\" id=\"us\"></i> US</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-uy\" title=\"uy\" id=\"uy\"></i> UY</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-uz\" title=\"uz\" id=\"uz\"></i> UZ</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-va\" title=\"va\" id=\"va\"></i> VA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vc\" title=\"vc\" id=\"vc\"></i> VC</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ve\" title=\"ve\" id=\"ve\"></i> VE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vg\" title=\"vg\" id=\"vg\"></i> VG</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vi\" title=\"vi\" id=\"vi\"></i> VI</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vn\" title=\"vn\" id=\"vn\"></i> VN</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-vu\" title=\"vu\" id=\"vu\"></i> VU</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-wf\" title=\"wf\" id=\"wf\"></i> WF</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ws\" title=\"ws\" id=\"ws\"></i> WS</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-ye\" title=\"ye\" id=\"ye\"></i> YE</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-yt\" title=\"yt\" id=\"yt\"></i> YT</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-za\" title=\"za\" id=\"za\"></i> ZA</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-zm\" title=\"zm\" id=\"zm\"></i> ZM</div>
\t\t\t\t\t\t<div class=\"col-3\"><i class=\"flag-icon flag-icon-zw\" title=\"zw\" id=\"zw\"></i> ZW</div>
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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t
</body>
</html>
", "icons_flag.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\icons_flag.html.twig");
    }
}
