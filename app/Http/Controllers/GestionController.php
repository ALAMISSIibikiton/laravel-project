<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Bien;
use App\Models\Visite;
use App\Models\TypeBien;
use App\Models\Location;
use App\Models\Chambre;
use App\Models\Affecte;
use App\Models\Inscription;
use Illuminate\Support\Facades\Storage;
class GestionController extends Controller
{
    public $filtretype="", $filtrequar="";
    
    public function index_bien(){
        $biens = Bien::paginate(5);
    return view('/list_bien', compact('biens'));
    }

    public function index_bien2(){
        $biens = Bien::paginate(5);
    return view('/list_bien2', compact('biens'));
    }
    public function create_bien(){
        return view('vente');
    }
    public function store_bien(Request $request){
        $validated = $request->validate([
            'nom_pro'=>'required|min:5',
             'tel_pro'=>'required',
             'ville_pro'=>'required',
             'quartier_pro'=>'required',
             'nbr'=>'required',
             'nego'=>'required',
             'doc'=>'required',
             'coord'=>'required',
             'dist'=>'required',
             'prox'=>'required',
             'estdisponible'=>'required',
             'type_bien'=>'required',
              'img'=>'',
               'comm'=>''
        ]);
        $bien = new Bien();
        $bien->nom_pro  = $request->nom_pro;
        $bien->tel_pro=$request->tel_pro;
        $bien->ville_pro=$request->ville_pro;
        $bien->quartier_pro=$request->quartier_pro;
        $bien->nbr=$request->nbr;
        $bien->nego=$request->nego;
       if($request->hasfile('doc')){
            $image_file = $request->file('doc');
            $img_extension = $image_file->getClientOriginalExtension();
            $image_filename = time().'.'.$img_extension;
            $image_file->move('images/documentsimage/',$image_filename);
            $bien->doc = $image_filename;
       }
       
        $bien->coord=$request->coord;
        $bien->dist=$request->dist;
        $bien->prox=$request->prox;
        $bien->estdisponible=$request->estdisponible;
        $bien->type_bien=$request->type_bien;  
        if($request->hasfile('img')){
            $image_file = $request->file('img');
            $img_extension = $image_file->getClientOriginalExtension();
            $image_filename = time().'.'.$img_extension;
            $image_file->move('images/bienimage/',$image_filename);
            $bien->img = $image_filename;
       }
        $bien->comm=$request->comm;
        $bien->save();
        
        return redirect('/list')->with('success', 'Bien ajouter avec succèss');
    }
    public function edit_bien($id){
        $bien = Bien::find($id);

     return view('edit_bien', compact('bien'));
    }
    public function update_bien(Request $request, $id){
        $bien =Bien::find($id);
        $bien->nom_pro  = $request->nom_pro;
        $bien->tel_pro=$request->tel_pro;
        $bien->ville_pro=$request->ville_pro;
        $bien->quartier_pro=$request->quartier_pro;
        $bien->nbr=$request->nbr;
        $bien->nego=$request->nego;
        $bien->doc=$request->bien;
        $bien->coord=$request->coord;
        $bien->dist=$request->dist;
        $bien->prox=$request->prox;
        $bien->estdisponible=$request->estdisponible;
        $bien->type_bien=$request->type_bien;
        $bien->img = $request->img;
        $bien->comm=$request->comm;
        // $bien->type_bien_id=$request->type_bien_id;
        $bien->save();      
        
     return redirect('/list')->with('success', 'Bien modifier avec succèss');
    }
    public function destroy_bien($id){
        DB::delete('DELETE FROM ajout_vente WHERE id = ?', [$id]);
        return redirect('/list')->with('success', 'Bien supprimer avec succèss');
    }
    //rechercher un bien
    
    //enrégistrement des visites
   
    public function create(){
        return view('visite');
    }
    public function index_visite(){
        $visites = Visite::paginate(8);
    return view('list_visite', compact('visites'));
    }
    public function store_visite(Request $request){
        $validated = $request->validate([
            'nom_ach'=>'required|min:5',
             'prenom_ach'=>'required',
             'tel_ach'=>'required',
             'date_ach'=>'required'  
        ]);

        $visite = new Visite();
        $visite->nom_ach  = $request->nom_ach;
        $visite->prenom_ach  = $request->prenom_ach;
        $visite->tel_ach=$request->tel_ach;
        $visite->date_ach=$request->date_ach;
        $visite->save();

        return redirect('/list_visite')->with('success', 'viste ajouter avec succèss');
    }
    //Les recherches
    public function search(Request $request){
        $search = $request->get('search');
        $visites = DB::table('acheteur')->where('nom_ach','like','%'.$search.'%')->paginate(5);
        return view('/list_visite',['visites'=>$visites]);
    }
    public function searc(Request $request){
        $searc = $request->get('searc');
        $types = DB::table('type_bien')->where('nom','like','%'.$searc.'%')->paginate(5);
        return view('/type_bien/list_type',['types'=>$types]);
    }
    public function cherch(Request $request){
        $cherch = $request->get('cherch');
        $biens = DB::table('ajout_vente')->where('ville_pro','like','%'.$cherch.'%')->paginate(5);
        return view('/list_bien',['biens'=>$biens]);
    }
    public function nom(Request $request){
        $nom = $request->get('nom');
        $biens = DB::table('ajout_vente')->where('nom_pro','like','%'.$nom.'%')->paginate(5);
        return view('/list_bien',['biens'=>$biens]);
    }
    public function quartier(Request $request){
        $quartier = $request->get('quartier');
        $biens = DB::table('ajout_vente')->where('quartier_pro','like','%'.$quartier.'%')->paginate(5);
        return view('/list_bien',['biens'=>$biens]);
    }
    public function nego(Request $request){
        $nego = $request->get('nego');
        $biens = DB::table('ajout_vente')->where('nego','like','%'.$nego.'%')->paginate(5);
        return view('/list_bien',['biens'=>$biens]);
    }
    public function etat(Request $request){
        $nego = $request->get('etat');
        $biens = DB::table('ajout_vente')->where('estdisponible','like','%'.$nego.'%')->paginate(5);
        return view('/list_bien2',['biens'=>$biens]);
    }
    public function ty(Request $request){
        $ty = $request->get('ty');
        $biens = DB::table('ajout_vente')->where('type_bien','like','%'.$ty.'%')->paginate(5);
        return view('/list_bien2',['biens'=>$biens]);
    }
    public function edit($id){
        $visite = Visite::find($id);

     return view('edit_visite', compact('visite'));
    }
    public function update(Request $request, $id){
        $visite =Visite::find($id);
        $visite->nom_ach = $request->nom_ach;
        $visite->prenom_ach = $request->prenom_ach;
        $visite->tel_ach=$request->tel_ach;
        $visite->date_ach=$request->date_ach;
        $visite->created_at=$request->created_at;
        $visite->save();   
        if ($visites) {
            $red = redirect('/list_visite')->with('succes','Visite bien affectée');
        }else{
            $red =  redirect('visite/create')->with('danger', 'Erreur','Veuillez reprendre! !');
        }     
        return $red;
    }
    public function destroy_visite($id){
        DB::delete('DELETE FROM acheteur WHERE id = ?', [$id]);
        return redirect('/list_visite')->with('success', 'Bien supprimer avec succèss');
    }
    public function affecter(){
        $data = Visite::all();
        $moi = Bien::all();
        return view('affect',['data'=>$data],['moi'=>$moi]);    
    }
  
    //type de bien
    public function add(){
        return view('type_bien/type');
    }
    public function index_type(){
        $types = TypeBien::paginate(5);
    return view('/type_bien/list_type', compact('types'));
    }
    public function store_type(Request $request){
        $type = new TypeBien();
        $type->nom  = $request->nom;
        $type->save();
        return redirect('/list_type')->with('success', 'Type ajouter avec succèss');
    }
    
    public function edite($id){
        $type = TypeBien::find($id);
     return view('edite', compact('type'));
    }
    public function update_type(Request $request, $id){
        $type =TypeBien::find($id);
        $type->nom = $request->nom;
        $type->save();   
        return redirect('/list_type')->with('succès', 'Type modifié avec succès !');
    }
    public function destroy_type($id){
        DB::delete('DELETE FROM type_bien WHERE id = ?', [$id]);
        return redirect('/list_type')->with('success', 'Type supprimer avec succèss');
    }
    //gestion locative
   
    public function index_loc(){
        $locations = Location::paginate(5);
    return view('/list_loc', compact('locations'));
    }

    public function index_loc2(){
        $locations = Location::paginate(5);
    return view('/list_loc2', compact('locations'));
    }
    public function create_loc(){
        return view('location');
    }
    public function store_loc(Request $request){
        $validated = $request->validate([
            'nom_pro'=>'required|min:5',
             'tel_pro'=>'required',
             'ville_lo'=>'required',
             'quartier_lo'=>'required',
             'nbr_jardin'=>'required',
             'nbr_parking'=>'required',
             'nbr_appart'=>'required',
             'nbr_chambre'=>'required',
             'nrb_cuisine'=>'required',
             'super'=>'required',
             'estmeuble'=>'required',
             'nrb_bal'=>'required',
             'nrb_guer'=>'required',
              'img'=>'',
               'comm'=>''
        ]);
        $location = new Location();
        $location->nom_pro  = $request->nom_pro;
        $location->tel_pro=$request->tel_pro;
        $location->ville_lo=$request->ville_lo;
        $location->quartier_lo=$request->quartier_lo;
        $location->nbr_jardin=$request->nbr_jardin;
        $location->nbr_parking=$request->nbr_parking;
        $location->nbr_appart=$request->nbr_appart;
        $location->nbr_chambre=$request->nbr_chambre;
        $location->nrb_cuisine=$request->nrb_cuisine;
        $location->super=$request->super;
        $location->estmeuble=$request->estmeuble;
        $location->nrb_bal=$request->nrb_bal;
        $location->nrb_guer=$request->nrb_guer;
        $location->img=$request->img;
        $location->comm=$request->comm;
        $location->save();
        
        return redirect('/list_loc')->with('success', 'Bien ajouter avec succèss');
    }
    //utilisateur
    public function index_user(){
        $inscriptions = Inscription::all();
    return view('acceuil', compact('inscriptions'));
    }
   
    public function edit_user($id){
        $inscription = Inscription::find($id);

     return view('edit_user',compact('inscription'));
    }
    public function update_user(Request $request, $id){
        $inscription =Inscription::find($id);
        $inscription->nom  = $request->nom;
        $inscription->prenom  = $request->prenom;
        $inscription->tel=$request->tel;
        $inscription->email=$request->email;
        $inscription->password=$request->password;
        $inscription->save();      
        
     return redirect('/list_insc')->with('success', 'Utilisateur modifier avec succèss');
    }
    public function destroy_user($id){
        DB::delete('DELETE FROM inscriptions WHERE id = ?', [$id]);
        return redirect('/list_insc')->with('success', 'utilisateur supprimer avec succèss');
    }
    public function edit_loc($id){
        $location = Location::find($id);

     return view('edit_loc',compact('location'));
    }
    
    public function update_loc(Request $request, $id){
        $location =Location::find($id);
        $location->nom_pro  = $request->nom_pro;
        $location->tel_pro=$request->tel_pro;
        $location->ville_lo=$request->ville_lo;
        $location->quartier_lo=$request->quartier_lo;
        $location->nbr_jardin=$request->nbr_jardin;
        $location->nbr_parking=$request->nbr_parking;
        $location->nbr_appart=$request->nbr_appart;
        $location->nbr_chambre=$request->nbr_chambre;
        $location->nrb_cuisine=$request->nrb_cuisine;
        $location->super=$request->super;
        $location->estmeuble=$request->estmeuble;
        $location->nrb_bal=$request->nrb_bal;
        $location->nrb_guer=$request->nrb_guer;
        $location->img = $request->img;
        $location->comm=$request->comm;
        // $bien->type_bien_id=$request->type_bien_id;
        $location->save();      
        
     return redirect('/list_loc')->with('success', 'Bien modifier avec succèss');
    }
    
    public function destroy_loc($id){
        DB::delete('DELETE FROM location WHERE id = ?', [$id]);
        return redirect('/list_loc')->with('success', 'Bien supprimer avec succèss');
    }
    
    //gestion des chambres
    public function create_ch(){
        $location = Location::where('nbr_chambre','!=','0')->get();
        $location = Location::where('nom_pro','!=','0')->get();
        $bien = Bien::where('nom_pro','!=','0')->get();
        return view('chambre')->with('location',$location);
    }
    public function index_ch(){
        $chambres = Chambre::paginate(5);
    return view('/list_ch', compact('chambres'));
    }
    public function store_ch(Request $request){
        $validated = $request->validate([
             'location_id'=>'required',
             'nom'=>'required',
             'num_ch'=>'required',
             'desc'=>''
        ]);
        $chambre = new Chambre();
        $chambre->location_id  = $request->location_id;
        $chambre->nom=$request->nom;
        $chambre->num_ch=$request->num_ch;
        $chambre->desc=$request->desc;
        $chambre->save();
        
        return redirect('/list_ch')->with('success', 'chambre créée avec succèss');
    }
    public function edit_ch($id){
        $chambre = Chambre::find($id);

     return view('edit_ch',compact('chambre'));
    }
    
    public function destroy_ch($id){
        DB::delete('DELETE FROM chambre WHERE id = ?', [$id]);
        return redirect('/list_ch')->with('success', 'chambre supprimer avec succèss');
    }
    //gestion des affestations de parcelle
    public function create_aff(){
        $acheteur = Visite::where('nbr_ach','!=','0')->get();
        $bien = Bien::where('nom_pro','!=','0')->get();
        return view('acheteur')->with('acheteur',$acheteur);
    }
     public function index_aff(){
        $affectes = Affecte::paginate(5);
    return view('/list_aff', compact('affectes'));
    }
    public function store_aff(Request $request){
        $validated = $request->validate([
             'name'=>'required',
             'prenom'=>'required',
             'nompro'=>'required',
             'typebien'=>'required',
        ]);
        $affect = new Affecte();
        $affect->name  = $request->name;
        $affect->prenom=$request->prenom;
        $affect->nompro=$request->nompro;
        $affect->typebien=$request->typebien;
        $affect->save();
        
        return redirect('/list_aff')->with('success', 'affection créée avec succèss');
    }
    public function edit_aff($id){
        $affect = Affecte::find($id);

     return view('edit_aff',compact('affect'));
    }
    public function update_aff(Request $request, $id){
        $affect =Affecte::find($id);
        $affect->name  = $request->name;
        $affect->prenom=$request->prenom;
        $affect->nompro=$request->nompro;
        $affect->typebien=$request->typebien;
        $affect->save();      
        
     return redirect('/list_aff')->with('success', 'Affectation modifier avec succèss');
    }
    //rechercher un bien
    // public function cherche0r(){
    //     $chercher = request()->input('chercher');
    //    $biens = Bien::where('type_bien','like',"%$chercher%")
    //     ->orWhere('ville_pro','like',"%$chercher%");

    //     return view('/layout')->with('biens',$biens);
    // }
    public function chercher(Request $request){
        $chercher = $request->get('chercher');
        $biens = DB::table('ajout_vente')->where('type_bien','like','%'.$chercher.'%')->paginate(5);
        return view('/layout',['biens'=>$biens]);
    }

    public function papy(Request $request){
        $papa = Storage::disk('local')->put('avatars',$request->avatar);
        dd($papa);
    }
  
}
