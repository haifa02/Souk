<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f81cdeae50fd55cb73ef7a3e4c67bdac1d09c180c46efb3015e92620abc41b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd5fb1028bd1ce7a07b88609bc92750f5b16d2bc188f3831eeb6f7bc931db350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5fb1028bd1ce7a07b88609bc92750f5b16d2bc188f3831eeb6f7bc931db350->enter($__internal_cd5fb1028bd1ce7a07b88609bc92750f5b16d2bc188f3831eeb6f7bc931db350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_2c930e88f37a6c13e246b49645c71f10f00fb44d4be7cc85d2027a63963c8cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c930e88f37a6c13e246b49645c71f10f00fb44d4be7cc85d2027a63963c8cf5->enter($__internal_2c930e88f37a6c13e246b49645c71f10f00fb44d4be7cc85d2027a63963c8cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_cd5fb1028bd1ce7a07b88609bc92750f5b16d2bc188f3831eeb6f7bc931db350->leave($__internal_cd5fb1028bd1ce7a07b88609bc92750f5b16d2bc188f3831eeb6f7bc931db350_prof);

        
        $__internal_2c930e88f37a6c13e246b49645c71f10f00fb44d4be7cc85d2027a63963c8cf5->leave($__internal_2c930e88f37a6c13e246b49645c71f10f00fb44d4be7cc85d2027a63963c8cf5_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fa69d78450abf1ec9d2feca27f8f6d85ecc782dc0cc7de4b9af3fd2356ad34d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa69d78450abf1ec9d2feca27f8f6d85ecc782dc0cc7de4b9af3fd2356ad34d9->enter($__internal_fa69d78450abf1ec9d2feca27f8f6d85ecc782dc0cc7de4b9af3fd2356ad34d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3733fadd2f23e854015412370c4b74d17b61141c33cfb664ab744b449e9a0833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3733fadd2f23e854015412370c4b74d17b61141c33cfb664ab744b449e9a0833->enter($__internal_3733fadd2f23e854015412370c4b74d17b61141c33cfb664ab744b449e9a0833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_3733fadd2f23e854015412370c4b74d17b61141c33cfb664ab744b449e9a0833->leave($__internal_3733fadd2f23e854015412370c4b74d17b61141c33cfb664ab744b449e9a0833_prof);

        
        $__internal_fa69d78450abf1ec9d2feca27f8f6d85ecc782dc0cc7de4b9af3fd2356ad34d9->leave($__internal_fa69d78450abf1ec9d2feca27f8f6d85ecc782dc0cc7de4b9af3fd2356ad34d9_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4c9eca7a7d717a69d6774b8bad35111841bdd99dce7077449138b2885c93ffcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9eca7a7d717a69d6774b8bad35111841bdd99dce7077449138b2885c93ffcf->enter($__internal_4c9eca7a7d717a69d6774b8bad35111841bdd99dce7077449138b2885c93ffcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_787fadf0cf5af90a22cc9994190fb2553bbc1967c7a19b69254c1e1a47e582e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787fadf0cf5af90a22cc9994190fb2553bbc1967c7a19b69254c1e1a47e582e4->enter($__internal_787fadf0cf5af90a22cc9994190fb2553bbc1967c7a19b69254c1e1a47e582e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_787fadf0cf5af90a22cc9994190fb2553bbc1967c7a19b69254c1e1a47e582e4->leave($__internal_787fadf0cf5af90a22cc9994190fb2553bbc1967c7a19b69254c1e1a47e582e4_prof);

        
        $__internal_4c9eca7a7d717a69d6774b8bad35111841bdd99dce7077449138b2885c93ffcf->leave($__internal_4c9eca7a7d717a69d6774b8bad35111841bdd99dce7077449138b2885c93ffcf_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5a658d1f4c6237f829c9d81bcaca440aa006d4d488cef3834baab2bca585c7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a658d1f4c6237f829c9d81bcaca440aa006d4d488cef3834baab2bca585c7b2->enter($__internal_5a658d1f4c6237f829c9d81bcaca440aa006d4d488cef3834baab2bca585c7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_fe7cc976b18893b30ef0f1a94cdc20c5e34cff79f15352c521a13516ef0d6ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7cc976b18893b30ef0f1a94cdc20c5e34cff79f15352c521a13516ef0d6ad0->enter($__internal_fe7cc976b18893b30ef0f1a94cdc20c5e34cff79f15352c521a13516ef0d6ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_fe7cc976b18893b30ef0f1a94cdc20c5e34cff79f15352c521a13516ef0d6ad0->leave($__internal_fe7cc976b18893b30ef0f1a94cdc20c5e34cff79f15352c521a13516ef0d6ad0_prof);

        
        $__internal_5a658d1f4c6237f829c9d81bcaca440aa006d4d488cef3834baab2bca585c7b2->leave($__internal_5a658d1f4c6237f829c9d81bcaca440aa006d4d488cef3834baab2bca585c7b2_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0e8ee5983c428cb75ebbca7cec3b2bc90eae35ca08c1e27e987b77d2e8272643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8ee5983c428cb75ebbca7cec3b2bc90eae35ca08c1e27e987b77d2e8272643->enter($__internal_0e8ee5983c428cb75ebbca7cec3b2bc90eae35ca08c1e27e987b77d2e8272643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_dfc962c523dc96810142daa46c915d29964a297c1c978cbe9ddacea49b6c5a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc962c523dc96810142daa46c915d29964a297c1c978cbe9ddacea49b6c5a35->enter($__internal_dfc962c523dc96810142daa46c915d29964a297c1c978cbe9ddacea49b6c5a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_dfc962c523dc96810142daa46c915d29964a297c1c978cbe9ddacea49b6c5a35->leave($__internal_dfc962c523dc96810142daa46c915d29964a297c1c978cbe9ddacea49b6c5a35_prof);

        
        $__internal_0e8ee5983c428cb75ebbca7cec3b2bc90eae35ca08c1e27e987b77d2e8272643->leave($__internal_0e8ee5983c428cb75ebbca7cec3b2bc90eae35ca08c1e27e987b77d2e8272643_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
