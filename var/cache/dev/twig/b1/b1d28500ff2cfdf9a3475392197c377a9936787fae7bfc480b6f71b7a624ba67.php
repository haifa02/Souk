<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9ea0e58258b088a7e1d04f783b0ef20bddcd016cd7f213734968181ec6d7e50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa2b8d5e61cbf9a70984834974a1ad8acd99371a62da8d06c3f44668fa362098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2b8d5e61cbf9a70984834974a1ad8acd99371a62da8d06c3f44668fa362098->enter($__internal_fa2b8d5e61cbf9a70984834974a1ad8acd99371a62da8d06c3f44668fa362098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_f79f4130070cab27537738e39a679d24ef9b44fe834a4cc15635e2d039b3051a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79f4130070cab27537738e39a679d24ef9b44fe834a4cc15635e2d039b3051a->enter($__internal_f79f4130070cab27537738e39a679d24ef9b44fe834a4cc15635e2d039b3051a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa2b8d5e61cbf9a70984834974a1ad8acd99371a62da8d06c3f44668fa362098->leave($__internal_fa2b8d5e61cbf9a70984834974a1ad8acd99371a62da8d06c3f44668fa362098_prof);

        
        $__internal_f79f4130070cab27537738e39a679d24ef9b44fe834a4cc15635e2d039b3051a->leave($__internal_f79f4130070cab27537738e39a679d24ef9b44fe834a4cc15635e2d039b3051a_prof);

    }

    // line 3
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_0cb160e565edd15e994aa8ff15c3e74003e8adf8865bc72bf78f71eb2955e884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb160e565edd15e994aa8ff15c3e74003e8adf8865bc72bf78f71eb2955e884->enter($__internal_0cb160e565edd15e994aa8ff15c3e74003e8adf8865bc72bf78f71eb2955e884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_89f689be65a7b43a4ef682559b325bd162141b40e0cb9c5a9c72b91acba5dae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f689be65a7b43a4ef682559b325bd162141b40e0cb9c5a9c72b91acba5dae0->enter($__internal_89f689be65a7b43a4ef682559b325bd162141b40e0cb9c5a9c72b91acba5dae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_89f689be65a7b43a4ef682559b325bd162141b40e0cb9c5a9c72b91acba5dae0->leave($__internal_89f689be65a7b43a4ef682559b325bd162141b40e0cb9c5a9c72b91acba5dae0_prof);

        
        $__internal_0cb160e565edd15e994aa8ff15c3e74003e8adf8865bc72bf78f71eb2955e884->leave($__internal_0cb160e565edd15e994aa8ff15c3e74003e8adf8865bc72bf78f71eb2955e884_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block formulaire %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock formulaire %}
", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
