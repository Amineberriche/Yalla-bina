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

/* base.html.twig */
class __TwigTemplate_c6c47f5d4488ede41fb7dd3fd639bbc1655a8a986f0709468bf53518b7b14319 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
           <meta charset=\"UTF-8\">
           <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </head>
    <body>
    ";
        // line 68
        echo twig_include($this->env, $context, "admin/includes/header.html.twig");
        echo "
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "    ";
        echo twig_include($this->env, $context, "admin/includes/footer.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "                 <link type=\"image/png\" rel=\"stylesheet\" href=\"assets/img/accueil.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/accueil.css\">
                 <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/login.css\">
                <link  rel=\"stylesheet\" href=\"assets/Css/about.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/ajoutertrajet.css\"/>

                <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo "assets/Css/contact.css";
        echo "\">>
                <link  rel=\"stylesheet\" href=\"assets/Css/ionicons.css\">
                <link  rel=\"stylesheet\" href=\"assets/Css/section.css\">
                <link  rel=\"stylesheet\" href=\"assets/Css/services.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/bootstrap.min.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/ionicons.min.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/owl.carousel.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/owl.theme.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/profil.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/flexslider.css\" >
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/lora-font.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/style.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/main.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/search.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/Annonce.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/anonces.css\">



                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/raleway-font.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/jquery-ui.min.css\">

                <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
                <link href=\"https://fonts.googleapis.com/css?family=Rubik\" rel=\"stylesheet\">
                <link href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\" rel=\"stylesheet\">
                <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "                <script type=\"text/javascript\" src=\"";
        echo "assets/js/accueil.js";
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 52
        echo "assets/js/contact.js";
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 53
        echo "assets/js/smoothscroll.js";
        echo "\"></script>

                \t<script src=\"assets/js/jquery-1.11.2.min.js\"></script>
                    <script type=\"text/javascript\" src=\"assets/js/jquery-ui.min.js\"></script>
                    <script src=\"assets/js/bootstrap.min.js\"></script>
                    <script src=\"assets/js/owl.carousel.min.js\"></script>
                    <script src=\"assets/js/contact.js\"></script>
                    <script src=\"assets/js/jquery.flexslider.js\"></script>
                    <script src=\"assets/js/script.js\"></script>
                    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\" integrity=\"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd\" crossorigin=\"anonymous\"></script>
                

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 70,  213 => 69,  190 => 53,  186 => 52,  181 => 51,  171 => 50,  129 => 17,  121 => 11,  111 => 10,  92 => 7,  77 => 71,  75 => 69,  71 => 68,  67 => 66,  65 => 50,  62 => 49,  59 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
           <meta charset=\"UTF-8\">
           <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
                 <link type=\"image/png\" rel=\"stylesheet\" href=\"assets/img/accueil.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/accueil.css\">
                 <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/login.css\">
                <link  rel=\"stylesheet\" href=\"assets/Css/about.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/ajoutertrajet.css\"/>

                <link type=\"text/css\" rel=\"stylesheet\" href=\"{{'assets/Css/contact.css'}}\">>
                <link  rel=\"stylesheet\" href=\"assets/Css/ionicons.css\">
                <link  rel=\"stylesheet\" href=\"assets/Css/section.css\">
                <link  rel=\"stylesheet\" href=\"assets/Css/services.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/bootstrap.min.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/ionicons.min.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/owl.carousel.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/owl.theme.css\">
                <link rel=\"stylesheet\" href=\"assets/Css/profil.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/flexslider.css\" >
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/lora-font.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/style.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/main.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/search.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/Annonce.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/anonces.css\">



                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/raleway-font.css\">
                <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/Css/jquery-ui.min.css\">

                <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
                <link href=\"https://fonts.googleapis.com/css?family=Rubik\" rel=\"stylesheet\">
                <link href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\" rel=\"stylesheet\">
                <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% endblock %}

        {% block javascripts %}
                <script type=\"text/javascript\" src=\"{{'assets/js/accueil.js'}}\"></script>
                <script type=\"text/javascript\" src=\"{{'assets/js/contact.js'}}\"></script>
                <script type=\"text/javascript\" src=\"{{'assets/js/smoothscroll.js'}}\"></script>

                \t<script src=\"assets/js/jquery-1.11.2.min.js\"></script>
                    <script type=\"text/javascript\" src=\"assets/js/jquery-ui.min.js\"></script>
                    <script src=\"assets/js/bootstrap.min.js\"></script>
                    <script src=\"assets/js/owl.carousel.min.js\"></script>
                    <script src=\"assets/js/contact.js\"></script>
                    <script src=\"assets/js/jquery.flexslider.js\"></script>
                    <script src=\"assets/js/script.js\"></script>
                    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\" integrity=\"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd\" crossorigin=\"anonymous\"></script>
                

        {% endblock %}
    </head>
    <body>
    {{ include('admin/includes/header.html.twig') }}
        {% block body %}
        {% endblock %}
    {{ include('admin/includes/footer.html.twig') }}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\base.html.twig");
    }
}
