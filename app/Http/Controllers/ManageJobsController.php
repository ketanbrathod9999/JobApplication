<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplications;
use DataTables;
class ManageJobsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = JobApplications::select('*')
                                ->with(['department'])
                                ->get();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '';
                        $btn .= '<a href="'.route('view_application',[$row->id]).'" class="edit btn btn-info btn_view btn-sm" data-id="'.$row->id.'">View</a>';
                        $btn .= ' | ';
                        $btn .= '<a href="javascript:void(0)" class="edit btn btn-danger btn_delete btn-sm" data-id="'.$row->id.'">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('manage_job_application');
    }

    public function delete_application($application_id)
    {
        $JobApplicationFind = JobApplications::find($application_id);
        if(isset($JobApplicationFind) && !empty($JobApplicationFind)) {
            $JobApplicationFind->delete();
            return response()->json(['success'=>1,'msg'=>'Application Deleted!']);
        } else {
            return response()->json(['success'=>2,'msg'=>'Application Not Found']);
        }
    }

    public function view_application($application_id)
    {
        $JobApplicationFind = JobApplications::find($application_id);
        if(isset($JobApplicationFind) && !empty($JobApplicationFind)) {
           $data['application_details'] = $JobApplicationFind;
           return view('view_job_application',$data);
        } else {
           return redirect(route('manage_job_applications'));
        }
    }

}
