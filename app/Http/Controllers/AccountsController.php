<?php

namespace App\Http\Controllers;

use App\Model\Accounts;
use App\Model\AccountsHistorical;
use Session;
use Request;

class AccountsController extends Controller
{
    public function index()
    {
        $accounts = Accounts::all();
        return view('accounts.index')->with('accounts', $accounts);
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store()
    {
        $params = Request::all();
        $account = new Accounts($params);
        $account->save();
        Session::flash('alert-success', 'Conta criada com sucesso!');
        return redirect()->action("AccountsController@index");  
    }

    public function edit($id)
    {
    	return view("accounts.edit", ["account" => Accounts::findOrFail($id)]);
    }

    public function update($id)
    {
        $params = Request::all();
    	$account = Accounts::findOrFail($id);
    	$account->update($params);
    	Session::flash('alert-success', 'Conta atualizada com sucesso!');
    	return redirect()->action("AccountsController@index");
    }

    public function destroy($id)
    {   
        $account = Accounts::findOrFail($id)->delete();
    	Session::flash('alert-success', 'Conta removido com sucesso!');
    	return redirect()->action("AccountsController@index");
    }

    public function movement($id)
    {
    	return view("accounts.movement", ["account" => Accounts::findOrFail($id)]);
    }

    public function accomplish()
    {
        $params = Request::all();
        $value = str_replace('.','',$params['value']);
        $value = str_replace(',','.',$value);
        $params['value'] = $value;
        $account = Accounts::where('id','=',$params['account_id'])->first();
        if($params['type_transaction'] == 1){
            $account['balance'] += $params['value'];
            $account->save();
        } else {
            $account['balance'] -= $params['value'];
            $account->save();
        }
        $account_historical = new AccountsHistorical($params);
        $account_historical->save();
    	Session::flash('alert-success', 'Movimentação realizado com sucesso!');
    	return redirect()->action("AccountsController@index");
    }

    public function movements()
    {
        $accounts_historical = AccountsHistorical::all();
        return view('historical.movements')->with('accounts_historical',$accounts_historical);
    }

}
