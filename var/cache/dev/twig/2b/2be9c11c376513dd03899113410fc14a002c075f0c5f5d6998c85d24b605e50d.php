<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_516c655e8641c102a91ad3a73944cf8ab5ca0d67fbf7fa247f3eca9edbd4a734 extends Twig_Template
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
        $__internal_3d03700fec078a765857c83218dea22d0c44af2f0740bc8258ee4598a0ae66e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d03700fec078a765857c83218dea22d0c44af2f0740bc8258ee4598a0ae66e5->enter($__internal_3d03700fec078a765857c83218dea22d0c44af2f0740bc8258ee4598a0ae66e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1a3f083492f73b74533bf42de67e1f4110a3d3e38761586a93cd56e023b57978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3f083492f73b74533bf42de67e1f4110a3d3e38761586a93cd56e023b57978->enter($__internal_1a3f083492f73b74533bf42de67e1f4110a3d3e38761586a93cd56e023b57978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3d03700fec078a765857c83218dea22d0c44af2f0740bc8258ee4598a0ae66e5->leave($__internal_3d03700fec078a765857c83218dea22d0c44af2f0740bc8258ee4598a0ae66e5_prof);

        
        $__internal_1a3f083492f73b74533bf42de67e1f4110a3d3e38761586a93cd56e023b57978->leave($__internal_1a3f083492f73b74533bf42de67e1f4110a3d3e38761586a93cd56e023b57978_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
