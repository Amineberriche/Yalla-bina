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

/* mesanonces/index.html.twig */
class __TwigTemplate_eef00e0f9e877fbdfbd5e6a9dc9eb705c6b65a8532cf0f744713047d5a9dc780 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mesanonces/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mesanonces/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mesanonces/index.html.twig", 1);
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

        echo "Hello MesanoncesController!";
        
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
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Home</a></li>
\t\t\t\t<li class=\"active\">&nbsp;Mes Annonces</li>
\t\t\t</ol>
\t\t</div> <!-- /.container -->
\t</section> <!-- /.section-background -->
    </br>
    </br>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 24
            echo "\t<table class=\"styled-table\" style=\"@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

\t/* Force table to not be like tables anymore */
\ttable, thead, tbody, th, td, tr { 
\t\tdisplay: block; 
\t}\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th rowspan=\"2\"><img src=\"assets/images/car1.png\"></th>
                 <input type = \"hidden\" value = ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "getIdtraget", [], "method", false, false, false, 34), "html", null, true);
            echo " name=\"tragetid\">
\t\t\t\t\t\t\t\t<th>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "getDateDepart", [], "method", false, false, false, 35), "d/m/Y"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t<th>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "depart", [], "any", false, false, false, 36), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t<th><i class='fas fa-route' style='font-size:48px;'></i></th>
\t\t\t\t\t\t\t\t<th>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "arrivee", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t<th>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "passager", [], "any", false, false, false, 39), "html", null, true);
            echo " places</th>
\t\t\t\t\t\t\t\t<th>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "prix", [], "any", false, false, false, 40), "html", null, true);
            echo " DH</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "User", [], "any", false, false, false, 44), "getNom", [], "any", false, false, false, 44), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "User", [], "any", false, false, false, 44), "getPrenom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td><a href =\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_annonce", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id_traget", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onclick=\"return confirm ('Voulez vous vraiment supprimer cette annonce ?')\"> Supprimer </a></td>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 53, $this->source); })()));
        echo "
anonces counted: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 54, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 54), "html", null, true);
        echo "
  <script
    src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\"
    data-auto-a11y=\"true\">
\t<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    </script>
    <style>
        .styled-table {
\tborder-collapse: collapse;
\tmargin: 25px 0;
\tfont-family: 'Montserrat', sans-serif;
\tmax-width: 1000px;
\tmin-width: 400px;
\tbox-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
\tborder-radius: 4px;
\tcolor: #404E67;
    margin-left: 16%;
  }
  .styled-table  tr {
  
\ttext-align: center;
  }
  .styled-table th {
\tpadding: 12px 25px;
\tfont-size:  1.37rem;
\ttext-align: center;
\twidth: 35%;
  }
  .styled-table td {
\t  padding: 12px 25px;
\t  font-family: \"Consolas\", sans-serif;
\t  font-size: 15.3px;
  }
  .styled-table  tr {
\tborder-bottom: 1px solid #dddddd;
  }
  .styled-table  tr td button {
\tbackground-color:rgb(111, 189, 245) ;
\tborder: none;
\tcolor: white;
\tpadding: 10px;
\ttext-align: center;
\ttext-decoration: none;
\tdisplay: inline-block;
\tfont-size: 16px;
\tmargin: 4px 2px;
\tcursor: pointer;
\tborder-radius: 4px;
  }
  .styled-table  tr td button:hover {
\tbackground-color: rgb(120,198,255);
\tcolor: white;
  
  }
  @import url(http://fonts.googleapis.com/css?family=Roboto:100,400,700);
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab);
*{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
}
.backgroung {
    width: 100%;
    height: 40vh;
    background: center/cover  url(\"assets/images/Backgroung.jpg\") 
}
.backgroung h1{
    color:#fff;
    position: relative;
    padding: 30px;
    margin: 30px;
    top: 20%;
    left: 15px;
    
}
.barderecherche{
    
    position: static;
    background-color: #F2F4F4;
    padding: 10px;
    margin: 70px;
    width: 70%;
    left: 30%;
    border-radius: 5px;
}

.barderecherche input{  
    margin: 0%;
    width: 30%;
    height: 40px;
    border: none;
    background-color:#F2F4F4 ;
    
    
}
::placeholder {
    color:#2f67be ;
    font-size: 20px;
    font-family: \"Font Awesome 5 Free\";
    font-weight: 900;
    content: \"\\f007\";
}

.barderecherche #recherche{
    background-color:#2f67be ;
    border: none;
    color: white;
    height: 40px;
    width: 8%;
    border-radius: 5px;
}
.barderecherche #Border {
    border-left: 2px solid #c0c0c0;
}
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mesanonces/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 54,  174 => 53,  163 => 48,  154 => 44,  147 => 40,  143 => 39,  139 => 38,  134 => 36,  130 => 35,  126 => 34,  114 => 24,  110 => 23,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MesanoncesController!{% endblock %}

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
\t\t\t\t<li class=\"active\">&nbsp;Mes Annonces</li>
\t\t\t</ol>
\t\t</div> <!-- /.container -->
\t</section> <!-- /.section-background -->
    </br>
    </br>
{% for annonce in annonces %}
\t<table class=\"styled-table\" style=\"@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

\t/* Force table to not be like tables anymore */
\ttable, thead, tbody, th, td, tr { 
\t\tdisplay: block; 
\t}\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th rowspan=\"2\"><img src=\"assets/images/car1.png\"></th>
                 <input type = \"hidden\" value = {{annonce.getIdtraget()}} name=\"tragetid\">
\t\t\t\t\t\t\t\t<th>{{annonce.getDateDepart()|date('d/m/Y')}}</th>
\t\t\t\t\t\t\t\t<th>{{annonce.depart}}</th>
\t\t\t\t\t\t\t\t<th><i class='fas fa-route' style='font-size:48px;'></i></th>
\t\t\t\t\t\t\t\t<th>{{annonce.arrivee}}</th>
\t\t\t\t\t\t\t\t<th>{{annonce.passager}} places</th>
\t\t\t\t\t\t\t\t<th>{{annonce.prix}} DH</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<td>{{annonce.User.getNom}} {{annonce.User.getPrenom}}</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td><a href =\"{{path('delete_annonce', {'id': annonce.id_traget})}}\" onclick=\"return confirm ('Voulez vous vraiment supprimer cette annonce ?')\"> Supprimer </a></td>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table> 
    {% endfor %}
{{ knp_pagination_render(annonces) }}
anonces counted: {{ annonces.getTotalItemCount }}
  <script
    src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\"
    data-auto-a11y=\"true\">
\t<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    </script>
    <style>
        .styled-table {
\tborder-collapse: collapse;
\tmargin: 25px 0;
\tfont-family: 'Montserrat', sans-serif;
\tmax-width: 1000px;
\tmin-width: 400px;
\tbox-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
\tborder-radius: 4px;
\tcolor: #404E67;
    margin-left: 16%;
  }
  .styled-table  tr {
  
\ttext-align: center;
  }
  .styled-table th {
\tpadding: 12px 25px;
\tfont-size:  1.37rem;
\ttext-align: center;
\twidth: 35%;
  }
  .styled-table td {
\t  padding: 12px 25px;
\t  font-family: \"Consolas\", sans-serif;
\t  font-size: 15.3px;
  }
  .styled-table  tr {
\tborder-bottom: 1px solid #dddddd;
  }
  .styled-table  tr td button {
\tbackground-color:rgb(111, 189, 245) ;
\tborder: none;
\tcolor: white;
\tpadding: 10px;
\ttext-align: center;
\ttext-decoration: none;
\tdisplay: inline-block;
\tfont-size: 16px;
\tmargin: 4px 2px;
\tcursor: pointer;
\tborder-radius: 4px;
  }
  .styled-table  tr td button:hover {
\tbackground-color: rgb(120,198,255);
\tcolor: white;
  
  }
  @import url(http://fonts.googleapis.com/css?family=Roboto:100,400,700);
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab);
*{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
}
.backgroung {
    width: 100%;
    height: 40vh;
    background: center/cover  url(\"assets/images/Backgroung.jpg\") 
}
.backgroung h1{
    color:#fff;
    position: relative;
    padding: 30px;
    margin: 30px;
    top: 20%;
    left: 15px;
    
}
.barderecherche{
    
    position: static;
    background-color: #F2F4F4;
    padding: 10px;
    margin: 70px;
    width: 70%;
    left: 30%;
    border-radius: 5px;
}

.barderecherche input{  
    margin: 0%;
    width: 30%;
    height: 40px;
    border: none;
    background-color:#F2F4F4 ;
    
    
}
::placeholder {
    color:#2f67be ;
    font-size: 20px;
    font-family: \"Font Awesome 5 Free\";
    font-weight: 900;
    content: \"\\f007\";
}

.barderecherche #recherche{
    background-color:#2f67be ;
    border: none;
    color: white;
    height: 40px;
    width: 8%;
    border-radius: 5px;
}
.barderecherche #Border {
    border-left: 2px solid #c0c0c0;
}
    </style>

{% endblock %}
", "mesanonces/index.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\mesanonces\\index.html.twig");
    }
}
