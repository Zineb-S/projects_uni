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

/* icons_themify.html.twig */
class __TwigTemplate_e4399b03445dcf21d248b91c3df5c639 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons_themify.html.twig"));

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
\t\t\t\t\t<h3 class=\"page-title\">Themify Icons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Themify Icons</li>
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
\t\t\t\t\t<h4 class=\"box-title\">Arrows &amp; Direction Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-up\"></i> ti-arrow-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-right\"></i> ti-arrow-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-left\"></i> ti-arrow-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-down\"></i> ti-arrow-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrows-vertical\"></i> ti-arrows-vertical </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrows-horizontal\"></i> ti-arrows-horizontal </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-up\"></i> ti-angle-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-right\"></i> ti-angle-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-left\"></i> ti-angle-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-down\"></i> ti-angle-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-up\"></i> ti-angle-double-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-right\"></i> ti-angle-double-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-left\"></i> ti-angle-double-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-down\"></i> ti-angle-double-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-move\"></i> ti-move </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-fullscreen\"></i> ti-fullscreen </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-top-right\"></i> ti-arrow-top-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-top-left\"></i> ti-arrow-top-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-up\"></i> ti-arrow-circle-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-right\"></i> ti-arrow-circle-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-left\"></i> ti-arrow-circle-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-down\"></i> ti-arrow-circle-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrows-corner\"></i> ti-arrows-corner </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-split-v\"></i> ti-split-v </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-split-v-alt\"></i> ti-split-v-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-split-h\"></i> ti-split-h </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-up\"></i> ti-hand-point-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-right\"></i> ti-hand-point-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-left\"></i> ti-hand-point-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-down\"></i> ti-hand-point-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-back-right\"></i> ti-back-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-back-left\"></i> ti-back-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-exchange-vertical\"></i> ti-exchange-vertical </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Web App Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wand\"></i> ti-wand </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-save\"></i> ti-save </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-save-alt\"></i> ti-save-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-direction\"></i> ti-direction </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-direction-alt\"></i> ti-direction-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-user\"></i> ti-user </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-link\"></i> ti-link </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-unlink\"></i> ti-unlink </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-trash\"></i> ti-trash </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-target\"></i> ti-target </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tag\"></i> ti-tag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-desktop\"></i> ti-desktop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tablet\"></i> ti-tablet </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-mobile\"></i> ti-mobile </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-email\"></i> ti-email </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-star\"></i> ti-star </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-spray\"></i> ti-spray </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-signal\"></i> ti-signal </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shopping-cart\"></i> ti-shopping-cart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shopping-cart-full\"></i> ti-shopping-cart-full </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-settings\"></i> ti-settings </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-search\"></i> ti-search </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-zoom-in\"></i> ti-zoom-in </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-zoom-out\"></i> ti-zoom-out </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cut\"></i> ti-cut </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler\"></i> ti-ruler </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler-alt-2\"></i> ti-ruler-alt-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler-pencil\"></i> ti-ruler-pencil </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler-alt\"></i> ti-ruler-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bookmark\"></i> ti-bookmark </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bookmark-alt\"></i> ti-bookmark-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-reload\"></i> ti-reload </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-plus\"></i> ti-plus </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-minus\"></i> ti-minus </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-close\"></i> ti-close </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pin\"></i> ti-pin </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pencil\"></i> ti-pencil </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pencil-alt\"></i> ti-pencil-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-paint-roller\"></i> ti-paint-roller </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-paint-bucket\"></i> ti-paint-bucket </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-na\"></i> ti-na </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-medall\"></i> ti-medall </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-medall-alt\"></i> ti-medall-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-marker\"></i> ti-marker </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-marker-alt\"></i> ti-marker-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-lock\"></i> ti-lock </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-unlock\"></i> ti-unlock </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-location-arrow\"></i> ti-location-arrow </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout\"></i> ti-layout </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layers\"></i> ti-layers </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layers-alt\"></i> ti-layers-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-key\"></i> ti-key </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-image\"></i> ti-image </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-heart\"></i> ti-heart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-heart-broken\"></i> ti-heart-broken </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-stop\"></i> ti-hand-stop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-open\"></i> ti-hand-open </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-drag\"></i> ti-hand-drag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flag\"></i> ti-flag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flag-alt\"></i> ti-flag-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flag-alt-2\"></i> ti-flag-alt-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-eye\"></i> ti-eye </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-import\"></i> ti-import </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-export\"></i> ti-export </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cup\"></i> ti-cup </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-crown\"></i> ti-crown </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comments\"></i> ti-comments </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comment\"></i> ti-comment </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comment-alt\"></i> ti-comment-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-thought\"></i> ti-thought </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-clip\"></i> ti-clip </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-check\"></i> ti-check </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-check-box\"></i> ti-check-box </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-camera\"></i> ti-camera </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-announcement\"></i> ti-announcement </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-brush\"></i> ti-brush </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-brush-alt\"></i> ti-brush-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-palette\"></i> ti-palette </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-briefcase\"></i> ti-briefcase </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bolt\"></i> ti-bolt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bolt-alt\"></i> ti-bolt-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-blackboard\"></i> ti-blackboard </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bag\"></i> ti-bag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-world\"></i> ti-world </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wheelchair\"></i> ti-wheelchair </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-car\"></i> ti-car </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-truck\"></i> ti-truck </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-timer\"></i> ti-timer </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ticket\"></i> ti-ticket </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-thumb-up\"></i> ti-thumb-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-thumb-down\"></i> ti-thumb-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stats-up\"></i> ti-stats-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stats-down\"></i> ti-stats-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shine\"></i> ti-shine </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-right\"></i> ti-shift-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-left\"></i> ti-shift-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-right-alt\"></i> ti-shift-right-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-left-alt\"></i> ti-shift-left-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shield\"></i> ti-shield </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-notepad\"></i> ti-notepad </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-server\"></i> ti-server </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pulse\"></i> ti-pulse </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-printer\"></i> ti-printer </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-power-off\"></i> ti-power-off </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-plug\"></i> ti-plug </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pie-chart\"></i> ti-pie-chart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-panel\"></i> ti-panel </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-package\"></i> ti-package </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-music\"></i> ti-music </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-music-alt\"></i> ti-music-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-mouse\"></i> ti-mouse </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-mouse-alt\"></i> ti-mouse-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-money\"></i> ti-money </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microphone\"></i> ti-microphone </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-menu\"></i> ti-menu </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-menu-alt\"></i> ti-menu-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-map\"></i> ti-map </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-map-alt\"></i> ti-map-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-location-pin\"></i> ti-location-pin </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-light-bulb\"></i> ti-light-bulb </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-info\"></i> ti-info </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-infinite\"></i> ti-infinite </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-id-badge\"></i> ti-id-badge </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hummer\"></i> ti-hummer </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-home\"></i> ti-home </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-help\"></i> ti-help </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-headphone\"></i> ti-headphone </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-harddrives\"></i> ti-harddrives </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-harddrive\"></i> ti-harddrive </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-gift\"></i> ti-gift </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-game\"></i> ti-game </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-filter\"></i> ti-filter </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-files\"></i> ti-files </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-file\"></i> ti-file </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-zip\"></i> ti-zip </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-folder\"></i> ti-folder </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-envelope\"></i> ti-envelope </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dashboard\"></i> ti-dashboard </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cloud\"></i> ti-cloud </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cloud-up\"></i> ti-cloud-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cloud-down\"></i> ti-cloud-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-clipboard\"></i> ti-clipboard </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-calendar\"></i> ti-calendar </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-book\"></i> ti-book </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bell\"></i> ti-bell </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-basketball\"></i> ti-basketball </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bar-chart\"></i> ti-bar-chart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bar-chart-alt\"></i> ti-bar-chart-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-archive\"></i> ti-archive </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-anchor\"></i> ti-anchor </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-alert\"></i> ti-alert </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-alarm-clock\"></i> ti-alarm-clock </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-agenda\"></i> ti-agenda </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-write\"></i> ti-write </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wallet\"></i> ti-wallet </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-video-clapper\"></i> ti-video-clapper </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-video-camera\"></i> ti-video-camera </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-vector\"></i> ti-vector </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-support\"></i> ti-support </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stamp\"></i> ti-stamp </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-slice\"></i> ti-slice </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shortcode\"></i> ti-shortcode </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-receipt\"></i> ti-receipt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pin2\"></i> ti-pin2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pin-alt\"></i> ti-pin-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pencil-alt2\"></i> ti-pencil-alt2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-eraser\"></i> ti-eraser </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-more\"></i> ti-more </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-more-alt\"></i> ti-more-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microphone-alt\"></i> ti-microphone-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-magnet\"></i> ti-magnet </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-line-double\"></i> ti-line-double </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-line-dotted\"></i> ti-line-dotted </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-line-dashed\"></i> ti-line-dashed </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ink-pen\"></i> ti-ink-pen </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-info-alt\"></i> ti-info-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-help-alt\"></i> ti-help-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-headphone-alt\"></i> ti-headphone-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-gallery\"></i> ti-gallery </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-face-smile\"></i> ti-face-smile </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-face-sad\"></i> ti-face-sad </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-credit-card\"></i> ti-credit-card </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comments-smiley\"></i> ti-comments-smiley </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-time\"></i> ti-time </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-share\"></i> ti-share </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-share-alt\"></i> ti-share-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-rocket\"></i> ti-rocket </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-new-window\"></i> ti-new-window </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-rss\"></i> ti-rss </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-rss-alt\"></i> ti-rss-alt </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Control Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-stop\"></i> ti-control-stop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-shuffle\"></i> ti-control-shuffle </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-play\"></i> ti-control-play </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-pause\"></i> ti-control-pause </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-forward\"></i> ti-control-forward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-backward\"></i> ti-control-backward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-volume\"></i> ti-volume </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-skip-forward\"></i> ti-control-skip-forward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-skip-backward\"></i> ti-control-skip-backward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-record\"></i> ti-control-record </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-eject\"></i> ti-control-eject </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Text Editor Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-paragraph\"></i> ti-paragraph </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-uppercase\"></i> ti-uppercase </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-underline\"></i> ti-underline </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-text\"></i> ti-text </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-Italic\"></i> ti-Italic </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-smallcap\"></i> ti-smallcap </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-list\"></i> ti-list </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-list-ol\"></i> ti-list-ol </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-right\"></i> ti-align-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-left\"></i> ti-align-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-justify\"></i> ti-align-justify </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-center\"></i> ti-align-center </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-quote-right\"></i> ti-quote-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-quote-left\"></i> ti-quote-left </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Layout Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-width-full\"></i> ti-layout-width-full </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-width-default\"></i> ti-layout-width-default </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-width-default-alt\"></i> ti-layout-width-default-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab\"></i> ti-layout-tab </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab-window\"></i> ti-layout-tab-window </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab-v\"></i> ti-layout-tab-v </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab-min\"></i> ti-layout-tab-min </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-slider\"></i> ti-layout-slider </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-slider-alt\"></i> ti-layout-slider-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-right\"></i> ti-layout-sidebar-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-none\"></i> ti-layout-sidebar-none </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-left\"></i> ti-layout-sidebar-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-placeholder\"></i> ti-layout-placeholder </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu\"></i> ti-layout-menu </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu-v\"></i> ti-layout-menu-v </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu-separated\"></i> ti-layout-menu-separated </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu-full\"></i> ti-layout-menu-full </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-right\"></i> ti-layout-media-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-right-alt\"></i> ti-layout-media-right-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-overlay\"></i> ti-layout-media-overlay </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-overlay-alt\"></i> ti-layout-media-overlay-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-overlay-alt-2\"></i> ti-layout-media-overlay-alt-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-left\"></i> ti-layout-media-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-left-alt\"></i> ti-layout-media-left-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-center\"></i> ti-layout-media-center </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-center-alt\"></i> ti-layout-media-center-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-thumb\"></i> ti-layout-list-thumb </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-thumb-alt\"></i> ti-layout-list-thumb-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-post\"></i> ti-layout-list-post </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-large-image\"></i> ti-layout-list-large-image </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-line-solid\"></i> ti-layout-line-solid </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid4\"></i> ti-layout-grid4 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid3\"></i> ti-layout-grid3 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid2\"></i> ti-layout-grid2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid2-thumb\"></i> ti-layout-grid2-thumb </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-right\"></i> ti-layout-cta-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-left\"></i> ti-layout-cta-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-center\"></i> ti-layout-cta-center </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-btn-right\"></i> ti-layout-cta-btn-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-btn-left\"></i> ti-layout-cta-btn-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column4\"></i> ti-layout-column4 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column3\"></i> ti-layout-column3 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column2\"></i> ti-layout-column2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-accordion-separated\"></i> ti-layout-accordion-separated </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-accordion-merged\"></i> ti-layout-accordion-merged </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-accordion-list\"></i> ti-layout-accordion-list </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-widgetized\"></i> ti-widgetized </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-widget\"></i> ti-widget </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-widget-alt\"></i> ti-widget-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-view-list\"></i> ti-view-list </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-view-list-alt\"></i> ti-view-list-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-view-grid\"></i> ti-view-grid </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-upload\"></i> ti-upload </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-download\"></i> ti-download </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-loop\"></i> ti-loop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-2\"></i> ti-layout-sidebar-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid4-alt\"></i> ti-layout-grid4-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid3-alt\"></i> ti-layout-grid3-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid2-alt\"></i> ti-layout-grid2-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column4-alt\"></i> ti-layout-column4-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column3-alt\"></i> ti-layout-column3-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column2-alt\"></i> ti-layout-column2-alt </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Brand Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flickr\"></i> ti-flickr </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flickr-alt\"></i> ti-flickr-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-instagram\"></i> ti-instagram </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-google\"></i> ti-google </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-github\"></i> ti-github </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-facebook\"></i> ti-facebook </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dropbox\"></i> ti-dropbox </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dropbox-alt\"></i> ti-dropbox-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dribbble\"></i> ti-dribbble </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-apple\"></i> ti-apple </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-android\"></i> ti-android </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-yahoo\"></i> ti-yahoo </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-trello\"></i> ti-trello </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stack-overflow\"></i> ti-stack-overflow </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-soundcloud\"></i> ti-soundcloud </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-sharethis\"></i> ti-sharethis </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-sharethis-alt\"></i> ti-sharethis-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-reddit\"></i> ti-reddit </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microsoft\"></i> ti-microsoft </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microsoft-alt\"></i> ti-microsoft-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-linux\"></i> ti-linux </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-jsfiddle\"></i> ti-jsfiddle </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-joomla\"></i> ti-joomla </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-html5\"></i> ti-html5 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-css3\"></i> ti-css3 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-drupal\"></i> ti-drupal </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wordpress\"></i> ti-wordpress </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tumblr\"></i> ti-tumblr </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tumblr-alt\"></i> ti-tumblr-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-skype\"></i> ti-skype </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-youtube\"></i> ti-youtube </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-vimeo\"></i> ti-vimeo </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-vimeo-alt\"></i> ti-vimeo-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-twitter\"></i> ti-twitter </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-twitter-alt\"></i> ti-twitter-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-linkedin\"></i> ti-linkedin </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pinterest\"></i> ti-pinterest </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pinterest-alt\"></i> ti-pinterest-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-themify-logo\"></i> ti-themify-logo </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-themify-favicon\"></i> ti-themify-favicon </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-themify-favicon-alt\"></i> ti-themify-favicon-alt </div>
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
        return "icons_themify.html.twig";
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
\t\t\t\t\t<h3 class=\"page-title\">Themify Icons</h3>
\t\t\t\t\t<div class=\"d-inline-block align-items-center\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"mdi mdi-home-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\" aria-current=\"page\">Icons</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Themify Icons</li>
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
\t\t\t\t\t<h4 class=\"box-title\">Arrows &amp; Direction Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-up\"></i> ti-arrow-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-right\"></i> ti-arrow-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-left\"></i> ti-arrow-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-down\"></i> ti-arrow-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrows-vertical\"></i> ti-arrows-vertical </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrows-horizontal\"></i> ti-arrows-horizontal </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-up\"></i> ti-angle-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-right\"></i> ti-angle-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-left\"></i> ti-angle-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-down\"></i> ti-angle-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-up\"></i> ti-angle-double-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-right\"></i> ti-angle-double-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-left\"></i> ti-angle-double-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-angle-double-down\"></i> ti-angle-double-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-move\"></i> ti-move </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-fullscreen\"></i> ti-fullscreen </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-top-right\"></i> ti-arrow-top-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-top-left\"></i> ti-arrow-top-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-up\"></i> ti-arrow-circle-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-right\"></i> ti-arrow-circle-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-left\"></i> ti-arrow-circle-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrow-circle-down\"></i> ti-arrow-circle-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-arrows-corner\"></i> ti-arrows-corner </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-split-v\"></i> ti-split-v </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-split-v-alt\"></i> ti-split-v-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-split-h\"></i> ti-split-h </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-up\"></i> ti-hand-point-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-right\"></i> ti-hand-point-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-left\"></i> ti-hand-point-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-point-down\"></i> ti-hand-point-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-back-right\"></i> ti-back-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-back-left\"></i> ti-back-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-exchange-vertical\"></i> ti-exchange-vertical </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Web App Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wand\"></i> ti-wand </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-save\"></i> ti-save </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-save-alt\"></i> ti-save-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-direction\"></i> ti-direction </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-direction-alt\"></i> ti-direction-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-user\"></i> ti-user </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-link\"></i> ti-link </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-unlink\"></i> ti-unlink </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-trash\"></i> ti-trash </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-target\"></i> ti-target </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tag\"></i> ti-tag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-desktop\"></i> ti-desktop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tablet\"></i> ti-tablet </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-mobile\"></i> ti-mobile </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-email\"></i> ti-email </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-star\"></i> ti-star </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-spray\"></i> ti-spray </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-signal\"></i> ti-signal </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shopping-cart\"></i> ti-shopping-cart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shopping-cart-full\"></i> ti-shopping-cart-full </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-settings\"></i> ti-settings </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-search\"></i> ti-search </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-zoom-in\"></i> ti-zoom-in </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-zoom-out\"></i> ti-zoom-out </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cut\"></i> ti-cut </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler\"></i> ti-ruler </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler-alt-2\"></i> ti-ruler-alt-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler-pencil\"></i> ti-ruler-pencil </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ruler-alt\"></i> ti-ruler-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bookmark\"></i> ti-bookmark </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bookmark-alt\"></i> ti-bookmark-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-reload\"></i> ti-reload </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-plus\"></i> ti-plus </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-minus\"></i> ti-minus </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-close\"></i> ti-close </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pin\"></i> ti-pin </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pencil\"></i> ti-pencil </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pencil-alt\"></i> ti-pencil-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-paint-roller\"></i> ti-paint-roller </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-paint-bucket\"></i> ti-paint-bucket </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-na\"></i> ti-na </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-medall\"></i> ti-medall </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-medall-alt\"></i> ti-medall-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-marker\"></i> ti-marker </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-marker-alt\"></i> ti-marker-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-lock\"></i> ti-lock </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-unlock\"></i> ti-unlock </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-location-arrow\"></i> ti-location-arrow </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout\"></i> ti-layout </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layers\"></i> ti-layers </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layers-alt\"></i> ti-layers-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-key\"></i> ti-key </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-image\"></i> ti-image </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-heart\"></i> ti-heart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-heart-broken\"></i> ti-heart-broken </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-stop\"></i> ti-hand-stop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-open\"></i> ti-hand-open </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hand-drag\"></i> ti-hand-drag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flag\"></i> ti-flag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flag-alt\"></i> ti-flag-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flag-alt-2\"></i> ti-flag-alt-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-eye\"></i> ti-eye </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-import\"></i> ti-import </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-export\"></i> ti-export </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cup\"></i> ti-cup </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-crown\"></i> ti-crown </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comments\"></i> ti-comments </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comment\"></i> ti-comment </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comment-alt\"></i> ti-comment-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-thought\"></i> ti-thought </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-clip\"></i> ti-clip </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-check\"></i> ti-check </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-check-box\"></i> ti-check-box </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-camera\"></i> ti-camera </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-announcement\"></i> ti-announcement </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-brush\"></i> ti-brush </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-brush-alt\"></i> ti-brush-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-palette\"></i> ti-palette </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-briefcase\"></i> ti-briefcase </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bolt\"></i> ti-bolt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bolt-alt\"></i> ti-bolt-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-blackboard\"></i> ti-blackboard </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bag\"></i> ti-bag </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-world\"></i> ti-world </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wheelchair\"></i> ti-wheelchair </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-car\"></i> ti-car </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-truck\"></i> ti-truck </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-timer\"></i> ti-timer </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ticket\"></i> ti-ticket </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-thumb-up\"></i> ti-thumb-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-thumb-down\"></i> ti-thumb-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stats-up\"></i> ti-stats-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stats-down\"></i> ti-stats-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shine\"></i> ti-shine </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-right\"></i> ti-shift-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-left\"></i> ti-shift-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-right-alt\"></i> ti-shift-right-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shift-left-alt\"></i> ti-shift-left-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shield\"></i> ti-shield </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-notepad\"></i> ti-notepad </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-server\"></i> ti-server </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pulse\"></i> ti-pulse </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-printer\"></i> ti-printer </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-power-off\"></i> ti-power-off </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-plug\"></i> ti-plug </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pie-chart\"></i> ti-pie-chart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-panel\"></i> ti-panel </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-package\"></i> ti-package </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-music\"></i> ti-music </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-music-alt\"></i> ti-music-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-mouse\"></i> ti-mouse </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-mouse-alt\"></i> ti-mouse-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-money\"></i> ti-money </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microphone\"></i> ti-microphone </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-menu\"></i> ti-menu </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-menu-alt\"></i> ti-menu-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-map\"></i> ti-map </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-map-alt\"></i> ti-map-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-location-pin\"></i> ti-location-pin </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-light-bulb\"></i> ti-light-bulb </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-info\"></i> ti-info </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-infinite\"></i> ti-infinite </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-id-badge\"></i> ti-id-badge </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-hummer\"></i> ti-hummer </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-home\"></i> ti-home </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-help\"></i> ti-help </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-headphone\"></i> ti-headphone </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-harddrives\"></i> ti-harddrives </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-harddrive\"></i> ti-harddrive </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-gift\"></i> ti-gift </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-game\"></i> ti-game </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-filter\"></i> ti-filter </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-files\"></i> ti-files </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-file\"></i> ti-file </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-zip\"></i> ti-zip </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-folder\"></i> ti-folder </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-envelope\"></i> ti-envelope </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dashboard\"></i> ti-dashboard </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cloud\"></i> ti-cloud </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cloud-up\"></i> ti-cloud-up </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-cloud-down\"></i> ti-cloud-down </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-clipboard\"></i> ti-clipboard </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-calendar\"></i> ti-calendar </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-book\"></i> ti-book </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bell\"></i> ti-bell </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-basketball\"></i> ti-basketball </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bar-chart\"></i> ti-bar-chart </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-bar-chart-alt\"></i> ti-bar-chart-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-archive\"></i> ti-archive </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-anchor\"></i> ti-anchor </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-alert\"></i> ti-alert </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-alarm-clock\"></i> ti-alarm-clock </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-agenda\"></i> ti-agenda </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-write\"></i> ti-write </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wallet\"></i> ti-wallet </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-video-clapper\"></i> ti-video-clapper </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-video-camera\"></i> ti-video-camera </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-vector\"></i> ti-vector </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-support\"></i> ti-support </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stamp\"></i> ti-stamp </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-slice\"></i> ti-slice </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-shortcode\"></i> ti-shortcode </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-receipt\"></i> ti-receipt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pin2\"></i> ti-pin2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pin-alt\"></i> ti-pin-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pencil-alt2\"></i> ti-pencil-alt2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-eraser\"></i> ti-eraser </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-more\"></i> ti-more </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-more-alt\"></i> ti-more-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microphone-alt\"></i> ti-microphone-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-magnet\"></i> ti-magnet </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-line-double\"></i> ti-line-double </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-line-dotted\"></i> ti-line-dotted </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-line-dashed\"></i> ti-line-dashed </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-ink-pen\"></i> ti-ink-pen </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-info-alt\"></i> ti-info-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-help-alt\"></i> ti-help-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-headphone-alt\"></i> ti-headphone-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-gallery\"></i> ti-gallery </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-face-smile\"></i> ti-face-smile </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-face-sad\"></i> ti-face-sad </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-credit-card\"></i> ti-credit-card </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-comments-smiley\"></i> ti-comments-smiley </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-time\"></i> ti-time </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-share\"></i> ti-share </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-share-alt\"></i> ti-share-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-rocket\"></i> ti-rocket </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-new-window\"></i> ti-new-window </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-rss\"></i> ti-rss </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-rss-alt\"></i> ti-rss-alt </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Control Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-stop\"></i> ti-control-stop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-shuffle\"></i> ti-control-shuffle </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-play\"></i> ti-control-play </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-pause\"></i> ti-control-pause </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-forward\"></i> ti-control-forward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-backward\"></i> ti-control-backward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-volume\"></i> ti-volume </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-skip-forward\"></i> ti-control-skip-forward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-skip-backward\"></i> ti-control-skip-backward </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-record\"></i> ti-control-record </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-control-eject\"></i> ti-control-eject </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Text Editor Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-paragraph\"></i> ti-paragraph </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-uppercase\"></i> ti-uppercase </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-underline\"></i> ti-underline </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-text\"></i> ti-text </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-Italic\"></i> ti-Italic </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-smallcap\"></i> ti-smallcap </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-list\"></i> ti-list </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-list-ol\"></i> ti-list-ol </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-right\"></i> ti-align-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-left\"></i> ti-align-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-justify\"></i> ti-align-justify </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-align-center\"></i> ti-align-center </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-quote-right\"></i> ti-quote-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-quote-left\"></i> ti-quote-left </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Layout Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-width-full\"></i> ti-layout-width-full </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-width-default\"></i> ti-layout-width-default </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-width-default-alt\"></i> ti-layout-width-default-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab\"></i> ti-layout-tab </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab-window\"></i> ti-layout-tab-window </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab-v\"></i> ti-layout-tab-v </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-tab-min\"></i> ti-layout-tab-min </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-slider\"></i> ti-layout-slider </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-slider-alt\"></i> ti-layout-slider-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-right\"></i> ti-layout-sidebar-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-none\"></i> ti-layout-sidebar-none </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-left\"></i> ti-layout-sidebar-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-placeholder\"></i> ti-layout-placeholder </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu\"></i> ti-layout-menu </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu-v\"></i> ti-layout-menu-v </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu-separated\"></i> ti-layout-menu-separated </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-menu-full\"></i> ti-layout-menu-full </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-right\"></i> ti-layout-media-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-right-alt\"></i> ti-layout-media-right-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-overlay\"></i> ti-layout-media-overlay </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-overlay-alt\"></i> ti-layout-media-overlay-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-overlay-alt-2\"></i> ti-layout-media-overlay-alt-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-left\"></i> ti-layout-media-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-left-alt\"></i> ti-layout-media-left-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-center\"></i> ti-layout-media-center </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-media-center-alt\"></i> ti-layout-media-center-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-thumb\"></i> ti-layout-list-thumb </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-thumb-alt\"></i> ti-layout-list-thumb-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-post\"></i> ti-layout-list-post </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-list-large-image\"></i> ti-layout-list-large-image </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-line-solid\"></i> ti-layout-line-solid </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid4\"></i> ti-layout-grid4 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid3\"></i> ti-layout-grid3 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid2\"></i> ti-layout-grid2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid2-thumb\"></i> ti-layout-grid2-thumb </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-right\"></i> ti-layout-cta-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-left\"></i> ti-layout-cta-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-center\"></i> ti-layout-cta-center </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-btn-right\"></i> ti-layout-cta-btn-right </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-cta-btn-left\"></i> ti-layout-cta-btn-left </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column4\"></i> ti-layout-column4 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column3\"></i> ti-layout-column3 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column2\"></i> ti-layout-column2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-accordion-separated\"></i> ti-layout-accordion-separated </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-accordion-merged\"></i> ti-layout-accordion-merged </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-accordion-list\"></i> ti-layout-accordion-list </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-widgetized\"></i> ti-widgetized </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-widget\"></i> ti-widget </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-widget-alt\"></i> ti-widget-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-view-list\"></i> ti-view-list </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-view-list-alt\"></i> ti-view-list-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-view-grid\"></i> ti-view-grid </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-upload\"></i> ti-upload </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-download\"></i> ti-download </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-loop\"></i> ti-loop </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-sidebar-2\"></i> ti-layout-sidebar-2 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid4-alt\"></i> ti-layout-grid4-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid3-alt\"></i> ti-layout-grid3-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-grid2-alt\"></i> ti-layout-grid2-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column4-alt\"></i> ti-layout-column4-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column3-alt\"></i> ti-layout-column3-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-layout-column2-alt\"></i> ti-layout-column2-alt </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<h4 class=\"box-title\">Brand Icons</h4>
\t\t\t\t\t<div class=\"icons-list-demo row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flickr\"></i> ti-flickr </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-flickr-alt\"></i> ti-flickr-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-instagram\"></i> ti-instagram </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-google\"></i> ti-google </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-github\"></i> ti-github </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-facebook\"></i> ti-facebook </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dropbox\"></i> ti-dropbox </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dropbox-alt\"></i> ti-dropbox-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-dribbble\"></i> ti-dribbble </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-apple\"></i> ti-apple </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-android\"></i> ti-android </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-yahoo\"></i> ti-yahoo </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-trello\"></i> ti-trello </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-stack-overflow\"></i> ti-stack-overflow </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-soundcloud\"></i> ti-soundcloud </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-sharethis\"></i> ti-sharethis </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-sharethis-alt\"></i> ti-sharethis-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-reddit\"></i> ti-reddit </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microsoft\"></i> ti-microsoft </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-microsoft-alt\"></i> ti-microsoft-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-linux\"></i> ti-linux </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-jsfiddle\"></i> ti-jsfiddle </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-joomla\"></i> ti-joomla </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-html5\"></i> ti-html5 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-css3\"></i> ti-css3 </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-drupal\"></i> ti-drupal </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-wordpress\"></i> ti-wordpress </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tumblr\"></i> ti-tumblr </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-tumblr-alt\"></i> ti-tumblr-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-skype\"></i> ti-skype </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-youtube\"></i> ti-youtube </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-vimeo\"></i> ti-vimeo </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-vimeo-alt\"></i> ti-vimeo-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-twitter\"></i> ti-twitter </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-twitter-alt\"></i> ti-twitter-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-linkedin\"></i> ti-linkedin </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pinterest\"></i> ti-pinterest </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-pinterest-alt\"></i> ti-pinterest-alt </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-themify-logo\"></i> ti-themify-logo </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-themify-favicon\"></i> ti-themify-favicon </div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3\"> <i class=\"ti-themify-favicon-alt\"></i> ti-themify-favicon-alt </div>
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
", "icons_themify.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\icons_themify.html.twig");
    }
}
