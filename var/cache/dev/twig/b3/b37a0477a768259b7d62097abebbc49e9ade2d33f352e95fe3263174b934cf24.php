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
        $__internal_d0bd357baddfed1a07df41eb685c96843a7daf1649989a5eda77bdfeceba75dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bd357baddfed1a07df41eb685c96843a7daf1649989a5eda77bdfeceba75dd->enter($__internal_d0bd357baddfed1a07df41eb685c96843a7daf1649989a5eda77bdfeceba75dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a6475fa8c726fafb8dbd8817827c6bc71f9df26be3801b2a32c60fa1f2bf2016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6475fa8c726fafb8dbd8817827c6bc71f9df26be3801b2a32c60fa1f2bf2016->enter($__internal_a6475fa8c726fafb8dbd8817827c6bc71f9df26be3801b2a32c60fa1f2bf2016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d0bd357baddfed1a07df41eb685c96843a7daf1649989a5eda77bdfeceba75dd->leave($__internal_d0bd357baddfed1a07df41eb685c96843a7daf1649989a5eda77bdfeceba75dd_prof);

        
        $__internal_a6475fa8c726fafb8dbd8817827c6bc71f9df26be3801b2a32c60fa1f2bf2016->leave($__internal_a6475fa8c726fafb8dbd8817827c6bc71f9df26be3801b2a32c60fa1f2bf2016_prof);

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
