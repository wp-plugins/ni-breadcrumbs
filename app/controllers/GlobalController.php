<?php


class NI_Breadcrumbs_GlobalController extends NI_Breadcrumbs_BaseController {
    
        
    /**
     * Prepare our Global Options
     *
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        
        
        add_action( 'plugins_loaded', array( 'NI_Breadcrumbs_GlobalController', 'Internationalise' ) );

         
    }
        
    /**
     * Loads our Translations for use throughout the program
     *
     * Current Translations:
     * 
     * @return null 
     * @added 1.0
     */
    
    
    static function Internationalise() {

        
        __( 'Very simple Breadcrumbs Plugin Created By Peter Featherstone @ Network Intellect', 'ni-breadcrumbs' );
        
        load_plugin_textdomain( 'ni-breadcrumbs', false, 'ni-breadcrumbs/translations/' );

        
    }
    
    
}