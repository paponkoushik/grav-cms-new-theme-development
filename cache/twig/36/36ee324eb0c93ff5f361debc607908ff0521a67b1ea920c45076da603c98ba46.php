<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_ccf0ef2ed5268afbcd7144d823c2168959c3dd98caacd7b48360818661c587a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>
<body>
<header>
    ";
        // line 17
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 17)->display($context);
        // line 18
        echo "</header>

<nav>
    ";
        // line 21
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "</nav>

<aside>
    ";
        // line 25
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "</aside>

<main>
    ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "</main>

<footer>
    ";
        // line 33
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 33)->display($context);
        // line 34
        echo "</footer>

<!-- Add your scripts here -->
";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        echo "My Grav Site";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/header.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/footer.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/sidebar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/navigation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/custom.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  126 => 29,  120 => 12,  116 => 11,  112 => 10,  108 => 9,  103 => 8,  100 => 7,  94 => 6,  89 => 38,  87 => 37,  82 => 34,  80 => 33,  75 => 30,  73 => 29,  68 => 26,  66 => 25,  61 => 22,  59 => 21,  54 => 18,  52 => 17,  47 => 14,  45 => 7,  41 => 6,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}My Grav Site{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ url('theme://css/header.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ url('theme://css/footer.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ url('theme://css/sidebar.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ url('theme://css/navigation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ url('theme://css/custom.css') }}\">
    {% endblock %}
</head>
<body>
<header>
    {% include 'partials/header.html.twig' %}
</header>

<nav>
    {% include 'partials/navigation.html.twig' %}
</nav>

<aside>
    {% include 'partials/sidebar.html.twig' %}
</aside>

<main>
    {% block content %}{% endblock %}
</main>

<footer>
    {% include 'partials/footer.html.twig' %}
</footer>

<!-- Add your scripts here -->
{% block javascripts %}{% endblock %}
</body>
</html>", "partials/base.html.twig", "C:\\xampp\\htdocs\\gravAdmin\\user\\themes\\custom\\templates\\partials\\base.html.twig");
    }
}
