<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1d43af13bd7d7cf665227c04a180764f7851a2bb5f0f093327d156597ebbd820 extends Twig_Template
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
        $__internal_67f87ef9fcecc468461a32a365657e4bd1c83826aeb1c9874b7200bd0eee7b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f87ef9fcecc468461a32a365657e4bd1c83826aeb1c9874b7200bd0eee7b5c->enter($__internal_67f87ef9fcecc468461a32a365657e4bd1c83826aeb1c9874b7200bd0eee7b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_017a34f4535453d6455cb9657a7264c41adab7eeb5eca65e746dc5a7c8c6ba99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017a34f4535453d6455cb9657a7264c41adab7eeb5eca65e746dc5a7c8c6ba99->enter($__internal_017a34f4535453d6455cb9657a7264c41adab7eeb5eca65e746dc5a7c8c6ba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_67f87ef9fcecc468461a32a365657e4bd1c83826aeb1c9874b7200bd0eee7b5c->leave($__internal_67f87ef9fcecc468461a32a365657e4bd1c83826aeb1c9874b7200bd0eee7b5c_prof);

        
        $__internal_017a34f4535453d6455cb9657a7264c41adab7eeb5eca65e746dc5a7c8c6ba99->leave($__internal_017a34f4535453d6455cb9657a7264c41adab7eeb5eca65e746dc5a7c8c6ba99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
