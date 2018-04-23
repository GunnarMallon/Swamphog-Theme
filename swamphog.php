<?php

/**
 * Plugin Name: Swamphog User Management
 * Description: A simple plugin that adds custom post types and taxonomies
 * Version: 0.1
 * Author: Gunnar Mallon
 * License: GPL2
*/

/* Copyright 2018 Gunnar Mallon

    {Plugin Name} is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.

    {Plugin Name} is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with {Plugin Name}. If not, see {URI to Plugin License}.

*/

function add_roles_on_plugin_activation(){
    add_role(
        'student',
        __( 'Student' ),
        array (
            'read'          => true,
            'edit_posts'    => true,
            'delete_posts'  => false,
        )
    );
}
register_activation_hook(__FILE__, 'add_roles_on_plugin_activation' );
