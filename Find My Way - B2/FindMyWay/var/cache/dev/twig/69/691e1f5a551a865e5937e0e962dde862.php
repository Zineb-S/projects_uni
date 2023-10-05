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

/* error_maintenance.html.twig */
class __TwigTemplate_045bcf4bf48f3fe549d11093d4fe1bb7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error_maintenance.html.twig"));

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

    <title>Sunny Admin - Under maintenance </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">\t

</head>
<body class=\"hold-transition\">
\t
\t<section class=\"error-page h-p100 bg-gradient-info theme-primary\">
\t\t<div class=\"container h-p100\">
\t\t  <div class=\"row h-p100 align-items-center justify-content-center text-center\">
\t\t\t  <div class=\"col-lg-7 col-md-10 col-12\">
\t\t\t\t  <div class=\"b-double border-white rounded\">
\t\t\t\t\t  <h1 class=\"text-white font-size-180 font-weight-bold error-page-title\"> <i class=\"fa fa-gear fa-spin\"></i></h1>
\t\t\t\t\t  <h1 class=\"text-white\">UNDER MAINTENANCE!</h1>
\t\t\t\t\t  <h3 class=\"text-white\">We're sorry for the inconvenience.</h3>
\t\t\t\t\t  <h4 class=\"mb-25 text-white\">Please check back later.</h4>\t
\t\t\t\t  </div>
\t\t\t  </div>\t\t\t\t
\t\t  </div>
\t\t</div>
\t</section>



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
        return "error_maintenance.html.twig";
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

    <title>Sunny Admin - Under maintenance </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">\t

</head>
<body class=\"hold-transition\">
\t
\t<section class=\"error-page h-p100 bg-gradient-info theme-primary\">
\t\t<div class=\"container h-p100\">
\t\t  <div class=\"row h-p100 align-items-center justify-content-center text-center\">
\t\t\t  <div class=\"col-lg-7 col-md-10 col-12\">
\t\t\t\t  <div class=\"b-double border-white rounded\">
\t\t\t\t\t  <h1 class=\"text-white font-size-180 font-weight-bold error-page-title\"> <i class=\"fa fa-gear fa-spin\"></i></h1>
\t\t\t\t\t  <h1 class=\"text-white\">UNDER MAINTENANCE!</h1>
\t\t\t\t\t  <h3 class=\"text-white\">We're sorry for the inconvenience.</h3>
\t\t\t\t\t  <h4 class=\"mb-25 text-white\">Please check back later.</h4>\t
\t\t\t\t  </div>
\t\t\t  </div>\t\t\t\t
\t\t  </div>
\t\t</div>
\t</section>



\t<!-- Vendor JS -->
\t<script src=\"js/vendors.min.js\"></script>
    <script src=\"../assets/icons/feather-icons/feather.min.js\"></script>\t


</body>
</html>
", "error_maintenance.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\error_maintenance.html.twig");
    }
}
