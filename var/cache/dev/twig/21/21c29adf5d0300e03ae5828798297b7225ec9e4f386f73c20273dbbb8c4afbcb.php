<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1c462975a063a672e51ff5b48177b998b87142fda90f3a0d7af99131471bb11b extends Twig_Template
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
        $__internal_3f66c0800c3840aa4ef85148356c1ae4fa3e6be74e74a571b078dbee67c44792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f66c0800c3840aa4ef85148356c1ae4fa3e6be74e74a571b078dbee67c44792->enter($__internal_3f66c0800c3840aa4ef85148356c1ae4fa3e6be74e74a571b078dbee67c44792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7590a1d8d594af59396dc8377099200470c5b0cb9a5836f5f37adab1b9b4ff43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7590a1d8d594af59396dc8377099200470c5b0cb9a5836f5f37adab1b9b4ff43->enter($__internal_7590a1d8d594af59396dc8377099200470c5b0cb9a5836f5f37adab1b9b4ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3f66c0800c3840aa4ef85148356c1ae4fa3e6be74e74a571b078dbee67c44792->leave($__internal_3f66c0800c3840aa4ef85148356c1ae4fa3e6be74e74a571b078dbee67c44792_prof);

        
        $__internal_7590a1d8d594af59396dc8377099200470c5b0cb9a5836f5f37adab1b9b4ff43->leave($__internal_7590a1d8d594af59396dc8377099200470c5b0cb9a5836f5f37adab1b9b4ff43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
