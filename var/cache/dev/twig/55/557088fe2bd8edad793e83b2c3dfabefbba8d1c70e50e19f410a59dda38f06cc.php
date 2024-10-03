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

/* salon/index.html.twig */
class __TwigTemplate_1191dc81215ebb20b74dbdca1480e5eed7b06b99d78d5fbee2f47e2b8a04639e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salon/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salon/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salon/index.html.twig", 1);
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
        echo "-Salón";
        
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
            <h2>Salones</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Salones</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <section id=\"content\">  
    <div class=\"span2\">
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"First slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"Second slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 43
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
     


      <!-- Portfolio Projects -->
      <div class=\"row\">
        <div class=\"span12\">
          <h4 class=\"heading\">Nuestros <strong>salones</strong></h4>
          <div class=\"row\">
            <section id=\"projects\">
              <ul id=\"thumbs\" class=\"portfolio\">
                <!-- Item Project and Filter Name -->
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 69
            echo "                        <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                            <label for=\"\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "idsalon", [], "any", false, false, false, 70), "html", null, true);
            echo " -
                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_show", ["idsalon" => twig_get_attribute($this->env, $this->source, $context["salon"], "idsalon", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">Mostrar</a>
                                ";
            // line 72
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 73
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_edit", ["idsalon" => twig_get_attribute($this->env, $this->source, $context["salon"], "idsalon", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">Editar</a>
                                ";
            }
            // line 75
            echo "                            </label>
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "nombresalon", [], "any", false, false, false, 77), "html", null, true);
            echo " href=";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 77)), 0)) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 77))), "html", null, true);
                echo "\"";
            } else {
                echo " \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/blog/65x65/thumb1.jpg"), "html", null, true);
                echo "\"";
            }
            echo " alt=\"Aforo: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "capacidad", [], "any", false, false, false, 77), "html", null, true);
            echo " - Precio: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "precio", [], "any", false, false, false, 77), "html", null, true);
            echo "\">
                            <span class=\"overlay-img\"></span>
                            <span class=\"overlay-img-thumb font-icon-plus\"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                   
                            <img src=";
            // line 83
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 83)), 0)) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["salon"], "foto", [], "any", false, false, false, 83))), "html", null, true);
                echo "\"";
            } else {
                echo " \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/blog/65x65/thumb1.jpg"), "html", null, true);
                echo "\"";
            }
            echo " alt=\"Aforo: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "capacidad", [], "any", false, false, false, 83), "html", null, true);
            echo " - Precio: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "precio", [], "any", false, false, false, 83), "html", null, true);
            echo "\">
                            <label for=\"\">
                                
                            </label>
                        </li>                        
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "                        <li>
                            No existen datos
                        </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                  
                <!-- End Item Project -->
              </ul>
              
            </section>
            
          </div>
        </div>
        ";
        // line 101
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 102
            echo "        <a class=\"btn btn-large btn-theme btn-rounded\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_new");
            echo "\">Nuevo</a>
        ";
        }
        // line 104
        echo "      </div>
      <!-- End Portfolio Projects -->
      <div  class=\"navigation\"> 
        ";
        // line 107
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 107, $this->source); })()));
        echo " 
        Salones: ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 108, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 108), "html", null, true);
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

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salon/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 124,  324 => 123,  299 => 108,  295 => 107,  290 => 104,  284 => 102,  282 => 101,  272 => 93,  263 => 89,  240 => 83,  217 => 77,  213 => 75,  207 => 73,  205 => 72,  201 => 71,  197 => 70,  194 => 69,  189 => 68,  161 => 43,  155 => 40,  149 => 37,  128 => 19,  114 => 8,  104 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}-Salón{% endblock %}
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
            <h2>Salones</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
            <li><a href=\"{{ path(\"index\") }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Salones</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <section id=\"content\">  
    <div class=\"span2\">
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
     


      <!-- Portfolio Projects -->
      <div class=\"row\">
        <div class=\"span12\">
          <h4 class=\"heading\">Nuestros <strong>salones</strong></h4>
          <div class=\"row\">
            <section id=\"projects\">
              <ul id=\"thumbs\" class=\"portfolio\">
                <!-- Item Project and Filter Name -->
                {% for salon in paginacion %}
                        <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                            <label for=\"\">{{ salon.idsalon }} -
                                <a href=\"{{ path('salon_show', {'idsalon': salon.idsalon}) }}\">Mostrar</a>
                                {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('salon_edit', {'idsalon': salon.idsalon}) }}\">Editar</a>
                                {% endif %}
                            </label>
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title={{ salon.nombresalon }} href={% if salon.foto|length >0 %}\"{{ asset ('img/'~salon.foto) }}\"{% else %} \"{{ asset ('img/dummies/blog/65x65/thumb1.jpg') }}\"{% endif %} alt=\"Aforo: {{ salon.capacidad }} - Precio: {{ salon.precio }}\">
                            <span class=\"overlay-img\"></span>
                            <span class=\"overlay-img-thumb font-icon-plus\"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                   
                            <img src={% if salon.foto|length >0 %}\"{{ asset ('img/'~salon.foto) }}\"{% else %} \"{{ asset ('img/dummies/blog/65x65/thumb1.jpg') }}\"{% endif %} alt=\"Aforo: {{ salon.capacidad }} - Precio: {{ salon.precio }}\">
                            <label for=\"\">
                                
                            </label>
                        </li>                        
                        {% else %}
                        <li>
                            No existen datos
                        </li>
                  {% endfor %}
                  
                <!-- End Item Project -->
              </ul>
              
            </section>
            
          </div>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
        <a class=\"btn btn-large btn-theme btn-rounded\" href=\"{{ path('salon_new') }}\">Nuevo</a>
        {% endif %}
      </div>
      <!-- End Portfolio Projects -->
      <div  class=\"navigation\"> 
        {{knp_pagination_render ( paginacion )}} 
        Salones: {{ paginacion.getTotalItemCount }}       
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
{% endblock %}

", "salon/index.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\salon\\index.html.twig");
    }
}
