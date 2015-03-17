<?php

class NI_Breadcrumbs_Shortcode {
    
    /**
     * Function to set a new status in the system
     *
     * @param  string  $type
     * @param string $text
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        

            add_shortcode( 'ni-breadcrumbs', array( 'NI_Breadcrumbs_HTMLController', 'display' ) );

        
    }
    
    
}