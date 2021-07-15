<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Favorites extends Controller
{
    /**
     * 投稿idをお気に入り登録するアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idをお気に入り登録する
        \Auth::user()->favorites($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * 投稿idをお気に入り解除するアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
