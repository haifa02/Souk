<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7feb8c90ea24daa984860a69ec31cad09d316804d573ff841303c214d1391fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e848d4531e28f0f5b3ca6654393ec65f3324310b25273c5ca9a928f6a3b21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e848d4531e28f0f5b3ca6654393ec65f3324310b25273c5ca9a928f6a3b21c->enter($__internal_18e848d4531e28f0f5b3ca6654393ec65f3324310b25273c5ca9a928f6a3b21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c78723539f7decd3f81cfb0cc490bf734e66dc67233ab646730d77aac8e6ede5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78723539f7decd3f81cfb0cc490bf734e66dc67233ab646730d77aac8e6ede5->enter($__internal_c78723539f7decd3f81cfb0cc490bf734e66dc67233ab646730d77aac8e6ede5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e848d4531e28f0f5b3ca6654393ec65f3324310b25273c5ca9a928f6a3b21c->leave($__internal_18e848d4531e28f0f5b3ca6654393ec65f3324310b25273c5ca9a928f6a3b21c_prof);

        
        $__internal_c78723539f7decd3f81cfb0cc490bf734e66dc67233ab646730d77aac8e6ede5->leave($__internal_c78723539f7decd3f81cfb0cc490bf734e66dc67233ab646730d77aac8e6ede5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f171e138160bf942ae429d1a88e454800561040953cfcf1a4aee83f80ca7883f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f171e138160bf942ae429d1a88e454800561040953cfcf1a4aee83f80ca7883f->enter($__internal_f171e138160bf942ae429d1a88e454800561040953cfcf1a4aee83f80ca7883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c71c616a0b4afcd2015104c68e5c41ee074ff8ed9b5b080039a11d8e77a7b49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71c616a0b4afcd2015104c68e5c41ee074ff8ed9b5b080039a11d8e77a7b49e->enter($__internal_c71c616a0b4afcd2015104c68e5c41ee074ff8ed9b5b080039a11d8e77a7b49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c71c616a0b4afcd2015104c68e5c41ee074ff8ed9b5b080039a11d8e77a7b49e->leave($__internal_c71c616a0b4afcd2015104c68e5c41ee074ff8ed9b5b080039a11d8e77a7b49e_prof);

        
        $__internal_f171e138160bf942ae429d1a88e454800561040953cfcf1a4aee83f80ca7883f->leave($__internal_f171e138160bf942ae429d1a88e454800561040953cfcf1a4aee83f80ca7883f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c664576240d3fd746c40812e1f26e9c66506551b25bc0c1e1060258bc7cc3903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c664576240d3fd746c40812e1f26e9c66506551b25bc0c1e1060258bc7cc3903->enter($__internal_c664576240d3fd746c40812e1f26e9c66506551b25bc0c1e1060258bc7cc3903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f2da6d62e934b80488e86902a2bffa51d2857862a615f1853aa39519e88306af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2da6d62e934b80488e86902a2bffa51d2857862a615f1853aa39519e88306af->enter($__internal_f2da6d62e934b80488e86902a2bffa51d2857862a615f1853aa39519e88306af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2da6d62e934b80488e86902a2bffa51d2857862a615f1853aa39519e88306af->leave($__internal_f2da6d62e934b80488e86902a2bffa51d2857862a615f1853aa39519e88306af_prof);

        
        $__internal_c664576240d3fd746c40812e1f26e9c66506551b25bc0c1e1060258bc7cc3903->leave($__internal_c664576240d3fd746c40812e1f26e9c66506551b25bc0c1e1060258bc7cc3903_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6724a1cd69a37e86199e976ee3e2847611d7b33e5cc14eb5fc931c56a86f049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6724a1cd69a37e86199e976ee3e2847611d7b33e5cc14eb5fc931c56a86f049->enter($__internal_c6724a1cd69a37e86199e976ee3e2847611d7b33e5cc14eb5fc931c56a86f049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69012d277f9b3efa71bdd1c9e71f2df6c598c258b82a28e2c7079ca4683e5c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69012d277f9b3efa71bdd1c9e71f2df6c598c258b82a28e2c7079ca4683e5c3c->enter($__internal_69012d277f9b3efa71bdd1c9e71f2df6c598c258b82a28e2c7079ca4683e5c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69012d277f9b3efa71bdd1c9e71f2df6c598c258b82a28e2c7079ca4683e5c3c->leave($__internal_69012d277f9b3efa71bdd1c9e71f2df6c598c258b82a28e2c7079ca4683e5c3c_prof);

        
        $__internal_c6724a1cd69a37e86199e976ee3e2847611d7b33e5cc14eb5fc931c56a86f049->leave($__internal_c6724a1cd69a37e86199e976ee3e2847611d7b33e5cc14eb5fc931c56a86f049_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
