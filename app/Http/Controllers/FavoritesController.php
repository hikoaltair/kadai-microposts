<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //micropostをお気に入りするアクション
    public function store($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 micropostをお気に入りする
        \Auth::user()->favorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    //micropostをお気に入りから外すアクション
    public function destroy($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 micropostをお気に入りから外す
        \Auth::user()->unfavorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
}

