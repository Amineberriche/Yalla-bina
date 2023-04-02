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

/* security/registration.html.twig */
class __TwigTemplate_61744c367193ae54db58040df22deed13c132a190bebc05a5215dfb1e72605ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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

        echo "Register";
        
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
        echo "<main class=\"d-flex align-items-center min-vh-100 py-3 py-md-0\">
    <div class=\"container\">
      <div class=\"card login-card\" style = \"  margin-top: 62px;\">
        <div class=\"row no-gutters\">
          <div class=\"col-md-5\">
            <img src=\"assets/images/inscription.jpg\" alt=\"login\"  style = \"border-radius: 0;
    position: absolute;
    width: 100%;
    height: 700px;
    -o-object-fit: cover;
       object-fit: cover;\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
               <br><a class=\"brand-logo\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
              </div>
\t\t\t  <p class=\"login-card-description\">Register into your account</p>
<!--<div class=\"container-fluid\">
<div class=\"row\" style=\"background-color: #DFFFEC\">
 <div class=\"col-12 col-md-7\" id=\"d\" style=\"color: #58D68D; margin-left: 8%\">-->
  \t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
  \t  \t<!--<div>
  \t\t<h1 style=\"text-align: center;padding: 6%;margin-right: 53%;color:#58D68D; \">Inscription</h1>\t
    \t</div>-->

      <div>
  \t\t  \t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'widget', ["id" => "ema", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Nom", "style" => "width: 125%;
padding: 5px;"]]);
        // line 34
        echo "
  \t\t    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget', ["id" => "ema", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Prénom", "style" => "width: 125%;
padding: 5px;"]]);
        // line 36
        echo "
  \t</div>
    <div>
  \t\t  \t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "adress", [], "any", false, false, false, 39), 'row', ["id" => "insc", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Adress", "style" => "width: 125%;
padding: 5px;"]]);
        // line 40
        echo "
  \t</div>
  \t<div>
  \t\t  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'row', ["id" => "insc", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Email", "style" => "width: 125%;
padding: 5px;"]]);
        // line 44
        echo "
  \t</div>
\t  <div>
  \t\t  ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "telephone", [], "any", false, false, false, 47), 'row', ["id" => "insc", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Télèphone", "style" => "width: 125%;
padding: 5px;"]]);
        // line 48
        echo "
  \t</div>
  \t<div>
  \t\t  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "username", [], "any", false, false, false, 51), 'row', ["id" => "ema", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Username", "style" => "width: 125%;
padding: 5px;"]]);
        // line 52
        echo "
  \t</div>
  \t<div>
  \t\t  \t ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "plainPassword", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), 'row', ["id" => "insc", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Mot de passe", "style" => "width: 125%;
padding: 5px;"]]);
        // line 56
        echo "
  \t</div>
  \t<div>
  \t\t  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), "second", [], "any", false, false, false, 59), 'row', ["id" => "insc", "label" => false, "attr" => ["class" => "form-control", "placeholder" => "Confirmation de mot de passe", "style" => "width: 125%;
padding: 5px;"]]);
        // line 60
        echo "<br>
  \t</div>
    
    <div>
    
\t<button class=\"btn btn-block login-btn mb-4\" type=\"submit\" id=\"btncnx\" style=\"background-color: #60c9eb;color: white;\">
    Register in
\t</button>
\t<p class=\"login-card-footer-text\">Already have an account?<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"class=\"text-reset\"> Login here</a></p>
    </div> 
    </div>
";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
 <!--<div class=\"col-6 col-md-4\" id=\"cnx\">
  \t<img src=\"assets/img/clipart3403372.png\" class=\"imginsc\">
 </div>-->
</div>
</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 71,  190 => 68,  180 => 60,  177 => 59,  172 => 56,  169 => 55,  164 => 52,  161 => 51,  156 => 48,  153 => 47,  148 => 44,  145 => 43,  140 => 40,  137 => 39,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  114 => 27,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<main class=\"d-flex align-items-center min-vh-100 py-3 py-md-0\">
    <div class=\"container\">
      <div class=\"card login-card\" style = \"  margin-top: 62px;\">
        <div class=\"row no-gutters\">
          <div class=\"col-md-5\">
            <img src=\"assets/images/inscription.jpg\" alt=\"login\"  style = \"border-radius: 0;
    position: absolute;
    width: 100%;
    height: 700px;
    -o-object-fit: cover;
       object-fit: cover;\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
               <br><a class=\"brand-logo\" href=\"{{ path('accueil') }}\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
              </div>
\t\t\t  <p class=\"login-card-description\">Register into your account</p>
<!--<div class=\"container-fluid\">
<div class=\"row\" style=\"background-color: #DFFFEC\">
 <div class=\"col-12 col-md-7\" id=\"d\" style=\"color: #58D68D; margin-left: 8%\">-->
  \t{{ form_start(registrationForm) }}
  \t  \t<!--<div>
  \t\t<h1 style=\"text-align: center;padding: 6%;margin-right: 53%;color:#58D68D; \">Inscription</h1>\t
    \t</div>-->

      <div>
  \t\t  \t{{ form_widget(registrationForm.nom, {'id' : 'ema', 'label':false,'attr': {'class': 'form-control', 'placeholder': 'Nom' , 'style' : 'width: 125%;
padding: 5px;' }}) }}
  \t\t    {{ form_widget(registrationForm.prenom, {'id' : 'ema','label':false,'attr': {'class': 'form-control', 'placeholder': 'Prénom' , 'style' : 'width: 125%;
padding: 5px;'}}) }}
  \t</div>
    <div>
  \t\t  \t{{ form_row(registrationForm.adress, {'id' : 'insc','label':false,'attr': {'class': 'form-control', 'placeholder': 'Adress' , 'style' : 'width: 125%;
padding: 5px;' }}) }}
  \t</div>
  \t<div>
  \t\t  {{ form_row(registrationForm.email, {'id' : 'insc','label':false,'attr': {'class': 'form-control', 'placeholder': 'Email' , 'style' : 'width: 125%;
padding: 5px;' }}) }}
  \t</div>
\t  <div>
  \t\t  {{ form_row(registrationForm.telephone, {'id' : 'insc','label':false,'attr': {'class': 'form-control', 'placeholder': 'Télèphone' , 'style' : 'width: 125%;
padding: 5px;' }}) }}
  \t</div>
  \t<div>
  \t\t  {{ form_row(registrationForm.username, {'id' : 'ema','label':false,'attr': {'class': 'form-control', 'placeholder': 'Username' , 'style' : 'width: 125%;
padding: 5px;'}}) }}
  \t</div>
  \t<div>
  \t\t  \t {{ form_row(registrationForm.plainPassword.first, {'id' : 'insc','label':false,'attr': {'class': 'form-control', 'placeholder': 'Mot de passe' , 'style' : 'width: 125%;
padding: 5px;' }}) }}
  \t</div>
  \t<div>
  \t\t  {{ form_row(registrationForm.plainPassword.second, {'id' : 'insc','label':false,'attr': {'class': 'form-control', 'placeholder': 'Confirmation de mot de passe' , 'style' : 'width: 125%;
padding: 5px;' }}) }}<br>
  \t</div>
    
    <div>
    
\t<button class=\"btn btn-block login-btn mb-4\" type=\"submit\" id=\"btncnx\" style=\"background-color: #60c9eb;color: white;\">
    Register in
\t</button>
\t<p class=\"login-card-footer-text\">Already have an account?<a href=\"{{ path('app_login') }}\"class=\"text-reset\"> Login here</a></p>
    </div> 
    </div>
{{ form_end(registrationForm) }}
 <!--<div class=\"col-6 col-md-4\" id=\"cnx\">
  \t<img src=\"assets/img/clipart3403372.png\" class=\"imginsc\">
 </div>-->
</div>
</div>
</main>
{% endblock %}", "security/registration.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\security\\registration.html.twig");
    }
}
