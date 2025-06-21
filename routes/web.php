<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\vehicles;
use App\Models\User;
use App\Models\Driver;
use App\Models\Order;



Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::get('/orderForm', function () {
    $vehicles = vehicles::all();
    $approvers = User::where('role', 'approver')->get();
    $drivers = Driver::all();
    return view('orderForm', compact('vehicles', 'approvers', 'drivers'));
});

Route::post('/orders', function (\Illuminate\Http\Request $request) {
    \App\Models\Order::create($request->all());
    return redirect('/')->with('success', 'Pemesanan berhasil diajukan');
});

Route::get('/orderHistory', function () {
    return view('orderHistory');
});

Route::get('/orderHistory/detail', function () {
    return view('orderDetail');
});

Route::get('/vehicle', function () {
    $vehicles = vehicles::all();
    return view('vehicle', compact('vehicles'));
});

Route::get('/vehicle/{id}', function ($id) {
    $vehicle = vehicles::findOrFail($id);
    return view('vehicleDetail', compact('vehicle'));
});

Route::get('/approver', function () {
    return view('approverDashboard');
});

Route::get('/approver', function () {
    $user = Auth::user();

    $orders = Order::where(function ($query) use ($user) {
        $query->where('approver1_id', $user->id)
            ->where('status', 'menunggu_approver1');
    })->orWhere(function ($query) use ($user) {
        $query->where('approver2_id', $user->id)
            ->where('status', 'menunggu_approver2');
    })->with(['vehicle', 'driver'])->get();

    return view('approverDashboard', compact('orders'));
});

Route::post('/orders/{order}/approve', function ($orderId) {
    $user = Auth::user();
    $order = \App\Models\Order::findOrFail($orderId);

    if ($order->status === 'menunggu_approver1' && $order->approver1_id == $user->id) {
        $order->status = 'menunggu_approver2';
        $order->approved_at_1 = now();
    } elseif ($order->status === 'menunggu_approver2' && $order->approver2_id == $user->id) {
        $order->status = 'disetujui';
        $order->approved_at_2 = now();
    } else {
        return back()->with('error', 'Anda tidak memiliki izin untuk menyetujui pesanan ini.');
    }

    $order->save();
    return back()->with('success', 'Pemesanan berhasil disetujui.');
});

Route::post('/orders/{order}/reject', function (Illuminate\Http\Request $request, $orderId) {
    $request->validate(['alasan_penolakan' => 'required|string']);

    $user = Auth::user();
    $order = \App\Models\Order::findOrFail($orderId);

    if (
        ($order->status === 'menunggu_approver1' && $order->approver1_id == $user->id) ||
        ($order->status === 'menunggu_approver2' && $order->approver2_id == $user->id)
    ) {
        $order->status = 'ditolak';
        $order->alasan_penolakan = $request->alasan_penolakan;
        $order->save();

        return back()->with('success', 'Pemesanan ditolak.');
    }

    return back()->with('error', 'Anda tidak memiliki izin untuk menolak pesanan ini.');
});


Route::middleware(['web'])->group(function () {
    Route::post('/login', function (Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'admin') {
                return view('home');
            } elseif ($user->role === 'approver') {
                return redirect('/approver');
            }

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    });
});
