<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e71a413152038b47de4c0f732045dacd46411bb2022b8d2e839899c2d27572f8 extends Twig_Template
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
        $__internal_c5b9f8ef96118c75dd7e58a56e3ff6b5a72852ffcb307e4a6e33fd4681b49ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b9f8ef96118c75dd7e58a56e3ff6b5a72852ffcb307e4a6e33fd4681b49ff1->enter($__internal_c5b9f8ef96118c75dd7e58a56e3ff6b5a72852ffcb307e4a6e33fd4681b49ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2d27a4bb787c84a8c4944fbd9c946e8583eb31f553a5f4b8ad60a2f924f63682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d27a4bb787c84a8c4944fbd9c946e8583eb31f553a5f4b8ad60a2f924f63682->enter($__internal_2d27a4bb787c84a8c4944fbd9c946e8583eb31f553a5f4b8ad60a2f924f63682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c5b9f8ef96118c75dd7e58a56e3ff6b5a72852ffcb307e4a6e33fd4681b49ff1->leave($__internal_c5b9f8ef96118c75dd7e58a56e3ff6b5a72852ffcb307e4a6e33fd4681b49ff1_prof);

        
        $__internal_2d27a4bb787c84a8c4944fbd9c946e8583eb31f553a5f4b8ad60a2f924f63682->leave($__internal_2d27a4bb787c84a8c4944fbd9c946e8583eb31f553a5f4b8ad60a2f924f63682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
