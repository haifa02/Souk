<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fa2a72c56fd03980f4978ce3cb544a6f5908a1717172c3da7e320ab26a5aa0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bafd2ebfb1c63c0f93e9f76ff3c4563c250a2792680bcce7e5f25886af5b30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bafd2ebfb1c63c0f93e9f76ff3c4563c250a2792680bcce7e5f25886af5b30c->enter($__internal_5bafd2ebfb1c63c0f93e9f76ff3c4563c250a2792680bcce7e5f25886af5b30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_dfcd629027d3a2d9ca437a88ccdb8236042e761ba25c4dadb9c1f556ca4e6fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcd629027d3a2d9ca437a88ccdb8236042e761ba25c4dadb9c1f556ca4e6fa7->enter($__internal_dfcd629027d3a2d9ca437a88ccdb8236042e761ba25c4dadb9c1f556ca4e6fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bafd2ebfb1c63c0f93e9f76ff3c4563c250a2792680bcce7e5f25886af5b30c->leave($__internal_5bafd2ebfb1c63c0f93e9f76ff3c4563c250a2792680bcce7e5f25886af5b30c_prof);

        
        $__internal_dfcd629027d3a2d9ca437a88ccdb8236042e761ba25c4dadb9c1f556ca4e6fa7->leave($__internal_dfcd629027d3a2d9ca437a88ccdb8236042e761ba25c4dadb9c1f556ca4e6fa7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_195008c810e78e9dd42e56f2ce7c8cdd10d6e4c93116b3fe8ec63b163e33f8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195008c810e78e9dd42e56f2ce7c8cdd10d6e4c93116b3fe8ec63b163e33f8dc->enter($__internal_195008c810e78e9dd42e56f2ce7c8cdd10d6e4c93116b3fe8ec63b163e33f8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d5f49b14561fd18e1f32ca35fcb4cbbae6a0b92416addad4dd5f536fa46c810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5f49b14561fd18e1f32ca35fcb4cbbae6a0b92416addad4dd5f536fa46c810->enter($__internal_8d5f49b14561fd18e1f32ca35fcb4cbbae6a0b92416addad4dd5f536fa46c810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8d5f49b14561fd18e1f32ca35fcb4cbbae6a0b92416addad4dd5f536fa46c810->leave($__internal_8d5f49b14561fd18e1f32ca35fcb4cbbae6a0b92416addad4dd5f536fa46c810_prof);

        
        $__internal_195008c810e78e9dd42e56f2ce7c8cdd10d6e4c93116b3fe8ec63b163e33f8dc->leave($__internal_195008c810e78e9dd42e56f2ce7c8cdd10d6e4c93116b3fe8ec63b163e33f8dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
