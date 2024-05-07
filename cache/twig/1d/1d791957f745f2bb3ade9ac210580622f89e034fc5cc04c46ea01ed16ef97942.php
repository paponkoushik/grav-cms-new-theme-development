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

/* partials/header.html.twig */
class __TwigTemplate_e7514e835c1d8c6df4ac2f278959b39a5ab1d95553f33d9257f50af7fd5c8138 extends \Twig\Template
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
        echo "<header class=\"site-header\">
    <div class=\"container\">
        <div class=\"logo\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/logo.jpg"), "html", null, true);
        echo "\" alt=\"Logo\">
            </a>
        </div>
        <nav class=\"main-navigation\">
            <ul>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 12
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\">
                            ";
            // line 14
            if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []), "html", null, true);
                echo "\"></i>";
            }
            // line 15
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
        </nav>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  69 => 15,  63 => 14,  59 => 13,  54 => 12,  51 => 11,  47 => 10,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"site-header\">
    <div class=\"container\">
        <div class=\"logo\">
            <a href=\"{{ base_url }}\">
                <img src=\"{{ url('theme://assets/logo.jpg') }}\" alt=\"Logo\">
            </a>
        </div>
        <nav class=\"main-navigation\">
            <ul>
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
        </nav>
    </div>
</header>
", "partials/header.html.twig", "C:\\xampp\\htdocs\\gravAdmin\\user\\themes\\custom\\templates\\partials\\header.html.twig");
    }
}
