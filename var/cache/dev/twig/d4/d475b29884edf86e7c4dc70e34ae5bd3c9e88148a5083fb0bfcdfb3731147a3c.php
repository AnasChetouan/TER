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

/* dashboard-layout.html.twig */
class __TwigTemplate_085d07c85b05b9647ecf67e74dc4e948c440fe8031efa072b10ab8e310c11add extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'aside' => [$this, 'block_aside'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard-layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard-layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"fixed\">
\t<head>
\t\t<!-- Basic -->
\t\t<meta charset=\"UTF-8\">

\t\t<title>Estimation.com</title>
\t\t<meta name=\"keywords\" content=\"HTML5 Admin Template\" />
\t\t<meta name=\"description\" content=\"JSOFT Admin - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"JSOFT.net\">

\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

\t\t<!-- Web Fonts  -->
\t\t<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

\t\t<!-- Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-datepicker/css/datepicker3.css"), "html", null, true);
        echo "\" />

        ";
        // line 24
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "}

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/stylesheets/theme.css"), "html", null, true);
        echo "\" />

\t\t<!-- Skin CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/stylesheets/skins/default.css"), "html", null, true);
        echo "\" />

\t\t<!-- Theme Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/stylesheets/theme-custom.css"), "html", null, true);
        echo "\">

\t\t<!-- Head Libs -->
\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>


\t</head>
    ";
        // line 42
        $this->displayBlock('menu', $context, $blocks);
        // line 359
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 361
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 361, $this->source); })()), "flashes", [0 => "notice"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 362
            echo "    \t\t\t\t\t<div class=\"flash-notice\">
        \t\t\t\t";
            // line 363
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 367
            echo "
            <div class=\"alert alert-success\">

                ";
            // line 370
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "\t\t
\t\t";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 376, $this->source); })()), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 377
            echo "
            <div class=\"alert alert-danger\" role=\"alert\">

                ";
            // line 380
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        echo "
\t\t\t\t\t";
        // line 386
        $this->displayBlock('body', $context, $blocks);
        // line 389
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<!-- end: page -->
\t\t\t\t</section>
\t\t\t</div>

            ";
        // line 396
        $this->displayBlock('aside', $context, $blocks);
        // line 429
        echo "\t\t</section>

\t\t<!-- Vendor -->
\t\t<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/nanoscroller/nanoscroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-placeholder/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t
\t\t<!-- Theme Base, Components and Settings -->
\t\t<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/javascripts/theme.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Theme Custom -->
\t\t<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/javascripts/theme.custom.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Theme Initialization Files -->
\t\t<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/javascripts/theme.init.js"), "html", null, true);
        echo "\"></script>


\t\t<!-- Examples -->
\t\t<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/javascripts/dashboard/examples.dashboard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/javascripts/ui-elements/examples.notifications.js"), "html", null, true);
        echo "\"></script>

\t\t";
        // line 455
        $this->displayBlock('javascript', $context, $blocks);
        // line 458
        echo "
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 25
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "\t<body>
\t\t<section class=\"body\">

\t\t\t<!-- start: header -->
\t\t\t<header class=\"header\">
\t\t\t\t<div class=\"logo-container\">
\t\t\t\t\t<a href=\"../\" class=\"logo\">
\t\t\t\t\t\t<a class=\"navbar-brand smothscroll\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\"><font color=\"#777\"><b>Estimation.com</b> </font> </a> <height=\"35\" color=\"#777\" alt=\"Estimation.com\" />
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<!-- start: search & user box -->
\t\t\t\t<div class=\"header-right\">
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<ul class=\"notifications\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu large\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tTasks
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Generating Sales Report</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">60%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Importing Contacts</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">98%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Uploading something big</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">33%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"33\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 33%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">230</span>
\t\t\t\t\t\t\t\t\tMessages
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/images/!sample-user.jpg"), "html", null, true);
        echo "\" alt=\"Joseph Doe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Doe</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/images/!sample-user.jpg"), "html", null, true);
        echo "\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message truncate\">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/images/!sample-user.jpg"), "html", null, true);
        echo "\" alt=\"Joe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/images/!sample-user.jpg"), "html", null, true);
        echo "\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tAlerts
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-down bg-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Server is Down!</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Just now</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock bg-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">User Locked</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-signal bg-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Connection Restaured</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">10/10/2014</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<div id=\"userbox\" class=\"userbox\">
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/images/!logged-user.jpg"), "html", null, true);
        echo "\" alt=\"Joseph Doe\" class=\"img-circle\" data-lock-picture=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/images/!logged-user.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t<span class=\"name\">";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", []), "username", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"role\">
\t\t\t\t\t\t\t\t";
        // line 233
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 234
            echo "\t\t\t\t\t\t\t\tAdministrateur
\t\t\t\t\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMMERCIAL")) {
            // line 236
            echo "\t\t\t\t\t\t\t\tCommercial
\t\t\t\t\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 238
            echo "\t\t\t\t\t\t\t\tMembre
\t\t\t\t\t\t\t\t";
        } else {
            // line 240
            echo "\t\t\t\t\t\t\t\tNon enregistré

\t\t\t\t\t\t\t\t";
        }
        // line 242
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t<i class=\"fa custom-caret\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"><i class=\"fa fa-power-off\"></i> Se déconnecter</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end: search & user box -->
\t\t\t</header>
\t\t\t<!-- end: header -->

\t\t\t<div class=\"inner-wrapper\">
\t\t\t\t<!-- start: sidebar -->
\t\t\t\t<aside id=\"sidebar-left\" class=\"sidebar-left\">
\t\t\t\t
\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t<div class=\"sidebar-title\">
\t\t\t\t\t\t\tNavigation
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"nano\">
\t\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t\t<nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-main\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Tableau de bord</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new-project");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Nouveau projet</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 292
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 293
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 295
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeMembreAdmin");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Membres</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 302
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeAdmin");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Liste des projets</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t";
        }
        // line 309
        echo "\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-tasks\">
\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t<h6>Mes projets</h6>
\t\t\t\t\t\t\t\t\t<div class=\"widget-toggle\">+</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled m-none\">
\t\t\t\t\t\t\t\t\t\t";
        // line 323
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProjectController::menu"));
        echo "
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</aside>
\t\t\t\t<!-- end: sidebar -->

\t\t\t\t<section role=\"main\" class=\"content-body\">
\t\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t\t";
        // line 340
        $this->displayBlock('title', $context, $blocks);
        // line 341
        echo "\t\t\t\t\t
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 345
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
                                <span> ";
        // line 350
        $this->displayBlock('pageactuelle', $context, $blocks);
        echo " </span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"sidebar-right-toggle\" data-open=\"sidebar-right\"><i class=\"fa fa-chevron-left\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>
\t\t\t\t\t
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 340
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 350
    public function block_pageactuelle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageactuelle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageactuelle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 386
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 387
        echo "
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 396
    public function block_aside($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 397
        echo "
\t\t\t<aside id=\"sidebar-right\" class=\"sidebar-right\">
\t\t\t\t<div class=\"nano\">
\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t<a href=\"#\" class=\"mobile-close visible-xs\">
\t\t\t\t\t\t\tCollapse <i class=\"fa fa-chevron-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"sidebar-right-wrapper\">
\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-calendar\">
\t\t\t\t\t\t\t\t<h6>Calendrier</h6>
\t\t\t\t\t\t\t\t<div data-plugin-datepicker data-plugin-skin=\"dark\" ></div>

                                <!--
\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<time datetime=\"2014-04-19T00:00+00:00\">04/19/2014</time>
\t\t\t\t\t\t\t\t\t\t<span>Company Meeting</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                                
                                -->
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</aside>

             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 455
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 456
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 456,  803 => 455,  762 => 397,  753 => 396,  742 => 387,  733 => 386,  716 => 350,  699 => 340,  680 => 350,  672 => 345,  666 => 341,  664 => 340,  644 => 323,  628 => 309,  618 => 302,  608 => 295,  604 => 293,  602 => 292,  594 => 287,  584 => 280,  553 => 252,  541 => 242,  536 => 240,  532 => 238,  528 => 236,  524 => 234,  522 => 233,  517 => 231,  509 => 228,  432 => 154,  420 => 145,  408 => 136,  396 => 127,  316 => 50,  307 => 43,  298 => 42,  287 => 25,  278 => 24,  265 => 458,  263 => 455,  258 => 453,  254 => 452,  247 => 448,  241 => 445,  235 => 442,  228 => 438,  224 => 437,  220 => 436,  216 => 435,  212 => 434,  208 => 433,  204 => 432,  199 => 429,  197 => 396,  188 => 389,  186 => 386,  183 => 385,  172 => 380,  167 => 377,  163 => 376,  160 => 375,  149 => 370,  144 => 367,  139 => 366,  130 => 363,  127 => 362,  122 => 361,  119 => 359,  117 => 42,  110 => 38,  104 => 35,  98 => 32,  92 => 29,  87 => 26,  85 => 24,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"fixed\">
\t<head>
\t\t<!-- Basic -->
\t\t<meta charset=\"UTF-8\">

\t\t<title>Estimation.com</title>
\t\t<meta name=\"keywords\" content=\"HTML5 Admin Template\" />
\t\t<meta name=\"description\" content=\"JSOFT Admin - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"JSOFT.net\">

\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

\t\t<!-- Web Fonts  -->
\t\t<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

\t\t<!-- Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/bootstrap/css/bootstrap.css')}}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/font-awesome/css/font-awesome.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/magnific-popup/magnific-popup.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}\" />

        {% block head %}
        
        {% endblock %}}

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/stylesheets/theme.css') }}\" />

\t\t<!-- Skin CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/stylesheets/skins/default.css') }}\" />

\t\t<!-- Theme Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/stylesheets/theme-custom.css') }}\">

\t\t<!-- Head Libs -->
\t\t<script src=\"{{ asset('resources/assets/vendor/modernizr/modernizr.js') }}\"></script>


\t</head>
    {% block menu %}
\t<body>
\t\t<section class=\"body\">

\t\t\t<!-- start: header -->
\t\t\t<header class=\"header\">
\t\t\t\t<div class=\"logo-container\">
\t\t\t\t\t<a href=\"../\" class=\"logo\">
\t\t\t\t\t\t<a class=\"navbar-brand smothscroll\" href=\"{{ path('dashboard') }}\"><font color=\"#777\"><b>Estimation.com</b> </font> </a> <height=\"35\" color=\"#777\" alt=\"Estimation.com\" />
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<!-- start: search & user box -->
\t\t\t\t<div class=\"header-right\">
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<ul class=\"notifications\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu large\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tTasks
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Generating Sales Report</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">60%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Importing Contacts</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">98%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Uploading something big</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">33%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"33\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 33%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">230</span>
\t\t\t\t\t\t\t\t\tMessages
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('resources/assets/images/!sample-user.jpg') }}\" alt=\"Joseph Doe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Doe</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('resources/assets/images/!sample-user.jpg') }}\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message truncate\">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('resources/assets/images/!sample-user.jpg') }}\" alt=\"Joe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('resources/assets/images/!sample-user.jpg') }}\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tAlerts
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-down bg-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Server is Down!</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Just now</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock bg-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">User Locked</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-signal bg-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Connection Restaured</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">10/10/2014</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<div id=\"userbox\" class=\"userbox\">
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('resources/assets/images/!logged-user.jpg') }}\" alt=\"Joseph Doe\" class=\"img-circle\" data-lock-picture=\"{{ asset('resources/assets/images/!logged-user.jpg') }}\" />
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t<span class=\"name\">{{ app.user.username }}</span>
\t\t\t\t\t\t\t\t<span class=\"role\">
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\tAdministrateur
\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_COMMERCIAL') %}
\t\t\t\t\t\t\t\tCommercial
\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_USER') %}
\t\t\t\t\t\t\t\tMembre
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tNon enregistré

\t\t\t\t\t\t\t\t{% endif %}</span>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t<i class=\"fa custom-caret\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"{{ path('logout') }}\"><i class=\"fa fa-power-off\"></i> Se déconnecter</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end: search & user box -->
\t\t\t</header>
\t\t\t<!-- end: header -->

\t\t\t<div class=\"inner-wrapper\">
\t\t\t\t<!-- start: sidebar -->
\t\t\t\t<aside id=\"sidebar-left\" class=\"sidebar-left\">
\t\t\t\t
\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t<div class=\"sidebar-title\">
\t\t\t\t\t\t\tNavigation
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"nano\">
\t\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t\t<nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-main\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dashboard') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Tableau de bord</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('new-project') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Nouveau projet</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('listeMembreAdmin') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Membres</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('listeAdmin') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Liste des projets</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t{% endif %}
\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-tasks\">
\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t<h6>Mes projets</h6>
\t\t\t\t\t\t\t\t\t<div class=\"widget-toggle\">+</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled m-none\">
\t\t\t\t\t\t\t\t\t\t{{ render(controller('App\\\\Controller\\\\ProjectController::menu')) }}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</aside>
\t\t\t\t<!-- end: sidebar -->

\t\t\t\t<section role=\"main\" class=\"content-body\">
\t\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t\t{% block title %}{% endblock %}
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dashboard') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
                                <span> {% block pageactuelle %}{% endblock %} </span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"sidebar-right-toggle\" data-open=\"sidebar-right\"><i class=\"fa fa-chevron-left\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>
\t\t\t\t\t
                    {% endblock %}
\t\t\t\t\t
\t\t\t\t\t{# read and display just one flash message type #}
\t\t\t\t\t{% for message in app.flashes('notice') %}
    \t\t\t\t\t<div class=\"flash-notice\">
        \t\t\t\t{{ message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for message in app.flashes('success') %}

            <div class=\"alert alert-success\">

                {{ message }}

            </div>

        {% endfor %}
\t\t
\t\t{% for message in app.flashes('danger') %}

            <div class=\"alert alert-danger\" role=\"alert\">

                {{ message }}

            </div>

        {% endfor %}

\t\t\t\t\t{% block body %}

\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<!-- end: page -->
\t\t\t\t</section>
\t\t\t</div>

            {% block aside %}

\t\t\t<aside id=\"sidebar-right\" class=\"sidebar-right\">
\t\t\t\t<div class=\"nano\">
\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t<a href=\"#\" class=\"mobile-close visible-xs\">
\t\t\t\t\t\t\tCollapse <i class=\"fa fa-chevron-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"sidebar-right-wrapper\">
\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-calendar\">
\t\t\t\t\t\t\t\t<h6>Calendrier</h6>
\t\t\t\t\t\t\t\t<div data-plugin-datepicker data-plugin-skin=\"dark\" ></div>

                                <!--
\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<time datetime=\"2014-04-19T00:00+00:00\">04/19/2014</time>
\t\t\t\t\t\t\t\t\t\t<span>Company Meeting</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                                
                                -->
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</aside>

             {% endblock %}
\t\t</section>

\t\t<!-- Vendor -->
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery/jquery.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/bootstrap/js/bootstrap.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/nanoscroller/nanoscroller.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/magnific-popup/magnific-popup.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}\"></script>
\t\t
\t\t
\t\t<!-- Theme Base, Components and Settings -->
\t\t<script src=\"{{ asset('resources/assets/javascripts/theme.js') }}\"></script>
\t\t
\t\t<!-- Theme Custom -->
\t\t<script src=\"{{ asset('resources/assets/javascripts/theme.custom.js') }}\"></script>
\t\t
\t\t<!-- Theme Initialization Files -->
\t\t<script src=\"{{ asset('resources/assets/javascripts/theme.init.js') }}\"></script>


\t\t<!-- Examples -->
\t\t<script src=\"{{ asset('resources/assets/javascripts/dashboard/examples.dashboard.js') }}\"></script>
\t\t<script src=\"{{ asset('resources/assets/javascripts/ui-elements/examples.notifications.js') }}\"></script>

\t\t{% block javascript %}

\t\t{% endblock %}

\t</body>
</html>
", "dashboard-layout.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/dashboard-layout.html.twig");
    }
}
