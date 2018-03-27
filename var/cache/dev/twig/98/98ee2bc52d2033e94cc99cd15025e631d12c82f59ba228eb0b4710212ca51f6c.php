<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1f931b00601e8941fae97e00dbba19f96432c6f7939e59c760ee1f7a906567f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e989819f961fbe5c0d509a6a27d92347173fef460c61eb66d97fa9c365e5c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e989819f961fbe5c0d509a6a27d92347173fef460c61eb66d97fa9c365e5c18->enter($__internal_2e989819f961fbe5c0d509a6a27d92347173fef460c61eb66d97fa9c365e5c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_7d6a83c8e5461c049398824ea77f13941e89fdacc56533a33fc14339e1f7e37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6a83c8e5461c049398824ea77f13941e89fdacc56533a33fc14339e1f7e37d->enter($__internal_7d6a83c8e5461c049398824ea77f13941e89fdacc56533a33fc14339e1f7e37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e989819f961fbe5c0d509a6a27d92347173fef460c61eb66d97fa9c365e5c18->leave($__internal_2e989819f961fbe5c0d509a6a27d92347173fef460c61eb66d97fa9c365e5c18_prof);

        
        $__internal_7d6a83c8e5461c049398824ea77f13941e89fdacc56533a33fc14339e1f7e37d->leave($__internal_7d6a83c8e5461c049398824ea77f13941e89fdacc56533a33fc14339e1f7e37d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62fb3675f1aae6adeb7280708883f19aff5641439007ff0d91e6421d3a793eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fb3675f1aae6adeb7280708883f19aff5641439007ff0d91e6421d3a793eb9->enter($__internal_62fb3675f1aae6adeb7280708883f19aff5641439007ff0d91e6421d3a793eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c33d902dae15910c46c28793e80a53b45a69a20e7520d8eea7380a43ccd1621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c33d902dae15910c46c28793e80a53b45a69a20e7520d8eea7380a43ccd1621->enter($__internal_4c33d902dae15910c46c28793e80a53b45a69a20e7520d8eea7380a43ccd1621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4c33d902dae15910c46c28793e80a53b45a69a20e7520d8eea7380a43ccd1621->leave($__internal_4c33d902dae15910c46c28793e80a53b45a69a20e7520d8eea7380a43ccd1621_prof);

        
        $__internal_62fb3675f1aae6adeb7280708883f19aff5641439007ff0d91e6421d3a793eb9->leave($__internal_62fb3675f1aae6adeb7280708883f19aff5641439007ff0d91e6421d3a793eb9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
