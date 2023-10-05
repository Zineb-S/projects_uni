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

/* error_404.html.twig */
class __TwigTemplate_6bdd4faec63f125d7e7eba99efed2d9c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error_404.html.twig"));

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

    <title>Sunny Admin - 404 Page not found </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">\t

</head>
<body class=\"hold-transition theme-primary\">
\t
\t<section class=\"error-page h-p100 bg-gradient-primary\">
\t\t<div class=\"container h-p100\">
\t\t  <div class=\"row h-p100 align-items-center justify-content-center text-center\">
\t\t\t  <div class=\"col-lg-7 col-md-10 col-12\">
\t\t\t\t  <div class=\"b-double border-white rounded30\">
\t\t\t\t\t  <h1 class=\"text-white font-size-180 font-weight-bold error-page-title\"> 404</h1>
\t\t\t\t\t  <h1 class=\"text-white\">Page Not Found !</h1>
\t\t\t\t\t  <h3 class=\"text-white\">looks like, page doesn't exist</h3>
\t\t\t\t\t  <div class=\"my-30\"><a href=\"../index.html.twig\" class=\"btn btn-danger btn-rounded\">Back to dashboard</a></div>\t\t\t\t  

\t\t\t\t\t  <form class=\"search-form mx-auto my-30 w-p75\">
\t\t\t\t\t\t<div class=\"input-group rounded60 overflow-h\">
\t\t\t\t\t\t  <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t  <div class=\"input-group-prepend\">
\t\t\t\t\t\t\t  <button type=\"submit\" name=\"submit\" class=\"btn btn-rounded btn-danger btn-sm\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.input-group -->
\t\t\t\t\t  </form>
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
        return "error_404.html.twig";
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

    <title>Sunny Admin - 404 Page not found </title>
  
\t<!-- Vendors Style-->
\t<link rel=\"stylesheet\" href=\"css/vendors_css.css\">
\t  
\t<!-- Style-->  
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/skin_color.css\">\t

</head>
<body class=\"hold-transition theme-primary\">
\t
\t<section class=\"error-page h-p100 bg-gradient-primary\">
\t\t<div class=\"container h-p100\">
\t\t  <div class=\"row h-p100 align-items-center justify-content-center text-center\">
\t\t\t  <div class=\"col-lg-7 col-md-10 col-12\">
\t\t\t\t  <div class=\"b-double border-white rounded30\">
\t\t\t\t\t  <h1 class=\"text-white font-size-180 font-weight-bold error-page-title\"> 404</h1>
\t\t\t\t\t  <h1 class=\"text-white\">Page Not Found !</h1>
\t\t\t\t\t  <h3 class=\"text-white\">looks like, page doesn't exist</h3>
\t\t\t\t\t  <div class=\"my-30\"><a href=\"../index.html.twig\" class=\"btn btn-danger btn-rounded\">Back to dashboard</a></div>\t\t\t\t  

\t\t\t\t\t  <form class=\"search-form mx-auto my-30 w-p75\">
\t\t\t\t\t\t<div class=\"input-group rounded60 overflow-h\">
\t\t\t\t\t\t  <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t  <div class=\"input-group-prepend\">
\t\t\t\t\t\t\t  <button type=\"submit\" name=\"submit\" class=\"btn btn-rounded btn-danger btn-sm\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.input-group -->
\t\t\t\t\t  </form>
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
", "error_404.html.twig", "C:\\Users\\zselm\\FindMyWay\\templates\\error_404.html.twig");
    }
}
