<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absence;
use App\Module;
use Calendar;
use DB;

class AbsenceController extends Controller
{
    public function index($idF, $idE) {
        
        $modules = Module::where('filiere_idF', $idF)->get();
        
        return view('new_absence')->with(['modules'=>$modules, 'idE' => $idE]);
    }

    public function create(Request $request) {
        $absence = new Absence;
        $absence->heures = $request->heures;
        $absence->date_absence = $request->date_absence;
        $absence->etudiant_id = $request->etudiant_id;
        $absence->titre = $request->heures . "H";
        $absence->module_id = $request->module_id;
        $absence->save();
        
        return redirect('/home');
    }

    public function show($idM, $idE) {
        $absences = Absence::where('etudiant_id', '=', $idE)
                    ->where('module_id', '=', $idM)
                    ->get();
        
        $absence_list = [];
        
        foreach ($absences as $absence) {
            

            $absence_list[] = Calendar::event(
                $absence->titre,
                true,
                new \DateTime($absence->date_absence),
                new \DateTime($absence->date_absence . ' +1 day')
            );
        }
        $calendar_details = Calendar::addEvents($absence_list);
      
                    

        return view('absences_list', compact('calendar_details'));

    }
    public function modules($idF, $idE) {
        
        $modules = DB::select(DB::raw(' select `modules`.*, coalesce(SUM(absences.heures),0) as tot 
        from `modules` 
        left join `absences` on `modules`.`idM` = `absences`.`module_id` AND absences.etudiant_id = '.$idE
         .' group by `modules`.`idM`, `modules`.`nomModule`, `modules`.`filiere_idF`'));
         
        return view('modules_absence')->with(['modules'=>$modules, 'idE'=> $idE]);

    }
}
