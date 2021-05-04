<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        // Вывести все записи в порядке добавления
  //      $users = Phonebook::all();

        //Сортировка в алфавитном порядке что бы вывести нужно использовать метод  get();
       // $users = Phonebook::orderBy('name')->get();

        // Пагинация
        $users = Phonebook::orderBy('name')->paginate(10);

        return view('home', compact('users'));
    }
}
