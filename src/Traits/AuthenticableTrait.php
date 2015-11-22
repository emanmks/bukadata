<?php namespace BukaData\Traits;

trait AuthenticableTrait
{
    /**
     * Get current logged in user
     * 
     * @return \Cartalyst\Sentry\Users\Eloquent\User
     */
    protected function getCurrentUser()
    {
        return Sentry::getUser();
    }

    protected function getCompanyId()
    {
        return $this->getCurrentUser()->company_id;
    }

    protected function getCompanyName()
    {
        return $this->getCurrentUser()->company->company_name;
    }

    protected function getLastLogin()
    {
        $carbon = Carbon::createFromFormat("Y-m-d H:i:s", $this->getCurrentUser()->last_login);
        $time = $carbon->format("g:i:s a");
        $date = $carbon->format("l M d, Y");

        return "{$time}, on {$date}";
    }
}