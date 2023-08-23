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

/* Articles/Views/v_edit.twig */
class __TwigTemplate_931a3f596cae2cb59b76bb0476e76407a8bd983a25cf2df571b8f5747097499b extends Template
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
        echo "<h1>edit article</h1>
<form method=\"post\" action=\"";
        // line 2
        echo ($context["baseUrl"] ?? null);
        echo "article/edit/";
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "id_article", [], "any", false, false, false, 2);
        echo "\">
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
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "id_user", [], "any", false, false, false, 11);
        echo "</div>
\t</div>
    <input type='hidden' name=\"id_user\" value=\"";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "id_user", [], "any", false, false, false, 13);
        echo "\">
\t<button>Send</button>
</form>";
    }

    public function getTemplateName()
    {
        return "Articles/Views/v_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  63 => 11,  59 => 10,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Articles/Views/v_edit.twig", "D:\\xampp\\htdocs\\php2\\lesson8\\Modules\\Articles\\Views\\v_edit.twig");
    }
}
