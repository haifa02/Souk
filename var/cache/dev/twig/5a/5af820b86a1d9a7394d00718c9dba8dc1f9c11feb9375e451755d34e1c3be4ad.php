<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_7d0979fcb7d71c1d00f7eee260fb009f3e745abe88f090339bdf7b9800710f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e6037d97d8609c7e422e5072d1b08f5f8295c1222dd8f4aeb00fc9fb82a8b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6037d97d8609c7e422e5072d1b08f5f8295c1222dd8f4aeb00fc9fb82a8b95->enter($__internal_9e6037d97d8609c7e422e5072d1b08f5f8295c1222dd8f4aeb00fc9fb82a8b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_6ed73b3a8e7562d1fa97c7667583224ca577f73ecc3c0d2e31dbe473289fad50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed73b3a8e7562d1fa97c7667583224ca577f73ecc3c0d2e31dbe473289fad50->enter($__internal_6ed73b3a8e7562d1fa97c7667583224ca577f73ecc3c0d2e31dbe473289fad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9e6037d97d8609c7e422e5072d1b08f5f8295c1222dd8f4aeb00fc9fb82a8b95->leave($__internal_9e6037d97d8609c7e422e5072d1b08f5f8295c1222dd8f4aeb00fc9fb82a8b95_prof);

        
        $__internal_6ed73b3a8e7562d1fa97c7667583224ca577f73ecc3c0d2e31dbe473289fad50->leave($__internal_6ed73b3a8e7562d1fa97c7667583224ca577f73ecc3c0d2e31dbe473289fad50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/show_content.html.twig");
    }
}
