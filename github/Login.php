<?php

interface Provider
{
    public function authorize();
}

class FacebookProvider implements Provider
{
    public function authorize()
    {
        return 'facebook auth';
    }
}
