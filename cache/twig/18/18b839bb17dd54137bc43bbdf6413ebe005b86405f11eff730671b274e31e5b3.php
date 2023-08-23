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

/* Articles/Views/v_add.twig */
class __TwigTemplate_f91b3e762f29bed4cadcbe84414656521017b93de6d7e5a98b5f89eacf03a635 extends Template
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
        echo "<h1>Add article</h1>
<form method=\"post\" action=\"";
        // line 2
        echo ($context["baseUrl"] ?? null);
        echo "article/add\">
\t<div>
\t\t<div>Title</div>
\t\t<div><input name=\"title\" value=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, false, 5);
        echo "\"></div>
\t\t<div>";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 6);
        echo "</div>
\t</div>
\t<div>
\t\t<div>Content</div>
\t\t<div><textarea name=\"content\">";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "content", [], "any", false, false, false, 10);
        echo "</textarea></div>
\t\t<div>";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 11);
        echo "</div>
\t</div>
\t<button>Send</button>
</form>";
    }

    public function getTemplateName()
    {
        return "Articles/Views/v_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Articles/Views/v_add.twig", "D:\\xampp\\htdocs\\php2\\lesson8\\Modules\\Articles\\Views\\v_add.twig");
    }
}
