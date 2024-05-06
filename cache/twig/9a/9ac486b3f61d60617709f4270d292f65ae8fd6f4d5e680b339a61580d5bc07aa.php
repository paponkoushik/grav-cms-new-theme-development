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
class __TwigTemplate_5252fc4fefd80a08d561ad07b57b68b28fad72f728220ad79af727ff82280780 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_extra' => [$this, 'block_header_extra'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'sidebar_navigation' => [$this, 'block_sidebar_navigation'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>
<body id=\"top\" class=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('showcase', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "    </div>
    ";
        // line 81
        $this->displayBlock('sidebar_navigation', $context, $blocks);
        // line 88
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 101
        echo "</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('assets', $context, $blocks);
        // line 41
        echo "
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/template.css", 1 => 101], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slidebars.min.css"], "method");
        // line 20
        echo "
        ";
        // line 21
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 22
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 23
            echo "        ";
        }
        // line 24
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 26
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 27
            echo "        ";
        }
        // line 28
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/antimatter.js"], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slidebars.min.js"], "method");
        // line 35
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 37
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 38
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 39
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 46
    public function block_header($context, array $blocks = [])
    {
        // line 47
        echo "        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 49
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []), "html", null, true);
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 52
        $this->displayBlock('header_extra', $context, $blocks);
        // line 53
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 54
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 54)->display($context);
            // line 55
            echo "                ";
        }
        // line 56
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 59
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 52
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 56
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 57
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "                ";
    }

    // line 64
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        // line 67
        echo "        <section id=\"body\" class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "        </section>
        ";
    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        // line 73
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </footer>
        ";
    }

    // line 81
    public function block_sidebar_navigation($context, array $blocks = [])
    {
        // line 82
        echo "        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            ";
        // line 84
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 84)->display($context);
        // line 85
        echo "            </div>
        </div>
    ";
    }

    // line 88
    public function block_bottom($context, array $blocks = [])
    {
        // line 89
        echo "         <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
        ";
        // line 99
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
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
        return array (  347 => 99,  335 => 89,  332 => 88,  326 => 85,  324 => 84,  320 => 82,  317 => 81,  307 => 73,  304 => 72,  299 => 68,  294 => 69,  292 => 68,  287 => 67,  284 => 66,  279 => 64,  275 => 58,  272 => 57,  269 => 56,  264 => 52,  257 => 59,  254 => 56,  251 => 55,  248 => 54,  245 => 53,  243 => 52,  235 => 49,  231 => 47,  228 => 46,  221 => 39,  216 => 38,  213 => 37,  204 => 35,  201 => 34,  198 => 33,  195 => 32,  192 => 31,  189 => 30,  185 => 28,  182 => 27,  179 => 26,  176 => 25,  173 => 24,  170 => 23,  167 => 22,  165 => 21,  162 => 20,  159 => 19,  156 => 18,  153 => 17,  150 => 16,  147 => 15,  144 => 14,  141 => 13,  136 => 41,  134 => 37,  131 => 36,  129 => 30,  126 => 29,  124 => 13,  119 => 11,  115 => 10,  112 => 9,  110 => 8,  102 => 7,  99 => 6,  96 => 5,  89 => 101,  86 => 88,  84 => 81,  81 => 80,  79 => 72,  76 => 71,  74 => 66,  71 => 65,  69 => 64,  66 => 63,  64 => 46,  59 => 44,  56 => 43,  54 => 5,  49 => 3,  46 => 2,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
        {% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}
        {% do assets.addCss('theme://css-compiled/template.css', 101) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a></h3>
            </div>
            <div id=\"navbar\">
                {% block header_extra %}{% endblock %}
                {% if config.plugins.langswitcher.enabled %}
                {% include 'partials/langswitcher.html.twig' %}
                {% endif %}
                {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
                {% endblock %}
                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </footer>
        {% endblock %}
    </div>
    {% block sidebar_navigation %}
        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            {% include 'partials/navigation.html.twig' %}
            </div>
        </div>
    {% endblock %}
    {% block bottom %}
         <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
        {{ assets.js('bottom')|raw }}
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\gravAdmin\\user\\themes\\antimatter\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
