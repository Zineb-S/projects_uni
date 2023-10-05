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

/* auth_login.html.twig */
class __TwigTemplate_55722448e2bee43a3f13e1d7809653b0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth_login.html.twig"));

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

    <title>Sunny Admin - Log in </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">\t

</head>
<body class=\"hold-transition theme-primary bg-gradient-primary\">
\t
\t<div class=\"container h-p100\">
\t\t<div class=\"row align-items-center justify-content-md-center h-p100\">\t
\t\t\t
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"row justify-content-center no-gutters\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-5 col-12\">
\t\t\t\t\t\t<div class=\"content-top-agile p-10\">
\t\t\t\t\t\t\t<h2 class=\"text-white\">Get started with Us</h2>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Sign in to start your session</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-30 rounded30 box-shadowed b-2 b-dashed\">
\t\t\t\t\t\t\t<form action=\"index.html.twig\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text  bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t  <div class=\"checkbox text-white\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" >
\t\t\t\t\t\t\t\t\t\t<label for=\"basic_checkbox_1\">Remember Me</label>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t <div class=\"fog-pwd text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-white hover-info\"><i class=\"ion ion-locked\"></i> Forgot pwd?</a><br>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-info btn-rounded mt-10\">SIGN IN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t  <p class=\"mt-20\">- Sign With -</p>
\t\t\t\t\t\t\t  <p class=\"gap-items-2 mb-20\">
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p class=\"mt-15 mb-0 text-white\">Don't have an account? <a href=\"auth_register.html.twig\" class=\"text-info ml-5\">Sign Up</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "auth_login.html.twig";
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

    <title>Sunny Admin - Log in </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">\t

</head>
<body class=\"hold-transition theme-primary bg-gradient-primary\">
\t
\t<div class=\"container h-p100\">
\t\t<div class=\"row align-items-center justify-content-md-center h-p100\">\t
\t\t\t
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"row justify-content-center no-gutters\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-5 col-12\">
\t\t\t\t\t\t<div class=\"content-top-agile p-10\">
\t\t\t\t\t\t\t<h2 class=\"text-white\">Get started with Us</h2>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Sign in to start your session</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-30 rounded30 box-shadowed b-2 b-dashed\">
\t\t\t\t\t\t\t<form action=\"index.html.twig\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text  bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t  <div class=\"checkbox text-white\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" >
\t\t\t\t\t\t\t\t\t\t<label for=\"basic_checkbox_1\">Remember Me</label>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t <div class=\"fog-pwd text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-white hover-info\"><i class=\"ion ion-locked\"></i> Forgot pwd?</a><br>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-info btn-rounded mt-10\">SIGN IN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t  <p class=\"mt-20\">- Sign With -</p>
\t\t\t\t\t\t\t  <p class=\"gap-items-2 mb-20\">
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p class=\"mt-15 mb-0 text-white\">Don't have an account? <a href=\"auth_register.html.twig\" class=\"text-info ml-5\">Sign Up</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t

</body>
</html>
", "auth_login.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\auth_login.html.twig");
    }
}
