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

/* admin/includes/footer.html.twig */
class __TwigTemplate_105104d541b3088bc41e27efd017dc92d6d349c5fa9c8d7fd1a235c008c9b002 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/includes/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/includes/footer.html.twig"));

        // line 1
        echo "\t<div class=\"subscribe section-wrapper\">
\t\t<a class=\"brand-logo\" href=\"index.html\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
\t\t<p class=\"subscribe-now\">
\t\t\tSubscribe to our Newsletter
\t\t</p>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control border-radius\" placeholder=\"Email address\">
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default border-radius custom-sub-btn\" type=\"button\" style=\" height: 34px;
\t\t\t\t\t\t\tbackground-color: #60c9eb;
\t\t\t\t\t\t\tcolor: white;\">DONE</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div><!-- /input-group -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t
\t
\t
\t\t<ul class=\"social-icon\">
\t\t\t<li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
\t\t\t<li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
\t\t\t<li><a href=\"#\"><i class=\"ion-social-linkedin-outline\"></i></a></li>
\t\t\t<li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
\t\t</ul>
\t</div> 
<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t&copy; Copyright Yalla Bina
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\tTheme by <a href=\"http://www.themewagon.com\">Les z'Hommes</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t<a href=\"#header\">
\t\t\t\t\t\t\t<i class=\"ion-arrow-up-b\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/includes/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<div class=\"subscribe section-wrapper\">
\t\t<a class=\"brand-logo\" href=\"index.html\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
\t\t<p class=\"subscribe-now\">
\t\t\tSubscribe to our Newsletter
\t\t</p>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control border-radius\" placeholder=\"Email address\">
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default border-radius custom-sub-btn\" type=\"button\" style=\" height: 34px;
\t\t\t\t\t\t\tbackground-color: #60c9eb;
\t\t\t\t\t\t\tcolor: white;\">DONE</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div><!-- /input-group -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t
\t
\t
\t\t<ul class=\"social-icon\">
\t\t\t<li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
\t\t\t<li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
\t\t\t<li><a href=\"#\"><i class=\"ion-social-linkedin-outline\"></i></a></li>
\t\t\t<li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
\t\t</ul>
\t</div> 
<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t&copy; Copyright Yalla Bina
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\tTheme by <a href=\"http://www.themewagon.com\">Les z'Hommes</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t<a href=\"#header\">
\t\t\t\t\t\t\t<i class=\"ion-arrow-up-b\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</footer>
", "admin/includes/footer.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\admin\\includes\\footer.html.twig");
    }
}
