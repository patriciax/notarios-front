<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Project;
use App\Models\SecondaryContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PrivateFolderController extends Controller
{
    public function validateUser(ClientRequest $request)
    {
        $client = Client::where('email', $request->email)->where('password', $request->pass)->first();
        if ($client) {
            return redirect()->to('/private-folder?token='.Crypt::encryptString($client->id));
        }

        return redirect()->back();
    }

    public function show(Request $request)
    {
        $clientId = Crypt::decryptString($request->token);
        $secondaryContent = SecondaryContent::where('client_id', $clientId)->get();

        return view('privateView', ['secondaryContent' => $secondaryContent]);
    }

    public function showProject($slug)
    {
        $project = Project::where('slug', $slug)->first();

        return view('projectView', ['project' => $project]);
    }
}
