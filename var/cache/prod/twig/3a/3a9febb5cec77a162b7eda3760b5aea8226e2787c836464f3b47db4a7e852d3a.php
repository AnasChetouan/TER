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

/* project/enduit.html.twig */
class __TwigTemplate_3f6a78045d3b78a329b894a247426d2f700949fb0690e63c15e3856b3973b396 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/enduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />

\t";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        // line 12
        echo "\t\t\t\t<h2>Enduit</h2>
\t\t\t\t";
    }

    // line 15
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo "Enduit de façade ";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        // line 18
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Enduit de façade</h2>
\t\t\t\t\t\t\t\t\t</header>

                                    
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbCouches", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "nombre de couche souhaité ? "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbCouches", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surface", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "la surface de la façade? "]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surface", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Valider</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

    ";
    }

    // line 60
    public function block_javascript($context, array $blocks = [])
    {
        // line 61
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "project/enduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  138 => 60,  118 => 43,  110 => 38,  105 => 36,  99 => 33,  94 => 31,  87 => 27,  76 => 18,  73 => 17,  67 => 15,  62 => 12,  59 => 11,  51 => 5,  48 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/enduit.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/project/enduit.html.twig");
    }
}
