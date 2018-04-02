<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_fffb7788184a173a4ed5d684cbfdb0644076d5e7bbc19a843220a3cade6a7943 extends Twig_Template
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
        $__internal_e833cdaf51b8d39a3f1a3c052b479edc16f22f69bf2cacdf99f4b1f5dd5031a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e833cdaf51b8d39a3f1a3c052b479edc16f22f69bf2cacdf99f4b1f5dd5031a3->enter($__internal_e833cdaf51b8d39a3f1a3c052b479edc16f22f69bf2cacdf99f4b1f5dd5031a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5cec58415aef80ba93c0951c0645eede2694a28a5e7a885d6dd1cf568efff5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cec58415aef80ba93c0951c0645eede2694a28a5e7a885d6dd1cf568efff5dd->enter($__internal_5cec58415aef80ba93c0951c0645eede2694a28a5e7a885d6dd1cf568efff5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e833cdaf51b8d39a3f1a3c052b479edc16f22f69bf2cacdf99f4b1f5dd5031a3->leave($__internal_e833cdaf51b8d39a3f1a3c052b479edc16f22f69bf2cacdf99f4b1f5dd5031a3_prof);

        
        $__internal_5cec58415aef80ba93c0951c0645eede2694a28a5e7a885d6dd1cf568efff5dd->leave($__internal_5cec58415aef80ba93c0951c0645eede2694a28a5e7a885d6dd1cf568efff5dd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a24638b9d7f19c8c038f1b269ea3e5fa7a67b06bf7b3006f59dd7b36f564ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a24638b9d7f19c8c038f1b269ea3e5fa7a67b06bf7b3006f59dd7b36f564ccd->enter($__internal_9a24638b9d7f19c8c038f1b269ea3e5fa7a67b06bf7b3006f59dd7b36f564ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f81e755ac0ad378e6923abd4dbc975726ae1b41e433fe4007d5681df87cd0f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81e755ac0ad378e6923abd4dbc975726ae1b41e433fe4007d5681df87cd0f35->enter($__internal_f81e755ac0ad378e6923abd4dbc975726ae1b41e433fe4007d5681df87cd0f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_f81e755ac0ad378e6923abd4dbc975726ae1b41e433fe4007d5681df87cd0f35->leave($__internal_f81e755ac0ad378e6923abd4dbc975726ae1b41e433fe4007d5681df87cd0f35_prof);

        
        $__internal_9a24638b9d7f19c8c038f1b269ea3e5fa7a67b06bf7b3006f59dd7b36f564ccd->leave($__internal_9a24638b9d7f19c8c038f1b269ea3e5fa7a67b06bf7b3006f59dd7b36f564ccd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c09f3577c8e16c8905010171308658d46c513c8abb02b4bce65f703f0e876fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09f3577c8e16c8905010171308658d46c513c8abb02b4bce65f703f0e876fa5->enter($__internal_c09f3577c8e16c8905010171308658d46c513c8abb02b4bce65f703f0e876fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_788ff0c715c9ba6eae76259284a9cf9ccf0cf484f97e868f4773bea720fb2988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788ff0c715c9ba6eae76259284a9cf9ccf0cf484f97e868f4773bea720fb2988->enter($__internal_788ff0c715c9ba6eae76259284a9cf9ccf0cf484f97e868f4773bea720fb2988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_788ff0c715c9ba6eae76259284a9cf9ccf0cf484f97e868f4773bea720fb2988->leave($__internal_788ff0c715c9ba6eae76259284a9cf9ccf0cf484f97e868f4773bea720fb2988_prof);

        
        $__internal_c09f3577c8e16c8905010171308658d46c513c8abb02b4bce65f703f0e876fa5->leave($__internal_c09f3577c8e16c8905010171308658d46c513c8abb02b4bce65f703f0e876fa5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_03135d28b6c4e48e9aa41f3fda6e0c205fd9fa242699f564f24470cce340ac38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03135d28b6c4e48e9aa41f3fda6e0c205fd9fa242699f564f24470cce340ac38->enter($__internal_03135d28b6c4e48e9aa41f3fda6e0c205fd9fa242699f564f24470cce340ac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c8889e6798a02ded070ffcf5fb30152553d1ac0e52b1a7d562da42b955ef9d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8889e6798a02ded070ffcf5fb30152553d1ac0e52b1a7d562da42b955ef9d63->enter($__internal_c8889e6798a02ded070ffcf5fb30152553d1ac0e52b1a7d562da42b955ef9d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c8889e6798a02ded070ffcf5fb30152553d1ac0e52b1a7d562da42b955ef9d63->leave($__internal_c8889e6798a02ded070ffcf5fb30152553d1ac0e52b1a7d562da42b955ef9d63_prof);

        
        $__internal_03135d28b6c4e48e9aa41f3fda6e0c205fd9fa242699f564f24470cce340ac38->leave($__internal_03135d28b6c4e48e9aa41f3fda6e0c205fd9fa242699f564f24470cce340ac38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
