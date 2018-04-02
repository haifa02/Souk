<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_421b7834f78b59206da8e168778fb541e4f237f912a224563e80bed1028ba304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e03979a496c4f99e2f34171ddfca9087cf516d4beede743fb615c673274512fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03979a496c4f99e2f34171ddfca9087cf516d4beede743fb615c673274512fc->enter($__internal_e03979a496c4f99e2f34171ddfca9087cf516d4beede743fb615c673274512fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_50f93ce92208e9734fc42bb16841e811c104c4a278f61835838a0532104c7950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f93ce92208e9734fc42bb16841e811c104c4a278f61835838a0532104c7950->enter($__internal_50f93ce92208e9734fc42bb16841e811c104c4a278f61835838a0532104c7950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e03979a496c4f99e2f34171ddfca9087cf516d4beede743fb615c673274512fc->leave($__internal_e03979a496c4f99e2f34171ddfca9087cf516d4beede743fb615c673274512fc_prof);

        
        $__internal_50f93ce92208e9734fc42bb16841e811c104c4a278f61835838a0532104c7950->leave($__internal_50f93ce92208e9734fc42bb16841e811c104c4a278f61835838a0532104c7950_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e86e48dfbc8c078577a7c151f65aede3fdbbf84c8b777426e43b12f0db7d41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e86e48dfbc8c078577a7c151f65aede3fdbbf84c8b777426e43b12f0db7d41e->enter($__internal_8e86e48dfbc8c078577a7c151f65aede3fdbbf84c8b777426e43b12f0db7d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1dbcac33426b2fe9c6bd6ca8bf866f06e9ad24a2ddd4a208d25826122b83af01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbcac33426b2fe9c6bd6ca8bf866f06e9ad24a2ddd4a208d25826122b83af01->enter($__internal_1dbcac33426b2fe9c6bd6ca8bf866f06e9ad24a2ddd4a208d25826122b83af01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1dbcac33426b2fe9c6bd6ca8bf866f06e9ad24a2ddd4a208d25826122b83af01->leave($__internal_1dbcac33426b2fe9c6bd6ca8bf866f06e9ad24a2ddd4a208d25826122b83af01_prof);

        
        $__internal_8e86e48dfbc8c078577a7c151f65aede3fdbbf84c8b777426e43b12f0db7d41e->leave($__internal_8e86e48dfbc8c078577a7c151f65aede3fdbbf84c8b777426e43b12f0db7d41e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
