<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_08569cd4e449a1d5546ae4811cb8d557b7285fcd2d1551d0027dd3d2334c1dd6 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/00/00e8e972563ae91f87a9354982af6d46497f242d336c328cd86cc1105eaa4f54.php
        $__internal_ceac937a0654ad9909b6d386c6c26404faa8db5ea56bfd960570469783124c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceac937a0654ad9909b6d386c6c26404faa8db5ea56bfd960570469783124c6e->enter($__internal_ceac937a0654ad9909b6d386c6c26404faa8db5ea56bfd960570469783124c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_4543b47851950dc09b7cdcd844836d0c31dd9701cdef8a582a361b284bd693f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4543b47851950dc09b7cdcd844836d0c31dd9701cdef8a582a361b284bd693f3->enter($__internal_4543b47851950dc09b7cdcd844836d0c31dd9701cdef8a582a361b284bd693f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

=======
>>>>>>> f482a985a4bbf043b6a665c3a3f84d4121c56088:var/cache/prod/twig/f1/f14ee7a37811435ae0073b559fb0bb8ef23b117f81bccd1bf5e087c1b8d87d1e.php
        // line 1
        $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? null)), "channel", array(), "any", true, true);
        // line 2
        echo "
<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            ";
        // line 7
        if (($context["channel_is_defined"] ?? null)) {
            echo "<th>Channel</th>";
        }
        // line 8
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "        ";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                // line 15
                echo "            ";
                $context["status"] = "error";
                // line 16
                echo "        ";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                // line 17
                echo "            ";
                $context["status"] = "warning";
                // line 18
                echo "        ";
            } else {
                // line 19
                echo "            ";
                $context["severity"] = (($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array()), false)) : (false));
                // line 20
                echo "            ";
                $context["status"] = ((((($context["severity"] ?? null) === constant("E_DEPRECATED")) || (($context["severity"] ?? null) === constant("E_USER_DEPRECATED")))) ? ("warning") : ("normal"));
                // line 21
                echo "        ";
            }
            // line 22
            echo "        <tr class=\"status-";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 27
            if (($context["channel_is_defined"] ?? null)) {
                // line 28
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 32
            echo "            <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>
";
<<<<<<< HEAD:var/cache/dev/twig/00/00e8e972563ae91f87a9354982af6d46497f242d336c328cd86cc1105eaa4f54.php
        
        $__internal_ceac937a0654ad9909b6d386c6c26404faa8db5ea56bfd960570469783124c6e->leave($__internal_ceac937a0654ad9909b6d386c6c26404faa8db5ea56bfd960570469783124c6e_prof);

        
        $__internal_4543b47851950dc09b7cdcd844836d0c31dd9701cdef8a582a361b284bd693f3->leave($__internal_4543b47851950dc09b7cdcd844836d0c31dd9701cdef8a582a361b284bd693f3_prof);

=======
>>>>>>> f482a985a4bbf043b6a665c3a3f84d4121c56088:var/cache/prod/twig/f1/f14ee7a37811435ae0073b559fb0bb8ef23b117f81bccd1bf5e087c1b8d87d1e.php
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  93 => 32,  87 => 29,  84 => 28,  82 => 27,  77 => 25,  73 => 24,  67 => 22,  64 => 21,  61 => 20,  58 => 19,  55 => 18,  52 => 17,  49 => 16,  46 => 15,  43 => 14,  39 => 13,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:logs.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
