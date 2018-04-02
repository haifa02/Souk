<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9e97f735c8ec4a7cc10a5bb0bc20fd297dd43e8cef9b9c7ff651f0a4c0e37cdf extends Twig_Template
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
        $__internal_016fecafb6e9dc587aa4bac0bde57ee0f667a810c4d674182334d8cef40c0073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016fecafb6e9dc587aa4bac0bde57ee0f667a810c4d674182334d8cef40c0073->enter($__internal_016fecafb6e9dc587aa4bac0bde57ee0f667a810c4d674182334d8cef40c0073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_03c2db8ba36bcb1b21307ead9fc7cf8196b5e5096640c56507eebb0ef7de9152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c2db8ba36bcb1b21307ead9fc7cf8196b5e5096640c56507eebb0ef7de9152->enter($__internal_03c2db8ba36bcb1b21307ead9fc7cf8196b5e5096640c56507eebb0ef7de9152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_016fecafb6e9dc587aa4bac0bde57ee0f667a810c4d674182334d8cef40c0073->leave($__internal_016fecafb6e9dc587aa4bac0bde57ee0f667a810c4d674182334d8cef40c0073_prof);

        
        $__internal_03c2db8ba36bcb1b21307ead9fc7cf8196b5e5096640c56507eebb0ef7de9152->leave($__internal_03c2db8ba36bcb1b21307ead9fc7cf8196b5e5096640c56507eebb0ef7de9152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
