<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_48ec3b975fb70c3f2e2c1b8ee8df30834dc175c0daccf7b1718bf00d2a8f39ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_55342a4b4ce7a77e7acd26a2ce947219412a180247ac3c829027aaf1fdb8d180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55342a4b4ce7a77e7acd26a2ce947219412a180247ac3c829027aaf1fdb8d180->enter($__internal_55342a4b4ce7a77e7acd26a2ce947219412a180247ac3c829027aaf1fdb8d180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e03a999b9731ebf0777cfd0048f5f2e9bf0b1d90a89edbe3c35516008a6e589a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03a999b9731ebf0777cfd0048f5f2e9bf0b1d90a89edbe3c35516008a6e589a->enter($__internal_e03a999b9731ebf0777cfd0048f5f2e9bf0b1d90a89edbe3c35516008a6e589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55342a4b4ce7a77e7acd26a2ce947219412a180247ac3c829027aaf1fdb8d180->leave($__internal_55342a4b4ce7a77e7acd26a2ce947219412a180247ac3c829027aaf1fdb8d180_prof);

        
        $__internal_e03a999b9731ebf0777cfd0048f5f2e9bf0b1d90a89edbe3c35516008a6e589a->leave($__internal_e03a999b9731ebf0777cfd0048f5f2e9bf0b1d90a89edbe3c35516008a6e589a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_844fe0a67f29faec391efcd88d739cf8a7a091e62638c82104dcd6f79b9e9e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844fe0a67f29faec391efcd88d739cf8a7a091e62638c82104dcd6f79b9e9e9b->enter($__internal_844fe0a67f29faec391efcd88d739cf8a7a091e62638c82104dcd6f79b9e9e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2482e1b2ef6146b084233778b803dce30498f026a033f3a8daf4016d6280ea81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2482e1b2ef6146b084233778b803dce30498f026a033f3a8daf4016d6280ea81->enter($__internal_2482e1b2ef6146b084233778b803dce30498f026a033f3a8daf4016d6280ea81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2482e1b2ef6146b084233778b803dce30498f026a033f3a8daf4016d6280ea81->leave($__internal_2482e1b2ef6146b084233778b803dce30498f026a033f3a8daf4016d6280ea81_prof);

        
        $__internal_844fe0a67f29faec391efcd88d739cf8a7a091e62638c82104dcd6f79b9e9e9b->leave($__internal_844fe0a67f29faec391efcd88d739cf8a7a091e62638c82104dcd6f79b9e9e9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
