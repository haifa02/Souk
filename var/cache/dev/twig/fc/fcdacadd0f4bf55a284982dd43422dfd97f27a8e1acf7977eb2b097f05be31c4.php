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
        $__internal_d351a73eedb1910e9e8e7ae882981a3ab64dc6c95f467367b5d94ff7b07f8f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d351a73eedb1910e9e8e7ae882981a3ab64dc6c95f467367b5d94ff7b07f8f95->enter($__internal_d351a73eedb1910e9e8e7ae882981a3ab64dc6c95f467367b5d94ff7b07f8f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9e652eb114baf0272e52de9ca1f55ed0229fa8a4f58e6990af1990d9a9311a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e652eb114baf0272e52de9ca1f55ed0229fa8a4f58e6990af1990d9a9311a1e->enter($__internal_9e652eb114baf0272e52de9ca1f55ed0229fa8a4f58e6990af1990d9a9311a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d351a73eedb1910e9e8e7ae882981a3ab64dc6c95f467367b5d94ff7b07f8f95->leave($__internal_d351a73eedb1910e9e8e7ae882981a3ab64dc6c95f467367b5d94ff7b07f8f95_prof);

        
        $__internal_9e652eb114baf0272e52de9ca1f55ed0229fa8a4f58e6990af1990d9a9311a1e->leave($__internal_9e652eb114baf0272e52de9ca1f55ed0229fa8a4f58e6990af1990d9a9311a1e_prof);

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
