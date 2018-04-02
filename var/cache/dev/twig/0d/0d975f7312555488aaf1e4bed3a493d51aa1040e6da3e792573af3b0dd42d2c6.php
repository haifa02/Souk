<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_82f67baeb531d48d8cffb759266e69e0e50b12fe6aada54bd26eccdd256500dc extends Twig_Template
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
        $__internal_5c481657709757cce5aff2de78b687b2a1c387eaebb769cfce1c1b562fdf8258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c481657709757cce5aff2de78b687b2a1c387eaebb769cfce1c1b562fdf8258->enter($__internal_5c481657709757cce5aff2de78b687b2a1c387eaebb769cfce1c1b562fdf8258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e903c877aef43db18e8cd794a5c947729911abef88995b8b9841bba5768c8f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e903c877aef43db18e8cd794a5c947729911abef88995b8b9841bba5768c8f3b->enter($__internal_e903c877aef43db18e8cd794a5c947729911abef88995b8b9841bba5768c8f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5c481657709757cce5aff2de78b687b2a1c387eaebb769cfce1c1b562fdf8258->leave($__internal_5c481657709757cce5aff2de78b687b2a1c387eaebb769cfce1c1b562fdf8258_prof);

        
        $__internal_e903c877aef43db18e8cd794a5c947729911abef88995b8b9841bba5768c8f3b->leave($__internal_e903c877aef43db18e8cd794a5c947729911abef88995b8b9841bba5768c8f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
