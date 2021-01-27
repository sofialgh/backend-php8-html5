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

/* index.html.twig */
class __TwigTemplate_892c2d5940d529646d9df7e53e1493d5ab05e8bef2eeabdcac1d246f9a640b83 extends Template
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
<html>
<head>
    <title>My Webpage</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
</head>
<body>
<div class='container'>
    <h1>Hola Mundo</h1>

    <form action='index.php' method='post'>
        <div class=\\\"mb-3\\\">
            <label for=\\\"Pesos\\\" class=\\\"form-label\\\">Pesos</label>
            <input type='number' class='form-control' id='Pesos' name='Pesos' />
        </div>

        <button type='submit' class='btn btn-primary'>Convertir</button>
    </form>
    <h1>";
        // line 19
        echo twig_escape_filter($this->env, ($context["resultado"] ?? null), "html", null, true);
        echo "<h1>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/var/www/html/templates/index.html.twig");
    }
}
