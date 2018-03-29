<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9ea0e58258b088a7e1d04f783b0ef20bddcd016cd7f213734968181ec6d7e50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e17b9908a7e1b441afdcff25d36fbc1ec11b093e9b7816fb471f829e17ef07bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17b9908a7e1b441afdcff25d36fbc1ec11b093e9b7816fb471f829e17ef07bf->enter($__internal_e17b9908a7e1b441afdcff25d36fbc1ec11b093e9b7816fb471f829e17ef07bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_98bbee4f3aaa83988da6d8c5a17ebdf24dc5ac741a8031a58d7dc67ef92322af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bbee4f3aaa83988da6d8c5a17ebdf24dc5ac741a8031a58d7dc67ef92322af->enter($__internal_98bbee4f3aaa83988da6d8c5a17ebdf24dc5ac741a8031a58d7dc67ef92322af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e17b9908a7e1b441afdcff25d36fbc1ec11b093e9b7816fb471f829e17ef07bf->leave($__internal_e17b9908a7e1b441afdcff25d36fbc1ec11b093e9b7816fb471f829e17ef07bf_prof);

        
        $__internal_98bbee4f3aaa83988da6d8c5a17ebdf24dc5ac741a8031a58d7dc67ef92322af->leave($__internal_98bbee4f3aaa83988da6d8c5a17ebdf24dc5ac741a8031a58d7dc67ef92322af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88741d0323767dcd5888011fd863aca4841a891dbcad6ff258e04cf312a524c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88741d0323767dcd5888011fd863aca4841a891dbcad6ff258e04cf312a524c6->enter($__internal_88741d0323767dcd5888011fd863aca4841a891dbcad6ff258e04cf312a524c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3da2017a78eef39fe476be9ccf6fe0d925bc7b8e31571dd19f929c4da7756d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da2017a78eef39fe476be9ccf6fe0d925bc7b8e31571dd19f929c4da7756d28->enter($__internal_3da2017a78eef39fe476be9ccf6fe0d925bc7b8e31571dd19f929c4da7756d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3da2017a78eef39fe476be9ccf6fe0d925bc7b8e31571dd19f929c4da7756d28->leave($__internal_3da2017a78eef39fe476be9ccf6fe0d925bc7b8e31571dd19f929c4da7756d28_prof);

        
        $__internal_88741d0323767dcd5888011fd863aca4841a891dbcad6ff258e04cf312a524c6->leave($__internal_88741d0323767dcd5888011fd863aca4841a891dbcad6ff258e04cf312a524c6_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
