<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoRequest;
use App\Mail\DemoApprovedMail;
use Illuminate\Support\Facades\Mail;

class DemoRequestController extends Controller
{
  
  
//     public function store(Request $request)
// {

//      dd($request->all());
//      $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|max:255',
//         'message' => 'nullable|string'
//     ]);
//     DemoRequest::create([
//         'name' => $request->name,
//         'email' => $request->email,
//         'message' => $request->message,
//         'status' => 'pending'
//     ]);

//     return back()->with('success', 'Demo request submitted successfully!');
// }


// public function approve($id)
// {
//     $demo = DemoRequest::findOrFail($id);

//     $demo->status = 'approved';
//     $demo->save();

//     // Send Email
//     Mail::to($demo->email)->send(new DemoApprovedMail($demo));

//     return back()->with('success', 'Request Approved & Email Sent!');
// }
// }


    // USER: store request
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string'
        ]);

        DemoRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'status' => 'pending'
        ]);

        return back()->with('success', 'Demo request submitted successfully!');
    }

    // ADMIN: show all requests
    public function index()
    {
        $requests = DemoRequest::latest()->get();
        return view('admin.demo.index', compact('requests'));
    }

    // ADMIN: approve request
    public function approve($id)
    {
        $demo = DemoRequest::findOrFail($id);

        $demo->update([
            'status' => 'approved'
        ]);

        // send email
        Mail::to($demo->email)->send(new DemoApprovedMail($demo));

        return back()->with('success', 'Request Approved & Email Sent!');
    }

    // ADMIN: reject request
    public function reject($id)
    {
        $demo = DemoRequest::findOrFail($id);

        $demo->update([
            'status' => 'rejected'
        ]);

        return back()->with('success', 'Request Rejected!');
    }
}