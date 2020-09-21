<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
    public function render($request, Exception $exception)
    {

        if($request->is("api/*")){
            if ($exception instanceof ApiException) {
                $code = $exception->getCode();
                $msg = $exception->getMessage();
            }else if($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException ){
                $code = 404;
                $msg = "NotFoundHttpException";
            }else if($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException){
                $code = 500;
                $msg = "MethodNotAllowedHttpException";

            } else {
                $code = $exception->getCode();
                if ( $code == 0 || $code<0){
                    $code = 0;
                }
                $msg = $exception->getMessage()?:"未知的错误";
            }

            $content = [
                'success' => false, // client error
                'code' => $code,
                'msg' => $msg,
            ];

            return response()->json($content);
        }

        return parent::render($request, $exception);


    }




}
