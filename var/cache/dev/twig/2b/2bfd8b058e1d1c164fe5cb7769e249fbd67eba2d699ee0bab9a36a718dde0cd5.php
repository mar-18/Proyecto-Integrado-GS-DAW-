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

/* base.html.twig */
class __TwigTemplate_379bdd649b3251cbe1a1d8cbca4240d0495b57d755707cb4dc90f2d2183dfb63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "    </head>
    <body>
         
        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SALO";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "                <!-- Bootstrap CSS -->
                <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">        
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
                <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/js.js"), "html", null, true);
        echo "\"></script>
                <!--icono parte superior del buscador-->
                <link rel=\"icon\" href=\"../public/imagenes/logo.png\" type=\"image/png\">
                <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../public/imagenes/logo.png"), "html", null, true);
        echo "\" type=\"image/png\">
                <!--enlace a la pagina para iconos FONT AWESOME-->
                <script src=\"https://kit.fontawesome.com/5ca69696cc.js\" crossorigin=\"anonymous\"></script>
                <!--enlace a la pagina de fuentes GOOGLE FONTS -->
                <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
                <!---->
        
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
                <meta name=\"description\" content=\"\" />
                <meta name=\"author\" content=\"\" />
        
                <!-- css -->
                <link href=\"https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700\" rel=\"stylesheet\">
                <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jcarousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <!-- Theme skin -->
                <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("skins/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <!-- Fav and touch icons -->
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\" />
                <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\" />
                <link rel=\"shortcut icon\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ico/favicon.png"), "html", null, true);
        echo "\" />
        
        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "            <!-- CABECERA -->
            ";
        // line 58
        $this->loadTemplate("base.html.twig", "base.html.twig", 58, "636013227")->display($context);
        // line 60
        echo "            <!-- MENU -->
            ";
        // line 61
        $this->loadTemplate("base.html.twig", "base.html.twig", 61, "949715903")->display($context);
        // line 63
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "
            <!-- FOOTER -->
            ";
        // line 68
        $this->loadTemplate("base.html.twig", "base.html.twig", 68, "1778631334")->display($context);
        // line 70
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 64
        echo "                <!--Contenido que varia-->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
            <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jcarousel/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fancybox-media.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/portfolio/jquery.quicksand.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/portfolio/setting.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/animate.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
            <!--Propio-->
            <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/js.js"), "html", null, true);
        echo "\"></script>

            <!-- Template Custom JavaScript File -->
            <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>       
            <!-- script que visualiza el nombre de la foto que he seleccionado
        lo visualiza en el input -->
         <script type=\"application/javascript\">
        \t\$('input[type=\"file\"]').change(function(e){
            var fileName = e.target.files[0].name;
            \$('.custom-file-label').html(fileName);
            });
    \t</script> 
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  359 => 96,  353 => 93,  348 => 91,  344 => 90,  340 => 89,  336 => 88,  332 => 87,  328 => 86,  324 => 85,  320 => 84,  316 => 83,  312 => 82,  308 => 81,  304 => 80,  300 => 79,  296 => 78,  292 => 77,  288 => 76,  283 => 73,  273 => 72,  262 => 64,  252 => 63,  242 => 70,  240 => 68,  236 => 66,  233 => 63,  231 => 61,  228 => 60,  226 => 58,  223 => 57,  213 => 56,  194 => 44,  190 => 43,  186 => 42,  182 => 41,  178 => 40,  173 => 38,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  132 => 18,  126 => 15,  118 => 10,  115 => 9,  105 => 8,  86 => 6,  74 => 106,  72 => 72,  69 => 71,  67 => 56,  62 => 53,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>{% block title %}SALO{% endblock %}</title>
        
        {% block stylesheets %}
                <!-- Bootstrap CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset(\"css/estilos.css\") }}\">
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">        
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
                <script src=\"{{ asset('js/js.js')}}\"></script>
                <!--icono parte superior del buscador-->
                <link rel=\"icon\" href=\"../public/imagenes/logo.png\" type=\"image/png\">
                <link rel=\"icon\" href=\"{{asset('../public/imagenes/logo.png')}}\" type=\"image/png\">
                <!--enlace a la pagina para iconos FONT AWESOME-->
                <script src=\"https://kit.fontawesome.com/5ca69696cc.js\" crossorigin=\"anonymous\"></script>
                <!--enlace a la pagina de fuentes GOOGLE FONTS -->
                <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
                <!---->
        
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
                <meta name=\"description\" content=\"\" />
                <meta name=\"author\" content=\"\" />
        
                <!-- css -->
                <link href=\"https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/bootstrap.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/bootstrap-responsive.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/fancybox/jquery.fancybox.css\")}}\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/jcarousel.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/flexslider.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/style.css\")}}\" rel=\"stylesheet\" />
                <!-- Theme skin -->
                <link href=\"{{ asset(\"skins/default.css\")}}\" rel=\"stylesheet\" />
                <!-- Fav and touch icons -->
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset(\"ico/apple-touch-icon-144-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset(\"ico/apple-touch-icon-114-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset(\"ico/apple-touch-icon-72-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset(\"ico/apple-touch-icon-57-precomposed.png\")}}\" />
                <link rel=\"shortcut icon\" href=\"{{ asset(\"ico/favicon.png\")}}\" />
        
        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
        {% endblock %}
    </head>
    <body>
         
        {% block body %}
            <!-- CABECERA -->
            {% embed \"shared/cabecera.html.twig\" %}    
            {% endembed %}
            <!-- MENU -->
            {% embed \"shared/menu.html.twig\" %}
            {% endembed %}
            {% block content %}
                <!--Contenido que varia-->
            {% endblock %}

            <!-- FOOTER -->
            {% embed \"shared/pie.html.twig\" %}
            {% endembed %}
        {% endblock %}
        
        {% block javascripts %}
        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
            <script src=\"{{ asset(\"js/jquery.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.easing.1.3.js\")}}\"></script>
            <script src=\"{{ asset(\"js/bootstrap.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jcarousel/jquery.jcarousel.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox.pack.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox-media.js\")}}\"></script>
            <script src=\"{{ asset(\"js/google-code-prettify/prettify.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/jquery.quicksand.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/setting.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.flexslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.nivo.slider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/modernizr.custom.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.ba-cond.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.slitslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/animate.js\")}}\"></script>
            <script src=\"{{ asset(\"js/ajax.js\") }}\"></script>
            <!--Propio-->
            <script src=\"{{ asset(\"js/js.js\") }}\"></script>

            <!-- Template Custom JavaScript File -->
            <script src=\"{{ asset(\"js/custom.js\")}}\"></script>       
            <!-- script que visualiza el nombre de la foto que he seleccionado
        lo visualiza en el input -->
         <script type=\"application/javascript\">
        \t\$('input[type=\"file\"]').change(function(e){
            var fileName = e.target.files[0].name;
            \$('.custom-file-label').html(fileName);
            });
    \t</script> 
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_379bdd649b3251cbe1a1d8cbca4240d0495b57d755707cb4dc90f2d2183dfb63___636013227 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 58
        return "shared/cabecera.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("shared/cabecera.html.twig", "base.html.twig", 58);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 58,  359 => 96,  353 => 93,  348 => 91,  344 => 90,  340 => 89,  336 => 88,  332 => 87,  328 => 86,  324 => 85,  320 => 84,  316 => 83,  312 => 82,  308 => 81,  304 => 80,  300 => 79,  296 => 78,  292 => 77,  288 => 76,  283 => 73,  273 => 72,  262 => 64,  252 => 63,  242 => 70,  240 => 68,  236 => 66,  233 => 63,  231 => 61,  228 => 60,  226 => 58,  223 => 57,  213 => 56,  194 => 44,  190 => 43,  186 => 42,  182 => 41,  178 => 40,  173 => 38,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  132 => 18,  126 => 15,  118 => 10,  115 => 9,  105 => 8,  86 => 6,  74 => 106,  72 => 72,  69 => 71,  67 => 56,  62 => 53,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>{% block title %}SALO{% endblock %}</title>
        
        {% block stylesheets %}
                <!-- Bootstrap CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset(\"css/estilos.css\") }}\">
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">        
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
                <script src=\"{{ asset('js/js.js')}}\"></script>
                <!--icono parte superior del buscador-->
                <link rel=\"icon\" href=\"../public/imagenes/logo.png\" type=\"image/png\">
                <link rel=\"icon\" href=\"{{asset('../public/imagenes/logo.png')}}\" type=\"image/png\">
                <!--enlace a la pagina para iconos FONT AWESOME-->
                <script src=\"https://kit.fontawesome.com/5ca69696cc.js\" crossorigin=\"anonymous\"></script>
                <!--enlace a la pagina de fuentes GOOGLE FONTS -->
                <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
                <!---->
        
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
                <meta name=\"description\" content=\"\" />
                <meta name=\"author\" content=\"\" />
        
                <!-- css -->
                <link href=\"https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/bootstrap.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/bootstrap-responsive.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/fancybox/jquery.fancybox.css\")}}\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/jcarousel.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/flexslider.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/style.css\")}}\" rel=\"stylesheet\" />
                <!-- Theme skin -->
                <link href=\"{{ asset(\"skins/default.css\")}}\" rel=\"stylesheet\" />
                <!-- Fav and touch icons -->
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset(\"ico/apple-touch-icon-144-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset(\"ico/apple-touch-icon-114-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset(\"ico/apple-touch-icon-72-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset(\"ico/apple-touch-icon-57-precomposed.png\")}}\" />
                <link rel=\"shortcut icon\" href=\"{{ asset(\"ico/favicon.png\")}}\" />
        
        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
        {% endblock %}
    </head>
    <body>
         
        {% block body %}
            <!-- CABECERA -->
            {% embed \"shared/cabecera.html.twig\" %}    
            {% endembed %}
            <!-- MENU -->
            {% embed \"shared/menu.html.twig\" %}
            {% endembed %}
            {% block content %}
                <!--Contenido que varia-->
            {% endblock %}

            <!-- FOOTER -->
            {% embed \"shared/pie.html.twig\" %}
            {% endembed %}
        {% endblock %}
        
        {% block javascripts %}
        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
            <script src=\"{{ asset(\"js/jquery.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.easing.1.3.js\")}}\"></script>
            <script src=\"{{ asset(\"js/bootstrap.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jcarousel/jquery.jcarousel.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox.pack.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox-media.js\")}}\"></script>
            <script src=\"{{ asset(\"js/google-code-prettify/prettify.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/jquery.quicksand.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/setting.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.flexslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.nivo.slider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/modernizr.custom.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.ba-cond.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.slitslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/animate.js\")}}\"></script>
            <script src=\"{{ asset(\"js/ajax.js\") }}\"></script>
            <!--Propio-->
            <script src=\"{{ asset(\"js/js.js\") }}\"></script>

            <!-- Template Custom JavaScript File -->
            <script src=\"{{ asset(\"js/custom.js\")}}\"></script>       
            <!-- script que visualiza el nombre de la foto que he seleccionado
        lo visualiza en el input -->
         <script type=\"application/javascript\">
        \t\$('input[type=\"file\"]').change(function(e){
            var fileName = e.target.files[0].name;
            \$('.custom-file-label').html(fileName);
            });
    \t</script> 
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_379bdd649b3251cbe1a1d8cbca4240d0495b57d755707cb4dc90f2d2183dfb63___949715903 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 61
        return "shared/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("shared/menu.html.twig", "base.html.twig", 61);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 61,  521 => 58,  359 => 96,  353 => 93,  348 => 91,  344 => 90,  340 => 89,  336 => 88,  332 => 87,  328 => 86,  324 => 85,  320 => 84,  316 => 83,  312 => 82,  308 => 81,  304 => 80,  300 => 79,  296 => 78,  292 => 77,  288 => 76,  283 => 73,  273 => 72,  262 => 64,  252 => 63,  242 => 70,  240 => 68,  236 => 66,  233 => 63,  231 => 61,  228 => 60,  226 => 58,  223 => 57,  213 => 56,  194 => 44,  190 => 43,  186 => 42,  182 => 41,  178 => 40,  173 => 38,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  132 => 18,  126 => 15,  118 => 10,  115 => 9,  105 => 8,  86 => 6,  74 => 106,  72 => 72,  69 => 71,  67 => 56,  62 => 53,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>{% block title %}SALO{% endblock %}</title>
        
        {% block stylesheets %}
                <!-- Bootstrap CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset(\"css/estilos.css\") }}\">
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">        
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
                <script src=\"{{ asset('js/js.js')}}\"></script>
                <!--icono parte superior del buscador-->
                <link rel=\"icon\" href=\"../public/imagenes/logo.png\" type=\"image/png\">
                <link rel=\"icon\" href=\"{{asset('../public/imagenes/logo.png')}}\" type=\"image/png\">
                <!--enlace a la pagina para iconos FONT AWESOME-->
                <script src=\"https://kit.fontawesome.com/5ca69696cc.js\" crossorigin=\"anonymous\"></script>
                <!--enlace a la pagina de fuentes GOOGLE FONTS -->
                <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
                <!---->
        
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
                <meta name=\"description\" content=\"\" />
                <meta name=\"author\" content=\"\" />
        
                <!-- css -->
                <link href=\"https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/bootstrap.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/bootstrap-responsive.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/fancybox/jquery.fancybox.css\")}}\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/jcarousel.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/flexslider.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/style.css\")}}\" rel=\"stylesheet\" />
                <!-- Theme skin -->
                <link href=\"{{ asset(\"skins/default.css\")}}\" rel=\"stylesheet\" />
                <!-- Fav and touch icons -->
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset(\"ico/apple-touch-icon-144-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset(\"ico/apple-touch-icon-114-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset(\"ico/apple-touch-icon-72-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset(\"ico/apple-touch-icon-57-precomposed.png\")}}\" />
                <link rel=\"shortcut icon\" href=\"{{ asset(\"ico/favicon.png\")}}\" />
        
        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
        {% endblock %}
    </head>
    <body>
         
        {% block body %}
            <!-- CABECERA -->
            {% embed \"shared/cabecera.html.twig\" %}    
            {% endembed %}
            <!-- MENU -->
            {% embed \"shared/menu.html.twig\" %}
            {% endembed %}
            {% block content %}
                <!--Contenido que varia-->
            {% endblock %}

            <!-- FOOTER -->
            {% embed \"shared/pie.html.twig\" %}
            {% endembed %}
        {% endblock %}
        
        {% block javascripts %}
        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
            <script src=\"{{ asset(\"js/jquery.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.easing.1.3.js\")}}\"></script>
            <script src=\"{{ asset(\"js/bootstrap.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jcarousel/jquery.jcarousel.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox.pack.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox-media.js\")}}\"></script>
            <script src=\"{{ asset(\"js/google-code-prettify/prettify.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/jquery.quicksand.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/setting.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.flexslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.nivo.slider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/modernizr.custom.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.ba-cond.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.slitslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/animate.js\")}}\"></script>
            <script src=\"{{ asset(\"js/ajax.js\") }}\"></script>
            <!--Propio-->
            <script src=\"{{ asset(\"js/js.js\") }}\"></script>

            <!-- Template Custom JavaScript File -->
            <script src=\"{{ asset(\"js/custom.js\")}}\"></script>       
            <!-- script que visualiza el nombre de la foto que he seleccionado
        lo visualiza en el input -->
         <script type=\"application/javascript\">
        \t\$('input[type=\"file\"]').change(function(e){
            var fileName = e.target.files[0].name;
            \$('.custom-file-label').html(fileName);
            });
    \t</script> 
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_379bdd649b3251cbe1a1d8cbca4240d0495b57d755707cb4dc90f2d2183dfb63___1778631334 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 68
        return "shared/pie.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("shared/pie.html.twig", "base.html.twig", 68);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 68,  691 => 61,  521 => 58,  359 => 96,  353 => 93,  348 => 91,  344 => 90,  340 => 89,  336 => 88,  332 => 87,  328 => 86,  324 => 85,  320 => 84,  316 => 83,  312 => 82,  308 => 81,  304 => 80,  300 => 79,  296 => 78,  292 => 77,  288 => 76,  283 => 73,  273 => 72,  262 => 64,  252 => 63,  242 => 70,  240 => 68,  236 => 66,  233 => 63,  231 => 61,  228 => 60,  226 => 58,  223 => 57,  213 => 56,  194 => 44,  190 => 43,  186 => 42,  182 => 41,  178 => 40,  173 => 38,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  132 => 18,  126 => 15,  118 => 10,  115 => 9,  105 => 8,  86 => 6,  74 => 106,  72 => 72,  69 => 71,  67 => 56,  62 => 53,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>{% block title %}SALO{% endblock %}</title>
        
        {% block stylesheets %}
                <!-- Bootstrap CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset(\"css/estilos.css\") }}\">
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">        
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
                <script src=\"{{ asset('js/js.js')}}\"></script>
                <!--icono parte superior del buscador-->
                <link rel=\"icon\" href=\"../public/imagenes/logo.png\" type=\"image/png\">
                <link rel=\"icon\" href=\"{{asset('../public/imagenes/logo.png')}}\" type=\"image/png\">
                <!--enlace a la pagina para iconos FONT AWESOME-->
                <script src=\"https://kit.fontawesome.com/5ca69696cc.js\" crossorigin=\"anonymous\"></script>
                <!--enlace a la pagina de fuentes GOOGLE FONTS -->
                <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
                <!---->
        
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
                <meta name=\"description\" content=\"\" />
                <meta name=\"author\" content=\"\" />
        
                <!-- css -->
                <link href=\"https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/bootstrap.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/bootstrap-responsive.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/fancybox/jquery.fancybox.css\")}}\" rel=\"stylesheet\">
                <link href=\"{{ asset(\"css/jcarousel.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/flexslider.css\")}}\" rel=\"stylesheet\" />
                <link href=\"{{ asset(\"css/style.css\")}}\" rel=\"stylesheet\" />
                <!-- Theme skin -->
                <link href=\"{{ asset(\"skins/default.css\")}}\" rel=\"stylesheet\" />
                <!-- Fav and touch icons -->
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset(\"ico/apple-touch-icon-144-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset(\"ico/apple-touch-icon-114-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset(\"ico/apple-touch-icon-72-precomposed.png\")}}\" />
                <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset(\"ico/apple-touch-icon-57-precomposed.png\")}}\" />
                <link rel=\"shortcut icon\" href=\"{{ asset(\"ico/favicon.png\")}}\" />
        
        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
        {% endblock %}
    </head>
    <body>
         
        {% block body %}
            <!-- CABECERA -->
            {% embed \"shared/cabecera.html.twig\" %}    
            {% endembed %}
            <!-- MENU -->
            {% embed \"shared/menu.html.twig\" %}
            {% endembed %}
            {% block content %}
                <!--Contenido que varia-->
            {% endblock %}

            <!-- FOOTER -->
            {% embed \"shared/pie.html.twig\" %}
            {% endembed %}
        {% endblock %}
        
        {% block javascripts %}
        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
            <script src=\"{{ asset(\"js/jquery.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.easing.1.3.js\")}}\"></script>
            <script src=\"{{ asset(\"js/bootstrap.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jcarousel/jquery.jcarousel.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox.pack.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.fancybox-media.js\")}}\"></script>
            <script src=\"{{ asset(\"js/google-code-prettify/prettify.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/jquery.quicksand.js\")}}\"></script>
            <script src=\"{{ asset(\"js/portfolio/setting.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.flexslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.nivo.slider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/modernizr.custom.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.ba-cond.min.js\")}}\"></script>
            <script src=\"{{ asset(\"js/jquery.slitslider.js\")}}\"></script>
            <script src=\"{{ asset(\"js/animate.js\")}}\"></script>
            <script src=\"{{ asset(\"js/ajax.js\") }}\"></script>
            <!--Propio-->
            <script src=\"{{ asset(\"js/js.js\") }}\"></script>

            <!-- Template Custom JavaScript File -->
            <script src=\"{{ asset(\"js/custom.js\")}}\"></script>       
            <!-- script que visualiza el nombre de la foto que he seleccionado
        lo visualiza en el input -->
         <script type=\"application/javascript\">
        \t\$('input[type=\"file\"]').change(function(e){
            var fileName = e.target.files[0].name;
            \$('.custom-file-label').html(fileName);
            });
    \t</script> 
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\base.html.twig");
    }
}
