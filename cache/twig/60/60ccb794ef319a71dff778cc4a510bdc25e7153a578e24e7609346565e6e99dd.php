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

/* partials/sidebar.html.twig */
class __TwigTemplate_ef1a307a0f4bec76cb26b028782cf817f3a77a4e3ab0b943c274b005d464f50e extends \Twig\Template
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
        echo "<aside class=\"site-sidebar\">
    <div class=\"sidebar-content\">
        <ul class=\"page-list\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "                ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 6
            echo "                <li class=\"";
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "\">
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\">
                        ";
            // line 8
            if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []), "html", null, true);
                echo "\"></i>";
            }
            // line 9
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
        <h3>Recent</h3>
        <ul class=\"page-list\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []), "order", [0 => "date", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 5], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "                ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 18
            echo "                <li class=\"";
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  89 => 20,  85 => 19,  80 => 18,  77 => 17,  73 => 16,  68 => 13,  57 => 9,  51 => 8,  47 => 7,  42 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"site-sidebar\">
    <div class=\"sidebar-content\">
        <ul class=\"page-list\">
            {% for page in pages.children.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                        {{ page.menu }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        <h3>Recent</h3>
        <ul class=\"page-list\">
            {% for page in pages.children.visible.order('date', 'desc').slice(0, 5) %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
</aside>", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\gravAdmin\\user\\themes\\custom\\templates\\partials\\sidebar.html.twig");
    }
}
