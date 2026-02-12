<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partial/nav.html.twig */
class __TwigTemplate_1bc8733dfcefceacf2a00f016a32c268 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/nav.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Dropdown
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
                    </ul>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
                    </li>
                </ul>
                <form class=\"d-flex\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
                </div>
            </div>
        </nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Dropdown
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
                    </ul>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
                    </li>
                </ul>
                <form class=\"d-flex\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
                </div>
            </div>
        </nav>
", "partial/nav.html.twig", "/home/babybel/Bureau/cours/symfony/ipssi-blog-system/templates/partial/nav.html.twig");
    }
}
