<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_097a3cf4b47118399de08fb8d897c027b7a6035a62e183d2b6d4c1fba6185161 extends Twig_Template
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
        $__internal_cd0feeefd5ee8ded93abd9ada472a0b7364ca70ae6881094621fac2977f58d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0feeefd5ee8ded93abd9ada472a0b7364ca70ae6881094621fac2977f58d31->enter($__internal_cd0feeefd5ee8ded93abd9ada472a0b7364ca70ae6881094621fac2977f58d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4825f0b2b1cf8a178af8cec70ec9369f3513d5ad214f381a587c829df7b145cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4825f0b2b1cf8a178af8cec70ec9369f3513d5ad214f381a587c829df7b145cd->enter($__internal_4825f0b2b1cf8a178af8cec70ec9369f3513d5ad214f381a587c829df7b145cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cd0feeefd5ee8ded93abd9ada472a0b7364ca70ae6881094621fac2977f58d31->leave($__internal_cd0feeefd5ee8ded93abd9ada472a0b7364ca70ae6881094621fac2977f58d31_prof);

        
        $__internal_4825f0b2b1cf8a178af8cec70ec9369f3513d5ad214f381a587c829df7b145cd->leave($__internal_4825f0b2b1cf8a178af8cec70ec9369f3513d5ad214f381a587c829df7b145cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
