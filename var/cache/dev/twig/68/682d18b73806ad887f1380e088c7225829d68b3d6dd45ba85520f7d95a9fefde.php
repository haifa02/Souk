<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5d4b34b1ddeb3225839b316873ed1bf7270e63ebfdae38ddaa90f1fec4a47c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8731e18bc6b75963b88816db1b9830dd8b0fc6446ea37024ac8f6a69e0493f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8731e18bc6b75963b88816db1b9830dd8b0fc6446ea37024ac8f6a69e0493f16->enter($__internal_8731e18bc6b75963b88816db1b9830dd8b0fc6446ea37024ac8f6a69e0493f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e9fba56a7fe474bc8f96191671c7c57469b6c4f8f36b895dd2adf6caed605d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fba56a7fe474bc8f96191671c7c57469b6c4f8f36b895dd2adf6caed605d77->enter($__internal_e9fba56a7fe474bc8f96191671c7c57469b6c4f8f36b895dd2adf6caed605d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8731e18bc6b75963b88816db1b9830dd8b0fc6446ea37024ac8f6a69e0493f16->leave($__internal_8731e18bc6b75963b88816db1b9830dd8b0fc6446ea37024ac8f6a69e0493f16_prof);

        
        $__internal_e9fba56a7fe474bc8f96191671c7c57469b6c4f8f36b895dd2adf6caed605d77->leave($__internal_e9fba56a7fe474bc8f96191671c7c57469b6c4f8f36b895dd2adf6caed605d77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
