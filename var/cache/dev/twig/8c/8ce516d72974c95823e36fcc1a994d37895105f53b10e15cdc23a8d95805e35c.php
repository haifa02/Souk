<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_654b76337e2d00ca99a4b761b5892ee49f86f5d0b1d3c6dce6ebc26d7a575219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe66678a9e00f6a12887e7bed18afe5f610816016152f26eb2a81217b4e5cb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe66678a9e00f6a12887e7bed18afe5f610816016152f26eb2a81217b4e5cb35->enter($__internal_fe66678a9e00f6a12887e7bed18afe5f610816016152f26eb2a81217b4e5cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_d81282e84ef613ae5e5aea395f7d1947f0790a1847a6917491f1f06b10f7140f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81282e84ef613ae5e5aea395f7d1947f0790a1847a6917491f1f06b10f7140f->enter($__internal_d81282e84ef613ae5e5aea395f7d1947f0790a1847a6917491f1f06b10f7140f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fe66678a9e00f6a12887e7bed18afe5f610816016152f26eb2a81217b4e5cb35->leave($__internal_fe66678a9e00f6a12887e7bed18afe5f610816016152f26eb2a81217b4e5cb35_prof);

        
        $__internal_d81282e84ef613ae5e5aea395f7d1947f0790a1847a6917491f1f06b10f7140f->leave($__internal_d81282e84ef613ae5e5aea395f7d1947f0790a1847a6917491f1f06b10f7140f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e7e6f67173036a71744ee4c518effae356eb93f4b5d4b57c1505fc77c81bc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7e6f67173036a71744ee4c518effae356eb93f4b5d4b57c1505fc77c81bc3b->enter($__internal_7e7e6f67173036a71744ee4c518effae356eb93f4b5d4b57c1505fc77c81bc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d373d4e3ffac8e0c261f6b3d8f55dcec28f1c20fd697b543bf011f68444ba31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d373d4e3ffac8e0c261f6b3d8f55dcec28f1c20fd697b543bf011f68444ba31c->enter($__internal_d373d4e3ffac8e0c261f6b3d8f55dcec28f1c20fd697b543bf011f68444ba31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d373d4e3ffac8e0c261f6b3d8f55dcec28f1c20fd697b543bf011f68444ba31c->leave($__internal_d373d4e3ffac8e0c261f6b3d8f55dcec28f1c20fd697b543bf011f68444ba31c_prof);

        
        $__internal_7e7e6f67173036a71744ee4c518effae356eb93f4b5d4b57c1505fc77c81bc3b->leave($__internal_7e7e6f67173036a71744ee4c518effae356eb93f4b5d4b57c1505fc77c81bc3b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7be36aa4700e18dfbf7227f2ad0875284cab8797345559f2f124d4bd4bda8c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be36aa4700e18dfbf7227f2ad0875284cab8797345559f2f124d4bd4bda8c83->enter($__internal_7be36aa4700e18dfbf7227f2ad0875284cab8797345559f2f124d4bd4bda8c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_29be68395b05e52d5c2a703e857727a3f78548b190910c98ded53969dafbf11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29be68395b05e52d5c2a703e857727a3f78548b190910c98ded53969dafbf11a->enter($__internal_29be68395b05e52d5c2a703e857727a3f78548b190910c98ded53969dafbf11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_29be68395b05e52d5c2a703e857727a3f78548b190910c98ded53969dafbf11a->leave($__internal_29be68395b05e52d5c2a703e857727a3f78548b190910c98ded53969dafbf11a_prof);

        
        $__internal_7be36aa4700e18dfbf7227f2ad0875284cab8797345559f2f124d4bd4bda8c83->leave($__internal_7be36aa4700e18dfbf7227f2ad0875284cab8797345559f2f124d4bd4bda8c83_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7f1884532d1205ff237ccebd0c249e26e31a45323d816e96d967d8a83797c5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1884532d1205ff237ccebd0c249e26e31a45323d816e96d967d8a83797c5ff->enter($__internal_7f1884532d1205ff237ccebd0c249e26e31a45323d816e96d967d8a83797c5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_708146ef4b646d75f2436a90ae47c92a131ca9082e1e2732f4d1ce79829af586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708146ef4b646d75f2436a90ae47c92a131ca9082e1e2732f4d1ce79829af586->enter($__internal_708146ef4b646d75f2436a90ae47c92a131ca9082e1e2732f4d1ce79829af586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_708146ef4b646d75f2436a90ae47c92a131ca9082e1e2732f4d1ce79829af586->leave($__internal_708146ef4b646d75f2436a90ae47c92a131ca9082e1e2732f4d1ce79829af586_prof);

        
        $__internal_7f1884532d1205ff237ccebd0c249e26e31a45323d816e96d967d8a83797c5ff->leave($__internal_7f1884532d1205ff237ccebd0c249e26e31a45323d816e96d967d8a83797c5ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
