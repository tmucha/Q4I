<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_5473fab78af045f00cc00cf71ad342e0b8f8043f8e65bb21c9019e92d652a167 extends Twig_Template
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
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_f4e780291e2fbd94ac17e923d58fce54369749c85ad2b62b45bfb4fd9e593568 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_69efbd6e6d3cdd8041c2cb6eec6841570cd08188135517f54f35f826b1ceb986 = "5.4") && ('' === $__internal_69efbd6e6d3cdd8041c2cb6eec6841570cd08188135517f54f35f826b1ceb986 || 0 === strpos($__internal_f4e780291e2fbd94ac17e923d58fce54369749c85ad2b62b45bfb4fd9e593568, $__internal_69efbd6e6d3cdd8041c2cb6eec6841570cd08188135517f54f35f826b1ceb986)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "C:\\xampp\\htdocs\\g5\\user\\plugins\\gantry5\\admin\\templates\\partials\\php_unsupported.html.twig");
    }
}
