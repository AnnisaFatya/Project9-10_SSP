<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ApiController extends Controller
{
    Public function produk_index(){
        $produk = produk::get();
        return response()->json($produk);
    }
    public function produk_store(Request $request){
        produk::insert([
            'produk'    =>$request->api_produk,
            'price'     =>$request->api_price,
            'stock'     =>$request->api_stock,
        ]);

        $response = array(
            'responseCode'    => '00',
            'responseStatus'  => 'Success'
        );
        return response()->json($response);
    }
    public function produk_by_id($id){
        $produk = produk::where('id', $id)->first();
        return response()->json($produk);
    }
   
    public function produk_update($id, Request $request){        
        $produk = Produk::where('id', $id)->update([
            'produk' => $request->api_produk,
            'price'   => $request->api_price,
            'stock'   => $request->api_stock,
        ]);
    
        $response = array(
            'responseCode'   => '00',
            'responseStatus' => 'Success Update'
        );
        return response()->json($response);
    }

    public function produk_delete($id){
        produk::where('id',$id)->delete();

        $response=array(
            'responseCode'      =>'00',
            'responseStatus'    =>'succes delete'
        );
        return response()->json($response);
    }

    public function create_product(){
        $formData = [
            'produk'       => null,
            'price'         => null,
            'stock'         => null,
        ];

        return response()->json($formData);
    }

}