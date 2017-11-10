<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_087cb5a5d76726d40a9792903c5d0646b3d17c32367704bee9b24f657d5a4a4e extends Twig_Template
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
        if ((is_string($__internal_c963d6611144d897cd9200e6382e86ece4fc4dbd30a51e7abfa48db107a541fb = ($context["php_version"] ?? null)) && is_string($__internal_0755b35782664a5215d66dff4bc9fe2b0c2a5b1b5645bfa9b3b05ab82cc02d15 = "5.4") && ('' === $__internal_0755b35782664a5215d66dff4bc9fe2b0c2a5b1b5645bfa9b3b05ab82cc02d15 || 0 === strpos($__internal_c963d6611144d897cd9200e6382e86ece4fc4dbd30a51e7abfa48db107a541fb, $__internal_0755b35782664a5215d66dff4bc9fe2b0c2a5b1b5645bfa9b3b05ab82cc02d15)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
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
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "C:\\xampp\\htdocs\\g5-dev\\user\\plugins\\gantry5\\admin\\templates\\partials\\php_unsupported.html.twig");
    }
}
