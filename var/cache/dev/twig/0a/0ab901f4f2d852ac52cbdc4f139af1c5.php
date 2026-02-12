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

/* category/index.html.twig */
class __TwigTemplate_2c0922a2f6414a4517e2207278c3c364 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        // line 2
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("macros.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | Liste des categories";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>/Applications/MAMP/htdocs/academy/ipssi/paris/td-ipssi-paris/src/Controller/CategoryController.php</code></li>
        <li>Your template at <code>/Applications/MAMP/htdocs/academy/ipssi/paris/td-ipssi-paris/templates/category/index.html.twig</code></li>
    </ul>





    ";
        // line 25
        $context["fruits"] = ["Pomme", "Banane", "Orange", "Fraise"];
        // line 26
        yield "    ";
        // line 27
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fruits"]) || array_key_exists("fruits", $context) ? $context["fruits"] : (function () { throw new RuntimeError('Variable "fruits" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 28
            yield "        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fruit"], "html", null, true);
            yield "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fruit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    ";
        // line 31
        yield "    ";
        yield $macros["͜macros"]->getTemplateForMacro("macro_button", $context, 31, $this->getSourceContext())->macro_button(...["Cliquez ici", "/contact", "primary"]);
        yield "
    ";
        // line 33
        yield "

    <table class=\"table\">
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Content</th>
            </tr>
        </thead>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 44
            yield "            <tbody>
                <tr>
                <th scope=\"row\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "</th>
                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "content", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                </tr>
            </tbody>
        ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "            <p> Aucune categorie disponible </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    </table>




</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "category/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  230 => 62,  217 => 61,  200 => 54,  193 => 52,  191 => 51,  183 => 48,  179 => 47,  175 => 46,  171 => 44,  166 => 43,  154 => 33,  149 => 31,  147 => 30,  138 => 28,  133 => 27,  131 => 26,  129 => 25,  114 => 13,  106 => 7,  93 => 6,  68 => 4,  57 => 1,  55 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import 'macros.html.twig' as macros %}

{% block title %} {{ parent() }} | Liste des categories{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>/Applications/MAMP/htdocs/academy/ipssi/paris/td-ipssi-paris/src/Controller/CategoryController.php</code></li>
        <li>Your template at <code>/Applications/MAMP/htdocs/academy/ipssi/paris/td-ipssi-paris/templates/category/index.html.twig</code></li>
    </ul>





    {% set fruits = ['Pomme', 'Banane', 'Orange', 'Fraise'] %}
    {# dfdefdfdfdfd #}
    {% for fruit in fruits %}
        <li>{{ fruit }}</li>
    {% endfor %}
    {# dfdefdfdfdfd #}
    {{ macros.button('Cliquez ici', '/contact', 'primary') }}
    {# dfdefdfdfdfd #}


    <table class=\"table\">
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Content</th>
            </tr>
        </thead>
        {% for category in categories %}
            <tbody>
                <tr>
                <th scope=\"row\">{{ category.id }}</th>
                <td>{{ category.name }}</td>
                <td>{{ category.content }}</td>
                </tr>
            </tbody>
        {% else %}
            <p> Aucune categorie disponible </p>
        {% endfor %}
    </table>




</div>
{% endblock %}
{% block footer %}

{% endblock %}
", "category/index.html.twig", "/home/babybel/Bureau/cours/symfony/ipssi-blog-system/templates/category/index.html.twig");
    }
}
