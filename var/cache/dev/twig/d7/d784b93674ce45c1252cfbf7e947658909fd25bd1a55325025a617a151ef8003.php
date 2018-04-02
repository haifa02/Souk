<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3074221b836b08f5e016716cc13c6469d96fa8493179ae94b2ff9626bb27c704 extends Twig_Template
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
        $__internal_0299db78fdd123d1a496a0cb10710e0c3b285e11b8fb7011213f905c9cddcd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0299db78fdd123d1a496a0cb10710e0c3b285e11b8fb7011213f905c9cddcd03->enter($__internal_0299db78fdd123d1a496a0cb10710e0c3b285e11b8fb7011213f905c9cddcd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f5be978a4ce5a9ad39443aa7c4e6fe83351d3137409646307780987722731609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5be978a4ce5a9ad39443aa7c4e6fe83351d3137409646307780987722731609->enter($__internal_f5be978a4ce5a9ad39443aa7c4e6fe83351d3137409646307780987722731609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0299db78fdd123d1a496a0cb10710e0c3b285e11b8fb7011213f905c9cddcd03->leave($__internal_0299db78fdd123d1a496a0cb10710e0c3b285e11b8fb7011213f905c9cddcd03_prof);

        
        $__internal_f5be978a4ce5a9ad39443aa7c4e6fe83351d3137409646307780987722731609->leave($__internal_f5be978a4ce5a9ad39443aa7c4e6fe83351d3137409646307780987722731609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
