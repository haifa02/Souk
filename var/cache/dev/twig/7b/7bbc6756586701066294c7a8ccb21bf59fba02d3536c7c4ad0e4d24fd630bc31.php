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
        $__internal_f75e4f012bdcfea6979caae4950f2d0191ef678fd6de49ddd41a0b6726b89b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75e4f012bdcfea6979caae4950f2d0191ef678fd6de49ddd41a0b6726b89b3d->enter($__internal_f75e4f012bdcfea6979caae4950f2d0191ef678fd6de49ddd41a0b6726b89b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_edbdcf4c46ebf8edddaf7bbce1232f8b5edf69566169308a847c1eba7ccf8e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbdcf4c46ebf8edddaf7bbce1232f8b5edf69566169308a847c1eba7ccf8e1a->enter($__internal_edbdcf4c46ebf8edddaf7bbce1232f8b5edf69566169308a847c1eba7ccf8e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f75e4f012bdcfea6979caae4950f2d0191ef678fd6de49ddd41a0b6726b89b3d->leave($__internal_f75e4f012bdcfea6979caae4950f2d0191ef678fd6de49ddd41a0b6726b89b3d_prof);

        
        $__internal_edbdcf4c46ebf8edddaf7bbce1232f8b5edf69566169308a847c1eba7ccf8e1a->leave($__internal_edbdcf4c46ebf8edddaf7bbce1232f8b5edf69566169308a847c1eba7ccf8e1a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e542289327af7837b6a0c31321ad0f5d31aaa1fab2e3f425683a62122936b53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e542289327af7837b6a0c31321ad0f5d31aaa1fab2e3f425683a62122936b53a->enter($__internal_e542289327af7837b6a0c31321ad0f5d31aaa1fab2e3f425683a62122936b53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c64db6279a73a11bc797f6a389f80eef717fec4e78d2c93a1025dae6f1fabf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c64db6279a73a11bc797f6a389f80eef717fec4e78d2c93a1025dae6f1fabf3->enter($__internal_5c64db6279a73a11bc797f6a389f80eef717fec4e78d2c93a1025dae6f1fabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5c64db6279a73a11bc797f6a389f80eef717fec4e78d2c93a1025dae6f1fabf3->leave($__internal_5c64db6279a73a11bc797f6a389f80eef717fec4e78d2c93a1025dae6f1fabf3_prof);

        
        $__internal_e542289327af7837b6a0c31321ad0f5d31aaa1fab2e3f425683a62122936b53a->leave($__internal_e542289327af7837b6a0c31321ad0f5d31aaa1fab2e3f425683a62122936b53a_prof);

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
