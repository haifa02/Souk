<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a7ab5dc8dfc8540df6892d023fecd0de772aaefb5f7a17dcd6d98a2cea1b728c extends Twig_Template
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
        $__internal_f8d71b3a7180144dcc9ffa2beaa2563358d65ca8bd32ab4d001d4f45ef687a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d71b3a7180144dcc9ffa2beaa2563358d65ca8bd32ab4d001d4f45ef687a4d->enter($__internal_f8d71b3a7180144dcc9ffa2beaa2563358d65ca8bd32ab4d001d4f45ef687a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e33a39377fce627d1b713e320ce288193098097ac22902f0bcd7ce2775dcc29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33a39377fce627d1b713e320ce288193098097ac22902f0bcd7ce2775dcc29d->enter($__internal_e33a39377fce627d1b713e320ce288193098097ac22902f0bcd7ce2775dcc29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f8d71b3a7180144dcc9ffa2beaa2563358d65ca8bd32ab4d001d4f45ef687a4d->leave($__internal_f8d71b3a7180144dcc9ffa2beaa2563358d65ca8bd32ab4d001d4f45ef687a4d_prof);

        
        $__internal_e33a39377fce627d1b713e320ce288193098097ac22902f0bcd7ce2775dcc29d->leave($__internal_e33a39377fce627d1b713e320ce288193098097ac22902f0bcd7ce2775dcc29d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
