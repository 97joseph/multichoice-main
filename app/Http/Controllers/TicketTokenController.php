<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Status;
use App\Models\TicketToken;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TicketTokenController extends Controller
{
    public function index(Request $request){
        $services = Service::all();
        $data =[
            'services' => $services
        ];
        return view('customer.phone-number', $data);
    }
    public function listTokens(Request $request)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user = Auth::user();

        $tokens = TicketToken::query()
            ->with([
                'status:id,name',
                'service:id,name',
                'user:id,name',
            ])
            ->orderBy('id','desc')
            ->get();
        $status = Status::all();
        $data =[
            'tokens' => $tokens,
            'user' => $user,
            'statuses' => $status
        ];
        return view('admin.dashboard', $data);
    }
    public function statusUpdate(Request $request)
    {
        try {
            // Find the token record based on the provided token ID
            $token = TicketToken::query()
                ->where('id', $request->input('token'))
                ->first();

            // Check if token exists
            if (!$token) {
                return redirect()->back()->with('error', 'Token not found');
            }

            // Prepare data for updating the status
            $token->status_id = $request->input('status');
            $token->user_id = $request->user()->id;
            $token->used_at = now()->format('Y-m-d H:i:s');
           $result = $token->save();
            if ($result) {
                // Return success message
                return redirect()->back()->with('success', $token->token_number . ' status updated successfully');
            }


        } catch (\Exception $exception) {
            // Handle any exceptions and return error message
            return redirect()->back()->with('error', 'Status failed to update');
        }
    }
    public function generateToken(Request $request){
        try {
            $service = $request->input('service');
            $telephone = $request->input('telephone');

            $token = TicketToken::query()->findOrNew($request->input('id'));

            $prefix = 'A-';
            $id = IdGenerator::generate([
                'table'     => 'ticket_tokens',
                'field'     => 'token_number',
                'length'    => 5,
                'prefix'    => $prefix,
                'reset_on_prefix_change' => true
            ]);
            $token_number = $id;

            $token->fill([
                'services_id' => $service,
                'telephone' => $telephone,
                'token_number' => $token_number,
                'status_id' => 2,
            ]);
            $token->save();

            // Check if the request is an API request
            if ($request->is('api/*') || $request->wantsJson()) {
                return response()->json($token);
            }
          $myToken = $this->listMyToken($token);
            if ($myToken) {
                return view('customer.my-token', compact('token', 'myToken'));
            }

        }
        catch (\Exception $exception){
            $message ='Something went wrong please try again!';
            $message = $exception->getMessage();
            // Check if the request is an API request
            if ($request->is('api/*') || $request->wantsJson()) {
                return response()->json($message);
            }
            return back()->with('warning',$message)->withInput();
        }

    }
    private function listMyToken($token)
    {
        Log::info('Token'.$token->token_number);
        $tokens = TicketToken::query()
            ->where('token_number', $token->token_number)
            ->get();
        return $tokens;
    }
}
