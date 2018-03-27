<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b489ba7488af1d50aad6e9e769e03a303614838bde1b341afcb097481d331499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_22e01c254d5b5a2dd06f016018c7bc1c9f296d311fb6a736823ece0af715f0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e01c254d5b5a2dd06f016018c7bc1c9f296d311fb6a736823ece0af715f0aa->enter($__internal_22e01c254d5b5a2dd06f016018c7bc1c9f296d311fb6a736823ece0af715f0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_c278e4a1ee9a0be07f2c8b008fe622d60501e685362eace3dd604346b2fede42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c278e4a1ee9a0be07f2c8b008fe622d60501e685362eace3dd604346b2fede42->enter($__internal_c278e4a1ee9a0be07f2c8b008fe622d60501e685362eace3dd604346b2fede42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e01c254d5b5a2dd06f016018c7bc1c9f296d311fb6a736823ece0af715f0aa->leave($__internal_22e01c254d5b5a2dd06f016018c7bc1c9f296d311fb6a736823ece0af715f0aa_prof);

        
        $__internal_c278e4a1ee9a0be07f2c8b008fe622d60501e685362eace3dd604346b2fede42->leave($__internal_c278e4a1ee9a0be07f2c8b008fe622d60501e685362eace3dd604346b2fede42_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_c8d348cd1ccf6d3f4647ba732e5984de61b71b293a666f46918ba3b61af50d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d348cd1ccf6d3f4647ba732e5984de61b71b293a666f46918ba3b61af50d07->enter($__internal_c8d348cd1ccf6d3f4647ba732e5984de61b71b293a666f46918ba3b61af50d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_b900d787d4bd00933cc3d18ed4942706d0bc3df404b364d1eb254c9f0b8d0e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b900d787d4bd00933cc3d18ed4942706d0bc3df404b364d1eb254c9f0b8d0e69->enter($__internal_b900d787d4bd00933cc3d18ed4942706d0bc3df404b364d1eb254c9f0b8d0e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_b900d787d4bd00933cc3d18ed4942706d0bc3df404b364d1eb254c9f0b8d0e69->leave($__internal_b900d787d4bd00933cc3d18ed4942706d0bc3df404b364d1eb254c9f0b8d0e69_prof);

        
        $__internal_c8d348cd1ccf6d3f4647ba732e5984de61b71b293a666f46918ba3b61af50d07->leave($__internal_c8d348cd1ccf6d3f4647ba732e5984de61b71b293a666f46918ba3b61af50d07_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
