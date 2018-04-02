<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_960e996c3fd8b4f19327b723ae25fa9a8e7afb89c06fd3ddd2c902547cb4878e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f68e6c48eec99e5cb1855510b8e566a1f876d2e1feab0ce529b90af6ddb2a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f68e6c48eec99e5cb1855510b8e566a1f876d2e1feab0ce529b90af6ddb2a79->enter($__internal_4f68e6c48eec99e5cb1855510b8e566a1f876d2e1feab0ce529b90af6ddb2a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e8b0484a9b38df21cc3b25d119296d85f4eadd0faf574d653460647d9e38d239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b0484a9b38df21cc3b25d119296d85f4eadd0faf574d653460647d9e38d239->enter($__internal_e8b0484a9b38df21cc3b25d119296d85f4eadd0faf574d653460647d9e38d239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4f68e6c48eec99e5cb1855510b8e566a1f876d2e1feab0ce529b90af6ddb2a79->leave($__internal_4f68e6c48eec99e5cb1855510b8e566a1f876d2e1feab0ce529b90af6ddb2a79_prof);

        
        $__internal_e8b0484a9b38df21cc3b25d119296d85f4eadd0faf574d653460647d9e38d239->leave($__internal_e8b0484a9b38df21cc3b25d119296d85f4eadd0faf574d653460647d9e38d239_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cf21eaf3f05ab3131220469b191088801d931258e6945150f12e96f1d903939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf21eaf3f05ab3131220469b191088801d931258e6945150f12e96f1d903939->enter($__internal_6cf21eaf3f05ab3131220469b191088801d931258e6945150f12e96f1d903939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_252a9d33834b2f4b24aea6e2ed55fb52c791d72332d678182a1ba0209d850fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252a9d33834b2f4b24aea6e2ed55fb52c791d72332d678182a1ba0209d850fed->enter($__internal_252a9d33834b2f4b24aea6e2ed55fb52c791d72332d678182a1ba0209d850fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_252a9d33834b2f4b24aea6e2ed55fb52c791d72332d678182a1ba0209d850fed->leave($__internal_252a9d33834b2f4b24aea6e2ed55fb52c791d72332d678182a1ba0209d850fed_prof);

        
        $__internal_6cf21eaf3f05ab3131220469b191088801d931258e6945150f12e96f1d903939->leave($__internal_6cf21eaf3f05ab3131220469b191088801d931258e6945150f12e96f1d903939_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
