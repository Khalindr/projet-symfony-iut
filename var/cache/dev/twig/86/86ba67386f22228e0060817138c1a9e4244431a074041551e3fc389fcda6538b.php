<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_e8f650d092fcf078d80d24a28b3aaf38d82e9fa8d71980f3b5221b92e5ba0a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dbba8fb816e8baf295fb64bd671255151debb5efe0c9bda567e89288b17aa6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbba8fb816e8baf295fb64bd671255151debb5efe0c9bda567e89288b17aa6f->enter($__internal_8dbba8fb816e8baf295fb64bd671255151debb5efe0c9bda567e89288b17aa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_0110a2dff6c453035dc6a8cfd8102430e7aca049993e34cb0a499bda8341de86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0110a2dff6c453035dc6a8cfd8102430e7aca049993e34cb0a499bda8341de86->enter($__internal_0110a2dff6c453035dc6a8cfd8102430e7aca049993e34cb0a499bda8341de86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_8dbba8fb816e8baf295fb64bd671255151debb5efe0c9bda567e89288b17aa6f->leave($__internal_8dbba8fb816e8baf295fb64bd671255151debb5efe0c9bda567e89288b17aa6f_prof);

        
        $__internal_0110a2dff6c453035dc6a8cfd8102430e7aca049993e34cb0a499bda8341de86->leave($__internal_0110a2dff6c453035dc6a8cfd8102430e7aca049993e34cb0a499bda8341de86_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_85200c3b8d11c4a6c3ba051921e2a8a28cf8421881bf9c7a67c40d5564066bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85200c3b8d11c4a6c3ba051921e2a8a28cf8421881bf9c7a67c40d5564066bc2->enter($__internal_85200c3b8d11c4a6c3ba051921e2a8a28cf8421881bf9c7a67c40d5564066bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_bd33c81cc82fa09c683a29ecb74d9359baa8a2c8fd915b71b42f4d546b76cdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd33c81cc82fa09c683a29ecb74d9359baa8a2c8fd915b71b42f4d546b76cdbb->enter($__internal_bd33c81cc82fa09c683a29ecb74d9359baa8a2c8fd915b71b42f4d546b76cdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_bd33c81cc82fa09c683a29ecb74d9359baa8a2c8fd915b71b42f4d546b76cdbb->leave($__internal_bd33c81cc82fa09c683a29ecb74d9359baa8a2c8fd915b71b42f4d546b76cdbb_prof);

        
        $__internal_85200c3b8d11c4a6c3ba051921e2a8a28cf8421881bf9c7a67c40d5564066bc2->leave($__internal_85200c3b8d11c4a6c3ba051921e2a8a28cf8421881bf9c7a67c40d5564066bc2_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_36b706ddbb6c17add97081dbcf1932c225d41a541ee701493ecd4e09f7b71848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b706ddbb6c17add97081dbcf1932c225d41a541ee701493ecd4e09f7b71848->enter($__internal_36b706ddbb6c17add97081dbcf1932c225d41a541ee701493ecd4e09f7b71848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_24a17a5e4c3dcbff3c9a16ebb7cdb8acc2518686ac07e37b533d8a0644ccfd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a17a5e4c3dcbff3c9a16ebb7cdb8acc2518686ac07e37b533d8a0644ccfd31->enter($__internal_24a17a5e4c3dcbff3c9a16ebb7cdb8acc2518686ac07e37b533d8a0644ccfd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_24a17a5e4c3dcbff3c9a16ebb7cdb8acc2518686ac07e37b533d8a0644ccfd31->leave($__internal_24a17a5e4c3dcbff3c9a16ebb7cdb8acc2518686ac07e37b533d8a0644ccfd31_prof);

        
        $__internal_36b706ddbb6c17add97081dbcf1932c225d41a541ee701493ecd4e09f7b71848->leave($__internal_36b706ddbb6c17add97081dbcf1932c225d41a541ee701493ecd4e09f7b71848_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_3a896b704372bd4713bc16464117683b68836e2cf71b019403871e953e3476d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a896b704372bd4713bc16464117683b68836e2cf71b019403871e953e3476d7->enter($__internal_3a896b704372bd4713bc16464117683b68836e2cf71b019403871e953e3476d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_ae21fbfb3c9f2744e189b831a5b5a01e3808ec8b38d7745591d882dc5352c6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae21fbfb3c9f2744e189b831a5b5a01e3808ec8b38d7745591d882dc5352c6df->enter($__internal_ae21fbfb3c9f2744e189b831a5b5a01e3808ec8b38d7745591d882dc5352c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ae21fbfb3c9f2744e189b831a5b5a01e3808ec8b38d7745591d882dc5352c6df->leave($__internal_ae21fbfb3c9f2744e189b831a5b5a01e3808ec8b38d7745591d882dc5352c6df_prof);

        
        $__internal_3a896b704372bd4713bc16464117683b68836e2cf71b019403871e953e3476d7->leave($__internal_3a896b704372bd4713bc16464117683b68836e2cf71b019403871e953e3476d7_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_7ddeef36d99c313e0b9011692e19889d0956c842a607966c26c5d2a2a5dcbce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ddeef36d99c313e0b9011692e19889d0956c842a607966c26c5d2a2a5dcbce1->enter($__internal_7ddeef36d99c313e0b9011692e19889d0956c842a607966c26c5d2a2a5dcbce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_a89efcb2dbcb492458a4158c0ba8b2af79bf51d69ae2b2568bf2eb7649823869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89efcb2dbcb492458a4158c0ba8b2af79bf51d69ae2b2568bf2eb7649823869->enter($__internal_a89efcb2dbcb492458a4158c0ba8b2af79bf51d69ae2b2568bf2eb7649823869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a89efcb2dbcb492458a4158c0ba8b2af79bf51d69ae2b2568bf2eb7649823869->leave($__internal_a89efcb2dbcb492458a4158c0ba8b2af79bf51d69ae2b2568bf2eb7649823869_prof);

        
        $__internal_7ddeef36d99c313e0b9011692e19889d0956c842a607966c26c5d2a2a5dcbce1->leave($__internal_7ddeef36d99c313e0b9011692e19889d0956c842a607966c26c5d2a2a5dcbce1_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_3244a13020e321adabe584d2d69f84275e466cb27ac9625638b9ebe972e7a91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3244a13020e321adabe584d2d69f84275e466cb27ac9625638b9ebe972e7a91e->enter($__internal_3244a13020e321adabe584d2d69f84275e466cb27ac9625638b9ebe972e7a91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_a41c518392167e59a188fb26579def24416b8a4b2550c31a6d193e200da2cec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41c518392167e59a188fb26579def24416b8a4b2550c31a6d193e200da2cec2->enter($__internal_a41c518392167e59a188fb26579def24416b8a4b2550c31a6d193e200da2cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_a41c518392167e59a188fb26579def24416b8a4b2550c31a6d193e200da2cec2->leave($__internal_a41c518392167e59a188fb26579def24416b8a4b2550c31a6d193e200da2cec2_prof);

        
        $__internal_3244a13020e321adabe584d2d69f84275e466cb27ac9625638b9ebe972e7a91e->leave($__internal_3244a13020e321adabe584d2d69f84275e466cb27ac9625638b9ebe972e7a91e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c51097afad8840434d0d3e146868bde9434d3adba01a34cb8956b67eed7e509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c51097afad8840434d0d3e146868bde9434d3adba01a34cb8956b67eed7e509->enter($__internal_5c51097afad8840434d0d3e146868bde9434d3adba01a34cb8956b67eed7e509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed02a1f1a87e2b598ae06124d2c1c93715971356578a5aff29c19e2f22e70c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed02a1f1a87e2b598ae06124d2c1c93715971356578a5aff29c19e2f22e70c0d->enter($__internal_ed02a1f1a87e2b598ae06124d2c1c93715971356578a5aff29c19e2f22e70c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_ed02a1f1a87e2b598ae06124d2c1c93715971356578a5aff29c19e2f22e70c0d->leave($__internal_ed02a1f1a87e2b598ae06124d2c1c93715971356578a5aff29c19e2f22e70c0d_prof);

        
        $__internal_5c51097afad8840434d0d3e146868bde9434d3adba01a34cb8956b67eed7e509->leave($__internal_5c51097afad8840434d0d3e146868bde9434d3adba01a34cb8956b67eed7e509_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5778064a3244be5a556735b6ea5f43568a634e76795c7cd02dd8476ce58f63e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5778064a3244be5a556735b6ea5f43568a634e76795c7cd02dd8476ce58f63e8->enter($__internal_5778064a3244be5a556735b6ea5f43568a634e76795c7cd02dd8476ce58f63e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_31e80dc8fe4ff9ffb9a9a90551a168f7b65f7d7226511ae09fd1f71dcf6e485f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e80dc8fe4ff9ffb9a9a90551a168f7b65f7d7226511ae09fd1f71dcf6e485f->enter($__internal_31e80dc8fe4ff9ffb9a9a90551a168f7b65f7d7226511ae09fd1f71dcf6e485f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_31e80dc8fe4ff9ffb9a9a90551a168f7b65f7d7226511ae09fd1f71dcf6e485f->leave($__internal_31e80dc8fe4ff9ffb9a9a90551a168f7b65f7d7226511ae09fd1f71dcf6e485f_prof);

        
        $__internal_5778064a3244be5a556735b6ea5f43568a634e76795c7cd02dd8476ce58f63e8->leave($__internal_5778064a3244be5a556735b6ea5f43568a634e76795c7cd02dd8476ce58f63e8_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_37c99e28a643e1f64d4ce6045e48f9ec53c53474aacf91dbd0d04c993f62bc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c99e28a643e1f64d4ce6045e48f9ec53c53474aacf91dbd0d04c993f62bc7f->enter($__internal_37c99e28a643e1f64d4ce6045e48f9ec53c53474aacf91dbd0d04c993f62bc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e9e804b6b31d3226536ea0ec753b1610534f5b37fd3f0fe0d1ed9880da3cf251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e804b6b31d3226536ea0ec753b1610534f5b37fd3f0fe0d1ed9880da3cf251->enter($__internal_e9e804b6b31d3226536ea0ec753b1610534f5b37fd3f0fe0d1ed9880da3cf251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_e9e804b6b31d3226536ea0ec753b1610534f5b37fd3f0fe0d1ed9880da3cf251->leave($__internal_e9e804b6b31d3226536ea0ec753b1610534f5b37fd3f0fe0d1ed9880da3cf251_prof);

        
        $__internal_37c99e28a643e1f64d4ce6045e48f9ec53c53474aacf91dbd0d04c993f62bc7f->leave($__internal_37c99e28a643e1f64d4ce6045e48f9ec53c53474aacf91dbd0d04c993f62bc7f_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_4938353ce478280e8c51bf55c5af8e5b2874bd3e120a9e0a441e9200b448afbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4938353ce478280e8c51bf55c5af8e5b2874bd3e120a9e0a441e9200b448afbe->enter($__internal_4938353ce478280e8c51bf55c5af8e5b2874bd3e120a9e0a441e9200b448afbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_4e4a70e079d6c704f4c8789962d9555285c89be305f737d07e9c98b7c3bf1fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4a70e079d6c704f4c8789962d9555285c89be305f737d07e9c98b7c3bf1fe2->enter($__internal_4e4a70e079d6c704f4c8789962d9555285c89be305f737d07e9c98b7c3bf1fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_4e4a70e079d6c704f4c8789962d9555285c89be305f737d07e9c98b7c3bf1fe2->leave($__internal_4e4a70e079d6c704f4c8789962d9555285c89be305f737d07e9c98b7c3bf1fe2_prof);

        
        $__internal_4938353ce478280e8c51bf55c5af8e5b2874bd3e120a9e0a441e9200b448afbe->leave($__internal_4938353ce478280e8c51bf55c5af8e5b2874bd3e120a9e0a441e9200b448afbe_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_9cddd95996dee97feb87da302e5d3a2bf6850a6685224da83c2baa847238c0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cddd95996dee97feb87da302e5d3a2bf6850a6685224da83c2baa847238c0c4->enter($__internal_9cddd95996dee97feb87da302e5d3a2bf6850a6685224da83c2baa847238c0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b27e85975458a90e77d87f445a340b63fbcb1a9f96067181e93c8eb150981d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27e85975458a90e77d87f445a340b63fbcb1a9f96067181e93c8eb150981d98->enter($__internal_b27e85975458a90e77d87f445a340b63fbcb1a9f96067181e93c8eb150981d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_b27e85975458a90e77d87f445a340b63fbcb1a9f96067181e93c8eb150981d98->leave($__internal_b27e85975458a90e77d87f445a340b63fbcb1a9f96067181e93c8eb150981d98_prof);

        
        $__internal_9cddd95996dee97feb87da302e5d3a2bf6850a6685224da83c2baa847238c0c4->leave($__internal_9cddd95996dee97feb87da302e5d3a2bf6850a6685224da83c2baa847238c0c4_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_2d8e497b139dcf5d6006569fa878bf53aa26e9baf043cc21be2b089f328e6950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8e497b139dcf5d6006569fa878bf53aa26e9baf043cc21be2b089f328e6950->enter($__internal_2d8e497b139dcf5d6006569fa878bf53aa26e9baf043cc21be2b089f328e6950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_34c606b004b37b7b3fec61bcec2dbe1347d8f9999e5315552fa69420332e78a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c606b004b37b7b3fec61bcec2dbe1347d8f9999e5315552fa69420332e78a3->enter($__internal_34c606b004b37b7b3fec61bcec2dbe1347d8f9999e5315552fa69420332e78a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_34c606b004b37b7b3fec61bcec2dbe1347d8f9999e5315552fa69420332e78a3->leave($__internal_34c606b004b37b7b3fec61bcec2dbe1347d8f9999e5315552fa69420332e78a3_prof);

        
        $__internal_2d8e497b139dcf5d6006569fa878bf53aa26e9baf043cc21be2b089f328e6950->leave($__internal_2d8e497b139dcf5d6006569fa878bf53aa26e9baf043cc21be2b089f328e6950_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_67b45b2b2f619add81bd71f243e01d23f7c742ee8feaa5452aded4cf44dc6218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b45b2b2f619add81bd71f243e01d23f7c742ee8feaa5452aded4cf44dc6218->enter($__internal_67b45b2b2f619add81bd71f243e01d23f7c742ee8feaa5452aded4cf44dc6218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_f7cca508717c7bcbeef232fd6c47d899dea8106a4cf29056baf52a8b003b86b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cca508717c7bcbeef232fd6c47d899dea8106a4cf29056baf52a8b003b86b2->enter($__internal_f7cca508717c7bcbeef232fd6c47d899dea8106a4cf29056baf52a8b003b86b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_f7cca508717c7bcbeef232fd6c47d899dea8106a4cf29056baf52a8b003b86b2->leave($__internal_f7cca508717c7bcbeef232fd6c47d899dea8106a4cf29056baf52a8b003b86b2_prof);

        
        $__internal_67b45b2b2f619add81bd71f243e01d23f7c742ee8feaa5452aded4cf44dc6218->leave($__internal_67b45b2b2f619add81bd71f243e01d23f7c742ee8feaa5452aded4cf44dc6218_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_b7d2a9ec63ff477b01bd968a897ff95f37625e9eaf6bbdf17ec654e31c5e7a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d2a9ec63ff477b01bd968a897ff95f37625e9eaf6bbdf17ec654e31c5e7a9e->enter($__internal_b7d2a9ec63ff477b01bd968a897ff95f37625e9eaf6bbdf17ec654e31c5e7a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_2ccacbed9da275eecf016ce2a2889d20e6a3a5e2860219f325e19c3b56951512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccacbed9da275eecf016ce2a2889d20e6a3a5e2860219f325e19c3b56951512->enter($__internal_2ccacbed9da275eecf016ce2a2889d20e6a3a5e2860219f325e19c3b56951512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_2ccacbed9da275eecf016ce2a2889d20e6a3a5e2860219f325e19c3b56951512->leave($__internal_2ccacbed9da275eecf016ce2a2889d20e6a3a5e2860219f325e19c3b56951512_prof);

        
        $__internal_b7d2a9ec63ff477b01bd968a897ff95f37625e9eaf6bbdf17ec654e31c5e7a9e->leave($__internal_b7d2a9ec63ff477b01bd968a897ff95f37625e9eaf6bbdf17ec654e31c5e7a9e_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_89aa80532a25ae9f2e846d403eb966512e64832067b67a9739c21332888da80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89aa80532a25ae9f2e846d403eb966512e64832067b67a9739c21332888da80a->enter($__internal_89aa80532a25ae9f2e846d403eb966512e64832067b67a9739c21332888da80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_76d27b0e0cbb899107416ebd1195ad7272ad29a5a8b0cfff99c36479adb44d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d27b0e0cbb899107416ebd1195ad7272ad29a5a8b0cfff99c36479adb44d9c->enter($__internal_76d27b0e0cbb899107416ebd1195ad7272ad29a5a8b0cfff99c36479adb44d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_76d27b0e0cbb899107416ebd1195ad7272ad29a5a8b0cfff99c36479adb44d9c->leave($__internal_76d27b0e0cbb899107416ebd1195ad7272ad29a5a8b0cfff99c36479adb44d9c_prof);

        
        $__internal_89aa80532a25ae9f2e846d403eb966512e64832067b67a9739c21332888da80a->leave($__internal_89aa80532a25ae9f2e846d403eb966512e64832067b67a9739c21332888da80a_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e5c77bac36b685b2a132a320944bac8fa6dc810da01ed9d64d4b36aa75c4a2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c77bac36b685b2a132a320944bac8fa6dc810da01ed9d64d4b36aa75c4a2e0->enter($__internal_e5c77bac36b685b2a132a320944bac8fa6dc810da01ed9d64d4b36aa75c4a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_48eaa7583dd444e7b619a1a8caca8949b2a099399921fe0406eb0a679f298716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48eaa7583dd444e7b619a1a8caca8949b2a099399921fe0406eb0a679f298716->enter($__internal_48eaa7583dd444e7b619a1a8caca8949b2a099399921fe0406eb0a679f298716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_48eaa7583dd444e7b619a1a8caca8949b2a099399921fe0406eb0a679f298716->leave($__internal_48eaa7583dd444e7b619a1a8caca8949b2a099399921fe0406eb0a679f298716_prof);

        
        $__internal_e5c77bac36b685b2a132a320944bac8fa6dc810da01ed9d64d4b36aa75c4a2e0->leave($__internal_e5c77bac36b685b2a132a320944bac8fa6dc810da01ed9d64d4b36aa75c4a2e0_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_cb020ea65fc9bcfadf21a8909a22000fd775b42030851df4642d15fbcafb431a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb020ea65fc9bcfadf21a8909a22000fd775b42030851df4642d15fbcafb431a->enter($__internal_cb020ea65fc9bcfadf21a8909a22000fd775b42030851df4642d15fbcafb431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_d56aa604c804ab639ed4e2c6af8998badd21bf20f91e189eeb2047cc1dd36af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56aa604c804ab639ed4e2c6af8998badd21bf20f91e189eeb2047cc1dd36af2->enter($__internal_d56aa604c804ab639ed4e2c6af8998badd21bf20f91e189eeb2047cc1dd36af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_d56aa604c804ab639ed4e2c6af8998badd21bf20f91e189eeb2047cc1dd36af2->leave($__internal_d56aa604c804ab639ed4e2c6af8998badd21bf20f91e189eeb2047cc1dd36af2_prof);

        
        $__internal_cb020ea65fc9bcfadf21a8909a22000fd775b42030851df4642d15fbcafb431a->leave($__internal_cb020ea65fc9bcfadf21a8909a22000fd775b42030851df4642d15fbcafb431a_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_4045cd4fa63e43ffdb7c1d7b65e14897775dc19ad0a1189c101aee06f9eb2eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4045cd4fa63e43ffdb7c1d7b65e14897775dc19ad0a1189c101aee06f9eb2eb3->enter($__internal_4045cd4fa63e43ffdb7c1d7b65e14897775dc19ad0a1189c101aee06f9eb2eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ab4231c23df3c504899c8560a12f50081f7cb9f969519f1803ab8c796a25d20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4231c23df3c504899c8560a12f50081f7cb9f969519f1803ab8c796a25d20e->enter($__internal_ab4231c23df3c504899c8560a12f50081f7cb9f969519f1803ab8c796a25d20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_ab4231c23df3c504899c8560a12f50081f7cb9f969519f1803ab8c796a25d20e->leave($__internal_ab4231c23df3c504899c8560a12f50081f7cb9f969519f1803ab8c796a25d20e_prof);

        
        $__internal_4045cd4fa63e43ffdb7c1d7b65e14897775dc19ad0a1189c101aee06f9eb2eb3->leave($__internal_4045cd4fa63e43ffdb7c1d7b65e14897775dc19ad0a1189c101aee06f9eb2eb3_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_ced9fa888d6db66afa47fe4eeaf88defaeb1ed0d77ec5b868ba9593e5626e26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced9fa888d6db66afa47fe4eeaf88defaeb1ed0d77ec5b868ba9593e5626e26f->enter($__internal_ced9fa888d6db66afa47fe4eeaf88defaeb1ed0d77ec5b868ba9593e5626e26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_b7c1701ab0fa80655cf270e32561e33e862bd812c3fa583947eed7a6e825d083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c1701ab0fa80655cf270e32561e33e862bd812c3fa583947eed7a6e825d083->enter($__internal_b7c1701ab0fa80655cf270e32561e33e862bd812c3fa583947eed7a6e825d083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_b7c1701ab0fa80655cf270e32561e33e862bd812c3fa583947eed7a6e825d083->leave($__internal_b7c1701ab0fa80655cf270e32561e33e862bd812c3fa583947eed7a6e825d083_prof);

        
        $__internal_ced9fa888d6db66afa47fe4eeaf88defaeb1ed0d77ec5b868ba9593e5626e26f->leave($__internal_ced9fa888d6db66afa47fe4eeaf88defaeb1ed0d77ec5b868ba9593e5626e26f_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_47883a001e220909c98738ac4755f46715f7c905c1a48ace848e2708f7ccd90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47883a001e220909c98738ac4755f46715f7c905c1a48ace848e2708f7ccd90a->enter($__internal_47883a001e220909c98738ac4755f46715f7c905c1a48ace848e2708f7ccd90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_b20605dbe5d69b04fe902134311c983eac833cd791be2e5e500892fdf5c5aaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20605dbe5d69b04fe902134311c983eac833cd791be2e5e500892fdf5c5aaae->enter($__internal_b20605dbe5d69b04fe902134311c983eac833cd791be2e5e500892fdf5c5aaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_b20605dbe5d69b04fe902134311c983eac833cd791be2e5e500892fdf5c5aaae->leave($__internal_b20605dbe5d69b04fe902134311c983eac833cd791be2e5e500892fdf5c5aaae_prof);

        
        $__internal_47883a001e220909c98738ac4755f46715f7c905c1a48ace848e2708f7ccd90a->leave($__internal_47883a001e220909c98738ac4755f46715f7c905c1a48ace848e2708f7ccd90a_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_16d53cb0db0f1c501fd4689310f5a83b86f3cccabd6598dd9ca29203492ec7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d53cb0db0f1c501fd4689310f5a83b86f3cccabd6598dd9ca29203492ec7c0->enter($__internal_16d53cb0db0f1c501fd4689310f5a83b86f3cccabd6598dd9ca29203492ec7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a7b85233b9d25b8fbe471e5243b7fdcddbe3811805eed06278d212b657fb0cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b85233b9d25b8fbe471e5243b7fdcddbe3811805eed06278d212b657fb0cc3->enter($__internal_a7b85233b9d25b8fbe471e5243b7fdcddbe3811805eed06278d212b657fb0cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_a7b85233b9d25b8fbe471e5243b7fdcddbe3811805eed06278d212b657fb0cc3->leave($__internal_a7b85233b9d25b8fbe471e5243b7fdcddbe3811805eed06278d212b657fb0cc3_prof);

        
        $__internal_16d53cb0db0f1c501fd4689310f5a83b86f3cccabd6598dd9ca29203492ec7c0->leave($__internal_16d53cb0db0f1c501fd4689310f5a83b86f3cccabd6598dd9ca29203492ec7c0_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_bc2566cd6b473745df7507ac8b6b3e02425652851b41b5493ee5d9cbfb1e420c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2566cd6b473745df7507ac8b6b3e02425652851b41b5493ee5d9cbfb1e420c->enter($__internal_bc2566cd6b473745df7507ac8b6b3e02425652851b41b5493ee5d9cbfb1e420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_72aec67eea368a41eaadd71a7ad82e6f099d154c8884fd5882b5df1dc0a5d832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72aec67eea368a41eaadd71a7ad82e6f099d154c8884fd5882b5df1dc0a5d832->enter($__internal_72aec67eea368a41eaadd71a7ad82e6f099d154c8884fd5882b5df1dc0a5d832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_72aec67eea368a41eaadd71a7ad82e6f099d154c8884fd5882b5df1dc0a5d832->leave($__internal_72aec67eea368a41eaadd71a7ad82e6f099d154c8884fd5882b5df1dc0a5d832_prof);

        
        $__internal_bc2566cd6b473745df7507ac8b6b3e02425652851b41b5493ee5d9cbfb1e420c->leave($__internal_bc2566cd6b473745df7507ac8b6b3e02425652851b41b5493ee5d9cbfb1e420c_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_b0056e6987bd09126df9bcd607cfd02ebcc2bcc036e98aa31acae36474de9d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0056e6987bd09126df9bcd607cfd02ebcc2bcc036e98aa31acae36474de9d49->enter($__internal_b0056e6987bd09126df9bcd607cfd02ebcc2bcc036e98aa31acae36474de9d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fa85c07619d40256108d46b40b885e60066c284c6c46396317f5d502db7ed06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa85c07619d40256108d46b40b885e60066c284c6c46396317f5d502db7ed06e->enter($__internal_fa85c07619d40256108d46b40b885e60066c284c6c46396317f5d502db7ed06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_fa85c07619d40256108d46b40b885e60066c284c6c46396317f5d502db7ed06e->leave($__internal_fa85c07619d40256108d46b40b885e60066c284c6c46396317f5d502db7ed06e_prof);

        
        $__internal_b0056e6987bd09126df9bcd607cfd02ebcc2bcc036e98aa31acae36474de9d49->leave($__internal_b0056e6987bd09126df9bcd607cfd02ebcc2bcc036e98aa31acae36474de9d49_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a3121d203ba3196029bd03acdba1e53c4a1967e519f7987a63c3509e6c0da763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3121d203ba3196029bd03acdba1e53c4a1967e519f7987a63c3509e6c0da763->enter($__internal_a3121d203ba3196029bd03acdba1e53c4a1967e519f7987a63c3509e6c0da763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_8f48dc0ac94d0a7bbad8527e007f7885e26a7368d8eb5c9414634232538cd115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f48dc0ac94d0a7bbad8527e007f7885e26a7368d8eb5c9414634232538cd115->enter($__internal_8f48dc0ac94d0a7bbad8527e007f7885e26a7368d8eb5c9414634232538cd115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_8f48dc0ac94d0a7bbad8527e007f7885e26a7368d8eb5c9414634232538cd115->leave($__internal_8f48dc0ac94d0a7bbad8527e007f7885e26a7368d8eb5c9414634232538cd115_prof);

        
        $__internal_a3121d203ba3196029bd03acdba1e53c4a1967e519f7987a63c3509e6c0da763->leave($__internal_a3121d203ba3196029bd03acdba1e53c4a1967e519f7987a63c3509e6c0da763_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\projet-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}
