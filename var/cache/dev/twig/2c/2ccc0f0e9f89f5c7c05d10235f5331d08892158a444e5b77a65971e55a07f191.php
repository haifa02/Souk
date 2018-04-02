<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9e1fb8b6c8a86fe9b7dc5172ba8ca6ce85cf71f7f532d613d4aff04dd332ffd extends Twig_Template
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
        $__internal_5d25a9434333d16626c0501d4f863dbe39612ebc09baa4beeba14966551131d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d25a9434333d16626c0501d4f863dbe39612ebc09baa4beeba14966551131d7->enter($__internal_5d25a9434333d16626c0501d4f863dbe39612ebc09baa4beeba14966551131d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f806bed5881dab31ceed5bfce261e9b9febff5869f1660e2dae097387d15124d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f806bed5881dab31ceed5bfce261e9b9febff5869f1660e2dae097387d15124d->enter($__internal_f806bed5881dab31ceed5bfce261e9b9febff5869f1660e2dae097387d15124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5d25a9434333d16626c0501d4f863dbe39612ebc09baa4beeba14966551131d7->leave($__internal_5d25a9434333d16626c0501d4f863dbe39612ebc09baa4beeba14966551131d7_prof);

        
        $__internal_f806bed5881dab31ceed5bfce261e9b9febff5869f1660e2dae097387d15124d->leave($__internal_f806bed5881dab31ceed5bfce261e9b9febff5869f1660e2dae097387d15124d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
