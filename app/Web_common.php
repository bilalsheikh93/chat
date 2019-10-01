<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Web_common extends Model
{




    public static function get_data($table_name)
    {
	   	return $positions = DB::table($table_name)
	   	 ->orderBy('id', 'desc')
	    ->paginate(20);
	}

	public static function update_data($id,$data_array,$table_name)
    {
        return DB::table($table_name)->where('id', $id)->update($data_array);
    }

    public static function single_data($id,$table_name)
    {
        return DB::table($table_name)->where('id', $id)->first();
    }

	public static function get_user_token()
	{
		return DB::table('users')->select('device_token')->where('status','1')->get();

	}

	public static function newpassword($id,$data_array,$table_name)
    {
        return DB::table($table_name)->where('id', $id)->update($data_array);
    }
	
	
	public static function get_user_data()
    {
	   	return $positions = DB::table("users")
	   	->where('role', 'mobile_user')
	   	->where('status','!=','2')
	   	 ->orderBy('id', 'desc')->get();
	}


	public static function delete_record($id,$table)
   	{
    	return DB::table($table)->where("id",$id)->delete();
   	}


    public static function get_sale_report()
    {
        return DB::table("lunch_orders as ord")
        ->join('addresses as add', 'add.id','=','ord.address_id')
        ->join('order_payments', 'ord.id','=','order_payments.lunch_order_id')
        ->join('order_informations', 'ord.order_information_id','=','order_informations.id')
        ->select('ord.id as lunch_id','ord.date','ord.lunch_price_meal','ord.lunch_price_extra', 'ord.lunch_coins_meal','ord.lunch_coins_extra', 'ord.payment_status',
        	'add.*', 'order_payments.payment', 'order_payments.coins', 'order_informations.order_serial_number', 'order_payments.created_at AS pay_date')
        ->where('ord.payment_status', '!=', 0)
        ->orderBy('ord.id','DESC')
        ->get();

    }
    
    
    public static function get_sale_report_search($from, $to)
    {
        return DB::table("lunch_orders as ord")
        ->join('addresses as add', 'add.id','=','ord.address_id')
        ->join('order_payments', 'ord.id','=','order_payments.lunch_order_id')
        ->join('order_informations', 'ord.order_information_id','=','order_informations.id')
        ->select('ord.id as lunch_id','ord.date','ord.lunch_price_meal','ord.lunch_price_extra', 'ord.lunch_coins_meal','ord.lunch_coins_extra', 'ord.payment_status',
        	'add.*', 'order_payments.payment', 'order_payments.coins', 'order_informations.order_serial_number', 'order_payments.created_at AS pay_date')
        ->where('ord.payment_status', '!=', 0)
        ->whereBetween(DB::raw('DATE(order_payments.created_at)'), array($from, $to))
        ->orderBy('ord.id','DESC')
        ->get();

    }
    
}
