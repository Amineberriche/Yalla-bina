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

/* security/login.html.twig */
class __TwigTemplate_89b93a939546838d6d10db9bad65bb5037390eeb73a6298a229e0057e06fda4b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Login!";
        
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
        echo "  <main class=\"d-flex align-items-center min-vh-100 py-3 py-md-0\">
    <div class=\"container\">
      <div class=\"card login-card\" style = \"  margin-top: 62px;\">
        <div class=\"row no-gutters\">
          <div class=\"col-md-5\">
            <img src=\"assets/images/login.png\" alt=\"login\"  style = \"border-radius: 0;
    position: absolute;
    width: 100%;
    height: auto;
    -o-object-fit: cover;
       object-fit: cover;\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
               <a class=\"brand-logo\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
              </div>
              <p class=\"login-card-description\">Sign into your account</p>
              <form method=\"post\">
                  ";
        // line 25
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                      <div class=\"alert alert-danger\">Email ou le mot de passe est incorrect</div>
                  ";
        }
        // line 28
        echo "                  <div class=\"form-group\">
                    <label for=\"email\" class=\"sr-only\">Email</label>
          <input type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"E-mail\" name=\"email\" class=\"form-control\" id=\"email\"  required autofocus>
                  </div>
                  <div class=\"form-group mb-4\">
                    <label for=\"password\" class=\"sr-only\">Password</label>
          <input type=\"password\" placeholder=\"Mot de passe\" name=\"password\" class=\"form-control\"  id=\"password\"  ><br>
                  </div>
                  <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
                    <button class=\"btn btn-block login-btn mb-4\" type=\"submit\" id=\"btncnx\" style=\"background-color: #60c9eb;color: white;\">
                       Sign in
                    </button>
                </form>
                <a href=\"#!\" class=\"forgot-password-link\">Forgot password?</a>
                <p class=\"login-card-footer-text\">Don't have an account? <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\" class=\"text-reset\">Register here</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  132 => 37,  122 => 30,  118 => 28,  114 => 26,  112 => 25,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login!{% endblock %}

{% block body %}
  <main class=\"d-flex align-items-center min-vh-100 py-3 py-md-0\">
    <div class=\"container\">
      <div class=\"card login-card\" style = \"  margin-top: 62px;\">
        <div class=\"row no-gutters\">
          <div class=\"col-md-5\">
            <img src=\"assets/images/login.png\" alt=\"login\"  style = \"border-radius: 0;
    position: absolute;
    width: 100%;
    height: auto;
    -o-object-fit: cover;
       object-fit: cover;\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
               <a class=\"brand-logo\" href=\"{{ path('accueil') }}\" title=\"HOME\"><i class=\"ion-paper-airplane\"></i> Yalla <span>Bina</span></a>
              </div>
              <p class=\"login-card-description\">Sign into your account</p>
              <form method=\"post\">
                  {% if error %}
                      <div class=\"alert alert-danger\">Email ou le mot de passe est incorrect</div>
                  {% endif %}
                  <div class=\"form-group\">
                    <label for=\"email\" class=\"sr-only\">Email</label>
          <input type=\"email\" value=\"{{ last_username }}\" placeholder=\"E-mail\" name=\"email\" class=\"form-control\" id=\"email\"  required autofocus>
                  </div>
                  <div class=\"form-group mb-4\">
                    <label for=\"password\" class=\"sr-only\">Password</label>
          <input type=\"password\" placeholder=\"Mot de passe\" name=\"password\" class=\"form-control\"  id=\"password\"  ><br>
                  </div>
                  <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
                    <button class=\"btn btn-block login-btn mb-4\" type=\"submit\" id=\"btncnx\" style=\"background-color: #60c9eb;color: white;\">
                       Sign in
                    </button>
                </form>
                <a href=\"#!\" class=\"forgot-password-link\">Forgot password?</a>
                <p class=\"login-card-footer-text\">Don't have an account? <a href=\"{{ path('security_registration') }}\" class=\"text-reset\">Register here</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\security\\login.html.twig");
    }
}
