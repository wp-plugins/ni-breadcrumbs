<?php


class NI_Breadcrumbs_AdminController extends NI_Breadcrumbs_BaseController {
    
        
    /**
     * Prepare our Admin Options
     *
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        
        // Check that we are in the admin area
        if( is_admin() ) : 
            
            add_filter( 'plugin_action_links', array( 'NI_Breadcrumbs_AdminController', 'addSettingsLink' ), 10, 2 );
            add_action( 'admin_menu', array( 'NI_Breadcrumbs_AdminController', 'addMenus' ) );
            
        endif;
        

    }
    
    
    /**
     * Create our admin menus.
     *
     * @return null
     * @added 1.0
     */
    
    static function addMenus() {

        
        add_menu_page( 

            __( 'Breadcrumbs', 'ni-breadcrumbs' ), 
            __( 'Breadcrumbs', 'ni-breadcrumbs' ), 
            'manage_options', 
            'ni-breadcrumbs', 
            array( 'NI_Breadcrumbs_AdminController', 'adminPage' ), 
            NI_Breadcrumbs_Registry::get( 'config', 'plugins_base_uri' ) . 'public/imgs/icon.png' 

        );

        
    }
    
    /**
     * Creates the main admin page and saves the data if submitted
     *
     * @return null
     * @added 1.0
     */
    
    static function adminPage() {
        
   
        if( NI_Breadcrumbs_Input::post( 'NI_Breadcrumbs_Submit' ) ) :

            NI_Breadcrumbs_AdminModel::save( NI_Breadcrumbs_Input::post() );               
        
        endif;    

        NI_Breadcrumbs_View::make( 'admin.page', NI_Breadcrumbs::getOptions() );
        
        
    }
        
    /**
     * Adds the settings link on the WordPress Plugins Page
     *
     * @param array $links
     * @param string $file
     * @return array
     * @added 1.0
     */
    
    static function addSettingsLink( $links, $file ) {
        
        
        if ( $file == 'ni-breadcrumbs/ni-breadcrumbs.php' ) :

            $settings_link = '<a href="' . get_bloginfo( 'wpurl' ) . '/wp-admin/admin.php?page=ni-breadcrumbs">';
            $settings_link .= __( 'Settings', 'ni-breadcrumbs' );
            $settings_link .= '</a>';
            
            array_unshift( $links, $settings_link );

        endif;

        return $links;

    
    }

    
}