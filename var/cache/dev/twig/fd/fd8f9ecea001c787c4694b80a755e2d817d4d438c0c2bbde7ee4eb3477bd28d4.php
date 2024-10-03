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

/* cliente/index.html.twig */
class __TwigTemplate_d116f53090fef6b5a1be2bdd8ab4b64c9e305bd1c332f8be2cc89cd242be9f95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        echo " - Cliente";
        
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
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <section id=\"inner-headline\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"span4\">
              <div class=\"inner-heading\">
                <h2>Clientes</h2>
              </div>
            </div>
            <div class=\"span8\">
              <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                <li class=\"active\">Clientes</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

<section id=\"content\">
    <div class=\"container\">
    <form class=\"form-inline \">
        <div class=\"search\">
            <input type=\"search\" name=\"query\" value=\"\" id=\"search_keywords\" placeholder=\"Buscar\">
            <button class=\"btn btn-outline-primary my-2 my-sm-0\" id=\"buscar\" title=\"Buscar\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
              <img id=\"loader\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cargando.gif"), "html", null, true);
        echo "\" style=\"vertical-align: middle; display: none\" />
              <div class=\"help\">
                Busqueda por nombre
              </div>    
        </div>
    </form>
    <div id=\"nombre\">
            <!--mostrar resultado ajax-->
            
    </div>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Idcliente</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "                    <th>Opciones</th>
                    ";
        }
        // line 55
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 59
            echo "                <tr>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "idcliente", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nombre", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "apellido", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "email", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefono", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "direccion", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 67
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 68
                echo "                            <a class=\"btn btn-inverse\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_show", ["idcliente" => twig_get_attribute($this->env, $this->source, $context["cliente"], "idcliente", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\">Mostrar</a>
                            <a class=\"btn btn-warning\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_edit", ["idcliente" => twig_get_attribute($this->env, $this->source, $context["cliente"], "idcliente", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\">Editar</a>
                        ";
            }
            // line 71
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                <tr>
                    <td colspan=\"7\">Sin datos</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </tbody>
        </table>
        ";
        // line 80
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 81
            echo "        <a class=\"btn btn-large btn-theme btn-rounded\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_new");
            echo "\">Nuevo</a>
        ";
        }
        // line 83
        echo "        <div class=\"row\">
            <div class=\"span6\">
            </div>
            <div class=\"span6\">

            </div>
        </div>
        <div  class=\"navigation\"> 
            ";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 91, $this->source); })()));
        echo " 
            Total de clientes: ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginacion"]) || array_key_exists("paginacion", $context) ? $context["paginacion"] : (function () { throw new RuntimeError('Variable "paginacion" does not exist.', 92, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 92), "html", null, true);
        echo "       
        </div>
    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(\"#buscar\").click(function(ev){
        ev.preventDefault();
        buscarNombre();
    })
    function buscarNombre(){
      \$('#buscar').hide(); 
      \$('#loader').show();
      //\$('#search_keywords').keyup(function(key)
      //{
        var buscarN=\$(\"#search_keywords\").val();
        //if (this.value.length >= 3 || this.value == '')
        //{
          
          var ruta=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscarPorNombre");
        echo "\";
          //var ruta= Routing.generate('buscarPorNombre');
          \$.ajax({      
            type:'POST',
            url:ruta,
            data:({nombre:buscarN}),
            async:true,
            dataType:'json',
            success: function(data){
                console.log(data);
                \$('#loader').hide();
                \$('#buscar').show(); 
                \$('#nombre').html(data)
            }
          }) 
          /*
          \$('#nombre').load(
            \$(this).parents('form').attr('action'),
            { query: this.value + '*' },
            function() { \$('#loader').hide(); }
          );*/
       // }
      //});
    }
    
    </script>     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 114,  292 => 99,  282 => 98,  266 => 92,  262 => 91,  252 => 83,  246 => 81,  244 => 80,  240 => 78,  231 => 74,  224 => 71,  219 => 69,  214 => 68,  212 => 67,  207 => 65,  203 => 64,  199 => 63,  195 => 62,  191 => 61,  187 => 60,  184 => 59,  179 => 58,  174 => 55,  170 => 53,  168 => 52,  146 => 33,  129 => 19,  114 => 8,  104 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Cliente{% endblock %}
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
                <h2>Clientes</h2>
              </div>
            </div>
            <div class=\"span8\">
              <ul class=\"breadcrumb\">
                <li><a href=\"{{ path(\"index\") }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                <li class=\"active\">Clientes</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

<section id=\"content\">
    <div class=\"container\">
    <form class=\"form-inline \">
        <div class=\"search\">
            <input type=\"search\" name=\"query\" value=\"\" id=\"search_keywords\" placeholder=\"Buscar\">
            <button class=\"btn btn-outline-primary my-2 my-sm-0\" id=\"buscar\" title=\"Buscar\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
              <img id=\"loader\" src=\"{{ asset(\"img/cargando.gif\")}}\" style=\"vertical-align: middle; display: none\" />
              <div class=\"help\">
                Busqueda por nombre
              </div>    
        </div>
    </form>
    <div id=\"nombre\">
            <!--mostrar resultado ajax-->
            
    </div>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Idcliente</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    {% if is_granted('ROLE_ADMIN') %}
                    <th>Opciones</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
            {% for cliente in paginacion %}
                <tr>
                    <td>{{ cliente.idcliente }}</td>
                    <td>{{ cliente.nombre }}</td>
                    <td>{{ cliente.apellido }}</td>
                    <td>{{ cliente.email }}</td>
                    <td>{{ cliente.telefono }}</td>
                    <td>{{ cliente.direccion }}</td>
                    <td>
                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"btn btn-inverse\" href=\"{{ path('cliente_show', {'idcliente': cliente.idcliente}) }}\">Mostrar</a>
                            <a class=\"btn btn-warning\" href=\"{{ path('cliente_edit', {'idcliente': cliente.idcliente}) }}\">Editar</a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">Sin datos</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {% if is_granted('ROLE_ADMIN') %}
        <a class=\"btn btn-large btn-theme btn-rounded\" href=\"{{ path('cliente_new') }}\">Nuevo</a>
        {% endif %}
        <div class=\"row\">
            <div class=\"span6\">
            </div>
            <div class=\"span6\">

            </div>
        </div>
        <div  class=\"navigation\"> 
            {{knp_pagination_render ( paginacion )}} 
            Total de clientes: {{ paginacion.getTotalItemCount }}       
        </div>
    </div>
</section>

{% endblock %}
{% block javascripts %}
    {{parent()}}
    <script>
        \$(\"#buscar\").click(function(ev){
        ev.preventDefault();
        buscarNombre();
    })
    function buscarNombre(){
      \$('#buscar').hide(); 
      \$('#loader').show();
      //\$('#search_keywords').keyup(function(key)
      //{
        var buscarN=\$(\"#search_keywords\").val();
        //if (this.value.length >= 3 || this.value == '')
        //{
          
          var ruta=\"{{ path('buscarPorNombre') }}\";
          //var ruta= Routing.generate('buscarPorNombre');
          \$.ajax({      
            type:'POST',
            url:ruta,
            data:({nombre:buscarN}),
            async:true,
            dataType:'json',
            success: function(data){
                console.log(data);
                \$('#loader').hide();
                \$('#buscar').show(); 
                \$('#nombre').html(data)
            }
          }) 
          /*
          \$('#nombre').load(
            \$(this).parents('form').attr('action'),
            { query: this.value + '*' },
            function() { \$('#loader').hide(); }
          );*/
       // }
      //});
    }
    
    </script>     
{% endblock %}", "cliente/index.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\cliente\\index.html.twig");
    }
}
