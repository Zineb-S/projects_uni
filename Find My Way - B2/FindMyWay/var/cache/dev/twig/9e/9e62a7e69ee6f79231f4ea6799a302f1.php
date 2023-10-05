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

/* icons_fontawesome.html.twig */
class __TwigTemplate_b1a08a9554af76d91810c3f99a85588a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons_fontawesome.html.twig"));

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
\t\t\t\t\t<h3 class=\"page-title\">Font Awesome</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Font Awesome</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box box-body\">
\t\t\t  <h4 class=\"page-header\">41 New Icons in 4.7</h4>                  
\t\t\t\t<div class=\"row fontawesome-icon-list m-0\">

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book\" aria-hidden=\"true\"></i> fa-address-book</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book-o\" aria-hidden=\"true\"></i> fa-address-book-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> fa-address-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card-o\" aria-hidden=\"true\"></i> fa-address-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bandcamp\" aria-hidden=\"true\"></i> fa-bandcamp</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bath\" aria-hidden=\"true\"></i> fa-bath</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bathtub\" aria-hidden=\"true\"></i> fa-bathtub <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license\" aria-hidden=\"true\"></i> fa-drivers-license <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license-o\" aria-hidden=\"true\"></i> fa-drivers-license-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eercast\" aria-hidden=\"true\"></i> fa-eercast</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open\" aria-hidden=\"true\"></i> fa-envelope-open</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open-o\" aria-hidden=\"true\"></i> fa-envelope-open-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-etsy\" aria-hidden=\"true\"></i> fa-etsy</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-free-code-camp\" aria-hidden=\"true\"></i> fa-free-code-camp</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-grav\" aria-hidden=\"true\"></i> fa-grav</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-handshake-o\" aria-hidden=\"true\"></i> fa-handshake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-badge\" aria-hidden=\"true\"></i> fa-id-badge</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i> fa-id-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card-o\" aria-hidden=\"true\"></i> fa-id-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-imdb\" aria-hidden=\"true\"></i> fa-imdb</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-linode\" aria-hidden=\"true\"></i> fa-linode</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-meetup\" aria-hidden=\"true\"></i> fa-meetup</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microchip\" aria-hidden=\"true\"></i> fa-microchip</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-podcast\" aria-hidden=\"true\"></i> fa-podcast</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-quora\" aria-hidden=\"true\"></i> fa-quora</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ravelry\" aria-hidden=\"true\"></i> fa-ravelry</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-s15\" aria-hidden=\"true\"></i> fa-s15 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shower\" aria-hidden=\"true\"></i> fa-shower</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> fa-snowflake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-superpowers\" aria-hidden=\"true\"></i> fa-superpowers</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-telegram\" aria-hidden=\"true\"></i> fa-telegram</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer\" aria-hidden=\"true\"></i> fa-thermometer <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-0\" aria-hidden=\"true\"></i> fa-thermometer-0 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-1\" aria-hidden=\"true\"></i> fa-thermometer-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-2\" aria-hidden=\"true\"></i> fa-thermometer-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-3\" aria-hidden=\"true\"></i> fa-thermometer-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-4\" aria-hidden=\"true\"></i> fa-thermometer-4 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-empty\" aria-hidden=\"true\"></i> fa-thermometer-empty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i> fa-thermometer-full</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-half\" aria-hidden=\"true\"></i> fa-thermometer-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-quarter\" aria-hidden=\"true\"></i> fa-thermometer-quarter</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-three-quarters\" aria-hidden=\"true\"></i> fa-thermometer-three-quarters</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle\" aria-hidden=\"true\"></i> fa-times-rectangle <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle-o\" aria-hidden=\"true\"></i> fa-times-rectangle-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> fa-user-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> fa-user-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> fa-user-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard\" aria-hidden=\"true\"></i> fa-vcard <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard-o\" aria-hidden=\"true\"></i> fa-vcard-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i> fa-window-close</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close-o\" aria-hidden=\"true\"></i> fa-window-close-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-maximize\" aria-hidden=\"true\"></i> fa-window-maximize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-minimize\" aria-hidden=\"true\"></i> fa-window-minimize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-restore\" aria-hidden=\"true\"></i> fa-window-restore</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wpexplorer\" aria-hidden=\"true\"></i> fa-wpexplorer</div>
\t\t\t\t</div>

\t\t\t  <h4 class=\"page-header mt-30\">Web Application Icons</h4>
\t\t\t\t<div class=\"row fontawesome-icon-list m-0\">

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book\" aria-hidden=\"true\"></i> fa-address-book</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book-o\" aria-hidden=\"true\"></i> fa-address-book-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> fa-address-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card-o\" aria-hidden=\"true\"></i> fa-address-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-adjust\" aria-hidden=\"true\"></i> fa-adjust</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-american-sign-language-interpreting\" aria-hidden=\"true\"></i> fa-american-sign-language-interpreting</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-anchor\" aria-hidden=\"true\"></i> fa-anchor</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-archive\" aria-hidden=\"true\"></i> fa-archive</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-area-chart\" aria-hidden=\"true\"></i> fa-area-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-arrows\" aria-hidden=\"true\"></i> fa-arrows</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-arrows-h\" aria-hidden=\"true\"></i> fa-arrows-h</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-arrows-v\" aria-hidden=\"true\"></i> fa-arrows-v</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-asl-interpreting\" aria-hidden=\"true\"></i> fa-asl-interpreting <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-assistive-listening-systems\" aria-hidden=\"true\"></i> fa-assistive-listening-systems</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-asterisk\" aria-hidden=\"true\"></i> fa-asterisk</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-at\" aria-hidden=\"true\"></i> fa-at</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-audio-description\" aria-hidden=\"true\"></i> fa-audio-description</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-automobile\" aria-hidden=\"true\"></i> fa-automobile <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-balance-scale\" aria-hidden=\"true\"></i> fa-balance-scale</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> fa-ban</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bank\" aria-hidden=\"true\"></i> fa-bank <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> fa-bar-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bar-chart-o\" aria-hidden=\"true\"></i> fa-bar-chart-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-barcode\" aria-hidden=\"true\"></i> fa-barcode</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> fa-bars</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bath\" aria-hidden=\"true\"></i> fa-bath</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bathtub\" aria-hidden=\"true\"></i> fa-bathtub <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery\" aria-hidden=\"true\"></i> fa-battery <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-0\" aria-hidden=\"true\"></i> fa-battery-0 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-1\" aria-hidden=\"true\"></i> fa-battery-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-2\" aria-hidden=\"true\"></i> fa-battery-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-3\" aria-hidden=\"true\"></i> fa-battery-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-4\" aria-hidden=\"true\"></i> fa-battery-4 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-empty\" aria-hidden=\"true\"></i> fa-battery-empty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-full\" aria-hidden=\"true\"></i> fa-battery-full</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-half\" aria-hidden=\"true\"></i> fa-battery-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-quarter\" aria-hidden=\"true\"></i> fa-battery-quarter</div>\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-three-quarters\" aria-hidden=\"true\"></i> fa-battery-three-quarters</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bed\" aria-hidden=\"true\"></i> fa-bed</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-beer\" aria-hidden=\"true\"></i> fa-beer</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i> fa-bell</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i> fa-bell-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell-slash\" aria-hidden=\"true\"></i> fa-bell-slash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell-slash-o\" aria-hidden=\"true\"></i> fa-bell-slash-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bicycle\" aria-hidden=\"true\"></i> fa-bicycle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-binoculars\" aria-hidden=\"true\"></i> fa-binoculars</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-birthday-cake\" aria-hidden=\"true\"></i> fa-birthday-cake</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-blind\" aria-hidden=\"true\"></i> fa-blind</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bluetooth\" aria-hidden=\"true\"></i> fa-bluetooth</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bluetooth-b\" aria-hidden=\"true\"></i> fa-bluetooth-b</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bolt\" aria-hidden=\"true\"></i> fa-bolt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bomb\" aria-hidden=\"true\"></i> fa-bomb</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> fa-book</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i> fa-bookmark</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i> fa-bookmark-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-braille\" aria-hidden=\"true\"></i> fa-braille</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i> fa-briefcase</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bug\" aria-hidden=\"true\"></i> fa-bug</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> fa-building</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-building-o\" aria-hidden=\"true\"></i> fa-building-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> fa-bullhorn</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bullseye\" aria-hidden=\"true\"></i> fa-bullseye</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bus\" aria-hidden=\"true\"></i> fa-bus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cab\" aria-hidden=\"true\"></i> fa-cab <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calculator\" aria-hidden=\"true\"></i> fa-calculator</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> fa-calendar</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i> fa-calendar-check-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-minus-o\" aria-hidden=\"true\"></i> fa-calendar-minus-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> fa-calendar-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-plus-o\" aria-hidden=\"true\"></i> fa-calendar-plus-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-times-o\" aria-hidden=\"true\"></i> fa-calendar-times-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-camera\" aria-hidden=\"true\"></i> fa-camera</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-camera-retro\" aria-hidden=\"true\"></i> fa-camera-retro</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-car\" aria-hidden=\"true\"></i> fa-car</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i> fa-caret-square-o-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-left\" aria-hidden=\"true\"></i> fa-caret-square-o-left</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-right\" aria-hidden=\"true\"></i> fa-caret-square-o-right</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-up\" aria-hidden=\"true\"></i> fa-caret-square-o-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i> fa-cart-arrow-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i> fa-cart-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cc\" aria-hidden=\"true\"></i> fa-cc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-certificate\" aria-hidden=\"true\"></i> fa-certificate</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i> fa-check</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> fa-check-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i> fa-check-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-square\" aria-hidden=\"true\"></i> fa-check-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> fa-check-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-child\" aria-hidden=\"true\"></i> fa-child</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle\" aria-hidden=\"true\"></i> fa-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i> fa-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i> fa-circle-o-notch</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle-thin\" aria-hidden=\"true\"></i> fa-circle-thin</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> fa-clock-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-clone\" aria-hidden=\"true\"></i> fa-clone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i> fa-close <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cloud\" aria-hidden=\"true\"></i> fa-cloud</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> fa-cloud-download</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i> fa-cloud-upload</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> fa-code</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-code-fork\" aria-hidden=\"true\"></i> fa-code-fork</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-coffee\" aria-hidden=\"true\"></i> fa-coffee</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> fa-cog</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> fa-cogs</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i> fa-comment</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> fa-comment-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i> fa-commenting</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-commenting-o\" aria-hidden=\"true\"></i> fa-commenting-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comments\" aria-hidden=\"true\"></i> fa-comments</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> fa-comments-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-compass\" aria-hidden=\"true\"></i> fa-compass</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-copyright\" aria-hidden=\"true\"></i> fa-copyright</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-creative-commons\" aria-hidden=\"true\"></i> fa-creative-commons</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> fa-credit-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i> fa-credit-card-alt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-crop\" aria-hidden=\"true\"></i> fa-crop</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-crosshairs\" aria-hidden=\"true\"></i> fa-crosshairs</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cube\" aria-hidden=\"true\"></i> fa-cube</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cubes\" aria-hidden=\"true\"></i> fa-cubes</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> fa-cutlery</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> fa-dashboard <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-database\" aria-hidden=\"true\"></i> fa-database</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deaf\" aria-hidden=\"true\"></i> fa-deaf</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deafness\" aria-hidden=\"true\"></i> fa-deafness <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> fa-desktop</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-diamond\" aria-hidden=\"true\"></i> fa-diamond</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i> fa-dot-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> fa-download</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license\" aria-hidden=\"true\"></i> fa-drivers-license <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license-o\" aria-hidden=\"true\"></i> fa-drivers-license-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> fa-edit <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i> fa-ellipsis-h</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i> fa-ellipsis-v</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> fa-envelope</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> fa-envelope-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open\" aria-hidden=\"true\"></i> fa-envelope-open</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open-o\" aria-hidden=\"true\"></i> fa-envelope-open-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-square\" aria-hidden=\"true\"></i> fa-envelope-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eraser\" aria-hidden=\"true\"></i> fa-eraser</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exchange\" aria-hidden=\"true\"></i> fa-exchange</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exclamation\" aria-hidden=\"true\"></i> fa-exclamation</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> fa-exclamation-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> fa-exclamation-triangle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-external-link\" aria-hidden=\"true\"></i> fa-external-link</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-external-link-square\" aria-hidden=\"true\"></i> fa-external-link-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> fa-eye</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eye-slash\" aria-hidden=\"true\"></i> fa-eye-slash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eyedropper\" aria-hidden=\"true\"></i> fa-eyedropper</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fax\" aria-hidden=\"true\"></i> fa-fax</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-feed\" aria-hidden=\"true\"></i> fa-feed <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-female\" aria-hidden=\"true\"></i> fa-female</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fighter-jet\" aria-hidden=\"true\"></i> fa-fighter-jet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i> fa-file-archive-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-audio-o\" aria-hidden=\"true\"></i> fa-file-audio-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-code-o\" aria-hidden=\"true\"></i> fa-file-code-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i> fa-file-excel-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i> fa-file-image-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-movie-o\" aria-hidden=\"true\"></i> fa-file-movie-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i> fa-file-pdf-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-photo-o\" aria-hidden=\"true\"></i> fa-file-photo-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-picture-o\" aria-hidden=\"true\"></i> fa-file-picture-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-powerpoint-o\" aria-hidden=\"true\"></i> fa-file-powerpoint-o</div>

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-sound-o\" aria-hidden=\"true\"></i> fa-file-sound-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-video-o\" aria-hidden=\"true\"></i> fa-file-video-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-word-o\" aria-hidden=\"true\"></i> fa-file-word-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-zip-o\" aria-hidden=\"true\"></i> fa-file-zip-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-film\" aria-hidden=\"true\"></i> fa-film</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-filter\" aria-hidden=\"true\"></i> fa-filter</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fire\" aria-hidden=\"true\"></i> fa-fire</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fire-extinguisher\" aria-hidden=\"true\"></i> fa-fire-extinguisher</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flag\" aria-hidden=\"true\"></i> fa-flag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flag-checkered\" aria-hidden=\"true\"></i> fa-flag-checkered</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flag-o\" aria-hidden=\"true\"></i> fa-flag-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flash\" aria-hidden=\"true\"></i> fa-flash <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flask\" aria-hidden=\"true\"></i> fa-flask</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder\" aria-hidden=\"true\"></i> fa-folder</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i> fa-folder-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i> fa-folder-open</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder-open-o\" aria-hidden=\"true\"></i> fa-folder-open-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> fa-frown-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-futbol-o\" aria-hidden=\"true\"></i> fa-futbol-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> fa-gamepad</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gavel\" aria-hidden=\"true\"></i> fa-gavel</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gear\" aria-hidden=\"true\"></i> fa-gear <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gears\" aria-hidden=\"true\"></i> fa-gears <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gift\" aria-hidden=\"true\"></i> fa-gift</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-glass\" aria-hidden=\"true\"></i> fa-glass</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-globe\" aria-hidden=\"true\"></i> fa-globe</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i> fa-graduation-cap</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-group\" aria-hidden=\"true\"></i> fa-group <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-grab-o\" aria-hidden=\"true\"></i> fa-hand-grab-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-lizard-o\" aria-hidden=\"true\"></i> fa-hand-lizard-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-paper-o\" aria-hidden=\"true\"></i> fa-hand-paper-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-peace-o\" aria-hidden=\"true\"></i> fa-hand-peace-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-pointer-o\" aria-hidden=\"true\"></i> fa-hand-pointer-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i> fa-hand-rock-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-scissors-o\" aria-hidden=\"true\"></i> fa-hand-scissors-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-spock-o\" aria-hidden=\"true\"></i> fa-hand-spock-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-stop-o\" aria-hidden=\"true\"></i> fa-hand-stop-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-handshake-o\" aria-hidden=\"true\"></i> fa-handshake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hard-of-hearing\" aria-hidden=\"true\"></i> fa-hard-of-hearing <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hashtag\" aria-hidden=\"true\"></i> fa-hashtag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hdd-o\" aria-hidden=\"true\"></i> fa-hdd-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-headphones\" aria-hidden=\"true\"></i> fa-headphones</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> fa-heart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> fa-heart-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i> fa-heartbeat</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-history\" aria-hidden=\"true\"></i> fa-history</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> fa-home</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hotel\" aria-hidden=\"true\"></i> fa-hotel <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass\" aria-hidden=\"true\"></i> fa-hourglass</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-1\" aria-hidden=\"true\"></i> fa-hourglass-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-2\" aria-hidden=\"true\"></i> fa-hourglass-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-3\" aria-hidden=\"true\"></i> fa-hourglass-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-end\" aria-hidden=\"true\"></i> fa-hourglass-end</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> fa-hourglass-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-o\" aria-hidden=\"true\"></i> fa-hourglass-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-start\" aria-hidden=\"true\"></i> fa-hourglass-start</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-i-cursor\" aria-hidden=\"true\"></i> fa-i-cursor</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-badge\" aria-hidden=\"true\"></i> fa-id-badge</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i> fa-id-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card-o\" aria-hidden=\"true\"></i> fa-id-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-image\" aria-hidden=\"true\"></i> fa-image <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-inbox\" aria-hidden=\"true\"></i> fa-inbox</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-industry\" aria-hidden=\"true\"></i> fa-industry</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i> fa-info</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> fa-info-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-institution\" aria-hidden=\"true\"></i> fa-institution <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i> fa-key</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i> fa-keyboard-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-language\" aria-hidden=\"true\"></i> fa-language</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-laptop\" aria-hidden=\"true\"></i> fa-laptop</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-leaf\" aria-hidden=\"true\"></i> fa-leaf</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-legal\" aria-hidden=\"true\"></i> fa-legal <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-lemon-o\" aria-hidden=\"true\"></i> fa-lemon-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-level-down\" aria-hidden=\"true\"></i> fa-level-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-level-up\" aria-hidden=\"true\"></i> fa-level-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-bouy\" aria-hidden=\"true\"></i> fa-life-bouy <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-buoy\" aria-hidden=\"true\"></i> fa-life-buoy <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i> fa-life-ring</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-saver\" aria-hidden=\"true\"></i> fa-life-saver <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"></i> fa-lightbulb-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i> fa-line-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> fa-location-arrow</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> fa-lock</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-low-vision\" aria-hidden=\"true\"></i> fa-low-vision</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-magic\" aria-hidden=\"true\"></i> fa-magic</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-magnet\" aria-hidden=\"true\"></i> fa-magnet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mail-forward\" aria-hidden=\"true\"></i> fa-mail-forward <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mail-reply\" aria-hidden=\"true\"></i> fa-mail-reply <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mail-reply-all\" aria-hidden=\"true\"></i> fa-mail-reply-all <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-male\" aria-hidden=\"true\"></i> fa-male</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map\" aria-hidden=\"true\"></i> fa-map</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> fa-map-marker</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-o\" aria-hidden=\"true\"></i> fa-map-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-pin\" aria-hidden=\"true\"></i> fa-map-pin</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-signs\" aria-hidden=\"true\"></i> fa-map-signs</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-meh-o\" aria-hidden=\"true\"></i> fa-meh-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microchip\" aria-hidden=\"true\"></i> fa-microchip</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i> fa-microphone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microphone-slash\" aria-hidden=\"true\"></i> fa-microphone-slash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i> fa-minus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> fa-minus-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus-square\" aria-hidden=\"true\"></i> fa-minus-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus-square-o\" aria-hidden=\"true\"></i> fa-minus-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> fa-mobile</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mobile-phone\" aria-hidden=\"true\"></i> fa-mobile-phone <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> fa-money</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-moon-o\" aria-hidden=\"true\"></i> fa-moon-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mortar-board\" aria-hidden=\"true\"></i> fa-mortar-board <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i> fa-motorcycle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mouse-pointer\" aria-hidden=\"true\"></i> fa-mouse-pointer</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-music\" aria-hidden=\"true\"></i> fa-music</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-navicon\" aria-hidden=\"true\"></i> fa-navicon <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-newspaper-o\" aria-hidden=\"true\"></i> fa-newspaper-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-object-group\" aria-hidden=\"true\"></i> fa-object-group</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-object-ungroup\" aria-hidden=\"true\"></i> fa-object-ungroup</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paint-brush\" aria-hidden=\"true\"></i> fa-paint-brush</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> fa-paper-plane</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i> fa-paper-plane-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paw\" aria-hidden=\"true\"></i> fa-paw</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> fa-pencil</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pencil-square\" aria-hidden=\"true\"></i> fa-pencil-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> fa-pencil-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-percent\" aria-hidden=\"true\"></i> fa-percent</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> fa-phone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-phone-square\" aria-hidden=\"true\"></i> fa-phone-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-photo\" aria-hidden=\"true\"></i> fa-photo <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i> fa-picture-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pie-chart\" aria-hidden=\"true\"></i> fa-pie-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plane\" aria-hidden=\"true\"></i> fa-plane</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plug\" aria-hidden=\"true\"></i> fa-plug</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> fa-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> fa-plus-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i> fa-plus-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i> fa-plus-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-podcast\" aria-hidden=\"true\"></i> fa-podcast</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> fa-power-off</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i> fa-print</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-puzzle-piece\" aria-hidden=\"true\"></i> fa-puzzle-piece</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-qrcode\" aria-hidden=\"true\"></i> fa-qrcode</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question\" aria-hidden=\"true\"></i> fa-question</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> fa-question-circle</div>\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i> fa-question-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i> fa-quote-left</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i> fa-quote-right</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-random\" aria-hidden=\"true\"></i> fa-random</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-recycle\" aria-hidden=\"true\"></i> fa-recycle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> fa-refresh</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-registered\" aria-hidden=\"true\"></i> fa-registered</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-remove\" aria-hidden=\"true\"></i> fa-remove <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-reorder\" aria-hidden=\"true\"></i> fa-reorder <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-reply\" aria-hidden=\"true\"></i> fa-reply</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-reply-all\" aria-hidden=\"true\"></i> fa-reply-all</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-retweet\" aria-hidden=\"true\"></i> fa-retweet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-road\" aria-hidden=\"true\"></i> fa-road</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i> fa-rocket</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> fa-rss</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i> fa-rss-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-s15\" aria-hidden=\"true\"></i> fa-s15 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i> fa-search</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-search-minus\" aria-hidden=\"true\"></i> fa-search-minus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i> fa-search-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-send\" aria-hidden=\"true\"></i> fa-send <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-send-o\" aria-hidden=\"true\"></i> fa-send-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-server\" aria-hidden=\"true\"></i> fa-server</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i> fa-share</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i> fa-share-alt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-alt-square\" aria-hidden=\"true\"></i> fa-share-alt-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-square\" aria-hidden=\"true\"></i> fa-share-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i> fa-share-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shield\" aria-hidden=\"true\"></i> fa-shield</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ship\" aria-hidden=\"true\"></i> fa-ship</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i> fa-shopping-bag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i> fa-shopping-basket</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> fa-shopping-cart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shower\" aria-hidden=\"true\"></i> fa-shower</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> fa-sign-in</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-language\" aria-hidden=\"true\"></i> fa-sign-language</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> fa-sign-out</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-signal\" aria-hidden=\"true\"></i> fa-signal</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-signing\" aria-hidden=\"true\"></i> fa-signing <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sitemap\" aria-hidden=\"true\"></i> fa-sitemap</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i> fa-sliders</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i> fa-smile-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> fa-snowflake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-soccer-ball-o\" aria-hidden=\"true\"></i> fa-soccer-ball-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i> fa-sort</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-alpha-asc\" aria-hidden=\"true\"></i> fa-sort-alpha-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-alpha-desc\" aria-hidden=\"true\"></i> fa-sort-alpha-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-amount-asc\" aria-hidden=\"true\"></i> fa-sort-amount-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-amount-desc\" aria-hidden=\"true\"></i> fa-sort-amount-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-asc\" aria-hidden=\"true\"></i> fa-sort-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-desc\" aria-hidden=\"true\"></i> fa-sort-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-down\" aria-hidden=\"true\"></i> fa-sort-down <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-numeric-asc\" aria-hidden=\"true\"></i> fa-sort-numeric-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-numeric-desc\" aria-hidden=\"true\"></i> fa-sort-numeric-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-up\" aria-hidden=\"true\"></i> fa-sort-up <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-space-shuttle\" aria-hidden=\"true\"></i> fa-space-shuttle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-spinner\" aria-hidden=\"true\"></i> fa-spinner</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-spoon\" aria-hidden=\"true\"></i> fa-spoon</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-square\" aria-hidden=\"true\"></i> fa-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-square-o\" aria-hidden=\"true\"></i> fa-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i> fa-star</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half\" aria-hidden=\"true\"></i> fa-star-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half-empty\" aria-hidden=\"true\"></i> fa-star-half-empty <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half-full\" aria-hidden=\"true\"></i> fa-star-half-full <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i> fa-star-half-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i> fa-star-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sticky-note\" aria-hidden=\"true\"></i> fa-sticky-note</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sticky-note-o\" aria-hidden=\"true\"></i> fa-sticky-note-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-street-view\" aria-hidden=\"true\"></i> fa-street-view</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-suitcase\" aria-hidden=\"true\"></i> fa-suitcase</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sun-o\" aria-hidden=\"true\"></i> fa-sun-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-support\" aria-hidden=\"true\"></i> fa-support <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tablet\" aria-hidden=\"true\"></i> fa-tablet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i> fa-tachometer</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tag\" aria-hidden=\"true\"></i> fa-tag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> fa-tags</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> fa-tasks</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-taxi\" aria-hidden=\"true\"></i> fa-taxi</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-television\" aria-hidden=\"true\"></i> fa-television</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-terminal\" aria-hidden=\"true\"></i> fa-terminal</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer\" aria-hidden=\"true\"></i> fa-thermometer <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-0\" aria-hidden=\"true\"></i> fa-thermometer-0 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-1\" aria-hidden=\"true\"></i> fa-thermometer-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-2\" aria-hidden=\"true\"></i> fa-thermometer-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-3\" aria-hidden=\"true\"></i> fa-thermometer-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-4\" aria-hidden=\"true\"></i> fa-thermometer-4 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-empty\" aria-hidden=\"true\"></i> fa-thermometer-empty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i> fa-thermometer-full</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-half\" aria-hidden=\"true\"></i> fa-thermometer-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-quarter\" aria-hidden=\"true\"></i> fa-thermometer-quarter</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-three-quarters\" aria-hidden=\"true\"></i> fa-thermometer-three-quarters</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumb-tack\" aria-hidden=\"true\"></i> fa-thumb-tack</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i> fa-thumbs-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-o-down\" aria-hidden=\"true\"></i> fa-thumbs-o-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> fa-thumbs-o-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> fa-thumbs-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> fa-ticket</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> fa-times</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i> fa-times-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-circle-o\" aria-hidden=\"true\"></i> fa-times-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle\" aria-hidden=\"true\"></i> fa-times-rectangle <span class=\"text-muted\">(alias)</span></div>

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle-o\" aria-hidden=\"true\"></i> fa-times-rectangle-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tint\" aria-hidden=\"true\"></i> fa-tint</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-down\" aria-hidden=\"true\"></i> fa-toggle-down <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-left\" aria-hidden=\"true\"></i> fa-toggle-left <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i> fa-toggle-off</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i> fa-toggle-on</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-right\" aria-hidden=\"true\"></i> fa-toggle-right <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-up\" aria-hidden=\"true\"></i> fa-toggle-up <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trademark\" aria-hidden=\"true\"></i> fa-trademark</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> fa-trash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i> fa-trash-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tree\" aria-hidden=\"true\"></i> fa-tree</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> fa-trophy</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-truck\" aria-hidden=\"true\"></i> fa-truck</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tty\" aria-hidden=\"true\"></i> fa-tty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tv\" aria-hidden=\"true\"></i> fa-tv <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-umbrella\" aria-hidden=\"true\"></i> fa-umbrella</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"></i> fa-universal-access</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i> fa-university</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-unlock\" aria-hidden=\"true\"></i> fa-unlock</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> fa-unlock-alt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-unsorted\" aria-hidden=\"true\"></i> fa-unsorted <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-upload\" aria-hidden=\"true\"></i> fa-upload</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> fa-user</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> fa-user-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> fa-user-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> fa-user-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> fa-user-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-secret\" aria-hidden=\"true\"></i> fa-user-secret</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-times\" aria-hidden=\"true\"></i> fa-user-times</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> fa-users</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard\" aria-hidden=\"true\"></i> fa-vcard <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard-o\" aria-hidden=\"true\"></i> fa-vcard-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i> fa-video-camera</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i> fa-volume-control-phone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-down\" aria-hidden=\"true\"></i> fa-volume-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-off\" aria-hidden=\"true\"></i> fa-volume-off</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> fa-volume-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-warning\" aria-hidden=\"true\"></i> fa-warning <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair\" aria-hidden=\"true\"></i> fa-wheelchair</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> fa-wheelchair-alt</div>\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> fa-wifi</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i> fa-window-close</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close-o\" aria-hidden=\"true\"></i> fa-window-close-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-maximize\" aria-hidden=\"true\"></i> fa-window-maximize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-minimize\" aria-hidden=\"true\"></i> fa-window-minimize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-restore\" aria-hidden=\"true\"></i> fa-window-restore</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wrench\" aria-hidden=\"true\"></i> fa-wrench</div>

\t\t\t\t</div>

\t\t\t  <h4 class=\"page-header mt-30\">Accessibility Icons</h4>
\t\t\t\t<div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-american-sign-language-interpreting\" aria-hidden=\"true\"></i> fa-american-sign-language-interpreting</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-asl-interpreting\" aria-hidden=\"true\"></i> fa-asl-interpreting <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-assistive-listening-systems\" aria-hidden=\"true\"></i> fa-assistive-listening-systems</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-audio-description\" aria-hidden=\"true\"></i> fa-audio-description</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-blind\" aria-hidden=\"true\"></i> fa-blind</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-braille\" aria-hidden=\"true\"></i> fa-braille</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cc\" aria-hidden=\"true\"></i> fa-cc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deaf\" aria-hidden=\"true\"></i> fa-deaf</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deafness\" aria-hidden=\"true\"></i> fa-deafness <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hard-of-hearing\" aria-hidden=\"true\"></i> fa-hard-of-hearing <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-low-vision\" aria-hidden=\"true\"></i> fa-low-vision</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i> fa-question-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-language\" aria-hidden=\"true\"></i> fa-sign-language</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-signing\" aria-hidden=\"true\"></i> fa-signing <span class=\"text-muted\">(alias)</span></div>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tty\" aria-hidden=\"true\"></i> fa-tty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"></i> fa-universal-access</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i> fa-volume-control-phone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair\" aria-hidden=\"true\"></i> fa-wheelchair</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> fa-wheelchair-alt</div>
\t\t\t  </div>\t

\t\t\t  <h4 class=\"page-header mt-30\">Hand Icons</h4>
\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-grab-o\"></i> fa-hand-grab-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-lizard-o\"></i> fa-hand-lizard-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-down\"></i> fa-hand-o-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-left\"></i> fa-hand-o-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-right\"></i> fa-hand-o-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-up\"></i> fa-hand-o-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-paper-o\"></i> fa-hand-paper-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-peace-o\"></i> fa-hand-peace-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-pointer-o\"></i> fa-hand-pointer-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-rock-o\"></i> fa-hand-rock-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-scissors-o\"></i> fa-hand-scissors-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-spock-o\"></i> fa-hand-spock-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-stop-o\"></i> fa-hand-stop-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-down\"></i> fa-thumbs-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-o-down\"></i> fa-thumbs-o-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-o-up\"></i> fa-thumbs-o-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-up\"></i> fa-thumbs-up</div>
\t\t\t  </div>

\t\t\t  <h4 class=\"page-header mt-30\">Transportation Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ambulance\"></i> fa-ambulance</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-automobile\"></i> fa-automobile
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bicycle\"></i> fa-bicycle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bus\"></i> fa-bus</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cab\"></i> fa-cab <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-car\"></i> fa-car</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fighter-jet\"></i> fa-fighter-jet</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-motorcycle\"></i> fa-motorcycle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plane\"></i> fa-plane</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rocket\"></i> fa-rocket</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ship\"></i> fa-ship</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-space-shuttle\"></i> fa-space-shuttle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-subway\"></i> fa-subway</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-taxi\"></i> fa-taxi</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-train\"></i> fa-train</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-truck\"></i> fa-truck</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wheelchair\"></i> fa-wheelchair</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> wheelchair-alt</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Gender Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-genderless\"></i> fa-genderless</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-intersex\"></i> fa-intersex
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars\"></i> fa-mars</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-double\"></i> fa-mars-double</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-stroke\"></i> fa-mars-stroke</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-stroke-h\"></i> fa-mars-stroke-h</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-stroke-v\"></i> fa-mars-stroke-v</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mercury\"></i> fa-mercury</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-neuter\"></i> fa-neuter</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-transgender\"></i> fa-transgender</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-transgender-alt\"></i> fa-transgender-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-venus\"></i> fa-venus</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-venus-double\"></i> fa-venus-double</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-venus-mars\"></i> fa-venus-mars</div>
\t\t\t  </div>
\t\t\t  <h2 class=\"page-header mt-30\">File Type Icons</h2>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file\"></i> fa-file</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-archive-o\"></i> fa-file-archive-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-audio-o\"></i> fa-file-audio-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-code-o\"></i> fa-file-code-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-excel-o\"></i> fa-file-excel-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-image-o\"></i> fa-file-image-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-movie-o\"></i> fa-file-movie-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-o\"></i> fa-file-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-pdf-o\"></i> fa-file-pdf-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-photo-o\"></i> fa-file-photo-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-picture-o\"></i> fa-file-picture-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-powerpoint-o\"></i> fa-file-powerpoint-o
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-sound-o\"></i> fa-file-sound-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text\"></i> fa-file-text</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text-o\"></i> fa-file-text-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-video-o\"></i> fa-file-video-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-word-o\"></i> fa-file-word-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-zip-o\"></i> fa-file-zip-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t  </div>
\t\t\t  <h2 class=\"page-header mt-30\">Spinner Icons</h2>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-circle-o-notch\"></i> fa-circle-o-notch</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cog\"></i> fa-cog</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gear\"></i> fa-gear <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-refresh\"></i> fa-refresh</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-spinner\"></i> fa-spinner</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Form Control Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-check-square\"></i> fa-check-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-check-square-o\"></i> fa-check-square-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-circle\"></i> fa-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-circle-o\"></i> fa-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dot-circle-o\"></i> fa-dot-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-minus-square\"></i> fa-minus-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-minus-square-o\"></i> fa-minus-square-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plus-square\"></i> fa-plus-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plus-square-o\"></i> fa-plus-square-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-square\"></i> fa-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-square-o\"></i> fa-square-o</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Payment Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-amex\"></i> fa-cc-amex</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-diners-club\"></i> fa-cc-diners-club</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-discover\"></i> fa-cc-discover</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-jcb\"></i> fa-cc-jcb</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-mastercard\"></i> fa-cc-mastercard</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-paypal\"></i> fa-cc-paypal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-stripe\"></i> fa-cc-stripe</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-visa\"></i> fa-cc-visa</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-credit-card\"></i> fa-credit-card</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i> fa-credit-card-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-wallet\"></i> fa-google-wallet</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paypal\"></i> fa-paypal</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Chart Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-area-chart\"></i> fa-area-chart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bar-chart\"></i> fa-bar-chart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> fa-bar-chart-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-line-chart\"></i> fa-line-chart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pie-chart\"></i> fa-pie-chart</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Currency Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitcoin\"></i> fa-bitcoin
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-btc\"></i> fa-btc</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cny\"></i> fa-cny <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dollar\"></i> fa-dollar
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-eur\"></i> fa-eur</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-euro\"></i> fa-euro <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gbp\"></i> fa-gbp</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg\"></i> fa-gg</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg-circle\"></i> fa-gg-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ils\"></i> fa-ils</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-inr\"></i> fa-inr</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-jpy\"></i> fa-jpy</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-krw\"></i> fa-krw</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-money\"></i> fa-money</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rmb\"></i> fa-rmb <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rouble\"></i> fa-rouble
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rub\"></i> fa-rub</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ruble\"></i> fa-ruble <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rupee\"></i> fa-rupee <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-shekel\"></i> fa-shekel
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-sheqel\"></i> fa-sheqel
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-try\"></i> fa-try</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-turkish-lira\"></i> fa-turkish-lira
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-usd\"></i> fa-usd</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-won\"></i> fa-won <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yen\"></i> fa-yen <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Text Editor Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-center\"></i> fa-align-center</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-justify\"></i> fa-align-justify</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-left\"></i> fa-align-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-right\"></i> fa-align-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bold\"></i> fa-bold</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chain\"></i> fa-chain <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chain-broken\"></i> fa-chain-broken</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-clipboard\"></i> fa-clipboard</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-columns\"></i> fa-columns</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-copy\"></i> fa-copy <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cut\"></i> fa-cut <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dedent\"></i> fa-dedent
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-eraser\"></i> fa-eraser</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file\"></i> fa-file</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-o\"></i> fa-file-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text\"></i> fa-file-text</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text-o\"></i> fa-file-text-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-files-o\"></i> fa-files-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-floppy-o\"></i> fa-floppy-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-font\"></i> fa-font</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-header\"></i> fa-header</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-indent\"></i> fa-indent</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-italic\"></i> fa-italic</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-link\"></i> fa-link</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list\"></i> fa-list</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list-alt\"></i> fa-list-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list-ol\"></i> fa-list-ol</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list-ul\"></i> fa-list-ul</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-outdent\"></i> fa-outdent</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paperclip\"></i> fa-paperclip</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paragraph\"></i> fa-paragraph</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paste\"></i> fa-paste <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-repeat\"></i> fa-repeat</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rotate-left\"></i> fa-rotate-left
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rotate-right\"></i> fa-rotate-right
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-save\"></i> fa-save <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-scissors\"></i> fa-scissors</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-strikethrough\"></i> fa-strikethrough</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-subscript\"></i> fa-subscript</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-superscript\"></i> fa-superscript</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-table\"></i> fa-table</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-text-height\"></i> fa-text-height</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-text-width\"></i> fa-text-width</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-th\"></i> fa-th</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-th-large\"></i> fa-th-large</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-th-list\"></i> fa-th-list</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-underline\"></i> fa-underline</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-undo\"></i> fa-undo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-unlink\"></i> fa-unlink
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Directional Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-down\"></i> fa-angle-double-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-left\"></i> fa-angle-double-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-right\"></i> fa-angle-double-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-up\"></i> fa-angle-double-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-down\"></i> fa-angle-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-left\"></i> fa-angle-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-right\"></i> fa-angle-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-up\"></i> fa-angle-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-down\"></i> fa-arrow-circle-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-left\"></i> fa-arrow-circle-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-down\"></i>
\t\t\t\t  fa-arrow-circle-o-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-left\"></i>
\t\t\t\t  fa-arrow-circle-o-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-right\"></i>
\t\t\t\t  fa-arrow-circle-o-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-up\"></i> fa-arrow-circle-o-up
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-right\"></i> fa-arrow-circle-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-up\"></i> fa-arrow-circle-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-down\"></i> fa-arrow-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-left\"></i> fa-arrow-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-right\"></i> fa-arrow-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-up\"></i> fa-arrow-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows\"></i> fa-arrows</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-alt\"></i> fa-arrows-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-h\"></i> fa-arrows-h</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-v\"></i> fa-arrows-v</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-down\"></i> fa-caret-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-left\"></i> fa-caret-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-right\"></i> fa-caret-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-down\"></i>
\t\t\t\t  fa-caret-square-o-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-left\"></i>
\t\t\t\t  fa-caret-square-o-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-right\"></i>
\t\t\t\t  fa-caret-square-o-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-up\"></i> fa-caret-square-o-up
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-up\"></i> fa-caret-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-down\"></i>
\t\t\t\t  fa-chevron-circle-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-left\"></i>
\t\t\t\t  fa-chevron-circle-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-right\"></i>
\t\t\t\t  fa-chevron-circle-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-up\"></i> fa-chevron-circle-up
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-down\"></i> fa-chevron-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-left\"></i> fa-chevron-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-right\"></i> fa-chevron-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-up\"></i> fa-chevron-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-exchange\"></i> fa-exchange</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-down\"></i> fa-hand-o-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-left\"></i> fa-hand-o-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-right\"></i> fa-hand-o-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-up\"></i> fa-hand-o-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-down\"></i> fa-long-arrow-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-left\"></i> fa-long-arrow-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-right\"></i> fa-long-arrow-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-up\"></i> fa-long-arrow-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-down\"></i> fa-toggle-down
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-left\"></i> fa-toggle-left
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-right\"></i> fa-toggle-right
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-up\"></i> fa-toggle-up
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Video Player Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-alt\"></i> fa-arrows-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-backward\"></i> fa-backward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-compress\"></i> fa-compress</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-eject\"></i> fa-eject</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-expand\"></i> fa-expand</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fast-backward\"></i> fa-fast-backward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fast-forward\"></i> fa-fast-forward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-forward\"></i> fa-forward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pause\"></i> fa-pause</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pause-circle\" aria-hidden=\"true\"></i>pause-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pause-circle-o\" aria-hidden=\"true\"></i>pause-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-play\"></i> fa-play</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-play-circle\"></i> fa-play-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-play-circle-o\"></i> fa-play-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-random\"></i> fa-random</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-step-backward\"></i> fa-step-backward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-step-forward\"></i> fa-step-forward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stop\"></i> fa-stop</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-stop-circle\" aria-hidden=\"true\"></i>stop-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-stop-circle-o\" aria-hidden=\"true\"></i>stop-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube-play\"></i> fa-youtube-play</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Brand Icons</h4>

\t\t\t  <div class=\"alert alert-info\">
\t\t\t\t<ul class=\"margin-bottom-none padding-left-lg\">
\t\t\t\t  <li>All brand icons are trademarks of their respective owners.</li>
\t\t\t\t  <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font
\t\t\t\t\tAwesome, nor vice versa.
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-500px\"></i> fa-500px</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-adn\"></i> fa-adn</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-amazon\"></i> fa-amazon</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-android\"></i> fa-android</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angellist\"></i> fa-angellist</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-apple\"></i> fa-apple</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-behance\"></i> fa-behance</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-behance-square\"></i> fa-behance-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitbucket\"></i> fa-bitbucket</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitbucket-square\"></i> fa-bitbucket-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitcoin\"></i> fa-bitcoin
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-black-tie\"></i> fa-black-tie</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-btc\"></i> fa-btc</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-buysellads\"></i> fa-buysellads</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-amex\"></i> fa-cc-amex</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-diners-club\"></i> fa-cc-diners-club</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-discover\"></i> fa-cc-discover</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-jcb\"></i> fa-cc-jcb</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-mastercard\"></i> fa-cc-mastercard</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-paypal\"></i> fa-cc-paypal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-stripe\"></i> fa-cc-stripe</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-visa\"></i> fa-cc-visa</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chrome\"></i> fa-chrome</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-codepen\"></i> fa-codepen</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-connectdevelop\"></i> fa-connectdevelop</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-contao\"></i> fa-contao</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-css3\"></i> fa-css3</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dashcube\"></i> fa-dashcube</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-delicious\"></i> fa-delicious</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-deviantart\"></i> fa-deviantart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-digg\"></i> fa-digg</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dribbble\"></i> fa-dribbble</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dropbox\"></i> fa-dropbox</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-drupal\"></i> fa-drupal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-empire\"></i> fa-empire</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-expeditedssl\"></i> fa-expeditedssl</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook\"></i> fa-facebook</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook-f\"></i> fa-facebook-f
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook-official\"></i> fa-facebook-official
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook-square\"></i> fa-facebook-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-firefox\"></i> fa-firefox</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-flickr\"></i> fa-flickr</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fonticons\"></i> fa-fonticons</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-forumbee\"></i> fa-forumbee</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-foursquare\"></i> fa-foursquare</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ge\"></i> fa-ge
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-get-pocket\"></i> fa-get-pocket</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg\"></i> fa-gg</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg-circle\"></i> fa-gg-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-git\"></i> fa-git</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-git-square\"></i> fa-git-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-github\"></i> fa-github</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-github-alt\"></i> fa-github-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-github-square\"></i> fa-github-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gittip\"></i> fa-gittip
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google\"></i> fa-google</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-plus\"></i> fa-google-plus</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-plus-square\"></i> fa-google-plus-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-wallet\"></i> fa-google-wallet</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gratipay\"></i> fa-gratipay</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hacker-news\"></i> fa-hacker-news</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-houzz\"></i> fa-houzz</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-html5\"></i> fa-html5</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-instagram\"></i> fa-instagram</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-internet-explorer\"></i> fa-internet-explorer
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ioxhost\"></i> fa-ioxhost</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-joomla\"></i> fa-joomla</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-jsfiddle\"></i> fa-jsfiddle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-lastfm\"></i> fa-lastfm</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-lastfm-square\"></i> fa-lastfm-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-leanpub\"></i> fa-leanpub</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-linkedin\"></i> fa-linkedin</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-linkedin-square\"></i> fa-linkedin-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-linux\"></i> fa-linux</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-maxcdn\"></i> fa-maxcdn</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-meanpath\"></i> fa-meanpath</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-medium\"></i> fa-medium</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-odnoklassniki\"></i> fa-odnoklassniki</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-odnoklassniki-square\"></i>
\t\t\t\t  fa-odnoklassniki-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-opencart\"></i> fa-opencart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-openid\"></i> fa-openid</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-opera\"></i> fa-opera</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-optin-monster\"></i> fa-optin-monster</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pagelines\"></i> fa-pagelines</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paypal\"></i> fa-paypal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pied-piper\"></i> fa-pied-piper</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pied-piper-alt\"></i> fa-pied-piper-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pinterest\"></i> fa-pinterest</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pinterest-p\"></i> fa-pinterest-p</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pinterest-square\"></i> fa-pinterest-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-qq\"></i> fa-qq</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ra\"></i> fa-ra
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rebel\"></i> fa-rebel</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-reddit\"></i> fa-reddit</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-reddit-square\"></i> fa-reddit-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-renren\"></i> fa-renren</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-safari\"></i> fa-safari</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-sellsy\"></i> fa-sellsy</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-share-alt\"></i> fa-share-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-share-alt-square\"></i> fa-share-alt-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-shirtsinbulk\"></i> fa-shirtsinbulk</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-simplybuilt\"></i> fa-simplybuilt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-skyatlas\"></i> fa-skyatlas</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-skype\"></i> fa-skype</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-slack\"></i> fa-slack</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-slideshare\"></i> fa-slideshare</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-soundcloud\"></i> fa-soundcloud</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-spotify\"></i> fa-spotify</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stack-exchange\"></i> fa-stack-exchange</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stack-overflow\"></i> fa-stack-overflow</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-steam\"></i> fa-steam</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-steam-square\"></i> fa-steam-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stumbleupon\"></i> fa-stumbleupon</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stumbleupon-circle\"></i> fa-stumbleupon-circle
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tencent-weibo\"></i> fa-tencent-weibo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-trello\"></i> fa-trello</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tripadvisor\"></i> fa-tripadvisor</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tumblr\"></i> fa-tumblr</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tumblr-square\"></i> fa-tumblr-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-twitch\"></i> fa-twitch</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-twitter\"></i> fa-twitter</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-twitter-square\"></i> fa-twitter-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-viacoin\"></i> fa-viacoin</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vimeo\"></i> fa-vimeo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vimeo-square\"></i> fa-vimeo-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vine\"></i> fa-vine</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vk\"></i> fa-vk</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wechat\"></i> fa-wechat
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-weibo\"></i> fa-weibo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-weixin\"></i> fa-weixin</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-whatsapp\"></i> fa-whatsapp</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wikipedia-w\"></i> fa-wikipedia-w</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-windows\"></i> fa-windows</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wordpress\"></i> fa-wordpress</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-xing\"></i> fa-xing</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-xing-square\"></i> fa-xing-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-y-combinator\"></i> fa-y-combinator</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-y-combinator-square\"></i>
\t\t\t\t  fa-y-combinator-square <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yahoo\"></i> fa-yahoo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yc\"></i> fa-yc
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yc-square\"></i> fa-yc-square
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yelp\"></i> fa-yelp</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube\"></i> fa-youtube</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube-play\"></i> fa-youtube-play</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube-square\"></i> fa-youtube-square</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Medical Icons</h4>
\t\t\t   <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ambulance\"></i> fa-ambulance</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-h-square\"></i> fa-h-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-heart\"></i> fa-heart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-heart-o\"></i> fa-heart-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-heartbeat\"></i> fa-heartbeat</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hospital-o\"></i> fa-hospital-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-medkit\"></i> fa-medkit</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plus-square\"></i> fa-plus-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stethoscope\"></i> fa-stethoscope</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-user-md\"></i> fa-user-md</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wheelchair\"></i> fa-wheelchair</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> wheelchair-alt</div>
\t\t\t  </div>
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
        return "icons_fontawesome.html.twig";
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
\t\t\t\t\t<h3 class=\"page-title\">Font Awesome</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Font Awesome</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<div class=\"box box-body\">
\t\t\t  <h4 class=\"page-header\">41 New Icons in 4.7</h4>                  
\t\t\t\t<div class=\"row fontawesome-icon-list m-0\">

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book\" aria-hidden=\"true\"></i> fa-address-book</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book-o\" aria-hidden=\"true\"></i> fa-address-book-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> fa-address-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card-o\" aria-hidden=\"true\"></i> fa-address-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bandcamp\" aria-hidden=\"true\"></i> fa-bandcamp</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bath\" aria-hidden=\"true\"></i> fa-bath</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bathtub\" aria-hidden=\"true\"></i> fa-bathtub <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license\" aria-hidden=\"true\"></i> fa-drivers-license <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license-o\" aria-hidden=\"true\"></i> fa-drivers-license-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eercast\" aria-hidden=\"true\"></i> fa-eercast</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open\" aria-hidden=\"true\"></i> fa-envelope-open</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open-o\" aria-hidden=\"true\"></i> fa-envelope-open-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-etsy\" aria-hidden=\"true\"></i> fa-etsy</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-free-code-camp\" aria-hidden=\"true\"></i> fa-free-code-camp</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-grav\" aria-hidden=\"true\"></i> fa-grav</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-handshake-o\" aria-hidden=\"true\"></i> fa-handshake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-badge\" aria-hidden=\"true\"></i> fa-id-badge</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i> fa-id-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card-o\" aria-hidden=\"true\"></i> fa-id-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-imdb\" aria-hidden=\"true\"></i> fa-imdb</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-linode\" aria-hidden=\"true\"></i> fa-linode</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-meetup\" aria-hidden=\"true\"></i> fa-meetup</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microchip\" aria-hidden=\"true\"></i> fa-microchip</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-podcast\" aria-hidden=\"true\"></i> fa-podcast</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-quora\" aria-hidden=\"true\"></i> fa-quora</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ravelry\" aria-hidden=\"true\"></i> fa-ravelry</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-s15\" aria-hidden=\"true\"></i> fa-s15 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shower\" aria-hidden=\"true\"></i> fa-shower</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> fa-snowflake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-superpowers\" aria-hidden=\"true\"></i> fa-superpowers</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-telegram\" aria-hidden=\"true\"></i> fa-telegram</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer\" aria-hidden=\"true\"></i> fa-thermometer <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-0\" aria-hidden=\"true\"></i> fa-thermometer-0 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-1\" aria-hidden=\"true\"></i> fa-thermometer-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-2\" aria-hidden=\"true\"></i> fa-thermometer-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-3\" aria-hidden=\"true\"></i> fa-thermometer-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-4\" aria-hidden=\"true\"></i> fa-thermometer-4 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-empty\" aria-hidden=\"true\"></i> fa-thermometer-empty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i> fa-thermometer-full</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-half\" aria-hidden=\"true\"></i> fa-thermometer-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-quarter\" aria-hidden=\"true\"></i> fa-thermometer-quarter</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-three-quarters\" aria-hidden=\"true\"></i> fa-thermometer-three-quarters</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle\" aria-hidden=\"true\"></i> fa-times-rectangle <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle-o\" aria-hidden=\"true\"></i> fa-times-rectangle-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> fa-user-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> fa-user-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> fa-user-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard\" aria-hidden=\"true\"></i> fa-vcard <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard-o\" aria-hidden=\"true\"></i> fa-vcard-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i> fa-window-close</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close-o\" aria-hidden=\"true\"></i> fa-window-close-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-maximize\" aria-hidden=\"true\"></i> fa-window-maximize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-minimize\" aria-hidden=\"true\"></i> fa-window-minimize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-restore\" aria-hidden=\"true\"></i> fa-window-restore</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wpexplorer\" aria-hidden=\"true\"></i> fa-wpexplorer</div>
\t\t\t\t</div>

\t\t\t  <h4 class=\"page-header mt-30\">Web Application Icons</h4>
\t\t\t\t<div class=\"row fontawesome-icon-list m-0\">

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book\" aria-hidden=\"true\"></i> fa-address-book</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-book-o\" aria-hidden=\"true\"></i> fa-address-book-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> fa-address-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-address-card-o\" aria-hidden=\"true\"></i> fa-address-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-adjust\" aria-hidden=\"true\"></i> fa-adjust</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-american-sign-language-interpreting\" aria-hidden=\"true\"></i> fa-american-sign-language-interpreting</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-anchor\" aria-hidden=\"true\"></i> fa-anchor</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-archive\" aria-hidden=\"true\"></i> fa-archive</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-area-chart\" aria-hidden=\"true\"></i> fa-area-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-arrows\" aria-hidden=\"true\"></i> fa-arrows</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-arrows-h\" aria-hidden=\"true\"></i> fa-arrows-h</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-arrows-v\" aria-hidden=\"true\"></i> fa-arrows-v</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-asl-interpreting\" aria-hidden=\"true\"></i> fa-asl-interpreting <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-assistive-listening-systems\" aria-hidden=\"true\"></i> fa-assistive-listening-systems</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-asterisk\" aria-hidden=\"true\"></i> fa-asterisk</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-at\" aria-hidden=\"true\"></i> fa-at</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-audio-description\" aria-hidden=\"true\"></i> fa-audio-description</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-automobile\" aria-hidden=\"true\"></i> fa-automobile <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-balance-scale\" aria-hidden=\"true\"></i> fa-balance-scale</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> fa-ban</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bank\" aria-hidden=\"true\"></i> fa-bank <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> fa-bar-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bar-chart-o\" aria-hidden=\"true\"></i> fa-bar-chart-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-barcode\" aria-hidden=\"true\"></i> fa-barcode</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> fa-bars</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bath\" aria-hidden=\"true\"></i> fa-bath</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bathtub\" aria-hidden=\"true\"></i> fa-bathtub <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery\" aria-hidden=\"true\"></i> fa-battery <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-0\" aria-hidden=\"true\"></i> fa-battery-0 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-1\" aria-hidden=\"true\"></i> fa-battery-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-2\" aria-hidden=\"true\"></i> fa-battery-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-3\" aria-hidden=\"true\"></i> fa-battery-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-4\" aria-hidden=\"true\"></i> fa-battery-4 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-empty\" aria-hidden=\"true\"></i> fa-battery-empty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-full\" aria-hidden=\"true\"></i> fa-battery-full</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-half\" aria-hidden=\"true\"></i> fa-battery-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-quarter\" aria-hidden=\"true\"></i> fa-battery-quarter</div>\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-battery-three-quarters\" aria-hidden=\"true\"></i> fa-battery-three-quarters</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bed\" aria-hidden=\"true\"></i> fa-bed</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-beer\" aria-hidden=\"true\"></i> fa-beer</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i> fa-bell</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i> fa-bell-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell-slash\" aria-hidden=\"true\"></i> fa-bell-slash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bell-slash-o\" aria-hidden=\"true\"></i> fa-bell-slash-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bicycle\" aria-hidden=\"true\"></i> fa-bicycle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-binoculars\" aria-hidden=\"true\"></i> fa-binoculars</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-birthday-cake\" aria-hidden=\"true\"></i> fa-birthday-cake</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-blind\" aria-hidden=\"true\"></i> fa-blind</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bluetooth\" aria-hidden=\"true\"></i> fa-bluetooth</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bluetooth-b\" aria-hidden=\"true\"></i> fa-bluetooth-b</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bolt\" aria-hidden=\"true\"></i> fa-bolt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bomb\" aria-hidden=\"true\"></i> fa-bomb</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> fa-book</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i> fa-bookmark</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i> fa-bookmark-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-braille\" aria-hidden=\"true\"></i> fa-braille</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i> fa-briefcase</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bug\" aria-hidden=\"true\"></i> fa-bug</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> fa-building</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-building-o\" aria-hidden=\"true\"></i> fa-building-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> fa-bullhorn</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bullseye\" aria-hidden=\"true\"></i> fa-bullseye</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-bus\" aria-hidden=\"true\"></i> fa-bus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cab\" aria-hidden=\"true\"></i> fa-cab <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calculator\" aria-hidden=\"true\"></i> fa-calculator</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> fa-calendar</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i> fa-calendar-check-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-minus-o\" aria-hidden=\"true\"></i> fa-calendar-minus-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> fa-calendar-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-plus-o\" aria-hidden=\"true\"></i> fa-calendar-plus-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-calendar-times-o\" aria-hidden=\"true\"></i> fa-calendar-times-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-camera\" aria-hidden=\"true\"></i> fa-camera</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-camera-retro\" aria-hidden=\"true\"></i> fa-camera-retro</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-car\" aria-hidden=\"true\"></i> fa-car</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i> fa-caret-square-o-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-left\" aria-hidden=\"true\"></i> fa-caret-square-o-left</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-right\" aria-hidden=\"true\"></i> fa-caret-square-o-right</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-caret-square-o-up\" aria-hidden=\"true\"></i> fa-caret-square-o-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i> fa-cart-arrow-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i> fa-cart-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cc\" aria-hidden=\"true\"></i> fa-cc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-certificate\" aria-hidden=\"true\"></i> fa-certificate</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i> fa-check</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> fa-check-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i> fa-check-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-square\" aria-hidden=\"true\"></i> fa-check-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> fa-check-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-child\" aria-hidden=\"true\"></i> fa-child</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle\" aria-hidden=\"true\"></i> fa-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i> fa-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i> fa-circle-o-notch</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-circle-thin\" aria-hidden=\"true\"></i> fa-circle-thin</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> fa-clock-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-clone\" aria-hidden=\"true\"></i> fa-clone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i> fa-close <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cloud\" aria-hidden=\"true\"></i> fa-cloud</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> fa-cloud-download</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i> fa-cloud-upload</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> fa-code</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-code-fork\" aria-hidden=\"true\"></i> fa-code-fork</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-coffee\" aria-hidden=\"true\"></i> fa-coffee</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> fa-cog</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> fa-cogs</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i> fa-comment</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> fa-comment-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i> fa-commenting</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-commenting-o\" aria-hidden=\"true\"></i> fa-commenting-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comments\" aria-hidden=\"true\"></i> fa-comments</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> fa-comments-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-compass\" aria-hidden=\"true\"></i> fa-compass</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-copyright\" aria-hidden=\"true\"></i> fa-copyright</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-creative-commons\" aria-hidden=\"true\"></i> fa-creative-commons</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> fa-credit-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i> fa-credit-card-alt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-crop\" aria-hidden=\"true\"></i> fa-crop</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-crosshairs\" aria-hidden=\"true\"></i> fa-crosshairs</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cube\" aria-hidden=\"true\"></i> fa-cube</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cubes\" aria-hidden=\"true\"></i> fa-cubes</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> fa-cutlery</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> fa-dashboard <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-database\" aria-hidden=\"true\"></i> fa-database</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deaf\" aria-hidden=\"true\"></i> fa-deaf</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deafness\" aria-hidden=\"true\"></i> fa-deafness <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> fa-desktop</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-diamond\" aria-hidden=\"true\"></i> fa-diamond</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i> fa-dot-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> fa-download</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license\" aria-hidden=\"true\"></i> fa-drivers-license <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-drivers-license-o\" aria-hidden=\"true\"></i> fa-drivers-license-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> fa-edit <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i> fa-ellipsis-h</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i> fa-ellipsis-v</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> fa-envelope</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> fa-envelope-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open\" aria-hidden=\"true\"></i> fa-envelope-open</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-open-o\" aria-hidden=\"true\"></i> fa-envelope-open-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-envelope-square\" aria-hidden=\"true\"></i> fa-envelope-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eraser\" aria-hidden=\"true\"></i> fa-eraser</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exchange\" aria-hidden=\"true\"></i> fa-exchange</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exclamation\" aria-hidden=\"true\"></i> fa-exclamation</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> fa-exclamation-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> fa-exclamation-triangle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-external-link\" aria-hidden=\"true\"></i> fa-external-link</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-external-link-square\" aria-hidden=\"true\"></i> fa-external-link-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> fa-eye</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eye-slash\" aria-hidden=\"true\"></i> fa-eye-slash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-eyedropper\" aria-hidden=\"true\"></i> fa-eyedropper</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fax\" aria-hidden=\"true\"></i> fa-fax</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-feed\" aria-hidden=\"true\"></i> fa-feed <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-female\" aria-hidden=\"true\"></i> fa-female</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fighter-jet\" aria-hidden=\"true\"></i> fa-fighter-jet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i> fa-file-archive-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-audio-o\" aria-hidden=\"true\"></i> fa-file-audio-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-code-o\" aria-hidden=\"true\"></i> fa-file-code-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i> fa-file-excel-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i> fa-file-image-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-movie-o\" aria-hidden=\"true\"></i> fa-file-movie-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i> fa-file-pdf-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-photo-o\" aria-hidden=\"true\"></i> fa-file-photo-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-picture-o\" aria-hidden=\"true\"></i> fa-file-picture-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-powerpoint-o\" aria-hidden=\"true\"></i> fa-file-powerpoint-o</div>

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-sound-o\" aria-hidden=\"true\"></i> fa-file-sound-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-video-o\" aria-hidden=\"true\"></i> fa-file-video-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-word-o\" aria-hidden=\"true\"></i> fa-file-word-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-file-zip-o\" aria-hidden=\"true\"></i> fa-file-zip-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-film\" aria-hidden=\"true\"></i> fa-film</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-filter\" aria-hidden=\"true\"></i> fa-filter</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fire\" aria-hidden=\"true\"></i> fa-fire</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fire-extinguisher\" aria-hidden=\"true\"></i> fa-fire-extinguisher</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flag\" aria-hidden=\"true\"></i> fa-flag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flag-checkered\" aria-hidden=\"true\"></i> fa-flag-checkered</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flag-o\" aria-hidden=\"true\"></i> fa-flag-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flash\" aria-hidden=\"true\"></i> fa-flash <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-flask\" aria-hidden=\"true\"></i> fa-flask</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder\" aria-hidden=\"true\"></i> fa-folder</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i> fa-folder-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i> fa-folder-open</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-folder-open-o\" aria-hidden=\"true\"></i> fa-folder-open-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> fa-frown-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-futbol-o\" aria-hidden=\"true\"></i> fa-futbol-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> fa-gamepad</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gavel\" aria-hidden=\"true\"></i> fa-gavel</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gear\" aria-hidden=\"true\"></i> fa-gear <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gears\" aria-hidden=\"true\"></i> fa-gears <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-gift\" aria-hidden=\"true\"></i> fa-gift</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-glass\" aria-hidden=\"true\"></i> fa-glass</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-globe\" aria-hidden=\"true\"></i> fa-globe</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i> fa-graduation-cap</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-group\" aria-hidden=\"true\"></i> fa-group <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-grab-o\" aria-hidden=\"true\"></i> fa-hand-grab-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-lizard-o\" aria-hidden=\"true\"></i> fa-hand-lizard-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-paper-o\" aria-hidden=\"true\"></i> fa-hand-paper-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-peace-o\" aria-hidden=\"true\"></i> fa-hand-peace-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-pointer-o\" aria-hidden=\"true\"></i> fa-hand-pointer-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i> fa-hand-rock-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-scissors-o\" aria-hidden=\"true\"></i> fa-hand-scissors-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-spock-o\" aria-hidden=\"true\"></i> fa-hand-spock-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hand-stop-o\" aria-hidden=\"true\"></i> fa-hand-stop-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-handshake-o\" aria-hidden=\"true\"></i> fa-handshake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hard-of-hearing\" aria-hidden=\"true\"></i> fa-hard-of-hearing <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hashtag\" aria-hidden=\"true\"></i> fa-hashtag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hdd-o\" aria-hidden=\"true\"></i> fa-hdd-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-headphones\" aria-hidden=\"true\"></i> fa-headphones</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> fa-heart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> fa-heart-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i> fa-heartbeat</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-history\" aria-hidden=\"true\"></i> fa-history</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> fa-home</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hotel\" aria-hidden=\"true\"></i> fa-hotel <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass\" aria-hidden=\"true\"></i> fa-hourglass</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-1\" aria-hidden=\"true\"></i> fa-hourglass-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-2\" aria-hidden=\"true\"></i> fa-hourglass-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-3\" aria-hidden=\"true\"></i> fa-hourglass-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-end\" aria-hidden=\"true\"></i> fa-hourglass-end</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> fa-hourglass-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-o\" aria-hidden=\"true\"></i> fa-hourglass-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hourglass-start\" aria-hidden=\"true\"></i> fa-hourglass-start</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-i-cursor\" aria-hidden=\"true\"></i> fa-i-cursor</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-badge\" aria-hidden=\"true\"></i> fa-id-badge</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i> fa-id-card</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-id-card-o\" aria-hidden=\"true\"></i> fa-id-card-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-image\" aria-hidden=\"true\"></i> fa-image <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-inbox\" aria-hidden=\"true\"></i> fa-inbox</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-industry\" aria-hidden=\"true\"></i> fa-industry</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i> fa-info</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> fa-info-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-institution\" aria-hidden=\"true\"></i> fa-institution <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i> fa-key</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i> fa-keyboard-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-language\" aria-hidden=\"true\"></i> fa-language</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-laptop\" aria-hidden=\"true\"></i> fa-laptop</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-leaf\" aria-hidden=\"true\"></i> fa-leaf</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-legal\" aria-hidden=\"true\"></i> fa-legal <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-lemon-o\" aria-hidden=\"true\"></i> fa-lemon-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-level-down\" aria-hidden=\"true\"></i> fa-level-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-level-up\" aria-hidden=\"true\"></i> fa-level-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-bouy\" aria-hidden=\"true\"></i> fa-life-bouy <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-buoy\" aria-hidden=\"true\"></i> fa-life-buoy <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i> fa-life-ring</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-life-saver\" aria-hidden=\"true\"></i> fa-life-saver <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"></i> fa-lightbulb-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i> fa-line-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> fa-location-arrow</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> fa-lock</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-low-vision\" aria-hidden=\"true\"></i> fa-low-vision</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-magic\" aria-hidden=\"true\"></i> fa-magic</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-magnet\" aria-hidden=\"true\"></i> fa-magnet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mail-forward\" aria-hidden=\"true\"></i> fa-mail-forward <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mail-reply\" aria-hidden=\"true\"></i> fa-mail-reply <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mail-reply-all\" aria-hidden=\"true\"></i> fa-mail-reply-all <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-male\" aria-hidden=\"true\"></i> fa-male</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map\" aria-hidden=\"true\"></i> fa-map</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> fa-map-marker</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-o\" aria-hidden=\"true\"></i> fa-map-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-pin\" aria-hidden=\"true\"></i> fa-map-pin</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-map-signs\" aria-hidden=\"true\"></i> fa-map-signs</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-meh-o\" aria-hidden=\"true\"></i> fa-meh-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microchip\" aria-hidden=\"true\"></i> fa-microchip</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i> fa-microphone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-microphone-slash\" aria-hidden=\"true\"></i> fa-microphone-slash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i> fa-minus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> fa-minus-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus-square\" aria-hidden=\"true\"></i> fa-minus-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-minus-square-o\" aria-hidden=\"true\"></i> fa-minus-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> fa-mobile</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mobile-phone\" aria-hidden=\"true\"></i> fa-mobile-phone <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> fa-money</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-moon-o\" aria-hidden=\"true\"></i> fa-moon-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mortar-board\" aria-hidden=\"true\"></i> fa-mortar-board <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i> fa-motorcycle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-mouse-pointer\" aria-hidden=\"true\"></i> fa-mouse-pointer</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-music\" aria-hidden=\"true\"></i> fa-music</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-navicon\" aria-hidden=\"true\"></i> fa-navicon <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-newspaper-o\" aria-hidden=\"true\"></i> fa-newspaper-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-object-group\" aria-hidden=\"true\"></i> fa-object-group</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-object-ungroup\" aria-hidden=\"true\"></i> fa-object-ungroup</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paint-brush\" aria-hidden=\"true\"></i> fa-paint-brush</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> fa-paper-plane</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i> fa-paper-plane-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-paw\" aria-hidden=\"true\"></i> fa-paw</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> fa-pencil</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pencil-square\" aria-hidden=\"true\"></i> fa-pencil-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> fa-pencil-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-percent\" aria-hidden=\"true\"></i> fa-percent</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> fa-phone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-phone-square\" aria-hidden=\"true\"></i> fa-phone-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-photo\" aria-hidden=\"true\"></i> fa-photo <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i> fa-picture-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pie-chart\" aria-hidden=\"true\"></i> fa-pie-chart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plane\" aria-hidden=\"true\"></i> fa-plane</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plug\" aria-hidden=\"true\"></i> fa-plug</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> fa-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> fa-plus-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i> fa-plus-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i> fa-plus-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-podcast\" aria-hidden=\"true\"></i> fa-podcast</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> fa-power-off</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i> fa-print</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-puzzle-piece\" aria-hidden=\"true\"></i> fa-puzzle-piece</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-qrcode\" aria-hidden=\"true\"></i> fa-qrcode</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question\" aria-hidden=\"true\"></i> fa-question</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> fa-question-circle</div>\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i> fa-question-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i> fa-quote-left</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i> fa-quote-right</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-random\" aria-hidden=\"true\"></i> fa-random</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-recycle\" aria-hidden=\"true\"></i> fa-recycle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> fa-refresh</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-registered\" aria-hidden=\"true\"></i> fa-registered</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-remove\" aria-hidden=\"true\"></i> fa-remove <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-reorder\" aria-hidden=\"true\"></i> fa-reorder <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-reply\" aria-hidden=\"true\"></i> fa-reply</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-reply-all\" aria-hidden=\"true\"></i> fa-reply-all</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-retweet\" aria-hidden=\"true\"></i> fa-retweet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-road\" aria-hidden=\"true\"></i> fa-road</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i> fa-rocket</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> fa-rss</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i> fa-rss-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-s15\" aria-hidden=\"true\"></i> fa-s15 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i> fa-search</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-search-minus\" aria-hidden=\"true\"></i> fa-search-minus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i> fa-search-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-send\" aria-hidden=\"true\"></i> fa-send <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-send-o\" aria-hidden=\"true\"></i> fa-send-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-server\" aria-hidden=\"true\"></i> fa-server</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i> fa-share</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i> fa-share-alt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-alt-square\" aria-hidden=\"true\"></i> fa-share-alt-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-square\" aria-hidden=\"true\"></i> fa-share-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i> fa-share-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shield\" aria-hidden=\"true\"></i> fa-shield</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ship\" aria-hidden=\"true\"></i> fa-ship</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i> fa-shopping-bag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i> fa-shopping-basket</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> fa-shopping-cart</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-shower\" aria-hidden=\"true\"></i> fa-shower</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> fa-sign-in</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-language\" aria-hidden=\"true\"></i> fa-sign-language</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> fa-sign-out</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-signal\" aria-hidden=\"true\"></i> fa-signal</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-signing\" aria-hidden=\"true\"></i> fa-signing <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sitemap\" aria-hidden=\"true\"></i> fa-sitemap</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i> fa-sliders</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i> fa-smile-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i> fa-snowflake-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-soccer-ball-o\" aria-hidden=\"true\"></i> fa-soccer-ball-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i> fa-sort</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-alpha-asc\" aria-hidden=\"true\"></i> fa-sort-alpha-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-alpha-desc\" aria-hidden=\"true\"></i> fa-sort-alpha-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-amount-asc\" aria-hidden=\"true\"></i> fa-sort-amount-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-amount-desc\" aria-hidden=\"true\"></i> fa-sort-amount-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-asc\" aria-hidden=\"true\"></i> fa-sort-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-desc\" aria-hidden=\"true\"></i> fa-sort-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-down\" aria-hidden=\"true\"></i> fa-sort-down <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-numeric-asc\" aria-hidden=\"true\"></i> fa-sort-numeric-asc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-numeric-desc\" aria-hidden=\"true\"></i> fa-sort-numeric-desc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sort-up\" aria-hidden=\"true\"></i> fa-sort-up <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-space-shuttle\" aria-hidden=\"true\"></i> fa-space-shuttle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-spinner\" aria-hidden=\"true\"></i> fa-spinner</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-spoon\" aria-hidden=\"true\"></i> fa-spoon</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-square\" aria-hidden=\"true\"></i> fa-square</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-square-o\" aria-hidden=\"true\"></i> fa-square-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i> fa-star</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half\" aria-hidden=\"true\"></i> fa-star-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half-empty\" aria-hidden=\"true\"></i> fa-star-half-empty <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half-full\" aria-hidden=\"true\"></i> fa-star-half-full <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i> fa-star-half-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i> fa-star-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sticky-note\" aria-hidden=\"true\"></i> fa-sticky-note</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sticky-note-o\" aria-hidden=\"true\"></i> fa-sticky-note-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-street-view\" aria-hidden=\"true\"></i> fa-street-view</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-suitcase\" aria-hidden=\"true\"></i> fa-suitcase</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sun-o\" aria-hidden=\"true\"></i> fa-sun-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-support\" aria-hidden=\"true\"></i> fa-support <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tablet\" aria-hidden=\"true\"></i> fa-tablet</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i> fa-tachometer</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tag\" aria-hidden=\"true\"></i> fa-tag</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> fa-tags</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> fa-tasks</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-taxi\" aria-hidden=\"true\"></i> fa-taxi</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-television\" aria-hidden=\"true\"></i> fa-television</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-terminal\" aria-hidden=\"true\"></i> fa-terminal</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer\" aria-hidden=\"true\"></i> fa-thermometer <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-0\" aria-hidden=\"true\"></i> fa-thermometer-0 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-1\" aria-hidden=\"true\"></i> fa-thermometer-1 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-2\" aria-hidden=\"true\"></i> fa-thermometer-2 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-3\" aria-hidden=\"true\"></i> fa-thermometer-3 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-4\" aria-hidden=\"true\"></i> fa-thermometer-4 <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-empty\" aria-hidden=\"true\"></i> fa-thermometer-empty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i> fa-thermometer-full</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-half\" aria-hidden=\"true\"></i> fa-thermometer-half</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-quarter\" aria-hidden=\"true\"></i> fa-thermometer-quarter</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thermometer-three-quarters\" aria-hidden=\"true\"></i> fa-thermometer-three-quarters</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumb-tack\" aria-hidden=\"true\"></i> fa-thumb-tack</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i> fa-thumbs-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-o-down\" aria-hidden=\"true\"></i> fa-thumbs-o-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> fa-thumbs-o-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> fa-thumbs-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> fa-ticket</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> fa-times</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i> fa-times-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-circle-o\" aria-hidden=\"true\"></i> fa-times-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle\" aria-hidden=\"true\"></i> fa-times-rectangle <span class=\"text-muted\">(alias)</span></div>

\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-times-rectangle-o\" aria-hidden=\"true\"></i> fa-times-rectangle-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tint\" aria-hidden=\"true\"></i> fa-tint</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-down\" aria-hidden=\"true\"></i> fa-toggle-down <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-left\" aria-hidden=\"true\"></i> fa-toggle-left <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i> fa-toggle-off</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i> fa-toggle-on</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-right\" aria-hidden=\"true\"></i> fa-toggle-right <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-toggle-up\" aria-hidden=\"true\"></i> fa-toggle-up <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trademark\" aria-hidden=\"true\"></i> fa-trademark</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> fa-trash</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i> fa-trash-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tree\" aria-hidden=\"true\"></i> fa-tree</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> fa-trophy</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-truck\" aria-hidden=\"true\"></i> fa-truck</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tty\" aria-hidden=\"true\"></i> fa-tty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tv\" aria-hidden=\"true\"></i> fa-tv <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-umbrella\" aria-hidden=\"true\"></i> fa-umbrella</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"></i> fa-universal-access</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i> fa-university</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-unlock\" aria-hidden=\"true\"></i> fa-unlock</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> fa-unlock-alt</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-unsorted\" aria-hidden=\"true\"></i> fa-unsorted <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-upload\" aria-hidden=\"true\"></i> fa-upload</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> fa-user</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> fa-user-circle</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> fa-user-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> fa-user-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> fa-user-plus</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-secret\" aria-hidden=\"true\"></i> fa-user-secret</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-user-times\" aria-hidden=\"true\"></i> fa-user-times</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> fa-users</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard\" aria-hidden=\"true\"></i> fa-vcard <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-vcard-o\" aria-hidden=\"true\"></i> fa-vcard-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i> fa-video-camera</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i> fa-volume-control-phone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-down\" aria-hidden=\"true\"></i> fa-volume-down</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-off\" aria-hidden=\"true\"></i> fa-volume-off</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> fa-volume-up</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-warning\" aria-hidden=\"true\"></i> fa-warning <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair\" aria-hidden=\"true\"></i> fa-wheelchair</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> fa-wheelchair-alt</div>\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i> fa-wifi</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i> fa-window-close</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-close-o\" aria-hidden=\"true\"></i> fa-window-close-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-maximize\" aria-hidden=\"true\"></i> fa-window-maximize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-minimize\" aria-hidden=\"true\"></i> fa-window-minimize</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-window-restore\" aria-hidden=\"true\"></i> fa-window-restore</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wrench\" aria-hidden=\"true\"></i> fa-wrench</div>

\t\t\t\t</div>

\t\t\t  <h4 class=\"page-header mt-30\">Accessibility Icons</h4>
\t\t\t\t<div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-american-sign-language-interpreting\" aria-hidden=\"true\"></i> fa-american-sign-language-interpreting</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-asl-interpreting\" aria-hidden=\"true\"></i> fa-asl-interpreting <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-assistive-listening-systems\" aria-hidden=\"true\"></i> fa-assistive-listening-systems</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-audio-description\" aria-hidden=\"true\"></i> fa-audio-description</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-blind\" aria-hidden=\"true\"></i> fa-blind</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-braille\" aria-hidden=\"true\"></i> fa-braille</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-cc\" aria-hidden=\"true\"></i> fa-cc</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deaf\" aria-hidden=\"true\"></i> fa-deaf</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-deafness\" aria-hidden=\"true\"></i> fa-deafness <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-hard-of-hearing\" aria-hidden=\"true\"></i> fa-hard-of-hearing <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-low-vision\" aria-hidden=\"true\"></i> fa-low-vision</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i> fa-question-circle-o</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-sign-language\" aria-hidden=\"true\"></i> fa-sign-language</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-signing\" aria-hidden=\"true\"></i> fa-signing <span class=\"text-muted\">(alias)</span></div>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-tty\" aria-hidden=\"true\"></i> fa-tty</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"></i> fa-universal-access</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i> fa-volume-control-phone</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair\" aria-hidden=\"true\"></i> fa-wheelchair</div>
\t\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> fa-wheelchair-alt</div>
\t\t\t  </div>\t

\t\t\t  <h4 class=\"page-header mt-30\">Hand Icons</h4>
\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-grab-o\"></i> fa-hand-grab-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-lizard-o\"></i> fa-hand-lizard-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-down\"></i> fa-hand-o-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-left\"></i> fa-hand-o-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-right\"></i> fa-hand-o-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-up\"></i> fa-hand-o-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-paper-o\"></i> fa-hand-paper-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-peace-o\"></i> fa-hand-peace-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-pointer-o\"></i> fa-hand-pointer-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-rock-o\"></i> fa-hand-rock-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-scissors-o\"></i> fa-hand-scissors-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-spock-o\"></i> fa-hand-spock-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-stop-o\"></i> fa-hand-stop-o <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-down\"></i> fa-thumbs-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-o-down\"></i> fa-thumbs-o-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-o-up\"></i> fa-thumbs-o-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-thumbs-up\"></i> fa-thumbs-up</div>
\t\t\t  </div>

\t\t\t  <h4 class=\"page-header mt-30\">Transportation Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ambulance\"></i> fa-ambulance</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-automobile\"></i> fa-automobile
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bicycle\"></i> fa-bicycle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bus\"></i> fa-bus</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cab\"></i> fa-cab <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-car\"></i> fa-car</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fighter-jet\"></i> fa-fighter-jet</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-motorcycle\"></i> fa-motorcycle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plane\"></i> fa-plane</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rocket\"></i> fa-rocket</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ship\"></i> fa-ship</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-space-shuttle\"></i> fa-space-shuttle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-subway\"></i> fa-subway</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-taxi\"></i> fa-taxi</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-train\"></i> fa-train</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-truck\"></i> fa-truck</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wheelchair\"></i> fa-wheelchair</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> wheelchair-alt</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Gender Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-genderless\"></i> fa-genderless</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-intersex\"></i> fa-intersex
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars\"></i> fa-mars</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-double\"></i> fa-mars-double</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-stroke\"></i> fa-mars-stroke</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-stroke-h\"></i> fa-mars-stroke-h</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mars-stroke-v\"></i> fa-mars-stroke-v</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-mercury\"></i> fa-mercury</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-neuter\"></i> fa-neuter</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-transgender\"></i> fa-transgender</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-transgender-alt\"></i> fa-transgender-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-venus\"></i> fa-venus</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-venus-double\"></i> fa-venus-double</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-venus-mars\"></i> fa-venus-mars</div>
\t\t\t  </div>
\t\t\t  <h2 class=\"page-header mt-30\">File Type Icons</h2>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file\"></i> fa-file</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-archive-o\"></i> fa-file-archive-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-audio-o\"></i> fa-file-audio-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-code-o\"></i> fa-file-code-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-excel-o\"></i> fa-file-excel-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-image-o\"></i> fa-file-image-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-movie-o\"></i> fa-file-movie-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-o\"></i> fa-file-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-pdf-o\"></i> fa-file-pdf-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-photo-o\"></i> fa-file-photo-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-picture-o\"></i> fa-file-picture-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-powerpoint-o\"></i> fa-file-powerpoint-o
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-sound-o\"></i> fa-file-sound-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text\"></i> fa-file-text</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text-o\"></i> fa-file-text-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-video-o\"></i> fa-file-video-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-word-o\"></i> fa-file-word-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-zip-o\"></i> fa-file-zip-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t  </div>
\t\t\t  <h2 class=\"page-header mt-30\">Spinner Icons</h2>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-circle-o-notch\"></i> fa-circle-o-notch</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cog\"></i> fa-cog</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gear\"></i> fa-gear <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-refresh\"></i> fa-refresh</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-spinner\"></i> fa-spinner</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Form Control Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-check-square\"></i> fa-check-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-check-square-o\"></i> fa-check-square-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-circle\"></i> fa-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-circle-o\"></i> fa-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dot-circle-o\"></i> fa-dot-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-minus-square\"></i> fa-minus-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-minus-square-o\"></i> fa-minus-square-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plus-square\"></i> fa-plus-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plus-square-o\"></i> fa-plus-square-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-square\"></i> fa-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-square-o\"></i> fa-square-o</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Payment Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-amex\"></i> fa-cc-amex</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-diners-club\"></i> fa-cc-diners-club</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-discover\"></i> fa-cc-discover</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-jcb\"></i> fa-cc-jcb</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-mastercard\"></i> fa-cc-mastercard</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-paypal\"></i> fa-cc-paypal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-stripe\"></i> fa-cc-stripe</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-visa\"></i> fa-cc-visa</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-credit-card\"></i> fa-credit-card</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i> fa-credit-card-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-wallet\"></i> fa-google-wallet</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paypal\"></i> fa-paypal</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Chart Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-area-chart\"></i> fa-area-chart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bar-chart\"></i> fa-bar-chart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> fa-bar-chart-o
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-line-chart\"></i> fa-line-chart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pie-chart\"></i> fa-pie-chart</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Currency Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitcoin\"></i> fa-bitcoin
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-btc\"></i> fa-btc</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cny\"></i> fa-cny <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dollar\"></i> fa-dollar
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-eur\"></i> fa-eur</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-euro\"></i> fa-euro <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gbp\"></i> fa-gbp</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg\"></i> fa-gg</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg-circle\"></i> fa-gg-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ils\"></i> fa-ils</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-inr\"></i> fa-inr</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-jpy\"></i> fa-jpy</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-krw\"></i> fa-krw</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-money\"></i> fa-money</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rmb\"></i> fa-rmb <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rouble\"></i> fa-rouble
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rub\"></i> fa-rub</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ruble\"></i> fa-ruble <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rupee\"></i> fa-rupee <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-shekel\"></i> fa-shekel
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-sheqel\"></i> fa-sheqel
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-try\"></i> fa-try</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-turkish-lira\"></i> fa-turkish-lira
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-usd\"></i> fa-usd</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-won\"></i> fa-won <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yen\"></i> fa-yen <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Text Editor Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-center\"></i> fa-align-center</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-justify\"></i> fa-align-justify</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-left\"></i> fa-align-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-align-right\"></i> fa-align-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bold\"></i> fa-bold</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chain\"></i> fa-chain <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chain-broken\"></i> fa-chain-broken</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-clipboard\"></i> fa-clipboard</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-columns\"></i> fa-columns</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-copy\"></i> fa-copy <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cut\"></i> fa-cut <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dedent\"></i> fa-dedent
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-eraser\"></i> fa-eraser</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file\"></i> fa-file</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-o\"></i> fa-file-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text\"></i> fa-file-text</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-file-text-o\"></i> fa-file-text-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-files-o\"></i> fa-files-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-floppy-o\"></i> fa-floppy-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-font\"></i> fa-font</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-header\"></i> fa-header</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-indent\"></i> fa-indent</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-italic\"></i> fa-italic</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-link\"></i> fa-link</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list\"></i> fa-list</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list-alt\"></i> fa-list-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list-ol\"></i> fa-list-ol</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-list-ul\"></i> fa-list-ul</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-outdent\"></i> fa-outdent</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paperclip\"></i> fa-paperclip</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paragraph\"></i> fa-paragraph</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paste\"></i> fa-paste <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-repeat\"></i> fa-repeat</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rotate-left\"></i> fa-rotate-left
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rotate-right\"></i> fa-rotate-right
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-save\"></i> fa-save <span class=\"text-muted\">(alias)</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-scissors\"></i> fa-scissors</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-strikethrough\"></i> fa-strikethrough</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-subscript\"></i> fa-subscript</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-superscript\"></i> fa-superscript</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-table\"></i> fa-table</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-text-height\"></i> fa-text-height</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-text-width\"></i> fa-text-width</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-th\"></i> fa-th</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-th-large\"></i> fa-th-large</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-th-list\"></i> fa-th-list</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-underline\"></i> fa-underline</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-undo\"></i> fa-undo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-unlink\"></i> fa-unlink
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Directional Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-down\"></i> fa-angle-double-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-left\"></i> fa-angle-double-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-right\"></i> fa-angle-double-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-double-up\"></i> fa-angle-double-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-down\"></i> fa-angle-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-left\"></i> fa-angle-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-right\"></i> fa-angle-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angle-up\"></i> fa-angle-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-down\"></i> fa-arrow-circle-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-left\"></i> fa-arrow-circle-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-down\"></i>
\t\t\t\t  fa-arrow-circle-o-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-left\"></i>
\t\t\t\t  fa-arrow-circle-o-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-right\"></i>
\t\t\t\t  fa-arrow-circle-o-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-o-up\"></i> fa-arrow-circle-o-up
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-right\"></i> fa-arrow-circle-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-circle-up\"></i> fa-arrow-circle-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-down\"></i> fa-arrow-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-left\"></i> fa-arrow-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-right\"></i> fa-arrow-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrow-up\"></i> fa-arrow-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows\"></i> fa-arrows</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-alt\"></i> fa-arrows-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-h\"></i> fa-arrows-h</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-v\"></i> fa-arrows-v</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-down\"></i> fa-caret-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-left\"></i> fa-caret-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-right\"></i> fa-caret-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-down\"></i>
\t\t\t\t  fa-caret-square-o-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-left\"></i>
\t\t\t\t  fa-caret-square-o-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-right\"></i>
\t\t\t\t  fa-caret-square-o-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-square-o-up\"></i> fa-caret-square-o-up
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-caret-up\"></i> fa-caret-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-down\"></i>
\t\t\t\t  fa-chevron-circle-down
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-left\"></i>
\t\t\t\t  fa-chevron-circle-left
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-right\"></i>
\t\t\t\t  fa-chevron-circle-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-circle-up\"></i> fa-chevron-circle-up
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-down\"></i> fa-chevron-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-left\"></i> fa-chevron-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-right\"></i> fa-chevron-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chevron-up\"></i> fa-chevron-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-exchange\"></i> fa-exchange</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-down\"></i> fa-hand-o-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-left\"></i> fa-hand-o-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-right\"></i> fa-hand-o-right</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hand-o-up\"></i> fa-hand-o-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-down\"></i> fa-long-arrow-down</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-left\"></i> fa-long-arrow-left</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-right\"></i> fa-long-arrow-right
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-long-arrow-up\"></i> fa-long-arrow-up</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-down\"></i> fa-toggle-down
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-left\"></i> fa-toggle-left
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-right\"></i> fa-toggle-right
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-toggle-up\"></i> fa-toggle-up
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Video Player Icons</h4>

\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-arrows-alt\"></i> fa-arrows-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-backward\"></i> fa-backward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-compress\"></i> fa-compress</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-eject\"></i> fa-eject</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-expand\"></i> fa-expand</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fast-backward\"></i> fa-fast-backward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fast-forward\"></i> fa-fast-forward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-forward\"></i> fa-forward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pause\"></i> fa-pause</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pause-circle\" aria-hidden=\"true\"></i>pause-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-pause-circle-o\" aria-hidden=\"true\"></i>pause-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-play\"></i> fa-play</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-play-circle\"></i> fa-play-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-play-circle-o\"></i> fa-play-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-random\"></i> fa-random</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-step-backward\"></i> fa-step-backward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-step-forward\"></i> fa-step-forward</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stop\"></i> fa-stop</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-stop-circle\" aria-hidden=\"true\"></i>stop-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-stop-circle-o\" aria-hidden=\"true\"></i>stop-circle-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube-play\"></i> fa-youtube-play</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Brand Icons</h4>

\t\t\t  <div class=\"alert alert-info\">
\t\t\t\t<ul class=\"margin-bottom-none padding-left-lg\">
\t\t\t\t  <li>All brand icons are trademarks of their respective owners.</li>
\t\t\t\t  <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font
\t\t\t\t\tAwesome, nor vice versa.
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t  <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-500px\"></i> fa-500px</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-adn\"></i> fa-adn</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-amazon\"></i> fa-amazon</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-android\"></i> fa-android</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-angellist\"></i> fa-angellist</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-apple\"></i> fa-apple</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-behance\"></i> fa-behance</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-behance-square\"></i> fa-behance-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitbucket\"></i> fa-bitbucket</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitbucket-square\"></i> fa-bitbucket-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-bitcoin\"></i> fa-bitcoin
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-black-tie\"></i> fa-black-tie</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-btc\"></i> fa-btc</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-buysellads\"></i> fa-buysellads</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-amex\"></i> fa-cc-amex</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-diners-club\"></i> fa-cc-diners-club</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-discover\"></i> fa-cc-discover</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-jcb\"></i> fa-cc-jcb</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-mastercard\"></i> fa-cc-mastercard</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-paypal\"></i> fa-cc-paypal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-stripe\"></i> fa-cc-stripe</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-cc-visa\"></i> fa-cc-visa</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-chrome\"></i> fa-chrome</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-codepen\"></i> fa-codepen</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-connectdevelop\"></i> fa-connectdevelop</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-contao\"></i> fa-contao</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-css3\"></i> fa-css3</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dashcube\"></i> fa-dashcube</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-delicious\"></i> fa-delicious</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-deviantart\"></i> fa-deviantart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-digg\"></i> fa-digg</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dribbble\"></i> fa-dribbble</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-dropbox\"></i> fa-dropbox</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-drupal\"></i> fa-drupal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-empire\"></i> fa-empire</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-expeditedssl\"></i> fa-expeditedssl</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook\"></i> fa-facebook</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook-f\"></i> fa-facebook-f
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook-official\"></i> fa-facebook-official
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-facebook-square\"></i> fa-facebook-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-firefox\"></i> fa-firefox</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-flickr\"></i> fa-flickr</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-fonticons\"></i> fa-fonticons</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-forumbee\"></i> fa-forumbee</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-foursquare\"></i> fa-foursquare</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ge\"></i> fa-ge
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-get-pocket\"></i> fa-get-pocket</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg\"></i> fa-gg</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gg-circle\"></i> fa-gg-circle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-git\"></i> fa-git</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-git-square\"></i> fa-git-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-github\"></i> fa-github</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-github-alt\"></i> fa-github-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-github-square\"></i> fa-github-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gittip\"></i> fa-gittip
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google\"></i> fa-google</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-plus\"></i> fa-google-plus</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-plus-square\"></i> fa-google-plus-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-google-wallet\"></i> fa-google-wallet</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-gratipay\"></i> fa-gratipay</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hacker-news\"></i> fa-hacker-news</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-houzz\"></i> fa-houzz</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-html5\"></i> fa-html5</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-instagram\"></i> fa-instagram</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-internet-explorer\"></i> fa-internet-explorer
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ioxhost\"></i> fa-ioxhost</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-joomla\"></i> fa-joomla</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-jsfiddle\"></i> fa-jsfiddle</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-lastfm\"></i> fa-lastfm</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-lastfm-square\"></i> fa-lastfm-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-leanpub\"></i> fa-leanpub</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-linkedin\"></i> fa-linkedin</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-linkedin-square\"></i> fa-linkedin-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-linux\"></i> fa-linux</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-maxcdn\"></i> fa-maxcdn</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-meanpath\"></i> fa-meanpath</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-medium\"></i> fa-medium</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-odnoklassniki\"></i> fa-odnoklassniki</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-odnoklassniki-square\"></i>
\t\t\t\t  fa-odnoklassniki-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-opencart\"></i> fa-opencart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-openid\"></i> fa-openid</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-opera\"></i> fa-opera</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-optin-monster\"></i> fa-optin-monster</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pagelines\"></i> fa-pagelines</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-paypal\"></i> fa-paypal</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pied-piper\"></i> fa-pied-piper</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pied-piper-alt\"></i> fa-pied-piper-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pinterest\"></i> fa-pinterest</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pinterest-p\"></i> fa-pinterest-p</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-pinterest-square\"></i> fa-pinterest-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-qq\"></i> fa-qq</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ra\"></i> fa-ra
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-rebel\"></i> fa-rebel</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-reddit\"></i> fa-reddit</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-reddit-square\"></i> fa-reddit-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-renren\"></i> fa-renren</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-safari\"></i> fa-safari</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-sellsy\"></i> fa-sellsy</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-share-alt\"></i> fa-share-alt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-share-alt-square\"></i> fa-share-alt-square
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-shirtsinbulk\"></i> fa-shirtsinbulk</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-simplybuilt\"></i> fa-simplybuilt</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-skyatlas\"></i> fa-skyatlas</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-skype\"></i> fa-skype</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-slack\"></i> fa-slack</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-slideshare\"></i> fa-slideshare</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-soundcloud\"></i> fa-soundcloud</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-spotify\"></i> fa-spotify</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stack-exchange\"></i> fa-stack-exchange</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stack-overflow\"></i> fa-stack-overflow</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-steam\"></i> fa-steam</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-steam-square\"></i> fa-steam-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stumbleupon\"></i> fa-stumbleupon</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stumbleupon-circle\"></i> fa-stumbleupon-circle
\t\t\t\t</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tencent-weibo\"></i> fa-tencent-weibo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-trello\"></i> fa-trello</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tripadvisor\"></i> fa-tripadvisor</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tumblr\"></i> fa-tumblr</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-tumblr-square\"></i> fa-tumblr-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-twitch\"></i> fa-twitch</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-twitter\"></i> fa-twitter</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-twitter-square\"></i> fa-twitter-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-viacoin\"></i> fa-viacoin</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vimeo\"></i> fa-vimeo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vimeo-square\"></i> fa-vimeo-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vine\"></i> fa-vine</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-vk\"></i> fa-vk</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wechat\"></i> fa-wechat
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-weibo\"></i> fa-weibo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-weixin\"></i> fa-weixin</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-whatsapp\"></i> fa-whatsapp</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wikipedia-w\"></i> fa-wikipedia-w</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-windows\"></i> fa-windows</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wordpress\"></i> fa-wordpress</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-xing\"></i> fa-xing</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-xing-square\"></i> fa-xing-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-y-combinator\"></i> fa-y-combinator</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-y-combinator-square\"></i>
\t\t\t\t  fa-y-combinator-square <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yahoo\"></i> fa-yahoo</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yc\"></i> fa-yc
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yc-square\"></i> fa-yc-square
\t\t\t\t  <span class=\"text-muted\">(alias)</span></div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-yelp\"></i> fa-yelp</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube\"></i> fa-youtube</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube-play\"></i> fa-youtube-play</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-youtube-square\"></i> fa-youtube-square</div>
\t\t\t  </div>
\t\t\t  <h4 class=\"page-header mt-30\">Medical Icons</h4>
\t\t\t   <div class=\"row fontawesome-icon-list m-0\">
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-ambulance\"></i> fa-ambulance</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-h-square\"></i> fa-h-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-heart\"></i> fa-heart</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-heart-o\"></i> fa-heart-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-heartbeat\"></i> fa-heartbeat</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-hospital-o\"></i> fa-hospital-o</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-medkit\"></i> fa-medkit</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-plus-square\"></i> fa-plus-square</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-stethoscope\"></i> fa-stethoscope</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-user-md\"></i> fa-user-md</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-fw fa-wheelchair\"></i> fa-wheelchair</div>
\t\t\t\t<div class=\"fa-hover col-xl-3 col-lg-4 col-md-6 col-12\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i> wheelchair-alt</div>
\t\t\t  </div>
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
", "icons_fontawesome.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\icons_fontawesome.html.twig");
    }
}
