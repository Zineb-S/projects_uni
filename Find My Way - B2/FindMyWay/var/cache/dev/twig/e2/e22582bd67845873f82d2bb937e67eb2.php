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

/* auth_lockscreen.html.twig */
class __TwigTemplate_e87e7fe2926785fe114e670e45db35cf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth_lockscreen.html.twig"));

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

    <title>Sunny Admin - Lockscreen </title>
  
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
\t\t\t\t\t\t\t<img src=\"../images/avatar/2.jpg\" alt=\"User Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Maical Doe</h3>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-30 rounded30 box-shadowed b-2 b-dashed\">
\t\t\t\t\t\t\t<form action=\"index.html.twig\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-info btn-rounded mt-10\">SIGN IN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>\t\t

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t  <p class=\"mt-20\">- OR -</p>
\t\t\t\t\t\t\t  <p class=\"mb-5\">
\t\t\t\t\t\t\t\t  Enter your password to retrieve your session
\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t\t<p class=\"mt-15 mb-0\">Or <a href=\"auth_login.html.twig\" class=\"text-warning\"><b>Sign In</b></a> as a Different User</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t
\t\t</div>
\t</div>\t


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
        return "auth_lockscreen.html.twig";
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

    <title>Sunny Admin - Lockscreen </title>
  
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
\t\t\t\t\t\t\t<img src=\"../images/avatar/2.jpg\" alt=\"User Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Maical Doe</h3>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-30 rounded30 box-shadowed b-2 b-dashed\">
\t\t\t\t\t\t\t<form action=\"index.html.twig\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-white\"><i class=\"ti-lock\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pl-15 bg-transparent text-white plc-white\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-info btn-rounded mt-10\">SIGN IN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>\t\t

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t  <p class=\"mt-20\">- OR -</p>
\t\t\t\t\t\t\t  <p class=\"mb-5\">
\t\t\t\t\t\t\t\t  Enter your password to retrieve your session
\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\t\t\t\t<p class=\"mt-15 mb-0\">Or <a href=\"auth_login.html.twig\" class=\"text-warning\"><b>Sign In</b></a> as a Different User</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t
\t\t</div>
\t</div>\t


\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t
\t
\t
</body>
</html>
", "auth_lockscreen.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\auth_lockscreen.html.twig");
    }
}
