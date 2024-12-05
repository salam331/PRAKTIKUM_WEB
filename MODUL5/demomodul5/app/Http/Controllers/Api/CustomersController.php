<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\customers;
use Illuminate\Http\Request;
//import Http request
use App\Http\Resources\PostResource;

//import facade Validator
use Illuminate\Support\Facades\Validator;


class CustomersController extends Controller
{
    
    public function index()
    {
        //get all posts
        $posts = customers::latest()->paginate(5);

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }
    

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'tlpn'     => 'required',
            'email'   => 'required',
            'address'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        

        //create post
        $post = customers::create([
            'name'     => $request->name,
            'tlpn'     => $request->tlpn,
            'email'   => $request->email,
            'address'   => $request->address,
        ]);

        //return response
        return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $post = customers::find($id);

        //return single post as a resource
        return new PostResource(true, 'Detail Data Post!', $post);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'tlpn'   => 'required',
            'email'  => 'required',
            'address'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = customers::find($id);

            //update post without image
            $post->update([
                'name'     => $request->name,
                'tlpn'   => $request->tlpn,
                'email'  => $request->email,
                'address'   => $request->address,
            ]);
        

        //return response
        return new PostResource(true, 'Data Post Berhasil Diubah!', $post);
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {

        //find post by ID
        $post = customers::find($id);

        //delete post
        $post->delete();

        //return response
        return new PostResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
