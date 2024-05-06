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

/* partials/navigation.html.twig */
class __TwigTemplate_84a9e80627f17207133f10ef569cd99bc3a823c6f75013deeb92fc2c3d9b99c1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["macros"] = $this;
        // line 2
        echo "
";
        // line 28
        echo "
<ul class=\"navigation\">
    ";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 31
            echo "        ";
            echo $context["macros"]->getloop(($context["pages"] ?? null));
            echo "
    ";
        } else {
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 34
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 35
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                echo "\">
                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\">
                    ";
                // line 37
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 38
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 44
            echo "        <li>
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
            echo "\">
                ";
            // line 46
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                echo "\"></i>";
            }
            // line 47
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 52
            echo "        <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 52)->display($context);
            echo "</li>
    ";
        }
        // line 54
        echo "</ul>

";
    }

    // line 3
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["macros"] = $this;
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 6
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 7
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 8
                    echo "            <li class=\"has-children ";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\">
                    ";
                    // line 10
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 11
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
                    <span></span>
                </a>
                <ul>
                    ";
                    // line 15
                    echo $context["macros"]->getloop($context["p"]);
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 19
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\">
                    ";
                    // line 21
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 22
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                // line 26
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 26,  199 => 22,  193 => 21,  189 => 20,  184 => 19,  177 => 15,  169 => 11,  163 => 10,  159 => 9,  154 => 8,  151 => 7,  148 => 6,  143 => 5,  140 => 4,  128 => 3,  122 => 54,  116 => 52,  113 => 51,  102 => 47,  96 => 46,  92 => 45,  89 => 44,  84 => 43,  81 => 42,  70 => 38,  64 => 37,  60 => 36,  55 => 35,  52 => 34,  47 => 33,  41 => 31,  39 => 30,  35 => 28,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

{% macro loop(page) %}
    {% import _self as macros %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"has-children {{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                    <span></span>
                </a>
                <ul>
                    {{ macros.loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"navigation\">
    {% if theme_config.dropdown.enabled %}
        {{ macros.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li>
            <a href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
    {% if config.plugins.login.enabled and grav.user.username %}
        <li><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
    {% endif %}
</ul>

", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\gravAdmin\\user\\themes\\antimatter\\templates\\partials\\navigation.html.twig");
    }
}
