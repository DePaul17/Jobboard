<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Advertisement;
use App\Models\Company;
use App\Models\Candidacy;
use App\Models\Email;
use Symfony\Component\Mime\Part\TextPart;
use Illuminate\Validation\ValidationException;
use Exception;



class TheController extends Controller
{

    /*****************************DISPLAY OFFER***************************************/

    public function adv()
    {
        $affich = Advertisement::with('company')->paginate(3); //pagination
        $candidacies = Candidacy::all();
        $mails = Email::all();  
        return view('dashboard', compact('affich', 'candidacies', 'mails'));
    }

    /*****************************APPLY FOR OFFER***************************************/

    public function apply_now(Request $request)
    {
        $request->validate([
            'resume' => 'required|mimes:pdf,doc,docx',
            'motivation' => 'required',
            'advertisement_id' => 'required', // Assurez-vous que l'ID de l'offre est fourni
        ]);
    
        $advertisementId = $request->input('advertisement_id'); // Obtenez l'ID de l'offre depuis le formulaire
    
        // Créez une nouvelle instance de Candidacy
        $candidacy = new Candidacy();
        $candidacy->user_id = auth()->user()->id;
        $candidacy->advertisement_id = $advertisementId; // Utilisez l'ID de l'offre depuis le formulaire
        $candidacy->resume = $request->file('resume')->store('resumes');
        $candidacy->motivation = $request->input('motivation');
        $candidacy->save();
    
        return redirect()->route('dashboard')->with('success', 'Candidacy sent');
    }

    /*****************************APPLY FOR OFFER PAGE***************************************/

    public function apply_now_form($id){
        $apply = Advertisement::find($id);
        return view('apply', compact('apply'));
    }
    /*************************************END***********************************************/

    /*****************************ADD OFFER PAGE***************************************/

    public function add_offer(){
        return view('addoffer');
    }

    /***********************************END********************************************/

    /*****************************LIST COMPANIES***************************************/

    public function list_company(){
        $companies = Company::all();
        return view('addoffer', compact('companies'));
    }
    /*********************************END**********************************************/

    /*****************************CRUD OFFER***************************************/

    public function addoffer_load(Request $request) {
        $request->validate([
            'advertisements' => ['required', 'string'],
            'description' => ['required', 'string'],
            'date_pub' => ['required', 'date'],
            'type' => ['required', 'string'],
            'time' => ['required', 'string'],
            'company_id' => ['required', 'string'],
        ]);
    
        $advertisement = new Advertisement();
        $advertisement->advertisements = $request->advertisements;
        $advertisement->description = $request->description;
        $advertisement->date_pub = $request->date_pub;
        $advertisement->type = $request->type;
        $advertisement->time = $request->time;
        $advertisement->company_id = $request->company_id;
    
        $advertisement->save();
    
        return redirect()->back()->with('success', 'You have added an offer');
    }

    public function destroy_offer($id){
        $offer = Advertisement::findOrFail($id);
        $offer->delete();
        return redirect()->back()->with('success', 'Offer deleted');
    }

    

    public function edit_advertisements($id){
        $resource = Advertisement::find($id);
        $companies = Company::all();
        return view('edit_advertisement', compact('companies', 'resource'));
    }

    
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'company_id' => 'required',
            'advertisements' => 'required',
            'description' => 'required',
            'date_pub' => 'required',
            'type' => 'required',
            'time' => 'required',
        ]);

        // Mise à jour de la ressource en base de données
        $resource = Advertisement::find($id);
        $resource->company_id = $request->input('company_id');
        $resource->advertisements = $request->input('advertisements');
        $resource->description = $request->input('description');
        $resource->date_pub = $request->input('date_pub');
        $resource->type = $request->input('type');
        $resource->time = $request->input('time');
        $resource->save();

        return redirect('/dashboard')->with('success', 'update with success');
    }
    /***************************** END UPDATE OFFER***************************************/
    
    /***************************** ADD NEW COMPANY ***************************************/

        public function add_company(Request $request){
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ]);

            $new_company = new Company();
            $new_company->name = $request->name;
            $new_company->phone = $request->phone;
            $new_company->address = $request->address;
            $new_company->save();

            return redirect('/dashboard')->with('success', 'Company added successfully');

        }

    /************************************************************************************/

    /************************************SEE MORE PAGE************************************/

    public function see_more($id){
        $resource = Advertisement::find($id);
        $companies = Company::all();
        return view('see', compact('companies', 'resource'));
    }

    /************************************************************************************/


    /*********************************SEND MAIL FUNCTION**********************************/

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);
    
        $data = [
            'name' => $request->name,
            'first_name' => $request->first_name,        
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
        ]; 

        $mail = new Email();
        $mail->name = $request->name;
        $mail->first_name = $request->first_name;
        $mail->email = $request->email;
        $mail->subject = $request->subject;
        $mail->content = $request->content;
    
        $mail->save();
    
        Mail::send('/index', $data, function($message) use ($data) {
            $senderName = "{$data['first_name']} {$data['name']} • From EpiJob"; 
            $message->to(env('MAIL_USERNAME')) 
                    ->subject($data['subject'])
                    ->from($data['email'], $senderName,)
                    ->text("Bonjour, {$data['content']}");
        });
    
        return redirect()->to('#contact')->with(['success' => 'Email successfully sent!']);
    }
    

    /************************************************************************************/
}
