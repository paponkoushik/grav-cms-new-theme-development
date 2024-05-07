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

/* partials/social.html.twig */
class __TwigTemplate_121e4fc219587713176950a176d3477f22bcd59dbc1fe818567e8137d77f1c20 extends \Twig\Template
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
        echo "<ul class=\"social-links\">
    <li><a href=\"https://twitter.com/example\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab fa-twitter\"></i></a></li>
    <li><a href=\"https://facebook.com/example\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab fa-facebook\"></i></a></li>
    <li><a href=\"https://instagram.com/example\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab fa-instagram\"></i></a></li>
    <!-- Add more social links as needed -->
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"social-links\">
    <li><a href=\"https://twitter.com/example\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab fa-twitter\"></i></a></li>
    <li><a href=\"https://facebook.com/example\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab fa-facebook\"></i></a></li>
    <li><a href=\"https://instagram.com/example\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab fa-instagram\"></i></a></li>
    <!-- Add more social links as needed -->
</ul>", "partials/social.html.twig", "C:\\xampp\\htdocs\\gravAdmin\\user\\themes\\custom\\templates\\partials\\social.html.twig");
    }
}
