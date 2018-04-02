<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8942207e1560a7567bd470103ce56d8ee9bbe0960def7c2f5a56c808c06a5be8 extends Twig_Template
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
        $__internal_cb073075816d472ed474df93a7629e4edfce9ca01b89c380328779672429eac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb073075816d472ed474df93a7629e4edfce9ca01b89c380328779672429eac8->enter($__internal_cb073075816d472ed474df93a7629e4edfce9ca01b89c380328779672429eac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0bd629957b499847b255fc69d6bdfcf8b58700421bb2c84afed82314311e5c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd629957b499847b255fc69d6bdfcf8b58700421bb2c84afed82314311e5c6c->enter($__internal_0bd629957b499847b255fc69d6bdfcf8b58700421bb2c84afed82314311e5c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cb073075816d472ed474df93a7629e4edfce9ca01b89c380328779672429eac8->leave($__internal_cb073075816d472ed474df93a7629e4edfce9ca01b89c380328779672429eac8_prof);

        
        $__internal_0bd629957b499847b255fc69d6bdfcf8b58700421bb2c84afed82314311e5c6c->leave($__internal_0bd629957b499847b255fc69d6bdfcf8b58700421bb2c84afed82314311e5c6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
