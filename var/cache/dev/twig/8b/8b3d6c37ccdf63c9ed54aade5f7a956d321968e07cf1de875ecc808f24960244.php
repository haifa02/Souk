<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ddfa1aeb25717b1ba5ef6db1fe00b777c14325d397c3835630ce6014427dd9c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dd24bed8c52576d058dda38963c22065e73a7a7e84d305f6dbd5386a8266988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd24bed8c52576d058dda38963c22065e73a7a7e84d305f6dbd5386a8266988->enter($__internal_2dd24bed8c52576d058dda38963c22065e73a7a7e84d305f6dbd5386a8266988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_41073dca2b8a7846672d4b384a94972a5db5904effc70caab503bd5084538b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41073dca2b8a7846672d4b384a94972a5db5904effc70caab503bd5084538b19->enter($__internal_41073dca2b8a7846672d4b384a94972a5db5904effc70caab503bd5084538b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2dd24bed8c52576d058dda38963c22065e73a7a7e84d305f6dbd5386a8266988->leave($__internal_2dd24bed8c52576d058dda38963c22065e73a7a7e84d305f6dbd5386a8266988_prof);

        
        $__internal_41073dca2b8a7846672d4b384a94972a5db5904effc70caab503bd5084538b19->leave($__internal_41073dca2b8a7846672d4b384a94972a5db5904effc70caab503bd5084538b19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
