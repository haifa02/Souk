<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_185de5ead20ad9976db073e9867c7a4da0b0b46f77d58be07584dd35da94d34b extends Twig_Template
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
        $__internal_a54b7169cce231c488bfdbfce2434e5e8a34e69697ed4421bb4d39023a06ec0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54b7169cce231c488bfdbfce2434e5e8a34e69697ed4421bb4d39023a06ec0c->enter($__internal_a54b7169cce231c488bfdbfce2434e5e8a34e69697ed4421bb4d39023a06ec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b110ca44c51a1ea020c14da9f70d6f32168f2dfe556c5ef2b7b397bf83e77a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b110ca44c51a1ea020c14da9f70d6f32168f2dfe556c5ef2b7b397bf83e77a44->enter($__internal_b110ca44c51a1ea020c14da9f70d6f32168f2dfe556c5ef2b7b397bf83e77a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_a54b7169cce231c488bfdbfce2434e5e8a34e69697ed4421bb4d39023a06ec0c->leave($__internal_a54b7169cce231c488bfdbfce2434e5e8a34e69697ed4421bb4d39023a06ec0c_prof);

        
        $__internal_b110ca44c51a1ea020c14da9f70d6f32168f2dfe556c5ef2b7b397bf83e77a44->leave($__internal_b110ca44c51a1ea020c14da9f70d6f32168f2dfe556c5ef2b7b397bf83e77a44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
