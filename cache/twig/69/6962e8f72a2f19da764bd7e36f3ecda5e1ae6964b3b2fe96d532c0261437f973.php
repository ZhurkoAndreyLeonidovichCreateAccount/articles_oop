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

/* _base/v_main.twig */
class __TwigTemplate_1865c1faa466da9ae4b489694ccc165e5289b4763779b816e0ae602f65950dcc extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body>
\thead
\t<hr>
\t<a href=\"";
        // line 12
        echo ($context["baseUrl"] ?? null);
        echo "\">Home</a> | 
\t<a href=\"";
        // line 13
        echo ($context["baseUrl"] ?? null);
        echo "article/add\">Add article</a> |
\t";
        // line 14
        if ( !twig_test_empty(($context["user"] ?? null))) {
            // line 15
            echo "\t\t<span>";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["login"] ?? null) : null);
            echo "</span> |
\t\t<a href=\"";
            // line 16
            echo ($context["baseUrl"] ?? null);
            echo "logout\">logout</a> | 
\t";
        } else {
            // line 18
            echo "\t\t<a href=\"";
            echo ($context["baseUrl"] ?? null);
            echo "login\">login</a> | 
\t\t<a href=\"";
            // line 19
            echo ($context["baseUrl"] ?? null);
            echo "reg\">registration</a>
\t";
        }
        // line 21
        echo "\t<hr>
\t";
        // line 22
        echo ($context["content"] ?? null);
        echo "
\t<hr>
\tfooter
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "_base/v_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  83 => 21,  78 => 19,  73 => 18,  68 => 16,  63 => 15,  61 => 14,  57 => 13,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_base/v_main.twig", "D:\\xampp\\htdocs\\php2\\lesson8\\Modules\\_base\\v_main.twig");
    }
}
