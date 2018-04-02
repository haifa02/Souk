<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ff1af9c4ddf14f0ca9da9d7bbe3519290e5813a383de7107d01aa9a917d91676 extends Twig_Template
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
        $__internal_43a532f2bef020e1b1826e8e3639702fb6716fc21266fd484540d415e6e22200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a532f2bef020e1b1826e8e3639702fb6716fc21266fd484540d415e6e22200->enter($__internal_43a532f2bef020e1b1826e8e3639702fb6716fc21266fd484540d415e6e22200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_387bc05ced6a53cd6658b42116d09d68fc9d6318249e409b966fabfbc563a1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387bc05ced6a53cd6658b42116d09d68fc9d6318249e409b966fabfbc563a1e5->enter($__internal_387bc05ced6a53cd6658b42116d09d68fc9d6318249e409b966fabfbc563a1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_43a532f2bef020e1b1826e8e3639702fb6716fc21266fd484540d415e6e22200->leave($__internal_43a532f2bef020e1b1826e8e3639702fb6716fc21266fd484540d415e6e22200_prof);

        
        $__internal_387bc05ced6a53cd6658b42116d09d68fc9d6318249e409b966fabfbc563a1e5->leave($__internal_387bc05ced6a53cd6658b42116d09d68fc9d6318249e409b966fabfbc563a1e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
