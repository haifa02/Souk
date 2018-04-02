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
        $__internal_673c711c9a96bcd05d06f616596284116002de737de4bf46063b9d2ff1d636b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673c711c9a96bcd05d06f616596284116002de737de4bf46063b9d2ff1d636b2->enter($__internal_673c711c9a96bcd05d06f616596284116002de737de4bf46063b9d2ff1d636b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8f1d9f10a6af2759417e458957142ad6906b15fe5640c870e54b930ad83b9c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1d9f10a6af2759417e458957142ad6906b15fe5640c870e54b930ad83b9c8d->enter($__internal_8f1d9f10a6af2759417e458957142ad6906b15fe5640c870e54b930ad83b9c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673c711c9a96bcd05d06f616596284116002de737de4bf46063b9d2ff1d636b2->leave($__internal_673c711c9a96bcd05d06f616596284116002de737de4bf46063b9d2ff1d636b2_prof);

        
        $__internal_8f1d9f10a6af2759417e458957142ad6906b15fe5640c870e54b930ad83b9c8d->leave($__internal_8f1d9f10a6af2759417e458957142ad6906b15fe5640c870e54b930ad83b9c8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4af73e3250f7eddf167ede22425c1a798abe66388f2cf6a36fc0572ddc76228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4af73e3250f7eddf167ede22425c1a798abe66388f2cf6a36fc0572ddc76228->enter($__internal_f4af73e3250f7eddf167ede22425c1a798abe66388f2cf6a36fc0572ddc76228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3e25b049db3da27212044747daca3ff21506a6ccd969bc1fdc3b14ac02934da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e25b049db3da27212044747daca3ff21506a6ccd969bc1fdc3b14ac02934da0->enter($__internal_3e25b049db3da27212044747daca3ff21506a6ccd969bc1fdc3b14ac02934da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3e25b049db3da27212044747daca3ff21506a6ccd969bc1fdc3b14ac02934da0->leave($__internal_3e25b049db3da27212044747daca3ff21506a6ccd969bc1fdc3b14ac02934da0_prof);

        
        $__internal_f4af73e3250f7eddf167ede22425c1a798abe66388f2cf6a36fc0572ddc76228->leave($__internal_f4af73e3250f7eddf167ede22425c1a798abe66388f2cf6a36fc0572ddc76228_prof);

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
