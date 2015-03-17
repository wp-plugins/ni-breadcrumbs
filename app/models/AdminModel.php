<?php

class NI_Breadcrumbs_AdminModel extends NI_Breadcrumbs_BaseModel {
    
        
    /**
     * Saves all the data from the admin page to the database
     *
     * @param  array  $data
     * @return null
     * @added 1.0
     */
    
    static public function save( $data ) {
        
        // Initialise Variables Correctly
        
        $Seperator = isset( $data['Seperator'] ) ? $data['Seperator'] : NI_Breadcrumbs_Registry::get( 'defaults', 'Seperator' );
        
        
        $HomeText = isset( $data['HomeText'] ) ? $data['HomeText'] : NI_Breadcrumbs_Registry::get( 'defaults', 'HomeText' );

        $optionsArray = array(
            
            // Filter Input Correctly
            
            'Seperator' => self::Filter( $Seperator ),
            
            'HomeText' => self::Filter( $HomeText )

        );

        // Update Submitted Options 
        
        update_option( 'NI_Breadcrumbs_Options', $optionsArray );
        
        // And save the status

        NI_Breadcrumbs_Status::set( 'updated', __( 'You have successfully updated the NI Breadcrumbs options', 'ni-breadcrumbs' ) );
        
        
    }
    
    
}