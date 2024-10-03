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

/* index/nosotros.html.twig */
class __TwigTemplate_7c5c8c5ca34dea0ccaec279785922918da097c4eba00d3fa3a1eb117753c9217 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/nosotros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/nosotros.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/nosotros.html.twig", 1);
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

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Nosotros";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<section id=\"inner-headline\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span4\">
          <div class=\"inner-heading\">
            <h2>Nosotros</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Inicio</a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Nosotros</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<section id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span6\">
          <h2>Nuestra <strong>historia</strong></h2>
          <p>
            Cobán (del idioma quekchí, significa «entre nubes») es una ciudad y también cabecera del departamento de Alta Verapaz, localizada en la República de Guatemala4​ a 1320 metros de altitud, actualmente es la cuarta ciudad más poblada del país, solamente superada por la Ciudad de Guatemala, Villa Nueva y Mixco. La ciudad de Cobán junto a San Pedro Carchá ocupan el séptimo lugar dentro de las conurbaciones urbanas más importantes de Guatemala.
          </p>
          <p>
            Luego de la conquista de Guatemala por los españoles, y de las Capitulaciones de Tezulutlán fue una doctrina a cargo de los frailes dominicos, hasta que estos tuvieron que entregar sus doctrinas al clero secular en 1754. Después de la Independencia de Centroamérica fue uno de los municipios originales del Estado de Guatemala en 1825.
          </p>
          <p> <i>
            Fuente: https://es.wikipedia.org/wiki/</i>
          </p>
        </div>
        <div class=\"span6\">
          <!-- start flexslider -->
          <div class=\"flexslider\">
            <ul class=\"slides\">
              <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-01-full.jpg"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
              </li>
              <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\" class=\"\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-02-full.jpg"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
              </li>
              <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;\" class=\"flex-active-slide\">
                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-03-full.jpg"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
              </li>
            </ul>
          <ol class=\"flex-control-nav flex-control-paging\"><li><a href=\"#\" class=\"\">1</a></li><li><a href=\"#\" class=\"\">2</a></li><li><a href=\"#\" class=\"flex-active\">3</a></li></ol><ul class=\"flex-direction-nav\"><li class=\"flex-nav-prev\"><a class=\"flex-prev\" href=\"#\">&lt;</a></li><li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">&gt;</a></li></ul></div>
          <!-- end flexslider -->
        </div>
      </div>
      <!-- divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <div class=\"solidline\">
          </div>
        </div>
      </div>
      <!-- end divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <h4>Nuestro equipo</h4>
        </div>
        <div class=\"span3\">
          <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/team3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Ana López</strong>
            </p>
            <p>
              Fundadora
            </p>
          </div>
        </div>
        <div class=\"span3\">
          <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/team1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Gadiel López</strong>
            </p>
            <p>
              Coordinador
            </p>
          </div>
        </div>
        <div class=\"span3\">
          <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/team3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Alejandra López</strong>
            </p>
            <p>
              Diseñadora de eventos
            </p>
          </div>
        </div>
        <div class=\"span3\">
          <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/team4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Alejandro López</strong>
            </p>
            <p>
              Chef
            </p>
          </div>
        </div>
      </div>
      <!-- divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <div class=\"solidline\">
          </div>
        </div>
      </div>
      <!-- end divider -->

    </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 130,  272 => 129,  239 => 106,  225 => 95,  211 => 84,  197 => 73,  174 => 53,  168 => 50,  162 => 47,  132 => 20,  128 => 19,  114 => 8,  104 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}-Nosotros{% endblock %}
{% block stylesheets %}
    {{parent()}}
{% endblock %}
{% block content %}
{{parent()}}
<section id=\"inner-headline\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span4\">
          <div class=\"inner-heading\">
            <h2>Nosotros</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
            <li><a href=\"{{ path(\"index\") }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li><a href=\"{{ path(\"index\") }}\">Inicio</a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Nosotros</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<section id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span6\">
          <h2>Nuestra <strong>historia</strong></h2>
          <p>
            Cobán (del idioma quekchí, significa «entre nubes») es una ciudad y también cabecera del departamento de Alta Verapaz, localizada en la República de Guatemala4​ a 1320 metros de altitud, actualmente es la cuarta ciudad más poblada del país, solamente superada por la Ciudad de Guatemala, Villa Nueva y Mixco. La ciudad de Cobán junto a San Pedro Carchá ocupan el séptimo lugar dentro de las conurbaciones urbanas más importantes de Guatemala.
          </p>
          <p>
            Luego de la conquista de Guatemala por los españoles, y de las Capitulaciones de Tezulutlán fue una doctrina a cargo de los frailes dominicos, hasta que estos tuvieron que entregar sus doctrinas al clero secular en 1754. Después de la Independencia de Centroamérica fue uno de los municipios originales del Estado de Guatemala en 1825.
          </p>
          <p> <i>
            Fuente: https://es.wikipedia.org/wiki/</i>
          </p>
        </div>
        <div class=\"span6\">
          <!-- start flexslider -->
          <div class=\"flexslider\">
            <ul class=\"slides\">
              <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">
                <img src=\"{{ asset(\"img/works/full/image-01-full.jpg\")}}\" alt=\"\" draggable=\"false\">
              </li>
              <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\" class=\"\">
                <img src=\"{{ asset(\"img/works/full/image-02-full.jpg\")}}\" alt=\"\" draggable=\"false\">
              </li>
              <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;\" class=\"flex-active-slide\">
                <img src=\"{{ asset(\"img/works/full/image-03-full.jpg\")}}\" alt=\"\" draggable=\"false\">
              </li>
            </ul>
          <ol class=\"flex-control-nav flex-control-paging\"><li><a href=\"#\" class=\"\">1</a></li><li><a href=\"#\" class=\"\">2</a></li><li><a href=\"#\" class=\"flex-active\">3</a></li></ol><ul class=\"flex-direction-nav\"><li class=\"flex-nav-prev\"><a class=\"flex-prev\" href=\"#\">&lt;</a></li><li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">&gt;</a></li></ul></div>
          <!-- end flexslider -->
        </div>
      </div>
      <!-- divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <div class=\"solidline\">
          </div>
        </div>
      </div>
      <!-- end divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <h4>Nuestro equipo</h4>
        </div>
        <div class=\"span3\">
          <img src=\"{{ asset(\"img/dummies/team3.jpg\")}}\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Ana López</strong>
            </p>
            <p>
              Fundadora
            </p>
          </div>
        </div>
        <div class=\"span3\">
          <img src=\"{{ asset(\"img/dummies/team1.jpg\")}}\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Gadiel López</strong>
            </p>
            <p>
              Coordinador
            </p>
          </div>
        </div>
        <div class=\"span3\">
          <img src=\"{{ asset(\"img/dummies/team3.jpg\")}}\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Alejandra López</strong>
            </p>
            <p>
              Diseñadora de eventos
            </p>
          </div>
        </div>
        <div class=\"span3\">
          <img src=\"{{ asset(\"img/dummies/team4.jpg\")}}\" alt=\"\" class=\"img-polaroid\">
          <div class=\"roles\">
            <p class=\"lead\">
              <strong>Alejandro López</strong>
            </p>
            <p>
              Chef
            </p>
          </div>
        </div>
      </div>
      <!-- divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <div class=\"solidline\">
          </div>
        </div>
      </div>
      <!-- end divider -->

    </div>
  </section>
{% endblock %}
{% block javascripts %}
    {{parent()}}
{% endblock %}", "index/nosotros.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\index\\nosotros.html.twig");
    }
}
