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
        $__internal_b909aaac7af95ec12a1c13b0bb8e2b53904ca38e2195690bf77983e81f3f01c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b909aaac7af95ec12a1c13b0bb8e2b53904ca38e2195690bf77983e81f3f01c5->enter($__internal_b909aaac7af95ec12a1c13b0bb8e2b53904ca38e2195690bf77983e81f3f01c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ebe5922e96bac92acbb4729ceddfcde460273cbaa1ba92c2b36cb1eefce3b370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe5922e96bac92acbb4729ceddfcde460273cbaa1ba92c2b36cb1eefce3b370->enter($__internal_ebe5922e96bac92acbb4729ceddfcde460273cbaa1ba92c2b36cb1eefce3b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b909aaac7af95ec12a1c13b0bb8e2b53904ca38e2195690bf77983e81f3f01c5->leave($__internal_b909aaac7af95ec12a1c13b0bb8e2b53904ca38e2195690bf77983e81f3f01c5_prof);

        
        $__internal_ebe5922e96bac92acbb4729ceddfcde460273cbaa1ba92c2b36cb1eefce3b370->leave($__internal_ebe5922e96bac92acbb4729ceddfcde460273cbaa1ba92c2b36cb1eefce3b370_prof);

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
