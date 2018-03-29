<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7d8dd9d68a77e3a7a3e05284d6ab53918d72af4f75716a7da1befbe3aaac45a6 extends Twig_Template
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
        $__internal_448e41fa52fb0746bba9f8f49656ad863009a6547c54195380e0056573589d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448e41fa52fb0746bba9f8f49656ad863009a6547c54195380e0056573589d42->enter($__internal_448e41fa52fb0746bba9f8f49656ad863009a6547c54195380e0056573589d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dc7414008bc6b4214fbae013ec662c9863f2970d276c5cba23e7d7e3106b1ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7414008bc6b4214fbae013ec662c9863f2970d276c5cba23e7d7e3106b1ce6->enter($__internal_dc7414008bc6b4214fbae013ec662c9863f2970d276c5cba23e7d7e3106b1ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_448e41fa52fb0746bba9f8f49656ad863009a6547c54195380e0056573589d42->leave($__internal_448e41fa52fb0746bba9f8f49656ad863009a6547c54195380e0056573589d42_prof);

        
        $__internal_dc7414008bc6b4214fbae013ec662c9863f2970d276c5cba23e7d7e3106b1ce6->leave($__internal_dc7414008bc6b4214fbae013ec662c9863f2970d276c5cba23e7d7e3106b1ce6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
