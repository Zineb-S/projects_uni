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

/* auth_register.html.twig */
class __TwigTemplate_9375d8dfae114b0c26626cf349811d64 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth_register.html.twig"));

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

    <title>Sunny Admin - Registration </title>
  
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
\t\t<div class=\"row align-items-center justify-content-md-center h-p100\">
\t\t\t
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"row justify-content-center no-gutters\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-5 col-12\">
\t\t\t\t\t\t<div class=\"content-top-agile p-10\">
\t\t\t\t\t\t\t<h2 class=\"text-white\">Get started with Us</h2>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Register a new membership</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-30 rounded30 box-shadowed b-2 b-dashed\">
\t\t\t\t\t\t\t<form action=\"index.html.twig\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Full Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-email\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Retype Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t  <div class=\"checkbox text-white\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" >
\t\t\t\t\t\t\t\t\t\t<label for=\"basic_checkbox_1\">I agree to the <a href=\"#\" class=\"text-warning\"><b>Terms</b></a></label>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-info btn-rounded margin-top-10\">SIGN IN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t  <p class=\"mt-20\">- Register With -</p>
\t\t\t\t\t\t\t  <p class=\"gap-items-2 mb-20\">
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p class=\"mt-15 mb-0 text-white\">Already have an account?<a href=\"auth_login.html.twig\" class=\"text-danger ml-5\"> Sign In</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>


\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t
\t
\t
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "auth_register.html.twig";
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

    <title>Sunny Admin - Registration </title>
  
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
\t\t<div class=\"row align-items-center justify-content-md-center h-p100\">
\t\t\t
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"row justify-content-center no-gutters\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-5 col-12\">
\t\t\t\t\t\t<div class=\"content-top-agile p-10\">
\t\t\t\t\t\t\t<h2 class=\"text-white\">Get started with Us</h2>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Register a new membership</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-30 rounded30 box-shadowed b-2 b-dashed\">
\t\t\t\t\t\t\t<form action=\"index.html.twig\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Full Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-email\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Retype Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t  <div class=\"checkbox text-white\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"basic_checkbox_1\" >
\t\t\t\t\t\t\t\t\t\t<label for=\"basic_checkbox_1\">I agree to the <a href=\"#\" class=\"text-warning\"><b>Terms</b></a></label>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-info btn-rounded margin-top-10\">SIGN IN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t  <p class=\"mt-20\">- Register With -</p>
\t\t\t\t\t\t\t  <p class=\"gap-items-2 mb-20\">
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t  <a class=\"btn btn-social-icon btn-round btn-outline btn-white\" href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p class=\"mt-15 mb-0 text-white\">Already have an account?<a href=\"auth_login.html.twig\" class=\"text-danger ml-5\"> Sign In</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>


\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t
\t
\t
</body>
</html>
", "auth_register.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\auth_register.html.twig");
    }
}
