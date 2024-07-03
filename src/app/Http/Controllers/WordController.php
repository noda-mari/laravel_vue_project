<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Word::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Word::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        return response()->json([
            'data' => $word
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        $update = [
            'category_id' => $request->category_id,
            'word' => $request->word,
            'meaning' => $request->meaning,
            'example_sentence' => $request->example_sentence
        ];
        $item = Word::where('id', $word->id)->update($update);
        if ($item) {
            return response()->json([
                'message' => '更新しました',
            ], 200);
        } else {
            return response()->json([
                'message' => 'データが見つかりません',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        $item = Word::where('id', $word->id)->delete();
        if ($item) {
            return response()->json([
                'message' => '削除しました',
            ], 200);
        } else {
            return response()->json([
                'message' => '該当する言葉が見つかりませんでした',
            ], 404);
        }
    }
}
