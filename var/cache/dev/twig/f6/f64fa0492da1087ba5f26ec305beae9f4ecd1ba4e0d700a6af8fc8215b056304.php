<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5cf8e80ea521bf61e643ee03c2dfe755c9d4864c2c7bf2c64f7e135233c84008 extends Twig_Template
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
        $__internal_ec527ca7ea9ee6cd7b7d8195a78fa248396640f05eb3696851ecec79390932a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec527ca7ea9ee6cd7b7d8195a78fa248396640f05eb3696851ecec79390932a2->enter($__internal_ec527ca7ea9ee6cd7b7d8195a78fa248396640f05eb3696851ecec79390932a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e55e7cba1418122c20a173fb0c2ff43c1c1f338ae642c1d0d77db7865ccc78f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55e7cba1418122c20a173fb0c2ff43c1c1f338ae642c1d0d77db7865ccc78f8->enter($__internal_e55e7cba1418122c20a173fb0c2ff43c1c1f338ae642c1d0d77db7865ccc78f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ec527ca7ea9ee6cd7b7d8195a78fa248396640f05eb3696851ecec79390932a2->leave($__internal_ec527ca7ea9ee6cd7b7d8195a78fa248396640f05eb3696851ecec79390932a2_prof);

        
        $__internal_e55e7cba1418122c20a173fb0c2ff43c1c1f338ae642c1d0d77db7865ccc78f8->leave($__internal_e55e7cba1418122c20a173fb0c2ff43c1c1f338ae642c1d0d77db7865ccc78f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
