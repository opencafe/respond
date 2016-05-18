<?php

namespace Anetwork\Respond;

use Illuminate\Http\Response;

class Main {

    /**
     * Http status code
     * @var integer
     */
    protected $statusCode = 200;
    
    /**
     * Status text
     * @var string
     */
    protected $statusText = 'success';
    
    /**
     * Getter for $statusCode
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:46:27 AM
     * @uses 
     * @see
     */
    public function getStatusCode() {

        return $this->statusCode;

    }
    
    /**
     * Setter for $statusCode
     * @param integer $statusCode
     * @return App\Htpp\Responds\Respond
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:47:04 AM
     * @uses 
     * @see
     */
    public function setStatusCode( $statusCode ) {
        
        $this->statusCode = $statusCode;

        return $this;

    }
    
    /**
     * Getter for $statusText
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:47:36 AM
     * @uses 
     * @see
     */
    public function getStatusText() {

        return $this->statusText;

    }
    
    /**
     * Setter for $statusText
     * @param String $statusText
     * @return App\HtppApp\Htpp\Responds\Respond
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:48:23 AM
     * @uses 
     * @see
     */
    public function setStatusText( $statusText ) {
        
        $this->statusText = $statusText;

        return $this;

    }
    
    /**
     * Response
     * @param json $data
     * @return jsom
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:48:45 AM
     * @uses 
     * @see
     */
    public function respond( $data ) {

        return response()->json( $data, $this->getStatusCode() );

    }
    
    /**
     * Response which conteins just a message
     * @param string $message
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:49:21 AM
     * @return json
     * @uses 
     * @see
     */
    public function respondWithMessage( $message ) {

        return $this->respond( [

            'status' => $this->getStatusText(),
            'message' => $message

            ] );

    }
    
    /**
     * Response which contains status and data
     * @param json $data
     * @author Shima Payro <sh.payro@anetwork.ir>
     * @since May 2, 2016 9:50:19 AM
     * @return json
     * @uses 
     * @see
     */
    public function respondWithResult( $data ) {

        return $this->respond( [

            'status' => $this->getStatusText(),
            'result' => $data

            ] );

    }

}