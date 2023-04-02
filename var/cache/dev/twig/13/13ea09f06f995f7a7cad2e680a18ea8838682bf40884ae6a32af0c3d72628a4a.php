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

/* accueil/index.html.twig */
class __TwigTemplate_799a6d18935d666798b096c4621e06067f70e8d3b62658521bd7daad658224e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "
<div id=\"header\">
\t\t    <div class=\"flexslider\" style=\"background-image: url('assets/images/roadd.jpg')\">
\t\t        <ul class=\"slides\">
\t\t            <li class=\"slider-item\" style=\"background-image: ')\">
\t\t                <div class=\"intro container\">
\t\t                    <div class=\"inner-intro\">
\t\t                        <h1 class=\"header-title\">
\t\t                            <span>ANNONCEZ </span> OU TROUVEZ UN COVOITURAGE
\t\t                        </h1>
\t\t                    </div>
\t\t                </div>
\t\t            </li> <!-- /.slider-item -->
\t\t            <li class=\"slider-item\" >
\t\t                <div class=\"intro\">
\t\t                    <div class=\"inner-intro\">
\t\t                        <h1 class=\"header-title\">
\t\t                            Covoiturage  <span>libre</span> sans <span>commission </span>et <span>coopératif</span>
\t\t                        </h1>
\t\t                    </div>
\t\t                </div>
\t\t            </li> <!-- /.slider-item -->
\t\t        </ul> <!-- /.slides -->
\t\t    </div> <!-- /.flexslider -->
\t\t</div> <!-- /#header -->
<!-- Find a Tour -->
\t<section class=\"tour section-wrapper container\">
\t\t<h2 class=\"section-title\">
\t\t\tRechercher un Trajet 
\t\t</h2>
\t\t<p class=\"section-subtitle\">
\t\t\tOu voulez vous partir ?
\t\t</p>
\t\t<form method = \"POST\" action = \"search\">
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control border-radius border-right\" placeholder=\"Lieu de Depart\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\" style =\"height: auto;\">
\t\t\t\t\t\t<i class=\"ion-android-compass\"></i>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control border-radius border-right\" placeholder=\"Lieu de Destination\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\"  style =\"height: auto;\">
\t\t\t\t\t\t<i class=\"ion-android-map\"></i>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"date\" class=\"form-control border-radius border-right\" placeholder=\"Departure\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\"  style =\"height: auto;\">
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control border-radius border-right\" placeholder=\"Passager\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\"  style =\"height: auto;\">
\t\t\t\t\t\t<i class=\"ion-android-contacts\"></i>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"btn btn-default border-radius custom-button\"style=\"margin-left: 166%;background-color: #60c9eb;color: white;height: auto;\">
\t\t\t\t\tSearch
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</section> <!-- /.tour -->


<!-- Our Blazzing offers -->
\t<section class=\"offer section-wrapper\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">
\t\t\t\tNos offres
\t\t\t</h2>
\t\t\t<p class=\"section-subtitle\">
\t\t\t\tLorem Ipsum is simply dummy text of the industry.
\t\t\t</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-social-euro\" style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tEconomisation
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tEn partageant les coûts associés à l’utilisation d’une voiture et les frais de stationnement, vous pouvez réaliser des économies de 50 % ou plus.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->

\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-ios-home\"style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tL’environnement en bénéficie
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLe covoiturage réduit le nombre de voitures sur nos routes et contribue donc à diminuer l’émission de gaz nocifs à effet de serre et à protéger l’environnement. 
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->

\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-android-bus\" style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tC’est plus pratique

\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLe covoiturage conserve tous les aspects pratiques de la voiture, mais sans le stress.  Les membres d’un groupe de covoiturage établissent leurs propres règles en fonction de leurs besoins.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->

\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-ios-locked\" style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>

\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tLe covoiturage vous donne le choix
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLe covoiturage peut s’avérer la solution de transport idéale pour vos déplacements quotidiens, surtout si vous habitez dans un secteur où le transport en commun n’est pas fréquent ou s’il n’existe pas. 

\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t</section> <!-- /.offer -->


<!-- Top place to visit -->
\t<section class=\"visit section-wrapper\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">
\t\t\t\tTop Déstination
\t\t\t</h2>
\t\t\t<p class=\"section-subtitle\">
\t\t\t\tLes Top 6 Déstination dans notre site Yalla Bina.
\t\t\t</p>

\t\t\t<div class=\"owl-carousel visit-carousel\" id=\"\" style=\"height: 173px;\">
\t\t\t ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 163
            echo "
              <div class=\"card card-stats mb-4 mb-xl-0\" style=\"width: 70%;margin-left: 10%;margin-top: 17%;height: 75px;background-color: #60c9eb;color: white;\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col\" style=\"text-align: center;font-size: 26px;\">
                      <span>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "depart", [], "any", false, false, false, 168), "html", null, true);
            echo "</span><span> → </span><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "arrivee", [], "any", false, false, false, 168), "html", null, true);
            echo "</span>
                    </div>
                  </div>
                </div>
              </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "
\t\t</div> <!-- /.container -->
\t</section> <!-- /.visit -->

<div class=\"offer-cta\">
\t<div class=\"container\">
\t\t<div class=\"offering\">
\t\t\t<div class=\"percent\">
\t\t\t\t<span>Joignez</span> 
\t\t\t</div>
\t\t\t<div class=\"FTour\">
\t\t\t\tnous <strong>gratuitement</strong>
\t\t\t</div>
\t\t\t<a class=\"btn btn-default price-btn\" href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\" style = \"background-color: #60c9eb;color: white;\">
\t\t\t\tInscrivez vous
\t\t\t</a>
\t\t\t<a class=\"btn btn-default price-btn\" href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" style = \"background-color: #60c9eb;color: white;\">
\t\t\t\tConnexion a votre compte
\t\t\t</a>
\t\t</div> <!-- /.offering -->
\t</div> <!-- /.container -->
</div> <!-- /.offer-cta -->

\t<section class=\"additional-services section-wrapper\">
\t\t<div class=\"container-fluid\">
               <div class=\"row\">
                  <div class=\"col-md-6 left\" style = \"margin-left: 23%;\">
                     <img src=\"assets/images/propose.png\">
                  </div>
                  <div class=\"col-md-3\" style=\"margin: auto;\">
                    <span style = \"margin-left: -93%; margin-top: 3%; white-space: pre-line;   color: rgb(5, 71, 82);  font-size: 24px; line-height: 1.06; font-weight: 500;\">Vous prenez le volant ? Dites-nous où vous allez !</span>
\t\t\t\t\t<p style = \"margin-left: -93%;\"> Ensemble, permettons à des millions de personnes de se déplacer.</p>
\t\t\t\t\t<a class=\"btn btn-primary\" href = \"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traget");
        echo "\" style = \"margin-left: -93%;   background-color: rgb(0, 175, 245);\" >Proposer un traget</a>
                  </div>
               </div>
               </div> <!-- /.container -->
\t</section> <!-- /.Additional-services -->


\t<div class=\"section-wrapper sponsor\">
\t\t<div class=\"container\">
\t\t\t<div class=\"owl-carousel sponsor-carousel\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-1.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-2.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-3.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-4.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-5.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-6.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-1.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-2.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-3.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-4.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-5.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-6.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-1.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-2.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-3.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-4.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-5.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-6.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div> <!-- /.owl-carousel -->
\t\t</div> <!-- /.container -->
\t</div> <!-- /.sponsor -->

\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 206,  292 => 190,  286 => 187,  271 => 174,  257 => 168,  250 => 163,  246 => 162,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<div id=\"header\">
\t\t    <div class=\"flexslider\" style=\"background-image: url('assets/images/roadd.jpg')\">
\t\t        <ul class=\"slides\">
\t\t            <li class=\"slider-item\" style=\"background-image: ')\">
\t\t                <div class=\"intro container\">
\t\t                    <div class=\"inner-intro\">
\t\t                        <h1 class=\"header-title\">
\t\t                            <span>ANNONCEZ </span> OU TROUVEZ UN COVOITURAGE
\t\t                        </h1>
\t\t                    </div>
\t\t                </div>
\t\t            </li> <!-- /.slider-item -->
\t\t            <li class=\"slider-item\" >
\t\t                <div class=\"intro\">
\t\t                    <div class=\"inner-intro\">
\t\t                        <h1 class=\"header-title\">
\t\t                            Covoiturage  <span>libre</span> sans <span>commission </span>et <span>coopératif</span>
\t\t                        </h1>
\t\t                    </div>
\t\t                </div>
\t\t            </li> <!-- /.slider-item -->
\t\t        </ul> <!-- /.slides -->
\t\t    </div> <!-- /.flexslider -->
\t\t</div> <!-- /#header -->
<!-- Find a Tour -->
\t<section class=\"tour section-wrapper container\">
\t\t<h2 class=\"section-title\">
\t\t\tRechercher un Trajet 
\t\t</h2>
\t\t<p class=\"section-subtitle\">
\t\t\tOu voulez vous partir ?
\t\t</p>
\t\t<form method = \"POST\" action = \"search\">
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control border-radius border-right\" placeholder=\"Lieu de Depart\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\" style =\"height: auto;\">
\t\t\t\t\t\t<i class=\"ion-android-compass\"></i>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control border-radius border-right\" placeholder=\"Lieu de Destination\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\"  style =\"height: auto;\">
\t\t\t\t\t\t<i class=\"ion-android-map\"></i>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"date\" class=\"form-control border-radius border-right\" placeholder=\"Departure\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\"  style =\"height: auto;\">
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control border-radius border-right\" placeholder=\"Passager\"/>
\t\t\t\t\t<span class=\"input-group-addon border-radius custom-addon\"  style =\"height: auto;\">
\t\t\t\t\t\t<i class=\"ion-android-contacts\"></i>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"btn btn-default border-radius custom-button\"style=\"margin-left: 166%;background-color: #60c9eb;color: white;height: auto;\">
\t\t\t\t\tSearch
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</section> <!-- /.tour -->


<!-- Our Blazzing offers -->
\t<section class=\"offer section-wrapper\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">
\t\t\t\tNos offres
\t\t\t</h2>
\t\t\t<p class=\"section-subtitle\">
\t\t\t\tLorem Ipsum is simply dummy text of the industry.
\t\t\t</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-social-euro\" style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tEconomisation
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tEn partageant les coûts associés à l’utilisation d’une voiture et les frais de stationnement, vous pouvez réaliser des économies de 50 % ou plus.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->

\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-ios-home\"style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tL’environnement en bénéficie
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLe covoiturage réduit le nombre de voitures sur nos routes et contribue donc à diminuer l’émission de gaz nocifs à effet de serre et à protéger l’environnement. 
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->

\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-android-bus\" style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tC’est plus pratique

\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLe covoiturage conserve tous les aspects pratiques de la voiture, mais sans le stress.  Les membres d’un groupe de covoiturage établissent leurs propres règles en fonction de leurs besoins.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->

\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"offer-item\">
\t\t\t\t\t\t\t<i class=\"ion-ios-locked\" style=\"   color: #60c9eb;    font-size: 2.25rem;\"></i>

\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tLe covoiturage vous donne le choix
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLe covoiturage peut s’avérer la solution de transport idéale pour vos déplacements quotidiens, surtout si vous habitez dans un secteur où le transport en commun n’est pas fréquent ou s’il n’existe pas. 

\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.col-md-3 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t</section> <!-- /.offer -->


<!-- Top place to visit -->
\t<section class=\"visit section-wrapper\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">
\t\t\t\tTop Déstination
\t\t\t</h2>
\t\t\t<p class=\"section-subtitle\">
\t\t\t\tLes Top 6 Déstination dans notre site Yalla Bina.
\t\t\t</p>

\t\t\t<div class=\"owl-carousel visit-carousel\" id=\"\" style=\"height: 173px;\">
\t\t\t {% for annonce in annonces %}

              <div class=\"card card-stats mb-4 mb-xl-0\" style=\"width: 70%;margin-left: 10%;margin-top: 17%;height: 75px;background-color: #60c9eb;color: white;\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col\" style=\"text-align: center;font-size: 26px;\">
                      <span>{{annonce.depart}}</span><span> → </span><span>{{annonce.arrivee}}</span>
                    </div>
                  </div>
                </div>
              </div>
\t\t\t  {% endfor %}

\t\t</div> <!-- /.container -->
\t</section> <!-- /.visit -->

<div class=\"offer-cta\">
\t<div class=\"container\">
\t\t<div class=\"offering\">
\t\t\t<div class=\"percent\">
\t\t\t\t<span>Joignez</span> 
\t\t\t</div>
\t\t\t<div class=\"FTour\">
\t\t\t\tnous <strong>gratuitement</strong>
\t\t\t</div>
\t\t\t<a class=\"btn btn-default price-btn\" href=\"{{ path('security_registration') }}\" style = \"background-color: #60c9eb;color: white;\">
\t\t\t\tInscrivez vous
\t\t\t</a>
\t\t\t<a class=\"btn btn-default price-btn\" href=\"{{ path('app_login') }}\" style = \"background-color: #60c9eb;color: white;\">
\t\t\t\tConnexion a votre compte
\t\t\t</a>
\t\t</div> <!-- /.offering -->
\t</div> <!-- /.container -->
</div> <!-- /.offer-cta -->

\t<section class=\"additional-services section-wrapper\">
\t\t<div class=\"container-fluid\">
               <div class=\"row\">
                  <div class=\"col-md-6 left\" style = \"margin-left: 23%;\">
                     <img src=\"assets/images/propose.png\">
                  </div>
                  <div class=\"col-md-3\" style=\"margin: auto;\">
                    <span style = \"margin-left: -93%; margin-top: 3%; white-space: pre-line;   color: rgb(5, 71, 82);  font-size: 24px; line-height: 1.06; font-weight: 500;\">Vous prenez le volant ? Dites-nous où vous allez !</span>
\t\t\t\t\t<p style = \"margin-left: -93%;\"> Ensemble, permettons à des millions de personnes de se déplacer.</p>
\t\t\t\t\t<a class=\"btn btn-primary\" href = \"{{ path('traget') }}\" style = \"margin-left: -93%;   background-color: rgb(0, 175, 245);\" >Proposer un traget</a>
                  </div>
               </div>
               </div> <!-- /.container -->
\t</section> <!-- /.Additional-services -->


\t<div class=\"section-wrapper sponsor\">
\t\t<div class=\"container\">
\t\t\t<div class=\"owl-carousel sponsor-carousel\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-1.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-2.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-3.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-4.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-5.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-6.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-1.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-2.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-3.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-4.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-5.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-6.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-1.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-2.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-3.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-4.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-5.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"assets/images/sp-6.png\" alt=\"sponsor-brand\" class=\"img-responsive sponsor-item\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div> <!-- /.owl-carousel -->
\t\t</div> <!-- /.container -->
\t</div> <!-- /.sponsor -->

\t

{% endblock %}
", "accueil/index.html.twig", "C:\\Users\\Lenovo\\pfa_covoiturage\\templates\\accueil\\index.html.twig");
    }
}
