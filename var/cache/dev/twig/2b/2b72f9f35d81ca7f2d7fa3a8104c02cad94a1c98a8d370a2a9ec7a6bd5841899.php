<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
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
        $__internal_7be9222c34eda72d4e1104aeec31e0bc6cde21983fcab28afbe3026f3d195d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be9222c34eda72d4e1104aeec31e0bc6cde21983fcab28afbe3026f3d195d35->enter($__internal_7be9222c34eda72d4e1104aeec31e0bc6cde21983fcab28afbe3026f3d195d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bcce3307b0d88ab5a9a8fdbf3a552bfa950528ccfbbb7e026a6fc491c9ae599a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcce3307b0d88ab5a9a8fdbf3a552bfa950528ccfbbb7e026a6fc491c9ae599a->enter($__internal_bcce3307b0d88ab5a9a8fdbf3a552bfa950528ccfbbb7e026a6fc491c9ae599a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be9222c34eda72d4e1104aeec31e0bc6cde21983fcab28afbe3026f3d195d35->leave($__internal_7be9222c34eda72d4e1104aeec31e0bc6cde21983fcab28afbe3026f3d195d35_prof);

        
        $__internal_bcce3307b0d88ab5a9a8fdbf3a552bfa950528ccfbbb7e026a6fc491c9ae599a->leave($__internal_bcce3307b0d88ab5a9a8fdbf3a552bfa950528ccfbbb7e026a6fc491c9ae599a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_816ac6d31428027a3eca19b5f7a994c0a8728e1d48f568e1c6f1bd797143fdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816ac6d31428027a3eca19b5f7a994c0a8728e1d48f568e1c6f1bd797143fdc1->enter($__internal_816ac6d31428027a3eca19b5f7a994c0a8728e1d48f568e1c6f1bd797143fdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0143ae0a8892e09c9eef526e7ba91f4f1ce88e545b2f4d954a727e498ef2d9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0143ae0a8892e09c9eef526e7ba91f4f1ce88e545b2f4d954a727e498ef2d9b6->enter($__internal_0143ae0a8892e09c9eef526e7ba91f4f1ce88e545b2f4d954a727e498ef2d9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0143ae0a8892e09c9eef526e7ba91f4f1ce88e545b2f4d954a727e498ef2d9b6->leave($__internal_0143ae0a8892e09c9eef526e7ba91f4f1ce88e545b2f4d954a727e498ef2d9b6_prof);

        
        $__internal_816ac6d31428027a3eca19b5f7a994c0a8728e1d48f568e1c6f1bd797143fdc1->leave($__internal_816ac6d31428027a3eca19b5f7a994c0a8728e1d48f568e1c6f1bd797143fdc1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ace77aef425ac03886b758a8139eaf321689b237df600de54380cb6f783d470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ace77aef425ac03886b758a8139eaf321689b237df600de54380cb6f783d470->enter($__internal_3ace77aef425ac03886b758a8139eaf321689b237df600de54380cb6f783d470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57ca0807328f2d352f82f09300141e7ab827190dfd9553c8d4f532429a7a1e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ca0807328f2d352f82f09300141e7ab827190dfd9553c8d4f532429a7a1e9f->enter($__internal_57ca0807328f2d352f82f09300141e7ab827190dfd9553c8d4f532429a7a1e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57ca0807328f2d352f82f09300141e7ab827190dfd9553c8d4f532429a7a1e9f->leave($__internal_57ca0807328f2d352f82f09300141e7ab827190dfd9553c8d4f532429a7a1e9f_prof);

        
        $__internal_3ace77aef425ac03886b758a8139eaf321689b237df600de54380cb6f783d470->leave($__internal_3ace77aef425ac03886b758a8139eaf321689b237df600de54380cb6f783d470_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5a1edc028b62c0470f9bb81c615fee38502b64fa9d99e94f866e2ce33ef2a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a1edc028b62c0470f9bb81c615fee38502b64fa9d99e94f866e2ce33ef2a7c->enter($__internal_a5a1edc028b62c0470f9bb81c615fee38502b64fa9d99e94f866e2ce33ef2a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d45c56b1938deb160f8d96945970a24746f4b2e9e0479140ce8c3ed6e0481fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45c56b1938deb160f8d96945970a24746f4b2e9e0479140ce8c3ed6e0481fc6->enter($__internal_d45c56b1938deb160f8d96945970a24746f4b2e9e0479140ce8c3ed6e0481fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d45c56b1938deb160f8d96945970a24746f4b2e9e0479140ce8c3ed6e0481fc6->leave($__internal_d45c56b1938deb160f8d96945970a24746f4b2e9e0479140ce8c3ed6e0481fc6_prof);

        
        $__internal_a5a1edc028b62c0470f9bb81c615fee38502b64fa9d99e94f866e2ce33ef2a7c->leave($__internal_a5a1edc028b62c0470f9bb81c615fee38502b64fa9d99e94f866e2ce33ef2a7c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
