<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6d0f50cba474bfec7fecf72838ccc16de71bea2a7b088bceb8b45da9ee452166 extends Twig_Template
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
        $__internal_9e8310af35073fa7b5647314007886ef9273777073fcbffa6f1cd98cc7a200d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8310af35073fa7b5647314007886ef9273777073fcbffa6f1cd98cc7a200d9->enter($__internal_9e8310af35073fa7b5647314007886ef9273777073fcbffa6f1cd98cc7a200d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_06d37486b3278ff9be0bbd3f604d42ee1554625aafa3eeaa3c6457752b030f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d37486b3278ff9be0bbd3f604d42ee1554625aafa3eeaa3c6457752b030f82->enter($__internal_06d37486b3278ff9be0bbd3f604d42ee1554625aafa3eeaa3c6457752b030f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9e8310af35073fa7b5647314007886ef9273777073fcbffa6f1cd98cc7a200d9->leave($__internal_9e8310af35073fa7b5647314007886ef9273777073fcbffa6f1cd98cc7a200d9_prof);

        
        $__internal_06d37486b3278ff9be0bbd3f604d42ee1554625aafa3eeaa3c6457752b030f82->leave($__internal_06d37486b3278ff9be0bbd3f604d42ee1554625aafa3eeaa3c6457752b030f82_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfc0e1864d2fc9c31b737a99f56c2d67c75715f9807db9142d1c5cee85894c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc0e1864d2fc9c31b737a99f56c2d67c75715f9807db9142d1c5cee85894c31->enter($__internal_bfc0e1864d2fc9c31b737a99f56c2d67c75715f9807db9142d1c5cee85894c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfe82db97d31ba53254335f1f9d563cd05207eaeefce682080f13726e9967fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe82db97d31ba53254335f1f9d563cd05207eaeefce682080f13726e9967fde->enter($__internal_cfe82db97d31ba53254335f1f9d563cd05207eaeefce682080f13726e9967fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cfe82db97d31ba53254335f1f9d563cd05207eaeefce682080f13726e9967fde->leave($__internal_cfe82db97d31ba53254335f1f9d563cd05207eaeefce682080f13726e9967fde_prof);

        
        $__internal_bfc0e1864d2fc9c31b737a99f56c2d67c75715f9807db9142d1c5cee85894c31->leave($__internal_bfc0e1864d2fc9c31b737a99f56c2d67c75715f9807db9142d1c5cee85894c31_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
