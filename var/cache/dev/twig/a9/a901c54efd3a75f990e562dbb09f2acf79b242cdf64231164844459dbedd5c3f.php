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

/* traget/index.html.twig */
class __TwigTemplate_d62e7348f30acf46306c178cc78d33816319626eefabd177fd9b6c5b891fcfdc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "traget/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "traget/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "traget/index.html.twig", 1);
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

        echo "Hello TragetController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"section-background\"  style=\"background-image: url('assets/images/roadd.jpg')\">
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
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Home</a></li>
\t\t\t\t<li class=\"active\">&nbsp;Proposer un trajet</li>
\t\t\t</ol>
\t\t</div> <!-- /.container -->
\t</section> <!-- /.section-background -->
<body class=\"form-v3\">
<div class=\"page-content\">
\t\t<div class=\"form-v3-content\"  style=\"margin-top: 69px;\">
\t\t\t<form class=\"form-detail\" action=\"#\" method=\"post\" id=\"myform\">
\t\t\t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<p><h2>Proposer un trajet</h2></p>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"full-name\">Lieu de départ :</label>
  \t\t  \t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "depart", [], "any", false, false, false, 33), 'widget', ["id" => "lieu_dep", "name" => "lieu_dep", "label" => false, "attr" => ["class" => "input-text"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"lieu_arr\">lieu d'arrivée :</label>
\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "arrivee", [], "any", false, false, false, 37), 'widget', ["id" => "lieu_arr", "name" => "lieu_arr", "label" => false, "attr" => ["class" => "input-text"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group form-group-1\">
\t\t\t\t\t<div class=\"form-row form-row-2\">
\t\t\t\t\t\t<label for=\"passager\">Passager :</label>
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "passager", [], "any", false, false, false, 44), 'widget', ["id" => "passager", "name" => "passager", "label" => false, "value" => "1", "size" => "4", "min" => "1", "attr" => ["class" => "input-text"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-3\">
\t\t\t\t\t\t<label for=\"date\">Date de sortie :</label>
\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "date_depart", [], "any", false, false, false, 48), 'widget', ["id" => "date", "name" => "date", "label" => false, "attr" => ["class" => "date"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-2\">
\t\t\t\t\t\t<label for=\"ticket\">Prix de trajet :</label>
\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "prix", [], "any", false, false, false, 52), 'widget', ["id" => "prix", "name" => "prix", "label" => false, "attr" => ["class" => "input-text"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"heure_de_depart\">L'heure de départ :</label>
\t\t\t\t\t\t ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "heure_depart", [], "any", false, false, false, 58), 'widget', ["id" => "heure_de_depart", "name" => "heure_de_depart", "label" => false, "attr" => ["class" => "input-text"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"heur_d_arrivee\">L'heure d'arrivée:</label>
\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "heure_arrivee", [], "any", false, false, false, 62), 'widget', ["id" => "heur_d_arrivee", "name" => "heur_d_arrivee", "label" => false, "attr" => ["class" => "input-text"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-checkbox\">
\t\t\t\t\t<label class=\"container\"><p> <a href=\"#\" class=\"text\"></a></p>
\t\t\t\t\t  \t
\t\t\t\t\t  \t<span class=\"\"></span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-row-last\">
\t\t\t\t\t<input type=\"submit\" name=\"register\" class=\"register\" value=\"Ajouter\">
\t\t\t\t</div>
\t\t\t\t";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
\t\t\t</form>
\t\t\t<div class=\"form-right\">
\t\t\t\t<div class=\"form-images-1\">
\t\t\t\t\t<img src=\"assets/images/Car.jpg\" alt=\"form-v3-1\" class=\"img\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    var availableTags = [
    \"Oujda\",
        \"Fes\",
        \"Rabat\",
        \"Casablanca\",
        \"Ouarzazat\",
        \"Agadir\",
        \"Marrekch\",
        \"Meknes\",
        \"Medieq\",
        \"Saidia\",
        \"Ahfir\",
        \"Cap de l'eau\",
        \"Bab Berred\",
        \"Bab Taza\",
        \"Ben Ahmed\",
        \"Beni Chiker\",
        \"Beni Ansar\",
        \"Beni Mellal\",
        \"Ben Slimane\",
        \"Ben Taieb\",
        \"Ben Yakhlef\",
        \"Berkane\",
        \"Berrechid\",
        \"Bhalil\",
        \"Bir GanBirdus\",
        \"Bir Lehlou\",
        \"Bni Bouayach\",
        \"Bni Drar\",
        \"Bni Hadifa\",
        \"Beni Tadjit\",
        \"Bouarfa\",
        \"Bou Craa\",
        \"Bouanane\",
        \"Boudnib\",
        \"Boufakrane\",
        \"Bouguedra\",
        \"Bouizakarne\",
        \"Boujad\",
        \"Boujdour (Cabo Bojador)\",
        \"Bouknadel\",
        \"Boulemane\",
        \"Boumalne Dadès\",
        \"Boumia\",
        \"Bouskoura\",
        \"Bouznika\",
        \"Bradia\",
        \"Brikcha\",
        \"Chefchaouen\",
        \"Chemaia\",
        \"Chichaoua\"
    ];
    \$( \"#lieu_dep\" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  <script>
  \$( function() {
    var availableTags = [
    \"Oujda\",
        \"Fes\",
        \"Rabat\",
        \"Casablanca\",
        \"Ouarzazat\",
        \"Agadir\",
        \"Marrekch\",
        \"Meknes\",
        \"Medieq\",
        \"Saidia\",
        \"Ahfir\",
        \"Cap de l'eau\",
        \"Bab Berred\",
        \"Bab Taza\",
        \"Ben Ahmed\",
        \"Beni Chiker\",
        \"Beni Ansar\",
        \"Beni Mellal\",
        \"Ben Slimane\",
        \"Ben Taieb\",
        \"Ben Yakhlef\",
        \"Berkane\",
        \"Berrechid\",
        \"Bhalil\",
        \"Bir GanBirdus\",
        \"Bir Lehlou\",
        \"Bni Bouayach\",
        \"Bni Drar\",
        \"Bni Hadifa\",
        \"Beni Tadjit\",
        \"Bouarfa\",
        \"Bou Craa\",
        \"Bouanane\",
        \"Boudnib\",
        \"Boufakrane\",
        \"Bouguedra\",
        \"Bouizakarne\",
        \"Boujad\",
        \"Boujdour (Cabo Bojador)\",
        \"Bouknadel\",
        \"Boulemane\",
        \"Boumalne Dadès\",
        \"Boumia\",
        \"Bouskoura\",
        \"Bouznika\",
        \"Bradia\",
        \"Brikcha\",
        \"Chefchaouen\",
        \"Chemaia\",
        \"Chichaoua\"
    ];
    \$( \"#lieu_arr\" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "traget/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 75,  168 => 62,  161 => 58,  152 => 52,  145 => 48,  138 => 44,  128 => 37,  121 => 33,  112 => 27,  100 => 18,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TragetController!{% endblock %}



{% block body %}
<section class=\"section-background\"  style=\"background-image: url('assets/images/roadd.jpg')\">
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
\t\t\t\t<li class=\"active\">&nbsp;Proposer un trajet</li>
\t\t\t</ol>
\t\t</div> <!-- /.container -->
\t</section> <!-- /.section-background -->
<body class=\"form-v3\">
<div class=\"page-content\">
\t\t<div class=\"form-v3-content\"  style=\"margin-top: 69px;\">
\t\t\t<form class=\"form-detail\" action=\"#\" method=\"post\" id=\"myform\">
\t\t\t{{ form_start(form) }}
\t\t\t\t<p><h2>Proposer un trajet</h2></p>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"full-name\">Lieu de départ :</label>
  \t\t  \t\t\t{{ form_widget(form.depart,{'id' : 'lieu_dep' , 'name' : 'lieu_dep' ,'label':false ,'attr': {'class': 'input-text' }}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"lieu_arr\">lieu d'arrivée :</label>
\t\t\t\t\t{{ form_widget(form.arrivee, {'id' : 'lieu_arr', 'name' : 'lieu_arr' ,'label':false,'attr': {'class': 'input-text' }}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group form-group-1\">
\t\t\t\t\t<div class=\"form-row form-row-2\">
\t\t\t\t\t\t<label for=\"passager\">Passager :</label>
\t\t\t\t\t\t{{ form_widget(form.passager, {'id' : 'passager', 'name' : 'passager' ,'label':false, 'value' : '1' , 'size' : '4' ,  'min' : '1'  ,'attr': {'class': 'input-text' }}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-3\">
\t\t\t\t\t\t<label for=\"date\">Date de sortie :</label>
\t\t\t\t\t\t{{ form_widget(form.date_depart, {'id' : 'date', 'name' : 'date' ,'label':false,'attr': {'class': 'date' }}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-2\">
\t\t\t\t\t\t<label for=\"ticket\">Prix de trajet :</label>
\t\t\t\t\t\t{{ form_widget(form.prix, {'id' : 'prix', 'name' : 'prix' ,'label':false,'attr': {'class': 'input-text' }}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"heure_de_depart\">L'heure de départ :</label>
\t\t\t\t\t\t {{ form_widget(form.heure_depart, {'id' : 'heure_de_depart', 'name' : 'heure_de_depart' ,'label':false,'attr': {'class': 'input-text' }}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row form-row-1\">
\t\t\t\t\t\t<label for=\"heur_d_arrivee\">L'heure d'arrivée:</label>
\t\t\t\t\t\t{{ form_widget(form.heure_arrivee, {'id' : 'heur_d_arrivee', 'name' : 'heur_d_arrivee' ,'label':false,'attr': {'class': 'input-text' }}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-checkbox\">
\t\t\t\t\t<label class=\"container\"><p> <a href=\"#\" class=\"text\"></a></p>
\t\t\t\t\t  \t
\t\t\t\t\t  \t<span class=\"\"></span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-row-last\">
\t\t\t\t\t<input type=\"submit\" name=\"register\" class=\"register\" value=\"Ajouter\">
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</form>
\t\t\t<div class=\"form-right\">
\t\t\t\t<div class=\"form-images-1\">
\t\t\t\t\t<img src=\"assets/images/Car.jpg\" alt=\"form-v3-1\" class=\"img\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    var availableTags = [
    \"Oujda\",
        \"Fes\",
        \"Rabat\",
        \"Casablanca\",
        \"Ouarzazat\",
        \"Agadir\",
        \"Marrekch\",
        \"Meknes\",
        \"Medieq\",
        \"Saidia\",
        \"Ahfir\",
        \"Cap de l'eau\",
        \"Bab Berred\",
        \"Bab Taza\",
        \"Ben Ahmed\",
        \"Beni Chiker\",
        \"Beni Ansar\",
        \"Beni Mellal\",
        \"Ben Slimane\",
        \"Ben Taieb\",
        \"Ben Yakhlef\",
        \"Berkane\",
        \"Berrechid\",
        \"Bhalil\",
        \"Bir GanBirdus\",
        \"Bir Lehlou\",
        \"Bni Bouayach\",
        \"Bni Drar\",
        \"Bni Hadifa\",
        \"Beni Tadjit\",
        \"Bouarfa\",
        \"Bou Craa\",
        \"Bouanane\",
        \"Boudnib\",
        \"Boufakrane\",
        \"Bouguedra\",
        \"Bouizakarne\",
        \"Boujad\",
        \"Boujdour (Cabo Bojador)\",
        \"Bouknadel\",
        \"Boulemane\",
        \"Boumalne Dadès\",
        \"Boumia\",
        \"Bouskoura\",
        \"Bouznika\",
        \"Bradia\",
        \"Brikcha\",
        \"Chefchaouen\",
        \"Chemaia\",
        \"Chichaoua\"
    ];
    \$( \"#lieu_dep\" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  <script>
  \$( function() {
    var availableTags = [
    \"Oujda\",
        \"Fes\",
        \"Rabat\",
        \"Casablanca\",
        \"Ouarzazat\",
        \"Agadir\",
        \"Marrekch\",
        \"Meknes\",
        \"Medieq\",
        \"Saidia\",
        \"Ahfir\",
        \"Cap de l'eau\",
        \"Bab Berred\",
        \"Bab Taza\",
        \"Ben Ahmed\",
        \"Beni Chiker\",
        \"Beni Ansar\",
        \"Beni Mellal\",
        \"Ben Slimane\",
        \"Ben Taieb\",
        \"Ben Yakhlef\",
        \"Berkane\",
        \"Berrechid\",
        \"Bhalil\",
        \"Bir GanBirdus\",
        \"Bir Lehlou\",
        \"Bni Bouayach\",
        \"Bni Drar\",
        \"Bni Hadifa\",
        \"Beni Tadjit\",
        \"Bouarfa\",
        \"Bou Craa\",
        \"Bouanane\",
        \"Boudnib\",
        \"Boufakrane\",
        \"Bouguedra\",
        \"Bouizakarne\",
        \"Boujad\",
        \"Boujdour (Cabo Bojador)\",
        \"Bouknadel\",
        \"Boulemane\",
        \"Boumalne Dadès\",
        \"Boumia\",
        \"Bouskoura\",
        \"Bouznika\",
        \"Bradia\",
        \"Brikcha\",
        \"Chefchaouen\",
        \"Chemaia\",
        \"Chichaoua\"
    ];
    \$( \"#lieu_arr\" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
{% endblock %}



", "traget/index.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\traget\\index.html.twig");
    }
}
