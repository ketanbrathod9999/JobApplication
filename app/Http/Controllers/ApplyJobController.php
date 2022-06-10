<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JobApplications;
use App\Models\States;
use App\Models\RelationShipStatus;
use App\Models\Languages;
use App\Models\Technologies;
use App\Models\PreferdLocation;
use App\Models\Departments;
use App\Models\ChoosedLanguages;
use App\Models\ChoosedTechnologies;
use App\Models\ReferanceContacts;
use App\Models\WorkExperience;


use App\Http\Requests\ApplyJobRequest;
class ApplyJobController extends Controller
{
    public function index() {

        $States = States::orderBy('name','asc')->get();
        $RelationShipStatus = RelationShipStatus::orderBy('name','asc')->get();
        $Languages = Languages::orderBy('name','asc')->get();
        $Technologies = Technologies::orderBy('name','asc')->get();
        $PreferdLocations = PreferdLocation::orderBy('name','asc')->get();
        $Departments = Departments::orderBy('name','asc')->get();

        return view('apply_job',compact(
            'States',
            'RelationShipStatus',
            'Languages',
            'Technologies',
            'PreferdLocations',
            'Departments'
        ));
    }

    public function apply_job_process(ApplyJobRequest $request){
        
        $JobApplications =  new JobApplications;

        $JobApplications->first_name = $request->first_name;
        $JobApplications->last_name = $request->last_name;
        $JobApplications->designation = $request->designation;
        $JobApplications->address1 = $request->address1;
        $JobApplications->address2 = $request->address2;
        $JobApplications->email = $request->email;
        $JobApplications->phone_number = $request->phone_number;
        $JobApplications->gender = $request->gender;
        $JobApplications->city = $request->city;
        $JobApplications->state_id = $request->state;
        $JobApplications->zip_code = $request->zip_code;
        $JobApplications->relationship_status_id = $request->relationship_status;
        $JobApplications->date_of_birth = $request->date_of_birth;
        
        $JobApplications->ssc_board_name = $request->ssc_board_name;
        $JobApplications->ssc_passing_year = $request->ssc_passing_year;
        $JobApplications->ssc_percentage = $request->ssc_percentage;

        $JobApplications->hsc_board_name = $request->hsc_board_name;
        $JobApplications->hsc_passing_year = $request->hsc_passing_year;
        $JobApplications->hsc_percentage = $request->hsc_percentage;

        $JobApplications->bachelor_course_name = $request->bachelor_course_name;
        $JobApplications->bachelor_university = $request->bachelor_university;
        $JobApplications->bachelor_passing_year = $request->bachelor_passing_year;
        $JobApplications->bachelor_percentage = $request->bachelor_percentage;
        $JobApplications->master_course_name = $request->master_course_name;
        $JobApplications->master_university = $request->master_university;
        $JobApplications->master_passing_year = $request->master_passing_year;
        $JobApplications->master_percentage = $request->master_percentage;

        $JobApplications->prefered_location_id = $request->prefered_location;
        $JobApplications->notice_period = $request->notice_period;
        $JobApplications->expacted_ctc = $request->expacted_ctc;
        $JobApplications->current_ctc = $request->current_ctc;
        $JobApplications->department_id = $request->department;
                        
        $JobApplications->save();

        if(isset($JobApplications) && !empty($JobApplications)) {

            $application_id = $JobApplications->id;
            $choosed_languages = $request->languages;
            $choosed_technologies = $request->technologies;

            if(isset($choosed_languages) && !empty($choosed_languages)) {
                foreach ($choosed_languages as $lang_key => $language_id) {
                    
                    $lang_read = (isset($_POST['lang_'.$language_id.'_read']))? 1 : 0 ;
                    $lang_write = (isset($_POST['lang_'.$language_id.'_write']))? 1 : 0 ;
                    $lang_speak = (isset($_POST['lang_'.$language_id.'_speak']))? 1 : 0 ;

                    $ChoosedLanguages = ChoosedLanguages::create([
                                            'application_id' => $application_id,
                                            'language_id' => $language_id,
                                            'read' => $lang_read,
                                            'write' => $lang_write,
                                            'speak' => $lang_speak,
                                        ]);
                }
            }

            if(isset($choosed_technologies) && !empty($choosed_technologies)) {
                foreach ($choosed_technologies as $tech_key => $technology_id) {
                    
                    $knowledge_level = (isset($_POST['knowledge_level_'.$technology_id]))? $_POST['knowledge_level_'.$technology_id] : 0 ;

                    $ChoosedTechnologies = ChoosedTechnologies::create([
                                            'application_id' => $application_id,
                                            'technology_id' => $technology_id,
                                            'knowledge_level' => $knowledge_level,
                                        ]);
                }
            }
            
            $ref_names = $request->ref_name;
            $ref_contact_numbers = $request->ref_contact_number;
            $ref_relations = $request->ref_relation;
            if(isset($ref_names) && !empty($ref_names)) {
                for ($ii=0; $ii < count($ref_names); $ii++) { 
                    
                    $ref_name = (isset($ref_names[$ii]))? $ref_names[$ii] : '';
                    $ref_contact_number = (isset($ref_contact_numbers[$ii]))? $ref_contact_numbers[$ii] : '';
                    $ref_relation = (isset($ref_relations[$ii]))? $ref_relations[$ii] : '';

                    if($ref_name!='') {
                    
                        $ReferanceContacts = ReferanceContacts::create([
                                                'application_id' => $application_id,
                                                'name' => $ref_name,
                                                'contact_number' => $ref_contact_number,
                                                'relation' => $ref_relation,
                                            ]);
                    }
                }
            }

            $work_designations = $request->work_designation;
            $from_experiences = $request->from_experience;
            $to_experiences = $request->to_experience;
            if(isset($work_designations) && !empty($work_designations)) {
                for ($ex_ii=0; $ex_ii < count($work_designations); $ex_ii++) { 
                    
                    $work_designation = (isset($work_designations[$ex_ii]))? $work_designations[$ex_ii] : '';
                    $from_experience = (isset($from_experiences[$ex_ii]))? $from_experiences[$ex_ii] : '';
                    $to_experience = (isset($to_experiences[$ex_ii]))? $to_experiences[$ex_ii] : '';

                    if($work_designation!='') {
                    
                        $WorkExperience = WorkExperience::create([
                                                'application_id' => $application_id,
                                                'designation' => $work_designation,
                                                'from_date' => $from_experience,
                                                'to_date' => $to_experience,
                                            ]);
                    }
                }
            }
            

            return response()->json(['success'=>1,'msg'=>'Job Applied!']);
        } else {
            return response()->json(['success'=>2,'msg'=>'something went wrong']);
        }
    }
}
