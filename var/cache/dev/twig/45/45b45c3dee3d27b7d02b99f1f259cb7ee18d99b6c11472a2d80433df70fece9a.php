<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9b39c1c7e98ad2fdb1534fbb5dad20897395a06f88a773880de7b8d1d67ca173 extends Twig_Template
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
        $__internal_ce9511685e3c8c2fc7828a2bb3b2adf164800c99812b91e39c940241bf80ae4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9511685e3c8c2fc7828a2bb3b2adf164800c99812b91e39c940241bf80ae4d->enter($__internal_ce9511685e3c8c2fc7828a2bb3b2adf164800c99812b91e39c940241bf80ae4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f222458514124be428b4c8c1f91112f656ee4818f2f318c4582f0449c917fd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f222458514124be428b4c8c1f91112f656ee4818f2f318c4582f0449c917fd04->enter($__internal_f222458514124be428b4c8c1f91112f656ee4818f2f318c4582f0449c917fd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ce9511685e3c8c2fc7828a2bb3b2adf164800c99812b91e39c940241bf80ae4d->leave($__internal_ce9511685e3c8c2fc7828a2bb3b2adf164800c99812b91e39c940241bf80ae4d_prof);

        
        $__internal_f222458514124be428b4c8c1f91112f656ee4818f2f318c4582f0449c917fd04->leave($__internal_f222458514124be428b4c8c1f91112f656ee4818f2f318c4582f0449c917fd04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
