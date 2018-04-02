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
        $__internal_8c1fe63006d57298627ac18a394ab5257e580cbee68c240db455a4fb94f24427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1fe63006d57298627ac18a394ab5257e580cbee68c240db455a4fb94f24427->enter($__internal_8c1fe63006d57298627ac18a394ab5257e580cbee68c240db455a4fb94f24427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_ed1369438e892085daedcf46591331205769a253a94e7d55e6a14bdb6a76047e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1369438e892085daedcf46591331205769a253a94e7d55e6a14bdb6a76047e->enter($__internal_ed1369438e892085daedcf46591331205769a253a94e7d55e6a14bdb6a76047e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_8c1fe63006d57298627ac18a394ab5257e580cbee68c240db455a4fb94f24427->leave($__internal_8c1fe63006d57298627ac18a394ab5257e580cbee68c240db455a4fb94f24427_prof);

        
        $__internal_ed1369438e892085daedcf46591331205769a253a94e7d55e6a14bdb6a76047e->leave($__internal_ed1369438e892085daedcf46591331205769a253a94e7d55e6a14bdb6a76047e_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ce9277b20e1931241f92e0334c1f311db98762491dfcdbedc260c7a7e0e7dff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9277b20e1931241f92e0334c1f311db98762491dfcdbedc260c7a7e0e7dff0->enter($__internal_ce9277b20e1931241f92e0334c1f311db98762491dfcdbedc260c7a7e0e7dff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9f6bf9e37c54aa9480a5a3c3a251fc56e2700170afda5cd9ec374b381f5c4b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6bf9e37c54aa9480a5a3c3a251fc56e2700170afda5cd9ec374b381f5c4b11->enter($__internal_9f6bf9e37c54aa9480a5a3c3a251fc56e2700170afda5cd9ec374b381f5c4b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9f6bf9e37c54aa9480a5a3c3a251fc56e2700170afda5cd9ec374b381f5c4b11->leave($__internal_9f6bf9e37c54aa9480a5a3c3a251fc56e2700170afda5cd9ec374b381f5c4b11_prof);

        
        $__internal_ce9277b20e1931241f92e0334c1f311db98762491dfcdbedc260c7a7e0e7dff0->leave($__internal_ce9277b20e1931241f92e0334c1f311db98762491dfcdbedc260c7a7e0e7dff0_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e2a7144087ec98f89f02c77414cfa82f061fb9dd216714ff2e2ad80ed785252d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a7144087ec98f89f02c77414cfa82f061fb9dd216714ff2e2ad80ed785252d->enter($__internal_e2a7144087ec98f89f02c77414cfa82f061fb9dd216714ff2e2ad80ed785252d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d1ad77f4f4c497f8b7d9c011923f963abe820b41917678d564b882ffb7d7c6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ad77f4f4c497f8b7d9c011923f963abe820b41917678d564b882ffb7d7c6a7->enter($__internal_d1ad77f4f4c497f8b7d9c011923f963abe820b41917678d564b882ffb7d7c6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_d1ad77f4f4c497f8b7d9c011923f963abe820b41917678d564b882ffb7d7c6a7->leave($__internal_d1ad77f4f4c497f8b7d9c011923f963abe820b41917678d564b882ffb7d7c6a7_prof);

        
        $__internal_e2a7144087ec98f89f02c77414cfa82f061fb9dd216714ff2e2ad80ed785252d->leave($__internal_e2a7144087ec98f89f02c77414cfa82f061fb9dd216714ff2e2ad80ed785252d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_fe3aa9684c0500eb6121781d0847447eb43f64464bfdcb353741e117d5308f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3aa9684c0500eb6121781d0847447eb43f64464bfdcb353741e117d5308f1c->enter($__internal_fe3aa9684c0500eb6121781d0847447eb43f64464bfdcb353741e117d5308f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_a097b9b26eb9909daa0826837f861ac74e0c019d3f025c9872854b43d2b17f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a097b9b26eb9909daa0826837f861ac74e0c019d3f025c9872854b43d2b17f52->enter($__internal_a097b9b26eb9909daa0826837f861ac74e0c019d3f025c9872854b43d2b17f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_a097b9b26eb9909daa0826837f861ac74e0c019d3f025c9872854b43d2b17f52->leave($__internal_a097b9b26eb9909daa0826837f861ac74e0c019d3f025c9872854b43d2b17f52_prof);

        
        $__internal_fe3aa9684c0500eb6121781d0847447eb43f64464bfdcb353741e117d5308f1c->leave($__internal_fe3aa9684c0500eb6121781d0847447eb43f64464bfdcb353741e117d5308f1c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ff67564a0d982c8c705b21dcf8e318cea160232674d1d48321dfa682971514e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff67564a0d982c8c705b21dcf8e318cea160232674d1d48321dfa682971514e0->enter($__internal_ff67564a0d982c8c705b21dcf8e318cea160232674d1d48321dfa682971514e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_cf331ab605b657a7fba5fe558fd8410f766b6416e1e89f6ba06268b2ab7344a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf331ab605b657a7fba5fe558fd8410f766b6416e1e89f6ba06268b2ab7344a7->enter($__internal_cf331ab605b657a7fba5fe558fd8410f766b6416e1e89f6ba06268b2ab7344a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_cf331ab605b657a7fba5fe558fd8410f766b6416e1e89f6ba06268b2ab7344a7->leave($__internal_cf331ab605b657a7fba5fe558fd8410f766b6416e1e89f6ba06268b2ab7344a7_prof);

        
        $__internal_ff67564a0d982c8c705b21dcf8e318cea160232674d1d48321dfa682971514e0->leave($__internal_ff67564a0d982c8c705b21dcf8e318cea160232674d1d48321dfa682971514e0_prof);

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
