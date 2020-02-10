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

/* /library/Vanilla/EmbeddedContent/AbstractEmbed.twig */
class __TwigTemplate_1c983c0f3e9a066ea268a10e1e1c262d7391dc29a2e86dbf98f93f23e5d59097 extends \Twig\Template
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
        // line 1
        echo "<div class=\"js-embed embedResponsive\" data-embedJson=\"";
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, Gdn_Format::sanitizeUrl(($context["url"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 3
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/library/Vanilla/EmbeddedContent/AbstractEmbed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/library/Vanilla/EmbeddedContent/AbstractEmbed.twig", "/Applications/mamp/apache2/htdocs/vanilla/library/Vanilla/EmbeddedContent/AbstractEmbed.twig");
    }
}
