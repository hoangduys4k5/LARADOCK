<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return response()->json([
            'status' => '200',
            'message' => 'Article list',
            'article' => $article,
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        if ($article) {
            return response()->json(
                [
                    'status code' => 200,
                    'message' => 'show article success',
                    'article' => $article
                ]
            );
        }
        return response()->json(
            [
                'status code' => 404,
                'message' => 'Article id ' . $id . ' not found'
            ],
            404
        );
    }

    public function store(Request $request)
    {


        $article1 = $request->validate([

            'title' => 'required',
            'body' => 'required',
        ]);

        $article = Article::create($article1);
        return response()->json([
            'status' => '201',
            'message' => 'Create Success',
            'article' => $article,
        ]);
    }

    public function update(Request $request, $id)
    {

        $article = Article::find($id);
        if ($article) {
            $field = $request->validate([
                'title' => 'required',
                'body' => 'required',
            ]);
            $article->update($field);
            return response()->json(
                [
                    'status code' => 200,
                    'message' => 'edit article success',
                    'article' => $article
                ]
            );
        }
        return response()->json(
            [
                'status code' => 404,
                'message' => 'Not found'
            ]
        );
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return response()->json(
                [
                    'status code' => 200,
                    'message' => 'delete article success'
                ],
                200
            );
        }
        return response()->json(
            [
                'status code' => 404,
                'message' => 'Not found'
            ],
            404
        );
    }
}
