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

/* cart/index.html.twig */
class __TwigTemplate_4a6e6ed55af0571148d7b8f94d4e526c913e9cceb699257226c71152fd6d9cd2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Panier";
        
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
        echo "<section class=\"h-100\" style=\"background-color: #eee;\">
    <div class=\"container h-100 py-5\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-10\">

                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"fw-normal mb-0 text-black\">Mon panier</h3>
                </div>
                <div class=\"card rounded-3 mb-4\">
                    <div class=\"card-body p-4\">
                        <div class=\"row d-flex justify-content-between align-items-center\">
    ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 17, $this->source); })())) > 0)) {
            // line 18
            echo "                    ";
            $context["total"] = null;
            // line 19
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "                    ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 20, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cars", [], "any", false, false, false, 20), "price", [], "any", false, false, false, 20) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 20)));
                // line 21
                echo "

                                                    <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                                        <img
                                                                src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp\"
                                                                class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
                                                    </div>
                                                    <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                                        <p class=\"lead fw-normal mb-2\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cars", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
                                                    </div>
                                                    <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                                                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_stepdown", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-link px-2\"
                                                                onclick=\"this.parentNode.querySelector('input[type=number]').stepDown()\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-dash\" viewBox=\"0 0 16 16\">
                                                                <path d=\"M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z\"/>
                                                            </svg>
                                                        </a>

                                                        <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), "html", null, true);
                echo "\" type=\"number\"
                                                               class=\"form-control form-control-sm\" />

                                                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"btn btn-link px-2\"
                                                                onclick=\"this.parentNode.querySelector('input[type=number]').stepUp()\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus\" viewBox=\"0 0 16 16\">
                                                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                                        <h5 class=\"mb-0\">";
                // line 50
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
                echo " €</h5>
                                                    </div>
                                                    <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                                                        <a class=\"nav-link fs-xl p-2\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cars", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"text-danger\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                    Total :<span class=\"mb-0\">";
            // line 70
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 70, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €</span>
                                </div>
                                <button type=\"button\" class=\"btn btn-dark btn-block btn-lg\">Procéder au paiement</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    ";
        } else {
            // line 80
            echo "
        <div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
            <div class=\"text-center pt-4 mt-lg-2\">
                <h1 class=\"display-5\">Votre panier est vide</h1>
                <p class=\"fs-lg pb-2 pb-md-0 mb-4 mb-md-5\">Commencez votre shopping dès maintenant à travers nos véhicules</p>
                <a class=\"btn btn-lg btn-dark\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_index");
            echo "\">Voir les véhicules</a>
            </div>
        </div>
    ";
        }
        // line 89
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 89,  208 => 85,  201 => 80,  188 => 70,  182 => 66,  163 => 53,  157 => 50,  146 => 42,  140 => 39,  130 => 32,  124 => 29,  114 => 21,  111 => 20,  106 => 19,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block main %}
<section class=\"h-100\" style=\"background-color: #eee;\">
    <div class=\"container h-100 py-5\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-10\">

                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"fw-normal mb-0 text-black\">Mon panier</h3>
                </div>
                <div class=\"card rounded-3 mb-4\">
                    <div class=\"card-body p-4\">
                        <div class=\"row d-flex justify-content-between align-items-center\">
    {% if cart|length > 0 %}
                    {% set total = null %}
                    {% for item in cart %}
                    {% set total = total + (item.cars.price * item.quantity) %}


                                                    <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                                        <img
                                                                src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp\"
                                                                class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
                                                    </div>
                                                    <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                                        <p class=\"lead fw-normal mb-2\">{{ item.cars.title }}</p>
                                                    </div>
                                                    <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                                                        <a href=\"{{ path('cart_stepdown', {id: item.cars.id}) }}\" class=\"btn btn-link px-2\"
                                                                onclick=\"this.parentNode.querySelector('input[type=number]').stepDown()\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-dash\" viewBox=\"0 0 16 16\">
                                                                <path d=\"M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z\"/>
                                                            </svg>
                                                        </a>

                                                        <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"{{ item.quantity }}\" type=\"number\"
                                                               class=\"form-control form-control-sm\" />

                                                        <a href=\"{{ path('cart_add', {id: item.cars.id}) }}\" class=\"btn btn-link px-2\"
                                                                onclick=\"this.parentNode.querySelector('input[type=number]').stepUp()\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus\" viewBox=\"0 0 16 16\">
                                                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                                        <h5 class=\"mb-0\">{{ (total / 100)|number_format(2, ',', '.') }} €</h5>
                                                    </div>
                                                    <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                                                        <a class=\"nav-link fs-xl p-2\" href=\"{{ path('cart_remove', {id: item.cars.id}) }}\" class=\"text-danger\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    {% endfor %}

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                    Total :<span class=\"mb-0\">{{ (total / 100)|number_format(2, ',', '.') }} €</span>
                                </div>
                                <button type=\"button\" class=\"btn btn-dark btn-block btn-lg\">Procéder au paiement</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    {% else %}

        <div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
            <div class=\"text-center pt-4 mt-lg-2\">
                <h1 class=\"display-5\">Votre panier est vide</h1>
                <p class=\"fs-lg pb-2 pb-md-0 mb-4 mb-md-5\">Commencez votre shopping dès maintenant à travers nos véhicules</p>
                <a class=\"btn btn-lg btn-dark\" href=\"{{ path('shop_index') }}\">Voir les véhicules</a>
            </div>
        </div>
    {% endif %}
</section>
{% endblock %}
", "cart/index.html.twig", "/Users/tom/Desktop/finale-project/projectFinal/templates/cart/index.html.twig");
    }
}
