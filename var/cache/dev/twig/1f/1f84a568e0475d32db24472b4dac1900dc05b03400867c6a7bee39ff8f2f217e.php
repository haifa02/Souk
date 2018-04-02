<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7bf24578cb58efaa4e6abb3df450fe8cdd4902438194fd5f23fcab5ad8a57cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_bb04cf6a19945d62661cdaf7b98b59374570d26a22da0d415bafcdfd0498c2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb04cf6a19945d62661cdaf7b98b59374570d26a22da0d415bafcdfd0498c2d1->enter($__internal_bb04cf6a19945d62661cdaf7b98b59374570d26a22da0d415bafcdfd0498c2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_a3feb1a9931edd87096f979c0768816ad444f6dd3d886937d72ca160e278da58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3feb1a9931edd87096f979c0768816ad444f6dd3d886937d72ca160e278da58->enter($__internal_a3feb1a9931edd87096f979c0768816ad444f6dd3d886937d72ca160e278da58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb04cf6a19945d62661cdaf7b98b59374570d26a22da0d415bafcdfd0498c2d1->leave($__internal_bb04cf6a19945d62661cdaf7b98b59374570d26a22da0d415bafcdfd0498c2d1_prof);

        
        $__internal_a3feb1a9931edd87096f979c0768816ad444f6dd3d886937d72ca160e278da58->leave($__internal_a3feb1a9931edd87096f979c0768816ad444f6dd3d886937d72ca160e278da58_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_087ab14a761bc4491f2e8d704501cc1873354a1562605b5128943c16a9a967e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087ab14a761bc4491f2e8d704501cc1873354a1562605b5128943c16a9a967e8->enter($__internal_087ab14a761bc4491f2e8d704501cc1873354a1562605b5128943c16a9a967e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_2f8cae43740832044295b5350c1ba05595917ce099fac75c5c8dddcfd091f34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8cae43740832044295b5350c1ba05595917ce099fac75c5c8dddcfd091f34b->enter($__internal_2f8cae43740832044295b5350c1ba05595917ce099fac75c5c8dddcfd091f34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_2f8cae43740832044295b5350c1ba05595917ce099fac75c5c8dddcfd091f34b->leave($__internal_2f8cae43740832044295b5350c1ba05595917ce099fac75c5c8dddcfd091f34b_prof);

        
        $__internal_087ab14a761bc4491f2e8d704501cc1873354a1562605b5128943c16a9a967e8->leave($__internal_087ab14a761bc4491f2e8d704501cc1873354a1562605b5128943c16a9a967e8_prof);

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
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}

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
