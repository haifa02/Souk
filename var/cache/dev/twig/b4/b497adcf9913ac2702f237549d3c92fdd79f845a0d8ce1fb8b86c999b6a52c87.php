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
        $__internal_03e44f2f66bb8e0eeae28496e00e34b4b14608913aa3a0bcf39ba7ea09952ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e44f2f66bb8e0eeae28496e00e34b4b14608913aa3a0bcf39ba7ea09952ce6->enter($__internal_03e44f2f66bb8e0eeae28496e00e34b4b14608913aa3a0bcf39ba7ea09952ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cbc047d06a6d06f0a3db172e2a91f04f1786221a7f1548c37833daf443dfb2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc047d06a6d06f0a3db172e2a91f04f1786221a7f1548c37833daf443dfb2da->enter($__internal_cbc047d06a6d06f0a3db172e2a91f04f1786221a7f1548c37833daf443dfb2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_03e44f2f66bb8e0eeae28496e00e34b4b14608913aa3a0bcf39ba7ea09952ce6->leave($__internal_03e44f2f66bb8e0eeae28496e00e34b4b14608913aa3a0bcf39ba7ea09952ce6_prof);

        
        $__internal_cbc047d06a6d06f0a3db172e2a91f04f1786221a7f1548c37833daf443dfb2da->leave($__internal_cbc047d06a6d06f0a3db172e2a91f04f1786221a7f1548c37833daf443dfb2da_prof);

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
