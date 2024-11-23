<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivesController extends Controller
{
    //
    public function index(){
        return view('documents.archived');
    }

    public function archiveDocuments($id){

    }

    public function show($document_tracking_code){

    }

    public function viewDocuments($document_tracking_code){

    }
}
