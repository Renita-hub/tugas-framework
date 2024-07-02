<?php



namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Buku;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $books = Buku::orderBy('judul')->get();
        return view('landing', compact('books'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Melakukan pencarian berdasarkan judul buku
        $books = Buku::where('judul', 'like', "%$query%")->orderBy('judul')->get();

        return view('landing', compact('books', 'query'));
    }
}
