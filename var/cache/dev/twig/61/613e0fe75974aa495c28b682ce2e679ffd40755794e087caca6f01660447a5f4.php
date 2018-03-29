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
        $__internal_d8514eee0be54c3e13c3d0a737099297d090f0d2091de5b813028ae40d0c68c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8514eee0be54c3e13c3d0a737099297d090f0d2091de5b813028ae40d0c68c5->enter($__internal_d8514eee0be54c3e13c3d0a737099297d090f0d2091de5b813028ae40d0c68c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_d5f1d662691ca5e3c946069b5cc1c14696d411874622f7aee805b471f985f21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f1d662691ca5e3c946069b5cc1c14696d411874622f7aee805b471f985f21d->enter($__internal_d5f1d662691ca5e3c946069b5cc1c14696d411874622f7aee805b471f985f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8514eee0be54c3e13c3d0a737099297d090f0d2091de5b813028ae40d0c68c5->leave($__internal_d8514eee0be54c3e13c3d0a737099297d090f0d2091de5b813028ae40d0c68c5_prof);

        
        $__internal_d5f1d662691ca5e3c946069b5cc1c14696d411874622f7aee805b471f985f21d->leave($__internal_d5f1d662691ca5e3c946069b5cc1c14696d411874622f7aee805b471f985f21d_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_5687f332d6bb556507dcfde82ffb223db28de22002131e9853038c83f5bd22be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5687f332d6bb556507dcfde82ffb223db28de22002131e9853038c83f5bd22be->enter($__internal_5687f332d6bb556507dcfde82ffb223db28de22002131e9853038c83f5bd22be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_1b9c93b77e6dc100285573c4d6883fe38f7367b8dd65afe1139e836f694d4135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9c93b77e6dc100285573c4d6883fe38f7367b8dd65afe1139e836f694d4135->enter($__internal_1b9c93b77e6dc100285573c4d6883fe38f7367b8dd65afe1139e836f694d4135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_1b9c93b77e6dc100285573c4d6883fe38f7367b8dd65afe1139e836f694d4135->leave($__internal_1b9c93b77e6dc100285573c4d6883fe38f7367b8dd65afe1139e836f694d4135_prof);

        
        $__internal_5687f332d6bb556507dcfde82ffb223db28de22002131e9853038c83f5bd22be->leave($__internal_5687f332d6bb556507dcfde82ffb223db28de22002131e9853038c83f5bd22be_prof);

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
