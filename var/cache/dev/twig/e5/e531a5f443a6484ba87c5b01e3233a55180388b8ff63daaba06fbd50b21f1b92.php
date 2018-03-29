<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e430b77aba1bd6b68b9d06c09bc219d12f2f2766c0d072e69fd3cd5f5b4313de extends Twig_Template
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
        $__internal_a3f7c92c896cb0d4f32e6efb733a29e449f8a9a2dbf7fd00b517ae90ce011241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f7c92c896cb0d4f32e6efb733a29e449f8a9a2dbf7fd00b517ae90ce011241->enter($__internal_a3f7c92c896cb0d4f32e6efb733a29e449f8a9a2dbf7fd00b517ae90ce011241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8ca76056f82357a2d5724645cced91777a5714e066dddc6180f1cdbe1ffa4b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca76056f82357a2d5724645cced91777a5714e066dddc6180f1cdbe1ffa4b97->enter($__internal_8ca76056f82357a2d5724645cced91777a5714e066dddc6180f1cdbe1ffa4b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a3f7c92c896cb0d4f32e6efb733a29e449f8a9a2dbf7fd00b517ae90ce011241->leave($__internal_a3f7c92c896cb0d4f32e6efb733a29e449f8a9a2dbf7fd00b517ae90ce011241_prof);

        
        $__internal_8ca76056f82357a2d5724645cced91777a5714e066dddc6180f1cdbe1ffa4b97->leave($__internal_8ca76056f82357a2d5724645cced91777a5714e066dddc6180f1cdbe1ffa4b97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
