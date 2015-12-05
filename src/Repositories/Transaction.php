<?php namespace BukaData\Repositories;

use Transaction as TransactionModel;
use BukaData\Contracts\TransactionInterface;
use Validator;
use Response;

class Transaction implements TransactionInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return TransactionModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return TransactionModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, TransactionModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        TransactionModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$transaction = TransactionModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, TransactionModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $transaction->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$transaction = TransactionModel::find($id)) return Response::json(null, 404);;
        if(!$transaction->transactions) $transaction->delete();
    }

}