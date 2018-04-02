<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c1e7e20f3f519a57113fdf5287ccc014fbab15fe5dd0165485b8b8b6fe6bdc40 extends Twig_Template
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
        $__internal_6f67884f4da8070d8eb7cc947a7a8239daa5eac83561ad007760d3f0044f3c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f67884f4da8070d8eb7cc947a7a8239daa5eac83561ad007760d3f0044f3c4b->enter($__internal_6f67884f4da8070d8eb7cc947a7a8239daa5eac83561ad007760d3f0044f3c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_584d82ed472f218cbeaea5c0f237729b62a867f3536bc70bfc8baf2a1fc4c1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584d82ed472f218cbeaea5c0f237729b62a867f3536bc70bfc8baf2a1fc4c1b1->enter($__internal_584d82ed472f218cbeaea5c0f237729b62a867f3536bc70bfc8baf2a1fc4c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6f67884f4da8070d8eb7cc947a7a8239daa5eac83561ad007760d3f0044f3c4b->leave($__internal_6f67884f4da8070d8eb7cc947a7a8239daa5eac83561ad007760d3f0044f3c4b_prof);

        
        $__internal_584d82ed472f218cbeaea5c0f237729b62a867f3536bc70bfc8baf2a1fc4c1b1->leave($__internal_584d82ed472f218cbeaea5c0f237729b62a867f3536bc70bfc8baf2a1fc4c1b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
