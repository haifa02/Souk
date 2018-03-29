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
        $__internal_1c47aa1a0e0fe5d81c29f8ed0889a2e0a97c7031912eafc20a2a61249e1f271b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c47aa1a0e0fe5d81c29f8ed0889a2e0a97c7031912eafc20a2a61249e1f271b->enter($__internal_1c47aa1a0e0fe5d81c29f8ed0889a2e0a97c7031912eafc20a2a61249e1f271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_472406034e19d19a049ce370aa32a3b47525d7dd42a1d545ce7e361dedd793c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472406034e19d19a049ce370aa32a3b47525d7dd42a1d545ce7e361dedd793c1->enter($__internal_472406034e19d19a049ce370aa32a3b47525d7dd42a1d545ce7e361dedd793c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c47aa1a0e0fe5d81c29f8ed0889a2e0a97c7031912eafc20a2a61249e1f271b->leave($__internal_1c47aa1a0e0fe5d81c29f8ed0889a2e0a97c7031912eafc20a2a61249e1f271b_prof);

        
        $__internal_472406034e19d19a049ce370aa32a3b47525d7dd42a1d545ce7e361dedd793c1->leave($__internal_472406034e19d19a049ce370aa32a3b47525d7dd42a1d545ce7e361dedd793c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8f0ed1b6e36220ee3b7b4339cd2e94cbca1ceeb6f8e4d69e28fb16f55a9425b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f0ed1b6e36220ee3b7b4339cd2e94cbca1ceeb6f8e4d69e28fb16f55a9425b->enter($__internal_c8f0ed1b6e36220ee3b7b4339cd2e94cbca1ceeb6f8e4d69e28fb16f55a9425b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9e68be32e887f38fa8edee015e231acc4bdaddf337ed36384ad9020fc620637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e68be32e887f38fa8edee015e231acc4bdaddf337ed36384ad9020fc620637->enter($__internal_b9e68be32e887f38fa8edee015e231acc4bdaddf337ed36384ad9020fc620637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b9e68be32e887f38fa8edee015e231acc4bdaddf337ed36384ad9020fc620637->leave($__internal_b9e68be32e887f38fa8edee015e231acc4bdaddf337ed36384ad9020fc620637_prof);

        
        $__internal_c8f0ed1b6e36220ee3b7b4339cd2e94cbca1ceeb6f8e4d69e28fb16f55a9425b->leave($__internal_c8f0ed1b6e36220ee3b7b4339cd2e94cbca1ceeb6f8e4d69e28fb16f55a9425b_prof);

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
