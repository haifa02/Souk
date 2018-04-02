<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6d79a801df08ccb72b2031f77ba884291dcb69dc3b88ba899b64a39d67e4b6d3 extends Twig_Template
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
        $__internal_5f6e8c6b4a3a3a586e104831ece04a9eb176b242105fd33893c2d6f53301eabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6e8c6b4a3a3a586e104831ece04a9eb176b242105fd33893c2d6f53301eabc->enter($__internal_5f6e8c6b4a3a3a586e104831ece04a9eb176b242105fd33893c2d6f53301eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0a8b74fb1630848aa8db61365d99d40a288dadfddeab446fe1769707827040ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8b74fb1630848aa8db61365d99d40a288dadfddeab446fe1769707827040ff->enter($__internal_0a8b74fb1630848aa8db61365d99d40a288dadfddeab446fe1769707827040ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5f6e8c6b4a3a3a586e104831ece04a9eb176b242105fd33893c2d6f53301eabc->leave($__internal_5f6e8c6b4a3a3a586e104831ece04a9eb176b242105fd33893c2d6f53301eabc_prof);

        
        $__internal_0a8b74fb1630848aa8db61365d99d40a288dadfddeab446fe1769707827040ff->leave($__internal_0a8b74fb1630848aa8db61365d99d40a288dadfddeab446fe1769707827040ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
