<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d28270199e1d0ddecc62b714c93e95dd4c4bded817e6a05ca904e01f85a62941 extends Twig_Template
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
        $__internal_9bb7346831a19d32ea5793917041384c0413d111a7615a9837c3d29688279502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb7346831a19d32ea5793917041384c0413d111a7615a9837c3d29688279502->enter($__internal_9bb7346831a19d32ea5793917041384c0413d111a7615a9837c3d29688279502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c87ca8fd8c018807ae103de208bba6c6a5c9abb454731ee43567f1194b863ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87ca8fd8c018807ae103de208bba6c6a5c9abb454731ee43567f1194b863ab1->enter($__internal_c87ca8fd8c018807ae103de208bba6c6a5c9abb454731ee43567f1194b863ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9bb7346831a19d32ea5793917041384c0413d111a7615a9837c3d29688279502->leave($__internal_9bb7346831a19d32ea5793917041384c0413d111a7615a9837c3d29688279502_prof);

        
        $__internal_c87ca8fd8c018807ae103de208bba6c6a5c9abb454731ee43567f1194b863ab1->leave($__internal_c87ca8fd8c018807ae103de208bba6c6a5c9abb454731ee43567f1194b863ab1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
