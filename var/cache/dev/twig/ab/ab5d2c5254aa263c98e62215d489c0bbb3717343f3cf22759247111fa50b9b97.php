<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b9b19aeb4ef0e3a740a73f1e67fa3c3829c675d24d405bf2dda1bcf761ddb6c6 extends Twig_Template
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
        $__internal_09f24bd86478c626c301831c0d0b8678ffa9fa118be76bc2bd554e8499fc2845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f24bd86478c626c301831c0d0b8678ffa9fa118be76bc2bd554e8499fc2845->enter($__internal_09f24bd86478c626c301831c0d0b8678ffa9fa118be76bc2bd554e8499fc2845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_85c3f65c440988179ed0502315005ab1664f6fb960e6eaa601693061114921a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c3f65c440988179ed0502315005ab1664f6fb960e6eaa601693061114921a3->enter($__internal_85c3f65c440988179ed0502315005ab1664f6fb960e6eaa601693061114921a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_09f24bd86478c626c301831c0d0b8678ffa9fa118be76bc2bd554e8499fc2845->leave($__internal_09f24bd86478c626c301831c0d0b8678ffa9fa118be76bc2bd554e8499fc2845_prof);

        
        $__internal_85c3f65c440988179ed0502315005ab1664f6fb960e6eaa601693061114921a3->leave($__internal_85c3f65c440988179ed0502315005ab1664f6fb960e6eaa601693061114921a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
