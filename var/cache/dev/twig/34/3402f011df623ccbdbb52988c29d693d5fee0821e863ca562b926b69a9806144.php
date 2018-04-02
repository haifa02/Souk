<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_04de49f606eb76c9e8c2d20ae4aab7d4a71e8bafa6d895af7672846deeac1499 extends Twig_Template
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
        $__internal_c09ff9d5c4c0b7adf440a75741c700c9a878756d6b57b788e4ff92659e99709b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09ff9d5c4c0b7adf440a75741c700c9a878756d6b57b788e4ff92659e99709b->enter($__internal_c09ff9d5c4c0b7adf440a75741c700c9a878756d6b57b788e4ff92659e99709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6dcd5399bb380b7aa1f6ecd2d1997ff659a7d8b09f9e2c2f6280b6a7fb0b4cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcd5399bb380b7aa1f6ecd2d1997ff659a7d8b09f9e2c2f6280b6a7fb0b4cf8->enter($__internal_6dcd5399bb380b7aa1f6ecd2d1997ff659a7d8b09f9e2c2f6280b6a7fb0b4cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c09ff9d5c4c0b7adf440a75741c700c9a878756d6b57b788e4ff92659e99709b->leave($__internal_c09ff9d5c4c0b7adf440a75741c700c9a878756d6b57b788e4ff92659e99709b_prof);

        
        $__internal_6dcd5399bb380b7aa1f6ecd2d1997ff659a7d8b09f9e2c2f6280b6a7fb0b4cf8->leave($__internal_6dcd5399bb380b7aa1f6ecd2d1997ff659a7d8b09f9e2c2f6280b6a7fb0b4cf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
