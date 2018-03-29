<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4988eb23707d8fdeb5a3076d68e58262a30b1e39da2d608b743765576fe38c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5eb3df932b8fcf847f737289b6f12887572751c8536b15070a4be4d6c67716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5eb3df932b8fcf847f737289b6f12887572751c8536b15070a4be4d6c67716->enter($__internal_0a5eb3df932b8fcf847f737289b6f12887572751c8536b15070a4be4d6c67716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_661dd38af9ff140165ca08922361a98c83f8dbbc8bf3c6c2173232fc664002a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661dd38af9ff140165ca08922361a98c83f8dbbc8bf3c6c2173232fc664002a4->enter($__internal_661dd38af9ff140165ca08922361a98c83f8dbbc8bf3c6c2173232fc664002a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5eb3df932b8fcf847f737289b6f12887572751c8536b15070a4be4d6c67716->leave($__internal_0a5eb3df932b8fcf847f737289b6f12887572751c8536b15070a4be4d6c67716_prof);

        
        $__internal_661dd38af9ff140165ca08922361a98c83f8dbbc8bf3c6c2173232fc664002a4->leave($__internal_661dd38af9ff140165ca08922361a98c83f8dbbc8bf3c6c2173232fc664002a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e00abfc8f84aa365b53aaa276eff2bd43417382c9f17cf40aa99966deaeb9774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00abfc8f84aa365b53aaa276eff2bd43417382c9f17cf40aa99966deaeb9774->enter($__internal_e00abfc8f84aa365b53aaa276eff2bd43417382c9f17cf40aa99966deaeb9774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_999c86bd3a2808e01f523bceca7c089c32f298366f14115642585c757020ed6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999c86bd3a2808e01f523bceca7c089c32f298366f14115642585c757020ed6f->enter($__internal_999c86bd3a2808e01f523bceca7c089c32f298366f14115642585c757020ed6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_999c86bd3a2808e01f523bceca7c089c32f298366f14115642585c757020ed6f->leave($__internal_999c86bd3a2808e01f523bceca7c089c32f298366f14115642585c757020ed6f_prof);

        
        $__internal_e00abfc8f84aa365b53aaa276eff2bd43417382c9f17cf40aa99966deaeb9774->leave($__internal_e00abfc8f84aa365b53aaa276eff2bd43417382c9f17cf40aa99966deaeb9774_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d4820d9f2f52fc25191ab78d73aed41e1389ae02ed83baad17023e1b5b988e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d4820d9f2f52fc25191ab78d73aed41e1389ae02ed83baad17023e1b5b988e->enter($__internal_d3d4820d9f2f52fc25191ab78d73aed41e1389ae02ed83baad17023e1b5b988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11712844b4aff7eb41bd05837e2596e6164d16ebe0d4e111b9d64999552b0336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11712844b4aff7eb41bd05837e2596e6164d16ebe0d4e111b9d64999552b0336->enter($__internal_11712844b4aff7eb41bd05837e2596e6164d16ebe0d4e111b9d64999552b0336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_11712844b4aff7eb41bd05837e2596e6164d16ebe0d4e111b9d64999552b0336->leave($__internal_11712844b4aff7eb41bd05837e2596e6164d16ebe0d4e111b9d64999552b0336_prof);

        
        $__internal_d3d4820d9f2f52fc25191ab78d73aed41e1389ae02ed83baad17023e1b5b988e->leave($__internal_d3d4820d9f2f52fc25191ab78d73aed41e1389ae02ed83baad17023e1b5b988e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
