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

/* evento/index.html.twig */
class __TwigTemplate_64b11206b4b7b5fc936abf77f31fe3fce6fd43df8420d88ab11e2fb5f17f8b64 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evento/index.html.twig", 1);
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
        echo "-Evento";
        
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
        echo "
";
        // line 9
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<section id=\"inner-headline\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span4\">
          <div class=\"inner-heading\">
            <h2>Eventos</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Eventos</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<section id=\"content\">
    <div class=\"container\">
      <!-- divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <div class=\"solidline\">
          </div>
        </div>
      </div>
      <!-- end divider -->
      <!--inicio contenido principal-->
      <div class=\"row\">
        <div class=\"span12\">
          <h4>Ultimos eventos</h4>
        </div>
      </div>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 44
            echo "        <div class=\"card-group\">
          <div class=\"card\">
            <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-08-full.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img-polaroid\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Tipo: </strong>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "tipo", [], "any", false, false, false, 48), "html", null, true);
            echo "</h5>
              <p class=\"card-text\">Descripcion: </strong>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "descripcion", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
              <p class=\"card-text\"><small class=\"text-muted\"><strong>Id: </strong>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "idevento", [], "any", false, false, false, 50), "html", null, true);
            echo " <br>
                <strong>Fecha: </strong>";
            // line 51
            ((twig_get_attribute($this->env, $this->source, $context["evento"], "fecha", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "fecha", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " <br>
                <strong>Hora: </strong>";
            // line 52
            ((twig_get_attribute($this->env, $this->source, $context["evento"], "hora", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "hora", [], "any", false, false, false, 52), "H:i:s"), "html", null, true))) : (print ("")));
            echo " <br>
                <strong>Asistentes: </strong>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "asistentes", [], "any", false, false, false, 53), "html", null, true);
            echo " <br>
                </small></p>
                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_show", ["idevento" => twig_get_attribute($this->env, $this->source, $context["evento"], "idevento", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Mostar</a>
                ";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 57
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_edit", ["idevento" => twig_get_attribute($this->env, $this->source, $context["evento"], "idevento", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">Editar</a>
                ";
            }
            // line 59
            echo "            </div>
          </div>
        </div>
<br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "            <p>
                <strong>No existen datos </strong>
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "          
        
        
     
      ";
        // line 72
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 73
            echo "      <a class=\"btn btn-large btn-theme btn-rounded\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_new");
            echo "\">Nuevo</a>
      ";
        }
        // line 75
        echo "      <!--fin contenido-->
      <div  class=\"navigation\"> 
        ";
        // line 77
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 77, $this->source); })()));
        echo " 
        Eventos: ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 78, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 78), "html", null, true);
        echo "       
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

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 94,  273 => 93,  248 => 78,  244 => 77,  240 => 75,  234 => 73,  232 => 72,  226 => 68,  217 => 64,  208 => 59,  202 => 57,  200 => 56,  196 => 55,  191 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  171 => 48,  166 => 46,  162 => 44,  157 => 43,  131 => 20,  117 => 9,  114 => 8,  104 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}-Evento{% endblock %}
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
            <h2>Eventos</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
            <li><a href=\"{{ path(\"index\") }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Eventos</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<section id=\"content\">
    <div class=\"container\">
      <!-- divider -->
      <div class=\"row\">
        <div class=\"span12\">
          <div class=\"solidline\">
          </div>
        </div>
      </div>
      <!-- end divider -->
      <!--inicio contenido principal-->
      <div class=\"row\">
        <div class=\"span12\">
          <h4>Ultimos eventos</h4>
        </div>
      </div>
        {% for evento in paginacion %}
        <div class=\"card-group\">
          <div class=\"card\">
            <img src=\"{{ asset(\"img/works/full/image-08-full.jpg\")}}\" alt=\"\" class=\"img-polaroid\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Tipo: </strong>{{ evento.tipo }}</h5>
              <p class=\"card-text\">Descripcion: </strong>{{ evento.descripcion }}</p>
              <p class=\"card-text\"><small class=\"text-muted\"><strong>Id: </strong>{{ evento.idevento }} <br>
                <strong>Fecha: </strong>{{ evento.fecha ? evento.fecha|date('Y-m-d') : '' }} <br>
                <strong>Hora: </strong>{{ evento.hora ? evento.hora|date('H:i:s') : '' }} <br>
                <strong>Asistentes: </strong>{{ evento.asistentes }} <br>
                </small></p>
                <a href=\"{{ path('evento_show', {'idevento': evento.idevento}) }}\">Mostar</a>
                {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('evento_edit', {'idevento': evento.idevento}) }}\">Editar</a>
                {% endif %}
            </div>
          </div>
        </div>
<br>
            {% else %}
            <p>
                <strong>No existen datos </strong>
            </p>
        {% endfor %}
          
        
        
     
      {% if is_granted('ROLE_ADMIN') %}
      <a class=\"btn btn-large btn-theme btn-rounded\" href=\"{{ path('evento_new') }}\">Nuevo</a>
      {% endif %}
      <!--fin contenido-->
      <div  class=\"navigation\"> 
        {{knp_pagination_render ( paginacion )}} 
        Eventos: {{ paginacion.getTotalItemCount }}       
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
{% endblock %}", "evento/index.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\evento\\index.html.twig");
    }
}
