<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1d6f285278dd4ce61e124db53abeb6f13b88787e7556b720f58ab2c0fb70f46e extends Twig_Template
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
        $__internal_1e56f853f063a8c99d6feaa8bdc1c56f95bdd730279d459a3c62bdc7aa6b0002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e56f853f063a8c99d6feaa8bdc1c56f95bdd730279d459a3c62bdc7aa6b0002->enter($__internal_1e56f853f063a8c99d6feaa8bdc1c56f95bdd730279d459a3c62bdc7aa6b0002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2d5b8250f9721ec322634f86452214d89191bdb23c11cfd936f4f7a8f4321895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5b8250f9721ec322634f86452214d89191bdb23c11cfd936f4f7a8f4321895->enter($__internal_2d5b8250f9721ec322634f86452214d89191bdb23c11cfd936f4f7a8f4321895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1e56f853f063a8c99d6feaa8bdc1c56f95bdd730279d459a3c62bdc7aa6b0002->leave($__internal_1e56f853f063a8c99d6feaa8bdc1c56f95bdd730279d459a3c62bdc7aa6b0002_prof);

        
        $__internal_2d5b8250f9721ec322634f86452214d89191bdb23c11cfd936f4f7a8f4321895->leave($__internal_2d5b8250f9721ec322634f86452214d89191bdb23c11cfd936f4f7a8f4321895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
