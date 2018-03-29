<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_951b05ec52f99e45e61bd38eaaf6a4aabd2937734d575e777c1c15a0fe643da7 extends Twig_Template
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
        $__internal_dd4e13d307b6f656bb0b2f1cd75bfbdc9250b012534ab116db913a16be724881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4e13d307b6f656bb0b2f1cd75bfbdc9250b012534ab116db913a16be724881->enter($__internal_dd4e13d307b6f656bb0b2f1cd75bfbdc9250b012534ab116db913a16be724881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_821e79b6832af749a2bec121708297fa7a50f1122afa2cef1a08776209402ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821e79b6832af749a2bec121708297fa7a50f1122afa2cef1a08776209402ba6->enter($__internal_821e79b6832af749a2bec121708297fa7a50f1122afa2cef1a08776209402ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dd4e13d307b6f656bb0b2f1cd75bfbdc9250b012534ab116db913a16be724881->leave($__internal_dd4e13d307b6f656bb0b2f1cd75bfbdc9250b012534ab116db913a16be724881_prof);

        
        $__internal_821e79b6832af749a2bec121708297fa7a50f1122afa2cef1a08776209402ba6->leave($__internal_821e79b6832af749a2bec121708297fa7a50f1122afa2cef1a08776209402ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
