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
        $__internal_7238688decd1bcb514f285c775237b3c01af66b9db993de06dc8d25399e22aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7238688decd1bcb514f285c775237b3c01af66b9db993de06dc8d25399e22aeb->enter($__internal_7238688decd1bcb514f285c775237b3c01af66b9db993de06dc8d25399e22aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3fa9ec215f68b6f395ded9797244899d4aa8a410c70a80fd4bbb501f5d52fb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa9ec215f68b6f395ded9797244899d4aa8a410c70a80fd4bbb501f5d52fb4d->enter($__internal_3fa9ec215f68b6f395ded9797244899d4aa8a410c70a80fd4bbb501f5d52fb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7238688decd1bcb514f285c775237b3c01af66b9db993de06dc8d25399e22aeb->leave($__internal_7238688decd1bcb514f285c775237b3c01af66b9db993de06dc8d25399e22aeb_prof);

        
        $__internal_3fa9ec215f68b6f395ded9797244899d4aa8a410c70a80fd4bbb501f5d52fb4d->leave($__internal_3fa9ec215f68b6f395ded9797244899d4aa8a410c70a80fd4bbb501f5d52fb4d_prof);

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
