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

/* contact/index.html.twig */
class __TwigTemplate_becaf11d5fbb2307ea044684606e5720bb75a6a257581119ff0ae0676a1b3e0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ContactController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"section-background\" style=\"background-image: url('assets/images/roadd.jpg')\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"page-header\">
\t\t\t\tget in touch with us
\t\t\t</h2>
\t\t\t<ol class=\"breadcrumb\" style = \" padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: transparent;
    border-radius: 4px;\">
\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Home</a></li>
\t\t\t\t<li class=\"active\">&nbsp;contact</li>
\t\t\t</ol>
\t\t</div> <!-- /.container -->
\t</section> <!-- /.section-background -->


\t<section class=\"section-wrapper contact-and-map\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h2 class=\"section-title\">
\t\t\t\t\t\tSend Message
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t<div class=\"input-group\">\t\t
\t\t\t\t\t\t \t<input class=\"form-control border-radius border-right\" type=\"text\" placeholder=\"Name\" required>
\t\t\t\t\t\t \t<span class=\"input-group-addon  border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-person\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">\t\t
\t\t\t\t\t\t \t<input class=\"form-control border-radius border-right\" name=\"email\" type=\"email\" placeholder=\"Email address\" required>
\t\t\t\t\t\t \t<span class=\"input-group-addon  border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-email\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">\t\t
\t\t\t\t\t\t \t<input class=\"form-control border-radius border-right\" type=\"tel\" placeholder=\"Phone number\">
\t\t\t\t\t\t \t<span class=\"input-group-addon  border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-ios-telephone\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<textarea class=\"form-control border-radius border-right\" rows=\"8\" placeholder=\"Write Message\"></textarea>\t
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"text\" rows=\"8\" class=\"form-control border-radius border-right message\" placeholder=\"Write Message\"> -->
\t\t\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-chatbubbles\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\"  style = \"background: #60c9eb;
\tcolor: #fff;
\twidth: 100%;
\ttext-align: center;
\tpadding: 10px;
\tfont-size: 16px;
\ttransition: all .4s ease-in-out;\">SEND MESSAGE </button>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-sm-6 -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h2 class=\"section-title\">
\t\t\t\t\t\tFind Us Via Google Map
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t</div> <!-- /.col-sm-6 -->
\t\t\t</div>
\t\t</div>
\t</section>



\t<section class=\"contacts section-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-icon\">
\t\t\t\t\t\t\t<i class=\"ion-android-map\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-name\">
\t\t\t\t\t\t\tAddress
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-detail\">
\t\t\t\t\t\t\t67, Immeuble Hallou<br>
\t\t\t\t\t\t\t Bd Mohammed V Oujda.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- /.contact -->
\t\t\t\t</div> <!-- /.col-sm-4 -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-icon\">
\t\t\t\t\t\t\t<i class=\"ion-ios-telephone\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-name\">
\t\t\t\t\t\t\tPhone
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-detail\">
\t\t\t\t\t\t\tLocal: 1-800-523-hello <br>
\t\t\t\t\t\t\tMobile: 1-400-623-hello
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- /.contact -->
\t\t\t\t</div> <!-- /.col-sm-4 -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-icon\">
\t\t\t\t\t\t\t<i class=\"ion-email\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-name\">
\t\t\t\t\t\t\tEmail Address
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-detail\">
\t\t\t\t\t\t\tyalla-bina@gmail.com <br>
\t\t\t\t\t\t\t<a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">www.Yalla-Bina.com</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- /.contact -->
\t\t\t\t</div> <!-- /.col-sm-4 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 118,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContactController!{% endblock %}

{% block body %}
<section class=\"section-background\" style=\"background-image: url('assets/images/roadd.jpg')\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"page-header\">
\t\t\t\tget in touch with us
\t\t\t</h2>
\t\t\t<ol class=\"breadcrumb\" style = \" padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: transparent;
    border-radius: 4px;\">
\t\t\t\t<li><a href=\"{{ path('accueil') }}\">Home</a></li>
\t\t\t\t<li class=\"active\">&nbsp;contact</li>
\t\t\t</ol>
\t\t</div> <!-- /.container -->
\t</section> <!-- /.section-background -->


\t<section class=\"section-wrapper contact-and-map\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h2 class=\"section-title\">
\t\t\t\t\t\tSend Message
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t<div class=\"input-group\">\t\t
\t\t\t\t\t\t \t<input class=\"form-control border-radius border-right\" type=\"text\" placeholder=\"Name\" required>
\t\t\t\t\t\t \t<span class=\"input-group-addon  border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-person\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">\t\t
\t\t\t\t\t\t \t<input class=\"form-control border-radius border-right\" name=\"email\" type=\"email\" placeholder=\"Email address\" required>
\t\t\t\t\t\t \t<span class=\"input-group-addon  border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-email\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">\t\t
\t\t\t\t\t\t \t<input class=\"form-control border-radius border-right\" type=\"tel\" placeholder=\"Phone number\">
\t\t\t\t\t\t \t<span class=\"input-group-addon  border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-ios-telephone\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<textarea class=\"form-control border-radius border-right\" rows=\"8\" placeholder=\"Write Message\"></textarea>\t
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"text\" rows=\"8\" class=\"form-control border-radius border-right message\" placeholder=\"Write Message\"> -->
\t\t\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\">
\t\t\t\t\t\t\t\t<i class=\"ion-chatbubbles\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\"  style = \"background: #60c9eb;
\tcolor: #fff;
\twidth: 100%;
\ttext-align: center;
\tpadding: 10px;
\tfont-size: 16px;
\ttransition: all .4s ease-in-out;\">SEND MESSAGE </button>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-sm-6 -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h2 class=\"section-title\">
\t\t\t\t\t\tFind Us Via Google Map
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t</div> <!-- /.col-sm-6 -->
\t\t\t</div>
\t\t</div>
\t</section>



\t<section class=\"contacts section-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-icon\">
\t\t\t\t\t\t\t<i class=\"ion-android-map\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-name\">
\t\t\t\t\t\t\tAddress
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-detail\">
\t\t\t\t\t\t\t67, Immeuble Hallou<br>
\t\t\t\t\t\t\t Bd Mohammed V Oujda.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- /.contact -->
\t\t\t\t</div> <!-- /.col-sm-4 -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-icon\">
\t\t\t\t\t\t\t<i class=\"ion-ios-telephone\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-name\">
\t\t\t\t\t\t\tPhone
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-detail\">
\t\t\t\t\t\t\tLocal: 1-800-523-hello <br>
\t\t\t\t\t\t\tMobile: 1-400-623-hello
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- /.contact -->
\t\t\t\t</div> <!-- /.col-sm-4 -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-icon\">
\t\t\t\t\t\t\t<i class=\"ion-email\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-name\">
\t\t\t\t\t\t\tEmail Address
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-detail\">
\t\t\t\t\t\t\tyalla-bina@gmail.com <br>
\t\t\t\t\t\t\t<a href=\"{{ path('accueil') }}\">www.Yalla-Bina.com</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- /.contact -->
\t\t\t\t</div> <!-- /.col-sm-4 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t</section>
{% endblock %}
", "contact/index.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\contact\\index.html.twig");
    }
}
