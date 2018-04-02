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
        $__internal_8b77e1f9fb8b0fa28c40d69918b4090183c65fe154b2a0ee79ad45827edcf9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b77e1f9fb8b0fa28c40d69918b4090183c65fe154b2a0ee79ad45827edcf9bb->enter($__internal_8b77e1f9fb8b0fa28c40d69918b4090183c65fe154b2a0ee79ad45827edcf9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_720d7669ba086c7f7c163eb415b69b04d0012ee882d69d598a9dc14d07f97d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720d7669ba086c7f7c163eb415b69b04d0012ee882d69d598a9dc14d07f97d56->enter($__internal_720d7669ba086c7f7c163eb415b69b04d0012ee882d69d598a9dc14d07f97d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8b77e1f9fb8b0fa28c40d69918b4090183c65fe154b2a0ee79ad45827edcf9bb->leave($__internal_8b77e1f9fb8b0fa28c40d69918b4090183c65fe154b2a0ee79ad45827edcf9bb_prof);

        
        $__internal_720d7669ba086c7f7c163eb415b69b04d0012ee882d69d598a9dc14d07f97d56->leave($__internal_720d7669ba086c7f7c163eb415b69b04d0012ee882d69d598a9dc14d07f97d56_prof);

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
