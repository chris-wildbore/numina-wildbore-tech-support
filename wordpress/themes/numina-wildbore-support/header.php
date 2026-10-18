<?php if (!defined('ABSPATH')) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width,initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<a class="skip" href="#main">Skip to content</a>
<header class="site-header"><div class="wrap nav">
<a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Numina–Wildbore Tech Support home"><span class="mark">N·W</span><span><span class="brand-name">Numina–Wildbore</span><br><span class="brand-small">Tech Support</span></span></a>
<nav class="links" aria-label="Main navigation"><a href="#services">Services</a><a href="#work">Our work</a><a href="#approach">Our approach</a><a href="#contact">Contact</a></nav>
</div></header>
