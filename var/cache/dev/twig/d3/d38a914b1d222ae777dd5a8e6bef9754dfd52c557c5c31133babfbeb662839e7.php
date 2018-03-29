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
        $__internal_f4b38858853e6857db3dd53bd6c4ff45c6842418d989089c6b8f2f150acf719d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b38858853e6857db3dd53bd6c4ff45c6842418d989089c6b8f2f150acf719d->enter($__internal_f4b38858853e6857db3dd53bd6c4ff45c6842418d989089c6b8f2f150acf719d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_70f32c663962a5179d6a301bc8cb38337cec82c1f1c29c74d3081f316e2d5237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f32c663962a5179d6a301bc8cb38337cec82c1f1c29c74d3081f316e2d5237->enter($__internal_70f32c663962a5179d6a301bc8cb38337cec82c1f1c29c74d3081f316e2d5237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f4b38858853e6857db3dd53bd6c4ff45c6842418d989089c6b8f2f150acf719d->leave($__internal_f4b38858853e6857db3dd53bd6c4ff45c6842418d989089c6b8f2f150acf719d_prof);

        
        $__internal_70f32c663962a5179d6a301bc8cb38337cec82c1f1c29c74d3081f316e2d5237->leave($__internal_70f32c663962a5179d6a301bc8cb38337cec82c1f1c29c74d3081f316e2d5237_prof);

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
