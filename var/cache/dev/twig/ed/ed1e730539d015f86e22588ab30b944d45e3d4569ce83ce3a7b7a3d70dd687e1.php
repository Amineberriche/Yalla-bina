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

/* profil/index.html.twig */
class __TwigTemplate_340144350d87509b19fd470f783a540f1c2c5c589749e4bd89d3b347d326882e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
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

        echo "Hello ProfilController!";
        
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
        echo "<div class=\"container\" style = \"margin-top: 6%;\">
<div class=\"row gutters\">
<div class=\"col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12\">

<div class=\"card h-100\">
\t<div class=\"card-body\">
\t\t<div class=\"account-settings\">
\t\t\t<div class=\"user-profile\">
\t\t\t\t<div class=\"user-avatar\">
\t\t\t\t\t<img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Maxwell Admin\" style=\"
    width: 50%\";>
\t\t\t\t</div>
\t\t\t\t<h5 class=\"user-name\" style=\"margin-left: 21px;\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "User", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "User", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h5>
\t\t\t\t<h6 class=\"user-email\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "User", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "</h6>
\t\t\t\t<h6 class=\"v-icon notranslate mdi mdi-car theme--light\">Covoiturage Réaliser : </h6>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
<div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
<div class=\"card h-100\">
\t<div class=\"card-body\">
\t\t<div class=\"row gutters\">
          \t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 30, $this->source); })()), 'form_start');
        echo "

\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t<h6 class=\"mb-2 text-primary\">Personal Details</h6>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"fullName\">Nom</label>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget', ["id" => "fullName", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "{{ app.User.nom }}"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"eMail\">Prénom</label>
                     ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'widget', ["id" => "eMail", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "{{ app.User.prenom }}"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"phone\">Username</label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), 'widget', ["id" => "phone", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "{{ app.User.username }}"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Email</label>
                     ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'widget', ["id" => "website", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "{{ app.User.email }}"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Télèphone</label>
                     ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 62, $this->source); })()), "telephone", [], "any", false, false, false, 62), 'widget', ["id" => "website", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "{{ app.User.telephone }}"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"ciTy\">Address</label>
                     ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 68, $this->source); })()), "adress", [], "any", false, false, false, 68), 'widget', ["id" => "ciTy", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "{{ app.User.adress }}"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"row gutters\">
\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t<h6 class=\"mt-3 mb-2 text-primary\">Modifier Password </h6>
\t\t\t</div>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Password</label>
                     ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 79, $this->source); })()), "plainPassword", [], "any", false, false, false, 79), "first", [], "any", false, false, false, 79), 'widget', ["id" => "website", "label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
            </div></br>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Confirmation de mot de passe</label>
                     ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 85, $this->source); })()), "plainPassword", [], "any", false, false, false, 85), "second", [], "any", false, false, false, 85), 'widget', ["id" => "website", "label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
            </div>
            </div>
\t\t<div class=\"row gutters\">
\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t<button type=\"submit\" id=\"submit\" name=\"submit\" class=\"btn btn-primary\">Update</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateform"]) || array_key_exists("updateform", $context) ? $context["updateform"] : (function () { throw new RuntimeError('Variable "updateform" does not exist.', 97, $this->source); })()), 'form_end');
        echo "

</div>
</div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 97,  201 => 85,  192 => 79,  178 => 68,  169 => 62,  160 => 56,  151 => 50,  142 => 44,  133 => 38,  122 => 30,  108 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProfilController!{% endblock %}

{% block body %}
<div class=\"container\" style = \"margin-top: 6%;\">
<div class=\"row gutters\">
<div class=\"col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12\">

<div class=\"card h-100\">
\t<div class=\"card-body\">
\t\t<div class=\"account-settings\">
\t\t\t<div class=\"user-profile\">
\t\t\t\t<div class=\"user-avatar\">
\t\t\t\t\t<img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Maxwell Admin\" style=\"
    width: 50%\";>
\t\t\t\t</div>
\t\t\t\t<h5 class=\"user-name\" style=\"margin-left: 21px;\">{{ app.User.nom }} {{ app.User.prenom }}</h5>
\t\t\t\t<h6 class=\"user-email\">{{ app.User.email }}</h6>
\t\t\t\t<h6 class=\"v-icon notranslate mdi mdi-car theme--light\">Covoiturage Réaliser : </h6>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
<div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
<div class=\"card h-100\">
\t<div class=\"card-body\">
\t\t<div class=\"row gutters\">
          \t{{ form_start(updateform) }}

\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t<h6 class=\"mb-2 text-primary\">Personal Details</h6>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"fullName\">Nom</label>
                    {{ form_widget(updateform.nom, {'id' : 'fullName', 'label':false,'attr': {'class': 'form-control', 'placeholder': '{{ app.User.nom }}'}}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"eMail\">Prénom</label>
                     {{ form_widget(updateform.prenom, {'id' : 'eMail', 'label':false,'attr': {'class': 'form-control', 'placeholder': '{{ app.User.prenom }}'}}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"phone\">Username</label>
                    {{ form_widget(updateform.username, {'id' : 'phone', 'label':false,'attr': {'class': 'form-control', 'placeholder': '{{ app.User.username }}'}}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Email</label>
                     {{ form_widget(updateform.email, {'id' : 'website', 'label':false,'attr': {'class': 'form-control', 'placeholder': '{{ app.User.email }}'}}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Télèphone</label>
                     {{ form_widget(updateform.telephone, {'id' : 'website', 'label':false,'attr': {'class': 'form-control', 'placeholder': '{{ app.User.telephone }}'}}) }}
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"ciTy\">Address</label>
                     {{ form_widget(updateform.adress, {'id' : 'ciTy', 'label':false,'attr': {'class': 'form-control', 'placeholder': '{{ app.User.adress }}'}}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"row gutters\">
\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t<h6 class=\"mt-3 mb-2 text-primary\">Modifier Password </h6>
\t\t\t</div>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Password</label>
                     {{ form_widget(updateform.plainPassword.first, {'id' : 'website', 'label':false,'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>
            </div></br>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12\">
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">Confirmation de mot de passe</label>
                     {{ form_widget(updateform.plainPassword.second, {'id' : 'website', 'label':false,'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>
            </div>
            </div>
\t\t<div class=\"row gutters\">
\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t<button type=\"submit\" id=\"submit\" name=\"submit\" class=\"btn btn-primary\">Update</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    {{ form_end(updateform) }}

</div>
</div>
</div>
</div>
{% endblock %}
", "profil/index.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\profil\\index.html.twig");
    }
}
