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
    public function deleteFaild() {

        return $this->setStatusCode( 447 )
                    ->setErrorCode( 5447 )
                    ->respondWithMessage();

    }

    /**
     * Update action is succeed
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:54:09 AM
     * @uses
     * @see
     */
    public function updateFaild() {

        return $this->setStatusCode( 449 )
                    ->setErrorCode( 5449 )
                    ->respondWithMessage();

    }

    /**
     * Insert action is faild
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:54:27 AM
     * @uses
     * @see
     */
    public function insertFaild() {

        return $this->setStatusCode( 448 )
                    ->setErrorCode( 5448 )
                    ->respondWithMessage();

    }

    /**
     * Database connection is refused
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:54:45 AM
     * @uses
     * @see
     */
    public function connectionRefused() {

        return $this->setStatusCode( 445 )
                    ->setErrorCode( 5445 )
                    ->respondWithMessage();

    }

    /**
     * page requested is not found
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:55:20 AM
     * @uses
     * @see
     */
    public function notFound() {

        return $this->setStatusCode( 404 )
                    ->setErrorCode( 5404 )
                    ->respondWithMessage();

    }

    /**
     * Wrong parameters are entered
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:55:20 AM
     * @uses
     * @see
     */
    public function wrongParameters() {

        return $this->setStatusCode( 406 )
                    ->setErrorCode( 5406 )
                    ->respondWithMessage();

    }

    /**
     * Method is not allowed
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @param String $message
     * @since May 2, 2016 9:55:20 AM
     * @uses
     * @see
     */
    public function methodNotAllowed() {

        return $this->setStatusCode( 405 )
                    ->setErrorCode( 5405 )
                    ->respondWithMessage();

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
                    ->setErrorCode( 5420 )
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
    public function requestFieldNotFound() {

        return $this->setStatusCode( 446 )
                    ->setErrorCode( 1001 )
                    ->respondWithMessage();

    }

    /**
     * The request field is doublicated
     * @author Mehdi Hosseini <m.hosseini@anetwork.ir>
     * @since August 24, 2016
     * @return json
     */
    public function requestFieldDoublicated() {

      return $this->setStatusCode(400)
                  ->SetErrorCode(1004)
                  ->respondWithMessage();

    }

    /**
     * Custom error message according to error config file
     * @author Mehdi Hosseini <m.hosseini@anetwork.ir>
     * @since August 24, 2016
     * @param $code integer
     * @return json
     */
    public function error( $code ) {

      return $this->SetStatusCode( 400 )
                  ->setErrorCode( $code )
                  ->respondWithMessage();

    }


}
