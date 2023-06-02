<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(){
        //return "test";

        $reservation = new Reservation();
        $reservation->table_id = request('table');
        $reservation->startdate = request('startdate');
        $reservation->enddate = request('enddate');
        $reservation->guests = request('guests');
        $reservation->name = request('name');
        $reservation->email = request('email');

        if($reservation->save()){
            return json_encode(['status'=>'ok', 'msg'=>"Der Link für ihre Bestellungen: 
            <a href='http://127.0.0.2:8000/home/$reservation->id'>Hier Essen bestellen</a>"]);
        }else{
            return "{}";
        }

    }


    public function getAvailableTable(string $startdate, int $guests){
        $startdate = date('Y-m-d H:i', strtotime($startdate));
        $enddate = date('Y-m-d H:i', strtotime('+3 hours', strtotime($startdate)));
        $sql = "
        SELECT tables.* FROM tables 
        LEFT JOIN 
            (Select * from reservations where startdate < '$enddate' AND enddate > '$startdate') 
            as reservations_now on tables.id = reservations_now.table_id
        WHERE 
            reservations_now.id IS NULL
            AND seating >= $guests
        Order by seating
        Limit 1;
        ";
        $table = DB::select($sql);
        if(count($table) > 0)
            return json_encode(['table'=>$table[0]->id, 'enddate'=>$enddate]);
        else
            return json_encode([]);
    }

}
