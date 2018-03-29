<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
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
        $__internal_b2f2ac3547c8aae6c049c9c1175fa1de5c7431dfa30277a65b8fbd3ab277318c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f2ac3547c8aae6c049c9c1175fa1de5c7431dfa30277a65b8fbd3ab277318c->enter($__internal_b2f2ac3547c8aae6c049c9c1175fa1de5c7431dfa30277a65b8fbd3ab277318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_47a7598655d2e324ac07734b46c0c2ba826658c9624ac63b45b5e57f30c0ea68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a7598655d2e324ac07734b46c0c2ba826658c9624ac63b45b5e57f30c0ea68->enter($__internal_47a7598655d2e324ac07734b46c0c2ba826658c9624ac63b45b5e57f30c0ea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2f2ac3547c8aae6c049c9c1175fa1de5c7431dfa30277a65b8fbd3ab277318c->leave($__internal_b2f2ac3547c8aae6c049c9c1175fa1de5c7431dfa30277a65b8fbd3ab277318c_prof);

        
        $__internal_47a7598655d2e324ac07734b46c0c2ba826658c9624ac63b45b5e57f30c0ea68->leave($__internal_47a7598655d2e324ac07734b46c0c2ba826658c9624ac63b45b5e57f30c0ea68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e731d5f4eb236c47e9341975604fa094de166002b9dd2e76b146451ac7cba16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e731d5f4eb236c47e9341975604fa094de166002b9dd2e76b146451ac7cba16->enter($__internal_4e731d5f4eb236c47e9341975604fa094de166002b9dd2e76b146451ac7cba16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f6848a5485604e396c778d723e8e8723a9fafd3cbd9e25aa0f2495ffdfc9475c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6848a5485604e396c778d723e8e8723a9fafd3cbd9e25aa0f2495ffdfc9475c->enter($__internal_f6848a5485604e396c778d723e8e8723a9fafd3cbd9e25aa0f2495ffdfc9475c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f6848a5485604e396c778d723e8e8723a9fafd3cbd9e25aa0f2495ffdfc9475c->leave($__internal_f6848a5485604e396c778d723e8e8723a9fafd3cbd9e25aa0f2495ffdfc9475c_prof);

        
        $__internal_4e731d5f4eb236c47e9341975604fa094de166002b9dd2e76b146451ac7cba16->leave($__internal_4e731d5f4eb236c47e9341975604fa094de166002b9dd2e76b146451ac7cba16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d91aa8017b0b939a3a3998fa024edb23efad006025288734c9b1b37851283a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91aa8017b0b939a3a3998fa024edb23efad006025288734c9b1b37851283a6d->enter($__internal_d91aa8017b0b939a3a3998fa024edb23efad006025288734c9b1b37851283a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f25e3cabf3b960fc5bbf028530863918cc1eb8233f896695beb6c800687b6337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25e3cabf3b960fc5bbf028530863918cc1eb8233f896695beb6c800687b6337->enter($__internal_f25e3cabf3b960fc5bbf028530863918cc1eb8233f896695beb6c800687b6337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f25e3cabf3b960fc5bbf028530863918cc1eb8233f896695beb6c800687b6337->leave($__internal_f25e3cabf3b960fc5bbf028530863918cc1eb8233f896695beb6c800687b6337_prof);

        
        $__internal_d91aa8017b0b939a3a3998fa024edb23efad006025288734c9b1b37851283a6d->leave($__internal_d91aa8017b0b939a3a3998fa024edb23efad006025288734c9b1b37851283a6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3da7004324f86278058a090f5c3276309fc76d1abf332e34264d651beb98925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3da7004324f86278058a090f5c3276309fc76d1abf332e34264d651beb98925->enter($__internal_a3da7004324f86278058a090f5c3276309fc76d1abf332e34264d651beb98925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a06230b3ec108054a6a48e3aa2084cc61f87b95c755102b03b7ff55dbfae179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a06230b3ec108054a6a48e3aa2084cc61f87b95c755102b03b7ff55dbfae179->enter($__internal_3a06230b3ec108054a6a48e3aa2084cc61f87b95c755102b03b7ff55dbfae179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a06230b3ec108054a6a48e3aa2084cc61f87b95c755102b03b7ff55dbfae179->leave($__internal_3a06230b3ec108054a6a48e3aa2084cc61f87b95c755102b03b7ff55dbfae179_prof);

        
        $__internal_a3da7004324f86278058a090f5c3276309fc76d1abf332e34264d651beb98925->leave($__internal_a3da7004324f86278058a090f5c3276309fc76d1abf332e34264d651beb98925_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
