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

/* cars/index.html.twig */
class __TwigTemplate_0cc3793c8b7b6a92b2ae1f33536cc8dea1e0eeabb61b24110e560bf072f5a8a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cars/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cars/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cars/index.html.twig", 1);
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

        echo "CATALOGUE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<div class=\"container\">
    <h1 class=\"mt-3 mb-4\">Notre stock</h1>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 10
            echo "            <div class=\"col-md-4\">
                <div class=\"card mb-4\">
                    ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["car"], "attachment", [], "any", false, false, false, 12) != null)) {
                // line 13
                echo "                        <img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attachment/" . twig_get_attribute($this->env, $this->source, $context["car"], "attachment", [], "any", false, false, false, 13))), "html", null, true);
                echo "\" alt=\"Vroum vrouuum\">
                    ";
            } else {
                // line 15
                echo "                        <img class=\"img\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Unknown.png"), "html", null, true);
                echo "\" alt=\"Vroum vrouuum\">
                    ";
            }
            // line 17
            echo "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "subtitle", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                        <div class=\"d-flex justify-content-between align-item-center\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cars_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">En savoir plus</a>
                            <span class=\"h5 mt-auto\">";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["car"], "price", [], "any", false, false, false, 22) / 100), 2, ",", "."), "html", null, true);
            echo " €</span>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cars/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 28,  131 => 22,  127 => 21,  122 => 19,  118 => 18,  115 => 17,  109 => 15,  103 => 13,  101 => 12,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CATALOGUE{% endblock %}

{% block main %}
<div class=\"container\">
    <h1 class=\"mt-3 mb-4\">Notre stock</h1>
    <div class=\"row\">
        {% for car in cars %}
            <div class=\"col-md-4\">
                <div class=\"card mb-4\">
                    {% if car.attachment != null %}
                        <img class=\"img\" src=\"{{ asset('uploads/attachment/' ~ car.attachment) }}\" alt=\"Vroum vrouuum\">
                    {% else %}
                        <img class=\"img\" src=\"{{ asset('build/images/Unknown.png') }}\" alt=\"Vroum vrouuum\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ car.title }}</h5>
                        <p class=\"card-text\">{{ car.subtitle }}</p>
                        <div class=\"d-flex justify-content-between align-item-center\">
                            <a href=\"{{ path('cars_detail', { 'id': car.id } ) }}\" class=\"btn btn-dark\">En savoir plus</a>
                            <span class=\"h5 mt-auto\">{{ (car.price / 100)|number_format(2, ',', '.') }} €</span>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "cars/index.html.twig", "/Users/tom/Desktop/finale-project/projectFinal/templates/cars/index.html.twig");
    }
}
