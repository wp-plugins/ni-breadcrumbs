<?php

class NI_Breadcrumbs_HTMLController extends NI_Breadcrumbs_BaseController {
        
    /**
     * Creates the view for the menu and echos it out
     *
     * @return string
     * @added 1.0
     */
    
    static function display( $args = null ) {
            
        $options = NI_Breadcrumbs::getOptions();
        $pages = get_post_ancestors( get_the_ID() );
        $totalPages = count( $pages );
        
        NI_Breadcrumbs_View::make( 'breadcrumbs', 
                array( 
                    'sep' => $options['Seperator'],
                    'home' => $options['HomeText'],
                    'current-title' => get_the_title(),
                    'pages' => array_reverse( $pages ),
                    'total-pages' => $totalPages
                )
                );
     
        
    }
    
    
}