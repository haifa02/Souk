<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b9f19f98a8baf8c7586874f0ac94675e1f156591bf5fc001c96785a6c10fd3f0 extends Twig_Template
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
        $__internal_d96f54860f4e5e217d84d12ac543809f16bbad7e7bff6c4bb45b6d91d38d290a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96f54860f4e5e217d84d12ac543809f16bbad7e7bff6c4bb45b6d91d38d290a->enter($__internal_d96f54860f4e5e217d84d12ac543809f16bbad7e7bff6c4bb45b6d91d38d290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_af22a321af5fc01cf58479822bac7e5fcb1a5250db8dc5c7502072abad19ba70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af22a321af5fc01cf58479822bac7e5fcb1a5250db8dc5c7502072abad19ba70->enter($__internal_af22a321af5fc01cf58479822bac7e5fcb1a5250db8dc5c7502072abad19ba70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_d96f54860f4e5e217d84d12ac543809f16bbad7e7bff6c4bb45b6d91d38d290a->leave($__internal_d96f54860f4e5e217d84d12ac543809f16bbad7e7bff6c4bb45b6d91d38d290a_prof);

        
        $__internal_af22a321af5fc01cf58479822bac7e5fcb1a5250db8dc5c7502072abad19ba70->leave($__internal_af22a321af5fc01cf58479822bac7e5fcb1a5250db8dc5c7502072abad19ba70_prof);

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
