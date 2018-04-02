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
        $__internal_5aa1e6a2ea5dbc297346533344035be9c3274142719776676e5e868e2c3190f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa1e6a2ea5dbc297346533344035be9c3274142719776676e5e868e2c3190f4->enter($__internal_5aa1e6a2ea5dbc297346533344035be9c3274142719776676e5e868e2c3190f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_504d83405f66f331af93ec580176ca4d76ac93f3b0302d5f1deecff307af14de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504d83405f66f331af93ec580176ca4d76ac93f3b0302d5f1deecff307af14de->enter($__internal_504d83405f66f331af93ec580176ca4d76ac93f3b0302d5f1deecff307af14de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5aa1e6a2ea5dbc297346533344035be9c3274142719776676e5e868e2c3190f4->leave($__internal_5aa1e6a2ea5dbc297346533344035be9c3274142719776676e5e868e2c3190f4_prof);

        
        $__internal_504d83405f66f331af93ec580176ca4d76ac93f3b0302d5f1deecff307af14de->leave($__internal_504d83405f66f331af93ec580176ca4d76ac93f3b0302d5f1deecff307af14de_prof);

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
