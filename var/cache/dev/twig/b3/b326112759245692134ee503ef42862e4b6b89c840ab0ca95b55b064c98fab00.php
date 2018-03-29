<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8942207e1560a7567bd470103ce56d8ee9bbe0960def7c2f5a56c808c06a5be8 extends Twig_Template
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
        $__internal_e33cfd565d3eb89dd7d44c5ed0e9223eea2b5f65521523f764aee29248b7def9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33cfd565d3eb89dd7d44c5ed0e9223eea2b5f65521523f764aee29248b7def9->enter($__internal_e33cfd565d3eb89dd7d44c5ed0e9223eea2b5f65521523f764aee29248b7def9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_46ed27c90afc285b16a9d2b3c4d9df890a67b739d9c550f8efd4d17b08ca1536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ed27c90afc285b16a9d2b3c4d9df890a67b739d9c550f8efd4d17b08ca1536->enter($__internal_46ed27c90afc285b16a9d2b3c4d9df890a67b739d9c550f8efd4d17b08ca1536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e33cfd565d3eb89dd7d44c5ed0e9223eea2b5f65521523f764aee29248b7def9->leave($__internal_e33cfd565d3eb89dd7d44c5ed0e9223eea2b5f65521523f764aee29248b7def9_prof);

        
        $__internal_46ed27c90afc285b16a9d2b3c4d9df890a67b739d9c550f8efd4d17b08ca1536->leave($__internal_46ed27c90afc285b16a9d2b3c4d9df890a67b739d9c550f8efd4d17b08ca1536_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
