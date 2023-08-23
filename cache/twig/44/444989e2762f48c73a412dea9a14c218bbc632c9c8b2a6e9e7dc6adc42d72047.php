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

/* Users/Views/v_reg.twig */
class __TwigTemplate_7f77a52fbcfea73333827059895f6a3ed871681ae3d13920044309b2a9fd7e60 extends Template
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
        echo "<form method=\"post\" action=\"reg\">
\t<div>
\t\t<div>Login</div>
\t\t<div><input type=\"text\" name=\"login\"></div>
\t</div>
\t<div>
\t\t<div>Password</div>
\t\t<div><input type=\"password\" name=\"password1\"></div>
\t</div>
    <div>
\t\t<div>Repeat password</div>
\t\t<div><input type=\"password\" name=\"password2\"></div>
\t</div>
    <div>
\t\t<div>Name</div>
\t\t<div><input type=\"text\" name=\"name\"></div>
\t</div>
\t<input type=\"submit\"></input>
\t";
        // line 19
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 20
            echo "\t\t<div>";
            echo ($context["error"] ?? null);
            echo "</div>
\t";
        }
        // line 22
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "Users/Views/v_reg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  59 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Users/Views/v_reg.twig", "D:\\xampp\\htdocs\\php2\\lesson8\\Modules\\Users\\Views\\v_reg.twig");
    }
}
