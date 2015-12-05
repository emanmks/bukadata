<?php namespace BukaData\Contracts;

interface CityInterface
{
    /**
     * @return json
     */
    public function all();

    /**
     * @param  string
     * @return json
     */
    public function search($param);

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs);

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs);

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id);
}