<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d28270199e1d0ddecc62b714c93e95dd4c4bded817e6a05ca904e01f85a62941 extends Twig_Template
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
        $__internal_13ad7b2ff994516c395958089cc6f3704c8ffc091439bf95a9ada6fcffbe656a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ad7b2ff994516c395958089cc6f3704c8ffc091439bf95a9ada6fcffbe656a->enter($__internal_13ad7b2ff994516c395958089cc6f3704c8ffc091439bf95a9ada6fcffbe656a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_548dfa74ee4b2a75a77ad040bbfc076973108c139583c32b6b01b85db7dda103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548dfa74ee4b2a75a77ad040bbfc076973108c139583c32b6b01b85db7dda103->enter($__internal_548dfa74ee4b2a75a77ad040bbfc076973108c139583c32b6b01b85db7dda103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_13ad7b2ff994516c395958089cc6f3704c8ffc091439bf95a9ada6fcffbe656a->leave($__internal_13ad7b2ff994516c395958089cc6f3704c8ffc091439bf95a9ada6fcffbe656a_prof);

        
        $__internal_548dfa74ee4b2a75a77ad040bbfc076973108c139583c32b6b01b85db7dda103->leave($__internal_548dfa74ee4b2a75a77ad040bbfc076973108c139583c32b6b01b85db7dda103_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
