<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_82885af7af0486ba3cc394a2a6a8edf0f5c7a830261bb2e8ff484472fcf97c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_42572feeee7c35f1bf83dbb9f0d7bda76ba97d7297df846bf57164258a7856ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42572feeee7c35f1bf83dbb9f0d7bda76ba97d7297df846bf57164258a7856ec->enter($__internal_42572feeee7c35f1bf83dbb9f0d7bda76ba97d7297df846bf57164258a7856ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_b974dece41fa4645f4581d08a2b446c2b155876ba77a99110673cd10091b3280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b974dece41fa4645f4581d08a2b446c2b155876ba77a99110673cd10091b3280->enter($__internal_b974dece41fa4645f4581d08a2b446c2b155876ba77a99110673cd10091b3280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42572feeee7c35f1bf83dbb9f0d7bda76ba97d7297df846bf57164258a7856ec->leave($__internal_42572feeee7c35f1bf83dbb9f0d7bda76ba97d7297df846bf57164258a7856ec_prof);

        
        $__internal_b974dece41fa4645f4581d08a2b446c2b155876ba77a99110673cd10091b3280->leave($__internal_b974dece41fa4645f4581d08a2b446c2b155876ba77a99110673cd10091b3280_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_382e9e0b91ed8824cc322fb8e64e24328fe9fc4ac2d1d569a2ce760b071228ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382e9e0b91ed8824cc322fb8e64e24328fe9fc4ac2d1d569a2ce760b071228ba->enter($__internal_382e9e0b91ed8824cc322fb8e64e24328fe9fc4ac2d1d569a2ce760b071228ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab722e14abacbb673dd30bbb26d0a21bfcaf46d5cb1cb573b9639b9dfc666195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab722e14abacbb673dd30bbb26d0a21bfcaf46d5cb1cb573b9639b9dfc666195->enter($__internal_ab722e14abacbb673dd30bbb26d0a21bfcaf46d5cb1cb573b9639b9dfc666195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ab722e14abacbb673dd30bbb26d0a21bfcaf46d5cb1cb573b9639b9dfc666195->leave($__internal_ab722e14abacbb673dd30bbb26d0a21bfcaf46d5cb1cb573b9639b9dfc666195_prof);

        
        $__internal_382e9e0b91ed8824cc322fb8e64e24328fe9fc4ac2d1d569a2ce760b071228ba->leave($__internal_382e9e0b91ed8824cc322fb8e64e24328fe9fc4ac2d1d569a2ce760b071228ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/new.html.twig");
    }
}
