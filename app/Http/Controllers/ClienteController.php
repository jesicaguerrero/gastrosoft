<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes = Cliente::all(); // Obtener todos los clientes de la base de datos
        return view('clientes.index', compact('clientes'));
    }

    
    public function create()
    {
        return view('clientes.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes|max:255',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
        ]);

        Cliente::create($request->all()); // Crea el cliente usando los datos del request
        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.'); 
        // Redirige al listado
    }

    
    public function show(string $id)
    {
        return view('clientes.show', compact('cliente'));
    }

    
    public function edit(Cliente $cliente)
    {
        
        return view('clientes.edit', compact('cliente'));
    }

    
    public function update(Request $request, Cliente $cliente)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id . '|max:255', // Ignorar el email actual para el cliente que se está editando
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
        ]);

        $cliente->update($request->all()); // Actualiza el cliente

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    
    public function destroy(Cliente $cliente) 
    {
        $cliente->delete(); // Elimina el cliente

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
