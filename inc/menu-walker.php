<?php

class Header_Menu_Walker extends Walker_Nav_Menu
{

  public function start_lvl(&$output, $depth = 0, $args = null)
  {
    $t = "\t";
    $n = "\n";
    $indent = str_repeat($t, $depth);

    // sub menu classes
    $submenu_classes = array('sub-menu');
    $submenu_classes = implode('  ', array_filter($submenu_classes));

    $output .= "{$n}{$indent}<div class='sub-menu__container'> <div class='center'><ul class=\"$submenu_classes\">{$n}";
  }

  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $image = get_field('image', $item->ID);
    $show_image = get_field('show_image', $item->ID);
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array)$item->classes;

    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';

    $item_output .= '<span class="menu-item__label">';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</span>';

    if ($show_image) {
      $item_output .= '<div class="menu-item__img">';

      if ($image) {
        $thumb = $image['sizes']['large'];
        $item_output .= '<img src="' . esc_url($thumb) . '" alt="' . esc_attr($image['alt']) . '" loading="lazy" />';
      }

      $item_output .= '</div>';
    }

    $item_output .= '</a>';
    $item_output .= $args->after;
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }

  public function end_lvl(&$output, $depth = 0, $args = null)
  {
    $t = "\t";
    $n = "\n";
    $indent = str_repeat($t, $depth);
    $output .= "$indent</ul></div></div>{$n}";
  }


}
