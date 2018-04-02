<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81a9e5401dc4dca1cf2825130da666f896a7b13f191c9bb327e5234d04c21ebb extends Twig_Template
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
        $__internal_a6a33cb88f75887571b4703bdc59e4cc29e16c34c752c6fdad4fd233d6823910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a33cb88f75887571b4703bdc59e4cc29e16c34c752c6fdad4fd233d6823910->enter($__internal_a6a33cb88f75887571b4703bdc59e4cc29e16c34c752c6fdad4fd233d6823910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4cdbc011d70a0dee5791460bc89ea17d202434bc99a417fc415cfe569ec8c5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdbc011d70a0dee5791460bc89ea17d202434bc99a417fc415cfe569ec8c5a4->enter($__internal_4cdbc011d70a0dee5791460bc89ea17d202434bc99a417fc415cfe569ec8c5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a6a33cb88f75887571b4703bdc59e4cc29e16c34c752c6fdad4fd233d6823910->leave($__internal_a6a33cb88f75887571b4703bdc59e4cc29e16c34c752c6fdad4fd233d6823910_prof);

        
        $__internal_4cdbc011d70a0dee5791460bc89ea17d202434bc99a417fc415cfe569ec8c5a4->leave($__internal_4cdbc011d70a0dee5791460bc89ea17d202434bc99a417fc415cfe569ec8c5a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
