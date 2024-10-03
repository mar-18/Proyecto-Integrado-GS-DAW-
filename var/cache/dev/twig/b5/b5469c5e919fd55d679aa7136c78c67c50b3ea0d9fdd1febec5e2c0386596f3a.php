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

/* presupuesto/buscar.html.twig */
class __TwigTemplate_ffdc9804273aa7ecd241dabb324d59407471a7e40c1e54433ba0c352c98260e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presupuesto/buscar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presupuesto/buscar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presupuesto/buscar.html.twig", 1);
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
        echo "-Presupuesto";
        
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
        echo "  ";
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
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<section id=\"inner-headline\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"span4\">
        <div class=\"inner-heading\">
          <h2>Presupuesto</h2>
        </div>
      </div>
      <div class=\"span8\">
        <ul class=\"breadcrumb\">
          <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
          <li class=\"active\">Presupuesto</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id=\"content\">  
  <div class=\"span4\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img class=\"d-block w-100\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"First slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block w-100\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"Second slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block w-100\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\"alt=\"Third slide\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">-</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">></span>
      </a>
    </div>
  </div>
  <div class=\"container\">
    <h1><i class=\"fas fa-address-book\"></i>Presupuesto</h1>
    <h2 class=\"heading\">Elige <strong>fecha y salon</strong> para tu evento</h2>
    
  ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "
    <h4 class=\"heading\">Buscar: </h4>
    <p class=\"heading\">
      ";
        // line 67
        if (0 === twig_compare((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 67, $this->source); })()), "Salon no disponible para esta fecha")) {
            // line 68
            echo "      ";
            echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 68, $this->source); })()), "html", null, true);
            echo ", selecciona otra fecha, o no ha seleccionado una fecha <i class=\"fas fa-edit\"></i>
      ";
        }
        // line 70
        echo "    </p>
      
    <div>

      <label class=\"heading\" for=\"fechaEvento\">Fecha para el evento</label>
      
        <input type=\"date\" name=\"fecha\" id=\"fechaT\" class=\"form-control\" required autofocus>
      <label class=\"heading\" for=\"salon\">Salones</label>
        <select id=\"salonT\" class=\"form-control\">
          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salonRepositorio"]) || array_key_exists("salonRepositorio", $context) ? $context["salonRepositorio"] : (function () { throw new RuntimeError('Variable "salonRepositorio" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 80
            echo "            <option class=\"heading\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "nombresalon", [], "any", false, false, false, 80), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </select>  
        <div class=\"span12\">
          <div class=\"big-cta\">
            <div class=\"cta-text\">
              
            </div>
            <div class=\"cta floatright\">
              <a class=\"btn btn-large btn-theme btn-rounded\"><button type=\"submit\" id=\"buscar\" class=\"btn btn-large btn-theme btn-rounded\"> Buscar</button></a>
            </div>
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
    <!-- Portfolio Projects -->
    <div class=\"row\">
      <div class=\"span12\">
        <h4 class=\"heading\">Nuestros <strong>salones</strong></h4>
        <div class=\"row\">
          <section id=\"projects\">
            <ul id=\"thumbs\" class=\"portfolio\">
              <!-- Item Project and Filter Name -->
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salonRepositorio"]) || array_key_exists("salonRepositorio", $context) ? $context["salonRepositorio"] : (function () { throw new RuntimeError('Variable "salonRepositorio" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 112
            echo "                        <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                          <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                          <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "nombresalon", [], "any", false, false, false, 114), "html", null, true);
            echo " href=";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 114)), 0)) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 114))), "html", null, true);
                echo "\"";
            } else {
                echo " \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/blog/65x65/thumb1.jpg"), "html", null, true);
                echo "\"";
            }
            echo " alt=\"Aforo: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "capacidad", [], "any", false, false, false, 114), "html", null, true);
            echo " personas\">
                  <span class=\"overlay-img\"></span>
                  <span class=\"overlay-img-thumb font-icon-plus\"></span>
                  </a>
                          <!-- Thumb Image and Description -->
                          <img src=";
            // line 119
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 119)), 0)) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 119))), "html", null, true);
                echo "\"";
            } else {
                echo " \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/blog/65x65/thumb1.jpg"), "html", null, true);
                echo "\"";
            }
            echo " alt=\"Aforo: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "capacidad", [], "any", false, false, false, 119), "html", null, true);
            echo " personas\" >
                        </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "              <!-- End Item Project -->
            </ul>
          </section>
        </div>
      </div>
    </div>
    <!-- End Portfolio Projects -->
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

    // line 141
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
<script>
      \$(window).ready(function(){
        \$(\"#buscar\").click(function(ev){
          ev.preventDefault();
          buscar();
        })
      })
    function buscar(){
      let datos={
        \"fechaT\":\$(\"#fechaT\").val(),
        /*\"numPersonasT\":\$(\"#numPersonasT\").val(),*/
        \"salonT\":\$(\"#salonT\").val()
       
      };
      window.location.href =\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscarR");
        echo "\"+\"/\"+JSON.stringify(datos);
    }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "presupuesto/buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 160,  351 => 145,  347 => 144,  343 => 143,  339 => 142,  329 => 141,  301 => 122,  282 => 119,  262 => 114,  258 => 112,  254 => 111,  223 => 82,  214 => 80,  210 => 79,  199 => 70,  193 => 68,  191 => 67,  185 => 64,  165 => 47,  159 => 44,  153 => 41,  132 => 23,  114 => 8,  104 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}-Presupuesto{% endblock %}
{% block stylesheets %}
  {{parent()}}
{% endblock %}
{% block content %}
{{parent()}}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<section id=\"inner-headline\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"span4\">
        <div class=\"inner-heading\">
          <h2>Presupuesto</h2>
        </div>
      </div>
      <div class=\"span8\">
        <ul class=\"breadcrumb\">
          <li><a href=\"{{ path(\"index\") }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
          <li class=\"active\">Presupuesto</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id=\"content\">  
  <div class=\"span4\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img class=\"d-block w-100\" src=\"{{ asset(\"img/logo1.png\")}}\" alt=\"First slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block w-100\" src=\"{{ asset(\"img/logo1.png\")}}\" alt=\"Second slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block w-100\" src=\"{{ asset(\"img/logo1.png\")}}\"alt=\"Third slide\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">-</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">></span>
      </a>
    </div>
  </div>
  <div class=\"container\">
    <h1><i class=\"fas fa-address-book\"></i>Presupuesto</h1>
    <h2 class=\"heading\">Elige <strong>fecha y salon</strong> para tu evento</h2>
    
  {{ controller_name }}
    <h4 class=\"heading\">Buscar: </h4>
    <p class=\"heading\">
      {% if controller_name == \"Salon no disponible para esta fecha\"  %}
      {{ controller_name }}, selecciona otra fecha, o no ha seleccionado una fecha <i class=\"fas fa-edit\"></i>
      {% endif %}
    </p>
      
    <div>

      <label class=\"heading\" for=\"fechaEvento\">Fecha para el evento</label>
      
        <input type=\"date\" name=\"fecha\" id=\"fechaT\" class=\"form-control\" required autofocus>
      <label class=\"heading\" for=\"salon\">Salones</label>
        <select id=\"salonT\" class=\"form-control\">
          {% for salon in salonRepositorio %}
            <option class=\"heading\">{{ salon.nombresalon}}</option>
          {% endfor %}
        </select>  
        <div class=\"span12\">
          <div class=\"big-cta\">
            <div class=\"cta-text\">
              
            </div>
            <div class=\"cta floatright\">
              <a class=\"btn btn-large btn-theme btn-rounded\"><button type=\"submit\" id=\"buscar\" class=\"btn btn-large btn-theme btn-rounded\"> Buscar</button></a>
            </div>
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
    <!-- Portfolio Projects -->
    <div class=\"row\">
      <div class=\"span12\">
        <h4 class=\"heading\">Nuestros <strong>salones</strong></h4>
        <div class=\"row\">
          <section id=\"projects\">
            <ul id=\"thumbs\" class=\"portfolio\">
              <!-- Item Project and Filter Name -->
                {% for salon in salonRepositorio %}
                        <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                          <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                          <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title={{ salon.nombresalon}} href={% if salon.foto|length >0 %}\"{{ asset ('img/'~salon.foto) }}\"{% else %} \"{{ asset ('img/dummies/blog/65x65/thumb1.jpg') }}\"{% endif %} alt=\"Aforo: {{ salon.capacidad }} personas\">
                  <span class=\"overlay-img\"></span>
                  <span class=\"overlay-img-thumb font-icon-plus\"></span>
                  </a>
                          <!-- Thumb Image and Description -->
                          <img src={% if salon.foto|length >0 %}\"{{ asset ('img/'~salon.foto) }}\"{% else %} \"{{ asset ('img/dummies/blog/65x65/thumb1.jpg') }}\"{% endif %} alt=\"Aforo: {{ salon.capacidad }} personas\" >
                        </li>
                {% endfor %}
              <!-- End Item Project -->
            </ul>
          </section>
        </div>
      </div>
    </div>
    <!-- End Portfolio Projects -->
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
<script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
<script src=\"{{ asset(\"js/ajax.js\") }}\"></script>
<script>
      \$(window).ready(function(){
        \$(\"#buscar\").click(function(ev){
          ev.preventDefault();
          buscar();
        })
      })
    function buscar(){
      let datos={
        \"fechaT\":\$(\"#fechaT\").val(),
        /*\"numPersonasT\":\$(\"#numPersonasT\").val(),*/
        \"salonT\":\$(\"#salonT\").val()
       
      };
      window.location.href =\"{{path('buscarR')}}\"+\"/\"+JSON.stringify(datos);
    }
    </script>
{% endblock %}
", "presupuesto/buscar.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\presupuesto\\buscar.html.twig");
    }
}
