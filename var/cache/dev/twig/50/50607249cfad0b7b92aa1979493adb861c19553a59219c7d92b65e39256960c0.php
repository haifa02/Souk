<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d3cf0dac3c7f0214c7137141212a4e8a10be4b8e484d3220ceae6f66dc3dd91b extends Twig_Template
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
        $__internal_d1d1ad6c9f4543c298a72220483d117cf72c44740ff559c9d32956e016717bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d1ad6c9f4543c298a72220483d117cf72c44740ff559c9d32956e016717bba->enter($__internal_d1d1ad6c9f4543c298a72220483d117cf72c44740ff559c9d32956e016717bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_817a253a429daa61562ea4d0e8edfb03c99c826029695f67b3a4e6a9c27fc865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817a253a429daa61562ea4d0e8edfb03c99c826029695f67b3a4e6a9c27fc865->enter($__internal_817a253a429daa61562ea4d0e8edfb03c99c826029695f67b3a4e6a9c27fc865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d1d1ad6c9f4543c298a72220483d117cf72c44740ff559c9d32956e016717bba->leave($__internal_d1d1ad6c9f4543c298a72220483d117cf72c44740ff559c9d32956e016717bba_prof);

        
        $__internal_817a253a429daa61562ea4d0e8edfb03c99c826029695f67b3a4e6a9c27fc865->leave($__internal_817a253a429daa61562ea4d0e8edfb03c99c826029695f67b3a4e6a9c27fc865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
