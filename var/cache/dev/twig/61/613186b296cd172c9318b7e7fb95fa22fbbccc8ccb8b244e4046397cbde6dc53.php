<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8c0daf5ea819e95f88daba415f1ea297f384fcfa8abbe2130a4338d1fd3cb5ee extends Twig_Template
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
        $__internal_939bac1fc49f07c56182ea331ddff61f445b86b79679bcacf5a37e682c316a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939bac1fc49f07c56182ea331ddff61f445b86b79679bcacf5a37e682c316a44->enter($__internal_939bac1fc49f07c56182ea331ddff61f445b86b79679bcacf5a37e682c316a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c8b95e6f3931388644df08137a714cbaf4e0fac7640ac0937d5de5290fe16f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b95e6f3931388644df08137a714cbaf4e0fac7640ac0937d5de5290fe16f7c->enter($__internal_c8b95e6f3931388644df08137a714cbaf4e0fac7640ac0937d5de5290fe16f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_939bac1fc49f07c56182ea331ddff61f445b86b79679bcacf5a37e682c316a44->leave($__internal_939bac1fc49f07c56182ea331ddff61f445b86b79679bcacf5a37e682c316a44_prof);

        
        $__internal_c8b95e6f3931388644df08137a714cbaf4e0fac7640ac0937d5de5290fe16f7c->leave($__internal_c8b95e6f3931388644df08137a714cbaf4e0fac7640ac0937d5de5290fe16f7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
