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

/* Users/Views/v_login.twig */
class __TwigTemplate_1aa98548f35af192b56bd7e8c85b0c00b80555cfc5d77d12b6b05a8f9425862d extends Template
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
        echo "<form method=\"post\" action=\"login\">
\t<div>
\t\t<div>Login</div>
\t\t<div><input type=\"text\" name=\"login\"></div>
\t</div>
\t<div>
\t\t<div>Password</div>
\t\t<div><input type=\"password\" name=\"password\"></div>
\t</div>
\t<button>Enter</button>
\t";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "\t\t<div>Please check login or password</div>
\t";
        }
        // line 14
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "Users/Views/v_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Users/Views/v_login.twig", "D:\\xampp\\htdocs\\php2\\lesson8\\Modules\\Users\\Views\\v_login.twig");
    }
}
