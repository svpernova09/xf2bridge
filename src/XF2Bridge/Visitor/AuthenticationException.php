<?php

namespace swede2k\XF2Bridge\Visitor;

class AuthenticationException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        return false;
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response('Remember Tokens not implemented by '.get_class($this));
    }
}
