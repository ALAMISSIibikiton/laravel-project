<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\inscription;
use App\Models\Bien;
class PostController extends Controller
{
public function recherche(Request $request){
    // $r = Bien::where('ville_pro',strtolower($request->ville))->get();
    // dd($r[0]->nego);
    $succes = false;
    if($request->typebien != "" && $request->ville !="" && $request->quartier !="")
    {
        $succes = true;
        $sql = Bien::where('ville_pro',$request->ville)->where('type_bien',$request->typebien)->where('quartier_pro',$request->quartier)->get();
        $recherche = $sql;
    return view('recherche',compact("recherche","succes"));
    }
    if($request->ville !="" &&$request->quartier !=""){
        $succes = true;
        $sql = Bien::where('ville_pro',$request->ville)->where('quartier_pro',$request->quartier)->get();
        $recherche = $sql;
        return view('recherche',compact("recherche","succes"));
    }
    if($request->typebien != "" && $request->ville !=""){
        $succes = true;
        $sql = Bien::where('ville_pro',$request->ville)->where('type_bien',$request->typebien)->get();
        $recherche = $sql;
         return view('recherche',compact("recherche","succes"));
    }
    if($request->typebien != "" && $request->quartier !=""){
        $succes = true;
        $sql = Bien::where('quartier_pro',$request->quartier)->where('type_bien',$request->typebien)->get();
        $recherche = $sql;
        return view('recherche',compact("recherche","succes"));
    }if($request->typebien != ""){
        $succes = true;
        $sql = Bien::where('type_bien',$request->typebien)->get();
        $recherche = $sql;
        return view('recherche',compact("recherche","succes"));
    }if($request->ville !=""){
        $succes = true;
        $sql = Bien::where('ville_pro',$request->ville)->get();
        $recherche = $sql;
        return view('recherche',compact("recherche","succes"));
    }if($request->quartier !=""){
        $succes = true;
        $sql = Bien::where('quartier_pro',$request->quartier)->get();
        $recherche = $sql;
        return view('recherche',compact("recherche","succes"));
    }
    if($request->typebien == "" && $request->ville =="" && $request->quartier ==""){
        return view('layout');
    }
    $recherche = $sql;
    return view('recherche',compact("recherche","succes"));
}

    public function accueille()
    {
        $sql =Bien::all();
        if($sql->count()<1) {
            $succes = false;
            $bien = $sql;
        }else {
            $succes = true;
            $bien = $sql;
        }
        return view('layout',compact("bien","succes"));
    }
    public function tousbien()
    {
        $sql =Bien::all();
        if($sql->count()<1) {
            $succes = false;
            $bien = $sql;
        }else {
            $succes = true;
            $bien = $sql;
        }
        return view('tousbien',compact("bien","succes"));
    }
    public function inscri(Request $request){
        $validated = $request->validate([
            'nom'=>'required|min:5',
             'prenom'=>'required',
             'tel'=>'required',
             'email'=>'required',
             'password'=>'required',   
        ]);
        $inscription = new inscription();
       $inscription->nom  = $request->nom;
       $inscription->prenom=$request->prenom;
       $inscription->tel=$request->tel;
       $inscription->email=$request->email;
       $inscription->password=$request->password;
       $inscription->save();
        return view('connexion');
    }
    public function index(){
        return view('layout');
    }
    public function inscription(){
        return view('inscription');
    }
    public function connexion(){
        return view('connexion');
    }
    public function admin(){
        return view('home');
    }
    public function error(){
        return view('error');
    }
    public function ven(){
        return view('vente');
    }

    public function connect(Request $request) {
        $r = Inscription::where ("email",$request->email)->get();
            if($r[0]->password==$request->password and $r[0]->email=="admin@gmail.com" and $r[0]->password=="12345"){
                $user = $r[0];
                return view('admin',compact('user'));
            }
        else{
            //compte innexistant
            return view('error');
        }  
    }
    public function recupere(Request $request){
        return  $request->nom;
    }
    public function searching(Request $request){
        $searching = $request->get('searching');
        $biens = DB::table('ajout_vente')->where('ville_pro','like','%'.$searching.'%');
        return view('/list_bien',['biens'=>$biens]);
    }
//function d'acceuil
    function acc(){
        return view('acceuil');
    }

    function utilisateur(){
        return view('layouts/util',[
            "inscription"=>inscription::all()
        ]);
    }
   
}
