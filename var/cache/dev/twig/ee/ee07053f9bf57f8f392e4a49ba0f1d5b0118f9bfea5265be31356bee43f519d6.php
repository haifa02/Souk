<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_93825f0c7238c4301ad41276fd1c63641f2734c0def4149794edf8f380ae0a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa0fb823ac4e1e78fb98dbca004bf568b944ae31f0bd1ba51e66c9f67efebeb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0fb823ac4e1e78fb98dbca004bf568b944ae31f0bd1ba51e66c9f67efebeb4->enter($__internal_fa0fb823ac4e1e78fb98dbca004bf568b944ae31f0bd1ba51e66c9f67efebeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bbc907852c8d28c31683938f04b3dea285083429865af376bec137c720730335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc907852c8d28c31683938f04b3dea285083429865af376bec137c720730335->enter($__internal_bbc907852c8d28c31683938f04b3dea285083429865af376bec137c720730335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa0fb823ac4e1e78fb98dbca004bf568b944ae31f0bd1ba51e66c9f67efebeb4->leave($__internal_fa0fb823ac4e1e78fb98dbca004bf568b944ae31f0bd1ba51e66c9f67efebeb4_prof);

        
        $__internal_bbc907852c8d28c31683938f04b3dea285083429865af376bec137c720730335->leave($__internal_bbc907852c8d28c31683938f04b3dea285083429865af376bec137c720730335_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de6ba1f389723a51490b5703074d0c7db71c849cc8884f0fcfff76bc3c717fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6ba1f389723a51490b5703074d0c7db71c849cc8884f0fcfff76bc3c717fe4->enter($__internal_de6ba1f389723a51490b5703074d0c7db71c849cc8884f0fcfff76bc3c717fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e910f48c26d67f4127c0792716182f71c2034e606e67dd6ce41afee92b5fcc17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e910f48c26d67f4127c0792716182f71c2034e606e67dd6ce41afee92b5fcc17->enter($__internal_e910f48c26d67f4127c0792716182f71c2034e606e67dd6ce41afee92b5fcc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e910f48c26d67f4127c0792716182f71c2034e606e67dd6ce41afee92b5fcc17->leave($__internal_e910f48c26d67f4127c0792716182f71c2034e606e67dd6ce41afee92b5fcc17_prof);

        
        $__internal_de6ba1f389723a51490b5703074d0c7db71c849cc8884f0fcfff76bc3c717fe4->leave($__internal_de6ba1f389723a51490b5703074d0c7db71c849cc8884f0fcfff76bc3c717fe4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af8e32a3b66e61fb5dfad8ec2f26d41f816338f0a3882aefca00246ac0b4e046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8e32a3b66e61fb5dfad8ec2f26d41f816338f0a3882aefca00246ac0b4e046->enter($__internal_af8e32a3b66e61fb5dfad8ec2f26d41f816338f0a3882aefca00246ac0b4e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0554d655471fb84847164540dca1a266d824a016cccab43e6eb19f526b060f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0554d655471fb84847164540dca1a266d824a016cccab43e6eb19f526b060f08->enter($__internal_0554d655471fb84847164540dca1a266d824a016cccab43e6eb19f526b060f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0554d655471fb84847164540dca1a266d824a016cccab43e6eb19f526b060f08->leave($__internal_0554d655471fb84847164540dca1a266d824a016cccab43e6eb19f526b060f08_prof);

        
        $__internal_af8e32a3b66e61fb5dfad8ec2f26d41f816338f0a3882aefca00246ac0b4e046->leave($__internal_af8e32a3b66e61fb5dfad8ec2f26d41f816338f0a3882aefca00246ac0b4e046_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
