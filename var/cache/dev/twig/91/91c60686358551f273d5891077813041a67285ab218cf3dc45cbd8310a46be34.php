<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_3b54a6c22733d4e41f83a9ec07098dbbf5f84a9857f3ca782bc1e6fcfe02593d extends Twig_Template
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
<<<<<<< HEAD
        $__internal_b9c89cdaa1ea1925b4d49ebeb5d1752aa0d08759a2a5d7e731e68aa650284b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c89cdaa1ea1925b4d49ebeb5d1752aa0d08759a2a5d7e731e68aa650284b07->enter($__internal_b9c89cdaa1ea1925b4d49ebeb5d1752aa0d08759a2a5d7e731e68aa650284b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_f9339cfd7bd90a9ccc197faa2686a07532979a86bafbabf062b62e8f9f66f730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9339cfd7bd90a9ccc197faa2686a07532979a86bafbabf062b62e8f9f66f730->enter($__internal_f9339cfd7bd90a9ccc197faa2686a07532979a86bafbabf062b62e8f9f66f730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
        $__internal_110c154a11c816b1d2486a465225e3067022b82504c25cb75fe956b29b0736b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110c154a11c816b1d2486a465225e3067022b82504c25cb75fe956b29b0736b5->enter($__internal_110c154a11c816b1d2486a465225e3067022b82504c25cb75fe956b29b0736b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_04b447e329b408d383bfdf8e0265a2416ec522d026536b6084f37392f037f599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b447e329b408d383bfdf8e0265a2416ec522d026536b6084f37392f037f599->enter($__internal_04b447e329b408d383bfdf8e0265a2416ec522d026536b6084f37392f037f599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" accesskey=\"D\">
        ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
<<<<<<< HEAD
                $__internal_a0a83ebf7eab85e8d42828a87ed55f26567147104ff498e7690a279cd069263e = array("collector" => $this->getAttribute(                // line 13
=======
                $__internal_1b406758fcde9e5010537acbd7c635f9a817d7935326b503619e0ea31a803917 = array("collector" => $this->getAttribute(                // line 13
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
(isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(                // line 15
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
(isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>                 // line 18
(isset($context["csp_script_nonce"]) ? $context["csp_script_nonce"] : $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>                 // line 19
(isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce")));
<<<<<<< HEAD
                if (!is_array($__internal_a0a83ebf7eab85e8d42828a87ed55f26567147104ff498e7690a279cd069263e)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_a0a83ebf7eab85e8d42828a87ed55f26567147104ff498e7690a279cd069263e);
=======
                if (!is_array($__internal_1b406758fcde9e5010537acbd7c635f9a817d7935326b503619e0ea31a803917)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_1b406758fcde9e5010537acbd7c635f9a817d7935326b503619e0ea31a803917);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
<<<<<<< HEAD
        $__internal_b9c89cdaa1ea1925b4d49ebeb5d1752aa0d08759a2a5d7e731e68aa650284b07->leave($__internal_b9c89cdaa1ea1925b4d49ebeb5d1752aa0d08759a2a5d7e731e68aa650284b07_prof);

        
        $__internal_f9339cfd7bd90a9ccc197faa2686a07532979a86bafbabf062b62e8f9f66f730->leave($__internal_f9339cfd7bd90a9ccc197faa2686a07532979a86bafbabf062b62e8f9f66f730_prof);
=======
        $__internal_110c154a11c816b1d2486a465225e3067022b82504c25cb75fe956b29b0736b5->leave($__internal_110c154a11c816b1d2486a465225e3067022b82504c25cb75fe956b29b0736b5_prof);

        
        $__internal_04b447e329b408d383bfdf8e0265a2416ec522d026536b6084f37392f037f599->leave($__internal_04b447e329b408d383bfdf8e0265a2416ec522d026536b6084f37392f037f599_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  47 => 9,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
<<<<<<< HEAD
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar.html.twig");
=======
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar.html.twig");
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b
    }
}