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

/* shared/menu_izquierdo.html.twig */
class __TwigTemplate_82e43b5fb07ce00271b719d865eac4cf28cd60598b4e5e43975d9b2231af8870 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/menu_izquierdo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/menu_izquierdo.html.twig"));

        // line 1
        echo "<div class=\"\">Color de flor</div>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colores"]) || array_key_exists("colores", $context) ? $context["colores"] : (function () { throw new RuntimeError('Variable "colores" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3
            echo "
        <div class=\"form-group row\">
          <div class=\"col-sm-10\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"";
            // line 7
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\" id=\"\">
              <label class=\"form-check-label\" for=\"gridCheck1\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo " <br>
              </label>
            </div>
          </div>
        </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/menu_izquierdo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  56 => 7,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"\">Color de flor</div>
{% for color in colores %}

        <div class=\"form-group row\">
          <div class=\"col-sm-10\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"{{ color }}\" value=\"{{ color }}\" id=\"\">
              <label class=\"form-check-label\" for=\"gridCheck1\">
                {{color}} <br>
              </label>
            </div>
          </div>
        </div>

{% endfor %}", "shared/menu_izquierdo.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\shared\\menu_izquierdo.html.twig");
    }
}
