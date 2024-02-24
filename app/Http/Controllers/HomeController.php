<?php

namespace App\Http\Controllers;

use Context\Application\GetAllNewsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // inyectando lo que en este caso simula el query de CQRS
    public function __construct(private GetAllNewsQuery $query)
    {
    }

    //pagina principal
    public function index(Request $request): View
    {
        $news = $this->query->execute('developer', $request->get('page', 1));

        return view('home.index')->with(['news' => $news]);
    }

    //pagina para simular un post
    public function show($id): View
    {
        return view('home.show');
    }
}
