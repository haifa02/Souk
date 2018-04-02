<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d2c50b3b356853961eeb2ed1fe11fcd22b005fc87d5d26f08284bc146213d8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bb31ac79044fa3e0618afc902c0ac0c4ff58902c2374bdea5476df577335c0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb31ac79044fa3e0618afc902c0ac0c4ff58902c2374bdea5476df577335c0fd->enter($__internal_bb31ac79044fa3e0618afc902c0ac0c4ff58902c2374bdea5476df577335c0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e0e3555bb681122dd6922ff0689c75b4ee13758a09f4bca2cea3d93e08388f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e3555bb681122dd6922ff0689c75b4ee13758a09f4bca2cea3d93e08388f0b->enter($__internal_e0e3555bb681122dd6922ff0689c75b4ee13758a09f4bca2cea3d93e08388f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb31ac79044fa3e0618afc902c0ac0c4ff58902c2374bdea5476df577335c0fd->leave($__internal_bb31ac79044fa3e0618afc902c0ac0c4ff58902c2374bdea5476df577335c0fd_prof);

        
        $__internal_e0e3555bb681122dd6922ff0689c75b4ee13758a09f4bca2cea3d93e08388f0b->leave($__internal_e0e3555bb681122dd6922ff0689c75b4ee13758a09f4bca2cea3d93e08388f0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44e9c07d72b73c02d13b627a96b55b56ca94e3a09cdb62902d3b4227af7f53d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e9c07d72b73c02d13b627a96b55b56ca94e3a09cdb62902d3b4227af7f53d3->enter($__internal_44e9c07d72b73c02d13b627a96b55b56ca94e3a09cdb62902d3b4227af7f53d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3cc1abb5912fa29969daac3f86dc98b3efece45e90ebfd02732ff813e2d915ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc1abb5912fa29969daac3f86dc98b3efece45e90ebfd02732ff813e2d915ab->enter($__internal_3cc1abb5912fa29969daac3f86dc98b3efece45e90ebfd02732ff813e2d915ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3cc1abb5912fa29969daac3f86dc98b3efece45e90ebfd02732ff813e2d915ab->leave($__internal_3cc1abb5912fa29969daac3f86dc98b3efece45e90ebfd02732ff813e2d915ab_prof);

        
        $__internal_44e9c07d72b73c02d13b627a96b55b56ca94e3a09cdb62902d3b4227af7f53d3->leave($__internal_44e9c07d72b73c02d13b627a96b55b56ca94e3a09cdb62902d3b4227af7f53d3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f15f976b2d1e4ab96745743e4f6519df3aedb9258d6ac238aa83103331e0072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f15f976b2d1e4ab96745743e4f6519df3aedb9258d6ac238aa83103331e0072->enter($__internal_0f15f976b2d1e4ab96745743e4f6519df3aedb9258d6ac238aa83103331e0072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7076f7f22fc7be88ba254dd2a68a1f80cb6af6631fed8cdc2925fc14547d40ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7076f7f22fc7be88ba254dd2a68a1f80cb6af6631fed8cdc2925fc14547d40ab->enter($__internal_7076f7f22fc7be88ba254dd2a68a1f80cb6af6631fed8cdc2925fc14547d40ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7076f7f22fc7be88ba254dd2a68a1f80cb6af6631fed8cdc2925fc14547d40ab->leave($__internal_7076f7f22fc7be88ba254dd2a68a1f80cb6af6631fed8cdc2925fc14547d40ab_prof);

        
        $__internal_0f15f976b2d1e4ab96745743e4f6519df3aedb9258d6ac238aa83103331e0072->leave($__internal_0f15f976b2d1e4ab96745743e4f6519df3aedb9258d6ac238aa83103331e0072_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2425f815388f3e25fdb3130000047b4ee2f148424b40843f2c2c89653998fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2425f815388f3e25fdb3130000047b4ee2f148424b40843f2c2c89653998fe4->enter($__internal_b2425f815388f3e25fdb3130000047b4ee2f148424b40843f2c2c89653998fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b0d642b42649a1e0acfe6653d5e47c752efcfc4edd7a2d7c95e374961410c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0d642b42649a1e0acfe6653d5e47c752efcfc4edd7a2d7c95e374961410c51->enter($__internal_8b0d642b42649a1e0acfe6653d5e47c752efcfc4edd7a2d7c95e374961410c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8b0d642b42649a1e0acfe6653d5e47c752efcfc4edd7a2d7c95e374961410c51->leave($__internal_8b0d642b42649a1e0acfe6653d5e47c752efcfc4edd7a2d7c95e374961410c51_prof);

        
        $__internal_b2425f815388f3e25fdb3130000047b4ee2f148424b40843f2c2c89653998fe4->leave($__internal_b2425f815388f3e25fdb3130000047b4ee2f148424b40843f2c2c89653998fe4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
