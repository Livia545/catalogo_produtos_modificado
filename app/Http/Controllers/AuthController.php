<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // 1 - Show Register
    public function showRegister() {
        return view('auth.register');
    }

    // Handle Register
    public function register(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('login')->with('success', 'Cadastro realizado! Faça login.');
    }

    // 3 - Show Login
    public function showLogin() {
        return view('auth.login');
    }

    // Handle Login
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['email' => 'Credenciais inválidas.'])->withInput();
        }

        // Save to session
        $request->session()->put('user_id', $user->id);
        return redirect()->route('dashboard');
    }

    // Logout
    public function logout(Request $request) {
        $request->session()->forget('user_id');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    // 4 - Show Edit (acessível via "esqueci a senha")
    public function showEdit() {
        return view('auth.edit');
    }

    // Handle Edit (atende ao fluxo "esqueci a senha" simples por email)
    public function edit(Request $request) {
        $data = $request->validate([
            'email' => 'required|email|exists:users,email',
            'name' => 'required|string|max:255',
            'new_email' => 'required|email|max:255',
            'password' => 'nullable|string|min:6'
        ]);

        $user = User::where('email', $data['email'])->first();

        $user->name = $data['name'];
        $user->email = $data['new_email'];
        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        $user->save();

        return redirect()->route('login')->with('success', 'Dados atualizados! Faça login novamente.');
    }

    // 5 - Dashboard (Estou logado)
    public function dashboard(Request $request) {
        $userId = $request->session()->get('user_id');
        if (!$userId) {
            return redirect()->route('login');
        }
        $user = User::find($userId);
        return view('dashboard', compact('user'));
    }
}
