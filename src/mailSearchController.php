<?php
namespace ViewMyMail\GetMyMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use DB;
use Log;
class mailSearchController extends Controller
{
    public function getMail($id)
    {
        Log::info('loading mailSearchController');
        $mailContent = "";
        $user = DB::select('select * from clients where id = ?',[$id]);
        $user=json_decode(json_encode($user), true);
        $emailId=$user[0]['emailId'];
        $password = $user[0]['password'];
        $conn   = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', $emailId, $password, OP_READONLY);


        $some   = imap_search($conn, 'SUBJECT "Fwd: Some Crazy interview Questions Asked In Recent HR Rounds"', 0);
        $msgnos = imap_search($conn, 'ALL');
        $uids   = imap_search($conn, 'ALL', SE_UID);
        if($conn){
            foreach($some as $email_number) {
            $output="";

            $match_email = imap_fetchbody($conn,$email_number, 2);
            $match_email= quoted_printable_decode($match_email);
            $output.= '<div class="body" style="border:2px solid gray; margin:50px; padding:50px">' .$match_email.'</div>';
            }
        $mailContent = $output;
        }
        else {
        $mailContent = "Cannot connect to server";
        }
        echo $mailContent;
        //return view('welcomePhani', compact('mailContent'));
        //return view('welcomePhani')->with('mailContent', $mailContent);
        //return view("welcomePhani",['mailContent'=>'this is the mail content <br/>'.$mailContent]);
    }

}