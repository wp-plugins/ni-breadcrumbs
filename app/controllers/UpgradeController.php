<?php

class NI_Breadcrumbs_UpgradeController extends NI_Breadcrumbs_BaseController {
    
      
    /**
     * Script that runs if the menu has been upgraded
     *
     * @return mixed
     * @added 1.0
     */
    
    static function upgrade() {
        
        
        if( self::needsUpgrade() ) :
            
            /* Update Version */
            update_option( 'NI_Breadcrumbs_Ver', NI_Breadcrumbs_Registry::get( 'config', 'current_version' ) );
            
            /* Merge Changes */
            update_option( 'NI_Breadcrumbs_Options', array_merge( NI_Breadcrumbs_Registry::get( 'defaults' ), NI_Breadcrumbs::getOptions() ) );
            
            
        endif;

            
    }
    
        
    /**
     * Determines whether or not the site needs upgrading
     *
     * @return boolean
     * @added 1.0
     */
    
    static function needsUpgrade() {
        
        
        return get_option( 'NI_Breadcrumbs_Ver' ) != NI_Breadcrumbs_Registry::get( 'config', 'current_version' ) ? true : false;

        
    }
    
    
}