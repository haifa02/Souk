<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7c0849cff7667c6473393206d221a3e99f592b27fba76c3665627383d103cbdc extends Twig_Template
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
        $__internal_e1e62ff7e4cd1d19c6ef2c2c54d44b14dd7dafc3ae929fe3a984db6bf57bc762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e62ff7e4cd1d19c6ef2c2c54d44b14dd7dafc3ae929fe3a984db6bf57bc762->enter($__internal_e1e62ff7e4cd1d19c6ef2c2c54d44b14dd7dafc3ae929fe3a984db6bf57bc762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e8c5102eb4e26db76eede0c501476cdcdbefa1cc80a6b9aca639cb397d12517d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c5102eb4e26db76eede0c501476cdcdbefa1cc80a6b9aca639cb397d12517d->enter($__internal_e8c5102eb4e26db76eede0c501476cdcdbefa1cc80a6b9aca639cb397d12517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e1e62ff7e4cd1d19c6ef2c2c54d44b14dd7dafc3ae929fe3a984db6bf57bc762->leave($__internal_e1e62ff7e4cd1d19c6ef2c2c54d44b14dd7dafc3ae929fe3a984db6bf57bc762_prof);

        
        $__internal_e8c5102eb4e26db76eede0c501476cdcdbefa1cc80a6b9aca639cb397d12517d->leave($__internal_e8c5102eb4e26db76eede0c501476cdcdbefa1cc80a6b9aca639cb397d12517d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
