<?php 
class RecipesCustom {

    public function __construct(){
        $this->init();
    }

    public function init(){
        add_action('init', [$this, 'register_taxonomies']);
        add_action('init', [$this, 'register_recepices']);
    }

    public function register_recepices(){
        $labels = [
            'name' => 'Recettes de cuisine',
            'singular_name' => 'Recettes',
            'search_items' => 'Rechercher une rechette',
            'all_items' => 'Toutes les recettes',
            'add_new_item' => 'Ajouter une recette',
            'edit_item' => 'Éditer la recette',
            'new_item' => 'Nouvelle recette', 
            'view_item' => 'Voir la recette',       
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'capability_type' => 'post',
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-food',
            'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'author', 'trackbacks', 'comments', 'page-attributes', 'custom-fields'],
            'has_archive' => true,
            'taxonomies' => ['type']
        ];

        register_post_type('recepice', $args);
    }

    public function register_taxonomies(){
        register_taxonomy(
            'type',
            ['recepice'],
            array(
              'label' => 'Catégories',
              'labels' => array(
              'name' => 'Catégories',
              'singular_name' => 'Catégorie',
              'all_items' => 'Toutes les catégories',
              'edit_item' => 'Éditer la catégorie',
              'view_item' => 'Voir la catégorie',
              'update_item' => 'Mettre à jour la catégorie',
              'add_new_item' => 'Ajouter une catégorie',
              'new_item_name' => 'Nouvelle catégorie',
              'search_items' => 'Rechercher parmi les catégories',
              'popular_items' => 'Catégories les plus utilisées'
            ),
            'hierarchical' => true
            )
        );
    }
}