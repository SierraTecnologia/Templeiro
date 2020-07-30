<?php

namespace Templeiro\Traits;

trait ModelHasTempleiro
{
    /**
     * Join a templeiro
     *
     * @param  integer $templeiroId
     * @param  integer $userId
     * @return void
     */
    public function joinTempleiro($templeiroId, $userId)
    {
        $templeiro = $this->templeiro->find($templeiroId);
        $user = $this->model->find($userId);

        $user->templeiro()->attach($templeiro);
    }

    /**
     * Leave a templeiro
     *
     * @param  integer $templeiroId
     * @param  integer $userId
     * @return void
     */
    public function leaveTempleiro($templeiroId, $userId)
    {
        $templeiro = $this->templeiro->find($templeiroId);
        $user = $this->model->find($userId);

        $user->templeiro()->detach($templeiro);
    }

    /**
     * Leave all templeiro
     *
     * @param  integer $templeiroId
     * @param  integer $userId
     * @return void
     */
    public function leaveAllTempleiro($userId)
    {
        $user = $this->model->find($userId);
        $user->templeiro()->detach();
    }
}
