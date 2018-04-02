<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_26b44532e7218e92e5c8c7328e8a8d53224bedd0f50225e77c009556501ebe6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21bbf836f307d45d6ec739e6233ed81c120b019d7fd65dbec1554e4f84b50da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bbf836f307d45d6ec739e6233ed81c120b019d7fd65dbec1554e4f84b50da7->enter($__internal_21bbf836f307d45d6ec739e6233ed81c120b019d7fd65dbec1554e4f84b50da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_84362893906f162b0f720e7736d889f2171269b1157610a76d73bcc711482486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84362893906f162b0f720e7736d889f2171269b1157610a76d73bcc711482486->enter($__internal_84362893906f162b0f720e7736d889f2171269b1157610a76d73bcc711482486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21bbf836f307d45d6ec739e6233ed81c120b019d7fd65dbec1554e4f84b50da7->leave($__internal_21bbf836f307d45d6ec739e6233ed81c120b019d7fd65dbec1554e4f84b50da7_prof);

        
        $__internal_84362893906f162b0f720e7736d889f2171269b1157610a76d73bcc711482486->leave($__internal_84362893906f162b0f720e7736d889f2171269b1157610a76d73bcc711482486_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0d73fdfd66887cc6e9f70a1b90ae98adc60170b07a92e49c42223cd28f2e2af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d73fdfd66887cc6e9f70a1b90ae98adc60170b07a92e49c42223cd28f2e2af1->enter($__internal_0d73fdfd66887cc6e9f70a1b90ae98adc60170b07a92e49c42223cd28f2e2af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b6121229b285ca8539e439ad4b902a68dd97e48125acbe40cd5333d515b0e7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6121229b285ca8539e439ad4b902a68dd97e48125acbe40cd5333d515b0e7d8->enter($__internal_b6121229b285ca8539e439ad4b902a68dd97e48125acbe40cd5333d515b0e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b6121229b285ca8539e439ad4b902a68dd97e48125acbe40cd5333d515b0e7d8->leave($__internal_b6121229b285ca8539e439ad4b902a68dd97e48125acbe40cd5333d515b0e7d8_prof);

        
        $__internal_0d73fdfd66887cc6e9f70a1b90ae98adc60170b07a92e49c42223cd28f2e2af1->leave($__internal_0d73fdfd66887cc6e9f70a1b90ae98adc60170b07a92e49c42223cd28f2e2af1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cdff59e2f66df81ca7816b86687b345053c891933208bc325d4c8f24b27572e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdff59e2f66df81ca7816b86687b345053c891933208bc325d4c8f24b27572e->enter($__internal_4cdff59e2f66df81ca7816b86687b345053c891933208bc325d4c8f24b27572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d432a0c24f1400ddb063ed19a8af1e456f296b17324ddbb168c1be9cb85b8942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d432a0c24f1400ddb063ed19a8af1e456f296b17324ddbb168c1be9cb85b8942->enter($__internal_d432a0c24f1400ddb063ed19a8af1e456f296b17324ddbb168c1be9cb85b8942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d432a0c24f1400ddb063ed19a8af1e456f296b17324ddbb168c1be9cb85b8942->leave($__internal_d432a0c24f1400ddb063ed19a8af1e456f296b17324ddbb168c1be9cb85b8942_prof);

        
        $__internal_4cdff59e2f66df81ca7816b86687b345053c891933208bc325d4c8f24b27572e->leave($__internal_4cdff59e2f66df81ca7816b86687b345053c891933208bc325d4c8f24b27572e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
