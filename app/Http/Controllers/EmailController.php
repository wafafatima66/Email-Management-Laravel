<?php

namespace App\Http\Controllers;

use App\Mail\JobMail;
use App\Models\Email;
use App\Models\MailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use DB;
use File;
use DataTables;
// use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Config;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type = null)
    {
        
        $typeVal = $type;
        $inbox_count = Email::where('folder_type', 1)->get()->count();
        $draft_count = Email::where('folder_type', 2)->get()->count();
        $sentmail_count = Email::where('folder_type', 3)->get()->count();
        $trash_count = Email::where('folder_type', 4)->get()->count();
        return view('emails.allEmails', compact('inbox_count', 'draft_count', 'sentmail_count', 'trash_count', 'typeVal'));
    }

    public function emailRead($id)
    {
        // $typeVal = $id;
        $inbox_count = Email::where('folder_type', 1)->get()->count();
        $draft_count = Email::where('folder_type', 2)->get()->count();
        $sentmail_count = Email::where('folder_type', 3)->get()->count();
        $trash_count = Email::where('folder_type', 4)->get()->count();
        $email = Email::where('id', $id)->first();
        return view('emails.emailRead', compact('inbox_count', 'draft_count', 'sentmail_count', 'trash_count' , 'email'));
    }

    public function showEmails($type = null)
    {
       $emails = '';
        if($type == 'inbox'){
            $emails = Email::select('id', 'subject', 'email_body', 'timestamp', 'from_email')->where('folder_type', 1)->get();
        }else if($type == 'Draft'){
            $emails = Email::select('id', 'subject', 'email_body', 'timestamp', 'from_email')->where('folder_type', 2)->get();
        }
        else if($type == 'Sent_email'){
            $emails = Email::select('id', 'subject', 'email_body', 'timestamp', 'from_email')->where('folder_type', 3)->get();
        }
        else if($type == 'trash'){
            $emails = Email::select('id', 'subject', 'email_body', 'timestamp' , 'from_email')->where('folder_type', 4)->get();
        }
            return Datatables::of($emails)
                ->addColumn('checkbox', function ($row) {
                    return '<div class="check-star">
                                        <div class="checkbox-fade fade-in-primary checkbox ">
                                            <label>
                                                <input type="checkbox" class="agent_checkbox">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                            </label>
                                        </div>
                                    </div>';
                })
                ->addColumn('from_email', function ($row) {
                    // return substr($row->email_body, 0, 20);
                    return '<a href="'.url('email_read')."/". $row->id .'">'. $row->from_email .'</a>';
                })
                ->addColumn('message', function ($row) {
                    // return substr($row->email_body, 0, 20);
                    return '<a href="'.url('email_read')."/". $row->id .'">'. substr($row->email_body, 0, 20) .'</a>';
                })
                ->addColumn('subject', function ($row) {
                    // return substr($row->subject, 0, 50);
                    return '<a href="'.url('email_read')."/". $row->id .'">'. substr($row->subject, 0, 50) .'</a>';
                })
                ->addColumn('time', function ($row) {
                    // return date("g:i a", strtotime($row->timestamp));
                    return '<a href="'.url('email_read')."/". $row->id .'">'. date("j-F-Y , g:i a", strtotime($row->timestamp)) .'</a>';
                })
                ->addColumn('job_id', function ($row) {
                    // return substr($row->subject, 0, 50);
                    return '<a href="'.url('email_read')."/". $row->id .'"></a>';
                })
                ->rawColumns(['checkbox', 'from_email', 'message','subject','time','job_id'])
                ->make();
        
    }

    public function create()
    {
        $leads = DB::select('select job_number from jobs');
        $inbox_count = Email::where('folder_type', 1)->get()->count();
        $draft_count = Email::where('folder_type', 2)->get()->count();
        $sentmail_count = Email::where('folder_type', 3)->get()->count();
        $trash_count = Email::where('folder_type', 4)->get()->count();
        return view('emails.create', compact('inbox_count', 'draft_count', 'sentmail_count', 'trash_count', 'leads'));
    }

    public function sendMail(Request $request)
    {
        $filenames[] = '';
        $validated = $request->validate([
            'send_to' => 'required|email',
            'send_from' => 'required|email',
            'lead' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'send_to.required' => 'Please specify at least one recipient',
            'send_to.email' => 'Send To address is invalid',
            'send_from.required' => 'From Address is required',
            'send_from.email' => 'Send From address is invalid'
        ]);

        $send_to = $request->input('send_to');
        $send_from = $request->input('send_from');
        $lead = $request->input('lead');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $path = public_path('uploads');
        // dd($path);
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        
        if ($request->hasFile('attachments')) {
            
            foreach ($request->file('attachments') as $attachment) {
                $name = Str::random(5) . '.' . $attachment->getClientOriginalExtension();
                $attachment->move($path, $name);
                $filenames[] = $path . '/' . $name;
            }
        } else {
            $filenames[] = '';
        }


        $details = [
            'send_to' => $send_to,
            'send_from' => $send_from,
            'lead' => $lead,
            'subject' => $subject,
            'message' => $message,
            'filenames' => $filenames
        ];

        Mail::to($send_to)->send(new JobMail($details));
        return back()->with('success', 'E-mail Has been sent succesfully');
    }

    public function settings($type = null)
    {
        
        $typeVal = $type;
        $inbox_count = Email::where('folder_type', 1)->get()->count();
        $draft_count = Email::where('folder_type', 2)->get()->count();
        $sentmail_count = Email::where('folder_type', 3)->get()->count();
        $trash_count = Email::where('folder_type', 4)->get()->count();
        return view('emails.settings', compact('inbox_count', 'draft_count', 'sentmail_count', 'trash_count', 'typeVal'));
    }

    public function updateSettings(Request $request)
    {
         $request->validate([
                // 'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
               
            $user = new MailUser();
            // $user->name = $request->input('name');
            $username =  $user->email = $request->input('email');
            // $password =  $user->password = Hash::make($request->input('password'));
            $password =  $user->password = $request->input('password');
            $user->save();

            
            // Session::put('username', $username);
            // Session::put('password', $password);
            // Session::save();

          return back()->with('success', 'Mail User Created Succesfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
