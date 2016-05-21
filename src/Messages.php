<?php

namespace Anetwork\Respond;

class Messages extends Main
{
    
    /**
     * Request succeeded and contains json result
     * @param array $data
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:50:51 AM
     * @uses 
     * @see
     */
    public function succeed( $data ) {

        return $this->setStatusCode( 200 )
                    ->setStatusText( 'success' )
                    ->respondWithResult( $data );

    }

    /**
     * Delete action is succeed
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:52:05 AM
     * @uses 
     * @see
     */
    public function deleteSucceeded( $message = 'The requested parameter is deleted successfully!' ) {

        return $this->setStatusCode( 200 )
                    ->setStatusText( 'success' )
                    ->respondWithMessage( $message );

    }
    
    /**
     * Update action is succeed
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:52:52 AM
     * @uses 
     * @see
     */
    public function updateSucceeded( $message = 'The requested parameter is updated successfully!' ) {

        return $this->setStatusCode( 200 )
                    ->setStatusText( 'success' )
                    ->respondWithMessage( $message );

    }

    /**
     * Insert action is succeed
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:53:26 AM
     * @uses 
     * @see
     */
    public function insertSucceeded( $message = 'The requested parameter is Added successfully!' ) {

        return $this->setStatusCode( 200 )
                    ->setStatusText( 'success' )
                    ->respondWithMessage( $message );

    }

    /**
     * Delete action is faild
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:53:53 AM
     * @uses 
     * @see
     */
    public function deleteFaild( $message = 'Oops... Delete action was not successfully executed') {

        return $this->setStatusCode( 447 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }

    /**
     * Update action is succeed
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:54:09 AM
     * @uses 
     * @see
     */
    public function updateFaild( $message = 'Oops... Update action was not successfully executed' ) {

        return $this->setStatusCode( 449 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }

    /**
     * Insert action is faild
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:54:27 AM
     * @uses 
     * @see
     */
    public function insertFaild( $message = 'Oops... Insert action was not successfully executed' ) {

        return $this->setStatusCode( 448 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }

    /**
     * Database connection is refused
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:54:45 AM
     * @uses 
     * @see
     */
    public function connectionRefused( $message = 'Oops... Database connection refused' ) {

        return $this->setStatusCode( 445 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }
    
    /**
     * page requested is not found
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:55:20 AM
     * @uses 
     * @see
     */
    public function notFound( $message = 'Oops... The requested page not found!' ) {

        return $this->setStatusCode( 404 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }

    /**
     * Wrong parameters are entered
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:55:20 AM
     * @uses 
     * @see
     */
    public function wrongParameters( $message = 'Oops... The parameters you entered are wrong!' ) {

        return $this->setStatusCode( 406 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }

    /**
     * Method is not allowed
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:55:20 AM
     * @uses 
     * @see
     */
    public function methodNotAllowed( $message = 'Oops... The method you requested is not allowed!' ) {

        return $this->setStatusCode( 405 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }

    /**
     * There ara validation errors
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param Array $data
     * @since May 2, 2016 9:55:20 AM
     * @uses 
     * @see
     */
    public function validationErrors( $data ) {

        return $this->setStatusCode( 420 )
                    ->setStatusText( 'Fail...Validation errors' )
                    ->respondWithResult( $data );

    }

    /**
     * The request field is not found
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:55:20 AM
     * @uses 
     * @see
     */
    public function requestFieldNotFound( $message = 'Oops... Requested field is not found!' ) {

        return $this->setStatusCode( 446 )
                    ->setStatusText( 'fail' )
                    ->respondWithMessage( $message );

    }

}
