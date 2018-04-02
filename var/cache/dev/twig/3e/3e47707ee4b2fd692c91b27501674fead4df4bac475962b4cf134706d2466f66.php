<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_48ec3b975fb70c3f2e2c1b8ee8df30834dc175c0daccf7b1718bf00d2a8f39ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a42ada9248feed5aa8d5cfe486ccf2c2a9a7e55351340de66ee7c2d1d4cb981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a42ada9248feed5aa8d5cfe486ccf2c2a9a7e55351340de66ee7c2d1d4cb981->enter($__internal_3a42ada9248feed5aa8d5cfe486ccf2c2a9a7e55351340de66ee7c2d1d4cb981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_53e53bfa9c0ad717c9a2ee3c000b2efb0afa99ddb6d35c9db7f9569a7c82dfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e53bfa9c0ad717c9a2ee3c000b2efb0afa99ddb6d35c9db7f9569a7c82dfd9->enter($__internal_53e53bfa9c0ad717c9a2ee3c000b2efb0afa99ddb6d35c9db7f9569a7c82dfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a42ada9248feed5aa8d5cfe486ccf2c2a9a7e55351340de66ee7c2d1d4cb981->leave($__internal_3a42ada9248feed5aa8d5cfe486ccf2c2a9a7e55351340de66ee7c2d1d4cb981_prof);

        
        $__internal_53e53bfa9c0ad717c9a2ee3c000b2efb0afa99ddb6d35c9db7f9569a7c82dfd9->leave($__internal_53e53bfa9c0ad717c9a2ee3c000b2efb0afa99ddb6d35c9db7f9569a7c82dfd9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b16f5c16f6185eb531a587476196f4fc2b361eb37b4958f5316033cc81e94f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b16f5c16f6185eb531a587476196f4fc2b361eb37b4958f5316033cc81e94f0->enter($__internal_1b16f5c16f6185eb531a587476196f4fc2b361eb37b4958f5316033cc81e94f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74ccebb4148042b02dc7ba69ec4a90fe34a70e3894f783d518e4d5ee8d493d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ccebb4148042b02dc7ba69ec4a90fe34a70e3894f783d518e4d5ee8d493d9c->enter($__internal_74ccebb4148042b02dc7ba69ec4a90fe34a70e3894f783d518e4d5ee8d493d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_74ccebb4148042b02dc7ba69ec4a90fe34a70e3894f783d518e4d5ee8d493d9c->leave($__internal_74ccebb4148042b02dc7ba69ec4a90fe34a70e3894f783d518e4d5ee8d493d9c_prof);

        
        $__internal_1b16f5c16f6185eb531a587476196f4fc2b361eb37b4958f5316033cc81e94f0->leave($__internal_1b16f5c16f6185eb531a587476196f4fc2b361eb37b4958f5316033cc81e94f0_prof);

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
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
