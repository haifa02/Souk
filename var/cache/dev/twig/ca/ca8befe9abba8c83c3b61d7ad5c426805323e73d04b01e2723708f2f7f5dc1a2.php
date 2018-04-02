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
        $__internal_e095cb0c20d0280c7ed1877a9fc8b2034326ad8940e588756662cf99a5c9bed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e095cb0c20d0280c7ed1877a9fc8b2034326ad8940e588756662cf99a5c9bed0->enter($__internal_e095cb0c20d0280c7ed1877a9fc8b2034326ad8940e588756662cf99a5c9bed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4cf5b357070935572459efe8f9914b4920a33d18a508bf161750c1595960ce5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf5b357070935572459efe8f9914b4920a33d18a508bf161750c1595960ce5f->enter($__internal_4cf5b357070935572459efe8f9914b4920a33d18a508bf161750c1595960ce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e095cb0c20d0280c7ed1877a9fc8b2034326ad8940e588756662cf99a5c9bed0->leave($__internal_e095cb0c20d0280c7ed1877a9fc8b2034326ad8940e588756662cf99a5c9bed0_prof);

        
        $__internal_4cf5b357070935572459efe8f9914b4920a33d18a508bf161750c1595960ce5f->leave($__internal_4cf5b357070935572459efe8f9914b4920a33d18a508bf161750c1595960ce5f_prof);

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
