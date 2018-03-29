<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b9efcfe4ff31370ced7fde70f65349f8c1b6da2d5dff4ea3afb5251994a47e43 extends Twig_Template
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
        $__internal_a51a3f3d862f3d0db18a645433948645be933a2dca0014cea07c28de30289d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51a3f3d862f3d0db18a645433948645be933a2dca0014cea07c28de30289d5c->enter($__internal_a51a3f3d862f3d0db18a645433948645be933a2dca0014cea07c28de30289d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0d0e95eeeedc5c72afa699f7344d5d6916042efb6515ce12203ae6ae1fc1481d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0e95eeeedc5c72afa699f7344d5d6916042efb6515ce12203ae6ae1fc1481d->enter($__internal_0d0e95eeeedc5c72afa699f7344d5d6916042efb6515ce12203ae6ae1fc1481d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a51a3f3d862f3d0db18a645433948645be933a2dca0014cea07c28de30289d5c->leave($__internal_a51a3f3d862f3d0db18a645433948645be933a2dca0014cea07c28de30289d5c_prof);

        
        $__internal_0d0e95eeeedc5c72afa699f7344d5d6916042efb6515ce12203ae6ae1fc1481d->leave($__internal_0d0e95eeeedc5c72afa699f7344d5d6916042efb6515ce12203ae6ae1fc1481d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
