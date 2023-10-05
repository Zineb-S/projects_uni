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

/* utilities_animations.html.twig */
class __TwigTemplate_5f5746fb623641727093123c59a0ab38 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilities_animations.html.twig"));

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

    <title>Sunny Admin - Dashboard  Animations </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Animations - CSS3 Animations</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Component</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">CSS3 Animations</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<!-- Attention seekers -->\t
\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Attention seekers</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Basic animations using <code>animate.css</code></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Bounce</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounce\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce animation using <code>bounce</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Shake</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"shake\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tShake animation using <code>shake</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Flash</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flash\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlash animation using <code>flash</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Swing</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"swing\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tSwing animation using <code>swing</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Pulse</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"pulse\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tPulse animation using <code>pulse</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Tada</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"tada\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tTada animation using <code>tada</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Rubberband</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rubberBand\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRubberband using <code>rubberBand</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Wobble</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"wobble\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tWobble animation using <code>wobble</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /attention seekers -->

\t\t\t<!-- Bouncing entrances -->\t\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Bouncing entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>bounce</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Left animation using <code>bounceInLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In animation using <code>bounceIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Right animation using <code>bounceInRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Up animation using <code>bounceInUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Down animation using <code>bounceInDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /bouncing entrances -->

\t\t\t<!-- Bouncing exits -->\t\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Bouncing exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>bounce</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Left animation using <code>bounceOutLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out animation using <code>bounceOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Right animation using <code>bounceOutRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Up animation using <code>bounceOutUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Down animation using <code>bounceOutDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /bouncing exits -->


\t\t\t<!-- Fading entrances -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Fading entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>fade</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In animation using <code>fadeIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Left animation using <code>fadeInLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Right animation using <code>fadeInRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Down animation using <code>fadeInDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInLeftBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInLeftBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Left Big animation using <code>fadeInLeftBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInRightBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInRightBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Right Big animation using <code>fadeInRightBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInDownBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInDownBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Down Big animation using <code>fadeInDownBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Up animation using <code>fadeInUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInUpBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInUpBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Up Big animation using <code>fadeInUpBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /fading entrances -->


\t\t\t<!-- Fading exits -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Fading exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>fade</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out animation using <code>fadeOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Left animation using <code>fadeOutLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Right animation using <code>fadeOutRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Down animation using <code>fadeOutDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutLeftBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutLeftBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Left Big animation using <code>fadeOutLeftBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutRightBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutRightBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Right Big animation using <code>fadeOutRightBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutDownBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutDownBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Down Big animation using <code>fadeOutDownBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Up animation using <code>fadeOutUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutUpBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutUpBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Up Big animation using <code>fadeOutUpBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /fading exits -->


\t\t\t<!-- Flippers -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Flip animations</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Options for <code>flip</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipInX</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipInX\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip In X animation using <code>flipInX</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Flip</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flip\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip animation using <code>flip</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipInY</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipInY\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip In Y animation using <code>flipInY</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipOutX</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipOutX\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip Out X animation using <code>flipOutX</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipOutY</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipOutY\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip Out Y animation using <code>flipOutY</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /flippers -->


\t\t\t<!-- Lightspeed -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Lightspeed animations</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Options for <code>light speed</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">LightSpeedIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"lightSpeedIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tLight Speed In animation using <code>lightSpeedIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">LightSpeedOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"lightSpeedOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tLight Speed Out animation using <code>lightSpeedOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /lightspeed -->


\t\t\t<!-- Rotating entrances -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Rotating entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>rotate</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInDownLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInDownLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Down Left animation using <code>rotateInDownLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In animation using <code>rotateIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInDownRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInDownRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Down Right animation using <code>rotateInDownRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInUpLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInUpLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Up Left animation using <code>rotateInUpLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInUpRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInUpRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Up Right animation using <code>rotateInUpRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /rotating entrances -->


\t\t\t<!-- Rotating exits -->\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Rotating exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>rotate</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutDownLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutDownLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Down Left animation using <code>rotateOutDownLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out animation using <code>rotateOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutDownRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutDownRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Down Right animation using <code>rotateOutDownRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutUpLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutUpLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Up Left animation using <code>rotateOutUpLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutUpRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutUpRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Up Right animation using <code>rotateOutUpRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /rotating exits -->


\t\t\t<!-- Special animations -->\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Special animations</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Options for <code>special</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RollIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rollIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRoll In animation using <code>rollIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Hinge</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"hinge\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tHinge animation using <code>hinge</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RollOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rollOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRoll Out animation using <code>rollOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /special animations -->


\t\t\t<!-- Zoom entrances -->
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Zoom entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>zoom</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Left animation using <code>zoomInLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In animation using <code>zoomIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Right animation using <code>zoomInRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Up animation using <code>zoomInUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Down animation using <code>zoomInDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /zoom entrances -->


\t\t\t<!-- Zoom exits -->\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Zoom exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>zoom</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Left animation using <code>zoomOutLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out animation using <code>zoomOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Right animation using <code>zoomOutRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Up animation using <code>zoomOutUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Down animation using <code>zoomOutDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /zoom exits -->
\t

\t\t</section>
\t\t<!-- /.content -->\t  
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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"js/pages/component-animations-css3.js\"></script>

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
        return "utilities_animations.html.twig";
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

    <title>Sunny Admin - Dashboard  Animations </title>
  
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
\t\t\t\t\t<h3 class=\"page-title\">Animations - CSS3 Animations</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Component</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">CSS3 Animations</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main content -->
\t\t<section class=\"content\">

\t\t\t<!-- Attention seekers -->\t
\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Attention seekers</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Basic animations using <code>animate.css</code></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Bounce</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounce\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce animation using <code>bounce</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Shake</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"shake\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tShake animation using <code>shake</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Flash</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flash\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlash animation using <code>flash</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Swing</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"swing\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tSwing animation using <code>swing</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Pulse</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"pulse\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tPulse animation using <code>pulse</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Tada</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"tada\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tTada animation using <code>tada</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Rubberband</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rubberBand\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRubberband using <code>rubberBand</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Wobble</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"wobble\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tWobble animation using <code>wobble</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /attention seekers -->

\t\t\t<!-- Bouncing entrances -->\t\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Bouncing entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>bounce</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Left animation using <code>bounceInLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In animation using <code>bounceIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Right animation using <code>bounceInRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Up animation using <code>bounceInUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceInDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceInDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce In Down animation using <code>bounceInDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /bouncing entrances -->

\t\t\t<!-- Bouncing exits -->\t\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Bouncing exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>bounce</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Left animation using <code>bounceOutLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out animation using <code>bounceOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Right animation using <code>bounceOutRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Up animation using <code>bounceOutUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">BounceOutDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"bounceOutDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tBounce Out Down animation using <code>bounceOutDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /bouncing exits -->


\t\t\t<!-- Fading entrances -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Fading entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>fade</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In animation using <code>fadeIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Left animation using <code>fadeInLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Right animation using <code>fadeInRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Down animation using <code>fadeInDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInLeftBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInLeftBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Left Big animation using <code>fadeInLeftBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInRightBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInRightBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Right Big animation using <code>fadeInRightBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInDownBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInDownBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Down Big animation using <code>fadeInDownBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Up animation using <code>fadeInUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeInUpBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeInUpBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade In Up Big animation using <code>fadeInUpBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /fading entrances -->


\t\t\t<!-- Fading exits -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Fading exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>fade</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out animation using <code>fadeOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Left animation using <code>fadeOutLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Right animation using <code>fadeOutRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Down animation using <code>fadeOutDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutLeftBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutLeftBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Left Big animation using <code>fadeOutLeftBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutRightBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutRightBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Right Big animation using <code>fadeOutRightBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutDownBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutDownBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Down Big animation using <code>fadeOutDownBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Up animation using <code>fadeOutUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FadeOutUpBig</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"fadeOutUpBig\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFade Out Up Big animation using <code>fadeOutUpBig</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /fading exits -->


\t\t\t<!-- Flippers -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Flip animations</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Options for <code>flip</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipInX</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipInX\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip In X animation using <code>flipInX</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Flip</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flip\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip animation using <code>flip</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipInY</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipInY\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip In Y animation using <code>flipInY</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipOutX</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipOutX\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip Out X animation using <code>flipOutX</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">FlipOutY</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"flipOutY\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tFlip Out Y animation using <code>flipOutY</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /flippers -->


\t\t\t<!-- Lightspeed -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Lightspeed animations</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Options for <code>light speed</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">LightSpeedIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"lightSpeedIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tLight Speed In animation using <code>lightSpeedIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">LightSpeedOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"lightSpeedOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tLight Speed Out animation using <code>lightSpeedOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /lightspeed -->


\t\t\t<!-- Rotating entrances -->\t\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Rotating entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>rotate</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInDownLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInDownLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Down Left animation using <code>rotateInDownLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In animation using <code>rotateIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInDownRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInDownRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Down Right animation using <code>rotateInDownRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInUpLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInUpLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Up Left animation using <code>rotateInUpLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateInUpRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateInUpRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate In Up Right animation using <code>rotateInUpRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /rotating entrances -->


\t\t\t<!-- Rotating exits -->\t\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Rotating exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>rotate</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutDownLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutDownLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Down Left animation using <code>rotateOutDownLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out animation using <code>rotateOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutDownRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutDownRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Down Right animation using <code>rotateOutDownRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutUpLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutUpLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Up Left animation using <code>rotateOutUpLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RotateOutUpRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rotateOutUpRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRotate Out Up Right animation using <code>rotateOutUpRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /rotating exits -->


\t\t\t<!-- Special animations -->\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Special animations</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Options for <code>special</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RollIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rollIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRoll In animation using <code>rollIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">Hinge</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"hinge\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tHinge animation using <code>hinge</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">RollOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"rollOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tRoll Out animation using <code>rollOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /special animations -->


\t\t\t<!-- Zoom entrances -->
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Zoom entrances</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Entrance options for <code>zoom</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Left animation using <code>zoomInLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomIn</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomIn\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In animation using <code>zoomIn</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Right animation using <code>zoomInRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Up animation using <code>zoomInUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomInDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomInDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom In Down animation using <code>zoomInDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /zoom entrances -->


\t\t\t<!-- Zoom exits -->\t
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h4 class=\"box-title mb-15\">Zoom exits</h4>
\t\t\t\t\t<span class=\"text-muted d-block\">Exit options for <code>zoom</code> animations</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutLeft</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutLeft\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Left animation using <code>zoomOutLeft</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOut</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOut\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out animation using <code>zoomOut</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutRight</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutRight\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Right animation using <code>zoomOutRight</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutUp</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutUp\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Up animation using <code>zoomOutUp</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t<h6 class=\"box-title\">ZoomOutDown</h6>
\t\t\t\t\t\t\t<div class=\"box-controls pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"animation\" data-animation=\"zoomOutDown\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\tZoom Out Down animation using <code>zoomOutDown</code> class
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /zoom exits -->
\t

\t\t</section>
\t\t<!-- /.content -->\t  
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
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t<script src=\"js/pages/component-animations-css3.js\"></script>

\t<!-- Sunny Admin App -->
\t<script src=\"js/template.js\"></script>
\t
\t
</body>
</html>
", "utilities_animations.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\utilities_animations.html.twig");
    }
}
