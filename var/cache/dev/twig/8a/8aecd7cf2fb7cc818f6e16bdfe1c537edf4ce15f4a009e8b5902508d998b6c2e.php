<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3fb4c80eaf5afbbc05aa3fbb5a0767e442eb4c254215975a6a62c077d20ce091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6774839e35f279a0af75396b4292091873238ffe771d700f70decc353dadde01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6774839e35f279a0af75396b4292091873238ffe771d700f70decc353dadde01->enter($__internal_6774839e35f279a0af75396b4292091873238ffe771d700f70decc353dadde01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_2eb3471964adddcad18368b409dcf36a388e8d32c719275ac26014d52eb8cb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb3471964adddcad18368b409dcf36a388e8d32c719275ac26014d52eb8cb0a->enter($__internal_2eb3471964adddcad18368b409dcf36a388e8d32c719275ac26014d52eb8cb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6774839e35f279a0af75396b4292091873238ffe771d700f70decc353dadde01->leave($__internal_6774839e35f279a0af75396b4292091873238ffe771d700f70decc353dadde01_prof);

        
        $__internal_2eb3471964adddcad18368b409dcf36a388e8d32c719275ac26014d52eb8cb0a->leave($__internal_2eb3471964adddcad18368b409dcf36a388e8d32c719275ac26014d52eb8cb0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10974dc8d1c41a36423dd2b20cb95f708a2bbf454ab3cfd3b4ea2922fb9445f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10974dc8d1c41a36423dd2b20cb95f708a2bbf454ab3cfd3b4ea2922fb9445f8->enter($__internal_10974dc8d1c41a36423dd2b20cb95f708a2bbf454ab3cfd3b4ea2922fb9445f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c85ae5615313ebf8eeff9610a2f243c83ed4a3b178cc21685c5fdab499d91f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85ae5615313ebf8eeff9610a2f243c83ed4a3b178cc21685c5fdab499d91f98->enter($__internal_c85ae5615313ebf8eeff9610a2f243c83ed4a3b178cc21685c5fdab499d91f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c85ae5615313ebf8eeff9610a2f243c83ed4a3b178cc21685c5fdab499d91f98->leave($__internal_c85ae5615313ebf8eeff9610a2f243c83ed4a3b178cc21685c5fdab499d91f98_prof);

        
        $__internal_10974dc8d1c41a36423dd2b20cb95f708a2bbf454ab3cfd3b4ea2922fb9445f8->leave($__internal_10974dc8d1c41a36423dd2b20cb95f708a2bbf454ab3cfd3b4ea2922fb9445f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
