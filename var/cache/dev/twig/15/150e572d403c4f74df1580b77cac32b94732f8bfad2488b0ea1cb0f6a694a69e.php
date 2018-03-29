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
        $__internal_4b73a420d81cf14026964eba4828df5f107099a8200281bb2010a7cd70204b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b73a420d81cf14026964eba4828df5f107099a8200281bb2010a7cd70204b2e->enter($__internal_4b73a420d81cf14026964eba4828df5f107099a8200281bb2010a7cd70204b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f497d88215da1866eea1d08e73aadb2362934302b99b1f12da680fa2f3f60184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f497d88215da1866eea1d08e73aadb2362934302b99b1f12da680fa2f3f60184->enter($__internal_f497d88215da1866eea1d08e73aadb2362934302b99b1f12da680fa2f3f60184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b73a420d81cf14026964eba4828df5f107099a8200281bb2010a7cd70204b2e->leave($__internal_4b73a420d81cf14026964eba4828df5f107099a8200281bb2010a7cd70204b2e_prof);

        
        $__internal_f497d88215da1866eea1d08e73aadb2362934302b99b1f12da680fa2f3f60184->leave($__internal_f497d88215da1866eea1d08e73aadb2362934302b99b1f12da680fa2f3f60184_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b98edd5272b1aae45b3e9843c7d77093ee3ec4535f71b4e13508ebd4e43008f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98edd5272b1aae45b3e9843c7d77093ee3ec4535f71b4e13508ebd4e43008f2->enter($__internal_b98edd5272b1aae45b3e9843c7d77093ee3ec4535f71b4e13508ebd4e43008f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e561b36a23274636893336a85be08cd34e9d275e5077a5d93e06dec689bde4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e561b36a23274636893336a85be08cd34e9d275e5077a5d93e06dec689bde4cb->enter($__internal_e561b36a23274636893336a85be08cd34e9d275e5077a5d93e06dec689bde4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e561b36a23274636893336a85be08cd34e9d275e5077a5d93e06dec689bde4cb->leave($__internal_e561b36a23274636893336a85be08cd34e9d275e5077a5d93e06dec689bde4cb_prof);

        
        $__internal_b98edd5272b1aae45b3e9843c7d77093ee3ec4535f71b4e13508ebd4e43008f2->leave($__internal_b98edd5272b1aae45b3e9843c7d77093ee3ec4535f71b4e13508ebd4e43008f2_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0687b8954dc88ee93fbc2361bf22ea3f396c06b5f4c857a7bc7c730e72c6f64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0687b8954dc88ee93fbc2361bf22ea3f396c06b5f4c857a7bc7c730e72c6f64f->enter($__internal_0687b8954dc88ee93fbc2361bf22ea3f396c06b5f4c857a7bc7c730e72c6f64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1452a612df58bbe2c16fee6233fc74a5d75360a4df27be253d15b3bc3791f552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1452a612df58bbe2c16fee6233fc74a5d75360a4df27be253d15b3bc3791f552->enter($__internal_1452a612df58bbe2c16fee6233fc74a5d75360a4df27be253d15b3bc3791f552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1452a612df58bbe2c16fee6233fc74a5d75360a4df27be253d15b3bc3791f552->leave($__internal_1452a612df58bbe2c16fee6233fc74a5d75360a4df27be253d15b3bc3791f552_prof);

        
        $__internal_0687b8954dc88ee93fbc2361bf22ea3f396c06b5f4c857a7bc7c730e72c6f64f->leave($__internal_0687b8954dc88ee93fbc2361bf22ea3f396c06b5f4c857a7bc7c730e72c6f64f_prof);

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
