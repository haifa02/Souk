<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4283c9523b8a8364f38c8b4c29b237880bbe8e4c11eb1ac9df3026fe0518156d extends Twig_Template
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
        $__internal_c818f5e8abbb931d06bf5a159363346c34eb19ce5b17621e8a234214784e333d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c818f5e8abbb931d06bf5a159363346c34eb19ce5b17621e8a234214784e333d->enter($__internal_c818f5e8abbb931d06bf5a159363346c34eb19ce5b17621e8a234214784e333d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d813e42c28adfed9f88a8c0e7695d8027b486668f6ca81d60b43ea1621b824e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d813e42c28adfed9f88a8c0e7695d8027b486668f6ca81d60b43ea1621b824e4->enter($__internal_d813e42c28adfed9f88a8c0e7695d8027b486668f6ca81d60b43ea1621b824e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c818f5e8abbb931d06bf5a159363346c34eb19ce5b17621e8a234214784e333d->leave($__internal_c818f5e8abbb931d06bf5a159363346c34eb19ce5b17621e8a234214784e333d_prof);

        
        $__internal_d813e42c28adfed9f88a8c0e7695d8027b486668f6ca81d60b43ea1621b824e4->leave($__internal_d813e42c28adfed9f88a8c0e7695d8027b486668f6ca81d60b43ea1621b824e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
