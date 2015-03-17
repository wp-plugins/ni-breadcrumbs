<?php

class NI_Breadcrumbs_BaseModel {
    
    
    /**
     * Basic Function to filter Input
     *
     * @param string $input
     * @return string
     * @added 1.0
     */
    
    static function Filter( $input ) {

        if( is_string( $input ) )
            return stripslashes( strip_tags( trim( $input ) ) );
        
        
    }
    

}