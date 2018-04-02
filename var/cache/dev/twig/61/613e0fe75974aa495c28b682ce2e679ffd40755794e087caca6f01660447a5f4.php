<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b489ba7488af1d50aad6e9e769e03a303614838bde1b341afcb097481d331499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d10609f93bff23055514a66f2383aeb7595071dba661eb2ef6d84325885ccba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10609f93bff23055514a66f2383aeb7595071dba661eb2ef6d84325885ccba0->enter($__internal_d10609f93bff23055514a66f2383aeb7595071dba661eb2ef6d84325885ccba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_0b48f3778208584ff0eceaae2f04dc7e4e41148e27058b83fd87d8b2f069a465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b48f3778208584ff0eceaae2f04dc7e4e41148e27058b83fd87d8b2f069a465->enter($__internal_0b48f3778208584ff0eceaae2f04dc7e4e41148e27058b83fd87d8b2f069a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10609f93bff23055514a66f2383aeb7595071dba661eb2ef6d84325885ccba0->leave($__internal_d10609f93bff23055514a66f2383aeb7595071dba661eb2ef6d84325885ccba0_prof);

        
        $__internal_0b48f3778208584ff0eceaae2f04dc7e4e41148e27058b83fd87d8b2f069a465->leave($__internal_0b48f3778208584ff0eceaae2f04dc7e4e41148e27058b83fd87d8b2f069a465_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_2cd1616a759a6f13b8c9123a2acc111b1d6b9fb707988d5beef14da94c44cf06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd1616a759a6f13b8c9123a2acc111b1d6b9fb707988d5beef14da94c44cf06->enter($__internal_2cd1616a759a6f13b8c9123a2acc111b1d6b9fb707988d5beef14da94c44cf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_ab3d64f85ef2eb4c6374c997006259ee772e6a4bf916fd8487e4ed2c7530cb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3d64f85ef2eb4c6374c997006259ee772e6a4bf916fd8487e4ed2c7530cb9a->enter($__internal_ab3d64f85ef2eb4c6374c997006259ee772e6a4bf916fd8487e4ed2c7530cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ab3d64f85ef2eb4c6374c997006259ee772e6a4bf916fd8487e4ed2c7530cb9a->leave($__internal_ab3d64f85ef2eb4c6374c997006259ee772e6a4bf916fd8487e4ed2c7530cb9a_prof);

        
        $__internal_2cd1616a759a6f13b8c9123a2acc111b1d6b9fb707988d5beef14da94c44cf06->leave($__internal_2cd1616a759a6f13b8c9123a2acc111b1d6b9fb707988d5beef14da94c44cf06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block formulaire %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock formulaire %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
