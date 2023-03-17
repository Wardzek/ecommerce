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

/* partials/footer.html.twig */
class __TwigTemplate_fb5c70e5510d625c67c5ab7860f00c399eab525bb50a0094af4868a5585797b1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<footer class=\"bg-dark text-center text-white\">
    <div class=\"container p-4\">
        <section>
            <form action=\"\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-auto\">
                        <p class=\"pt-2\">
                            <strong>Inscrivez-vous à notre newsletter</strong>
                        </p>
                    </div>
                    <div class=\"col-md-5 col-12\">
                        <div class=\"form-outline form-white mb-4\">
                            <input placeholder=\"adresse mail\" type=\"email\" id=\"form5Example21\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <button type=\"submit\" class=\"btn btn-outline-light mb-4\">
                            S'inscrire
                        </button>
                    </div>
                </div>
            </form>
            <div class=\"d-flex justify-content-center\">
                <img class=\"m-2 logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\">
            </div>
        </section>
        <hr>
        <section>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Informations légales</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conditions_index");
        echo "\" class=\"text-white\">Conditions générales</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"text-white\">Mentions légales</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politique_index");
        echo "\" class=\"text-white\">Politique de confidentialité</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">A propose de nous</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who_index");
        echo "\" class=\"text-white\">Qui sommes nous ? </a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Heures d'ouvertures</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <p class=\"text-white\">Lundi - Vendredi :</p>
                        </li>
                        <li>
                            <p class=\"text-white\">08h00 - 20h00</p>
                        </li>
                        <li>
                            <p class=\"text-white\">Samedi :</p>
                        </li>
                        <li>
                            <p class=\"text-white\">10h00 - 19h00</p>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Contact Infos</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <p class=\"text-white\">adepte-automobiles@contact.com</p>
                        </li>
                        <li>
                            <p class=\"text-white\">04.74.21.30.60</p>
                        </li>
                        <li>
                            <p class=\"text-white\"></p>
                        </li>
                        <li>
                            <p class=\"text-white\">82 Bd Marius Vivier Merle, 69003 Lyon</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class=\"text-center p-3\">
    © 2020 Copyright by Adepte Automobiles
    </div>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  91 => 41,  82 => 35,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-dark text-center text-white\">
    <div class=\"container p-4\">
        <section>
            <form action=\"\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-auto\">
                        <p class=\"pt-2\">
                            <strong>Inscrivez-vous à notre newsletter</strong>
                        </p>
                    </div>
                    <div class=\"col-md-5 col-12\">
                        <div class=\"form-outline form-white mb-4\">
                            <input placeholder=\"adresse mail\" type=\"email\" id=\"form5Example21\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <button type=\"submit\" class=\"btn btn-outline-light mb-4\">
                            S'inscrire
                        </button>
                    </div>
                </div>
            </form>
            <div class=\"d-flex justify-content-center\">
                <img class=\"m-2 logo\" src=\"{{ asset('build/images/logo.png') }}\">
            </div>
        </section>
        <hr>
        <section>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Informations légales</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"{{ path('conditions_index') }}\" class=\"text-white\">Conditions générales</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"text-white\">Mentions légales</a>
                        </li>
                        <li>
                            <a href=\"{{ path('politique_index') }}\" class=\"text-white\">Politique de confidentialité</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">A propose de nous</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"{{ path('who_index') }}\" class=\"text-white\">Qui sommes nous ? </a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Heures d'ouvertures</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <p class=\"text-white\">Lundi - Vendredi :</p>
                        </li>
                        <li>
                            <p class=\"text-white\">08h00 - 20h00</p>
                        </li>
                        <li>
                            <p class=\"text-white\">Samedi :</p>
                        </li>
                        <li>
                            <p class=\"text-white\">10h00 - 19h00</p>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Contact Infos</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <p class=\"text-white\">adepte-automobiles@contact.com</p>
                        </li>
                        <li>
                            <p class=\"text-white\">04.74.21.30.60</p>
                        </li>
                        <li>
                            <p class=\"text-white\"></p>
                        </li>
                        <li>
                            <p class=\"text-white\">82 Bd Marius Vivier Merle, 69003 Lyon</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class=\"text-center p-3\">
    © 2020 Copyright by Adepte Automobiles
    </div>
</footer>
", "partials/footer.html.twig", "/Users/tom/Desktop/finale-project/projectFinal/templates/partials/footer.html.twig");
    }
}
