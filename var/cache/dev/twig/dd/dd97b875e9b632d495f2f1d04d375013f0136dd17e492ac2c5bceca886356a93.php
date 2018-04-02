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
        $__internal_cf6e418663af8c94833812d9924ec5d0933e39e64573d6de31e39e5ec2fe0667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6e418663af8c94833812d9924ec5d0933e39e64573d6de31e39e5ec2fe0667->enter($__internal_cf6e418663af8c94833812d9924ec5d0933e39e64573d6de31e39e5ec2fe0667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_62b6517cf64f7658266e23dce5e3d7e8492d6cada9e992095d927ae96c9f8227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b6517cf64f7658266e23dce5e3d7e8492d6cada9e992095d927ae96c9f8227->enter($__internal_62b6517cf64f7658266e23dce5e3d7e8492d6cada9e992095d927ae96c9f8227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf6e418663af8c94833812d9924ec5d0933e39e64573d6de31e39e5ec2fe0667->leave($__internal_cf6e418663af8c94833812d9924ec5d0933e39e64573d6de31e39e5ec2fe0667_prof);

        
        $__internal_62b6517cf64f7658266e23dce5e3d7e8492d6cada9e992095d927ae96c9f8227->leave($__internal_62b6517cf64f7658266e23dce5e3d7e8492d6cada9e992095d927ae96c9f8227_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aa3a401511e7e258b4b07044fd2d64b974339c9011e277b6ac907db9ce56ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa3a401511e7e258b4b07044fd2d64b974339c9011e277b6ac907db9ce56ec8->enter($__internal_8aa3a401511e7e258b4b07044fd2d64b974339c9011e277b6ac907db9ce56ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3fe5609056874ae52376b8be676cff57cf462ac65c0abe994ba072314b34ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fe5609056874ae52376b8be676cff57cf462ac65c0abe994ba072314b34ea3->enter($__internal_e3fe5609056874ae52376b8be676cff57cf462ac65c0abe994ba072314b34ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e3fe5609056874ae52376b8be676cff57cf462ac65c0abe994ba072314b34ea3->leave($__internal_e3fe5609056874ae52376b8be676cff57cf462ac65c0abe994ba072314b34ea3_prof);

        
        $__internal_8aa3a401511e7e258b4b07044fd2d64b974339c9011e277b6ac907db9ce56ec8->leave($__internal_8aa3a401511e7e258b4b07044fd2d64b974339c9011e277b6ac907db9ce56ec8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b734947caf36f4b124a618d38308e6483a515d479a9c5ad84470cf09af574c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b734947caf36f4b124a618d38308e6483a515d479a9c5ad84470cf09af574c21->enter($__internal_b734947caf36f4b124a618d38308e6483a515d479a9c5ad84470cf09af574c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6aa0f1373a06ca89f83636b53c4d0583dff9bf8ade0c149f6b6b8d9238fd16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6aa0f1373a06ca89f83636b53c4d0583dff9bf8ade0c149f6b6b8d9238fd16c->enter($__internal_b6aa0f1373a06ca89f83636b53c4d0583dff9bf8ade0c149f6b6b8d9238fd16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6aa0f1373a06ca89f83636b53c4d0583dff9bf8ade0c149f6b6b8d9238fd16c->leave($__internal_b6aa0f1373a06ca89f83636b53c4d0583dff9bf8ade0c149f6b6b8d9238fd16c_prof);

        
        $__internal_b734947caf36f4b124a618d38308e6483a515d479a9c5ad84470cf09af574c21->leave($__internal_b734947caf36f4b124a618d38308e6483a515d479a9c5ad84470cf09af574c21_prof);

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
