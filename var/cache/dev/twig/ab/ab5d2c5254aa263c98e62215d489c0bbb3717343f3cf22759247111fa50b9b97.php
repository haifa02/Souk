<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b9b19aeb4ef0e3a740a73f1e67fa3c3829c675d24d405bf2dda1bcf761ddb6c6 extends Twig_Template
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
        $__internal_6adc05e3718d4c2d5bf57c5d47340b17aa5396cb63e9f4c258c1d9bf4d2fb6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adc05e3718d4c2d5bf57c5d47340b17aa5396cb63e9f4c258c1d9bf4d2fb6c8->enter($__internal_6adc05e3718d4c2d5bf57c5d47340b17aa5396cb63e9f4c258c1d9bf4d2fb6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_e2a3a7e5587a7eb822326a8d28ec5ed83d2747d3bb45767b1c1c88f37aa45197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a3a7e5587a7eb822326a8d28ec5ed83d2747d3bb45767b1c1c88f37aa45197->enter($__internal_e2a3a7e5587a7eb822326a8d28ec5ed83d2747d3bb45767b1c1c88f37aa45197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6adc05e3718d4c2d5bf57c5d47340b17aa5396cb63e9f4c258c1d9bf4d2fb6c8->leave($__internal_6adc05e3718d4c2d5bf57c5d47340b17aa5396cb63e9f4c258c1d9bf4d2fb6c8_prof);

        
        $__internal_e2a3a7e5587a7eb822326a8d28ec5ed83d2747d3bb45767b1c1c88f37aa45197->leave($__internal_e2a3a7e5587a7eb822326a8d28ec5ed83d2747d3bb45767b1c1c88f37aa45197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
