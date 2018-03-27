<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cd5e8193fb3064e7cea16eb3b11b4d9dfcf51bdc07d54b4d599e5c73f09b3134 extends Twig_Template
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
        $__internal_1cf31157d189c2a4985c4f9b493e955a280ddb120a16e3a81f2468388d2b6217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf31157d189c2a4985c4f9b493e955a280ddb120a16e3a81f2468388d2b6217->enter($__internal_1cf31157d189c2a4985c4f9b493e955a280ddb120a16e3a81f2468388d2b6217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_137e90f052d96bceb72433b0e2c68b3151b14eb0034654a142f56956f667ffb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137e90f052d96bceb72433b0e2c68b3151b14eb0034654a142f56956f667ffb8->enter($__internal_137e90f052d96bceb72433b0e2c68b3151b14eb0034654a142f56956f667ffb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf31157d189c2a4985c4f9b493e955a280ddb120a16e3a81f2468388d2b6217->leave($__internal_1cf31157d189c2a4985c4f9b493e955a280ddb120a16e3a81f2468388d2b6217_prof);

        
        $__internal_137e90f052d96bceb72433b0e2c68b3151b14eb0034654a142f56956f667ffb8->leave($__internal_137e90f052d96bceb72433b0e2c68b3151b14eb0034654a142f56956f667ffb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c17fc4ff92b8daf9b94a713e0d12b65a356256af1be5e03c6990d481617229e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c17fc4ff92b8daf9b94a713e0d12b65a356256af1be5e03c6990d481617229e->enter($__internal_3c17fc4ff92b8daf9b94a713e0d12b65a356256af1be5e03c6990d481617229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6bffde6c879549c772b96bafb5496e4ce4049c4bb766cfd1934b06a43f638e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bffde6c879549c772b96bafb5496e4ce4049c4bb766cfd1934b06a43f638e17->enter($__internal_6bffde6c879549c772b96bafb5496e4ce4049c4bb766cfd1934b06a43f638e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6bffde6c879549c772b96bafb5496e4ce4049c4bb766cfd1934b06a43f638e17->leave($__internal_6bffde6c879549c772b96bafb5496e4ce4049c4bb766cfd1934b06a43f638e17_prof);

        
        $__internal_3c17fc4ff92b8daf9b94a713e0d12b65a356256af1be5e03c6990d481617229e->leave($__internal_3c17fc4ff92b8daf9b94a713e0d12b65a356256af1be5e03c6990d481617229e_prof);

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
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/dev/souk/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
