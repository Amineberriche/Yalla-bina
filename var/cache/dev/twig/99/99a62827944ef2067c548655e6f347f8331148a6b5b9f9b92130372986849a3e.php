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

/* admin/includes/header.html.twig */
class __TwigTemplate_e11642f22c59815b40f04a771d81d9ff76314c7f518c547f9b800951ddc7608b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/includes/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/includes/header.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"brand-logo\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
\t\t\t</div> <!-- /.navbar-header -->

\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t\t\t\t\t<li class=\"active\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
            echo "\">Rechercher</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traget");
            echo "\">Proposer un trajet</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">contact</a></li>
\t\t\t\t\t<li><a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<li></li>
\t\t\t\t\t<img src=\"/assets/img/profile-user.png\" class=\"avatar\" alt=\"Avatar\"><b class=\"caret\"></b> </a></li>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" style =\"right: 121px;\">
\t\t\t\t\t<li><a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\"> Profil</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesanonces");
            echo "\"> Vos trajet</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anonces");
            echo "\"> Les annonces</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
            echo "\"> Mes Réservation</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> Logout</a></li>
\t\t\t\t";
        } else {
            // line 34
            echo "
\t\t\t\t\t<li class=\"active\"><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Rechercher</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Proposer un trajet</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">contact</a></li>
\t\t\t\t\t<li><a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<li></li>
\t\t\t\t\t<img src=\"/assets/img/profile-user.png\" class=\"avatar\" alt=\"Avatar\"><b class=\"caret\"></b>  </a></li>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" style =\"right: 121px;\">
\t\t\t\t\t<li><a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Connexion </a></li>
\t\t\t\t\t<li><a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\"> Inscription</a></li>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t</ul>
\t\t\t\t</ul> <!-- /.nav -->
\t\t    </div><!-- /.navbar-collapse -->
\t  \t</div><!-- /.container -->
\t</nav>
\t<style>
\t.navbar .dropdown-menu li a {
\tcolor: #60c9eb !important;
\tpadding: 8px 20px;
\tline-height: normal;
}
\t</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  137 => 44,  133 => 43,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  110 => 34,  105 => 32,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  80 => 22,  76 => 21,  72 => 20,  67 => 19,  65 => 18,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"brand-logo\" href=\"{{ path('accueil') }}\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
\t\t\t</div> <!-- /.navbar-header -->

\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('accueil') }}\">Home</a></li>
\t\t\t\t\t<li><a href=\"{{ path('search') }}\">Rechercher</a></li>
\t\t\t\t\t<li><a href=\"{{ path('traget') }}\">Proposer un trajet</a></li>
\t\t\t\t\t<li><a href=\"{{ path('contact') }}\">contact</a></li>
\t\t\t\t\t<li><a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<li></li>
\t\t\t\t\t<img src=\"/assets/img/profile-user.png\" class=\"avatar\" alt=\"Avatar\"><b class=\"caret\"></b> </a></li>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" style =\"right: 121px;\">
\t\t\t\t\t<li><a href=\"{{ path('profil') }}\"> Profil</a></li>
\t\t\t\t\t<li><a href=\"{{ path('mesanonces') }}\"> Vos trajet</a></li>
\t\t\t\t\t<li><a href=\"{{ path('anonces') }}\"> Les annonces</a></li>
\t\t\t\t\t<li><a href=\"{{ path('reservation') }}\"> Mes Réservation</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"{{ path('app_logout') }}\"> Logout</a></li>
\t\t\t\t{% else %}

\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('accueil') }}\">Home</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_login') }}\">Rechercher</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_login') }}\">Proposer un trajet</a></li>
\t\t\t\t\t<li><a href=\"{{ path('contact') }}\">contact</a></li>
\t\t\t\t\t<li><a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<li></li>
\t\t\t\t\t<img src=\"/assets/img/profile-user.png\" class=\"avatar\" alt=\"Avatar\"><b class=\"caret\"></b>  </a></li>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" style =\"right: 121px;\">
\t\t\t\t\t<li><a href=\"{{ path('app_login') }}\"> Connexion </a></li>
\t\t\t\t\t<li><a href=\"{{ path('security_registration') }}\"> Inscription</a></li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t\t</ul> <!-- /.nav -->
\t\t    </div><!-- /.navbar-collapse -->
\t  \t</div><!-- /.container -->
\t</nav>
\t<style>
\t.navbar .dropdown-menu li a {
\tcolor: #60c9eb !important;
\tpadding: 8px 20px;
\tline-height: normal;
}
\t</style>", "admin/includes/header.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\admin\\includes\\header.html.twig");
    }
}
