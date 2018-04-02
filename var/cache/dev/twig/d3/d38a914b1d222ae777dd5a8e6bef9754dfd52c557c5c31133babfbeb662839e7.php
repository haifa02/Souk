<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ad08a8c28b84dfe0f7c4727338e061a96686233281ad3a628088403b650b7ee6 extends Twig_Template
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
        $__internal_0ee2ef9252782da9e8696e554c6579dc9ca7cf79c67c283ec836ff0a4899ffd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee2ef9252782da9e8696e554c6579dc9ca7cf79c67c283ec836ff0a4899ffd2->enter($__internal_0ee2ef9252782da9e8696e554c6579dc9ca7cf79c67c283ec836ff0a4899ffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_08b6e353ab800582c5a95ec4121079f67c7199d9798b4136ed22f7bf7063a6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b6e353ab800582c5a95ec4121079f67c7199d9798b4136ed22f7bf7063a6ac->enter($__internal_08b6e353ab800582c5a95ec4121079f67c7199d9798b4136ed22f7bf7063a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0ee2ef9252782da9e8696e554c6579dc9ca7cf79c67c283ec836ff0a4899ffd2->leave($__internal_0ee2ef9252782da9e8696e554c6579dc9ca7cf79c67c283ec836ff0a4899ffd2_prof);

        
        $__internal_08b6e353ab800582c5a95ec4121079f67c7199d9798b4136ed22f7bf7063a6ac->leave($__internal_08b6e353ab800582c5a95ec4121079f67c7199d9798b4136ed22f7bf7063a6ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
