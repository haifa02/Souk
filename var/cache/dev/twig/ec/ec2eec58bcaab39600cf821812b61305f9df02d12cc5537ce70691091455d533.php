<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_66cde3fa614b4473aaf97e354da987c11b1bc6853a5edf8c1604f014318b51ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_aec2c1d1f206f7fbbab6bb7dca5023c525e5dc870ba593ba317776310f13ce2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec2c1d1f206f7fbbab6bb7dca5023c525e5dc870ba593ba317776310f13ce2c->enter($__internal_aec2c1d1f206f7fbbab6bb7dca5023c525e5dc870ba593ba317776310f13ce2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_2cb13dbdbeb5a7e35f6f3cd8e5a614f4a1865dc9fd9eea729e3cb9ad9bfb8de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb13dbdbeb5a7e35f6f3cd8e5a614f4a1865dc9fd9eea729e3cb9ad9bfb8de8->enter($__internal_2cb13dbdbeb5a7e35f6f3cd8e5a614f4a1865dc9fd9eea729e3cb9ad9bfb8de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec2c1d1f206f7fbbab6bb7dca5023c525e5dc870ba593ba317776310f13ce2c->leave($__internal_aec2c1d1f206f7fbbab6bb7dca5023c525e5dc870ba593ba317776310f13ce2c_prof);

        
        $__internal_2cb13dbdbeb5a7e35f6f3cd8e5a614f4a1865dc9fd9eea729e3cb9ad9bfb8de8->leave($__internal_2cb13dbdbeb5a7e35f6f3cd8e5a614f4a1865dc9fd9eea729e3cb9ad9bfb8de8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4982ae0051d1a9ebcf16f9ae0fdb196a92d9523761173d54111c5ccbbbf93dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4982ae0051d1a9ebcf16f9ae0fdb196a92d9523761173d54111c5ccbbbf93dbb->enter($__internal_4982ae0051d1a9ebcf16f9ae0fdb196a92d9523761173d54111c5ccbbbf93dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68aad101b6642d301fe00c8b604793c88f28aab976f516348fef2099dc3847d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68aad101b6642d301fe00c8b604793c88f28aab976f516348fef2099dc3847d7->enter($__internal_68aad101b6642d301fe00c8b604793c88f28aab976f516348fef2099dc3847d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_68aad101b6642d301fe00c8b604793c88f28aab976f516348fef2099dc3847d7->leave($__internal_68aad101b6642d301fe00c8b604793c88f28aab976f516348fef2099dc3847d7_prof);

        
        $__internal_4982ae0051d1a9ebcf16f9ae0fdb196a92d9523761173d54111c5ccbbbf93dbb->leave($__internal_4982ae0051d1a9ebcf16f9ae0fdb196a92d9523761173d54111c5ccbbbf93dbb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
