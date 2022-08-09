<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use App\Traits\ApiResponse;
// use Webklex\IMAP\Client;
use App\Models\AllEmail;

use Webklex\IMAP\Facades\Client;
use Config;
use Illuminate\Support\Facades\Session;


class EmailFetchController extends Controller
{

    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

            // if (session()->has('username')) {
               
            //     $username =  Session::get('username');
            //     $password =  Session::get('password');
            //     Config::set('imap.accounts.gmail.username', $username);
            //     Config::set('imap.accounts.gmail.password', $password);
            //     // dd(Config::get('imap.accounts.gmail.username')) ;
            // }

            
            $oClient = Client::account('gmail');
            //Connect to the IMAP Server
            $oClient->connect();
            //Get all Mailboxes
            /** @var \Webklex\PHPIMAP\Support\FolderCollection $folders */
            //$folders = $oClient->getFolders();

            $oFolder = $oClient->getFolder('INBOX'); 
            //$aMessage = $oFolder->query()->all()->get();

            $aMessage = $oFolder->query()->since('26.03.2022')->get();

            //$aMessage = $oFolder->query()->from('hr@pieanalysis.com')->get();

            foreach($aMessage as $message){
                 $subject = $message->getSubject();
                 $email_body = $message->getHTMLBody();
                 //$total_attchments = $message->getAttachments()->count();

                 $allEmails = new AllEmail();
                 $allEmails->subject = $subject;
                 $allEmails->from_email = $message->getFrom()[0]->mail;
                 $allEmails->user_id = $message->getUid();
                 $allEmails->account_id = 1;
                 $allEmails->email_body = 'pp';
                 $allEmails->folder_type = 1;
                 $allEmails->save();

            }

            //exit;

            // //Loop through every Mailbox
            // /** @var \Webklex\PHPIMAP\Folder $folder */
            // foreach($folders as $folder){

            // //Get all Messages of the current Mailbox $folder
            //     /** @var \Webklex\PHPIMAP\Support\MessageCollection $messages */
            //     $messages = $folder->messages()->all()->get();

            //     /** @var \Webklex\PHPIMAP\Message $message */
            //     foreach($messages as $message){
            //         echo $message->getSubject().'<br />';
            //         echo 'Attachments: '.$message->getAttachments()->count().'<br />';
            //         echo $message->getHTMLBody();

            //         //Move the current Message to 'INBOX.read'
            //         if($message->move('INBOX.read') == true){
            //             echo 'Message has ben moved';
            //         }else{
            //             echo 'Message could not be moved';
            //         }
                    
            //     }
            // }
        }
        catch (\Throwable $th) {
            report($th);
            return $this->apiResponse(401, 'Sorry, something went wrong. ' . $th->getMessage());
        }
        


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
