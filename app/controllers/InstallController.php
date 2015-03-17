<?php

class NI_Breadcrumbs_InstallController extends NI_Breadcrumbs_BaseController {
    
    
    /**
     * Prepare our Installation Options
     *
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        
        
        register_activation_hook( __FILE__, array( 'NI_Breadcrumbs_InstallController', 'install' ) );
        
        
    }
    
        
    /**
     * Sets our initial default options when menu
     * is first installed
     *
     * @return null
     * @added 1.0
     */
    
    static function install() {

        
        add_option( 'NI_Breadcrumbs_Ver', NI_Breadcrumbs_Registry::get( 'config', 'current_version' ) );
        add_option( 'NI_Breadcrumbs_Options', NI_Breadcrumbs_Registry::get( 'defaults' ) );

        
    }
    
    
}