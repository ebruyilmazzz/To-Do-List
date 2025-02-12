<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Görevlerin listeleneceği fonksiyon
    public function index()
    {
        
        $tasks = Task::all();
        
        return view('tasks.index', compact('tasks'));
    }

    // Yeni görev ekleme fonksiyonu
    public function store(Request $request)
    {
        // Validation: 'name' alanı zorunlu ve en fazla 255 karakter olmalı
        $request->validate([
            'name' => 'required|max:255',
        ]);

        // Yeni görev oluştur
        Task::create([
            'name' => $request->name,
            'completed' => false,  // Yeni görevler tamamlanmamış olarak kaydediliyor
        ]);

        // Görev ekleme işleminden sonra ana sayfaya yönlendir
        return redirect()->route('tasks.index');
    }

    // Görev silme fonksiyonu
    public function destroy($id)
    {
        // Görevi bul ve sil
        $task = Task::find($id);
        $task->delete();

        // Silme işleminden sonra ana sayfaya yönlendir
        return redirect()->route('tasks.index');
    }

    // Görev tamamlanma durumu değiştirme fonksiyonu
    public function complete($id)
    {
        // Görevi bul
        $task = Task::find($id);
        // Tamamlanma durumunu tersine çevir
        $task->completed = !$task->completed;
        $task->save();

        // Tamamlanma durumu değiştikten sonra ana sayfaya yönlendir
        return redirect()->route('tasks.index');
    }
}
