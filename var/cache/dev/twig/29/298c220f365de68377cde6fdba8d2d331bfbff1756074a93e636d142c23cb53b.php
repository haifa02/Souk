<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08907de82a6f094dd0bd0695c39e414172e29c852536879e097372e869a73689 extends Twig_Template
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
        $__internal_8bb47c602b47da9ffb01b867baf54e515ddfcc4a6781e4c0b677eaf0ac802eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb47c602b47da9ffb01b867baf54e515ddfcc4a6781e4c0b677eaf0ac802eed->enter($__internal_8bb47c602b47da9ffb01b867baf54e515ddfcc4a6781e4c0b677eaf0ac802eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ffdf21fad35cae5c04f82eef32a405f66e06a616622a8beb99d9beec808cd97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdf21fad35cae5c04f82eef32a405f66e06a616622a8beb99d9beec808cd97f->enter($__internal_ffdf21fad35cae5c04f82eef32a405f66e06a616622a8beb99d9beec808cd97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb47c602b47da9ffb01b867baf54e515ddfcc4a6781e4c0b677eaf0ac802eed->leave($__internal_8bb47c602b47da9ffb01b867baf54e515ddfcc4a6781e4c0b677eaf0ac802eed_prof);

        
        $__internal_ffdf21fad35cae5c04f82eef32a405f66e06a616622a8beb99d9beec808cd97f->leave($__internal_ffdf21fad35cae5c04f82eef32a405f66e06a616622a8beb99d9beec808cd97f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f877376a4c6c253a9a2d3ef2150d017951b12b056a99f29961dfc0790f000308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f877376a4c6c253a9a2d3ef2150d017951b12b056a99f29961dfc0790f000308->enter($__internal_f877376a4c6c253a9a2d3ef2150d017951b12b056a99f29961dfc0790f000308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e5bf4928efe2a483c3ccaa09415b4a82573ed41eb4638fdddbfb9be919560a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5bf4928efe2a483c3ccaa09415b4a82573ed41eb4638fdddbfb9be919560a3->enter($__internal_2e5bf4928efe2a483c3ccaa09415b4a82573ed41eb4638fdddbfb9be919560a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e5bf4928efe2a483c3ccaa09415b4a82573ed41eb4638fdddbfb9be919560a3->leave($__internal_2e5bf4928efe2a483c3ccaa09415b4a82573ed41eb4638fdddbfb9be919560a3_prof);

        
        $__internal_f877376a4c6c253a9a2d3ef2150d017951b12b056a99f29961dfc0790f000308->leave($__internal_f877376a4c6c253a9a2d3ef2150d017951b12b056a99f29961dfc0790f000308_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19fbd0f3650dfa57ec7248ca1ec5ffda38288becd71582aca887658c4c8ca53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fbd0f3650dfa57ec7248ca1ec5ffda38288becd71582aca887658c4c8ca53e->enter($__internal_19fbd0f3650dfa57ec7248ca1ec5ffda38288becd71582aca887658c4c8ca53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_948a0eccf85e7ee2e74d656773c51be6ff02e43813da5e65e4527f4bb576038c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948a0eccf85e7ee2e74d656773c51be6ff02e43813da5e65e4527f4bb576038c->enter($__internal_948a0eccf85e7ee2e74d656773c51be6ff02e43813da5e65e4527f4bb576038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_948a0eccf85e7ee2e74d656773c51be6ff02e43813da5e65e4527f4bb576038c->leave($__internal_948a0eccf85e7ee2e74d656773c51be6ff02e43813da5e65e4527f4bb576038c_prof);

        
        $__internal_19fbd0f3650dfa57ec7248ca1ec5ffda38288becd71582aca887658c4c8ca53e->leave($__internal_19fbd0f3650dfa57ec7248ca1ec5ffda38288becd71582aca887658c4c8ca53e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a949a44f183724047cb4fc2d9f6f5287a86267a013f3c237b81087529176d44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a949a44f183724047cb4fc2d9f6f5287a86267a013f3c237b81087529176d44e->enter($__internal_a949a44f183724047cb4fc2d9f6f5287a86267a013f3c237b81087529176d44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_043c04d7d44c3560d65a12772493fd85b84c6c1daaa6442d6a1d14ba0a6423e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043c04d7d44c3560d65a12772493fd85b84c6c1daaa6442d6a1d14ba0a6423e0->enter($__internal_043c04d7d44c3560d65a12772493fd85b84c6c1daaa6442d6a1d14ba0a6423e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_043c04d7d44c3560d65a12772493fd85b84c6c1daaa6442d6a1d14ba0a6423e0->leave($__internal_043c04d7d44c3560d65a12772493fd85b84c6c1daaa6442d6a1d14ba0a6423e0_prof);

        
        $__internal_a949a44f183724047cb4fc2d9f6f5287a86267a013f3c237b81087529176d44e->leave($__internal_a949a44f183724047cb4fc2d9f6f5287a86267a013f3c237b81087529176d44e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
