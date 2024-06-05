<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show2()
    {
        return view('post.show2', [
            'title' => 'Page title',
            'text' => 'Page content',
            'text_content_1' => 'Page text content 1',
            'text_content_2' => 'Page text content 2',
            'text_content_3' => 'Page text content 3',
            'text_content_4' => 'Page text content 4',
            'name' => 'Jordan',
            'surname' => 'Mikale',
            'age' => 41,
            'style_table' => 'border:2px solid black ',
            'style_thead' => 'background-color: lightblue ',
            'input_val_1' => 'PHP',
            'input_val_2' => 'HTML',
            'input_val_3' => 'JavaScript',
            'p_val_1' => 'Blade',
            'p_val_2' => 'Laravel',
            'p_val_3' => 'React',
            'p_val_4' => 'JQuery',
            'link_href_1' => '/newpage',
            'link_href_2' => '/newpage2',
            'css_text_1' => 'green',
            'css_text_2' => 'red',
            'css_text_3' => 'blue',
        ]);
    }
}