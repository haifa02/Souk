<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_4251b59f281a2ed831af1cc7689687d0613e79dae7dc9c1ec64168adfec2d27c extends Twig_Template
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
        $__internal_4867eacfdb587c6742d2d50f16017c3b47ad30cd22c073b17af5db14e388f56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4867eacfdb587c6742d2d50f16017c3b47ad30cd22c073b17af5db14e388f56c->enter($__internal_4867eacfdb587c6742d2d50f16017c3b47ad30cd22c073b17af5db14e388f56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_370d8f5ccc2e882b53ef44a455bd4e75d3bb202892597838b6c1b82087b06553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370d8f5ccc2e882b53ef44a455bd4e75d3bb202892597838b6c1b82087b06553->enter($__internal_370d8f5ccc2e882b53ef44a455bd4e75d3bb202892597838b6c1b82087b06553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4867eacfdb587c6742d2d50f16017c3b47ad30cd22c073b17af5db14e388f56c->leave($__internal_4867eacfdb587c6742d2d50f16017c3b47ad30cd22c073b17af5db14e388f56c_prof);

        
        $__internal_370d8f5ccc2e882b53ef44a455bd4e75d3bb202892597838b6c1b82087b06553->leave($__internal_370d8f5ccc2e882b53ef44a455bd4e75d3bb202892597838b6c1b82087b06553_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "FrontBundle:Default:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
