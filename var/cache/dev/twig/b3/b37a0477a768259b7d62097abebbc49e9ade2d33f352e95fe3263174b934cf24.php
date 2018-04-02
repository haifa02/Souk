<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e93611eea60a37cca220c6b053b39d7299464e7c407582e22f8a606a080aa7fc extends Twig_Template
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
        $__internal_c086504c6524fd9226b4e80222e62684d2c14936d10a8bec3ffe33102ac23aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c086504c6524fd9226b4e80222e62684d2c14936d10a8bec3ffe33102ac23aa8->enter($__internal_c086504c6524fd9226b4e80222e62684d2c14936d10a8bec3ffe33102ac23aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a2525612a96eb881b63f8825f010c702aacd4650b19fae6db5f385393aeb4458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2525612a96eb881b63f8825f010c702aacd4650b19fae6db5f385393aeb4458->enter($__internal_a2525612a96eb881b63f8825f010c702aacd4650b19fae6db5f385393aeb4458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c086504c6524fd9226b4e80222e62684d2c14936d10a8bec3ffe33102ac23aa8->leave($__internal_c086504c6524fd9226b4e80222e62684d2c14936d10a8bec3ffe33102ac23aa8_prof);

        
        $__internal_a2525612a96eb881b63f8825f010c702aacd4650b19fae6db5f385393aeb4458->leave($__internal_a2525612a96eb881b63f8825f010c702aacd4650b19fae6db5f385393aeb4458_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
