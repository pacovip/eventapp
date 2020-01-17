<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Auth\AuthenticationException;
use CloudCreativity\LaravelJsonApi\Exceptions\HandlesErrors;
use Neomerx\JsonApi\Exceptions\JsonApiException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    
    
    /*
     * 
    use HandlesErrors;

    protected $dontReport = [
      // ... other exception classes
      JsonApiException::class,
    ];
     */
    
    public function render($request, Exception $exception)
    {
        /*
         * 
         // for api json         
        if ($this->isJsonApi($request, $e)) {
            return $this->renderJsonApi($request, $e);
            // do standard exception rendering here...
        }
        */
        
        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }
        //
        return parent::render($request, $exception);
    }
    
    
    protected function prepareException(Exception $e)
    {
        if ($e instanceof JsonApiException) {
          return $this->prepareJsonApiException($e);
        }

        return parent::prepareException($e);
    }
    
    /*
     * error si user non authentifier
     */
    protected function unauthenticated($request, AuthenticationException $exception){
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('/admin/login');
        }
        //
        return response()->json(['error' => 'Unauthenticated'], 401);
    }
}
