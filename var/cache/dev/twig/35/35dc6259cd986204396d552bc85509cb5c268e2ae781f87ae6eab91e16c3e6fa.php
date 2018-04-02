<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6fee036cb0d8c0f40c4092e13e471d3627b7439960e874cb4032f4d9918f6a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af95983c713127ea9f11e158278947d61a50b3537ac02f9ccf9f1882e140babc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af95983c713127ea9f11e158278947d61a50b3537ac02f9ccf9f1882e140babc->enter($__internal_af95983c713127ea9f11e158278947d61a50b3537ac02f9ccf9f1882e140babc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3d72ec3d7ecdc40ba921133f767a30aeab1b50ec53a4335c4b50a42cd9644488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d72ec3d7ecdc40ba921133f767a30aeab1b50ec53a4335c4b50a42cd9644488->enter($__internal_3d72ec3d7ecdc40ba921133f767a30aeab1b50ec53a4335c4b50a42cd9644488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af95983c713127ea9f11e158278947d61a50b3537ac02f9ccf9f1882e140babc->leave($__internal_af95983c713127ea9f11e158278947d61a50b3537ac02f9ccf9f1882e140babc_prof);

        
        $__internal_3d72ec3d7ecdc40ba921133f767a30aeab1b50ec53a4335c4b50a42cd9644488->leave($__internal_3d72ec3d7ecdc40ba921133f767a30aeab1b50ec53a4335c4b50a42cd9644488_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc13f7de1a1910fadb55c63547624f6a1fe79fee9f029114fdea90bc7333d5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc13f7de1a1910fadb55c63547624f6a1fe79fee9f029114fdea90bc7333d5c9->enter($__internal_cc13f7de1a1910fadb55c63547624f6a1fe79fee9f029114fdea90bc7333d5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2c86c0e46f7721ef8006e99b8c1cff1a2f80ad1799e8b7c2fdb208e75ac5ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c86c0e46f7721ef8006e99b8c1cff1a2f80ad1799e8b7c2fdb208e75ac5ba3->enter($__internal_b2c86c0e46f7721ef8006e99b8c1cff1a2f80ad1799e8b7c2fdb208e75ac5ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b2c86c0e46f7721ef8006e99b8c1cff1a2f80ad1799e8b7c2fdb208e75ac5ba3->leave($__internal_b2c86c0e46f7721ef8006e99b8c1cff1a2f80ad1799e8b7c2fdb208e75ac5ba3_prof);

        
        $__internal_cc13f7de1a1910fadb55c63547624f6a1fe79fee9f029114fdea90bc7333d5c9->leave($__internal_cc13f7de1a1910fadb55c63547624f6a1fe79fee9f029114fdea90bc7333d5c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
